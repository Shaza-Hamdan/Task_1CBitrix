<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php $APPLICATION->ShowHead(); ?>

    <!-- Link to custom styles -->
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/common.css"></head>
<body>
    <!-- Show the admin control panel -->
    <?php $APPLICATION->ShowPanel(); ?>

    <header>

        <div class="container">
            <div class="logo">
               <img src="<?= SITE_TEMPLATE_PATH ?>/images/userpic.gif" alt="Site Logo">  
            </div>
            <nav>
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:menu", 
                    "top", 
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
	<section class="banner">
        <img src="<?= SITE_TEMPLATE_PATH ?>/images/167521-yellow-grey-and-blue-grunge-polygon-abstract-background-image.jpg" alt="Banner Image">
    </section>

	 <section class="infoblock-content">
       <?php
$APPLICATION->IncludeComponent(
    "bitrix:news.list",  
	"Custom_news",         
    array(
        "IBLOCK_TYPE" => "новыеновости", 
        "IBLOCK_ID" => 4,                  
        "NEWS_COUNT" => 10,                
        "SORT_BY1" => "ACTIVE_FROM",       
        "SORT_ORDER1" => "DESC",          
        "CACHE_TYPE" => "A",               
        "CACHE_TIME" => 3600,              
    ),
    false 
);
?>
    </section>

    <main>
        <!-- Main content area -->
	<div id="mocha">
        <div id="work_area">
            