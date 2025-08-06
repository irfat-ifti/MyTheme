<footer>
    <div class="footer-bg">
        <div id="footer" class="text-white mt-0 pt-5 container px-0">
            <div class="footer-inner-container"><?php dynamic_sidebar('footer-1');?></div>
            <div class="footer-inner-container"><?php dynamic_sidebar('footer-2');?></div>
            <div class="footer-inner-container"><?php dynamic_sidebar('footer-3');?></div>
        </div>
    </div>
    <div class="text-center footer-bg mt-0 py-5">
        <h2 class="text-warning"><?php echo get_theme_mod("mt_footer_customize");?></h2>
    </div>
</footer>
<?php wp_footer()?>
</body>

</html>