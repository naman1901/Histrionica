<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/jquery.flipster.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <title>HISTRIONICA 2016</title>
</head>
<body data-color="red">

  <?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM tc";
$results = $db_handle->runQuery($query);
?>


    <!-- LOADER -->
    <!-- <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
    <div class="bigSqr">
      <div class="square first"></div>
      <div class="square second"></div>
      <div class="square third"></div>
      <div class="square fourth"></div>
    </div>
            </div>
        </div>
        <div id="loading-text">Loading</div>
    </div> -->
 
<div>
    <!-- HEADER -->
   <div id="headerup">
    <!-- <header class="header type-3 wow fadeIn" data-wow-delay="4s">
      <div class="container">
            <div class="logo-block">
       <a class="logo" href="#"><img src="assets/img/logo.png" alt="" style="height:20px; width:auto; "></a>
            </div>
  <nav class="main-nav">
                <ul class="anchor-navigation">
                    <li class="active"><a class="anchor-scroll" href="#about">about</a></li>
                    <li><a class="anchor-scroll" href="#events">events</a></li>
                    <li><a class="anchor-scroll" href="#gallery">gallery</a></li>
                    <li><a class="anchor-scroll" href="#partners">partners</a></li>
                    <li><a class="register" data-toggle="modal" data-target="#reg">Register</a></li>
           
                    <li><a class="anchor-scroll" href="#speakers">team</a></li>
                    <li><a class="anchor-scroll" href="#contact">contact</a></li>
                </ul> 
  </nav>
            <button class="cmn-toggle-switch"><span></span></button>
      </div>
    </header> -->
<div class="navbar navbar-inverse navbar-fixed-top wow fadeIn opaque-navbar">
  <div class="container">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
    <span class="glyphicon glyphicon-chevron-right" style="color:white;"></span>
    </button>
    <a class="navbar-brand" href="#"><img  id="logotop" src="assets/img/logo.png" alt="" class="longLogo"></a>
    </div>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="nav navbar-nav pull-right anchor-navigation">
        <li><a class="anchor-scroll" href="#theme">THEME</a></li>
        <li><a class="anchor-scroll" href="#events">EVENTS</a></li>
        <!-- <li><a class="anchor-scroll" href="#gallery">GALLERY</a></li> -->
  <li><a class="anchor-scroll" href="#partners">PARTNERS</a></li>
       
  <li><a class="anchor-scroll" href="#speakers">TEAM</a></li>
  <li><a class="anchor-scroll" href="#contact">CONTACT</a></li>
     <li id="register"><a class="register" data-toggle="modal" data-target="#reg">REGISTER</a></li>
      </ul>
    </div>
  </div>
