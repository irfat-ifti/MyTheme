<?php 
/* 
* This template for displaying the header
*/

?>

<!DOCTYPE html>
<html lang="<?php language_attributes()?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>

<body <?php body_class()?>>
    <header class="header-area">
        <div class="container">
            <div class="row d-flex justify-content-between <?php echo get_theme_mod("mt_menu_position");?>">
                <div class="col-md-1">
                    <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_mod("mt_logo");?>" alt=""></a>
                </div>
                <div class="col-md-8">
                    <?php wp_nav_menu(array("theme_location" => "main_menu", "menu_id" => "nav"))?>
                </div>
            </div>
        </div>
    </header>

    <section id="body_are">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="text-center bg-secondary mt-0 py-5">
            <h2 class="text-white"><?php echo get_theme_mod("mt_footer_customize");?></h2>
        </div>
    </footer>
    <?php wp_footer()?>
</body>

</html>