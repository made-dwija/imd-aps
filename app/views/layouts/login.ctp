<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Administrator</title>
<?php echo $html->css('login-box'); ?>
</head>
<body>
    <div>
    
    <div id="login-box">
    <H2>Login</H2>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    <br />
    <br />
    <?php echo $form->create('User', array('action' => 'login')); ?>
    <div id="login-box-name" style="margin-top:20px;"></div><div id="login-box-field" style="margin-top:20px;">
        <?php echo $form->input('username',array('size'=>'30')); ?>
    </div>
    <div id="login-box-name"></div><div id="login-box-field">
        <?php echo $form->input('password',array('type'=>'password','size'=>'30')); ?>
    </div>
    <br />
    <?php echo $form->submit('login-btn.png', array('id'=>'button',
                                                    'name'=>'button',
                                                    'style'=>'margin-left:90px;'      
                                                    )); ?>
    <?php echo $form->end();?>
    <span class="login-box-options"><center><?php echo $this->Session->flash(); ?></center></span>
    </div>
    </div>
</body>
</html>