</div>
   </div>




    
   <div id="content-wrapper">
        <!-- MAIN-SLIDER -->                    
        <div id="about" class="main-slider clearfix">
            <div class="swiper-container" data-loop="1" data-center="0" data-add-slides="2">
                <div class="swiper-wrapper">
                  
                    <!-- <div class="swiper-slide active" data-val="0">
                      <div class="fullheight">
                          <img class="center-image" src="assets/img/back1.jpg" alt="">
                          <div class="vertical-align">
                          <div class="container">
                            <div class="banner-block style-1">
  <h3 class="banner-date wow bounceInUp"><span>The Dramatics Society, SRCC Presents</span></h3>
  <h2 class="banner-title wow zoomInRight" data-wow-delay="2s"><img src="assets/img/logo.png"></h2>
  <h4 class="banner-date wow fadeIn" data-wow-delay="3s">The Annual Performing Arts Festival</h4>
        </div>                            
                          </div>
                          </div>
                      </div>
                    </div> -->
                    <div class="swiper-slide" data-val="0">
                      <div class="fullheight change1">
                          <img class="center-image" src="assets/img/back/up.jpg" alt="">
                                             
                      </div>
                        
                  </div>
                    <div class="swiper-slide hidden-xs" data-val="1">
                      <div class="fullheight change1">
                          <img class="center-image" src="assets/img/back/hands.jpg" alt="">
                          <!-- <div class="vertical-align">
                        <div class="container">
                            <div class="banner-block style-2">
  <h3 class="banner-title">Coming Soon!</h3>
                            </div> 
                          </div>
                          </div>         -->                  
                      </div>              
                    </div>  
              </div> 
          </div>
        </div>

     </div>




  <!-- ABOUT -->
        <!--<div class="main-block clearfix">
          <div class="container">
          <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <div class="block-header style-3">
            <h4 class="block-category"></h4>
            <h2 class="block-title">Theme</h2>
            <div class="block-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
          </div>
          </div>
          </div>
          <div class="row">
  <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="3" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-val="0">
  <div class="about-item">
  <img class=" src="img/about_8.jpg" alt="">
  <a class="about-title" href="#">We Offer To You</a>
  <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="1">
  <div class="about-item">
  <img class=" src="img/about_9.jpg" alt="">
  <a class="about-title" href="#">We Are The Best</a>
  <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="2">
  <div class="about-item">
  <img class=" src="img/about_10.jpg" alt="">
  <a class="about-title" href="#">Interesting Info</a>
  <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="3">
  <div class="about-item">
  <img class=" src="img/about_8.jpg" alt="">
  <a class="about-title" href="#">Our History</a>
  <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="4">
  <div class="about-item">
  <img class=" src="img/about_9.jpg" alt="">
  <a class="about-title" href="#">We Offer To You</a>
  <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="5">
  <div class="about-item">
  <img class=" src="img/about_10.jpg" alt="">
  <a class="about-title" href="#">We Are The Best</a>
  <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
  </div>
      </div>        
    </div>
  <div class="pagination"></div>
  </div>          
          </div>
          </div>
        </div>-->


  <!--PLACE FOR ABOUT ///-->

  <div class="main-block clearfix">
    <div id="theme">
    <div class="container"> 
    <div class="block-header">
    <div class="banner-fake">
    <div class="col-xs-12 col-md-3 wow bounceIn" data-wow-delay:"1s">
          <!-- <img src="assets/img/logo.png" id="cool" style="display:none"> -->
    <div class="banner-title up yo" style="float:left;" id="ulta">Ulta&nbsp;</div>
    <div class="banner-title yo" style="float:left;">PULTA</div><br><br>
          
    <br><br>
    </div>
    <div class = "col-xs-12 col-md-9">
    <div class="themr up" id="upcontent">
    Histrionica, the annual performing arts festival organized by Shri Ram College of Commerce, was incepted in the year 2004. It is the largest national level, non-competitive performing arts festival in Delhi University - a platform coveted by artists from over eighty colleges across the nation. In this edition of Histrionica, shed your shame, trash your inhibitions and do opposites. Wear a frown, spread a flame, smash a tree; do what’s creatively liberating. Throw the horizons farther back, jump into this topsy turvy world and rage fiery. Gear up for a roller coaster that takes you head over heels. All things wrong and all things inverted are knocking at your door- <b>are YOU chaotic enough?</b>
    </div>
    </div>
    <br><br>
    <div class="meramann wow slideInUp">
    <img src="assets/img/arrow.png">
    </div>
    <div class="dirtra">
    <div class="btn btn-custom" id="ultapulta"> ULTA&nbsp;PULTA!</div>
    </div>  

    </div>
    </div>
    </div>
    </div>
   </div>

  <!--/////////////////////////////////////////////////////////////////////-->
 
    
          
  <!-- EVENTS -->
        <div class="main-block clearfix" id="events">
          <div class="container">
          <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <div class="block-header style-2">
            <h2 class="block-title">Events</h2>
                  <hr>
          </div>
          </div>
          </div>
          </div>
          <div class="wide-container">
            <div class="conf-block ">
  <div class="row isotope-container">
  <div class="grid-sizer item-10"></div>
  <div class="item item-50 wow slideInRight col-md-4" data-toggle="modal" data-target="#aahvaaninfo" >

  <div class="conf-item small">
  <img class="center-image" src="assets/img/contentforevents/aahvaanOutside.jpg" alt="">
  <div class="conf-info style-2">
  <div class="conf-date hidden-xs">Registration Open!</div>
  <h4 class="conf-title">Aahvaan</h4>

  <a class="conf-btn" href="#">view more</a>
  <div class="conf-autors">
  <a href="#"><img  class="uchotu" src="assets/team/01.jpg" alt=""></a>
  <a href="#"><img  class="uchotu" src="assets/team/07.jpg" alt=""></a>
  </div>
  </div>
  <div class="conf-overlay"></div>
  </div>
      </div>
      <div class="item item-50 wow slideInRight col-md-4" data-toggle="modal" data-target="#charadesinfo" >

  <div class="conf-item small">
  <img class="center-image" src="assets/img/contentforevents/charadesOutside.jpg" alt="">
  <div class="conf-info style-2">
  <div class="conf-date">Registration Open!</div>
  <h4 class="conf-title">Charades</h4>
  <a class="conf-btn" href="#">view more</a>
  <div class="conf-autors">
  <a href="#"><img  class="uchotu" src="assets/team/02.jpg" alt=""></a>
  <a href="#"><img  class="uchotu" src="assets/team/08.jpg" alt=""></a>
  </div>
  </div>
  <div class="conf-overlay"></div>  
  </div>
      </div>
   
  <div class="item item-35 wow slideInLeft col-md-4"  data-toggle="modal" data-target="#laughinfo">

  <div class="conf-item small">
  <img class="center-image" src="assets/img/contentforevents/JustForLaughsOutside.jpg" alt="">
  <div class="conf-info style-2">
  <h4 class="conf-title">Just For Laughs</h4>
  <a class="conf-btn" href="#">view more</a>
  </div>
  <div class="conf-overlay"></div>  
  </div>
      </div>  
  <div class="item item-35 wow slideInRight col-md-4" data-toggle="modal" data-target="#stageinfo">
  <div class="conf-item small">
  <img class="center-image" src="assets/img/contentforevents/TheStageOutside.jpg" alt="">
  <div class="conf-info style-2">
  <h4 class="conf-title">The Stage</h4>
  <a class="conf-btn" href="#">view more</a>
  </div>
  <div class="conf-overlay"></div>  
  </div>
      </div>  

  <div class="item item-35 wow slideInRight col-md-4" data-toggle="modal" data-target="#liveinfo">
  <div class="conf-item small">
  <img class="center-image" src="assets/img/contentforevents/LivewireOutside.jpg" alt="">
  <div class="conf-info style-2">
  <h4 class="conf-title">Livewire</h4>
  <a class="conf-btn" href="#">view more</a>
  </div>
  <div class="conf-overlay"></div>  
  </div>
      </div>  
    
  <!-- <div class="item item-40 wow slideInUp" data-toggle="modal" data-target="#event4">
  <div class="conf-item small" style="background:#000;">
  <div class="conf-info style-2">
  <div class="conf-date">Register Here</div>
  <h4 class="conf-title">Register</h4>
  <div class="conf-text">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod.</div>
  </div>
  <div class="conf-overlay"></div>  
  </div>
      </div>   -->                                
  </div>          
            </div>
          </div>
        </div><br><br><br><br><br><br><br><br><br><br><br>

  <!-- SERVICE -->
  <!--
        <div id="services" class="main-block style-2 clearfix">
          <div class="container">
          <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <div class="block-header style-2">
            <h4 class="block-category">More Features</h4>
            <h2 class="block-title">OUR SERVICES</h2>
            <div class="block-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
          </div>
          </div>
          </div>
                <div class="service-wrapper">
              <div class="row">
              <div class="service-block col-xs-12 col-sm-6 col-md-3">
              <a class="service-entry" href="#">
                                <img class="service-icon" src="img/service_1_d.png" alt="">
              <img class="service-alt" src="img/service_1_w.png" alt="">
              <h4 class="service-title">Timeline</h4>
              <div class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do labore et dolore magna aliqua.</div>
              </a>
              </div>
                        <div class="service-block col-xs-12 col-sm-6 col-md-3">
                            <a class="service-entry" href="#">
                                <img class="service-icon" src="img/service_2_d.png" alt="">
                                <img class="service-alt" src="img/service_2_w.png" alt="">
                                <h4 class="service-title">ORGANIC</h4>
                                <div class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do labore et dolore magna aliqua.</div>
                            </a>
                        </div>
                        <div class="service-block col-xs-12 col-sm-6 col-md-3">
                            <a class="service-entry" href="#">
                                <img class="service-icon" src="img/service_4_d.png" alt="">
                                <img class="service-alt" src="img/service_4_w.png" alt="">
                                <h4 class="service-title">Grunt Workflow</h4>
                                <div class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do labore et dolore magna aliqua.</div>
                            </a>
                        </div>
                        <div class="service-block col-xs-12 col-sm-6 col-md-3">
                            <a class="service-entry" href="#">
                                <img class="service-icon" src="img/service_3_d.png" alt="">
                                <img class="service-alt" src="img/service_3_w.png" alt="">
                                <h4 class="service-title">LUNGSAFE</h4>
                                <div class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do labore et dolore magna aliqua.</div>
                            </a>
                        </div>
                        <div class="service-block col-xs-12 col-sm-6 col-md-3">
                            <a class="service-entry" href="#">
                                <img class="service-icon" src="img/service_5_d.png" alt="">
                                <img class="service-alt" src="img/service_5_w.png" alt="">
                                <h4 class="service-title">Safe for you</h4>
                                <div class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do labore et dolore magna aliqua.</div>
                            </a>
                        </div>
                        <div class="service-block col-xs-12 col-sm-6 col-md-3">
                            <a class="service-entry" href="#">
                                <img class="service-icon" src="img/service_6_d.png" alt="">
                                <img class="service-alt" src="img/service_6_w.png" alt="">
                                <h4 class="service-title">WATERSOLUBLE</h4>
                                <div class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do labore et dolore magna aliqua.</div>
                            </a>
                        </div>
                        <div class="service-block col-xs-12 col-sm-6 col-md-3">
                            <a class="service-entry" href="#">
                                <img class="service-icon" src="img/service_7_d.png" alt="">
                                <img class="service-alt" src="img/service_7_w.png" alt="">
                                <h4 class="service-title">Timeline</h4>
                                <div class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do labore et dolore magna aliqua.</div>
                            </a>
                        </div>
                        <div class="service-block col-xs-12 col-sm-6 col-md-3">
                            <a class="service-entry" href="#">
                                <img class="service-icon" src="img/service_8_d.png" alt="">
                                <img class="service-alt" src="img/service_8_w.png" alt="">
                                <h4 class="service-title">Party Events</h4>f
                                <div class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do labore et dolore magna aliqua.</div>
                            </a>
                        </div>                                                          
              </div>
                </div>
                <div class="text-center">
                    <a class="c-btn b-50 black hv-dark-t" href="#">see all services</a>
                </div>
          </div>
        </div>-->

        <!-- TEAM -->
        
        <!-- BANNER BLOCK -->
        <!--
        <div class="main-block style-3">
          <div class="container">
            <div class="row">
            <div class="left-banner-block">
            <img class="center-image" src="img/left_banner_2.jpg" alt="">
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-offset-6">
            <div class="left-banner-header">
                            <h4 class="left-banner-category">Interesting info</h4>
                            <h2 class="left-banner-title">WE CATER TO EVERY MUSIC LOVER</h2>
                            <div class="left-banner-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>

                            <div class="simple-line-wrapper">
                              <div class="sl-block clearfix">
                              <a href="#"><img class="sl-img" src="img/sl_4.jpg" alt=""></a>
                              <div class="sl-content">
                              <a class="sl-title" href="#">Synthetic colours</a>
                              <div class="sl-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Ut enim ad minim veniam.</div>
                              </div>
                              </div>
                              <div class="sl-block clearfix">
                              <a href="#"><img class="sl-img" src="img/sl_5.jpg" alt=""></a>
                              <div class="sl-content">
                              <a class="sl-title" href="#">Environmental impact</a>
                              <div class="sl-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Ut enim ad minim veniam.</div>
                              </div>
                              </div>
                              <div class="sl-block clearfix">
                              <a href="#"><img class="sl-img" src="img/sl_6.jpg" alt=""></a>
                              <div class="sl-content">
                              <a class="sl-title" href="#">Flammability</a>
                              <div class="sl-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Ut enim ad minim veniam.</div>
                              </div>
                              </div>                                                            
                            </div>
                        </div>
            </div>
            </div>
          </div>
        </div>

