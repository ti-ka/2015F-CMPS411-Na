<section id="navigation">
    <div class="navbar navbar-default navbar-static-top " role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Nasa<span style="color:#25CBF5">Blueberry</span></a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right scrollto">

                    @foreach ($tabs as $tab => $link)

                        <li><a href="@( $link )">@( $tab )</a></li>

                    @endforeach

                </ul>

            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div><!--navbar-default-->
</section><!--navigation section end here-->
