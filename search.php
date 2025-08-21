<!-- The Template For displaying Archive Pages -->

<?php get_header();?>
<section id="body_area">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9 pl-2">
                <div id="search-heading">
                    <h2 class="search-title"><?php printf('Search result for: %s', get_search_query())?></h2>
                </div>
                <?php get_template_part('templates/blog-setup');?>
                <!-- <div id="comments-section">
                    <?php comments_template();?>
                </div> -->
            </div>
            <div class="col-md-3 pr-2">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>