<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
                    



<!DOCTYPE html>
<html lang='en'>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!------ Include the above in your HEAD tag ---------->

    <meta class="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Documentation | Evie by unDraw</title>
    <meta name="description" content="An MIT licensed template bundled with a minimal style guide to build websites faster. Extemely lightweight, customizable and production-ready." />
<meta name="robots" content="index, follow"/>
<meta property="og:type" content="website" />
<meta property="og:title" content="Evie Theme by unDraw" />
<meta property="og:url" content="https://evie.undraw.co/docs" />
<meta property="og:description" content="An MIT licensed template bundled with a minimal style guide to build websites faster. Extemely lightweight, customizable and production-ready." />
<meta property="og:image" content="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/assets/undraw__evie_meta.png" />
<meta property="og:locale" content="en_US" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Evie Theme by unDraw" />
<meta name="twitter:description" content="An MIT licensed template bundled with a minimal style guide to build websites faster. Extemely lightweight, customizable and production-ready." />
<meta name="twitter:image" content="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/assets/undraw__evie_meta.png" />
<meta name="twitter:url" content="https://evie.undraw.co/docs" />
<link rel="shortcut icon" href="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/assets/favicon.ico">
    <link rel='stylesheet' href='css/style.min.css' />
</head>
<body>
    <div style="background-color: #fff;" class="navbar navbar--extended">
    <nav style="background-color: #fff;" class="nav__mobile"></nav>
    <div style="background-color: #fff;" class="container">
        <div  class="navbar__inner">
             <a style="color: #000" href="#" class="navbar__logo"><img style="width: 130px;" src="aclope.png"></a>
            

               
            
            
        </div>
    </div>
</div>
    <div class="page__header">
        <div class="hero__overlay hero__overlay--gradient"></div>
        <div class="hero__mask"></div>
        <div class="page__header__inner">
            <div class="container">

            </div>
        </div>
    </div>
    <div class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page__menu">
                    
                    <ul class="vMenu">
   <li><a href="welcome.php" class="vMenu--active" >People</a></li>
                        <li><a href="games.php">Games</a></li>
                     
                        <li><a href="market.php" >Marketplace</a></li>
                        <li><a href="Challenge.php">Challenges</a></li>

                      
                        <li><a style="color: darkgreen;" href="reset-password.php">Reset Password</a></li>
                        <li><a style="color: #f80000;" href="logout.php">Log out</a></li>
</ul>
                </div>
                <div class="page__main">
                    <div class="container">
                        <div class="text-container text-container--center">
                                </div> <div class="page-header">
        <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to aclope.</h3>
    </div>
                    <form>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input placeholder="search @username" id="search" type="text"  />
          </div>
          <div class="input-field second-wrap">
            <button class="btn-search" type="button">SEARCH</button>
          </div>
        </div>
        <span class="info">ex. find people teams Marketplace</span>
      </form>

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Secret chat

  </a>
          <a style="font-size: 11px;" href="about.php"> <b> what is secret chat ? </b></a>
</p> 




<div class="card-deck">
  <div style="border-radius: 1em;" class="card">
    <img  style="width: 100px;padding-left: 10px;padding-top: 8px;" src="aclope2.png" alt="aclope">
    <div style="background-color: #dbdbdb" class="card-body">
      <h5 style="padding-bottom: 10px; font-size: 18px;" class="card-title">Build website for free</h5>

      <p class="card-text"><small class="text-muted">T&C applied</small></p>
    </div>
  </div>
  <div style="border-radius: 1em;" class="card">
    <img  style="width: 100px;padding-left: 10px;padding-top: 8px;" src="aclope2.png" alt="aclope">
    <div style="background-color: #dbdbdb" class="card-body">
      <h5 style="padding-bottom: 10px; font-size: 18px;" class="card-title">Build website for free</h5>

      <p class="card-text"><small class="text-muted">T&C applied</small></p>
    </div>
  </div>
  <div style="border-radius: 1em;" class="card">
    <img  style="width: 100px;padding-left: 10px;padding-top: 8px;" src="aclope2.png" alt="aclope">
    <div style="background-color: #dbdbdb" class="card-body">
      <h5 style="padding-bottom: 10px; font-size: 18px;" class="card-title">Build website for free</h5>

      <p class="card-text"><small class="text-muted">T&C applied</small></p>
    </div>
  </div>

</div>



<div style="padding-top: 50px;"></div>




<div class="card-deck">
  <div style="border-radius: 1em;" class="card">
    <img  style="width: 100px;padding-left: 10px;padding-top: 8px;" src="aclope2.png" alt="aclope">
    <div style="background-color: #dbdbdb" class="card-body">
      <h5 style="padding-bottom: 10px; font-size: 18px;" class="card-title">Build website for free</h5>

      <p class="card-text"><small class="text-muted">T&C applied</small></p>
    </div>
  </div>
  <div style="border-radius: 1em;" class="card">
    <img  style="width: 100px;padding-left: 10px;padding-top: 8px;" src="aclope2.png" alt="aclope">
    <div style="background-color: #dbdbdb" class="card-body">
      <h5 style="padding-bottom: 10px; font-size: 18px;" class="card-title">Build website for free</h5>

      <p class="card-text"><small class="text-muted">T&C applied</small></p>
    </div>
  </div>
  <div style="border-radius: 1em;" class="card">
    <img  style="width: 100px;padding-left: 10px;padding-top: 8px;" src="aclope2.png" alt="aclope">
    <div style="background-color: #dbdbdb" class="card-body">
      <h5 style="padding-bottom: 10px; font-size: 18px;" class="card-title">Build website for free</h5>

      <p class="card-text"><small class="text-muted">T&C applied</small></p>
    </div>
  </div>
  
</div>





                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
<script src='js/app.min.js'></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-98726453-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-98726453-3');

  var trackOutboundLink = function(url,type, additional) {
      gtag('event', additional || 'Click', {
        'event_category': type || 'outbound',
        'event_label': url,
        'transport_type': 'beacon'
      });
    };
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>



