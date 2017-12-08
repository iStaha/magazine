
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
          <div class="logo"> <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="Site Logo"/></a> </div>
        </div        
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="header_add"> <a href="#"><img src="{{asset('images/header-add.jpg')}}" alt="Site add"/></a> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ~~~=| Logo Area END |=~~~ --> 
  
  <!-- ~~~=| Main Navigation START |=~~~ -->
  <div class="mainnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <nav class="main_nav_box">
            <ul id="nav">
              <li class="nav_news"><a href="default.htm">News</a>
                <div class="mega_menu">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <div class="single_mega">
                          <ul>
                            <li><a href="default.htm">Basket Ball</a></li>
                            <li><a href="default.htm">Hockey</a></li>
                            <li><a href="default.htm">Cricket</a></li>
                            <li class="active"><a href="default.htm">Football</a></li>
                            <li><a href="default.htm">Boxing</a></li>
                            <li><a href="default.htm">Bat Mitton</a></li>
                            <li><a href="default.htm">Others</a></li>
                          </ul>
                        </div>
                        <div class="single_mega single_mega2">
                          <div class="single_fs_news_left_text">
                            <div class="fs_news_left_img"> <img alt="" src="{{asset('images/megapic00.jpg')}}">
                              <div class="br_cam br_vid_big_s"> <a href="default.htm" class="fa fa-camera"></a> </div>
                            </div>
                            <h4><a class="mega_title" href="default.htm">beautiful day in this neighborhood a beauty day for a neighbor</a></h4>
                            <p> <i class="fa fa-clock-o"></i> 3 min ago <i class="fa fa-comment"></i> 19 </p>
                          </div>
                        </div>
                        <div class="single_mega single_mega3">
                          <div class="all_news_right">
                            <div class="fs_news_right">
                              <div class="single_fs_news_img"> <img alt="Single News" src="images/megapic01.jpg"> </div>
                              <div class="single_fs_news_right_text">
                                <h4><a class="mega_title1" href="default.htm">Can you tell me how to get how to get to Sesame Street.</a></h4>
                                <p> <i class="fa fa-clock-o"></i> 1 hour ago </p>
                              </div>
                            </div>
                            <div class="fs_news_right">
                              <div class="single_fs_news_img"> <img alt="Single News" src="images/megapic2.jpg"> </div>
                              <div class="single_fs_news_right_text">
                                <h4><a class="mega_title1" href="default.htm">young loner on a crusade to cham pion the cause of the innocent</a></h4>
                                <p> <i class="fa fa-clock-o"></i> 1 hour ago </p>
                              </div>
                            </div>
                            <div class="fs_news_right last_right">
                              <div class="single_fs_news_img"> <img alt="Single News" src="images/megapic03.jpg"> </div>
                              <div class="single_fs_news_right_text">
                                <h4><a class="mega_title1" href="default.htm">Just two good ol' boys Never meanin' no harm</a></h4>
                                <p> <i class="fa fa-clock-o"></i> 1 hour ago </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav_lifeguide"><a href="default.htm">Pages </a>
                <div class="sub_menu sub_menu_p single_mega">
                  <ul>
                    <li><a href="index.html"><span>Home One</span></a></li>
                    <li><a href="index-two.html"><span>Home Two</span></a></li>
                    <li><a href="contact.html">Blog Detail Pages</a>
                      <ul class="lev2sub lev2subp">
                        <li><a href="blog-single-audio-post.html">Blog with Aduio page</a></li>
                        <li><a href="blog-single-link-post.html">Blog with Link page</a></li>
                        <li><a href="blog-single-post.html">Blog with Post page</a></li>
                        <li><a href="blog-single-quote-post.html">Blog with Quote page</a></li>
                        <li><a href="blog-single-slider-post.html">Blog with Slider page</a></li>
                        <li><a href="blog-single-twitter-post.html">Blog with Twitter page</a></li>
                        <li class="last-child"><a href="blog-single-video-post.html">Blog with Video page</a></li>
                      </ul>
                    </li>
                    <li><a href="about.html">About page</a></li>
                    <li><a href="contact.html">Contact Page</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav_fashion"><a href="default.htm">Fashion</a></li>
              <li class="nav_gadgets"><a href="default.htm">Gadgets</a></li>
              <li class="nav_lifestyle"><a href="default.htm">Lifestyle</a></li>
              <li class="nav_video"><a href="default.htm">Video</a></li>
              <li class="nav_features"><a href="default.htm">features</a></li>
            </ul>
          </nav>
          
          <!-- ~~~=| Mobile Navigation END |=~~~ -->
          <div class="only-for-mobile">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <ul class="ofm">
                <li class="m_nav"><i class="fa fa-bars"></i> Hash</li>
              </ul>
              
              <!-- MOBILE MENU -->
              <div class="mobi-menu">
                <div id='cssmenu'>
                  <ul>
                    <li class='has-sub'> <a href='index.html'><span>Home</span></a>
                      <ul class="sub-nav">
                        <li><a href="index.html"><span>Home One</span></a></li>
                        <li><a href="index-two.html"><span>Home Two</span></a></li>
                      </ul>
                    </li>
                    <li class='has-sub'> <a href='#'><span>News</span></a>
                      <ul class="sub-nav">
                        <li><a href="#"><span>Hockey</span></a></li>
                        <li><a href="#"><span>Cricket</span></a></li>
                        <li><a href="#"><span>Football</span></a></li>
                        <li><a href="#"><span>Boxing</span></a></li>
                        <li><a href="#"><span>Bat Mitton</span></a></li>
                        <li><a href="#"><span>Others</span></a></li>
                      </ul>
                    </li>
                    <li> <a href='#'><span>Fashion</span></a> </li>
                    <li class='has-sub'> <a href='#'><span>Lifeguide</span></a>
                      <ul>
                        <li class='has-sub'> <a href='#'><span>features</span></a>
                          <ul class="has-sub">
                            <li><a href="#"><span>Business</span></a></li>
                            <li><a href="#"><span>Technology</span></a></li>
                            <li><a href="#"><span>Politics</span></a></li>
                            <li><a href="#"><span>Sport</span></a></li>
                            <li><a href="#"><span>Science</span></a></li>
                            <li><a href="#"><span>Health</span></a></li>
                            <li><a href="#"><span>Fashion Shirts</span></a></li>
                            <li class="last"><a href="#"><span>CASUAL SHIRTS</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li> <a href='#'><span>CHILDREN</span></a> </li>
                    <li class='has-sub'> <a href='#'><span>Pages</span></a>
                      <ul class="sub-nav">
                        <li><a href="about.html"><i class="fa fa-angle-right"></i>About page</a></li>
                        <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact Page</a></li>
                        <li><a href="blog-single-audio-post.html"><i class="fa fa-angle-right"></i>Blog with Aduio page</a></li>
                        <li><a href="blog-single-link-post.html"><i class="fa fa-angle-right"></i>Blog with Link page</a></li>
                        <li><a href="blog-single-post.html"><i class="fa fa-angle-right"></i>Blog with Post page</a></li>
                        <li><a href="blog-single-quote-post.html"><i class="fa fa-angle-right"></i>Blog with Quote page</a></li>
                        <li><a href="blog-single-slider-post.html"><i class="fa fa-angle-right"></i>Blog with Slider page</a></li>
                        <li><a href="blog-single-twitter-post.html"><i class="fa fa-angle-right"></i>Blog with Twitter page</a></li>
                        <li><a href="blog-single-video-post.html"><i class="fa fa-angle-right"></i>Blog with Video page</a></li>
                      </ul>
                    </li>
                    <li> <a href='#'><span>Gadgets</span></a> </li>
                    <li> <a href='#'><span>Lifestyle</span></a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ~~~=| Mobile Navigation START |=~~~ --> 
          
        </div>
      </div>
    </div>
  </div>
  <!-- ~~~=| Main Navigation END |=~~~ --> 
  
