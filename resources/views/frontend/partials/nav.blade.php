<section id="top-navigation">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index')}}"><img src="/images/logo.png" alt="DyGen Automotive Digital Advertising with Paid Search, SEO, YouTube Video, and Social Marketing
" border="0" height="30px" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('search') }}">Search</a></li>
                    <li><a href="{{ route('pre-roll') }}">Pre-Roll</a></li>
                    <li><a href="{{ route('seo') }}">SEO</a></li>
                    <li><a href="{{ route('creative') }}">Creative</a></li>
                    <li><a href="{{ route('social') }}">Social Media</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('home') }}">Blog</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://dashboard.dygen.com">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</section>
