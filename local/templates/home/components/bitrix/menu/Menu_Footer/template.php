
<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?if (!empty($arResult)):?>

    <div class="col-md-6 col-lg-6">
        <ul class="list-unstyled">
            <?foreach ($arResult as $arItem):?>
                   <? if ($arItem["PERMISSION"] > "D"):?>
                    <li <? if ($arItem["SELECTED"]): ?>class="active"<?endif?>>
                        <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                    </li>
                <?endif?>
              <?endforeach?>
        </ul>
    </div>
<?endif?>