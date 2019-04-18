

<div id="popup_gdpr" class="<?php if(!empty($gdpr)) echo "ok"; ?>">
    <?= __('Our website uses cookies and similar technologies to enhance your user experience and measure site traffic. By continuing, you consent to such use.');?>
    <a href="/privacy-policy">
        <?= __('Learn more'); ?>
    </a>
    <div class="text-right mt-3">
        <button class="btn btn-cookie-ok btn-md btn-primary text-dark px-8">
            OK
        </button>
    </div>
</div>