-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!-- SCHEDULE -->
        <!--
        <div id="schedule" class="main-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="block-header style-2">
                            <h4 class="block-category">The Schedule</h4>
                            <h2 class="block-title">CONFERENCE SCHEDULE</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-wrapper">
                    <div class="tab-nav-wrapper">
                        <div  class="nav-tab style-2">
                            <div class="nav-tab-item active">
                                Day 1
                            </div>
                            <div class="nav-tab-item">
                                Day 2
                            </div>
                            <div class="nav-tab-item">
                                Day 3
                            </div>                              
                        </div>
                    </div>
                    <div class="tabs-content clearfix">
                        <div class="tab-info active">  
                            <div class="shedule-block style-2 left" style="background:url(assets/img/blur0.jpg)">
                                <img class="shedule-user" src="img/user_11.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Registration</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_11.jpg" alt="">
                                </div>
                            </div>
                            <div class="shedule-block style-2 right" style="background:url(assets/img/blur1.jpg)">
                                <img class="shedule-user" src="img/user_12.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_12.jpg" alt="">
                                </div>
                            </div>
                            <div class="shedule-block style-2 left">
                                <img class="shedule-user" src="img/user_13.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_13.jpg" alt="">
                                </div>
                            </div>                                   
                        </div>
                        <div class="tab-info">
                            <div class="shedule-block style-2 left">
                                <img class="shedule-user" src="img/user_13.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_13.jpg" alt="">
                                </div>
                            </div>
                            <div class="shedule-block style-2 right">
                                <img class="shedule-user" src="img/user_14.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_14.jpg" alt="">
                                </div>
                            </div>
                            <div class="shedule-block style-2 left">
                                <img class="shedule-user" src="img/user_15.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_15.jpg" alt="">
                                </div>
                            </div>                         
                        </div>
                        <div class="tab-info">
                            <div class="shedule-block style-2 left">
                                <img class="shedule-user" src="img/user_15.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_15.jpg" alt="">
                                </div>
                            </div>                        
                            <div class="shedule-block style-2 right">
                                <img class="shedule-user" src="img/user_14.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_14.jpg" alt="">
                                </div>
                            </div>                         
                            <div class="shedule-block style-2 left">
                                <img class="shedule-user" src="img/user_11.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_11.jpg" alt="">
                                </div>
                            </div>
                            <div class="shedule-block style-2 right">
                                <img class="shedule-user" src="img/user_12.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_12.jpg" alt="">
                                </div>
                            </div>
                            <div class="shedule-block style-2 left">
                                <img class="shedule-user" src="img/user_13.jpg" alt="">
                                <div class="shedule-entry">
                                  <div class="shedule-content">
                                  <div class="shedule-header clearfix">
                                  <div class="shedule-header-left">
                                        <h4><a class="shedule-speaker" href="#">Event #</a></h4>
                                        <div class="shedule-position">Event description</div>
                                        </div>                                  
                                        <div class="shedule-date">21.01.2016<br>9:30 am - 11:30 am</div>
                                      </div>
                                      <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                                    </div>
                                    <img class=" src="img/shedule_13.jpg" alt="">
                                </div>
                            </div>                                                                                                
                        </div>                          
                    </div>
                </div>                
            </div>
        </div>
     -->

        <!-- SLIDER-ICONS --><!--
  <div class="main-block style-2" >
          <img class="center-image" src="img/bg_4.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="block-header style-2 color-3">
                            <h4 class="block-category img-full">Video Collection</h4>
                            <h2 class="block-title">video conference 2014</h2>
                            <div class="block-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
                        </div>
                    </div>
                </div>
  <div class="slider-icons swiper-container" data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="5">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-val="0">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_3.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj Alex Crew</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="1">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_4.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj David Guetta</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="2">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_5.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj Deadmau5</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="3">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_1.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj Gareth Emery</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="4">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_2.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj Gareth Emery</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="5">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_3.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj Alex Crew</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="6">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_4.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj David Guetta</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="7">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_5.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj Deadmau5</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="9">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_1.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj Gareth Emery</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>
      <div class="swiper-slide" data-val="10">
  <div class="icon-item">
  <img class="icon-img" src="img/icon_2.png" alt="">
  <div class="icon-date">21.01.2016 / 11:30 am</div>
  <a class="icon-title">Dj Gareth Emery</a>
  <div class="icon-category">first stage</div>
  </div>
      </div>            
    </div>
  <div class="pagination"></div>
  </div>                
            </div>
        </div>        -->


        <!-- TESTIMONALS --><!--
        <div id="testimonials" class="main-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="block-header style-2">
                            <h4 class="block-category">Testimonials</h4>
                            <h2 class="block-title">What People Say About Us</h2>
                            <div class="block-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container" data-autoplay="0" data-initial-slide="1" data-loop="0" data-speed="500" data-center="1" data-slides-per-view="auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-val="0">
                        <div class="testimonals style-2">
                            <img class="center-image" src="img/testimonals_4.jpg" alt="">
                            <div class="testimonals-desc">
                                <div class="testimonals-title">Claire Mccoy</div>
                                <div class="testimonals-position">Head of design team</div>
                                <div class="testimonals-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-val="1">
                        <div class="testimonals style-2">
                            <img class="center-image" src="img/testimonals_5.jpg" alt="">
                            <div class="testimonals-desc">
                                <div class="testimonals-title">Claire Mccoy</div>
                                <div class="testimonals-position">Head of design team</div>
                                <div class="testimonals-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>                            
                        </div>             
                    </div>
                    <div class="swiper-slide" data-val="2">
                        <div class="testimonals style-2">
                            <img class="center-image" src="img/testimonals_4.jpg" alt="">
                            <div class="testimonals-desc">
                                <div class="testimonals-title">Claire Mccoy</div>
                                <div class="testimonals-position">Head of design team</div>
                                <div class="testimonals-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>                             
                        </div>                 
                    </div>
                    <div class="swiper-slide" data-val="3">
                        <div class="testimonals style-2">
                            <img class="center-image" src="img/testimonals_5.jpg" alt="">
                            <div class="testimonals-desc">
                                <div class="testimonals-title">Claire Mccoy</div>
                                <div class="testimonals-position">Head of design team</div>
                                <div class="testimonals-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>                             
                        </div>                
                    </div>
                    <div class="swiper-slide" data-val="4">
                        <div class="testimonals style-2">
                            <img class="center-image" src="img/testimonals_4.jpg" alt="">
                            <div class="testimonals-desc">
                                <div class="testimonals-title">Claire Mccoy</div>
                                <div class="testimonals-position">Head of design team</div>
                                <div class="testimonals-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>                             
                        </div>                
                    </div>                        
                </div>
                <div class="pagination hidden"></div>
            </div> 
        </div>
