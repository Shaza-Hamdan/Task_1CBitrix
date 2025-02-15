<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html> 
<html lang="ru">
<head>
    <title>Новости</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?=$templateFolder?>/build/images/favicon.604825ed.ico" type="image/x-icon">
    <link href="<?=$templateFolder?>/build/css/common.css" rel="stylesheet">
</head>

<body>
<div id="barba-wrapper">
    <div class="article-list">  

        <?php 
        usort($arResult["ITEMS"], function($a, $b) {
            return $a["ID"] - $b["ID"]; // Ascending order
        });
        foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
                // Получаем путь к изображению
                $imageSrc = CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"]);
                $title = htmlspecialchars(html_entity_decode($arItem["NAME"], ENT_QUOTES, 'UTF-8'));
                $content = htmlspecialchars(html_entity_decode($arItem["PREVIEW_TEXT"], ENT_QUOTES, 'UTF-8'));
                $detailLink = $arItem["DETAIL_PAGE_URL"];
            ?>
            
            <a class="article-item article-list__item" href="<?= $detailLink ?>" data-anim="anim-3">
                <div class="article-item__background">
                    <img src="<?= $imageSrc ?>" alt="<?= htmlspecialchars($title) ?>"/>
                </div>
                <div class="article-item__wrapper">
                    <div class="article-item__title"><?= htmlspecialchars($title) ?></div>
                    <div class="article-item__content"><?= htmlspecialchars($content) ?></div>
                </div>
            </a>

        <?php endforeach; ?>

    </div>
</div>
</body>
</html>
