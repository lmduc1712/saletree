/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Object.create support test, and fallback for browsers without it
if (typeof Object.create !== "function") {
    Object.create = function (o) {
        function F() {
        }
        F.prototype = o;
        return new F();
    };
}

// Create a plugin based on a defined object
$.plugin = function (name, object) {
    $.fn[name] = function (options) {
        return this.each(function () {
            if (!$.data(this, name)) {
                $.data(this, name, Object.create(object).init(
                        options, this));
            }
        });
    };
};

/*
 * plugin for add form
 */
var addForm = {
    init: function (options, elem) {
        // Mix in the passed-in options with the default options
        this.options = $.extend({}, this.options, options);

        // Save the element reference, both as a jQuery
        // reference and a normal reference
        this.elem = elem;
        this.$elem = $(elem);

        // Build the DOM's initial structure

        this.$elem.on('click', '#btn-register', $.proxy(this.nextToConfirm, this));
        this.$elem.on('click', '#btn-confirm', $.proxy(this.saveData, this));
        this.$elem.on('click', '#btn-back', $.proxy(this.nextToEdit, this));
        this.$elem.on('click', '#btn-close', $.proxy(this.onCloseWindow, this));

        this.showButton();
        // return this so that we can chain and use the bridge with less code.
        return this;
    },
    options: {
        rules: [
            {
                'object': '.not-empty',
                'regex': /([^\s])/,
                'message': '※印の項目は必ず入力して下さい。'
            },
            {
                'object': '.must-integer',
                'regex': /^[1-9]\d*$/
            },
            {
                'object': '.must-numeric',
                'regex': /^[0-9]\d*$/
            },
            {
                'object': '.must-time-format',
                'regex': /^([01]?[0-9]|2[0-3]):[0-5][0-9]$/,
                'message': '入力した営業時間に不備があります。'
            },
            {
                'object': '.must-email',
                'regex': /^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/,
                'message': 'メールアドレスに不備があります。'
            },
            {
                'object': '.input-postcode',
                'regex': /^[0-9]{3}-[0-9]{4}$/,
                'type': 'multiple'
            },
            {
                'object': '.input-tel',
                'regex': /^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/,
                'type': 'multiple'
            },
            {
                'object': '.input-fax',
                'regex': /^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/,
                'type': 'multiple'
            }
        ]
    },
    addRule: function (rule) {
        this.options.rules.push(rule);
    },
    nextToConfirm: function () {
        if (this.validateData()) {
            this.formData = this.$elem.serialize();
            this.$elem.find('input, textarea, select, .btn-action').attr('disabled', true);
            $('#btn-register, #btn-close').hide();
            $('#btn-confirm, #btn-back').show();
            this.changeTitle(this.options['confirmName']);
        }
    },
    nextToEdit: function () {
        this.$elem.find('input, textarea, select, .btn-action').removeAttr('disabled');
        $('#btn-register, #btn-close').show();
        $('#btn-confirm, #btn-back').hide();
        this.changeTitle(this.options['registerName']);
    },
    validateData: function () {
        var flag = true;
        $('.has-error').removeClass('has-error');

        if (typeof this.options.rules === 'undefined' || this.options.rules.length === 0) {
            return true;
        }

        var errors = [], targets, rule, reg, flagRule, value, type;
        for (var i = 0, l = this.options.rules.length; i < l; i++) {
            rule = this.options.rules[i];

            if (typeof rule.type === 'undefined') {
                rule.type = 'single';
            }

            flagRule = true;
            if (rule.type === 'relative') {
                flagRule = flagRule && this.checkRelative(rule);
            }

            flagRule = flagRule && this.check(rule);

            if (!flagRule) {
                flag = false;
                if (typeof rule.message === 'string' && rule.message !== '') {
                    errors.push(rule.message);
                }

                if (!flag && rule.object === '.not-empty') {
                    break;
                }
            }
        }

        // display error message
        if (flag) {
            $('.has-error').removeClass('has-error');
            this.removeMessage();
        } else if (errors.length > 0) {
            this.showMessage(errors);
        }

        return flag;
    },
    /**
     * validate by rule
     * @param  object rule
     * @return boolean
     */
    check: function (rule) {
        var targets = this.$elem.find(rule.object);
        var reg = rule.regex;

        if (!reg) {
            return true;
        }

        var flagRule = true, value;

        if (targets.length > 0) {
            if (rule.type === 'multiple') {
                var tmp = [];
                targets.each(function () {
                    value = $(this).val();
                    if (typeof value === 'string') {
                        value.trim();
                    }

                    if (value !== '') {
                        tmp.push(value);
                    }
                });

                if (tmp.length > 0) {
                    var str = tmp.join('-');
                    if (!reg.test(str)) {
                        flagRule = false;
                        targets.each(function () {
                            $(this).parent().addClass('has-error');
                        });
                    }
                }
            } else {
                targets.each(function () {
                    value = $(this).val();
                    if (typeof value === 'string') {
                        value.trim();
                    }

                    if (value === '' && rule.object !== '.not-empty') {
                        return;
                    }

                    if (!reg.test(value)) {
                        flagRule = false;
                        $(this).parent().addClass('has-error');
                    }
                });
            }
        }

        return flagRule;
    },
    checkRelative: function (rule) {
        var targets = this.$elem.find(rule.object);
        return rule.callback(targets);
    },
    beforeSaveData: function () {
        return true;
    },
    saveData: function () {
        if (!this.beforeSaveData()) {
            return false;
        }

        var that = this;
        $('#btn-confirm').attr('disabled', true);
        $.ajax({
            url: this.$elem.attr('action'),
            type: 'POST',
            data: this.formData,
            dataType: 'json',
            success: function (data) {
                if (data.status === 'ok') {
                    // only show btn-close, remove onclick attr
                    $('#btn-confirm, #btn-back').hide();

                    $('#btn-close').show();

                    //delete the message so that the window will be closed without asking
                    //(since the data is saved)
                    delete that.options.confirmCloseMessage;

                    that.changeTitle(that.options['completedName']);

                    if (typeof data.messages !== 'undefined') {
                        that.showMessage(data.messages, 'success');
                    }

                    if (typeof that.options.onComplete !== 'undefined') {
                        that.options.onComplete(data);
                    }
                } else {
                    that.showMessage(data.messages, 'error');
                }

                $('#btn-confirm').removeAttr('disabled');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                $('#btn-confirm').removeAttr('disabled');
            }
        });
    },
    showButton: function ( ) {
        $('#btn-confirm, #btn-back').hide();
    },
    onCloseWindow: function (e) {
        if ($('#btn-close').html() !== '閉じる') {
            return;
        }
        if (typeof this.options['confirmCloseMessage'] === 'undefined') {
            window.close();
            return;
        }
        if (confirm(this.options['confirmCloseMessage'])) {
            window.close();
        } else {
            e.preventDefault();
            return;
        }
    },
    /*
     * show error | success message
     * @params {array} messages
     * @params {string} type
     * 
     * @return void
     */
    showMessage: function (messages, type) {
        var msgs = '';
        if (messages.length > 0) {
            for (var i in messages) {
                msgs += '<li>' + messages[i] + '</li>';
            }
        }

        if (type === 'success') {
            $('#error-messages').attr('class', 'alert alert-success');
            $('#error-messages ul').html(msgs);
        } else {
            $('#error-messages').attr('class', 'alert alert-danger');
            $('#error-messages ul').html(msgs);
        }
    },
    removeMessage: function () {
        $('#error-messages').attr('class', '');
        $('#error-messages ul').html('');
    },
    changeTitle: function (title) {
        if (typeof title !== 'undefined' && title !== '') {
            $('#panel-title').html(title);
            document.title = title;
        }
    }
};

