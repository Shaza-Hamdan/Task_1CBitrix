<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php $APPLICATION->ShowHead(); ?>

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/styles.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/template_styles.css">
</head>
<body>
    <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

    <header>
        <div class="container">
            <div class="logo">
                <a href="/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Site Logo">
                </a>
            </div>

            <nav>
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:menu", 
                    "top_menu", 
                    array(
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "ALLOW_MULTI_SELECT" => "N"
                    ),
                    false
                );
                ?>
            </nav>
        </div>
    </header>

    <main>
        