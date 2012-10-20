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
                    <div class="vhod"><strong>Добре дошъл, <?php echo $this->session->userdata('username'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor('promociq/logout', 'Изход'); ?></strong></div>
                </div>

                <div class="content">
                    <div id="pagination"><?= $pagination; ?></div>
                    <table width="950" border="1px " align="center">

                        <tr>
                            <th scope="col"><a href="http://localhost/E-shoping/promociq/index/title/<?php echo (($sort_order == 'desc') ? 'asc' : 'desc'); ?>">Име</a></th>
                            <th scope="col"><a href="http://localhost/E-shoping/promociq/index/description/<?php echo (($sort_order == 'desc') ? 'asc' : 'desc'); ?>">Описание</a></th>
                            <th scope="col"><a href="http://localhost/E-shoping/promociq/index/category/<?php echo (($sort_order == 'desc') ? 'asc' : 'desc'); ?>">Категория</a></th>
                            <th scope="col"><a href="http://localhost/E-shoping/promociq/index/price/<?php echo (($sort_order == 'desc') ? 'asc' : 'desc'); ?>">Цена</a></th>
                            <th scope="col">Снимка</a></th>

                        </tr>

                        <?php foreach ($rows as $row): ?>   
                            <tr>
                                <td><?= $row->title; ?></td>
                                <td><?= $row->description; ?></td>
                                <td><?= $row->category; ?></td>
                                <td><?= $row->price; ?>лв.</td>
                                <td><?php
                        echo img(array(
                            'src' => 'images/' . $row->image,
                            'class' => 'thumb',
                        ));
                            ?></td>
                            </tr>
<?php endforeach; ?>                   

                    </table>

                    <div id="pagination"><?= $pagination; ?></div>

                </div>

                <div class="footer"><img class="footerimageradius"  src="<?= base_url() ?>css/images/footer.jpg" alt="footer" /> </div>
            </div>

        </div>
    </body>
</html>