-->
  <!-- NEWS --><!--
        <div class="main-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="block-header style-2">
                            <h4 class="block-category">Latest News</h4>
                            <h2 class="block-title">interesting news</h2>
                        </div>
                    </div>
                </div>
                <div class="news-wrapper row">
                  <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                  <div class="news type-1 facebook">
                  <h4><a class="news-title" href="#">Intel, Rackspace to Build Beachhead for OpenStack’s Next Phase in Texas</a></h4>
                  <div class="news-date"><i class="fa fa-calendar"></i> 20 July 2015</div>
                  <a class="news-type" href="#"><i class="fa fa-facebook"></i></a>
                  <div class="news-likes">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i> 980</a>
                  <a href="#"><i class="fa fa-comment-o"></i> 79</a>
                  </div>
                  </div>
                  </div>
                  <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                  <div class="news type-2">
                  <img class=" src="img/news_5.jpg" alt="">
                  <div class="news-desc">
                  <h4><a class="news-title" href="#">OpenStack’s Next Phase in Texas</a></h4>
                  <div class="news-date"><i class="fa fa-calendar"></i> 20 July 2015</div>
                  </div>
                  </div>
                  </div>
                  <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                  <div class="news type-1 twitter">
                  <h4><a class="news-title" href="#">Intel, Rackspace to Build Beachhead for OpenStack’s Next Phase in Texas Dropbox Acquires Enterprise </a></h4>
                  <div class="news-date"><i class="fa fa-calendar"></i> 20 July 2015</div>
                  <a class="news-type" href="#"><i class="fa fa-facebook"></i></a>
                  <div class="news-likes">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i> 980</a>
                  <a href="#"><i class="fa fa-star-o"></i> 79</a>
                  </div>
                  </div>
                  </div>
                  <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                  <div class="news type-2">
                  <img class=" src="img/news_6.jpg" alt="">
                  <div class="news-desc">
                  <h4><a class="news-title" href="#">The Open Container Initiative Adds</a></h4>
                  <div class="news-date"><i class="fa fa-calendar"></i> 20 July 2015</div>
                  </div>
                  </div>
                  </div>
                  <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                  <div class="news type-1 twitter">
                  <h4><a class="news-title" href="#">Next Phase In Texas Dropbox Acquires</a></h4>
                  <div class="news-date"><i class="fa fa-calendar"></i> 20 July 2015</div>
                  <a class="news-type" href="#"><i class="fa fa-facebook"></i></a>
                  <div class="news-likes">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i> 980</a>
                  <a href="#"><i class="fa fa-star-o"></i> 79</a>
                  </div>
                  </div>
                  </div>
                  <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                  <div class="news type-1 facebook">
                  <h4><a class="news-title" href="#">Alibaba Cloud Division Aliyun Shares loud Privacy Commitment as it Vies for Global Business</a></h4>
                  <div class="news-date"><i class="fa fa-calendar"></i> 20 July 2015</div>
                  <a class="news-type" href="#"><i class="fa fa-facebook"></i></a>
                  <div class="news-likes">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i> 980</a>
                  <a href="#"><i class="fa fa-comment-o"></i> 79</a>
                  </div>
                  </div>
                  </div>                                  
                </div>
                <div class="more-block">file:///C:/Users/Dellpc/Documents/MohitS10.github.io/image/3.jpg
                  <a class="c-btn b-50 black hv-dark-t" href="#">load more posts</a>
                </div>
            </div>
        </div>-->

  <!--       
