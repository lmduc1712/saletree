/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * update level học viên
 */
function updateLevel(level) {
    switch (level) {
        case 'l1':
            if ($('#l1').prop('checked')) {
                enableLv(2);
                disableLv(9);
            } else {
                disableLv(2);
                enableLv(9);
            }
            break;
        case 'l2':
            if (!($('#l22').prop('checked')|| $('#l20').prop('checked'))) {
                enableLv(3);
                disableLv(9);
            } else {
                if ($('#l22').prop('checked')) {
                    enableLv(9);
                } else {
                    disableLv(9);
                }
                disableLv(3);
            }
            break;
        case 'l3':
            if (!($('#l32').prop('checked')|| $('#l30').prop('checked'))) {
                enableLv(4);
                disableLv(9);
            } else {
                disableLv(4);
                if ($('#l32').prop('checked')) {
                    enableLv(9);
                } else {
                    disableLv(9);
                }
            }
            break;
        case 'l4':
            if (!($('#l46').prop('checked') || $('#l40').prop('checked'))) {
                enableLv(5);
                disableLv(9);
            } else {
                disableLv(5);
                if ($('#l46').prop('checked')) {
                    enableLv(9);
                } else {
                    disableLv(9);
                }
            }
            break;
        case 'l5':
            if (!($('#l52').prop('checked')|| $('#l50').prop('checked'))) {
                enableLv(6);
                disableLv(9);
            } else {
                disableLv(6);
                if ($('#l52').prop('checked')) {
                    enableLv(9);
                } else {
                    disableLv(9);
                }
            }
            break;
        case 'l6':
            if (!($('#l62').prop('checked')|| $('#l60').prop('checked'))) {
                enableLv(7);
                disableLv(9);
            } else {
                disableLv(7);
                if ($('#l62').prop('checked')) {
                    enableLv(9);
                } else {
                    disableLv(9);
                }
            }
            break;
        case 'l7':
            if ($('#l7').prop('checked')) {
                enableLv(9);
            } else {
                disableLv(9);
            }
    }
}
/**
 * disable level by selection
 */
function disableLv(i) {
    switch (i) {
        case 2:
            $('.l2').prop('disabled', true);
            $('.l2').attr('checked', false);
        case 3:
            $('.l3').prop('disabled', true);
            $('.l3').attr('checked', false);
        case 4:
            $('.l4').prop('disabled', true);
            $('.l4').attr('checked', false);
        case 5:
            $('.l5').prop('disabled', true);
            $('.l5').attr('checked', false);
        case 6:
            $('.l6').prop('disabled', true);
            $('.l6').attr('checked', false);
        case 7:
            $('.l7').prop('disabled', true);
            $('#l7_').prop('disabled', true);
            $('.l7').attr('checked', false);
            $('.l8').prop('disabled', true);
            $('.l8').attr('checked', false);
            break;
        case 9:
            $('#giai-trinh').prop('disabled', true);
            $('#giai-trinh').val('');
            break;
    }
}
/**
 * enable level by selection
 */
function enableLv(i) {
    switch (i) {
        case 2:
            $('.l2').prop('disabled', false);
            break;
        case 3:
            $('.l3').prop('disabled', false);
            break;
        case 4:
            $('.l4').prop('disabled', false);
            break;
        case 5:
            $('.l5').prop('disabled', false);
            break;
        case 6:
            $('.l6').prop('disabled', false);
            break;
        case 7:
            $('.l7').prop('disabled', false);
            $('#l7_').prop('disabled', false);
            $('.l8').prop('disabled', false);
            break;
        case 9:
            $('#giai-trinh').prop('disabled', false);
//            $('#giai-trinh').val('');
            break;
    }
}
/**
 * Check status of level
 */
function checkLevel() {
    if ($('#l1').prop('checked')) {
        enableLv(2);
    }
    if ($('#l21').prop('checked')) {
        enableLv(3);
    }
    if ($('#l31').prop('checked')) {
        enableLv(4);
    }
    if ($('#l41').prop('checked') || $('#l42').prop('checked') || $('#l43').prop('checked') 
            || $('#l44').prop('checked') || $('#l45').prop('checked')) {
        enableLv(5);
    }
    if ($('#l51').prop('checked') || $('#l53').prop('checked')) {
        enableLv(6);
    }
    if ($('#l61').prop('checked') || $('#l63').prop('checked')) {
        enableLv(7);
    }
    if ($('#l7').prop('checked')) {
        enableLv(9);
    }
}

$(document).ready(function() {
    checkLevel();
});