$.plugin('addForm', addForm);

$(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        language: 'vi'
    });

    $('.from-datepicker').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        language: 'vi'
    }).on('changeDate', function (selected) {
        var startDate = new Date(selected.date.valueOf());
        startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
        $(this).siblings('.to-datepicker').datepicker('setStartDate', startDate);
    }).on('mousedown', function () {
        $(this).datepicker('setEndDate', $(this).siblings('.to-datepicker').datepicker('getDate'))
    });

    $('.to-datepicker').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        language: 'vi'
    }).on('changeDate', function (selected) {
        var endDate = new Date(selected.date.valueOf());
        endDate.setDate(endDate.getDate(new Date(selected.date.valueOf())));
        $(this).siblings('.from-datepicker').datepicker('setEndDate', endDate);
    }).on('mousedown', function () {
        $(this).datepicker('setStartDate', $(this).siblings('.from-datepicker').datepicker('getDate'));
    });

    $('.from-today-datepicker').each(function () {
        $(this).datepicker('setStartDate', Date());
    });

    //Set the class to closable-link to open tab that can be closed by js
    $('.closable-link').click(function (e) {
        switch (e.which)
        {
            case 1: //left Click
                e.preventDefault();
                window.open($(this).attr('href'), "_blank");
                break;
            case 2: //middle Click
                e.preventDefault();
                break;
        }
        return false;
    });

    /**
     * using jquery.alphanumeric.js
     * - .half-width, .must-email: allows ASCII characters (for email);
     * - .only-number, .must-numeric, input[type=number]: allows numbers only;
     * - .input-time,.must-time-format: allows number and ':' only;
     * - .must-float: allows decimal numbers (0-9 and '.')
     */
    $('.half-width, .must-email').alphanumeric({ichars: ""});
    $('.must-numeric, .only-number, input[type=number]').numeric();
    $('.input-time, .must-time-format').numeric({allow: ":"});
    $('.must-float').numeric({allow: "."});

    /**
     * check full-width on Chrome
     */
    var supportIMEMode = ('ime-mode' in document.body.style);
    $(document).on('keydown blur', '.half-width', function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        // Allow: home, end, left, right
                                (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }

                var target = $(this);
                if (supportIMEMode) {
                    window.setTimeout(function () {
                        var caretPos = target.caret();
                        target.val(filterSpecificClass(target.val(), target));
                        if (e.type === "keydown") {
                            if (appendColonSemaphore) {
                                target.caret(caretPos + 1);
                                appendColonSemaphore = false;
                            } else {
                                target.caret(caretPos);
                            }
                        }
                    }, 1);
                    return;
                }

                window.setTimeout(function () {
                    if (e.type === "keydown") {
                        filterMBC(target, target.caret());
                    } else {
                        filterMBC(target);
                    }
                }, 1);
            }).on('paste', '.half-width', function () {
        // 2バイト文字が入力されたら削除
        var target = jQuery(this);
        window.setTimeout(function () {
            filterMBC(target);
        }, 1);
    });

    // Auto loading area
    $('.prefectures-ajax').on('change', function () {
        var prefectureId = $(this).val();
        $.ajax({
            url: rootUrl + "lunches/getAreas/" + prefectureId,
            type: "GET",
            success: function (data) {
                if (data != '') {
                    $(".areas").empty();

                    $(".areas").append('<option value="">エリアを選択</option>');

                    var areas = JSON.parse(data);
                    for (var label in areas) {
                        var txt = '<optgroup label="' + label + '">';

                        for (var area in areas[label]) {
                            txt += '<option value="' + area + '">' + areas[label][area] + '</option>'
                        }
                        txt += '</optgroup>';

                        $(".areas").append(txt);
                    }
                }
            },
            error: function () {

            }
        });
    });

    // Auto loading area block
    $('.areas-ajax').on('change', function () {
        var areaId = $(this).val();
        $.ajax({
            url: rootUrl + "areas/getAreaBlocks/" + areaId,
            type: "GET",
            success: function (data) {
                if (data != '') {
                    $(".area-block").empty();

                    $(".area-block").append('<option value=""></option>');

                    var areaBlocks = JSON.parse(data);
                    var txt = '';
                    for (var index in areaBlocks) {
                        txt += '<option value="' + areaBlocks[index].AreaBlock.id + '">' + areaBlocks[index].AreaBlock.town_name + '</option>';
                    }

                    $(".area-block").append(txt);
                }
            },
            error: function () {

            }
        });
    });
});

