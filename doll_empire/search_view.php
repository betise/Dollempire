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
			body {
				background: rgba(231, 231, 231, 0.43);
			}
			.free-wall {
				margin: 15px;
			}
			.brick {
				width: 221.2px;
			}
			.info {
				padding: 15px;
				color: #333;
			}
			.brick img {
				margin: 0px;
				padding: 0px;
				display: block;
			}
            			
            .filter-items {
				padding: 10px 0px;
                text-align: right;				
				margin: 10px;
			}

			.filter-label {
				display: inline-block;
				margin: 0px 5px 5px 0px;
				padding: 10px;
				cursor: pointer;
				background: rgb(12, 205, 205);
			}

			.filter-label.active,
			.filter-label:hover {
				background: grey;
			}
		</style>
        
        <!--<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
    </head>
    
    
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 <?php include ('include/header.php'); ?> 

        <div class="main-container">
							<form id="searchpage">
							<h3>Rechercher :</h3>
							
							
							<div id="search_engine" class="bold">
								<!-- NAME --><!-- SERIAL NUMBER --><!-- INVENTORY_NUM -->
								<div class="label">
								Kit Name :
									<br />
								Artist Name:
									<br />
								
								Ltd Edition :
								</br>
								</br>   
								Eyes: 
								</br>
								</br> 
								Options :
									<br />
									<br />
									<br />                            
								</div>
								<div class="value">
								<input type="text" class="input_text" name="name" id="haut"/>
									<br />
								<input type="text" class="input_text" name="email" id="haut"/>
								</br>
								<input type="radio" name="ltd" value="yes">Yes<br>
								<input type="radio" name="ltd" value="no">No
								</br>
								<input type="radio" name="eyes" value="open">Open<br>
								<input type="radio" name="eyes" value="closed">Closed
								</div>
								<br />
								<br />
								<br />
									<input id="checkboxfirst" type="checkbox" name="option" value="fullbody">Full Body<br>
							
							<div id="search_box2" class="search_box ">
								<!-- PRODUCT_NAME --><!-- SERIAL NUMBER --><!-- INVENTORY_NUM -->
								<div class="label">
								Type :
									<br />
								Limbs :
									<br />
									<br />
								Size :
									<br />
									<br /> <br />
									<br />
								Year:
								</div>
								<div class="value">
									<select id = "haut" name="type">
									<option value="all" selected>All</option>
									<option value="sili">Silicone</option>
									<option value="vinyl" >Vinyl</option>
									<option value="resin">Resin</option>
									</select>                                <br />
									<select id = "haut" name="limbs">
									<option value="all" selected>All</option>
									<option value="full" >Full</option>
									<option value="3quart">3/4</option>
									<option value="1quart" >1/4</option>
									</select> 
									<br />
									<br />
									<br />
									<!--<div id = "tipslider" class="slider"></div>-->
									<div id="rangeSlider2" ></div>
									<div id="size1" ></div>
									<div id="size2" ></div>
									<br />
									<br />
									<br />
									<br />
									<div id="rangeSlider" ></div>
									<div id="value1" ></div>
									<div id="value2" ></div>

								</div>
								
								</div>

							</div>
							
					</form>
		
            <div class="main wrapper clearfix">
            
			
			
			
            <div class="filter-items">
                    <div class="filter-label" > A>Z </div>
                    <div class="filter-label" data-filter=".proyecto">Z>A</div>
                    <div class="filter-label" data-filter=".equipo">By Artist</div>
                    <div class="filter-label" data-filter=".estudio">Recent</div>
            </div>
			
			
			
            <div id="freewall" class="free-wall">

                <?php 
                for ($i=0; $i<20; $i++){
                ?>
                
                <div class="brick">
                    <img src="img/logo_rr.jpg" width="100%">
                    <div class="info">
                        <h3>Kit Name</h3>
                        <h5>Artist Name</h5>
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
