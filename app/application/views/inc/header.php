<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Life Line</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>


<!-- Styles -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/sea-green.css" title="sea-green" />
<link rel="alternate stylesheet" type="text/css" href="css/brown.css" title="brown" />
<link rel="alternate stylesheet" type="text/css" href="css/bright-red.css" title="bright-red" />
<link rel="alternate stylesheet" type="text/css" href="css/yellow.css" title="yellow" />
<link rel="alternate stylesheet" type="text/css" href="css/green.css" title="green" />
<link rel="alternate stylesheet" type="text/css" href="css/hunter-green.css" title="hunter-green" />
<link rel="alternate stylesheet" type="text/css" href="css/light-pink.css" title="light-pink" />
<link rel="alternate stylesheet" type="text/css" href="css/orange.css" title="orange" />
<link rel="alternate stylesheet" type="text/css" href="css/pink.css" title="pink" />
<link rel="alternate stylesheet" type="text/css" href="css/red.css" title="red" />
<link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->


<!-- Scripts -->
<script src="http://images.webinane.com/jquery.1.9.1.js" type="text/javascript"></script>
<script src='http://images.webinane.com/bootstrap.js'></script>
<script src="js/html5lightbox.js"></script>
<script src="http://images.webinane.com/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
<script src='js/script.js'></script>		
<script src='js/styleswitcher.js'></script>
<script defer src="http://images.webinane.com/jquery.flexslider.js"></script>
<script defer src="js/jquery.mousewheel.js"></script>
	
<script>
$(window).load(function(){
  $('.our-causes').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
	
  $('.slideshow').flexslider({
	animation: "fade",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
  $('.footer_carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$(function() {
		$('#carousel').carouFredSel({
			responsive: true,
			circular: false,
			auto: false,
			items: {
				visible: 1,
				width: 20,
			},
			scroll: {
				fx: 'directscroll'
			}
		});
		$('#thumbs').carouFredSel({
			responsive: true,
			circular: false,
			infinite: false,
			auto: false,
			prev: '#prev',
			next: '#next',
			items: {
				visible: {
					min: 1,
					max: 6
				},
				width: 200,
				height: '80%'
			}
		});
		$('#thumbs a').click(function() {
			$('#carousel').trigger('slideTo', '#' + this.href.split('#').pop() );
			$('#thumbs a').removeClass('selected');
			$(this).addClass('selected');
			return false;
		});			
	});
});		
</script>	

<!-- Scripts For Layer Slider  -->
<script src="layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
jQuery("#layerslider").layerSlider({
	responsive: true,
	responsiveUnder: 1280,
	layersContainer: 1170,
	skin: 'fullwidth',
	hoverPrevNext: true,
	skinsPath: 'layerslider/skins/'
});
});
</script>
</head>
<body>
<div class="theme-layout">

<div id="top-bar" class="modern">
	<div class="container">
		<ul>
			<li>
				<i class="icon-home"></i>
				425 Street Name, UK, London
			</li>
			<li>
				<i class="icon-phone"></i>
				(123) 456-7890
			</li>
			<li>
				<i class="icon-envelope"></i>
				contact@companymail.com
			</li>
		</ul> 
		<div class="header-social">
			<ul>
				<li><a href="#" title=""><i class="icon-google-plus"></i></a></li>
				<li><a href="#" title=""><i class="icon-facebook"></i></a></li>
				<li><a href="#" title=""><i class="icon-skype"></i></a></li>
				<li><a href="#" title=""><i class="icon-linkedin"></i></a></li>
				<li><a href="#" title=""><i class="icon-twitter"></i></a></li>
			</ul>
		</div>
	</div>
</div><!--top bar-->

