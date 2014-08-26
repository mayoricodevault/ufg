@extends('master/container')
<meta name="description" content="{{ $page->meta_description }}">
<meta name="keywords" content="{{ $page->meta_keywords }}">
<meta name="author" content="{{ $page->meta_author }}">
<meta property="og:title" content="{{ ucfirst($page->meta_description) }} - {{ siteSettings('siteName') }}"/>
@stop
@section('content')
<div id="content">
    <!--======= Details Features Tabs =========-->
    <section id="det_fea" class="fea_colour">
      <div class="features_bg">
        <div class="container">
          <ul class="row features">
            <li class="col-md-4 bg_color_1 nopadding">
              <div class="icon wow bounceInUp" data-wow-duration="0.90s" data-wow-delay="200ms"> <i class="ion-clipboard bg_color_1"></i> </div>
              <h4>Document File</h4>
              <p>Contrary to popular belief, Lorem Ipsu is not simply drandom text.</p>
            </li>
            <li class="col-md-4 bg_color_2 nopadding">
              <div class="icon wow bounceInUp"  data-wow-duration="0.90s" data-wow-delay="400ms"> <i class="ion-ios7-clock-outline bg_color_2"></i> </div>
              <h4>Perfect Lesson Time</h4>
              <p>Contrary to popular belief, Lorem Ipsu is not simply drandom text.</p>
            </li>
            <li class="col-md-4 bg_color_3 nopadding">
              <div class="icon wow bounceInUp" data-wow-duration="0.90s" data-wow-delay="600ms"> <i class="ion-ios7-videocam bg_color_3"></i> </div>
              <h4>Test Lessons Video</h4>
              <p>Contrary to popular belief, Lorem Ipsu is not simply drandom text.</p>
            </li>
          </ul>
        </div>
      </div>
      
      <!--======= ICONS =========-->
      <div class="learngo bg_color_2">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h4 class="border">Learn<span>Go</span> Settings Features</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content.</p>
              
              <!--======= ICONS =========-->
              <div class="features_services">
                <ul class="row">
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceIn"  data-wow-delay="200ms" data-wow-iteration="2"> <i class="ion-help-buoy bg_color_3"></i> </div>
                    <h4>7 / 24 Fast Ticket</h4>
                    <p>Nullam et ante pretium, sagittis eros quis, tempus eros. </p>
                  </li>
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceInbounceIn"  data-wow-delay="400ms" data-wow-iteration="2"> <i class="ion-ios7-people bg_color_3"></i> </div>
                    <h4>Perfect Teachers</h4>
                    <p>Nullam et ante pretium, sagittis eros quis, tempus eros. </p>
                  </li>
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceIn" data-wow-delay="600ms" data-wow-iteration="2"> <i class="ion-hammer bg_color_3"></i> </div>
                    <h4>Easy Settings</h4>
                    <p>Nullam et ante pretium, sagittis eros quis, tempus eros. </p>
                  </li>
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceIn" data-wow-delay="800ms" data-wow-iteration="2s"> <i class="ion-filing bg_color_3"></i> </div>
                    <h4>Free Lesson Store</h4>
                    <p>Nullam et ante pretium, sagittis eros quis, tempus eros. </p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4"> 
              
              <!--======= REGISTER OR LOGIN SECTION =========-->
              <div class="account">
                <h4 class="border">Learn<span>Go</span> Settings Features</h4>
                <p>Learn from your House login or register</p>
                <div class="features_services">
                  <nav>
                    <ul class="nav nav-pills">
                      <li class="active wow fadeInUp" data-wow-delay="200ms"><a href="#register" class="btn" data-toggle="tab">Register</a></li>
                      <li> <span>OR</span></li>
                      <li class="wow fadeInUp" data-wow-delay="400ms"><a href="#login" class="btn btn_orange" data-toggle="tab">LOGIN</a></li>
                    </ul>
                  </nav>
                  <!-- Tab panes -->
                  <div class="tab-content"> 
                    
                    <!--======= REGISTER =========-->
                    <div class="tab-pane fade in active" id="register">
                      <div class="form">
                        <form role="form">
                          <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Name">
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email address">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control"  placeholder="**********">
                          </div>
                          <div class="form-group">
                            <select class="form-control">
                              <option>Select a learning option</option>
                            </select>
                          </div>
                          <button type="submit" class="btn">REGISTER</button>
                        </form>
                      </div>
                    </div>
                    
                    <!--======= LOGIN =========-->
                    <div class="tab-pane fade" id="login">
                      <div class="form">
                        <form role="form">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email address">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control"  placeholder="**********">
                          </div>
                          <button type="submit" class="btn">LOGIN</button>
                        </form>
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
    
    <!--======= Perfect Analitic Lessons =========-->
    <section id="lesson" class="bg_color_3">
      <div class="container">
        <h2 class="wow tada" data-wow-delay="200ms">Perfect <span>Analitic Lessons</span></h2>
        <p class="wow tada" data-wow-delay="400ms">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dua has been...</p>
        <div id="owl-learn" class="owl-carousel owl-theme"> 
          
          <!--======= Slide 1 =========-->
          <div class="row item">
            <div class="col-md-6"> <img class="img-responsive" src="images/browser_img.png" alt=""> </div>
            <div class="col-md-6 text_sec">
              <div class="icon"> <i class="ion-android-data"></i> </div>
              <h3>Perfect Lessons System</h3>
              <div class="clearfix"></div>
              <p class="padding20_top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconva has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconvallis. </p>
              <a href="#." class="btn">Check out our library </a> </div>
          </div>
          
          <!--======= SLIDE 2 =========-->
          <div class="row item">
            <div class="col-md-6"> <img class="img-responsive" src="images/browser_img.png" alt=""> </div>
            <div class="col-md-6 text_sec">
              <div class="icon"> <i class="ion-android-data"></i> </div>
              <h3>Perfect Lessons System</h3>
              <div class="clearfix"></div>
              <p class="padding20_top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconva has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconvallis. </p>
              <a href="#." class="btn">Check out our library </a> </div>
          </div>
          
          <!--======= SLIDE 2 =========-->
          <div class="row item">
            <div class="col-md-6"> <img class="img-responsive" src="images/browser_img.png" alt=""> </div>
            <div class="col-md-6 text_sec">
              <div class="icon"> <i class="ion-android-data"></i> </div>
              <h3>Perfect Lessons System</h3>
              <div class="clearfix"></div>
              <p class="padding20_top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconva has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconvallis. </p>
              <a href="#." class="btn">Check out our library </a> </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--======= Achievements Section =========-->
    <section id="achievements" class="bg_color_2">
      <div class="container">
        <div class="row">
          <div class="col-md-6"> <img class="img-responsive" src="images/hand_iphone.png" alt=""> </div>
          <div class="col-md-2">
            <ul class="icon_sec wow flipInX" data-wow-delay="400ms">
              <li class="icon"> <i class="ion-ios7-filing"></i> </li>
              <li class="icon"> <i class="ion-android-stopwatch"></i> </li>
              <li class="icon"> <i class="ion-card"></i> </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3><span>Learn</span> Achievements</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eros ligula, pulvinar ut porta ac, pharetra a mi. Mauris sed elit nec lectus venenatis condimentum nec vitae tellus. Morbi lacinia sollicitudin scelerisque.</p>
            <br>
            <p> Fusce dignissim ac nisi a laoreet.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. </p>
            <br>
            <p> Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. pulvinar ut porta ac, pharetra a mi. Mauris sed elit nec lectus venenatis condimentum nec vitae tellus. Morbi lacinia sollicitudin scelerisque. </p>
            <a href="#." class="btn bg_color_3">DOWNLOAD NOW!</a> <a href="#." class="btn btn-border">LEARN MORE</a>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
    
    <!--======= Video Section =========-->
    <section id="vedio">
      <div class="container">
        <h2 class="wow tada" data-wow-delay="200ms">Test Learn Videos Play!</h2>
        <hr>
        <p class="align-center wow tada" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eros ligula, pulvinar ut porta ac, pharetra a mi. Mauris sed elit nec lectus venenatis condimentum nec vitae tellus. </p>
        <!--<img class="img-responsive" src="images/vedio_img.png" alt="">-->
        <div class="vedio_bg">
          <iframe src="http://player.vimeo.com/video/25541923?color=c9161f"></iframe>
        </div>
      </div>
    </section>
    
    <!--======= Classes Section popup=========-->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
      <div class="pop_up">
        <h3>Design Classes</h3>
        <p>Select your Classes - Test Videos - Desing Lesson Video</p>
        <ul>
          <li><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
          <li class="dark"><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
          <li><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
          <li><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
          <li><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
        </ul>
        <div class="photo"> <img src="images/photo.png" alt="" >
          <h4>Kristina JUMPS</h4>
          <p>Math Teacher</p>
        </div>
        <div class="rating">
          <div class="star"><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i>
            <p>12314 Happy Student</p>
          </div>
        </div>
        <div class="details"> <i class="ion-folder"></i>
          <p>Description of the Courseras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis insectetur ac, vestibulum at eros.</p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    
    <!--======= Vedio Section Popup=========-->
    <div id="small-vedio" class="zoom-anim-dialog mfp-hide">
      <div class="pop_up">
        <h3>Design Classes</h3>
        <p>Select your Classes - Test Videos - Desing Lesson Video</p>
        <iframe src="http://player.vimeo.com/video/25541923?color=c9161f"></iframe>
        <div class="padding10_all"></div>
        <div class="photo"> <img src="images/photo.png" alt="" >
          <h4>Kristina JUMPS</h4>
          <p>Math Teacher</p>
        </div>
        <div class="rating">
          <div class="star"><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i>
            <p>12314 Happy Student</p>
          </div>
        </div>
        <div class="details"> <i class="ion-folder"></i>
          <p>Description of the Courseras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis insectetur ac, vestibulum at eros.</p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    
    <!--PORTFOLIO SECTION===========================================-->
    <section id="portfolio">
      <h2 class="wow tada" data-wow-delay="200ms">Select your Classes</h2>
      <hr>
      <div class="container">
        <p class="padding-5per align-center wow tada" data-wow-delay="400ms">You'll earn badges as you journey through our extensive library of courses. These badges are an indicator of what skills you currently possess and are viewable by anyone online. </p>
        <div class="portfolio-wrapper wow bounceIn" data-wow-delay="500ms">
          <nav>
          <ul class="filter">
            <li><a class="active" href="#" data-filter="*">View All</a></li>
            <li><a href="#" data-filter=".math">Mathematics</a></li>
            <li><a href="#" data-filter=".design">Design</a></li>
            <li><a href="#" data-filter=".lan">Languague</a></li>
            <li><a href="#" data-filter=".draw">Drawing</a></li>
          </ul>
          </nav>
          <div class="lesson_detail">
            <ul class="items posts">
              
              <!--COURSES SECTION===========================================-->
              <li class="item design lan draw"><span class="img"> <img src="images/img_1.jpg" alt=""></span>
                <div class="over"> <a href="#small-vedio" class="link popup-vedio"><i class="ion-arrow-right-b"></i></a> <a href="#small-dialog" class="zoom popup-with-move-anim"><i class="ion-folder"></i></a> <a href="#small-dialog" class="zoom zoom_1 popup-with-move-anim" > <i class="ion-document-text"></i></a> </div>
                <div class="detail">
                  <div class="row">
                    <div class="col-md-3"> <span class="time"> <i class="ion-ios7-clock-outline"></i> </span>
                      <p> 1:30</p>
                    </div>
                    <div class="col-md-9 nopadding">
                      <h5>Mathematics Courses</h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                    </div>
                  </div>
                </div>
              </li>
              
              <!--COURSES SECTION===========================================-->
              <li class="item math lan draw"> <span class="img"> <img src="images/img_2.jpg" alt=""></span>
                <div class="over"> <a href="#small-vedio" class="link popup-vedio"><i class="ion-arrow-right-b"></i></a> <a href="#small-dialog" class="zoom popup-with-move-anim"><i class="ion-folder"></i></a> <a href="#small-dialog" class="zoom zoom_1 popup-with-move-anim" > <i class="ion-document-text"></i></a> </div>
                <div class="detail">
                  <div class="row">
                    <div class="col-md-3"> <span class="time"> <i class="ion-ios7-clock-outline"></i> </span>
                      <p> 1:30</p>
                    </div>
                    <div class="col-md-9 nopadding">
                      <h5>Computer Courses</h5>
                      <p>Passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                  </div>
                </div>
              </li>
              
              <!--COURSES SECTION===========================================-->
              <li class="item math design draw"> <span class="img"> <img src="images/img_3.jpg" alt=""></span>
                <div class="over"> <a href="#small-vedio" class="link popup-vedio"><i class="ion-arrow-right-b"></i></a> <a href="#small-dialog" class="zoom popup-with-move-anim"><i class="ion-folder"></i></a> <a href="#small-dialog" class="zoom zoom_1 popup-with-move-anim" > <i class="ion-document-text"></i></a> </div>
                <div class="detail">
                  <div class="row">
                    <div class="col-md-3"> <span class="time"> <i class="ion-ios7-clock-outline"></i> </span>
                      <p> 1:30</p>
                    </div>
                    <div class="col-md-9 nopadding">
                      <h5>Physics Courses</h5>
                      <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.</p>
                    </div>
                  </div>
                </div>
              </li>
              
              <!--COURSES SECTION===========================================-->
              <li class="item math design lan"> <span class="img"> <img src="images/img_5.jpg" alt=""></span>
                <div class="over"> <a href="#small-vedio" class="link popup-vedio"><i class="ion-arrow-right-b"></i></a> <a href="#small-dialog" class="zoom popup-with-move-anim"><i class="ion-folder"></i></a> <a href="#small-dialog" class="zoom zoom_1 popup-with-move-anim" > <i class="ion-document-text"></i></a> </div>
                <div class="detail">
                  <div class="row">
                    <div class="col-md-3"> <span class="time"> <i class="ion-ios7-clock-outline"></i> </span>
                      <p> 1:30</p>
                    </div>
                    <div class="col-md-9 nopadding">
                      <h5>Human Resources Courses</h5>
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                  </div>
                </div>
              </li>
              
              <!--COURSES SECTION===========================================-->
              <li class="item math design lan"><span class="img"> <img src="images/img_6.jpg" alt=""></span>
                <div class="over"> <a href="#small-vedio" class="link popup-vedio"><i class="ion-arrow-right-b"></i></a> <a href="#small-dialog" class="zoom popup-with-move-anim"><i class="ion-folder"></i></a> <a href="#small-dialog" class="zoom zoom_1 popup-with-move-anim" > <i class="ion-document-text"></i></a> </div>
                <div class="detail">
                  <div class="row">
                    <div class="col-md-3"> <span class="time"> <i class="ion-ios7-clock-outline"></i> </span>
                      <p> 1:30</p>
                    </div>
                    <div class="col-md-9 nopadding">
                      <h5>Design Courses</h5>
                      <p>electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing lorem Ipsum.</p>
                    </div>
                  </div>
                </div>
              </li>
              
              <!--COURSES SECTION===========================================-->
              <li class="item math design lan"><span class="img"> <img src="images/img_4.jpg" alt=""></span>
                <div class="over"> <a href="#small-vedio" class="link popup-vedio"><i class="ion-arrow-right-b"></i></a> <a href="#small-dialog" class="zoom popup-with-move-anim"><i class="ion-folder"></i></a> <a href="#small-dialog" class="zoom zoom_1 popup-with-move-anim" > <i class="ion-document-text"></i></a> </div>
                <div class="detail">
                  <div class="row">
                    <div class="col-md-3"> <span class="time"> <i class="ion-ios7-clock-outline"></i> </span>
                      <p> 1:30</p>
                    </div>
                    <div class="col-md-9 nopadding">
                      <h5>French Courses</h5>
                      <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Clients Section ===========================================-->
    <div id="clients">
      <div class="container">
        <div id="owl-clients" class="owl-carousel owl-theme">
          <div class="item"><a href="#."><img src="images/c_img_1.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="images/c_img_2.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="images/c_img_3.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="images/c_img_4.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="images/c_img_1.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="images/c_img_2.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="images/c_img_3.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
    
    <!--Pricing Table===========================================-->
    <section id="price_table">
      <h2 class="wow tada" data-wow-delay="200ms">Lesson Pricing Tables</h2>
      <hr>
      <div class="container">
        <p class="padding-5per align-center wow tada" data-wow-delay="400ms">You'll earn badges as you journey through our extensive library of courses. These badges are an indicator of what skills you currently possess and are viewable by anyone online. </p>
        <ul>
          <li> 
            <!--Price Plan===========================================--> 
            <span class="price"> <span>&nbsp;</span> </span> 
            
            <!--ICONS===========================================--> 
            <span class="icons"> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="100ms"> <i class="ion-folder"></i></span> 
            
            <!--ICONS===========================================--> 
            <span  class="wow bounceIn" data-wow-delay="150ms"> <i class="ion-document-text"></i></span> 
            
            <!--ICONS===========================================--> 
            <span  class="wow bounceIn" data-wow-delay="200ms"> <i class="ion-android-clock"></i></span> 
            
            <!--ICONS===========================================--> 
            <span  class="wow bounceIn" data-wow-delay="250ms"> <i class="ion-android-alarm"></i></span> 
            
            <!--ICONS===========================================--> 
            <span  class="wow bounceIn" data-wow-delay="300ms"><i class="ion-chatbubbles"></i></span> 
            
            <!--ICONS===========================================--> 
            <span  class="wow bounceIn" data-wow-delay="350ms"> <i class="ion-iphone"></i></span> </span> <a class="plus" href="#.">&nbsp;</a> </li>
          <li> 
            <!--Price Plan===========================================--> 
            <span class="price bg_color_4"> <span>FREE</span> <span class="p_month"> <span> 0</span> <span>$</span> <span>monthly</span> </span> </span> 
            
            <!--ICONS===========================================--> 
            <span class="icons"> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="100ms"> <i class="ion-checkmark"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="150ms"> <i class="ion-checkmark"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="200ms"> <i class="ion-checkmark"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="250ms"> <i class="ion-close"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="300ms"> <i class="ion-close"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="350ms"> <i class="ion-close"></i></span> </span> 
            
            <!--Button Plus===========================================--> 
            <a class="plus bg_color_4" href="#."><i class="ion-plus-round"></i></a> </li>
          
          <!-- Second Plan===========================================-->
          <li> <span class="price bg_color_3"> <span>GOLD</span> <span class="p_month"> <span> 29</span> <span>$</span> <span>monthly</span> </span> </span> 
            
            <!--ICONS===========================================--> 
            <span class="icons"> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="100ms"> <i class="ion-checkmark"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="150ms"> <i class="ion-checkmark"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="200ms"> <i class="ion-checkmark"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="250ms"> <i class="ion-close"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="300ms"> <i class="ion-close"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="350ms"> <i class="ion-close"></i></span> </span> 
            
            <!--Button Plus===========================================--> 
            <a class="plus bg_color_3" href="#."><i class="ion-plus-round"></i></a> </li>
          <li> <span class="price bg_color_5"> <span>PLATIN</span> <span class="p_month"> <span> 59</span> <span>$</span> <span>monthly</span> </span> </span> 
            
            <!--ICONS===========================================--> 
            <span class="icons"> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="100ms"> <i class="ion-checkmark"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="150ms"> <i class="ion-checkmark"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="200ms"> <i class="ion-checkmark"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="250ms"> <i class="ion-close"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="300ms"> <i class="ion-close"></i></span> 
            
            <!--ICONS===========================================--> 
            <span class="wow bounceIn" data-wow-delay="350ms"> <i class="ion-close"></i></span> </span> 
            
            <!--Button Plus===========================================--> 
            <a class="plus bg_color_5" href="#."> <i class="ion-plus-round"></i></a> </li>
        </ul>
      </div>
    </section>
    <section id="teachers">
      <h2 class="wow tada" data-wow-delay="200ms">Lesson Professional Teachers</h2>
      <hr>
      <div class="container">
        <p class="padding-5per align-center wow tada" data-wow-delay="400ms">You'll earn badges as you journey through our extensive library of courses. These badges are an indicator of what skills you currently possess and are viewable by anyone online.</p>
        <div id="owl-teacher">
          <div class="item">
            <div class="testi">
              <div class="avatar"><img src="images/testi-img-1.png" alt=""></div>
              <h4>John DOES</h4>
              <hr>
              <p class="padding10_bottom">Computer Teacher</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              <ul class="social_icons">
                <li  class="facebook"><a href="#."><i class="ion-social-facebook"></i></a></li>
                <li class="twitter"><a href="#."><i class="ion-social-twitter"></i></a></li>
                <li class="dribbble"><a href="#."><i class="ion-social-dribbble"></i></a></li>
                <li class="googleplus"><a href="#."><i class="ion-social-googleplus"></i></a></li>
                <li class="linkedin"><a href="#."><i class="ion-social-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="item red">
            <div class="testi">
              <div class="avatar"><img src="images/testi-img-2.png" alt=""></div>
              <h4>John DOES</h4>
              <hr>
              <p class="padding10_bottom">Computer Teacher</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              <div class="rating">
                <div class="icon"><i class="ion-android-contact"></i></div>
                <div class="star"><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i>
                  <p>12314 Happy Student</p>
                </div>
              </div>
              <ul class="social_icons">
                <li  class="facebook"><a href="#."><i class="ion-social-facebook"></i></a></li>
                <li class="twitter"><a href="#."><i class="ion-social-twitter"></i></a></li>
                <li class="dribbble"><a href="#."><i class="ion-social-dribbble"></i></a></li>
                <li class="googleplus"><a href="#."><i class="ion-social-googleplus"></i></a></li>
                <li class="linkedin"><a href="#."><i class="ion-social-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="item">
            <div class="testi">
              <div class="avatar"><img src="images/testi-img-3.png" alt=""></div>
              <h4>John DOES</h4>
              <hr>
              <p class="padding10_bottom">Computer Teacher</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              <ul class="social_icons">
                <li  class="facebook"><a href="#."><i class="ion-social-facebook"></i></a></li>
                <li class="twitter"><a href="#."><i class="ion-social-twitter"></i></a></li>
                <li class="dribbble"><a href="#."><i class="ion-social-dribbble"></i></a></li>
                <li class="googleplus"><a href="#."><i class="ion-social-googleplus"></i></a></li>
                <li class="linkedin"><a href="#."><i class="ion-social-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="item red">
            <div class="testi">
              <div class="avatar"><img src="images/testi-img.png" alt=""></div>
              <h4>John DOES</h4>
              <hr>
              <p class="padding10_bottom">Computer Teacher</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              <div class="rating">
                <div class="icon"><i class="ion-android-contact"></i></div>
                <div class="star"><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i>
                  <p>12314 Happy Student</p>
                </div>
              </div>
              <ul class="social_icons">
                <li  class="facebook"><a href="#."><i class="ion-social-facebook"></i></a></li>
                <li class="twitter"><a href="#."><i class="ion-social-twitter"></i></a></li>
                <li class="dribbble"><a href="#."><i class="ion-social-dribbble"></i></a></li>
                <li class="googleplus"><a href="#."><i class="ion-social-googleplus"></i></a></li>
                <li class="linkedin"><a href="#."><i class="ion-social-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonial" class="bg_color_4">
      <h2 class="wow tada" data-wow-delay="200ms">Your Feedback</h2>
      <hr>
      <div class="container">
        <p class="padding-5per align-center wow tada" data-wow-delay="400ms">You'll earn badges as you journey through our extensive library of courses. These badges are an indicator of what skills you currently possess and are viewable by anyone online.</p>
        <div id="owl-feed">
          <div class="feedback">
            <div class="avatar"> <img src="images/testi-img-3.png" alt=""> </div>
            <h3>There are many variations of passages of lorem ipsum the lorem gorem merem.</h3>
            <h5>John DOE - Gamerging Studio</h5>
          </div>
          <div class="feedback">
            <div class="avatar"> <img src="images/testi-img-2.png" alt=""> </div>
            <h3>There are many variations of passages of lorem ipsum the lorem gorem merem.</h3>
            <h5>John DOE - Gamerging Studio</h5>
          </div>
          <div class="feedback">
            <div class="avatar"> <img src="images/testi-img-4.png" alt=""> </div>
            <h3>There are many variations of passages of lorem ipsum the lorem gorem merem.</h3>
            <h5>John DOE - Gamerging Studio</h5>
          </div>
          <div class="feedback">
            <div class="avatar"> <img src="images/testi-img-1.png" alt=""> </div>
            <h3>There are many variations of passages of lorem ipsum the lorem gorem merem.</h3>
            <h5>John DOE - Gamerging Studio</h5>
          </div>
        </div>
      </div>
    </section>
    <div id="phone_number">
      <div class="container">
        <div class="number wow rollIn" data-wow-delay="200ms"> <i class="ion-iphone"></i> <span> 123-45676-789</span></div>
        <div class="address">
          <p>Call from Monday to Friday from <strong>12:00</strong>to <strong>14:00</strong> and from <strong> 14:00 </strong> to <strong>22:00</strong></p>
        </div>
      </div>
    </div>
    <section id="news">
      <div class="container">
        <div class="newsletter wow bounceIn" data-wow-delay="200ms">
          <div class="row">
            <div class="col-md-4">
              <h1>Your <span>Newsletter</span></h1>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="" value="E-mail address ..">
                <input name="submit" type="submit" value="SUBSCRIBE"/>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <p class="padding-5per align-center wow tada" data-wow-delay="400ms">You'll earn badges as you journey through our extensive library of courses. These badges are an indicator of what skills you currently possess and are viewable by anyone online.</p>
      </div>
    </section>
    @include('master/footer')
  </div>
@stop
