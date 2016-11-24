<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->
<!DOCTYPE html>
<html>

<head>
    <title>My Charity A Charity category Flat bootstrap Responsive Website Template| Home :: w3layouts</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--web-fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!--js-->
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <meta name="keywords" content="My Charity Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"
    />
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        img {
            vertical-align: middle;
            width: 131px;
            height: 69px;
        }

        font {
            font-family: Kristen ITC;
            color: #7B1B06;
            font-size: 20px;
        }

        img.img-responsive {
            width: 100%;
            height: 450px;
        }

        {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none
        }
        /* Slideshow container */

        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .block-intro {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        F
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
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        /* On smaller screens, decrease text size */

        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>
</head>

<body>
    <!--header start here-->
    <div class="mothergrid">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <div class="col-md-12 logo-left">
                        <a href="home.html"><h4><strong><label>Logo</label> &nbsp <font size="4.5">Step Towrads Betterment</font></strong></h4> </a>
                    </div>
                </div>
                <span class="menu"> <img src="images/icon.png" alt=""/></span>
                <div class="clear"> </div>
                <div class="navg">
                    <div class="col-md-12 navg-left">
                        <ul class="res">
                            <li><a class="active" href="home.html">HOME</a></li>
                            <li><a href="about.html">ABOUT US</a></li>
                            <li><a href="projects.html">WHAT WE DO</a></li>
                            <li><a href="blog.html">OUR IMPACT</a></li>
                            <li><a href="events.html">EVENTS</a></li>
                            <li><a href="contact.html">CONTACT US</a></li>
                        </ul>
                        <script>
                            $("span.menu").click(function() {
                                $("ul.res").slideToggle("slow", function() {
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
                    <img src="<?php echo base_url();?>images/1.jpg" class="img-responsive" alt=" " style="width:100%">
                </div>
                <div class="text">Caption Text</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <div class="frontimage">
                    <img src="<?php echo base_url();?>images/2.jpg" class="img-responsive" alt=" " style="width:100%">
                </div>
                <div class="text">Caption Two</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <div class="frontimage">
                    <img src="<?php echo base_url();?>images/3.jpg" class="img-responsive" alt=" " style="width:100%">
                </div>
                <div class="text">Caption Three</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <div class="frontimage">
                    <img src="<?php echo base_url();?>images/4.jpg" class="img-responsive" alt=" " style="width:100%">
                </div>
                <div class="text">Caption four</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <div class="frontimage">
                    <img src="<?php echo base_url();?>images/5.jpg" class="img-responsive" alt=" " style="width:100%">
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
            var slidehome = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slidehome++;
                if (slidehome > slides.length) {
                    slidehome = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slidehome - 1].style.display = "block";
                dots[slidehome - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
        <br></br>
        <div class="block-intro">
            <h3 align="center" style="font-size: 40px">Introduction</h3>
            <br></br>
            <p><strong>Step towards betterment</strong> is a non profit organization committed to bring about education reform in interior Sindh through active participation of students on a voluntary basis. Our organization specializes in spreading educational
                awareness in remote areas of Sindh; we provide students with information about new academic disciplines and hold counselling workshops for both the students and parents. One of our organizational goals is promoting female education. Our
                counselling workshops encourage parents to send their daughters to school and university. We provide them with specialized services for tutoring and support for university applications if they ask for it.
                <p> <strong>Step towards betterment</strong> aims to gather donated funding to provide academic scholarships, aid and stipends for impoverished students on the basis of merit. This is one of our prime organizational goals, to increase and
                    improve access to educational facility for students for all ethnic, gender and religious backgrounds through monitory support programs and formal academic support programs.</p>
            </p>
        </div>
        <div class="news">
            <div class="container">
                <div class="news-main">
                    <div class="news-top">
                        <h3>Our Events</h3>
                    </div>
                    <div class="news-bottom">
                        <div class="col-md-4 new-left">
                            <div class="notch-b">
                                <small class="brown">24</small>
                            </div>
                            <h3>June</h3>
                            <h4>Excellence School and College</h4>
                            <p>cndjc n cjdnj jnducv nc jnncjd d nfucuidcn n nudcnuecnecn jdncuncd nciuducd nnjncufuefcv fr jncudfjuefce cnjneej </p>
                            <div class="button-b">
                                <a href="button-b.html">MORE</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-4 new-left">
                            <div class="notch">
                                <small>28</small>
                            </div>
                            <h3>September</h3>
                            <h4>Community Hall </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard unchanged</p>
                            <div class="button-b">
                                <a href="button.html">MORE</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-4 new-left">
                            <div class="notch">
                                <small>12</small>
                            </div>
                            <h3>October</h3>
                            <h4>Different colleges of PanoAkil </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard unchanged</p>
                            <div class="button-b">
                                <a href="button-c.html">MORE</a>
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
                            <div class="notch-b">
                                <a href="images"><small class="brown">Gallery</small></a>
                            </div>
                            <br></br>
                            <h4>All photos</h4>
                            <p>ncfnc cencune cnuhcecnec uecjuehcnc icuefhce cjefcnuehccnc jncuefhcfecnjuc jncuincef cefcefjcnfeuchfec ncvuefc</p>
                            <div class="button-b">
                                <a href="#">MORE</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-4 new-left">
                            <div class="notch">
                                <a href="<?php echo site_url('login/index') ?>"><small>Scholarship</small></a>
                            </div>
                            <br></br>
                            <h4>Apply for scholarship</h4>
                            <p>dudn ccneucjc cjefucjecc cfuecefc jmduwjde ncjecneuc jdcieje ejcmeuchec ccmiejnfec cmeuecbe cnemmudebc ecbe</p>
                            <div class="button">
                                <a href="">MORE</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-4 new-left">
                            <div class="notch">
                                <a href="donation.html"> <small>Donation</small></a>
                            </div>
                            <br></br>
                            <h4>Donate for better cause</h4>
                            <p>cndcdec jceuicerc ececcjcnreufj cjdemcufebcrcnc eicjerce ncejcnecerjdc neceidhedr ncmedher jxdjx cfeucjefcn </p>
                            <div class="button">
                                <a href="#">MORE</a>
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
                                <li><a class="active" href="home.html">HOME</a></li>
                                <li><a href="about.html">ABOUT US</a></li>
                                <li><a href="WWD.html">WHAT WE DO</a></li>
                                <li><a href="impact.html">OUR IMPACT</a></li>
                                <li><a href="events.html">EVENTS</a></li>
                                <li><a href="contact.html">CONTACT US</a></li>
                            </ul>
                        </div>
                        <div class="footer-bottom">
                            <p>Facebook link <a href="https://www.facebook.com/BettermentStepTowards/?hc_ref=SEARCH&fref=nf"> Step Towards Betterment </a> </p>
                        </div>
                        <div class="clearfix"> </div>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                /*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear'
									 		};
											*/

                                $().UItoTop({
                                    easingType: 'easeOutQuart'
                                });

                            });
                        </script>
                        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
                    </div>
                </div>
            </div>
            <!--/footer end here-->
</body>

</html>
