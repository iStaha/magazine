@extends('layouts.master')
@section('content')
  


<!-- ~~~=| Header START |=~~~ -->
<header class="header_area">
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="header_top_left">
            <div class="news_twiks">
              <h4>Breaking</h4>
            </div>
            <div class="news_twiks_items">
              <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel"> 
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <p>Take Interior Design to a New Level</p>
                  </div>
                  <div class="item">
                    <p>Take Interior Design to a New Level two</p>
                  </div>
                  <div class="item">
                    <p>Take Interior Design to a New Level three</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="header_top_right">
            <div class="social_header">
              <ul>
                <li><a class="fa fa-facebook" href="default.htm"></a></li>
                <li><a class="fa fa-twitter" href="default.htm"></a></li>
                <li><a class="fa fa-google-plus" href="default.htm"></a></li>
                <li><a class="fa fa-linkedin" href="default.htm"></a></li>
                <li><a class="fa fa-behance" href="default.htm"></a></li>
              </ul>
            </div>
            <div class="header_search_box">
              <form class="header_search hidden-xs" action="index.html">
                <input type="text" placeholder="Search">
                <input type="submit" value="">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ~~~=| Logo Area START |=~~~ -->
  <div class="header_logo_area">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="Site Logo"/></a> </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="header_add"> <a href="#"><img src="images/header-add.jpg" alt="Site add"/></a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ~~~=| Logo Area END |=~~~ --> 
  
  <!-- ~~~=| Banner START |=~~~ -->
<section class="hp_banner_area section_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="hp_banner_box">
          <div class="hp_banner_left">
              @if ($posts)
   
            @foreach ($posts as $post)

            <div class="bl_single_news"> <img src="{{asset('images/'.$post->img)}}" alt="" />
              <div class="bl_single_text"> <a href="{{ route('posts.show', $post->id ) }}">
                <h4>{{ $post->title }}</h4>
                </a> <span><i class="fa fa-clock-o"></i> 3 mins ago</span> </div>
            </div>

             @endforeach
       
      
          @endif 
            
          </div>
          <div class="hp_banner_right">
            @if ($posts)
   
            @foreach ($posts1 as $post)
            
            
            <div class="br_single_news"> <img src="{{asset('images/'.$post->img)}}" alt="" />
              <div class="br_single_text"> <span class="green_hp_span">Environment</span> <a href="{{ route('posts.show', $post->id ) }}">
                <h4>{{ $post->title }}</h4>
                </a> </div>
              <div class="br_cam"> <a href="default.htm" class="fa fa-camera"></a> </div>
            </div>
              @endforeach
       
      
          @endif 
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ~~~=| Banner END |=~~~ --> 