<div class="main-block clearfix diagonal" id="gallery">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="block-header style-3">
                  
                  <h2 class="block-title" style="color:#fff">Gallery</h2>

                </div>
              </div>
            </div>
            

       <div id="coverflow">
        <ul class="flip-items">
            <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                <img src="assets/img/pic/hist/DSC_0042.JPG" style="width:500px;height:400px">
             </li>
            <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                <img src="assets/img/pic/hist/DSC_0045.JPG" style="width:500px;height:400px">
            </li>
            <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                <img src="assets/img/pic/hist/DSC_0072.JPG" style="width:500px;height:400px">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="assets/img/pic/hist/DSC_0073.JPG" style="width:500px;height:400px">
            </li>
            <li data-flip-title="Dodger Blue" data-flip-category="Blues">
                <img src="assets/img/pic/hist/DSC_0079.JPG" style="width:500px;height:400px">
            </li>
            <li data-flip-title="Cyan" data-flip-category="Blues">
                <img src="assets/img/pic/hist/DSC_0090.JPG" style="width:500px;height:400px">
            </li>
            <li data-flip-title="Robin's Egg" data-flip-category="Blues">
                <img src="assets/img/pic/hist/DSC_0327.JPG" style="width:500px;height:400px">
            </li>
            <li data-flip-title="Deep Sea" data-flip-category="Greens">
                <img src="assets/img/pic/hist/DSC_0438.JPG" style="width:500px;height:400px">
            </li>
            <li data-flip-title="Apple" data-flip-category="Greens">
                <img src="assets/img/pic/hist/DSC_0447.JPG" style="width:500px;height:400px">
            </li>
        </ul>
    </div>

    </div>  
