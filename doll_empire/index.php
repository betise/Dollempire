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
        <link rel="stylesheet" href="css/jquery.nouislider.css" />
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        
        <!--<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
    </head>
    
    
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 <?php include ('include/header.php'); ?> 

        <div class="main-container">
            <div class="main wrapper clearfix">
                
                <?php include ('include/aside.php')?>
                
                <?php include ('include/slider.php')?>
                
                


            </div> <!-- #main -->
        </div> <!-- #main-container -->
        
     

<!--<?php include ('include/footer.php')?>-->
        
<!-- All JS -->
<script src="js/compressed.js"></script>
<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script src="js/jquery.nouislider.min.js"></script>



         <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
                        
        </script>-->
  
        <script>
 // On document ready, initialize noUiSlider.
            
            //code to avoid conflict with the $ variable used in compressed.js
            $.noConflict();
            jQuery( document ).ready(function( $ ) {
            
            $(function(){
				$("#rangeSlider").noUiSlider({
					start: [ 2005, 2014 ],
					range: {
						'min': 2005,
						'max': 2014
					},
                    connect: true,
                    serialization: {
                        lower: [

                            $.Link({
                                // Place the value in the #value element,
                                // using the text method.
                                target: $("#value1"),
                                method: "text"
                            }),
                        ],
                        upper: [

                            $.Link({
                                // Link accepts functions too.
                                // The arguments are the slider value,
                                // the .noUi-handle element and the slider instance.
                                target: function( value, handleElement, slider ){

                                    $("#value2").text( value );

                                }
                            }),

                        ],
                        format: {
                            decimals: 0
                        }
                    
                    }
				});				
                
                $("#rangeSlider2").noUiSlider({
					start: [ 10, 40 ],
					range: {
						'min': 10,
						'max': 40
					},
                    connect: true,
                    serialization: {
                        lower: [

                            $.Link({
                                // Place the value in the #value element,
                                // using the text method.
                                target: $("#size1"),
                                method: "text"
                            }),
                        ],
                        upper: [

                            $.Link({
                                // Link accepts functions too.
                                // The arguments are the slider value,
                                // the .noUi-handle element and the slider instance.
                                target: function( value, handleElement, slider ){

                                    $("#size2").text( value );

                                }
                            }),

                        ],
                        format: {
                            decimals: 0,
                            postfix: '"'
                        }
                    
                    }
				});

			});
});

        </script>
        
        <script>
	$('slideshow').style.display='none';
	$('wrapper').style.display='block';
	var slideshow=new TINY.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=5;
		slideshow.link="linkhover";
		slideshow.info="information";
		slideshow.thumbs="slider";
		slideshow.left="slideleft";
		slideshow.right="slideright";
		slideshow.scrollSpeed=4;
		slideshow.spacing=5;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink");
	}
</script>
        
       
        
       

        
    </body>
</html>
