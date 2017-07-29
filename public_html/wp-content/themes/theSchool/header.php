<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AES</title>
        <?php wp_head(); ?>
	
   <link rel="stylesheet" type="text/css" href="http://www.ishedorene.com/theschool/wp-content/themes/theSchool/css/main.css" media="screen">
   <link rel="stylesheet" type="text/css" href="http://www.ishedorene.com/theschool/wp-content/themes/theSchool/css/panel.css" media="screen">
   <link rel="stylesheet" type="text/css" href="http://www.ishedorene.com/theschool/wp-content/themes/theSchool/css/contact.css" media="screen">
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cinzel|Fjalla+One|Pontano+Sans" media="screen">
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://www.ishedorene.com/theschool/wp-content/themes/theSchool/js/panels.js"></script>
	

   <script>
    $(document).ready(function(){
    $(this).scrollTop(0);
}); 
   </script>
 <script>
					$(document).ready(function(){
					$('a[href^="#"]').on('click',function(e){
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

		  //Scroll and show hash

					//$('html,bod').animate({
					//'scrollTop': $target.offset().top
					//}, 1000, 'swing' , function() {
					// window.location.hash = target;
					//});

		  //Scroll and don't show hash
		$('html,body').animate({
			 'scrollTop': $target.offset().top
		}, 1000, 'swing');
					});
				});
   </script>

      </head>
      <body>
        <div class="container-fluid indexBG" id="first">
             <nav class="navbar navbar-inverse navbar-fixed-top">
              
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">AE School</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="active"><a href="#first">Home</a></li>
              <li><a href="#second">Courses</a></li>
              <li><a href="#third">About</a></li>
              <li><a href="#fourth">Coaches</a> </li>
              <li><a href="#pip">Contact</a> </li>
             
            </ul>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
          <div class="container english" >
              <h1>Learn English<br/> while having fun...</h1>
              <ul>
                <li class="">no hard and fast rule</li>
              <li class="check">you make your time</li>
               <li class="check">spend less and learn more</li>
               <li class="check">learn from the experts</li>
               <li class="check">quit anytime you desire!</li>
              </ul>

           </div>
        </div>