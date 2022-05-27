<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="mobile-web-app-capable" content="yes">
        <!-- Add to home screen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Ici on link les différents snippets issus entre autre de meta-knight, plugin qui sert pour le référencement du site -->
        <?php snippet('meta_information'); ?>
        <?php snippet("header.metas"); ?>
        <?php snippet('robots'); ?>
        
        <!-- lien vers plusieurs fichiers CSS, on commence toujours par le reset.css et on finit toujours par le index.css -->
        <?= css(["assets/css/reset.css", "assets/plyr/plyr.css", "assets/css/index.css"]) ?>
    
    </head>

    <body 
        class="<?php echo $page->title()->slug() ?>"
        data-login="<?php e($kirby->user(),'true', 'false') ?>"
        data-page-id="<?= $page->slug() ?>"
        data-template="<?= $page->template() ?>"
        data-intended-template="<?= $page->intendedTemplate() ?>">
        
        <div class="page">