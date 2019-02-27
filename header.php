<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name')?></title>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href"<?php bloginfo('stylesheet_url'); ?>" />

       <link href="<?php bloginfo('template_url');?>/lib/custom.css" rel="stylesheet">




<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding-top:40px";>
      <div class="container col-md-3">
         <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="nav-menu col-md-9">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>
            
</nav>

</header> 

        
     

<!-- end nav -->

        <!--button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button-->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            
        </ul>
        </div>
      </div>
    </nav>

    <!-- Header "-->
    <header class="masthead bg-primary text-white text-center">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

	</nav>
	<div class="container">
        	<img  src="<?php bloginfo('template_url');?>/imgs/goku.png" alt="">
       		 <h1 c>Primer Tema Wordpress</h1>
       		 <hr >
       		 <h2 >hemos sido engañados</h2>
         </div>
    </header>
</html>