<header class="header2 sticky">
	<div class="container">
		<div class="logo">
			<a href="#" title=""><img src="images/logo.png" alt="Logo" /><h1><i>L</i>ifeline</h1></a>
		</div><!-- Logo -->
		<a class="header-btn" href="#" title="">DONATE NOW</a>

		<nav class="menu">
			<ul id="menu-navigation">
				<li class="active"><a><i class="icon-circle"></i>Home</a>
					<ul class="mega-menu2">
						<li><a href="index.html" title="">Home Simple 1</a></li>
						<li><a href="index2.html" title="">Home Modern Style</a></li>
						<li><a href="index3.html" title="">Home Simple 2</a></li>
						<li><a href="index4.html" title="">Home Simple 3</a></li>
						<li><a href="index7.html" title="">Home Traditional Style</a></li>
						<li><a href="index5.html" title="">Home With Video</a></li>
						<li><a href="index6.html" title="">Home With Portfolio</a></li>
						<li><a href="index8.html" title="">Home With Sidebar<span>NEW</span></a></li>
						<li><a href="index9.html" title="">Home Organization 1<span>NEW</span></a></li>
						<li><a href="index10.html" title="">Home Organization 2<span>NEW</span></a></li>			
						<li><a href="index11.html" title="">Home Minimalist 1<span>NEW</span></a></li>			
						<li><a href="index12.html" title="">Home Minimalist 2<span>NEW</span></a></li>
						<li><a href="index13.html" title="">NonProfit Organization 2015<span>NEW</span></a></li>			
												<li><a><strong>Header Styles</strong></a>
							<ul>
								<li><a href="header1.html" title="">Transparent Header</a></li>
								<li><a href="header2.html" title="">Header With Social Icons</a></li>
								<li><a href="header3.html" title="">Header With Countdown</a></li>
								<li><a href="sticky-menu.html" title="">Sticky Header</a></li>
								<li><a href="menu-below-slider.html" title="">Menu Below Slider</a></li>
								<li><a href="middle-logo.html" title="">With Logo In The Mid</a></li>
								<li><a href="index5.html" title="">Toggle Header</a></li>
							</ul>
						</li>
					</ul><!-- Drop Down -->
				</li>
				<li><a><i class="icon-circle"></i>Pages</a>
					<ul class="mega-menu">
						<li><a href="about.html" title="">About Wide</a></li>
						<li><a href="contact.html" title="">Contact Wide</a></li>
						<li><a href="profile-single-page.html" title="">Profile Single Page</a></li>
						<li><a>Events</a>
							<ul class="drop-right">
								<li><a href="events.html" title="">Right Sidebar</a></li>
								<li><a href="events-left-sidebar.html" title="">Left Sidebar</a></li>
								<li><a href="single-event-page.html" title="">Event Single Page</a></li>
							</ul>
						</li>
						<li><a href="successful-stories.html" title="">Successful Stories Wide</a></li>
						<li><a href="services-single.html" title="">Single Service Page</a></li>
						<li><a href="single-causes.html" title="">Single Cause Page</a></li>
						<li><a href="causes.html" title="">Our Causes Wide</a></li>

						<li><a href="causes2.html" title="">Our Causes Wide 2</a></li>
						<li><a href="causes3.html" title="">Our Causes Wide 3</a></li>
						<li><a href="missions.html" title="">Our Missions</a></li>
						<li><a href="news.html" title="">News Page</a></li>
						<li><a href="404.html" title="">404 Page Wide</a></li>
						<li><a>Projects</a>
							<ul class="drop-right">
								<li><a href="projects.html" title="">On Going Projects Wide</a></li>
								<li><a href="single-post-project.html" title="">Single Post Project</a></li>
								<li><a href="single-post-project-left-sidebar.html" title="">Single Post Project Left Sidebar</a></li>
							</ul>
						</li>
						<li><a>Search With Right Sidebar</a>
							<ul>
								<li><a href="search-found.html" title="">Search Results Found</a></li>
								<li><a href="nothing-found.html" title="">Search Result Not Found</a></li>
							</ul>
						</li>
						<li><a>Search With Left Sidebar</a>
							<ul class="drop-right">
								<li><a href="search-found-left-sidebar.html" title="">Search Results Found</a></li>
								<li><a href="nothing-found-left-sidebar.html" title="">Search Result Not Found</a></li>
							</ul>
						</li>
					</ul><!-- Drop Down -->				
				</li>
				<li><a><i class="icon-circle"></i>Cart</a>
					<ul>
						<li><a>My Cart</a>
							<ul class="drop-right">
								<li><a href="cart.html" title="">Right Sidebar</a></li>
								<li><a href="cart-left-sidebar.html" title="">Left Sidebar</a></li>
							</ul>
						</li>
						<li><a>Products</a>
							<ul class="drop-right">
								<li><a href="products.html" title="">Right Sidebar</a></li>
								<li><a href="products-left-sidebar.html" title="">Left Sidebar</a></li>
							</ul>
						</li>
						<li><a>Checkout</a>
							<ul class="drop-right">
								<li><a href="checkout.html" title="">Right Sidebar</a></li>
								<li><a href="checkout-left-sidebar.html" title="">Left Sidebar</a></li>
							</ul>
						</li>
						<li><a>Order Recieved</a>
							<ul class="drop-right">
								<li><a href="order-recieved.html" title="">Right Sidebar</a></li>
								<li><a href="order-recieved-left-sidebar.html" title="">Left Sidebar</a></li>
							</ul>
						</li>
						<li><a>Single Product Page</a>
							<ul class="drop-right">
								<li><a href="single-product.html" title="">Right Sidebar</a></li>
								<li><a href="single-product-left-sidebar.html" title="">Left Sidebar</a></li>
							</ul>
						</li>	
					</ul>
				</li>
				<li><a><i class="icon-circle"></i>Portfolio</a>
					<ul>
						<li><a href="portfolio-2-column.html" title="">2 Column Wide</a></li>
						<li><a href="portfolio-3-column.html" title="">3 Column Wide</a></li>
						<li><a href="portfolio-4-column.html" title="">4 Column Wide</a></li>
					</ul>
				</li>
				<li><a><i class="icon-circle"></i>Gallery</a>
					<ul>
						<li><a href="gallery-one-column.html" title="">1 Column Wide</a></li>
						<li><a href="gallery-two-column.html" title="">2 Column Wide</a></li>
						<li><a href="gallery-three-column.html" title="">3 Column Wide</a></li>
						<li><a href="gallery-four-column.html" title="">4 Column Wide</a></li>
						<li><a>Video Gallery</a>
							<ul class="drop-right">
								<li><a href="gallery-three-column-video.html" title="">3 Column With Lightbox</a></li>
								<li><a href="gallery-three-column-video2.html" title="">3 Column </a></li>
								<li><a href="gallery-two-column-video.html" title="">2 Column With Lightbox</a></li>
								<li><a href="gallery-two-column-video2.html" title="">2 Column</a></li>
							</ul>
						</li>
						<li><a>Right Sidebar</a>
							<ul class="drop-right">
								<li><a href="gallery-one-column-with-sidebar.html" title="">1 Column</a></li>
								<li><a href="gallery-two-column-with-sidebar.html" title="">2 Column</a></li>
								<li><a href="gallery-three-column-with-sidebar.html" title="">3 Column</a></li>
							</ul>
						</li>
						<li><a>Left Sidebar</a>
							<ul class="drop-right">
								<li><a href="gallery-one-column-with-left-sidebar.html" title="">1 Column</a></li>
								<li><a href="gallery-two-column-with-left-sidebar.html" title="">2 Column</a></li>
								<li><a href="gallery-three-column-with-left-sidebar.html" title="">3 Column</a></li>
							</ul>
						</li>
					</ul><!-- Drop Down -->
				</li>
				<li><a><i class="icon-circle"></i>Blog</a>
					<ul>
						<li><a href="blog-without-sidebar.html" title="">Blog Wide</a></li>
						<li><a href="blog-with-sidebar.html" title="">Blog With Left Sidebar</a></li>
						<li><a href="blog-with-left-sidebar.html" title="">Blog With Right Sidebar</a></li>
						<li><a>Single Posts Right Sidebar</a>
							<ul class="drop-right">
								<li><a href="single-post-image.html" title="">Single Post With Image</a></li>
								<li><a href="single-post-video.html" title="">Single Post With Video</a></li>
								<li><a href="single-post-slider.html" title="">Single Post With Slider</a></li>
								<li><a href="single-post-project.html" title="">Project Single Post</a></li>
							</ul>
						</li>
						<li><a>Single Posts Left Sidebar</a>
							<ul class="drop-right">
								<li><a href="single-post-image-left-sidebar.html" title="">Single Post With Image</a></li>
								<li><a href="single-post-video-left-sidebar.html" title="">Single Post With Video</a></li>
								<li><a href="single-post-slider-left-sidebar.html" title="">Single Post With Slider</a></li>
								<li><a href="single-post-project-left-sidebar.html" title="">Project Single Post</a></li>
							</ul>
						</li>
						
					</ul><!-- Drop Down -->
				</li>
				<li><a href="elements.html"><i class="icon-circle"></i>Features</a>
					<ul class="drop-right">
						<li><a href="title-style.html">Title Styles</a></li>
						<li><a href="elements.html#tabs-style">4 Tabs Style</a></li>
						<li><a href="elements.html#accordions-style">2 Accordions</a></li>
						<li><a href="elements.html#blockquotes-style">2 Block Qoutes</a></li>
						<li><a href="elements.html#highlightedtext">HighLighted Text</a></li>
						<li><a href="elements.html#buttons-style">6 Buttons Sets</a></li>
						<li><a href="elements.html#list-styles">List Styles</a></li>
						<li><a href="elements.html#alertboxes">Alert Boxes</a></li>
						<li><a href="elements.html#dropcap">Dropcap Variations</a></li>
						<li><a href="elements.html#socialicons">Social Icons</a></li>
						<li><a href="elements.html#alignedimages">Aligned Images</a></li>
						<li><a href="elements.html#progressbars">2 Progress Bars</a></li>
						<li><a href="elements.html#pricetable">Price Tables</a></li>
						<li><a href="elements.html#columnsstyle">Columns Style</a></li>
					</ul>
				</li>
			</ul>   
		</nav><!-- Menu -->



	</div>		
