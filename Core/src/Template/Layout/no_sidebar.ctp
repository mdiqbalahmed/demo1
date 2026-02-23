<?php

use Cake\Core\Configure;

$siteTemplate = Configure::read('Site.template');
$siteTitle = Configure::read('Site.title');
$footerOption = Configure::read('Footer.select');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?= $this->fetch('title') ?> - <?= $siteTitle ?></title>
    <?php
    // Assigning CSS from the webroot/css folder
    $css = [
        'style',
        'gallery',
        'responsive',
        'Croogo/Core.core/croogo-admin'
    ];
    echo $this->Html->css($css);

    // Font Awesome CSS from CDN
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

    // Assigning JS from the webroot/js folder
    $js = ['script'];
    echo $this->Html->script($js);

    $rightRegionBlocks = $this->Regions->blocks('right');
    echo $this->Meta->meta();
    echo $this->Layout->feed();
    echo $this->Layout->js();

    // Load additional blocks if needed
    echo $this->Blocks->get('css');
    echo $this->Blocks->get('script');
    ?>
</head>

<style>
    #fullHeight {
        display: flex;
        flex: 1;
        overflow: hidden;
    }
</style>

<body>
    <div id="fullHeight">
        <?php
        if ($siteTemplate == 1) {
            echo $this->element('gov_no_sidebar_element');
        } else {
            echo $this->element('no_sidebar_element');
        }
        ?>
    </div>
</body>

</html>