</header>
<!-- ~~~=| Header END |=~~~ --> 
<section class="main_news_wrapper cc_single_post_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <!-- ~~~=| Fashion area START |=~~~ -->
                    <div class="cc_single_post">
                        <div class="bsp_img">
                            <img src="{{asset('images/'.$post->mainImg)}}" alt="blog single post" />
                        </div>
                        <div class="sp_details">
                            <a href="default.htm">Sports</a>
                            <h2>{{ $post->title }}</h2>
                            <div class="post_meta">
                                <ul>
                                    <li><a href="default.htm"><i class="fa fa-user"></i>By luck Walker</a></li>
                                    <li><a href="default.htm"><i class="fa fa-eye"></i>500</a></li>
                                    <li><a href="default.htm"><i class="fa fa-comment-o"></i>45</a></li>
                                </ul>
                            </div>
                            <div class="post_text">
                                <p>{{ $post->body }} </p>
                                <div class="post_inner">
                                    <p>News is one of the excellent magazine in the world.News  magazine reached many readers very soon by his unique stories in the magazine."But I must to explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete are the master-builder of  the
                                    human happiness. </p>
                                </div>
                                <p>{{ $post->body }}</p>
                            </div>
                            <div class="social_tags">
                                <div class="social_tags_left">
                                    <p>Tags :</p>
                                    <ul>
                                        <li><a href="default.htm">Photography</a></li>
                                        <li><a href="default.htm">Content</a></li>
                                        <li><a href="default.htm">News</a></li>
                                    </ul>
                                </div>
                                <div class="social_tags_right">
                                    <ul>
                                        <li class="facebook"><a class="fa fa-facebook" href="default.htm"></a></li>
                                        <li class="twitter"><a class="fa fa-twitter" href="default.htm"></a></li>
                                        <li class="google-plus"><a class="fa fa-google-plus" href="default.htm"></a></li>
                                        <li class="linkedin"><a class="fa fa-linkedin" href="default.htm"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sp-next-prev">
                                <div class="sp-prev">
                                    <a href="default.htm"><i class="fa fa-angle-double-left"></i>Previous post</a>
                                </div>
                                <div class="sp-next">
                                    <a href="default.htm">Previous post<i class="fa fa-angle-double-right"></i></a>
                                    <div class="sp-next-post">
                                        <a href="default.htm">What Do I Need To Make It In <br>Business?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-comments-box">
                                <h2>Comments</h2>
                                <div class="single_comment">
                                    <div class="single_comment_pic">
                                        <img src="images/comment-pic1.png" alt="" />
                                    </div>
                                    <div class="single_comment_text">
                                        <div class="sp_title">
                                            <a href="default.htm"><h4>Chris Hemsworth</h4></a>
                                            <p>10 Min ago</p>
                                        </div>
                                        <p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
                                        <a href="default.htm"><i class="fa fa-reply"></i>Reply</a>
                                    </div>
                                </div>
                                <div class="single_comment single_comment_middle">
                                    <div class="single_comment_pic">
                                        <img src="images/comment-pic2.png" alt="" />
                                    </div>
                                    <div class="single_comment_text">
                                        <div class="sp_title">
                                            <a href="default.htm"><h4>Chris Hemsworth</h4></a>
                                            <p>10 Min ago</p>
                                        </div>
                                        <p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
                                        <a href="default.htm"><i class="fa fa-reply"></i>Reply</a>
                                    </div>
                                </div>
                                <div class="single_comment single_comment_last">
                                    <div class="single_comment_pic">
                                        <img src="images/comment-pic3.png" alt="" />
                                    </div>
                                    <div class="single_comment_text">
                                        <div class="sp_title">
                                            <a href="default.htm"><h4>Chris Hemsworth</h4></a>
                                            <p>10 Min ago</p>
                                        </div>
                                        <p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
                                        <a href="default.htm"><i class="fa fa-reply"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h2>leave your comments</h2>
                                <div class="comments_form"> {{$post->id}}

                                 {{ Form::open(['route' => ['comments.store' , $post->id  ]] ) }} 
                                        <div class="inp_name">
                                            <input id="name" type="text" name="name" placeholder="Your Name" />
                                            <input type="text" name="email" placeholder="Your Email"/>
                                            <input type="hidden" name="need" value="{{$post->id}}">
                                        </div>
                                        <textarea cols="30" name="message" rows="10" placeholder="Message"></textarea>
                                        <input type="submit" value="Send Message"/>
                                {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ~~~=| Fashion area END |=~~~ -->
                </div>
        
            </div>
        </div>
    </section>

     <hr>
    {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    @can('Edit Post')
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" role="button">Edit</a>
    @endcan
    @can('Delete Post')
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}
<!-- <div class="container">
    
    <h1>{{ $post->title }}</h1>
    <hr>
    <img src="{{asset('avatars/'.$post->img)}}">
    <p class="lead">{{ $post->body }} </p>
    <hr>
    {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    @can('Edit Post')
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" role="button">Edit</a>
    @endcan
    @can('Delete Post')
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div> -->

@endsection