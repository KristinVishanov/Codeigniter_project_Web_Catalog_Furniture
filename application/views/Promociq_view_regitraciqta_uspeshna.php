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
                <div class="gorna_lenta"> </div>
                <h1><p>Регистрацията е успешна</p></h1><br />
                <h2>  <p>Имате достъп до пълния каталог на фирмата, които включва описание на мебелите и цени.</p></h2> <br />
                <h3>  <p>Моля влезте с потребителското си име и прола.</p></h3> <br />
                <div class="vhod"><a href="http://localhost/E-shoping/promociq/Vhod/" title="Вход" target="_parent"><strong>Вход</strong></a></div>
            </div>
            <div class="footer"><img class="footerimageradius"  src="<?= base_url() ?>css/images/footer.jpg" alt="footer" /> </div>
        </div>
    </body>
</html>
