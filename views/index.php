<?= $header ?>
<?= $menu ?>

<div class="ui grid">
    <div class="sixteen wide column" id="header">
        <img class="ui fluid image" src="/images/logo-biglinux.png" />
    </div>

    <div class="sixteen wide column" id="search">
        <form>
            <div class="ui right icon input">
                <input type="text" name="q" id="googlesearch" autocomplete="off" />
                <i class="search icon"></i>
            </div>
        </form>        
    </div>
</div>

<?= $footer ?>