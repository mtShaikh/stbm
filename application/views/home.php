<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!--web-fonts-->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!--js-->
	<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style>



		img {
			vertical-align: middle;
			width: 131px;
			height: 100px;
		}
		.news-top {
			margin-top: -70px;
		}
		font {
			font-family: times new roman;
			color: #7B1B06;
			font-size: 30px;
		}


		img.img-responsive {
			width: 100%;
			height: 400px;


		}

		img.img-fb{
			width: 30px;
			height: 30px;

		}

		.navg {
			margin-top: -30px;
			font-family: Arial Black;
			


		}
		.donatenow{
			margin-left: 640px;

		}




		{box-sizing:border-box}
		body {font-family: Verdana,sans-serif;}
		.mySlides {display:none}

		/* Slideshow container */
		.slideshow-container {
			max-width: 1340px;
			position: relative;
			margin: auto;
			margin-top: -30px;
		}
		.block-intro{
			max-width: 1000px;
			position: relative;
			margin: auto;
			margin-top: -30px;

		}





		/* Caption text */
		.text {
			color: #f2f2f2;
			font-size: 15px;
			padding: 8px 12px;
			position: absolute;
			bottom: 8px;
			width: 100%;
			text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
			height: 13px;
			width: 13px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
		}

		.active {
			background-color: #717171;
		}

		/* Fading animation */
		.fade {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1s;
			animation-name: fade;
			animation-duration: 1s;
		}

		.notch-b {
			margin-top: 20px;
		}


		.notch {
			margin-top: 20px;
		}


		.panel-body{
			border: 0.25px solid;
		}

		@-webkit-keyframes fade {
			from {opacity: .4}
			to {opacity: 1}
		}

		@keyframes fade {
			from {opacity: .4}
			to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
			.text {font-size: 11px}
		}






	</style>



</head>




















<body>










	<!--header start here-->
	<div class="mothergrid">
		<div class="container">
			<div class="header">
				
				<span class="logo">
					<span class="col-md-12 logo-left">
						
						<a href="index.html"><h4><strong><label>Logo</label> &nbsp <font size="4.5">Step Towrads Betterment </font></strong></h4> </a>

					</span></span>
					<span class="donatenow">
						
						<a href="donation.html"><img  src="images/Donate.jpg"></a>
					</span>

				</div>

				<div class="menu"></div>

				<div class="clear"> </div>
				
				<div class="navg">
					<div class="col-md-12 navg-left">

						<ul class="res">
							<li><a class="active" href="index.html">HOME</a></li>
							<li><a href="about.html">ABOUT US</a></li>
							<li><a href="whatwedo.html">WHAT WE DO</a></li>
							<li><a href="impact.html">OUR IMPACT</a></li>
							<li><a href="events.html">EVENTS</a></li>
							<li><a href="contact.html">CONTACT US</a></li>
							


						</ul>

						<script>
							$( "span.menu").click(function() {
								$(  "ul.res" ).slideToggle("slow", function() {
			                                                                                         // Animation complete.
			                                                                                     });
							});
						</script>
					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
		<!--heder end here-->
		<!--banner start here-->



		<br></br>


		<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="numbertext">1 / 5</div>
				<div class="frontimage"> 

					<img src="<?php echo base_url();?>/assets/images/edu1.jpg" class="img-responsive" alt=" " style="width:100%"  >
				</div>
				<div class="text">Caption Text</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 5</div>
				<div class="frontimage">
					<img src="<?php echo base_url();?>/assets/images/edu2.jpg" class="img-responsive" alt=" " style="width:100%"  >
				</div>
				<div class="text">Caption Two</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 5</div>
				<div class="frontimage">
					<img src="<?php echo base_url();?>/assets/images/edu3.jpg" class="img-responsive" alt=" " style="width:100%"  >
				</div>
				<div class="text">Caption Three</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">4 / 5</div>
				<div class="frontimage"> 
					<img src="<?php echo base_url();?>/assets/images/edu4.jpg" class="img-responsive" alt=" " style="width:100%"  >
				</div>
				<div class="text">Caption four</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">5 / 5</div>
				<div class="frontimage"> 
					<img src="<?php echo base_url();?>/assets/images/5.jpg" class="img-responsive" alt=" " style="width:100%"  >
				</div>
				<div class="text">Caption five</div>
			</div>



		</div>
		<br>

		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>

		</div>

		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex> slides.length) {slideIndex = 1}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";
					dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<br></br>

