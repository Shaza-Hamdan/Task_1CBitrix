<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!-- Link to the CSS file -->
<link rel="stylesheet" href="<?= $templateFolder ?>/build/css/common.css">

<div class="custom-news">
    <?php if (!empty($arResult["ITEMS"])): ?>
        <ul class="news-list">
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <?php
                $title = htmlspecialchars($arItem["NAME"]);
                $link = $arItem["DETAIL_PAGE_URL"];
                $date = $arItem["DISPLAY_ACTIVE_FROM"];
                $previewText = $arItem["PREVIEW_TEXT"];
                $image = $arItem["PREVIEW_PICTURE"]["SRC"] ?? $templateFolder . "/build/images/default.jpg";
                ?>
                <li class="news-item">
                    <a href="<?= $link ?>" class="news-title"><?= $title ?></a>
                    <span class="news-date"><?= $date ?></span>
                    <img src="<?= $image ?>" alt="<?= $title ?>" class="news-image">
                    <p class="news-preview"><?= $previewText ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Новостей пока нет.</p>
    <?php endif; ?>
</div>
