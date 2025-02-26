<div class="nk-footer">
    <div class="container-fluid">
        <div class="nk-footer-wrap">
            <div class="nk-footer-copyright display-name-off text-right">&copy; 2024 Developed by <a href="https://maisytien.com"
                    target="_blank">maisytien 💗</a></div>
            <div class="nk-footer-links">
                <ul class="nav-sm">
                    <li class="nav-item dropup">
                        <a class="has-indicator nav-link">
                            Verison Code:&nbsp;<b><?=$TD->Setting('version-code')?></b>
                        </a>
            </div>
        </div>
    </div>
    <ul class="nk-sticky-toolbar">
        <li class="demo-settings ws-toggle-theme">
            <a class="toggle-theme tipinfo" href="#" title="Change Skin Theme">
                <em class="icon ni ni-moon"></em>
            </a>
        </li>
    </ul>
</div>
<div class="js-preloader"><div class="loading-animation duo-pulse"></div></div>
<script src="<?=$admin->Path()?>/assets/js/bundle.js?ver=3.2.3"></script>
<script src="<?=$admin->Path()?>/assets/js/scripts.js?ver=3.2.3"></script>
<script src="/<?= __LIBRARY__ ?>/fancybox/fancybox.umd.js"></script>
<?php if(strpos($current_url,'create/newfeeds')!==false||strpos($current_url,'newfeeds/list')!==false){?>
<script src="<?=$admin->Path()?>/assets/js/libs/editors/quill.js?ver=3.2.3"></script>
<script src="<?=$admin->Path()?>/assets/js/libs/editors/summernote.js?ver=3.2.3"></script>
<script src="<?=$admin->Path()?>/assets/js/editors.js?ver=3.2.3"></script>
<?php } ?>
<script src="<?=$admin->Path()?>/assets/js/libs/charts/chart-cms.js?ver=3.2.3"></script>
<script src="<?=$admin->Path()?>/../<?= __LIBRARY__ ?>/dialog/toast@1.0.1/fuiToast.min.js"></script>
<script src="<?=$admin->Path()?>/assets/js/custom.js?ver=<?=rand(111111,2222222222)?>"></script>
</body>
</html>
