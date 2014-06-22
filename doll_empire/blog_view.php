<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ma Page Test</title>
        
        

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css" />
        <link rel="stylesheet" href="css/masonry.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="masonry/css/pinterest-style.css" />
        <link rel="stylesheet" type="text/css" href="masonry/css/style.css" />

        <!--<link rel="stylesheet" href="css/style.css">-->
        
        <style type="text/css">

		</style>
        
        <!--<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
    </head>
    
    
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 <?php include ('include/header.php'); ?> 

        <div class="main-container">
            <div class="main wrapper clearfix">
              

              
  		<div class="filter-items">
                <input type="text" id="tfq" class="tftextinput3" name="q" size="21" maxlength="120" placeholder="Search our website">
				<div class="filter-label" > Old </div>
				<div class="filter-label" data-filter=".estudio">Recent</div>

		</div>
        <ul class="content" >
        
        <?php 
        
        for($i = 0 ; $i<20; $i++){
        
        ?>
        
            <li class="articles">
            
            <div id="search_box1" class="search_box ">
                <div class="image">
                <img class="small" src="img/coral-reef.jpg" width="150px">
                </div> 
                <div class="texte">
                
                We have received several questions about how the grid layout on wookmark.com 
                is created so we created this simple plugin. 
                It lays out a series of elements in a dynamic column grid.
                
                </div>
            </div>
            <div id="search_box2" class="search_box ">
                <div class="date">
                Date: 06/07/14
                </div> 
                <div class="read">
                <a id="bloglink" href="./article.php"> Read more...</a>
                </div>
            </div>

            </li>
            <br>
        
        <?php
        }
        
        ?>
        
		</ul>
            
              

            </div> <!-- #main -->
        </div> <!-- #main-container -->
        
     

<?php include ('include/footer.php')?>
        
<!---------JS FILES --------->

<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/freewall.js"></script>

        <script type="text/javascript">
			var wall = new freewall("#freewall");
			wall.reset({
				selector: '.brick',
				animate: true,
				cellW: 250,
				cellH: 'auto',
				onResize: function() {
					wall.fitWidth();
				}
			});
			
			wall.container.find('.brick img').load(function() {
				wall.fitWidth();
			});


		</script>
        
    </body>
</html>
