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
    <div class="header-area">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-1">
                    <a href="#"><img src="<?php echo get_theme_mod("mt_logo");?>" alt=""></a>
                </div>
                <div class="col-md-9"></div>
            </div>
        </div>
    </div>

    <?php wp_footer()?>
</body>

</html>