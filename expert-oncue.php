<?php

include_once(dirname(__FILE__) . '/bits/common.php');
commonHeaders();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tru Media Productions</title>

 

    <?php include_once(dirname(__FILE__) . '/bits/meta_header.php');?>

  </head>
  <body class="projects oncue">
    <?php include_once(dirname(__FILE__) . '/bits/navbar_top.php');?>
  <section>

    <div class="container">
      <div class="section-header">
        <h3>Expert OnCue Website</h3>
      </div>
    </div>

    <!--  Carousel - consult the Twitter Bootstrap docs at 
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
    <div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
      <div class="carousel-inner">
        <div class="item active"><!-- class of active since it's the first item -->
          <img src="images/mockup.png">
        </div>
        <div class="item">
          <img src="images/mockup1.png">
        </div>
      </div>
        <a class="carousel-control left" href="#this-carousel-id" data-slide="prev"><span class="fui-arrow-left"></span></a>
        <a class="carousel-control right" href="#this-carousel-id" data-slide="next"><span class="fui-arrow-right"></span></a>
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
    </div>
    <div class="full-content">
      <div class="col-md-6 fc-1">
        <div class="row">
          <div class="container">
            <h4>The Challenge:</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 fc-2">
        <div class="row">
          <div class="container">
            <h4>The Solution:</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <ul class="pro-icons">
              <li>
                <div id="pro-icon">
                  <i class="fa fa-lightbulb-o"></i>
                  <div id="pro-icon-tag">
                      Branding
                  </div>
                </div>
              </li>
              <li>
                <div id="pro-icon">
                  <i class="fa fa-film"></i>
                  <div id="pro-icon-tag">
                      Video Editing
                  </div>
                </div>
              </li>
              <li>
                <div id="pro-icon">
                    <i class="fa fa-video-camera"></i>
                    <div id="pro-icon-tag">
                        Filming
                    </div>
                </div>
              </li>
              <li>
                <div id="pro-icon">
                    <i class="fa fa-camera"></i>
                    <div id="pro-icon-tag">
                        Photography
                    </div>
                </div>
              </li>
              <li>
                <div id="pro-icon">
                    <i class="fa fa-code"></i>
                    <div id="pro-icon-tag">
                        Web Developement
                    </div>
                </div>
              </li>
              <li>
                <div id="pro-icon">
                    <i class="fa fa-pencil"></i>
                    <div id="pro-icon-tag">
                        Design
                    </div>
                </div>
              </li>
            </ul>
            
            <br><br>
            <a class="btn btn-primary btn-lg" href="#">The Website</a>
          </div>
        </div>
      </div>
    </div>

  <div class="block-shoutout">
    <h4>The Success Story</h4>
  </div>

    <div class="container project-story">
      <div class="row">
        <div class="col-md-6">
          <div class="project-thumb"></div>
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-6">
          <div class="project-thumb"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="project-thumb"></div>
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-6">
          <div class="project-thumb"></div>
        </div>
      </div>
    </div>

  </section>

    <?php include_once(dirname(__FILE__) . '/bits/footer.php');?>

  </body>  

