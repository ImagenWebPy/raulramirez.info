<?php
$lang = 'es';
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
} elseif (isset($_SESSION['mylang']) == 'es') {
    $lang = 'es';
} elseif (isset($_SESSION['mylang']) == 'en') {
    $lang = 'en';
}
switch ($lang) {
    case "es":
        $_SESSION['mylang'] = "es";
        break;
    case "en":
        $_SESSION['mylang'] = "en";
        break;
    default :
        $_SESSION['mylang'] = "es";
}

//incluimos la clase del idioma
require_once 'class/lang.class.php';
$mylang = new mylanguage();
$mylang->load_language($_SESSION['mylang']);
$path = 'http://' . $_SERVER['SERVER_NAME'];
#$path =  'http://raulramirez.info';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo PAGE_TITLE; ?></title>
        <meta name="description" content="<?php echo PAGE_DESCRIPTION; ?>" />
        <meta name="keywords" content="<?php echo PAGE_KEYWORDS; ?>" />
        <meta name="author" content="Raul Ramirez" />
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="<?php echo PAGE_TITLE; ?>">
        <meta itemprop="description" content="<?php echo PAGE_DESCRIPTION; ?>">
        <meta itemprop="image" content="http://raulramirez.info/assets/img/homebg.jpg">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@raul_chuky">
        <meta name="twitter:title" content="<?php echo PAGE_TITLE; ?>">
        <meta name="twitter:description" content="<?php echo PAGE_DESCRIPTION; ?>">
        <meta name="twitter:image" content="http://raulramirez.info/assets/img/homebg.jpg">
        <!-- Open Graph data -->
        <meta property="og:title" content="<?php echo PAGE_TITLE; ?>" />
        <meta property="og:type" content="profile:RaulRamirez" />
        <meta property="og:url" content="http://raulramirez.info/" />
        <meta property="og:image" content="http://raulramirez.info/assets/img/homebg.jpg" />
        <meta property="og:description" content="<?php echo PAGE_DESCRIPTION; ?>" />
        <meta property="og:site_name" content="Raul Ramirez" />
        <!-- Loading Google Web fonts-->
        <link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!--General CSS-->
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/font-awesome.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="<?php echo $path ?>/assets/css/simple-line-icons.css"/>
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/animate.min.css" type="text/css" />
        <!--Menu-->
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/slicknav.css">
        <!--Optional CSS Starts-->
        <!--Gallery Cycle Slider-->
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/cycleslider.css">
        <!--Gallery Cycle Slider End-->
        <!--Gallery SuperSized Slider-->
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/supersized.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/supersized.shutter.css" type="text/css" media="screen" />
        <!--Gallery SuperSized Slider End-->
        <!--Gallery Filer-->
        <link type="text/css" rel="stylesheet" href="<?php echo $path ?>/assets/css/portfolio-new.css"/>
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/prettyPhoto.css" type="text/css" />
        <!--Gallery Filer End-->
        <!--Optional CSS Ends-->
        <!--Typewriter Style And Color-->
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/typewriter.css">
        <link rel="stylesheet" href="<?php echo $path ?>/assets/css/colors/typewriter-color.css" id="color" type="text/css" />
        <!--Typewriter Style And Color
        <link rel="shortcut icon" href="" />  
        <link rel="apple-touch-icon" href="" />
        <link rel="apple-touch-icon" sizes="72x72" href="" />
        <link rel="apple-touch-icon" sizes="114x114" href="" />-->
        <script src="<?php echo $path ?>/assets/js/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
        <script src="<?php echo $path ?>/assets/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/modernizr.custom.js"></script>

    </head>
    <body>

        <!--PRELOADER STARTS-->
        <section id="jSplash">
            <div class="spinner">
                <div class="cube cube0"></div>
                <div class="cube cube1"></div>
                <div class="cube cube2"></div>
                <div class="cube cube3"></div>
                <div class="cube cube4"></div>
                <div class="cube cube5"></div>
                <div class="cube cube6"></div>
                <div class="cube cube7"></div>
                <div class="cube cube8"></div>
                <div class="cube cube9"></div>
                <div class="cube cube10"></div>
                <div class="cube cube11"></div>
                <div class="cube cube12"></div>
                <div class="cube cube13"></div>
                <div class="cube cube14"></div>
                <div class="cube cube15"></div>
            </div>
        </section>
        <!--PRELOADER ENDS-->

        <!--Nice Scroll-->           <!--Used For Mobile Resolution-->
        <div id="menutop"></div>
        <!--Nice Scroll--> 
        <!--Wrapper 
        =============================-->
        <div id="wrapper">
            <div id="mask">
                <?php include 'menuMobile.php'; ?>
                <!--Home Page
                =============================-->
                <div id="home" class="item">
                    <div class="bgimg"></div>
                    <div class="pattern_bg"></div>
                    <div class="clearfix">
                        <div class="header_details">
                            <div class="container">
                                <div class="clearfix">
                                    <div class="header_icons accura-header-block accura-hidden-2xs">
                                        <ul class="accura-social-icons accura-stacked accura-jump accura-full-height accura-bordered accura-small accura-colored-bg clearFix">
                                            <!--Social Icon 1-->
                                            <li id="1">
                                                <a href="https://www.facebook.com/raul.chuky" target="_blank" class="accura-social-icon-facebook circle">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <!--Social Icon 1-->

                                            <!--Social Icon 2-->
                                            <li id="2">
                                                <a href="https://twitter.com/raul_chuky" target="_blank" class="accura-social-icon-twitter circle">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <!-- // Social Icon 2-->

                                            <!--Social Icon 3-->
                                            <li id="3">
                                                <a href="https://plus.google.com/111739183703289176503/posts?hl=es_419" target="_blank" class="accura-social-icon-gplus circle">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <!-- // Social Icon 3-->

                                            <!--Social Icon4-->
                                            <li id="4">
                                                <a href="https://instagram.com/raul_chuky" target="_blank" class="accura-social-icon-instagram circle">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <!-- // Social Icon 4-->

                                            <!--Social Icon 5-->
                                            <li id="5">
                                                <a href="http://www.linkedin.com/pub/ra%C3%BAl-ram%C3%ADrez/5b/66a/b41" target="_blank" class="accura-social-icon-linkedin circle">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <!-- // Social Icon 5-->
                                            <li style=" margin: 0px;"><a href="<?php echo $path ?>/es/"><img src="<?php echo $path ?>/img/es-flag.png" alt="Español"></a></li>
                                            <li style="margin: 0px;"><a href="<?php echo $path ?>/en/"><img src="<?php echo $path ?>/img/en-flag.png" alt="English"></a></li>
                                        </ul>
                                    </div>
                                    <div class="call">
                                        <div class="home_address">
                                            <a href="mailto:hablemos@raulramirez.info">
                                                <i class="fa fa-envelope"></i>hablemos@raulramirez.info
                                            </a>
                                        </div>
                                        <i class="fa fa-phone"></i>&nbsp;&nbsp;+595 976 921-801
                                    </div>

                                </div>
                            </div>
                            <!-- Mainheader -->	
                            <div class="mainheaderslide" id="slide">
                                <!--  Menu section for main page -->
                                <div id="mainheader" class="header">
                                    <div class="menu-inner">
                                        <div class="container">
                                            <div class="row">
                                                <div class="header-table col-md-12 header-menu">
                                                    <!--  Logo Desktop section -->
                                                    <div class="logo">
                                                        <a href="#home"  class="nav-link"><img src="<?php echo $path ?>/assets/img/typer-logo.png" alt="Logo"></a>
                                                    </div>
                                                    <!--  // Logo Desktop section -->
                                                    <?php include 'menuDesktop.php'; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  Menu section for main page -->
                            </div>
                            <!-- // Mainheader -->
                        </div>

                        <!--Home Content-->
                        <!-- Typer -->
                        <div class="clearfix">
                            <div class="clearfix container center">
                                <div class="home_title" id="home_title"><?php echo HOME_TITLE; ?></div>
                                <div id="typed" class="home_title_type"></div>
                            </div>
                        </div>
                        <!-- // Typer -->
                        <!-- // Home Content-->

                    </div>
                </div>
                <!-- // Home Page
                =============================-->
                <?php include 'about-me.php'; ?>  
                <?php include 'skills.php'; ?>  
                <?php include 'resume.php'; ?>  
                <?php include 'portfolio.php'; ?>  
                <?php include 'services.php'; ?>  
                <?php include 'contact.php'; ?>  
                <!-- Footer
                =============================-->

                <div id="footer" class="footer">
                    <div class="copyright">Copyrights &copy; <span>Raúl Ramírez</span> 2015.</div>
                </div>

                <!-- // Footer Ends
                =============================-->
                <!--Special Menu 
                =============================-->
                <div id="specialmenu" class="toHideTheBubbles hidden-phone">
                    <div class="spcontainer">
                        <!--Spmenu 1-->
                        <div id="spmenu2">
                            <a href="#contactform" class="spmenu spmenu1 nav-link">
                                <span><i class="fa fa-envelope-o"></i></span>
                                <?php echo HOME_BUDGET; ?>
                            </a>
                        </div>
                        <!-- // Spmenu 1-->

                        <!--Spmenu 3-->
                        <div id="spmenu3">
                            <a href="<?php echo $path ?>/pdf/CV_Raul_Ramirez.pdf" class="spmenu spmenu3 link">
                                <span><i class="fa fa-download down_icon"></i></span>
                                    <?php echo HOME_DOWNLOAD; ?>
                            </a>
                        </div>
                        <!-- // Spmenu 3-->
                    </div>
                </div>

                <!-- // Special Menu 
                =============================-->
            </div>
        </div>
        <!-- // Wrapper =============================-->
        <!--java script-->
        <!-- Preloader Starts -->
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jpreloader.min.js"></script>
        <!-- Preloader Starts -->
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/appear.js"></script>
        <!-- Slick Navigation -->
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.slicknav.min.js"></script>
        <!-- Slick Navigation -->
        <!-- Nice Scroll-->
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.easing.1.3.js"></script>
        <!-- include retina js -->
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/retina-1.1.0.min.js"></script>
        <!-- include retina js -->
        <!-- Typing Slider Starts-->
        <script type="text/javascript" src='<?php echo $path ?>/assets/js/typed.js'></script>
        <!-- Typing Slider Ends-->
        <!-- Cycle Slider Sldier -->
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.cycle2.caption2.js"></script>
        <!-- Cycle Slider Sldier Ends-->
        <!--SuperSized Gallery-->
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/supersized.3.2.7.min.js"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/supersized.shutter.min.js"></script>
        <!--SuperSized Gallery End-->
        <!-- Filter Gallery And PrettyPhoto-->
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.mixitup.min.js"></script>
        <!-- Filter Gallery And PrettyPhoto End-->
        <!-- Skills Progress Bar Starts-->
        <script src="<?php echo $path ?>/assets/js/jquery.easypiechart.min.js"></script>
        <!-- Skills Progress Bar Ends-->
        <!-- Fit Text Starts-->
        <script type="text/javascript" src="<?php echo $path ?>/assets/js/jquery.fittext.js"></script>
        <script type="text/javascript">
            $("#home_title").fitText(1.1, {minFontSize: '24px', maxFontSize: '65px'});
            $(".home_title_type").fitText(1.1, {minFontSize: '24px', maxFontSize: '65px'});

        </script>
        <!-- Fit Text Ends-->
        <!-- Place Holder Scripts Starts-->
        <script type="text/javascript" src="../assets/js/jquery.placeholder.min.js"></script>
        <!-- Place Holder Scripts Ends-->
        <!-- Custom Scripts Starts-->
        <script type="text/javascript" src="../assets/js/custom-general.js"></script>
        <script type="text/javascript" src="../assets/js/google-map-custom.js"></script>
        <script type="text/javascript" src="../assets/js/typed-custom.js"></script>
        <script>
            /**	 Typewriter
             *****************************************************/
            $(function () {

                $("#typed").typed({
                    strings: ["<?php echo HOME_TYPED1; ?>", "<?php echo HOME_TYPED2; ?>", "<?php echo HOME_TYPED3; ?>"],
                    typeSpeed: 80,
                    backDelay: 500,
                    loop: true,
                    contentType: 'html', // or text
                    // defaults to false for infinite loop
                    loopCount: false,
                });

                $(".reset").click(function () {
                    $("#typed").typed('reset');
                });

            });

            function newTyped() { /* A new typed object */
            }
        </script>
        <!-- Custom Scripts Ends-->
        <!--IE9 Hack Code For Gradient Color-->
        <!--[if gte IE 9]>
          <style type="text/css">
            .pattern_bg {
               filter: none;
            }
          </style>
        <![endif]-->
    </body>
</html>