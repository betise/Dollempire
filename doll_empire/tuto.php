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
        <!--<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 <?php include ('include/header.php'); ?> 

        <div class="main-container">
            <div class="main wrapper clearfix">

            <div id="blog_article">
            
            <h1 id="article_title"> Titre Tuto</h1>
            
            <p id="article_desc"> 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac ante id metus varius vulputate. 
            Etiam aliquam velit eget justo lobortis condimentum. Vestibulum tempus congue est vitae pretium. 
            Morbi vehicula ipsum at augue faucibus, vitae hendrerit eros mattis. 
            Donec elementum, eros imperdiet adipiscing accumsan, leo nulla sodales mauris, et imperdiet orci 
            magna eu magna. Integer ac lectus fringilla, iaculis est et, luctus mauris. Ut elementum elit ut orci
            posuere luctus.
            Nullam vitae sem viverra, tempor nulla id, lobortis felis. In hac habitasse platea dictumst. 
            Sed in tortor eu dui sollicitudin tincidunt. Pellentesque non nisl at eros venenatis interdum eu id dui. 
            Suspendisse tristique condimentum interdum. Morbi sit amet urna vitae arcu laoreet volutpat. 
            Aenean pretium nulla fringilla, tristique tellus eget, vehicula ligula.
            </p>
            
            </div>
            
            <div id="article_comments"> 
            <h1 id="comments">Questions</h1>
            <button class="i2Style">Ask a question</button>
            <div id="target">
            <form action method="post">
            <textarea id="comm_txt"></textarea>
            <br>
            <input type="submit" value="Send" class="i2Style">
            </form>
            </div>
            <div class="question">
            <p class="question_title"> Question </p>
            <p id="quest">
            Nullam vitae sem viverra, tempor nulla id, lobortis felis. In hac habitasse platea dictumst. 
            Sed in tortor eu dui sollicitudin tincidunt. Pellentesque non nisl at eros venenatis interdum eu id dui. 
            Suspendisse tristique condimentum interdum. Morbi sit amet urna vitae arcu laoreet volutpat.  
            </p>
            </div>
            <div class="answer">
            <p id="answer_ttl"> Answer </p>
            <p id="ans">
            Donec elementum, eros imperdiet adipiscing accumsan, leo nulla sodales mauris, et imperdiet orci 
            magna eu magna.  
            </p>
            </div>
            <div class="question">
            <p id="question_title"> Question</p>
            <p id="quest">
            Nullam vitae sem viverra, tempor nulla id, lobortis felis. In hac habitasse platea dictumst. 
            Sed in tortor eu dui sollicitudin tincidunt. Pellentesque non nisl at eros venenatis interdum eu id dui. 
            Suspendisse tristique condimentum interdum. Morbi sit amet urna vitae arcu laoreet volutpat.  
            </p>
            </div>
            <div class="answer">
            <p id="answer_ttl"> Answer </p>
            <p id="ans">
            Donec elementum, eros imperdiet adipiscing accumsan, leo nulla sodales mauris, et imperdiet orci 
            magna eu magna.  
            </p>
            </div>
            </div><!-- #comm -->
            </div> <!-- #main -->
        </div> <!-- #main-container -->
<?php include ('include/footer.php')?>       
<!---------JS FILES --------->
<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/freewall.js"></script>
        <script type="text/javascript">
        $('#target').hide();
        $('.i2Style').click(function() {
        $('#target').toggle('slow');
        });
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
