<?php
include_once '../include/functions.php';
include_once '../include/news.php';
include_once '../include/settings.php';
include_once '../include/pages.php';
$id = $_GET['id'];
$Temp = showSettings();
$P = detail_pages($id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $P['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Grid styles for IE -->
    <!--[if lt IE 10]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/jquery.tweet.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
    <!--[if IE 7]><link rel="stylesheet" href="css/ie7.css" type="text/css" media="all" /><![endif]-->

    <!-- Favicons
	================================================== -->
    <link rel="shortcut icon" href="images/favicon.html">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">



    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="all" />
    <![endif]-->
</head>
<body class="home-page">
<div class="pattern">
    <header id="header">
        <div class="wrapper clearfix">
            <nav id="top-nav">
                <?php $rows = listMenuDefault();
                if($rows):
                    ?>
                    <ul id="top-menu" class="clearfix">
                        <?php
                        foreach ($rows as $row):
                            ?>
                            <li><a href="<?php echo $row['url']; ?>"><?php echo $row['title']; ?></a>
                                <?php $lists = listSubMenuDefault($row['id']);
                                if ($lists):
                                    ?>
                                    <ul>
                                        <?php foreach ($lists as $list): ?>
                                            <li><a href="<?php echo $list['url']; ?>"><?php echo $list['title']; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif;
                                if($row['title'] == "اخبار"){
                                    $News = listNewsDefault();
                                    if($News){
                                        ?>
                                        <ul>
                                            <?php
                                            foreach ($News as $New){
                                                ?>
                                                <li><a href="#"><?php echo $New['title']; ?></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <?php
                                    }
                                }
                                ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </nav><!--end:top-nav-->
        </div><!--wrapper-->
    </header>
    <section class="branding">
        <div class="wrapper clearfix">
            <a id="logo-image" href="#"><img src="<?php echo "../admin/".$Temp['logo']; ?>" alt="logo"></a>
        </div><!--wrapper-->
        <div class="search clearfix">
            <a title="Search" class="search-icon" href="#">جستجو</a>
            <div class="search-box clearfix">
                <form action="#" class="search-form clearfix" method="get">
                    <input type="text" onBlur="if(this.value=='')this.value=this.defaultValue;" onFocus="if(this.value==this.defaultValue)this.value='';" value="Search" name="s" class="search-text">
                    <input type="submit" value="Submit" name="submit" class="search-submit">
                </form><!-- search-form -->
            </div><!--end:search-box-->
        </div><!--search-icon-->
    </section><!--branding-->

    <?php echo $P['body']; ?>

    <footer id="footer">
        <div class="separator"></div>
        <div class="footer-top">
            <div class="wrapper clearfix">
                <aside class="footer-aside"  id="sidebar-1">
                    <a class="footer-logo" href="#"><img src="<?php echo "../admin/".$Temp['logo']; ?>" alt="logo"></a>
                </aside><!--footer-aside-->
                <aside class="footer-aside" id="sidebar-2">
                    <h5 class="widget-title">ما را دنبال کنید</h5>
                    <ul class="social-links clearfix">
                        <li class="facebook-icon">
                            <a target="_blank" title="Facebook" class="facebook" href="<?php echo $Temp['facebook']; ?>">Facebook</a>
                            <img class="responsive-img" src="images/icons/facebook.png" alt="" />
                        </li>
                        <li class="twitter-icon">
                            <a target="_blank" title="Twitter" class="twitter" href="<?php echo $Temp['twiter']; ?>">Twitter</a>
                            <img class="responsive-img" src="images/icons/twitter.png" alt="" />
                        </li>
                        <li class="rss-icon">
                            <a target="_blank" title="RSS" href="<?php echo $Temp['lindin']; ?>">lindin</a>
                            <img class="responsive-img" src="images/icons/rss.png" alt="" />
                        </li>
                        <li class="google-icon">
                            <a target="_blank" title="Google+" class="google" href="<?php echo $Temp['googleplus']; ?>">Google</a>
                            <img class="responsive-img" src="images/icons/google.png" alt="" />
                        </li>
                        <li class="dribble-icon">
                            <a target="_blank" title="Dribble" class="dribble" href="<?php echo $Temp['instagram']; ?>"></a>
                            <img class="responsive-img" src="images/icons/dribble.png" alt="" />
                        </li>
                    </ul><!--end:social-links-->
                </aside><!--footer-aside-->
                <aside class="footer-aside last" id="sidebar-3">
                    <h5 class="widget-title">
                        عضویت در لیست پستی ما
                    </h5>
                    <div class="news-letter clearfix">
                        <form class="newsletter-form" method="post" action="http://kopatheme.com/demo/great-news/html/style-1/processNewsletterForm.php">
                            <p class="input-email clearfix">
                                <input type="text" size="40" class="email" value="Your email" name="email" onBlur="if(this.value=='')this.value=this.defaultValue;" onFocus="if(this.value==this.defaultValue)this.value='';">
                                <input type="submit" class="submit" value="Submit">
                            </p>
                        </form>
                    </div><!--news-letter-->
                </aside><!--footer-aside-->
            </div><!--end:wrapper-->
        </div><!--footer-top-->
        <div class="footer-bottom">
            <div class="wrapper clearfix">
                <p id="copylefts">کپی رایت@2015 تمام حقوق مادی و معنوی این سایت متعلق به گروه برنامه نویسان میباشد</p>
                <nav id="bottom-menu">
                    <ul>
                        <?php $lists = listMenuDefault();
                        if($lists):
                            foreach ($lists as $list): ?>
                                <li><a href="#"><?php echo $list['title']; ?></a></li>
                            <?php endforeach;
                        endif;
                        ?>
                        <li><a href="contact.php">تماس با ما</a></li>
                    </ul>
                </nav>
            </div><!--end:wrapper-->
        </div><!--footer-bottom-->
    </footer>
    <a id="scroll-to-top" href="#top">بازگشت به ابتدای صفحه</a>
</div><!--pattern-->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.backstretch.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.carouFredSel-5.6.2.js"></script>
<script src="js/jquery.tweet.js" charset="utf-8"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
