
  <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <?php if (isset($seo->meta_title)) { ?>
    <?php $title = $seo->meta_title;
        eval("\$title = \"$title\";"); ?>
        <title><?php echo $title; ?></title>
    <?php } else { ?>
        <title>Wateen Travels - Your Gateway to Spiritual Journeys from Kashmir!</title>
    <?php } ?>
  <!-- <//?php if (isset($seo->entity) && $seo->entity == 16) { ?>
    <meta name="robots" content="noindex, nofollow">
  <//?php } ?> -->
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo base_url();?>assets/images/allPackages.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta content="Webflow" name="generator"> -->
    <?php if (isset($seo)) { ?>
        <?php $title = $seo->meta_title;
        eval("\$title = \"$title\";"); ?>
        <meta name="og:title" content="<?php echo $title; ?>">
         <?php
            $description = $seo->meta_description;
        ?>
        <meta name="og:description" content="<?php echo htmlspecialchars($description); ?>">
        <meta name="og:keywords" content="<?php echo $seo->meta_keywords; ?>">
        <meta name="og:url" content="<?php echo $seo->canonical_url; ?>">
    <?php } ?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/Faviconwateen.png">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="<?php echo base_url(); ?>assets/css/plugin.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/custom.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/medium.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/mobile.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/setting.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/line-icons.css" type="text/css">
      <style>
        @font-face {
          font-family: "SansPro Bold font";
          src: url('<?php echo base_url(); ?>assets/fonts/SourceSansPro-Bold.otf');

        }

        @font-face {
          font-family: "SansPro Black font";
          src: url('<?php echo base_url(); ?>assets/fonts/SourceSansPro-Black.otf');

        }

        @font-face {
          font-family: "SansPro ExtraLight font";
          src: url('<?php echo base_url(); ?>assets/fonts/SourceSansPro-ExtraLight.otf');

        }
        @font-face {
          font-family: "SansPro Light font";
          src: url('<?php echo base_url(); ?>assets/fonts/SourceSansPro-Light.otf');

        }
        @font-face {
          font-family: "SansPro Regular font";
          src: url('<?php echo base_url(); ?>assets/fonts/SourceSansPro-Regular.otf');

        }
        @font-face {
          font-family: "SansPro Semibold font";
          src: url('<?php echo base_url(); ?>assets/fonts/SourceSansPro-Semibold.otf');

        }
        
      </style>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-1GPWLXRY0C"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1GPWLXRY0C');
        </script>
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area">
        <div class="header-content py-1 bg-theme">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="links">
                    <ul>
                        <li><a href="#" style="color: white !important;"class="white"><i class="icon-calendar white"></i> <?php $currentDateTime = date("l, M d Y");?> <?php echo $currentDateTime; ?></a></li>
                        <!-- <li><a href="#"style="color: white !important;" class="white"><i class="icon-location-pin white"></i>  Hollywood, America</a></li> -->
                        <li><a href="#" style="color: white !important;"class="white" id="hijri"> Mon-Fri: 10 AM – 5 PM</a></li>
                    </ul>
                </div>
                <div class="links float-right">
                <ul>
                    <li><a href="https://www.facebook.com/wateentravels?mibextid=LQQJ4d" target="_blank" class="white" style="color: white !important;"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/wateentravels?s=11" target="_blank" class="white" style="color: white !important;"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/wateentravels/" target="_blank" class="white" style="color: white !important;"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                </div>
            </div>
        </div>
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>assets/images/wateenLogo.png" alt="image">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="dropdown submenu active">
                                    <a href="<?php echo base_url(); ?>about-us" id="homeLink"class="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                                   <!--  <ul class="dropdown-menu">
                                        <li><a href="index.html">Homepage Default</a></li>
                                        <li><a href="<//?php echo base_url(); ?>index-1.html">Homepage 1</a></li>
                                        <li><a href="<//?php echo base_url(); ?>index-2.html">Homepage 2</a></li>
                                        <li><a href="<//?php echo base_url(); ?>index-3.html">Homepage 3</a></li>
                                        <li><a href="<//?php echo base_url(); ?>index-4.html">Homepage 4</a></li>
                                        <li><a href="<//?php echo base_url(); ?>index-5.html">Homepage 5</a></li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle d-flex align-items-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Flights <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                                            <ul class="dropdown-menu">
                                                <li><a href="<//?php echo base_url(); ?>index-flight.html">Flight Homepage</a></li>
                                                <li><a href="<//?php echo base_url(); ?>flight-grid.html">Flight Grid</a></li>
                                                <li><a href="<//?php echo base_url(); ?>flight-list.html">Flight List</a></li>
                                                <li><a href="<//?php echo base_url(); ?>flight-detail.html">Flight Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle d-flex align-items-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cars <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                                            <ul class="dropdown-menu">
                                                <li><a href="<//?php echo base_url(); ?>index-car.html">Car Homepage</a></li>
                                                <li><a href="<//?php echo base_url(); ?>car-grid.html">Car Grid</a></li>
                                                <li><a href="<//?php echo base_url(); ?>car-list.html">Car List</a></li>
                                                <li><a href="<//?php echo base_url(); ?>car-detail.html">Car Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle d-flex align-items-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cruise <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                                            <ul class="dropdown-menu">
                                                <li><a href="<////?php echo base_url(); ?>index-cruise.html">Cruise Homepage</a></li>
                                                <li><a href="<//////?php echo base_url(); ?>cruise-grid.html">Cruise Grid</a></li>
                                                <li><a href="<//?php echo base_url(); ?>cruise-list.html">Cruise List</a></li>
                                                <li><a href="<//?php echo base_url(); ?>cruise-detail.html">Cruise Detail</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->
                                </li> 

                                <li><a href="<?php echo base_url();?>apps/package_list" id="packagesLink">Packages</a></li>

                                <li class="submenu dropdown">
                                    <a href="<?php echo base_url();?>gallery" id="galleryLink"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a> 
                                  <!-- <ul class="dropdown-menu">
                                        <li><a href="</?php echo base_url(); ?>destination-list.html">Destination List</a></li>
                                        <li><a href="</?php echo base_url(); ?>destination-detail.html">Destination Detail</a></li>
                                    </ul> 
                                </li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tours <i class="icon-arrow-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour List<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="</?php echo base_url(); ?>tour-list.html">Tour List Leftsidebar</a></li>
                                                <li><a href="</?php echo base_url(); ?>tour-list1.html">Tour List Rightsidebar</a></li>
                                                <li><a href="</?php echo base_url(); ?>tour-list2.html">Tour List Fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour Grid<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="</?php echo base_url(); ?>tour-grid.html">Tour Grid Leftsidebar</a></li>
                                                <li><a href="</?php echo base_url(); ?>tour-grid1.html">Tour Grid Rightsidebar</a></li>
                                                <li><a href="</?php echo base_url(); ?>tour-grid2.html">Tour Grid Fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour Single<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="</?php echo base_url(); ?>tour-single.html">Tour Single Leftsidebar</a></li>
                                                <li><a href="</?php echo base_url(); ?>tour-single1.html">Tour Single Rightsidebar</a></li>
                                                <li><a href="</?php echo base_url(); ?>tour-single2.html">Tour Single Fullwidth</a></li>
                                            </ul>
                                        </li>
                                    </ul>  -->
                                </li>
                                <li class="submenu dropdown">
                                    <a href=""id="guidesLink" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guides</a> 
                                    <!--<ul class="dropdown-menu">
                                        <li><a href="</?php echo base_url(); ?>team.html">Our Guide</a></li>
                                        <li><a href="</?php echo base_url(); ?>booking.html">Booking</a></li>
                                        <li><a href="</?php echo base_url(); ?>confirmation.html">confirmation</a></li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="</?php echo base_url(); ?>services.html">Services Lists</a></li>
                                                <li><a href="</?php echo base_url(); ?>services-detail.html">Service Detail</a></li>
                                             </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<//?php echo base_url(); ?>gallery.html">Gallery</a></li>
                                                <li><a href="</?php echo base_url(); ?>gallery1.html">Gallery Masonry</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="404.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Error<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="</?php echo base_url(); ?>404.html">Error Page 1</a></li>
                                                <li><a href="</?php echo base_url(); ?>404-1.html">Error Page 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="</?php echo base_url(); ?>login.html">Login|Register</a></li>
                                        <li><a href="<//?php echo base_url(); ?>comingsoon.html">Coming Soon</a></li>
                                        <li><a href="</?php echo base_url(); ?>testimonials.html">Testimonials</a></li>
                                        <li><a href="</?php echo base_url(); ?>faq.html">Faq</a></li>
                                        <li><a href="</?php echo base_url(); ?>contact.html">Contact Us</a></li>
                                        <li><a href="</?php echo base_url(); ?>dashboard/dashboard.html">Dashboard</a></li>
                                    </ul>  -->
                                </li>
                                <li class="submenu dropdown">
                                    <a href="<?php echo base_url();?>apps/blogs"id="blogsLink" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs</a> 
                                    <!-- <ul class="dropdown-menu">
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog Grid<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="</?php echo base_url(); ?>post-grid-1.html">Blog Grid 1</a></li>
                                                <li><a href="</?php echo base_url(); ?>post-grid-2.html">Blog Grid 2</a></li>
                                                <li><a href="</?php echo base_url(); ?>post-grid-3.html">Blog Grid 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog List<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="</?php echo base_url(); ?>post-list-1.html">Blog List 1</a></li>
                                                <li><a href="</?php echo base_url(); ?>post-list-2.html">Blog List 2</a></li>
                                                <li><a href="</?php echo base_url(); ?>post-list-3.html">Blog List 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog Single<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="</?php echo base_url(); ?>detail-1.html">Blog Single 1</a></li>
                                                <li><a href="</?php echo base_url(); ?>detail-2.html">Blog Single 2</a></li>
                                                <li><a href="</?php echo base_url(); ?>detail-3.html">Blog Single 3</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="search-main"><a href="<?php echo base_url(); ?>contact-us">Contact us</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->     
                        <div class="register-login d-flex align-items-center">
                            <!-- <a href="<//?php echo site_url(); ?>auth/login"  class="me-3">
                                <i class="icon-user"></i> Login/Register
                            </a> -->
                            <a href="#" data-bs-toggle="modal" data-bs-target="#bookingModal" style="color: white !important;" class="nir-btn white">Book Now</a>
                        </div> 

                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      let pageId;
      let base_url = "<?php echo base_url(); ?>";
      let hijri;
      $(document).ready(function() {
        hijri= new Intl.DateTimeFormat('en-TN-u-ca-islamic', {day: 'numeric', month: 'long',weekday: 'long',year : 'numeric'}).format(Date.now());
        $("#hijri").html(`<i class="fa fa-moon"></i>${hijri}`);
      })
    </script>
    