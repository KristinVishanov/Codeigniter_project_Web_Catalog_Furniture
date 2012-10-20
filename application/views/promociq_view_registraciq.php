<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href='<?= base_url() ?>css/style.css' type="text/css" media="screen, projection" /> 
     </head>
    <body>

        <div id="container">
            <div class="header"><img class="leftradius" src="<?= base_url() ?>css/images/mebelisimo-logo.png" alt="e-shoping logo" width="425" height="65" />
                <img class="rightradius" src="<?= base_url() ?>css/images/menu1.jpg" alt="dqsna lenta" />
                <div class="links" ><strong>|<?= anchor("promociq", "Начало") ?>|<?= anchor("obekti/objekt", "Обекти") ?>|<?= anchor("obekti/vrazki", "За нас") ?>|<?= anchor("obekti/kontakti", "Контакти") ?>|</strong>
                </div>
            </div> 

            <div class="content">
                <div class="gorna_lenta">

                </div>
                <div class="reg">
                    <center> <h1>Регистрация</h1></center>
                    <fieldset>
                        <legend>Лична информация</legend>

                        <?php echo form_open('promociq/create_member'); ?>
                        <h>Име</h>
                        <?php echo form_input('first_name', set_value('first_name')); ?>
                        <h>Презиме</h>
                        <?php echo form_input('last_name', set_value('last_name')); ?>
                        <h>Имейл</h>
                        <?php echo form_input('email_adres', set_value('email_adres')); ?>

                    </fieldset>
                    <fieldset>
                        <legend>Регистрация</legend>
                        <h>Потребителско име</h>
                        <?php echo form_input('username', set_value('username')); ?>
                        <h>Парола</h>
                        <?php echo form_input('password', set_value('password')); ?>
                        <h>Повтори парола</h>
                        <?php echo form_password('password2'); ?>
                        <?php echo form_submit('submit', 'Регистрация'); ?>

                        <?php echo validation_errors('<p class="error">'); ?>
                    </fieldset>

                </div>
            </div>
            <div class="footer"><img class="footerimageradius"  src="<?= base_url() ?>css/images/footer.jpg" alt="footer" /> </div>
        </div>
    </body>
</html>

