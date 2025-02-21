<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="css/common.css" rel="stylesheet">
</head>

<body>

<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title">Связаться</div>
        <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и расчет цены с учетом ваших требований</div>
    </div>

    <form class="contact-form__form" method="post" action="/success.php" enctype="multipart/form-data">
        <?= bitrix_sessid_post() ?>

        <input type="hidden" name="WEB_FORM_ID" value="<?= $arParams['WEB_FORM_ID'] ?>">

        <!-- Input Fields -->
        <div class="contact-form__form-inputs">
            <?php 
            $count = 0; // Counter to track the first four fields
            foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion): 
                $fieldType = $arQuestion["STRUCTURE"][0]["FIELD_TYPE"]; 
                $fieldId = "form_" . $arQuestion["STRUCTURE"][0]["FIELD_ID"];
                $fieldName = "form_" . $arQuestion["STRUCTURE"][0]["FIELD_ID"];
                $isRequired = ($arQuestion["REQUIRED"] == "Y") ? "required" : "";
                $placeholder = $arQuestion["CAPTION"];
                $value = htmlspecialchars($arQuestion["VALUE"]);
        
                if ($count < 4): // First 4 fields go inside contact-form__form-inputs
            ?>
                <div class="input contact-form__input">
                    <label class="input__label" for="<?= $fieldId ?>">
                        <div class="input__label-text"><?= $placeholder ?><?= ($isRequired ? "*" : "") ?></div>
                        <input class="input__input" type="text" id="<?= $fieldId ?>" name="<?= $fieldName ?>" value="<?= $value ?>" <?= $isRequired ?>>
                        <div class="input__notification"></div>
                    </label>
                </div>
            <?php 
                else: // The message field goes in a separate block
                    if ($fieldType == "textarea"):
            ?>
        </div> <!-- Closing contact-form__form-inputs -->
        
        <div class="contact-form__form-message">
            <div class="input">
                <label class="input__label" for="medicine_message">
                    <div class="input__label-text"><?= $placeholder ?></div>
                    <textarea class="input__input" id="medicine_message" name="medicine_message"><?= $value ?></textarea>
                    <div class="input__notification"></div>
                </label>
            </div>
        </div>
        
            <?php 
                    endif;
                endif; 
                $count++; 
            endforeach;
            ?>
        


        <!-- Submit Section -->
        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">
                Нажимая «Отправить», Вы&nbsp;подтверждаете, что ознакомлены, полностью согласны и&nbsp;принимаете условия «Согласия на&nbsp;обработку персональных данных».
            </div>
            <button type="submit" class="form-button contact-form__bottom-button" data-success="Отправлено" data-error="Ошибка отправки">
                <div class="form-button__title">Оставить заявку</div>
            </button>
        </div>
    </form>

</div>

</body>
</html>
