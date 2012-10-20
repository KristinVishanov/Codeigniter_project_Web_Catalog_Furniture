<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href='<?= base_url() ?>css/style.css' type="text/css" media="screen, projection" /> 
        <style type="text/css">

        </style> 

    </head>

    <body>

        <div id="container">
            <div class="header"><img class="leftradius" src="<?= base_url() ?>css/images/mebelisimo-logo.png" alt="e-shoping logo" width="425" height="65" />
                <img class="rightradius" src="<?= base_url() ?>css/images/menu1.jpg" alt="dqsna lenta" />
                <div class="links" ><strong>|<?= anchor("promociq", "Начало") ?>|<?= anchor("obekti/objekt", "Обекти") ?>|<?= anchor("obekti/vrazki", "За нас") ?>|<?= anchor("obekti/kontakti", "Контакти") ?>|</strong>
                </div>
            </div> 
            <div class="gorna_lenta"> 
                <div class="vhod"><a href="http://localhost/E-shoping/promociq/Vhod/" title="Вход" target="_parent"><strong>Вход</strong></a></div>
            </div>


            <div class="leftmenu">
                <ul>
                    <li><?= anchor("obekti/kuhnq", "Кухня") ?></li>
                    <li><?= anchor("obekti/spalnq", "Спалня") ?></li>
                    <li><?= anchor("obekti/hol", "Хол") ?></li>
                    <li><?= anchor("obekti/trapezariq", "Трапезария") ?></li>
                    <li><?= anchor("obekti/detska_staq", "Детска стая") ?></li>
                    <li><?= anchor("obekti/banq", "Баня") ?></li>

                </ul>




            </div>
            
         <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=207737230244396039140.0004c531e41520c369637&amp;ie=UTF8&amp;t=m&amp;ll=42.690472,23.318213&amp;spn=0.003785,0.006866&amp;z=17&amp;output=embed"></iframe><br /><small>Вижте <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=207737230244396039140.0004c531e41520c369637&amp;ie=UTF8&amp;t=m&amp;ll=42.690472,23.318213&amp;spn=0.003785,0.006866&amp;z=17&amp;source=embed" style="color: #0000FF;text-align:left; text-decoration: none;">Mebelisimo София</a> </small>
         
        <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=207737230244396039140.0004c5319dda995f12a4b&amp;ie=UTF8&amp;t=m&amp;ll=42.019043,23.090258&amp;spn=0.003826,0.006866&amp;z=17&amp;output=embed"></iframe><br /><small>Вижте <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=207737230244396039140.0004c5319dda995f12a4b&amp;ie=UTF8&amp;t=m&amp;ll=42.019043,23.090258&amp;spn=0.003826,0.006866&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left;text-decoration: none;">Mebelisimo Благоевград</a></small>
         <div class="footer"><img class="footerimageradius"  src="<?= base_url() ?>css/images/footer.jpg" alt="footer" /> </div>
    </body>
</html>

