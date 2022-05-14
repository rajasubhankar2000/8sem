

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Website</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/a374bb6621.js" crossorigin="anonymous"></script>

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
   
    <link rel="stylesheet" href="images/404.png">
</head>
<body>
    <div class="container-fluid main_menu">
        <div class="row">
            <div class="col-md10 col-12 mx-auto">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="#"><i class="fa-solid fa-snowflake"></i>   SubhankarWeather <i class="fa-solid fa-snowflake"></i></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="weather.php">Weather</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                          </li>
                    </div>
                  </nav>
                  
            </div>
        </div>
    </div>
    <div class="container-fluid main_menu" >
        <div class="row">
            <div class="col-md-10 col-12 mx-auto" >
               <div class="row">
                   <!-- left side -->
                   <div class="col-md-6 col-12 main_header_right">
                       <figure>
                           <img src="images/about.png" alt="subhankar" class="img-fluid" title="raja">
                       </figure>
                    </div>
                     <div class="col-md-6 col-12 main_header_left">
                      <p>Welcome to my website</p>
                      <h1>I am a  <span class="text_clr">Web Developer</span> and programmer</h1>
                      <a href="weather.php"><button>check now</button></a>
                   
                     </div>
            </div>
        </div>
    </div>

    
  
<!-- footer -->
<footer id="main-footer">
  <div class="footer-content container">
    <p>Copyright &copy; 2022. All Rights Reserved</p>
    <div class="social">
      <li><a href="https://twitter.com/raja_subhankar?s=09"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://www.facebook.com/rupok.raja.927"><i class="fab fa-facebook"></i></a></li>
      <li><a href="https://www.instagram.com/subhankar_raja_1/"><i class="fab fa-instagram"></i></a></li>
      <li><a href="https://www.linkedin.com/in/subhankar-raja-39b72a192/"><i class="fab fa-linkedin"></i></a></li>
    </div>
  </div>
</footer>
    
</body>
</html>