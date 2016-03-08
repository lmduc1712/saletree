<div class="users-form">
<?php echo $this->Form->create('user'); ?>
    <legend>
        <?php echo __('<div id="topbar" class="titlebar">Đăng nhập</div>'); ?>
    </legend>
    <div align="center">
        <?php echo $this->Session->flash(); ?>
        <p>Hãy nhập tên đăng nhập và mật khẩu để đăng nhập vào hệ thống.</p>
        <fieldset>
            <table cellpadding ="0" cellspacing="0">
                <tr>
                    <td style="padding-top: 20px; width: 40%;">Tên đăng nhập</td>
                    <td>
                        <?php
                        echo $this->Form->input(
                            'username',
                            array(
                                'label' => '',
                                'id'=>'login-input',
                                'maxlength' => 100,
                                'class' => 'form-control half-width',
                                'required' => false
                            )
                        );
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 20px;">Mật khẩu</td>
                    <td>
                        <?php
                        echo $this->Form->input(
                            'password',
                            array(
                                'label' => '',
                                'id'=>'login-input',
                                'maxlength' => 255,
                                'class' => 'form-control half-width',
                                'required' => false));?></td>    
                </tr>
                <tr>
                    <td align="center" colspan="2" style="padding-top: 20px">
                        <div align="center">
                            <?php
                            $options = array(
                                'label' => 'Đăng nhập',
                                'id' => 'login-btn',
                                'class' => 'btn btn-primary',
                                'div' => false
                            );
                            echo $this->Form->end($options);
                            ?>
                        </div>
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
</div>
