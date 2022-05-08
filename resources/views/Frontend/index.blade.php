<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alankar &amp; Nancy</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('Frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="{{ asset('Frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="{{ asset('Frontend/css/flaticon/flaticon.css') }}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('Frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/owl.transitions.min.css') }}" rel="stylesheet">
    <!-- ColorBox CSS -->
    <link href="{{ asset('Frontend/css/colorbox.css') }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{ asset('Frontend/css/style.css') }}" rel="stylesheet">
    <!-- Color CSS -->
    <link href="{{ asset('Frontend/css/red.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Frontend/css/testStyle.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='//fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>


</head>

<body>


<!-- Header -->
<header>
    <div class="header_plane anim"></div>

    <!-- Menu Button -->
    <a class="main_menu_btn">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
    </a>


    <!-- Submenu -->
    <div class="main_menu_block">
        <div class="menu_wrapper">
            <div class="sub_menu anim">
                <ul>
                    <li><a href="#married">Invitation</a></li>
                    <li><a href="#when_where">When &amp; Where</a></li>
                    <li><a href="#events">Our Events</a></li>
                    <li><a href="#rsvp">RSVP</a></li>
                    <li><a href="#gallery">Our Gallery</a></li>
                </ul>
            </div>
            <div class="sub_img anim"></div>
        </div>
    </div>
    <!-- Submenu End -->

    <!-- Social Buttons -->
    <div class="header_social">
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
    </div>

</header>
<!-- Header End -->

<div class="page">

    <!-- Intro -->
    <section class="home_intro  parallax2" data-image="{{ asset('Frontend/img/wine.png') }}">

        <div class="home_txt" data-0="opacity:1" data-top-bottom="opacity:0">

            <!-- Intro Text -->
            <div class="box">
                <div class="title1 title1_2">Save the Date!</div>
                <!-- <div class="title1"><span>18 <b>02</b></span></div> -->
                <div class="title1"><span>18  -  02</span></div>
                <div class="title0">2017</div>
            </div>
            <a href="#married" class="intro_down"><span><i class="fa fa-angle-down"></i></span></a>
        </div>
        <div class="into_firefly"></div>
    </section>
    <!-- Intro End -->

    <!-- Married -->
    <section class="married clearfix" id="married">
        <div class="container">
            <div class="im1 parallax" data-bottom="left:30%" data-center="left:0" data-image="{{ asset('Frontend/img/alankar2.jpg') }}">
                <div class="im_arrows"></div>
            </div>
            <div class="im2 parallax" data-bottom="right:20%" data-center="right:0" data-image="{{ asset('Frontend/img/nancy6.jpg') }}"
                 data-original-title="Vidhya Shivalingam">
                <div class="im_arrows"></div>
            </div>

            <div class="married_txt" data-bottom="opacity:0" data-center="opacity:1">
                <h2>You're Invited</h2>
                On the 18th of Feb, 2017<br>
                <b> Alankar Gupta &amp; Nancy Yadav</b><br>
                are getting married in Agra, UP.<br>
                <a href="#rsvp" class="btn go">RSVP NOW</a>

                <div class="married_coundown"></div>
                <div class="double_arrow"></div>
            </div>
        </div>
    </section>
    <!-- Married End -->
    <!-- When & Where -->
    <section class="when_where white_txt parallax" id="when_where" data-image="{{ asset('Frontend/img/manpho.jpg') }}"
             data-bottom-top="opacity:0;" data-bottom="opacity:1;">
        <div class="over"></div>
        <div class="container">

            <!-- Photocamera Icon -->
            <div class="photocamera"><span class="flaticon-slr2"></span></div>

            <div class="when_where_container opacity">
                <h2>Where &amp; When</h2>

                <!-- Texts -->
                <div class="pattern1"></div>
                <div class="title1">Anand Bhavan</div>
                <div class="title2">Banquet Hall</div>
                <div class="title3"><a class="maplink" href="https://goo.gl/maps/aShLGX7YFkS2" target="_blank">
                    Mall Road, <br/> Opposite Post Office, <br/>Sadar Bazar, <br/>
                    Rakabganj, Agra<br/><i class="flaticon-map35"></i></a></div>

                <div class="pattern2"></div>
                <div class="title1">7 o'clock</div>
                <div class="title5">IN THE EVENING</div>
                <div class="title4">Feb Eighteen<br>Two Thousand and Seventeen</div>
                <div class="pattern3"></div>
                <div id="gmap_canvas"></div>
            </div>
        </div>
    </section>
    <!-- When & Where End -->
    <!-- Events -->
    <section class="our_story events" id="events">
        <h2>Our Events</h2>

        <!-- Wrapper -->
        <div class="story_wrapper">

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="{{ asset('Frontend/img/mehandi.jpg') }}">
                    <div class="story_img_plane"></div>
                </div>

                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Mehandi
                            <i>12.02.2017</i>
                        </div>
                        Mehandi is one of the sixteen adornments of the bride and her beauty is incomplete without it.
                        According to popular belief, the darker the color of the Mehndi, the more her husband will love her.
                    </div>
                </div>
            </div>


            <div class="story_item">
                <div class="story_img parallax" data-image="{{ asset('Frontend/img/haldi.jpg') }}">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Haldi
                            <i>15.02.2017</i>
                        </div>
                        The haldi paste is made from turmeric, rose water (or water), and sandalwood powder. The paste serves
                        as a cleanser for the body and soul and signifies the bride's preparation and welcoming into adult
                        married life. The haldi in some Indian communities also signifies protection.
                    </div>
                </div>
            </div>

            <div class="story_item">
                <div class="story_img parallax" data-image="{{ asset('Frontend/img/sangeet.jpg') }}">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Lagan
                            <i>18.02.2017</i>
                        </div>
                        The relatives and associates of bride and groom gather, pandit will convery the traditional ceremony of 'lagan' wherein 'teeka' and 'aarti' is performed for the groom. It is then followed by photographs and videos taken by the photographers.
                    </div>
                </div>
            </div>

            <!-- Item -->
        

            <!-- Item -->
        

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="{{ asset('Frontend/img/reception.jpg') }}">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Reception
                            <i>18.02.2017 7PM Onwards</i>
                        </div>
                        This is virtually the first public appearance of the couple together, after
                        wedding where they receive the blessing and gifts from the society and relatives. It is just an
                        extension of the wedding day and is characterized by opulence and magnificence.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="{{ asset('Frontend/img/phere.jpg') }}">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Phere
                            <i>19.02.2017 2 AM Onwards</i>
                        </div>
                        The seven vows or pheras can be said to contain the crux of the practice of marriage. These seven
                        vows are the seven promises which the bride and the groom make to each other for a happy and
                        prosperous life. They are bound together by an unseen bond protected by these promising words.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Events End -->

    <!-- RSVP -->
    <section class="rsvp" id="rsvp">
        <div class="container">
            <h2>Join Our Party</h2>

            <div id="envelope" data-100-top="@class:active" data-200-bottom="@class: ">
                <div class="envelope_front">
                    <div class="env_top_top"></div>
                </div>
                <div class="envelope_back">
                    <div class="env_top"></div>
                </div>

                <div class="paper">

                    <!-- End Date of Reservation -->
                    <div class="paper_title">Please RSVP by Feb 15th</div>

                    <!-- Form -->
                    <div id="div_block_1">
                        <div class="txt_input">
                            <input type="text" class="form-control" id="name_block_1" placeholder="Your Name">
                        </div>
                        <div class="txt_input">
                            <input type="text" class="form-control" id="guest_block_1" placeholder="Your Guest's Name">
                        </div>
                        <div class="txt_input">
                            <input type="text" class="form-control" id="email_block_1" placeholder="Your E-mail">
                        </div>
                        <div class="txt_input">
                            <input type="text" class="form-control" id="attending_block_1" placeholder="# Attending">
                        </div>
                        <input name="" type="submit" value="Send" class="btn btn-lg submit_block_1">


                        <!-- Form Additional text -->
                        <p>We’re excited to see you! Any questions, just email us at:
                            <a href="mailto:alankarrocks@gmail.com">alankarrocks@gmail.com</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- RSVP End -->


    <!-- Gallery -->
    <section class="gallery" id="gallery">
        <h2>Our Gallery</h2>
        <div class="gallery_wrapper">
        <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="{{ asset('Frontend/img/roka2.jpg') }}img/date1.jpg" title="Engagement Photos"><b>Date</b>
                    </a>
                </div>
                <img src="{{ asset('Frontend/img/date1.jpg') }}" alt="Gallery 1">
            </div>
            <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="{{ asset('Frontend/img/roka2.jpg') }}" title="Engagement Photos"><b>Roka</b>
                    </a>
                </div>
                <img src="{{ asset('Frontend/img/roka2.jpg') }}" alt="Gallery 2">
            </div>
            <!-- <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="img/gallary2.jpg" title="Engagement Photos"><b>Engagement</b>
                    </a>
                </div>
                <img src="img/ring.jpg" alt="Gallery 3">
            </div> -->
            <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="{{ asset('Frontend/img/ring2.jpg') }}" title="Engagement Photos"><b>Engagement</b>
                    </a>
                </div>
                <img src="{{ asset('Frontend/img/ring2.jpg') }}" alt="Gallery 3">
            </div>
            <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="{{ asset('Frontend/img/pre_wed.jpg') }}" title="Engagement Photos"><b>Pre Wedding</b>
                    </a>
                </div>
                <img src="{{ asset('Frontend/img/pre_wed.jpg') }}" alt="Gallery 4">
            </div>
        </div>
    </section>
    <!-- Gallery End -->
    <!-- Footer -->
    <section class="footer white_txt parallax" id="footer" data-image="{{ asset('Frontend/img/footer3.png') }}">
        <div class="over"></div>
        <div class="container">

            <!-- Thanks Text -->
            <div class="thanks">&#10084;</div>
            <div class="footer_txt">


                <!-- Social Buttons -->
                <div class="footer_social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>

                <div class="title1">Alankar &amp; Nancy</div>
                <!-- Copyrights -->
                <div class="copyrights"> © 2016 <a href="https://github.com/alankar0416">WebDesigner</a></div>

            </div>
        </div>


    </section>


    <!-- JQuery -->
    <script src="{{ asset('Frontend/js/jquery.min.js') }}"></script>
    <!-- CountDown JS -->
    <script type="text/javascript" src="{{ asset('Frontend/js/jquery.plugin.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Frontend/js/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('Frontend/js/jquery.onepage-scroll.min.js') }}"></script>

    <!-- ColorBox JS -->
    <script src="{{ asset('Frontend/js/jquery.colorbox-min.js') }}"></script>
    <!-- OWL Carousel JS -->
    <script src="{{ asset('Frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('Frontend/js/bootstrap.min.js') }}"></script>

    <!-- ScrollR JS -->
    <script src="{{ asset('Frontend/js/skrollr.min.js') }}"></script>


    <!-- PrefixFree -->
    <script src="{{ asset('Frontend/js/prefixfree.min.js') }}"></script>

    <!-- FireFly JS -->
    <script src="{{ asset('Frontend/js/jquery.firefly-0.3-min.js') }}"></script>

    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIgd3zFQvq8lEyJOHX8qw6T1ifngC8_rw"></script>

    <!-- Theme JS -->
    <script src="{{ asset('Frontend/js/script.js') }}"></script>


</div>

</body>
</html>
