<?php
/*
*This template for display the header 

*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
   
    <div id="header_area">
        <div class="container">
            <row>
                <div class="col-md-3">
                   <a href=""><img src="<?php echo get_theme_mod('nasir_logo'); ?>" alt=""></a> 
                </div>
                <div class="col-md-9">
                
                </div>
            </row>
        </div>
    </div>

<?php wp_footer() ?>
</body>
</html>