<!-- ~~~=| Main Wrapper END |=~~~ -->
<section class="main_news_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-12"> 
        <!-- ~~~=| Fashion area START |=~~~ -->
        <div class="fashion_area">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="header_fasion">
                <div class="left_fashion main_nav_box">
                  <ul>
                    <li class="nav_fashion"><a href="default.htm">Fashion</a></li>
                  </ul>
                </div>
                <div class="fasion_right">
                  <ul>
                    <li><a href="default.htm">Style</a></li>
                    <li><a href="default.htm">smart living</a></li>
                    <li><a href="default.htm">fashion week</a></li>
                    <li class="last_item"><a href="default.htm">...</a></li>
                  </ul>
                </div>
              </div>
              <div class="fashion_area_box">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">

               
         

                    <div class="fs_news_left">
                      <div class="single_fs_news_left_text">
                        <div class="fs_news_left_img"> 
                         @if ($posts2) 
                        
                         <img src="{{asset('images/'.$posts2->img)}}" alt="" /> 
                          <div class="br_cam br_vid_big_s"> <a class="fa fa-camera" href="default.htm"></a> </div>
                        </div>
                        <h4><a href="{{ route('posts.show', $post->id ) }}">
                         {{ $posts2->title }}  </a></h4>
                        <p> <i class="fa fa-clock-o"></i> 3 min ago <i class="fa fa-comment"></i> 19 </p>
                       
                        @endif
                      </div>
                    </div>


          
          
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="all_news_right">
                       @if ($posts3)
   
            @foreach ($posts3 as $post)
                      <div class="fs_news_right">
                        <div class="single_fs_news_img"> <img src="{{asset('images/'.$post->img)}}" alt="Single News" /> </div>
                        <div class="single_fs_news_right_text">
                          <h4><a href="{{ route('posts.show', $post->id ) }}">{{ $post->title }}</a></h4>
                          <p> <a href="default.htm">Fashion </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                        </div>
                      </div>
                     @endforeach
       
      
          @endif 
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="header_fasion gadgets_heading">
                <div class="left_fashion main_nav_box">
                  <ul>
                    <li class="nav_gadgets"><a href="default.htm">GADGETS</a></li>
                  </ul>
                </div>
                <div class="fasion_right"> <a href="default.htm">
                <img src="images/hor_dot.png" alt="" /></a> </div>
              </div>
              <div class="gadgets_area_box">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="fs_news_left fs_gadgets_news_left">

                      <div class="fs_news_left_img_g"> 
                          @if ($posts4)
                      <img src="{{asset('images/'.$posts4->img)}}" alt="" />
                          @endif
                        <div class="br_cam br_vid_big"> <a class="fa fa-caret-right" href="default.htm"></a> </div>
                      </div>
                      <div class="single_fs_news_left_text">
                       @if ($posts4)
                        <h4><a href="{{ route('posts.show', $posts4->id ) }}">
                         {{ $posts4->title }}   </a></h4> @endif 
                        <p> <i class="fa fa-clock-o"></i> 3 min ago <i class="fa fa-comment"></i> 19 </p>
                      </div>
                      <div class="all_news_right">
                       @if ($posts5)
                       @foreach ($posts5 as $post)
                        <div class="fs_news_right">
                          <div class="single_fs_news_img"> <img src="{{asset('images/'.$post->img)}}" alt="Single News" /> </div>
                          <div class="single_fs_news_right_text">
                            <h4><a href="{{ route('posts.show', $post->id ) }}">{{ $post->title }} </a></h4>
                            <p> <a class="gad_color" href="default.htm">Gadget </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                          </div>
                        </div>
                         @endforeach

                        @endif
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="fs_news_left fs_gadgets_news_left">
                      <div class="fs_news_left_img_g"> 
                       @if ($posts6)    
                       @foreach ($posts6 as $post)
                       <img src="{{asset('images/'.$post->img)}}" alt="" /> 
                        @endforeach 
                       @endif</div>
                      <div class="single_fs_news_left_text">
                        @if ($posts6)
                        @foreach ($posts6 as $post)
                        <h4><a href="{{ route('posts.show', $post->id ) }}">{{ $post->title }}</a></h4>
                           @endforeach 
                        @endif
                        <p> <i class="fa fa-clock-o"></i> 3 min ago <i class="fa fa-comment"></i> 19 </p>
                      </div>
                      <div class="all_news_right">
                        @if ($posts7)
                       @foreach ($posts7 as $post)
                        <div class="fs_news_right">
                          <div class="single_fs_news_img"> 
                          <img src="{{asset('images/'.$post->img)}}" alt="Single News" /> </div>
                          <div class="single_fs_news_right_text">
                            <h4><a href="{{ route('posts.show', $post->id ) }}">{{ $post->title }}</a></h4>
                            <p> <a class="gad_color" href="default.htm">Gadget </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                          </div>
                        </div>
                          @endforeach

                        @endif
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="header_fasion gadgets_heading lifestyle_post_area">
                <div class="left_fashion main_nav_box">
                  <ul>
                    <li class="nav_lifestyle"><a href="default.htm">LIFESTYLE</a></li>
                  </ul>
                </div>
                <div class="fasion_right"> <a href="default.htm"><img src="images/hor_dot.png" alt="" /></a> </div>
              </div>
              <div class="fashion_area_box">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  
                    <div class="fs_news_left">
                      <div class="single_fs_news_left_text">
                        <div class="fs_news_left_img"> 
                          @if ($posts8)
                          <img src="{{asset('images/'.$posts8->img)}}" alt="life" />
                          @endif
                          <div class="br_cam"> <a class="fa fa-camera" href="default.htm"></a> </div>
                        </div>
                   @if ($posts8)      
                   <h4><a href="{ route('posts.show', $posts8->id ) }}">{{ $posts8->title}}</a></h4>  @endif
                        <p> <i class="fa fa-clock-o"></i> 3 min ago <i class="fa fa-comment"></i> 19 </p>
                      </div>
                   
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="all_news_right">
                      @if ($posts9) 
                        @foreach ($posts9 as $post)
                      <div class="fs_news_right">
                        <div class="single_fs_news_img"> <img src="{{asset('images/'.$post->img)}}" alt="Single News" />
                          <div class="br_cam"> <a class="fa fa-camera" href="default.htm"></a> </div>
                        </div>
                        <div class="single_fs_news_right_text">
                          <h4><a href="{{ route('posts.show', $post->id ) }}">{{ $post->title}}</a></h4>
                          <p> <a href="default.htm">Fashion </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                        </div>
                      </div>
                        @endforeach 
                      @endif 
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="home_add_box"> <img src="images/ht-add.jpg" alt="add" /> </div>
              <div class="header_fasion gadgets_heading">
                <div class="left_fashion main_nav_box">
                  <ul>
                    <li class="nav_video_post"><a href="default.htm">Video</a></li>
                  </ul>
                </div>
                <div class="fasion_right"> <a href="default.htm"><img src="images/hor_dot.png" alt="" /></a> </div>
              </div>
              <div class="fashion_area_box video_area_box">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="all_news_right">
                     @if ($posts11) 
                        @foreach ($posts11 as $post)
                      <div class="fs_news_right">
                        <div class="single_fs_news_img"> <img src="{{asset('images/'.$post->img)}}" alt="Single News" />
                          <div class="br_cam"> <a class="fa fa-camera" href="default.htm"></a> </div>
                        </div>
                        <div class="single_fs_news_right_text">
                          <h4><a href="{{ route('posts.show', $post->id ) }}">{{ $post->title}}</a></h4>
                          <p> <a class="video_f" href="default.htm">Fashion </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                        </div>
                      </div>
                       @endforeach
                       @endif 
                       
                     
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="fs_news_left fs_news_vid_right">
                      <div class="single_fs_news_left_text">
                        <div class="fs_news_left_img"> 
                        @if($posts10) 
                        <img src="{{asset('images/'.$posts10->img)}}" alt="video" />
                        @endif
                          <div class="br_cam br_vid_big"> <a class="fa fa-caret-right" href="default.htm"></a> </div>
                        </div>
                         @if($posts10) 
                        <h4><a href="{{ route('posts.show', $posts10->id ) }}">{{ $posts10->title }}</a></h4>
                          @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="news_pagination">
                <ul class="news_pagi">
                  <li><a href="default.htm">1</a></li>
                  <li><a href="default.htm">2</a></li>
                  <li><a href="default.htm">3</a></li>
                  <li class="dotlia"><a href="default.htm">. . .</a></li>
                  <li class="nextlia"><a href="default.htm">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- ~~~=| Fashion area END |=~~~ --> 
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="home_sidebar">
          <div class="purchase_sidebar">
            <div class="purchase_sidebar_img"> <img src="images/sidebar1.jpg" alt="" />
              <div class="purchase_overlay"></div>
              <div class="purchase_sidebar_text">
                <h2>Hash</h2>
                <p>Give your website a re-design it deserves</p>
                <div class="purchase_s"> <a href="default.htm">Purchase</a> </div>
              </div>
            </div>
          </div>
          <div class="follow_us_side">
            <h2>Follow Us</h2>
            <div class="all_single_follow">
              <div class="single_follow_us"> <a href="default.htm"> <i class="fa fa-facebook"></i><br>
                5638<br>
                Fans </a> </div>
              <div class="single_follow_us twit"> <a href="default.htm"> <i class="fa fa-twitter"></i><br>
                5638<br>
                Fans </a> </div>
              <div class="single_follow_us goopl"> <a href="default.htm"> <i class="fa fa-google-plus"></i><br>
                5638<br>
                Fans </a> </div>
              <div class="single_follow_us last_one"> <a href="default.htm"> <i class="fa fa-dribbble"></i><br>
                5638<br>
                Fans </a> </div>
            </div>
          </div>
          <div class="follow_us_side">
            <h2>Latest Post</h2>
            <div class="all_news_right">
              @if ($posts12) 
               @foreach ($posts12 as $post)
              <div class="fs_news_right">
                <div class="single_fs_news_img"> <img alt="Single News" src="{{asset('images/'.$post->img)}}"> </div>
                <div class="single_fs_news_right_text">
                  <h4><a href="{{ route('posts.show', $post->id ) }}">{{ $post->title }}</a></h4>
                  <p> <a href="default.htm">Fashion | </a> <i class="fa fa-clock-o"></i> 1 hour ago </p>
                </div>
              </div>         
               @endforeach 
               @endif 
              
            </div>
          </div>
          <div class="follow_us_side">
            <h2>Image Gallery</h2>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="br_single_news"> <img alt="" src="images/side_slider.jpg">
                    <div class="br_cam"> <a class="fa fa-camera" href="default.htm"></a> </div>
                  </div>
                </div>
                <div class="item">
                  <div class="br_single_news"> <img alt="" src="images/side_slider.jpg">
                    <div class="br_cam"> <a class="fa fa-camera" href="default.htm"></a> </div>
                  </div>
                </div>
                <div class="item">
                  <div class="br_single_news"> <img alt="" src="images/side_slider.jpg">
                    <div class="br_cam"> <a class="fa fa-camera" href="default.htm"></a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ~~~=| Main Wrapper END |=~~~ --> 
@endsection
          