</header><!--header-->

<div class="responsive-header">
	<div class="responsive-logo">
		<a href="#" title=""><img style="width: 40px;" src="images/logo.png" alt="Logo" /><h1>Lifeline</h1></a>
	</div>
	<span><i class="icon-align-justify"></i></span>
	<ul>
		<li><a href="#" title="">Home</a>
			<ul>
				<li><a href="index.html" title="">Home Simple 1</a></li>
				<li><a href="index2.html" title="">Home Modern Style</a></li>
				<li><a href="index3.html" title="">Home Simple 2</a></li>
				<li><a href="index4.html" title="">Home Simple 3</a></li>
				<li><a href="index7.html" title="">Home Traditional Style</a></li>
				<li><a href="index5.html" title="">Home With Video</a></li>
				<li><a href="index6.html" title="">Home With Portfolio</a></li>
				<li><a href="index8.html" title="">Home With Sidebar<span>NEW</span></a></li>
				<li><a href="index9.html" title="">Home Organization 1<span>NEW</span></a></li>
				<li><a href="index10.html" title="">Home Organization 2<span>NEW</span></a></li>			
				<li><a href="index11.html" title="">Home Minimalist 1<span>NEW</span></a></li>			
				<li><a href="index12.html" title="">Home Minimalist 2<span>NEW</span></a></li>
				<li><a href="index13.html" title="">NonProfit Organization 2015<span>NEW</span></a></li>
				<li><a href="#" title=""><strong>Header Styles</strong></a>
					<ul>
						<li><a href="header1.html" title="">Transparent Header</a></li>
						<li><a href="header2.html" title="">Header With Social Icons</a></li>
						<li><a href="header3.html" title="">Header With Countdown</a></li>
						<li><a href="sticky-menu.html" title="">Sticky Header</a></li>
						<li><a href="menu-below-slider.html" title="">Menu Below Slider</a></li>
						<li><a href="middle-logo.html" title="">With Logo In The Mid</a></li>
						<li><a href="index5.html" title="">Toggle Header</a></li>
					</ul>
				</li>
			</ul><!-- Drop Down -->
		</li>
		<li><a href="#" title="">Pages</a>
			<ul>
				<li><a href="about.html" title="">About Wide</a></li>
				<li><a href="contact.html" title="">Contact Wide</a></li>
				<li><a href="profile-single-page.html" title="">Profile Single Page</a></li>
				<li><a href="#" title="">Events</a>
					<ul>
						<li><a href="events.html" title="">Right Sidebar</a></li>
						<li><a href="events-left-sidebar.html" title="">Left Sidebar</a></li>
						<li><a href="single-event-page.html" title="">Event Single Page</a></li>
					</ul>
				</li>
				<li><a href="successful-stories.html" title="">Successful Stories Wide</a></li>
				<li><a href="services-single.html" title="">Single Service Page</a></li>
				<li><a href="single-causes.html" title="">Single Cause Page</a></li>
				<li><a href="causes.html" title="">Our Causes Wide</a></li>
				<li><a href="404.html" title="">404 Page Wide</a></li>
				<li><a href="#" title="">Projects</a>
					<ul>
						<li><a href="projects.html" title="">On Going Projects Wide</a></li>
						<li><a href="single-post-project.html" title="">Single Post Project</a></li>
						<li><a href="single-post-project-left-sidebar.html" title="">Single Post Project Left Sidebar</a></li>
					</ul>
				</li>
				<li><a href="#" title="">Search With Right Sidebar</a>
					<ul>
						<li><a href="search-found.html" title="">Search Results Found</a></li>
						<li><a href="nothing-found.html" title="">Search Result Not Found</a></li>
					</ul>
				</li>
				<li><a href="#" title="">Search With Left Sidebar</a>
					<ul>
						<li><a href="search-found-left-sidebar.html" title="">Search Results Found</a></li>
						<li><a href="nothing-found-left-sidebar.html" title="">Search Result Not Found</a></li>
					</ul>
				</li>
			</ul><!-- Drop Down -->				
		</li>
		<li><a href="#" title="">Cart</a>
			<ul>
				<li><a href="#" title="">My Cart</a>
					<ul>
						<li><a href="cart.html" title="">Right Sidebar</a></li>
						<li><a href="cart-left-sidebar.html" title="">Left Sidebar</a></li>
					</ul>
				</li>
				<li><a href="#" title="">Products</a>
					<ul>
						<li><a href="products.html" title="">Right Sidebar</a></li>
						<li><a href="products-left-sidebar.html" title="">Left Sidebar</a></li>
					</ul>
				</li>
				<li><a href="#" title="">Checkout</a>
					<ul>
						<li><a href="checkout.html" title="">Right Sidebar</a></li>
						<li><a href="checkout-left-sidebar.html" title="">Left Sidebar</a></li>
					</ul>
				</li>
				<li><a href="#" title="">Order Recieved</a>
					<ul>
						<li><a href="order-recieved.html" title="">Right Sidebar</a></li>
						<li><a href="order-recieved-left-sidebar.html" title="">Left Sidebar</a></li>
					</ul>
				</li>
				<li><a href="#" title="">Single Product Page</a>
					<ul>
						<li><a href="single-product.html" title="">Right Sidebar</a></li>
						<li><a href="single-product-left-sidebar.html" title="">Left Sidebar</a></li>
					</ul>
				</li>	
			</ul>
		</li>
		<li><a href="#" title="">Portfolio</a>
			<ul>
				<li><a href="portfolio-2-column.html" title="">2 Column Wide</a></li>
				<li><a href="portfolio-3-column.html" title="">3 Column Wide</a></li>
				<li><a href="portfolio-4-column.html" title="">4 Column Wide</a></li>
			</ul>
		</li>
		<li><a href="#" title="">Gallery</a>
			<ul>
				<li><a href="gallery-one-column.html" title="">1 Column Wide</a></li>
				<li><a href="gallery-two-column.html" title="">2 Column Wide</a></li>
				<li><a href="gallery-three-column.html" title="">3 Column Wide</a></li>
				<li><a href="gallery-four-column.html" title="">4 Column Wide</a></li>
				<li><a href="#" title="">Video Gallery</a>
					<ul>
						<li><a href="gallery-three-column-video.html" title="">3 Column With Lightbox</a></li>
						<li><a href="gallery-three-column-video2.html" title="">3 Column </a></li>
						<li><a href="gallery-two-column-video.html" title="">2 Column With Lightbox</a></li>
						<li><a href="gallery-two-column-video2.html" title="">2 Column</a></li>
					</ul>
				</li>
				<li><a href="#" title="">Right Sidebar</a>
					<ul>
						<li><a href="gallery-one-column-with-sidebar.html" title="">1 Column</a></li>
						<li><a href="gallery-two-column-with-sidebar.html" title="">2 Column</a></li>
						<li><a href="gallery-three-column-with-sidebar.html" title="">3 Column</a></li>
					</ul>
				</li>
				<li><a href="#" title="">Left Sidebar</a>
					<ul>
						<li><a href="gallery-one-column-with-left-sidebar.html" title="">1 Column</a></li>
						<li><a href="gallery-two-column-with-left-sidebar.html" title="">2 Column</a></li>
						<li><a href="gallery-three-column-with-left-sidebar.html" title="">3 Column</a></li>
					</ul>
				</li>
			</ul><!-- Drop Down -->
		</li>
		<li><a href="#" title="">Blog</a>
			<ul>
				<li><a href="blog-without-sidebar.html" title="">Blog Wide</a></li>
				<li><a href="blog-with-sidebar.html" title="">Blog With Left Sidebar</a></li>
				<li><a href="blog-with-left-sidebar.html" title="">Blog With Right Sidebar</a></li>
				<li><a href="#" title="">Single Posts Right Sidebar</a>
					<ul>
						<li><a href="single-post-image.html" title="">Single Post With Image</a></li>
						<li><a href="single-post-video.html" title="">Single Post With Video</a></li>
						<li><a href="single-post-slider.html" title="">Single Post With Slider</a></li>
						<li><a href="single-post-project.html" title="">Project Single Post</a></li>
					</ul>
				</li>
				<li><a href="#" title="">Single Posts Left Sidebar</a>
					<ul>
						<li><a href="single-post-image-left-sidebar.html" title="">Single Post With Image</a></li>
						<li><a href="single-post-video-left-sidebar.html" title="">Single Post With Video</a></li>
						<li><a href="single-post-slider-left-sidebar.html" title="">Single Post With Slider</a></li>
						<li><a href="single-post-project-left-sidebar.html" title="">Project Single Post</a></li>
					</ul>
				</li>
				
			</ul><!-- Drop Down -->
		</li>
		<li><a href="elements.html">Features</a>
			<ul>
				<li><a href="title-style.html">Title Styles</a></li>
				<li><a href="elements.html#tabs-style">4 Tabs Style</a></li>
				<li><a href="elements.html#accordions-style">2 Accordions</a></li>
				<li><a href="elements.html#blockquotes-style">2 Block Qoutes</a></li>
				<li><a href="elements.html#highlightedtext">HighLighted Text</a></li>
				<li><a href="elements.html#buttons-style">6 Buttons Sets</a></li>
				<li><a href="elements.html#list-styles">List Styles</a></li>
				<li><a href="elements.html#alertboxes">Alert Boxes</a></li>
				<li><a href="elements.html#dropcap">Dropcap Variations</a></li>
				<li><a href="elements.html#socialicons">Social Icons</a></li>
				<li><a href="elements.html#alignedimages">Aligned Images</a></li>
				<li><a href="elements.html#progressbars">2 Progress Bars</a></li>
				<li><a href="elements.html#pricetable">Price Tables</a></li>
				<li><a href="elements.html#columnsstyle">Columns Style</a></li>
			</ul>
		</li>
	</ul>   
</div><!--Responsive header-->