</div>
  
 -->
  <!-- VIDEO --><!--
        <div class="main-block style-2">
          <img class="center-image" src="img/bg_5.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="block-header style-2 color-3">
                            <h4 class="block-category img-full">Video Collection</h4>
                            <h2 class="block-title">video conference 2014</h2>
                            <div class="block-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
                        </div>
                    </div>
                </div>

  <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="1" data-add-slides="2">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-val="0">
                  <div class="video style-2">
                    <img class="img-full" src="img/video_3.jpg" alt="">
                    <a class="play-btn" data-video="http://www.youtube.com/embed/wTcNtgA6gHs?autoplay=1" href="#"><span class="play-icon"></span></a>
                      <div class="movie">
                          <iframe src="about:blank" class=""></iframe>
                          <div class="close-button">
                              <i class="fa fa-times"></i>
                          </div>                      
                      </div>                    
                  </div>
                  <div class="video-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</div>
      </div>
      <div class="swiper-slide" data-val="1">
                  <div class="video style-2">
                    <img class="img-full" src="img/video_3.jpg" alt="">
                    <a class="play-btn" data-video="http://www.youtube.com/embed/wTcNtgA6gHs?autoplay=1" href="#"><span class="play-icon"></span></a>
                      <div class="movie">
                          <iframe src="about:blank" class=""></iframe>
                          <div class="close-button">
                              <i class="fa fa-times"></i>
                          </div>                      
                      </div>                    
                  </div>
                  <div class="video-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</div>                 
      </div>
      <div class="swiper-slide" data-val="2">
                  <div class="video style-2">
                    <img class="img-full" src="img/video_3.jpg" alt="">
                    <a class="play-btn" data-video="http://www.youtube.com/embed/wTcNtgA6gHs?autoplay=1" href="#"><span class="play-icon"></span></a>
                      <div class="movie">
                          <iframe src="about:blank" class=""></iframe>
                          <div class="close-button">
                              <i class="fa fa-times"></i>
                          </div>                      
                      </div>                    
                  </div>
                  <div class="video-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</div>                 
      </div>
      <div class="swiper-slide" data-val="3">
                  <div class="video style-2">
                    <img class="img-full" src="img/video_3.jpg" alt="">
                    <a class="play-btn" data-video="http://www.youtube.com/embed/wTcNtgA6gHs?autoplay=1" href="#"><span class="play-icon"></span></a>
                      <div class="movie">
                          <iframe src="about:blank" class=""></iframe>
                          <div class="close-button">
                              <i class="fa fa-times"></i>
                          </div>                      
                      </div>                    
                  </div>
      </div>
      <div class="swiper-slide" data-val="4">
                  <div class="video style-2">
                    <img class="img-full" src="img/video_3.jpg" alt="">
                    <a class="play-btn" data-video="http://www.youtube.com/embed/wTcNtgA6gHs?autoplay=1" href="#"><span class="play-icon"></span></a>
                      <div class="movie">
                          <iframe src="about:blank" class=""></iframe>
                          <div class="close-button">
                              <i class="fa fa-times"></i>
                          </div>                      
                      </div>                    
                  </div>
                  <div class="video-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</div>                 
      </div>        
    </div>
  <div class="pagination"></div>
  </div>  


            </div>
        </div>-->

  <!-- SPONSORS -->
        <div id="partners" class="main-block style-2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="block-header style-2">
                            <h2 class="block-title">our sponsors</h2>
                             <h4>Coming Soon!</h4>
                        </div>
                    </div>
                </div>
                <!-- <div class="sponsor-wrapper row no-margin">
                  <div class="no-padding col-xs-6 col-md-3">
                  <div class="sponsor-entry green">
  <img src="sponsor/1.jpg" alt="">
                  </div>
                  </div>
                  <div class="no-padding col-xs-6 col-md-3">
                  <div class="sponsor-entry white">
  <img src="sponsor/2.jpg" alt="">
                  </div>
                  </div>
                  <div class="no-padding col-xs-6 col-md-3">
                  <div class="sponsor-entry blue">
  <img src="sponsor/3.jpg" alt="">
                  </div>
                  </div>
                  <div class="no-padding col-xs-6 col-md-3">
                  <div class="sponsor-entry white">
  <img src="sponsor/4.jpg" alt="">
                  </div>
                  </div>
                  <div class="no-padding col-xs-6 col-md-3">
                  <div class="sponsor-entry white">
  <img src="sponsor/5.jpg" alt="">
                  </div>
                  </div>
                  <div class="no-padding col-xs-6 col-md-3">
                  <div class="sponsor-entry red">
  <img src="sponsor/6.jpg" alt="">
                  </div>
                  </div>
                  <div class="no-padding col-xs-6 col-md-3">
                  <div class="sponsor-entry white">
  <img src="sponsor/7.jpg" alt="">
                  </div>
                  </div>                                             
                  <div class="no-padding col-xs-6 col-md-3">
                  <div class="sponsor-entry lightblue">
  <img src="sponsor/8.jpg" alt="">
                  </div>
                  </div>                                    
                </div>  -->            
            </div>
            <!-- <div class="btn btn-large btn-danger">Download our media plan</div> -->
        </div>

        
          <div id="speakers" class="main-block style-2 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="block-header style-2">
                            <h2 class="block-title">Meet our team</h2>
                            <h4 class="block-desc hidden-xs">Drag us and make us Ulta Pulta!</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-wrapper">
            <div class="container">
              <div class="row">
              <div class="col-xs-4 col-sm-3 wow slideInRight">
              <div class="team-entry" style="text-align:center;">
              <p class="team-img"><img class="imground" src="assets/team/01.jpg" alt=""></p>
              <p class="team-title">Raunak Bhojwani</p>
              <div class="team-pos">General Secretary</div>
              </div>
              </div>
              <div class="col-xs-4 col-sm-3 wow slideInDown">
              <div class="team-entry" style="text-align:center;">
              <p class="team-img"><img class="imground" src="assets/team/02.jpg" alt=""></p>
              <p class="team-title">Simran Kohli</p>
              <div class="team-pos">Joint Secretary</div>
              </div>
              </div>
              <div class="col-xs-4 col-sm-3 wow slideInDown">
              <div class="team-entry" style="text-align:center;">
              <p class="team-img"><img class="imground" src="assets/team/03.jpg" alt=""></p>
              <p class="team-title">Divyansh Agarwal</p>
              <div class="team-pos">Chief Histrionica Coordinator</div>
              </div>
              </div>          

              <div class="col-xs-4 col-sm-3 wow slideInLeft">
              <div class="team-entry" style="text-align:center;">
              <p class="team-img"><img class="imground" src="assets/team/04.jpg" alt=""></p>
              <p class="team-title">Veni Arora</p>
              <div class="team-pos">Head of Corporate Communications</div>
              </div>
              </div>         

              <div class="col-xs-4 col-sm-3 wow slideInRight">
              <div class="team-entry" style="text-align:center;">
              <p class="team-img"><img class="imground" src="assets/team/05.jpg" alt=""></p>
              <p class="team-title">Saniya Khan</p>
              <div class="team-pos">Head of Media &amp; Marketing</div>
              </div>
              </div>         

              <div class="col-xs-4 col-sm-3 wow slideInUp">
              <div class="team-entry" style="text-align:center;">
              <p class="team-img"><img class="imground" src="assets/team/06.jpg" alt=""></p>
              <p class="team-title">Saurav Goyal</p>
              <div class="team-pos">Head of Media &amp; Marketing</div>
              </div>
              </div>         

              <div class="col-xs-4 col-sm-3 wow slideInUp">
              <div class="team-entry" style="text-align:center;">
              <p class="team-img"><img class="imground" src="assets/team/07.jpg" alt=""></p>
              <p class="team-title">G. Harishankar</p>
              <div class="team-pos">Head of Creative</div>
              </div>
              </div>         

              <div class="col-xs-4 col-sm-3 wow slideInLeft">
              <div class="team-entry" style="text-align:center;">
              <p class="team-img"><img class="imground" src="assets/team/08.jpg" alt=""></p>
              <p class="team-title">Ayush Golchha</p>
              <div class="team-pos">Head of Logistics</div>
              </div>
              </div>                        
              </div>            
            </div>
            </div>           
        </div>

  <div id="contact" class="contact-block bg-dark">
           
              <div class="row">
              <div class="col-xs-12 col-md-6">
              <div class="contact-entry">
              
                   <div class="container">
                          <div class="s-contact">
                    <div class="contact-title">contact us</div>
                    <hr>
                    </div>  
                          </div>  
                          <div class="contact-row">
                    <div class="col-xs-12 col-sm-6">
                    <p class="contactid"><b>Saniya Khan</b>,<br>Head for Media and Marketing,<br>
                    <i class="fa fa-phone"></i>+91 88001 44403</p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                    <p class="contactid"><b>Saurav Goyal</b>,<br>Head for Media and Marketing,<br>
                    <i class="fa fa-phone"></i>+91 98716 41219</p>
                    </div>
                    <br>
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">
                    <a href="http://www.facebook.com/histrionica.srcc" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
                      <a href="http://www.twitter.com/dramaticssrcc" target="_blank"> <i class="fa fa-twitter fa-3x"></i></a>
     <a href="http://www.instagram.com/dramaticssocietysrcc" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
     <a href="mailto:histrionica2016@gmail.com"><i class="fa fa-envelope fa-3x"></i></a>
                         </div>
                         <div class="col-sm-1"></div>
                         <div class="col-sm-5" style="margin-bottom:10px">
                          <div class="btn btn-danger"  data-toggle="modal" data-target="#contactme"><i class="fa fa-paper-plane"></i>Shoot us a question!</div>
                         </div>
                    </div>
                                    </div>
                
                
                          
              
              </div>
              </div>
              <div class="col-md-6 map-block">
              <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJw49SkmO45zsRTfbC8L-Aowo&key=AIzaSyBNc6c37RSf2x-l9_gQz9c-cdvNWCkh3D0" allowfullscreen width="100%" height="100%"></iframe>
              </div>
              </div>
            </div>
        </div>

    
  
 
 


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade " id="aahvaaninfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modalwide" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Aahvaan</h1>
      </div>
      <div class="modal-body">
        <div class="col-xs-12 col-md-6">
        Prepare to have your energy levels soar as the beat of the dafli thrums through your veins and reverberates through the massive crowd assembled under the shade of our famous banyan tree. Loud and clear voices ringing in the air, their exuberance silencing the crowd with every shout. Expect teams to contort beyond expectation creating human formations that will keep you spellbound. With applications from over fifty colleges, Aahvaan is a magnificent blast of life, music, color and grandeur – all coming together to raise pressing issues in the society we live in, leaving the audience in splits and more often than not, in tears.<br><br><br>
         <b>General Instructions:</b><br>
1. Preliminary round for Aahvaan will be held on Sunday, 31st January 2016.    <br>
2. Time Limit: 10 minutes<br>

<br><hr>
For More Information Contact:<br><br>
<div class="col-xs-6">
<img class="chotu" src="assets/team/01.jpg"> <br>
Raunak Bhojwani<br>
+91-9971876076
</div>
<div class="col-xs-6">
<img class="chotu" src="assets/team/07.jpg"> <br>
G. Harishankar<br>
+91-9654491281
</div>
        </div>
        <div class="col-xs-12 col-md-6">
        <img src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10420396_720097431442286_7151802918754270659_n.jpg?oh=cf4415e0bbb2fa4686c5c3090ffaa90e&oe=57491622&__gda__=1460407368_651db467735ab5e88c615933013ec779" alt="" style="width:100%">
        </div>
       
      </div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>


<div class="modal fade " id="charadesinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modalwide" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Charades</h1>
      </div>
      <div class="modal-body">
        <div class="col-xs-12 col-md-6">
        
Charades is our bilingual Stage Play event, which has entertained audience since its inception and has attracted theatre lovers from across 30 colleges across the country. One can witness stories come to life as a matrix of lights decorate each strain of human emotion. This event, of national repute, has now come to represent the best of college theatre.<br><br><br>
         <b>General Instructions:</b><br>
