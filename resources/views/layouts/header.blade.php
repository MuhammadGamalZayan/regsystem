<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Dashboard - Conferences</title>
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
	    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
		<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="img/chez logo.jpeg">
  </head>
  <body>
      
    @yield('content')
    
						<!-- Start Footer  -->
                        <footer class="footer">
                    <div class="container-fluid">
				        <div class="row">
				            <div class="col-md-6">
                                <nav class="d-flex">
                                    <ul class="m-0 p-0">
                                        <li>
                                            <a href="#">DUMMIES</a>
                                        </li>
                                        <li>
                                            <a href="#">LINKS</a>
                                        </li>
                                        <li>
                                            <a href="#">YOU</a>
                                        </li>
                                        <li>
                                            <a href="#">CAN</a>
                                        </li>
                                        <li>
                                            <a href="#">ADD</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
				            <div class="col-md-6">
				                <p class="copyright d-flex justify-content-end"> &copy 2021 Design by
                                    <a href="#">&nbspPerfect Touch Events</a> 
                                </p>
				            </div>
				        </div>
				    </div>
                </footer>
            <!-- End Footer  -->
		</div>
        </div>
        <!-- </div> -->
    </div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });
</script>
  </body>
  </html>