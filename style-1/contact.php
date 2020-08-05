<?php
include_once '../include/settings.php';
$Temp = showSettings();
    if(isset($_POST['send'])){
        include_once '../include/contact.php';
        $data = $_POST['data'];
        addContact($data);
    }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $Temp['title']; ?></title>
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
<body id="sub-page">
<div class="pattern">
	<header id="header">	
		<div class="wrapper clearfix">
            <nav id="top-nav">
				<ul id="top-menu" class="clearfix">
					<li class="current-menu-item"><a href="index.html">صفحه اصلی</a>
						<ul>
							<li><a href="single.html">تک صفحه</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="elements.html">المنت ها</a></li>
						</ul>
					</li>
					<li><a href="news.html">اخبار</a>
						<ul>
							<li><a href="#">ورزشی</a></li>
							<li><a href="#">هنری</a>
								<ul>
									<li><a href="#">ورزشی</a></li>
									<li><a href="#">هنری</a></li>
									<li><a href="#">آسیا</a></li>
									<li><a href="#">ورزشی</a></li>
									<li><a href="elements.html">المنت ها</a></li>
								</ul>


							</li>
							<li><a href="#">اسیا</a></li>
							<li><a href="#">ورزشی</a></li>
							<li><a href="elements.html">المنت ها</a></li>
						</ul>
					</li>
					<li><a href="single.html">تک صفحه</a></li>
                    <li><a href="elements.html">المنت ها</a></li>
					<li>
						<a href="news.html">صفحات</a>
						<ul>
							<li><a href="single.html">تک صفحه</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="elements.html">المنت ها</a></li>
						</ul>
					</li>
                    <li><a href="404.html">404</a></li>
					<li><a href="contact.html">تماس با ما</a></li>
					<li><a href="news.html">ورزشی</a></li>
                    <li><a href="news.html">سبک زندگی</a></li>
                    <li><a href="news.html">مد</a></li>
                    <li><a href="news.html">فرهنگی</a></li>
				</ul>
			</nav><!--end:top-nav-->            
		</div><!--wrapper-->
	</header>
    <section class="branding">
    	<div class="wrapper clearfix">
           <a id="logo-image" href="index.html"><img src="placeholders/logo.png" alt="logo"></a>
           <a href="index.html" id="top-banner"><img class="responsive-img" src="placeholders/top-banner.jpg" alt="banner"></a>
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
	<div class="separator"></div>
    <div class="main-body">
    	<div class="wrapper clearfix">        	
			<div class="right-col">	
				<div class="breadcrumb clearfix">
					<span>
شما اینجا هستید:
</span>
					<a href="#">صفحه  اصلی</a>&nbsp;&raquo;&nbsp;<a href="#" class="current-page">تماس با ما</a> 
				</div><!--end:breadcrumb-->
				<section class="entry-box">
					<h2>
تعیین محل ما در نقشه گوگل
</h2>
					<iframe class="google-map" width="100%" scrolling="no" height="370" frameborder="0" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;msid=202155445435279877773.0004bd5d16ad3a69014b6&amp;ie=UTF8&amp;t=m&amp;ll=21.031154,105.782976&amp;spn=0.016023,0.025663&amp;z=14&amp;output=embed"></iframe>
					<br>
					<h2>
امروز با ما تماس بگیرید
</h2>
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>
					<div id="respond">
						<h3>