1. Preliminary round for Charades will be held on Saturday, 6th February 2016. <br>
 2. teams are requested to carry their own sound equipment for Prelim. Host college would not provide anything in this regard.

 <br>
3. 3 armless chairs, 2 armed chairs and a small table would be provided by Host College. teams are requested to carry all other necessary props. <br>
4. Lighting of cigarettes, matchsticks and candles is hazardous on stage and will lead to disqualification. <br>
5. Only general lights and blackouts are allowed. <br>
6. Time Limit: 15 minutes (Including stage set up and clearance)<br>

<br><hr>
For More Information Contact:<br><br>
<div class="col-xs-6">
<img class="chotu" src="assets/team/02.jpg"> <br>
Simran Kohli<br>
+91-9818815103
</div>
<div class="col-xs-6">
<img class="chotu" src="assets/team/08.jpg"> <br>
Ayush Golchha<br>
+91-9871637896
</div>
<br><br>
        </div>
        <div class="col-xs-12 col-md-6">
        <img src="assets/img/contentforevents/charadesInside.jpg" alt="" style="width:100%">
        <br><br><br>
        </div>
      </div>
      <br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
<div class="modal fade" id="event3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="laughinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modalthin" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Just For Laughs</h1>
      </div>
      <div class="modal-body">
        <div>
        Laughter is in itself a form of the performing art and this art comes alive in what is one of the most popular segments of the festival, Just For Laughs with a footfall of almost 1000 people. Look forward to an afternoon of riotous fun and hilarious laughter. A stand up comedy session that does not fail to tickle your funny bones. In the previous years, we had East India Comedy and Papa CJ with their brilliant sense of humour and this year and are looking forward to many more of these kind of artists.
        <br><br><br>
        <img src="assets/img/contentforevents/JustForLaughsInside.jpg" alt="" style="width:100%">
        </div>
      </div>
      <br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>

<div class="modal fade " id="stageinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modalthin" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">The Stage</h1>
      </div>
      <div class="modal-body">
        <div>
        Theatre is not just a way to express yourself but indeed an opportunity to learn and experience every day. “The Stage” is one such stage that provides university students with a platform to interact one to one with eminent theatre personalities during the festival It allows the theatre and the celebrity enthusiasts to further interests in drama. Previous year, Histrionica welcomed renowned theatre personalities Farhan Akhtar and Vidya Balan from the film industry to share some of their experiences with theatre imparting the crowd about its importance in one’s life
    <br><br><br>
        <img src="assets/img/contentforevents/TheStageInside.jpg" alt="" style="width:100%">
        </div>
      </div>
      <br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>

<div class="modal fade " id="liveinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modalthin" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Livewire</h1>
      </div>
      <div class="modal-body">
        <div>
        With the pounding beat of the drums and the enthralling notes of the electric guitar blending perfectly with practiced vibrato, Histrionica’s rock night - Live Wire, is truly a night to look forward to. Thousands of people sway to the aural finesse of the likes of The Raghu Dixit Project and Agnee, rejoicing in their art - the perfect spectacle of how music brings us all together.
        <br><br><br>  
        <img src="assets/img/contentforevents/LiveWireInside.jpg" alt="" style="width:100%">
        </div>
      </div>
      <br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>



<div class="modal fade" id="contactme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact</h4>
      </div>
      <div class="modal-body">
        <div style="">
                     <script type="text/javascript" src="https://form.jotform.me/jsform/60222384018447"></script> 
                                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--
<div class="modal fade" id="ytp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QfyqJZ08xDY" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
-->

<script>
function getState(val,val2) {
  $.ajax({
  type: "POST",
  url: "get_state.php",
  data:'college='+val+'&type='+val2,
  success: function(data){
    if(val2=='street')
      $("#aaPlayName").html(data);
    if(val2=='stage')
      $("#chPlayName").html(data);
  }
  });
}
</script>

<!-- Register -->
<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modalwide" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registration</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        1.  One team member is first required to register the play by filling in all necessary fields, attaching the script and giving the synopsis.
<br>
2. The script of the play should be sent by mail to histrionica2016@gmail.com with the name of the team and the play included in the subject of the mail. 
<br>
3. Once the play is registered, the team members need to register individually. For this, the names and email id’s of all the team members would be required. Kindly note that there is no prescribed team limit for Preliminary rounds. However, team members who have not registered will not be allowed to participate.
<br>
4. Please make sure to fill all the fields correctly as any changes would not be accepted.
<br>
5. Registrations close at 11:59PM on 28th January 2016 (for Aahvaan: Street Play Event) and on 11:59PM on 2nd February 2016 (for Charades: Stage Play Event). Any entries post that would not be accepted.
<br>
6. Once we receive your registration along with the script, we will be sending you a mail to confirm the same. This mail does not guarantee your participation in the Preliminary Rounds of Histrionica.
<br>
7. There follows a script screening after which the selected teams will get through to our Preliminary Rounds. An email would be sent to confirm your participation and provide the slot.  
<br>
8. The proposed dates for Preliminary Rounds are Sunday, 31st January 2016 (for Aahvaan: Street Play Event) and Saturday, 6th February 2016 (for Charades: Stage Play Event).
<br>
9. Follow our <a href="https://www.facebook.com/histrionica.srcc" target="_blank">Facebook Page </a> for further updates.<br><br>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <a data-toggle="modal" data-target="#teamc"><img src = "assets/img/woah.jpg" width="100%" class="imgreg" ></a>
          </div>
          <div class="col-md-6">
            <a data-toggle="modal" data-target="#ind"><img src = "assets/img/woah2.jpg" width="100%" class="imgreg"></a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- team Coordinator -->
