
<div class="main-conteiner">
    <div class="index-blocks left-block">
        <h3>Всякая шняша</h3>
    <ul>
        <li>1</li>
        <li>1</li>
        <li>1</li>
        <li>1</li>
        <li>1</li>
        <li>1</li>
    </ul>
    </div>


    <div class="index-blocks center-block" text-align="center">
        <div class="last-shebang">
            <div style="float: left">
                <img src="<?php echo $newShebangs->shebang_avatar ?>" width="200">
            </div>
            <div style="float: left; width: 470px; margin-left: 10px;">
                <h3><?php echo $newShebangs->title ?></h3>
                <div><?php echo $newShebangs->description ?> </div>
            </div>
            <div class="clear"></div>
            <div class="social">

                <script type="text/javascript" src="//yandex.st/share/share.js"
                        charset="utf-8"></script>
                <div class="yashare-auto-init" data-yashareL10n="ru"
                     data-yashareDescription="<?php echo $newShebangs->description  ?> "
                     data-yashareTitle="Мне нравиться <?php echo $newShebangs->title ?>"
                     data-yashareImage="<?php echo $newShebangs->shebang_avatar ?>"
                     data-yashareQuickServices="vkontakte" data-yashareTheme="counter"></div>
                </div>
        </div>

    </div>

    <div class="index-blocks right-block">

        sad
    </div>
</div>
<div class="clear"></div>
<?php echo Template::message(); ?>
<a href="<?php echo site_url(SITE_AREA) ?>" class="btn btn-large btn-success">Админка</a>