ارسال یک پیام
</h3>               
						<form id="comments-form" class="clearfix" action="" method="post">
							<div class="comment-right">
								<p class="input-block">
									<label class="required" for="comment-name">نام:</label>
									<input class="valid" type="text" name="data[name]" id="comment-name" placeholder="لطفا نام خود را وارد کنید">
								</p>
								<p class="input-block">
									<label class="required" for="comment-email">ایمیل:</label>
									<input type="email" class="valid" name="data[email]" id="comment-email" placeholder="لطفا ایمیل خود را وارد کنید">
								</p>
								<p class="input-block">                                                
									<label class="required" for="comment-url"> موضوع:</label>
									<input type="text" id="comment-url" class="valid" name="data[subject]" placeholder="لطفا موضوع خود را انتخاب کنید">
								</p>
							</div>
							<div class="comment-left">
								<p class="textarea-block">                        
									<label class="required" for="comment-message">پیام:</label>
									<textarea rows="6" cols="88" id="comment-message" name="data[text]"></textarea>
								</p>
							</div>
							<div class="clear"></div>
							<p class="comment-button">                    
								<input type="submit" id="submit-comment" value="ارسال" name="send">
							</p>                        
						</form>
						<div id="response"></div>
					</div><!--end:respond-->
				</section><!--end:entry-box-->
			</div><!--end:right-col-->
			<div class="sidebar" id="sidebar-a">
				<div class="spacer">برای دیدن</div>
				<ul id="widget-list-a">
					<li>
						<aside class="widget clearfix">
							<h4 class="widget-title">اطلاعات تماس</h4>
							<div class="textwidget">
								<h5><?php echo $Temp['address']; ?></h5>
								<p class="free-phone">
								<p class="tele-phone">تلفن:<span><?php echo $Temp['tellphone']; ?></span></p>
								<p class="contact-fax">فکس: <span><?php echo $Temp['fax']; ?></span></p>
								<p class="contact-email">ایمیل: <a href="<?php echo $Temp['email']; ?>"><?php echo $Temp['email']; ?></a></p>
							</div>
						</aside><!--end:widget-->
					</li>
					
					<li>
						<aside class="widget clearfix">
							<div class="adv-box clearfix">
								<a href="#"><img class="responsive-img hover-effect" src="placeholders/banner/250x250.png" alt="" /></a>
							</div><!--end:adv-box-->
						</aside><!--end:widget-->
					</li>
				</ul><!--widget-list-a-->
			</div><!--sidebar-a-->
        </div><!--wrapper-->
    </div><!--main-body-->
    <footer id="footer">
		<div class="separator"></div>
		<div class="footer-top">
			 <div class="wrapper clearfix">
				<aside class="footer-aside"  id="sidebar-1">
					<a class="footer-logo" href="index.html"><img src="placeholders/logo.png" alt="logo"></a>
				</aside><!--footer-aside-->
				<aside class="footer-aside" id="sidebar-2">
					<h5 class="widget-title">ما را دنبال کنید</h5>			 
					<ul class="social-links clearfix">
						<li class="facebook-icon">                        	
							<a target="_blank" title="Facebook" class="facebook" href="#">Facebook</a>
                            <img class="responsive-img" src="images/icons/facebook.png" alt="" />
						</li>
						<li class="twitter-icon">
							<a target="_blank" title="Twitter" class="twitter" href="#">Twitter</a>
                            <img class="responsive-img" src="images/icons/twitter.png" alt="" />
						</li>
					   <li class="rss-icon">
							<a target="_blank" title="RSS" href="#">Rss</a>
                            <img class="responsive-img" src="images/icons/rss.png" alt="" />
						</li>
						<li class="google-icon">
							<a target="_blank" title="Google+" class="google" href="#">Google</a>
                            <img class="responsive-img" src="images/icons/google.png" alt="" />
						</li> 
						<li class="dribble-icon">
							<a target="_blank" title="Dribble" class="dribble" href="#"></a>								
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
						<li><a href="#">ورزشی</a></li>
						<li><a href="#">هنری</a></li>
						<li><a href="#">آسیا</a></li>
						<li><a href="#">ورزشی</a></li>
						<li><a href="elements.html">المنت ها</a></li>
					</ul>
				</nav>
			</div><!--end:wrapper-->
		</div><!--footer-bottom-->
    </footer>
	<a id="scroll-to-top" href="#top">
بازگشت به ابتدای صفحه
</a>
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
