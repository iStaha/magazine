<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

     <link rel="stylesheet" href="{{ asset('css/style.css') }}" > 

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="https://use.fontawesome.com/9712be8772.js"></script>
</head>
<body>
    <div id="app">
       

        @if(Session::has('flash_message'))
            <div class="container">      
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
        @endif 
        <div class="row">
            <div class="col-md-8 col-md-offset-2">              
                @include ('errors.list') {{-- Including error file --}}
            </div>
        </div>

        @yield('content')

    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstap.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/ie-opacity-polyfill.js') }}"></script>

    <footer class="footer_area">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="footer_top_box">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer_top_left"> <img src="images/footer_logo.png" alt="Footer Logo">
                  <p>Aenean luctus risus ac laoreet efficitur. Maecenas sibulum sapien ac turpis volutpat, ac laoreet tortor cursuris feugiat massa et metus molestie.aenean luctususaoreet efficitur. Maecenas vestibulum.</p>
                  <div class="ft_contact">
                    <h4>Contact</h4>
                    <address>
                    <p> <i class="fa fa-map-marker"></i>Washington Square Park, New York, NY, United States</p>
                    <a href="tel_3A+100012354657"><i class="fa fa-phone"></i>Telephone : +1 000 123 54657</a><br>
                    <a href="mail-to_3AInfo_40News.com"><i class="fa fa-phone"></i> E-mail : Info@News.com</a>
                    </address>
                  </div>
                  <div class="ft_connected">
                    <h4>Stay connected</h4>
                    <p>Follow us on social media and be up to date with the latest happenings.</p>
                    <ul>
                      <li><a class="fa fa-facebook" href="default.htm"></a></li>
                      <li><a class="fa fa-twitter" href="default.htm"></a></li>
                      <li><a class="fa fa-google-plus" href="default.htm"></a></li>
                      <li><a class="fa fa-linkedin" href="default.htm"></a></li>
                      <li><a class="fa fa-tumblr" href="default.htm"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer_top_middle">
                  <div class="ftm_realted_post">
                    <h4>Popular post</h4>
                    <div class="single_related_post">
                      <div class="srp_img"> <a href="blog-single-slider-post.html"> <img src="images/s_rl_pic1.jpg" alt=""> </a> </div>
                      <div class="rel_post_text"> <span>Jun 24,2015</span>
                        <p>We can design for your desire.We are here...</p>
                      </div>
                    </div>
                    <div class="single_related_post">
                      <div class="srp_img"> <a href="blog-single-slider-post.html"> <img src="images/s_rl_pic2.jpg" alt=""> </a> </div>
                      <div class="rel_post_text"> <span>Jun 24,2015</span>
                        <p>We can design for your desire.We are here...</p>
                      </div>
                    </div>
                    <div class="single_related_post">
                      <div class="srp_img"> <a href="blog-single-slider-post.html"> <img src="images/s_rl_pic3.jpg" alt=""> </a> </div>
                      <div class="rel_post_text"> <span>Jun 24,2015</span>
                        <p>We can design for your desire.We are here...</p>
                      </div>
                    </div>
                  </div>
                  <div class="ftm_newsletter">
                    <h4>Newsletter</h4>
                    <p>Sign up to hear and get our daily new update via email.</p>
                    <form>
                      <input type="text" value="Email address">
                      <input type="submit" class="fm_newsletter">
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer_top_right">
                  <div class="ftr_video">
                    <h4>video of the day</h4>
                    <div class="results_video embed-responsive embed-responsive-16by9">
                      <video src="../../../../www.youtube.com/watch@v=ScMzIvxBSi4" controls="controls" width="560" height="350">                                  
                    </video></div>
                  </div>
                  <div class="ftr_tags">
                    <h4>Tags</h4>
                    <ul id="tag">
                      <li><a href="default.htm">Android</a></li>
                      <li><a href="default.htm">Apple</a></li>
                      <li><a href="default.htm">Games</a></li>
                      <li><a href="default.htm">Apps and Software</a></li>
                      <li><a href="default.htm">Dev and Design</a></li>
                      <li><a href="default.htm">Gallery</a></li>
                      <li><a href="default.htm">Life and Style</a></li>
                      <li><a href="default.htm">Technology</a></li>
                      <li><a href="default.htm">Sports</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="footer_bottom_box">
            <p> © COPY RIGHTS 2015 All Rights Reserved. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
