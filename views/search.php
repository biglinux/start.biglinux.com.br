<?= $header ?>

<div class="ui grid" id="webq">
    <div class="sixteen wide column">
        <?= $menu ?>
    </div>
    <div class="four wide column">

    </div>
    <div class="twelve wide column" id="search">
        <form>
            <div class="ui right icon input">
                <input type="text" name="q" id="googlesearch" value="<?= $keyword ?>" />
                <i class="search icon"></i>
            </div>
        </form>
    </div>
</div>

<iframe id="results" src="<?= $api ?>" height="0"></iframe>

<?= $footer ?>