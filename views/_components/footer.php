<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 margin-btm-30">
                <div class="footer-col">
                    <h3 class="widget-title">
                        Resources
                    </h3>
                    <div>
                            <div><ul class="footer-resources">
                                    <li><a href="http://www.spacecamp.com/blackfriday" target="_blank&quot;">Visit Spacecamp</a></li>
                                    <li><a href="http://www.mars-one.com" target="_blank&quot;">MarsOne | The Next Giant Leap For Mankind</a></li>
                                    <li><a href="http://www.nasa.gov" target="_blank&quot;">NASA News &amp; Launches</a></li>
                                    <li><a href="http://astronaut.com" target="_blank&quot;">Astronaut.com | Where Science Fiction Meets Reality</a></li>
                                </ul>
                            </div>

                    </div>
                </div><!--footer-col-->

                <div class="footer-col">
                    <ul class="list-inline social-1">

                        @foreach ($social_links as $social => $link)

                        <li><a href="@( $link )"><i class="fa fa-@( $social )"></i></a></li>

                        @endforeach

                    </ul>
                </div><!--footer-col-->
            </div>

            <div class="col-sm-4 margin-btm-30">
                <div class="footer-col">
                    <h3 class="widget-title">
                        Latest Tweets
                    </h3>
                </div>
                <div class="tweet"></div>

            </div>

            <div class="col-sm-4">
                <div class="footer-col">
                    <h3 class="widget-title">
                        Subscribe to Newsletter
                    </h3>
                    <p>
                        Subscribe to blog, events and newsletters and stay updated with Blueberry Foundation.
                    </p>
                    <form role="form" class="subscribe-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter email to subscribe">
                                    <span class="input-group-btn">
                                        <a class="btn  btn-theme btn-lg" href="#">Ok</a>
                                        <!--<button class="btn  btn-theme btn-lg">Ok</button>-->
                                    </span>
                        </div>
                    </form>
                </div><!--footer-col-->
            </div>
        </div>
    </div>
</footer><!--footer-->

<div class="footer-btm">
    <ul class="footer-nav list-inline text-center">
        <li><a href="#">Terms of use</a></li>
        <li><a href="#">Privacy and policy</a></li>
        <li><a href="#">Developers</a></li>
        <li><a href="#">Sign In</a></li>
    </ul>
    <div class="copyright text-center">

        Copyright &copy; 2015 Blueberry Foundation
    </div>
</div><!--footer-btm-->
<!--back to top-->
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--back to top end-->