<div class="block-intro">
	<h3 align="center" style="font-size: 40px"></h3>
	<br></br>
	
	<div class="col-md-6 new-left">
		<div class="panel panel-default">
			<div class="panel-body">
				
				<h2><strong> Our program </strong></h2>
				<br></br>
				<p>cndjc n cjdnj jnducv  njc df b nc ffu fucnc fdjcdcb chcn uefncb  fjcefb  ejcnunc   nfucuidcn n nudcnuecnecn jdncuncd nciuducd nnjncufuefcv fr jncudfjuefce ndufbch ufhcvfbvb c8fucvfc  cnfu ncudfnc  </p>
				<div class="button-b">
					<a href="button-b.html">MORE</a>
				</div>
			</div>
		</div>   

		<div class="clearfix"> </div>
	</div>

	
	<div class="col-md-6 new-left">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2><strong>Take a action</strong></h2>			    
				<br></br>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. jcvid nj nfiuvjf hnufch j fe8chbv uf jc fvnvuv bnc  cvjfn f bnjfuh jj8hc a sjdcvhbc ecj  uh cjvhc Lorem Ipsum has been the industry's standard unchanged</p>
				<div class="button-b">
					<a href="button-c.html">MORE</a>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
</div>
</div>















<div class="news">
	<div class="container">
		<div class="news-main">
			<div class="news-top">
				<h3>Our Events</h3>
			</div>

			<div class="news-bottom">
				
				
				<div class="col-md-4 new-left">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<div class="notch-b">
								<small class="brown">24</small>
								
							</div>
							<h3>June</h3>
							<h4>Excellence School </h4>
							<p>cndjc n cjdnj jnducv  njc df b nc ffu fucnc fdjcdcb chcn uefncb  fjcefb  ejcnunc   nfucuidcn n nudcnuecnecn jdncuncd nciuducd nnjncufuefcv fr jncudfjuefce  </p>
							<div class="button-b">
								<a href="button-b.html">MORE</a>
							</div>
						</div>
					</div>   

					<div class="clearfix"> </div>
				</div>

				<div class="col-md-4 new-left">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="notch">
								<small class="brown">28</small>
							</div>
							
							<h3>September</h3>
							<h4>Community Hall </h4>
							<p>Lorem Ipsum is simply dummy text of the printing nc h cnc ndndb and typesetting industry. Lorem I   ncdn  c h bcd h nd bxhdb hbds b hb hhb bby bby</p>
							<div class="button-b">
								<a href="button.html">MORE</a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 new-left">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="notch">
								<small class="brown">12</small>
							</div>
							
							<h3>October</h3>
							<h4>Different colleges of PanoAkil </h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard unchanged</p>
							<div class="button-b">
								<a href="button-c.html">MORE</a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>



<div class="news">
	<div class="container">
		<div class="news-main">
			<div class="news-top">
				<h3>Resources</h3>
			</div>
			<div class="news-bottom">
				<div class="col-md-4 new-left">
					<div class="panel panel-default">
						<div class="panel-body">



							<div class="notch-b">
								<a href="images"><small class="brown">Gallery</small></a>
							</div>
							
							<br></br>

							<h4>All photos</h4>
							<p>ncfnc cencune cnuhcecnec uecjuehcnc icuefhce cjefcnuehccnc jncuefhcfecnjuc jncuincef cefcefjcnfeuchfec ncvuefc</p>
							<div class="button-b">
								<a href="#">MORE</a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 new-left">
					<div class="panel panel-default">
						<div class="panel-body">


							<div class="notch">
								
								<a href="<?php echo site_url('login/index') ?>"><small class="brown">Scholarship</small></a>
							</div>
							
							<br></br>
							<h4>Apply for scholarship</h4>
							<p>dudn ccneucjc cjefucjecc cfuecefc jmduwjde ncjecneuc jdcieje ejcmeuchec ccmiejnfec cmeuecbe cnemmudebc ecbe</p>
							<div class="button">
								<a href="#">MORE</a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 new-left">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="notch">
								<a href="donation.html"> <small class="brown">Donation</small></a>
							</div>
							
							<br></br>
							<h4>Donate for better cause</h4>
							<p>cndcdec jceuicerc ececcjcnreufj cjdemcufebcrcnc eicjerce ncejcnecerjdc neceidhedr ncmedher jxdjx cfeucjefcn </p>
							<div class="button">
								<a href="#">MORE</a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>









<!--/news end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="footer-navg">
				<div class="col-md-12 footer-navg-left">
					<ul>
						<li><a class="active" href="index.html">HOME</a></li>
						<li><a href="about.html">ABOUT US</a></li>
						<li><a href="WWD.html">WHAT WE DO</a></li>
						<li><a href="impact.html">OUR IMPACT</a></li>
						<li><a href="events.html">EVENTS</a></li>
						
						<li><a href="contact.html">CONTACT US</a></li>
					</ul>
				</div>
				
				<div class="footer-bottom">
					<p>follow us on <a href="https://www.facebook.com/BettermentStepTowards/?hc_ref=SEARCH&fref=nf"> <img src="<?php echo base_url();?>/assets/images/fa.png" class="img-fb"> </a> </p>
				</div>
				<div class="clearfix"> </div>
				<script type="text/javascrippng class=img.fb
				$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
</div>
</div>






<!--/footer end here-->
</body>
</html>