function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + (Math.round(n * k) / k)
                        .toFixed(prec);
            };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

// 日本語(マルチバイト文字)を削除した値を返す
function filterMBC(target, caretPos) {
    var src = target.val();
    var str = '';
    src = escape(src);
    for (i = 0; i < src.length; i++) {
        var chr = src.charAt(i);
        if (chr == '%') {
            var nchr = src.charAt(++i);
            if (nchr == 'u') {
                // 2バイト文字をスキップ
                i += 4;
            } else {
                // 1バイト文字を追加
                str += chr
                str += nchr
                str += src.charAt(++i);
            }
            continue;
        }
        str += chr;
    }
    target.val(filterSpecificClass(unescape(str), target));
    if (typeof caretPos !== 'undefined') {
        if (appendColonSemaphore) {
            target.caret(caretPos + 1);
            appendColonSemaphore = false;
        } else {
            target.caret(caretPos);
        }
    }
//    return unescape(str);
}

//================== Half-width usage ===============================
// *IMPORTANT: the inputfield MUST BE type 'text' (or not defined in the HtmlForm Helper is 'text')
// For the half-width field, it must has the .half-width class,
// besides, depends on the type of the current field, you may want to
// add these classes below to it.
var inputFilters = {
    "must-point-rank": "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", // Capital character only
    "must-numeric": "0123456789", // number only
    "only-number": "0123456789", // number only (same as must-numeric)
    "must-date": "0123456789-", // number and '-'
    "must-postcode": "0123456789-", // number and '-'
    "must-tel": "0123456789-", // number and '-'
    "must-time-format": "0123456789:", // number and ':' (auto add : after 2 digits)
    "must-float": "0123456789."         // number and '.'
};
var appendColonSemaphore = false;
function filterSpecificClass(src, target) {
    for (var key in inputFilters) {
        if (target.hasClass(key)) {
            var str = '';
            for (var i = 0, len = src.length; i < len; i++) {
                if (inputFilters[key].indexOf(src[i]) !== -1) {
                    if (key === 'must-point-rank') {
                        str += src[i].toUpperCase();
                    } else {
                        str += src[i];
                    }
                }
                if (i === 1 && key === 'must-time-format'
                        && typeof src[2] === 'undefined'
                        && src[1] !== ":") {
                    str += ":";
                    appendColonSemaphore = true;
                }
            }
            src = str;
        }
    }
    return src;
}

