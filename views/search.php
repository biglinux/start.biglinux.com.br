<?= $header ?>

<div class="ui grid" id="webq">
    <div class="sixteen wide column">
        <?= $menu ?>
    </div>
    <div class="two wide column mobile hidden">
        <a href="/">
            <img src="/images/logo-biglinux.png" />
        </a>
    </div>
    <div class="fourteen wide column" id="search">
        <form>
            <div class="ui right icon input">
                <input type="text" name="q" id="googlesearch" value="<?= $keyword ?>" />
                <i class="search icon"></i>
            </div>
        </form>
    </div>
</div>

<iframe id="results" name="results" src="<?= $api ?>"></iframe>

<?= $footer ?>