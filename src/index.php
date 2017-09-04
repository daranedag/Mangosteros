<!doctype html>
<html lang="es">
	<head>
      	<meta charset="utf-8">
      	<title>Mangosteros</title>
      	<link rel="stylesheet" href="../resources/css/bootstrap.css">
      	<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
      	<link rel="stylesheet" href="../resources/css/bootstrap-reboot.css">
      	<link rel="stylesheet" href="../resources/css/bootstrap-grid.css">
      	<link rel="stylesheet" href="../resources/css/navbar-side.css">
  	</head>
	<body>
		<!--<div>
			<h1>Mangosteros</h1>
			<div class="media">
              <img class="d-flex mr-3" src="../resources/img/foto1.PNG" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                	Media de prueba
              </div>
			</div>
		</div>
		-->
	 	<nav class="navbar navbar-light navbar-static bg-faded" role="navigation">
      		<a class="navbar-brand" href="#">Navbar</a>
          	<ul class="nav navbar-nav">
            	<li class="nav-item">
              		<a class="nav-link" href="#">Home</a>
            	</li>
                <!-- insert more nav-items if you so choose -->
          	</ul>
          	<button class="navbar-toggler pull-xs-right" id="navbarSideButton" type="button">
          		&#9776;
        	</button>
          	
            <!-- navbar-side will go here -->
         	<ul class="navbar-side" id="navbarSide">
  				<li class="navbar-side-item">
    				<a href="#" class="side-link">Signup</a>
  				</li>
  				<li class="navbar-side-item">
    				<a href="#" class="side-link">Signup2</a>
  				</li>
  				<li class="navbar-side-item">
    				<a href="#" class="side-link">Signup3</a>
  				</li>
                <!-- insert more side-items if you so choose -->
			</ul>
			<nav class="navbar navbar-light navbar-static bg-faded">
            	<div class="overlay">
            	</div>
            </nav>
        </nav>
        <script type="text/javascript">
        	$(document).ready(function() {
        	  	// Open navbarSide when button is clicked
        	  	$('#navbarSideButton').on('click', function() {
	        	    $('#navbarSide').addClass('reveal');
    	    	    $('.overlay').show();
    		  	});

        	  	// Close navbarSide when the outside of menu is clicked
        	  	$('.overlay').on('click', function(){
        	    	$('#navbarSide').removeClass('reveal');
        	    	$('.overlay').hide();
        	  	});
        	});
		</script>
	</body>
</html>