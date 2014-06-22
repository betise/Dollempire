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
        <link rel="stylesheet" type="text/css" href="masonry/css/pinterest-style.css" />
        <link rel="stylesheet" type="text/css" href="masonry/css/style.css" />

        <!--<link rel="stylesheet" href="css/style.css">-->

        
        <!--<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
    </head>
    
    
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 <?php include ('include/header.php'); ?> 

        <div class="main-container">
            <div class="main wrapper clearfix">
            
            <div class="filter-items-tut">
                    <div class="filter-label-tut" > Sculpt </div>
                    <div class="filter-label-tut" data-filter=".proyecto">Assembly</div>
                    <div class="filter-label-tut" data-filter=".equipo">Hair</div>
                    <div class="filter-label-tut" data-filter=".estudio">Paint</div>
            </div>
            <div id="freewall" class="free-wall">

                <?php 
                for ($i=0; $i<20; $i++){
                ?>
                
                <div class="brick">
                    <a id="bloglink" href="./tuto.php"><img src="img/red-coral.jpg" width="100%">
                    <div class="info">
                        <h3>Tutorial Name</h3>
                        <h5>Quick little description</h5></a>
                    </div>
                </div>
                <?php
                }
                ?>

                
            </div>
            
              

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
