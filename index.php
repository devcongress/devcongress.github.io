<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Echo - Listen to software enthusiasts around the globe tell their stories</title>
  <meta name="description" content="developers, podcast, devcongress, africa, designers, technology, php, javascript, ruby, frameworks, startups" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="css/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="css/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="css/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="css/styles/style.css" type="text/css" />
  <link rel="stylesheet" href="css/styles/font.css" type="text/css" />
  
  <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.theme.css" type="text/css" />
  <link rel="stylesheet" href="libs/mediaelement/build/mediaelementplayer.min.css" type="text/css" />
  <link rel="stylesheet" href="libs/mediaelement/build/mep.css" type="text/css" />

  <!-- endbuild -->
</head>
<body>
  <div class="app dk" id="app">

<!-- ############ LAYOUT START-->

  <!-- content -->
  <div id="content" class="app-content white bg" role="main">
    
    <div class="app-footer app-player grey bg">
      <div class="playlist" style="width:100%"></div>
    </div>
    <div class="app-body" id="view">

<div class="owl-carousel black owl-theme owl-dots-bottom-center" data-ui-jp="owlCarousel" data-ui-options="{
             items: 1
            ,loop: true
            ,autoplay: true
            ,nav: true
          }">
  <div class="row-col">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 text-center">
      <div class="p-a-lg">
        <h2 class="display-4 m-y-lg">Echo, <br/>Weekly Web Talk With Software Enthusiasts</h2>
        <h6 class="text-muted m-b-lg">Sponsored by DevLess.</h6>
        <a href="#" class="btn circle btn-outline b-primary m-b-lg p-x-md">Listen Now</a>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>
<!-- ############ PAGE START-->

<div class="page-content">
  <div class="container dv-mediaWrap">
    <div class="row-col">
      <div class="col-md-12 no-border-md">
        <div class="padding">
          <h2 class="widget-title h4 m-b">Recent Podcasts</h2>
          <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-3">
              <div class="item r" data-id="item-12" data-src="https://api.soundcloud.com/tracks/294038663">
                <div class="item-media ">
                  <a href="#" class="item-media-content" style="background-image: url('images/edem_kumodzi.jpg');"></a>
                  <div class="item-overlay center">
                    <button  class="btn-playpause">Play</button>
                  </div>
                </div>
                <div class="item-info">
                  <div class="item-overlay bottom text-right">
                    <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                    <a href="#" class="btn-more" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                  <div class="dropdown-menu pull-right black lt"></div>
                </div>
                <div class="item-title text-ellipsis">
                  <a href="#">Life as a Software Developer by Edem Kumodzi </a>
                </div>
                <div class="item-author text-sm text-ellipsis ">
                  <a href="#" class="text-muted">30 days ago</a>
                </div>
              </div>
            </div>
          </div>
            
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

<!-- ############ LAYOUT END-->
  </div>

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
  <script src="libs/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="libs/tether/dist/js/tether.min.js"></script>
  <script src="libs/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/jquery.stellar/jquery.stellar.min.js"></script>
  <script src="libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="libs/jscroll/jquery.jscroll.min.js"></script>
  <script src="libs/PACE/pace.min.js"></script>
  <script src="libs/jquery-pjax/jquery.pjax.js"></script>

  <script src="libs/mediaelement/build/mediaelement-and-player.min.js"></script>
  <script src="libs/mediaelement/build/mep.js"></script>
  <script src="scripts/player.js"></script>

  <script src="scripts/config.lazyload.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>
  <script src="scripts/ui-taburl.js"></script>
  <script src="scripts/app.js"></script>
  <script src="scripts/site.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>
