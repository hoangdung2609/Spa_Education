<!-- Popup sucribe -->
<style>
    .button-subcribe {
        position: fixed;
        right: 10px;
        bottom: 20px;
        z-index: 101;
        width: 48px;
        height: 48px;
        cursor: pointer;
    }
    .onesignal-bell-svg {
        width: 100%;
        height: 100%;
    }
    .onesignal-bell-launcher-message {
        position: absolute;
        top: 2px;
        background-color: #00bcd4;
        color: #fff;
        right: 51px;
        opacity: 0;
        width: 105px;
        border-radius: 10px;
        padding: 10px;
    }
    .button-subcribe:hover .onesignal-bell-launcher-message {
      opacity: 0.7
    }
    .subcribe {
      width: 400px;
      min-height: 200px;
      position: fixed;
      bottom: 20px;
      right: 10px;
      background-color: #fff;
      text-align: center;
      padding: 20px;
      border: 1px solid #dcdcdc;
      z-index: 100;
      display: none;
      max-width: 100%;
    }
</style>
<div id="onesignal-bell-launcher" class="button-subcribe">
    <div style="border-radius: 50%">
        <svg class="onesignal-bell-svg" xmlns="http://www.w3.org/2000/svg" width="99.7" height="99.7" viewBox="0 0 99.7 99.7" style="filter: drop-shadow(0 2px 4px rgba(34,36,38,0.35));; -webkit-filter: drop-shadow(0 2px 4px rgba(34,36,38,0.35));;">
            <circle cx="49.9" cy="49.9" r="49.9" style="fill: #00bcd4"></circle>
            <path d="M50.1 66.2H27.7s-2-.2-2-2.1c0-1.9 1.7-2 1.7-2s6.7-3.2 6.7-5.5S33 52.7 33 43.3s6-16.6 13.2-16.6c0 0 1-2.4 3.9-2.4 2.8 0 3.8 2.4 3.8 2.4 7.2 0 13.2 7.2 13.2 16.6s-1 11-1 13.3c0 2.3 6.7 5.5 6.7 5.5s1.7.1 1.7 2c0 1.8-2.1 2.1-2.1 2.1H50.1zm-7.2 2.3h14.5s-1 6.3-7.2 6.3-7.3-6.3-7.3-6.3z" style="fill: #FFF"></path>
            <ellipse cx="49.9" cy="49.9" rx="37.4" ry="36.9" style="fill: none;stroke: #fff;stroke-width: 3px;stroke-miterlimit: 10;"></ellipse>
        </svg>
    </div>
    <div class="onesignal-bell-launcher-message" >
        <div class="onesignal-bell-launcher-message-body">Subscribe us</div>
    </div>
</div>

<div class="subcribe" id="container-subciber">
    <div class="row">
        <div class="col-xs-12">
            <div class="quick-contact">
                <h4>Subscribe us for Future Updates!</h4>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="email" name="name" placeholder="Enter email address here" required>
                        </div>
                        <div class="col-xs-12">
                            <button class="btn col-xs-12" type="submit" style="margin-bottom: 10px">Subscribe</button>
                            <a style="color: #606060; border-bottom: 1px dotted #dcdcdc; cursor: pointer"
                                id="subcribe-button-cancel"
                            >
                                No, thanks!
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Popup subcribr -->


<footer>
    <div class="elh-footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="elh-footer-widgets">
                    <div class="col-md-6 col-xs-6">
                        <aside class="widget about_widget">
                            <a class="footer-logo" href="#">
                                <img src="/images/logo.png" alt="Site Logo" style="height: 70px">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="widget widget_custom-menu">
                            <h3 class="widget-title">About Us</h3>
                            <ul class="custom-menu">
                                <li><a href="#">How the University</a></li>
                                <li><a href="#">Visit University</a></li>
                                <li><a href="#">Maps</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="widget widget_custom-menu">
                            <h3 class="widget-title">Useful Links</h3>
                            <ul class="custom-menu">
                                <li><a href="#">News &amp; Blog</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Discussion</a></li>
                                <li><a href="#">Spotlight on</a></li>
                                <li><a href="#">Research LAB</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elh-footer-lower-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <p class="copyright xs-text-center">Copyright 2018, <a href="#">Education</a>. All Rights Reserved.</p>
                </div>
                <div class="col-sm-6 col-xs-12 text-right xs-text-center">
                    <ul class="footer-menu">
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Legal</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
