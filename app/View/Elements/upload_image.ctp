<?php 
for($i = 1; $i <= $number; $i++):
    if ($i == 1) {
        $name = $field;
    } else {
        $name = $field . $i;
    }
    if (isset($data) && isset($data[$i - 1])) {
        $imgPath = $data[$i - 1];
    } else {
        $imgPath = '';
    }
    $wrapId = 'upload-area-'.$name;
?>
    <div class="upload-image-area" id="<?php echo $wrapId ?>">
        <div class="col-md-6 form-group">
            <?php 
            echo $this->Form->hidden($name, array(
                'type' => 'text',
                'class' => 'form-control img-path',
                'readonly' => true
            ));
            ?>
            <input type="text" class="form-control img-client-path" readonly="readonly" /> 
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 form-group">
            <div class="left img-thumbnail">
                <?php 
                if (!empty($imgPath)) {
                    echo $this->Html->image($imgPath, array('width' => 162, 'height' => 162));
                } else {
                    echo '<img width="162" height="162" />';
                }
                ?>
            </div>
            <div class="left">
                <input class="fileupload-input hidden" type="file" name="files" single title="" />
                <button type="button" class="btn btn-action btn-primary btn-browse">参照</button>
                <button type="button" class="btn btn-action btn-success btn-upload">アップロード</button>
                <button type="button" class="btn btn-action btn-danger hidden btn-delete">取消</button>
            </div>
        </div>
    </div>
<?php endfor; ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#<?php echo $wrapId ?> .btn-browse').click(function(){
            $(this).siblings('.fileupload-input').trigger('click');
            return false;
        });

        // check if has image, display delete button
        $('#<?php echo $wrapId ?> .img-thumbnail img').each(function(){
            var src = $(this).attr('src');

            if (typeof src !== typeof undefined && src !== false) {
                var parent = $(this).parents('.upload-image-area');
                parent.find('.btn-delete').removeClass('hidden');
            }
        });

        // using fileupload plugin for upload file by ajax
        $('#<?php echo $wrapId ?> .fileupload-input').fileupload({
            url: '<?php echo Router::url(array('controller' => 'images', 'action' => 'upload')) ?>',
            autoUpload: false,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            dataType: 'json',
            add: function (e, data) {
                var parent = $(this).parents('.upload-image-area');
                parent.find('.img-client-path').val(data['fileInput'][0]['value']);
                
                $('.btn-upload').off('click').on('click', function(){
                	if (typeof data.files !== 'undefined' && data.files.length > 0) {
                		data.submit();
                	}
                });
            },
            done: function (e, data) {
                var res = data.result;
                if (res.status === 'ok') {
                    // display image after upload completed                    
                    var parent = $(this).parents('.upload-image-area');
                    parent.find('.img-path').val(res.uploadedImg.relative_path);
                    parent.find('.img-thumbnail img').attr('src', res.uploadedImg.full_path);
                    parent.find('.btn-delete').removeClass('hidden');

                    data.files.length = 0;
                } else {
                    $('#error-messages').attr('class', 'alert alert-danger');
                    $('#error-messages ul').html('<li>' + res.message + '</li>');
                }
            }
        });

        // handle event when click delete image button
        $('#<?php echo $wrapId ?> .btn-delete').click(function(){
            var parent = $(this).parents('.upload-image-area');
            var imgPath = parent.find('.img-path').val();

            if (imgPath == '') {
                return;
            }

            $.ajax({
                url: '<?php echo Router::url(array('controller' => 'images', 'action' => 'delete')) ?>',
                type: 'POST',
                data: {'img_path': imgPath},
                dataType: 'json',
                success: function(data) {
                    if (data.status === 'ok') {
                        // reset after delete completed
                        parent.find('.btn-delete').addClass('hidden');
                        parent.find('.img-path, .img-client-path').val('');
                        parent.find('.img-thumbnail img').removeAttr('src');
                    } else {
                        $('#error-messages').attr('class', 'alert alert-danger');
                        $('#error-messages ul').html('<li>' + res.message + '</li>');
                    }
                }
            });
        });
    });
</script>