// Validate time with format HH:MM
function validateTime(time) {
    var reg = /^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
    if (time !== '' && !reg.test(time)) {
        return false;
    } else {
        return true;
    }
}

// Validate date with format YYYY-MM-DD
function validateDate(date) {
    var reg = /^(?:(1|2)[0-9]{3})-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])$/;
    if (date !== '' && !reg.test(date)) {
        return false;
    } else {
        return true;
    }
}

// Validate tel with format XX(XX)-XX(XX)-XXX(X)
function validateTel(tel) {
    var reg = /^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/;
    if (tel !== '' && !reg.test(tel)) {
        return false;
    } else {
        return true;
    }
}

// Validate postcode with format XXX-XXXX
function validatePostCode(postcode) {
    var reg = /^[0-9]{3}-[0-9]{4}$/;
    if (postcode !== '' && !reg.test(postcode)) {
        return false;
    } else {
        return true;
    }
}

function onChangePrefecture() {
    var prefectureID = $("#prefecture_id").val();
    if (prefectureID == '') {
        $("#city").empty();
        $("#city").append("<option value=\"\"></option>");
    } else {
        $.ajax({
            url: getAreaUrl + "/" + prefectureID,
            type: "POST",
            success: function (data) {
                if (data != '') {
                    $("#city").empty();
                    //TODO: xu li data tra ve.
                    var areas = JSON.parse(data);
                    $("#city").append("<option value=\"\"></option>");
                    for (var area in areas) {
                        $("#city").append("<option value=\"" + area + "\">" + area + "</option>");
                    }
                } else {
                    $("#city").empty();
                }
            },
            error: function () {
            }
        });
    }
}

/**
 * validate time range
 * 
 * @param  DomElement targets Input Time From Element
 * @return boolean 
 */
var validateTimeRange = function (targets) {
    var elmFrom = $(targets);
    var elmTo = $(targets).siblings('.input-time');

    var timeFrom = elmFrom.val();
    var timeTo = elmTo.val();

    if (timeFrom.length < 5) {
        timeFrom = '0' + timeFrom;
    }

    if (timeTo.length < 5) {
        timeTo = '0' + timeTo;
    }

    var flag = timeFrom < timeTo;

    if (!flag) {
        elmFrom.parent().addClass('has-error');
        elmTo.parent().addClass('has-error');
    }

    return flag;
}

function changeColor(tableRow, highLight) {
    if (highLight)
    {
        tableRow.style.backgroundColor = '#8CB8EF';
    }
    else
    {
        tableRow.style.backgroundColor = 'white';
    }

}
function DoNav(theUrl)
{
    document.location.href = theUrl;
}

/**
 * Go back to previous page
 */
function goback() {
    var step = -$('#back-count').val();
    if (isNaN(step)) {
        step = -1;
    }
    history.go(step);
}