<div class="modal fade" id="teamc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modalwide" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registration</h4>
      </div>
      <div class="modal-body">
        <div class="container">
    
    <form class="form-horizontal" id='formtc'>
  <fieldset>

  <!-- Form Name -->

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="tcPlayType">Register for</label>
    <div class="col-md-5">
      <select id="tcPlayType" name="tcPlayType" class="form-control">
        <option value="Street">Aahvaan (Street Play)</option>
        <option value="Stage">Charades (Stage Play)</option>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="tcCollegeName">Name Of College</label>  
    <div class="col-md-5">
    <input id="tcCollegeName" name="tcCollegeName" type="text" placeholder="" class="form-control input-md" required="">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="tcPlayName">Name Of Play</label>  
    <div class="col-md-5">
    <input id="tcPlayName" name="tcPlayName" type="text" placeholder="" class="form-control input-md" required="">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="tcteamMembers">Number Of team Members</label>  
    <div class="col-md-4">
    <input id="tcteamMembers" name="tcteamMembers" type="text" placeholder="" class="form-control input-md" required="">
    <span class="error e1">Enter Numbers Only</span>  
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="coord1">team Coordinator 1</label>  
    <div class="col-md-5">
      <input id="coord1" name="coord1" type="text" placeholder="" class="form-control input-md" required="">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="contact1">Contact Number</label>  
    <div class="col-md-4">
    <input id="contact1" name="contact1" type="text" placeholder="" class="form-control input-md" required="">
    <span class="error e2">Enter Numbers Only</span> 
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="coord2">team Coordinator 2</label>  
    <div class="col-md-5">
    <input id="coord2" name="coord2" type="text" placeholder="" class="form-control input-md" required="">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="contact2">Contact Number</label>  
    <div class="col-md-4">
    <input id="contact2" name="contact2" type="text" placeholder="" class="form-control input-md" required="">
    <span class="error e3">Enter Numbers Only</span>
  </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="synopsis">Synopsis (limit 100 words)</label>
    <div class="col-md-4">                     
      <textarea class="form-control" id="synopsis" name="synopsis" required></textarea>
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
  <div class="col-md-4"></div>  
    <div class="col-md-4">
      <button id="submittc" name="submittc" class="btn btn-inverse">Submit</button>
    </div>
  </div>

  </fieldset>
  </form>

    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
</div>

<!-- <div class="modal fade " id="yt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modalwide" role="document">
    <div class="modal-content">
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/QfyqJZ08xDY?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="1" allowfullscreen></iframe>
    </div>
  </div>
</div> -->


<!-- Individual -->
<div class="modal fade" id="ind" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modalwide" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registration</h4>
      </div>
      <div class="modal-body">
        
    <ul class="nav nav-pills nav-justified">
      <li class="active addw"><a data-toggle="pill" href="#aahvaan">Aahvaan (Street Play)</a></li>
      <li class="addw"><a data-toggle="pill" href="#charades">Charades (Stage Play)</a></li>
  </ul><br><br><br>
    <div class="tab-content">
      <div id="aahvaan" class="tab-pane fade in active">
        
        <form class="form-horizontal" id="aaform">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="aaname">Name</label>  
  <div class="col-md-5">
  <input id="aaname" name="aaname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="aaemail">Email ID</label>  
  <div class="col-md-5">
  <input id="aaemail" name="aaemail" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="aaCollegeName">Name Of College</label>
  <div class="col-md-5">
    <select id="aaCollegeName" name="aaCollegeName" class="form-control" onChange="getState(this.value,'street');" required>
      <option value="">Select College</option>
        <?php
        foreach($results as $college) {
           if($college["Street / Stage"]=='street')
          {
        ?>
        <option value="<?php echo $college["College Name"]; ?>"><?php echo $college["College Name"]; ?></option>
        <?php
        }
        }
        ?>
    </select>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="aaPlayName">Name Of Play</label>  
  <div class="col-md-5">
    <select name="play" id="aaPlayName">
    </select>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submitaa">Submit</label>
  <div class="col-md-4">
    <button id="submitaa" name="submitaa" class="btn btn-inverse">Go!</button>
  </div>
</div>

</fieldset>
</form>
  
          
</div>

      <div id="charades" class="tab-pane fade">
        
          <form class="form-horizontal" id="chform">
<fieldset>

<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="chname">Name</label>  
  <div class="col-md-5">
  <input id="chname" name="chname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="chemail">Email ID</label>  
  <div class="col-md-5">
  <input id="chemail" name="chemail" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="chCollegeName">Name Of College</label>
  <div class="col-md-5">
    <select id="chCollegeName" name="chCollegeName" class="form-control" onChange="getState(this.value,'stage');" required>
      <option value="">Select College</option>
        <?php
        foreach($results as $college) {
          if($college["Street / Stage"]=='stage')
          {
        ?>
        <option value="<?php echo $college["College Name"]; ?>"><?php echo $college["College Name"]; ?></option>
        <?php
          }
        }
        ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="chPlayName">Name Of Play</label>  
  <div class="col-md-5">
    <select name="play" id="chPlayName">
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submitch">Submit</label>
  <div class="col-md-4">
    <button id="submitch" name="submitch" class="btn btn-inverse">Go!</button>
  </div>
</div>

</fieldset>
</form>

      </div>
    </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


    <!-- FOOTER -->
    <footer class="footer">
      <div class="container">
      <div class="copy">Rahul and Mohit</div>
      </div>
    </footer>



    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
     <script src="js/jquery.flipster.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/anchors.navigation.js"></script>    
    <script src="js/imagelightbox.min.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.throttle.js"></script> 
    <script src="js/global.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  
     <script>
              new WOW().init();
     </script>


    <script>
    var mySwiper = new Swiper('.swiper-container',{
    autoplay: 7000,
    loop: true
  });   
    </script>

    <script>
    var coverflow = $("#coverflow").flipster();
    $("#coverflow").flipster({
      loop: true,

    });

  </script>
  <script>
  $(function() {
  $( ".team-entry" ).draggable();
  $(".error").hide();
});
  </script>

    <script>
    $('#ultapulta').click(function(){
      $('#upcontent').toggleClass("up");
      $('#upcontent').toggleClass("down");
      $('#ulta').toggleClass("up");
      $('#ulta').toggleClass("down");
      $('#cool').show();

    })
    </script>

<script>
  $("#formtc").submit(function(e) {
    e.preventDefault();
    $(".error").hide();
  
  flag = true; //Check this flag
  if(/^\d+$/.test($('#tcteamMembers').val()) === false){ $('.e1').show(); flag=false;}
  if(/^\d+$/.test($('#contact1').val()) === false){ $('.e2').show(); flag=false;}
  if(/^\d+$/.test($('#contact2').val()) === false){ $('.e3').show(); flag=false;}

  if(flag)
  {
    dataString = $(this).serialize();
    $.ajax({
    type: "POST",
      url: "submittc.php",
      data: dataString,
      success: function(){
    alert("Success!");
        }
    });
  }
});
</script>

<script>
  $("#aaform").submit(function(e) {
    e.preventDefault(); 
  
    dataString = $(this).serialize();
    alert(dataString);
    $.ajax({
    type: "POST",
      url: "submitaa.php",
      data: dataString,
      success: function(){
    alert("Success!");
        }
    });
});
</script>

<script>
  $("#chform").submit(function(e) {
    e.preventDefault(); 
    dataString = $(this).serialize();
    $.ajax({
    type: "POST",
      url: "submittc.php",
      data: dataString,
      success: function(){
    alert("Success!");
        }
    });
  
});
</script>

<script>
  $("#contactform").submit(function(e) {
    e.preventDefault(); 

      dataString = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "email.php",
            data: dataString,
            success: function(){
            alert('Success!');
            }
        });

    });
</script>
</body>
</html>
