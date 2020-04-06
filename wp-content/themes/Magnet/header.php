<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title></title>

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<!-- Main css -->
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="<?php echo home_url(); ?>" class="navbar-brand">Honda_sample</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
               <?php wp_nav_menu( array(
                'theme_location'=>'place_global', 
                'container'     =>'', 
                'menu_class'    =>'',
                'items_wrap' => '%3$s',//<ul>を出力しない
          ));
    ?>               </ul>
          </div>
            <hr>
  </div>
</div>

