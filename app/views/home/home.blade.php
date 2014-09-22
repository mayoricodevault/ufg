@extends('master/container')
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords }}">
<meta name="author" content="{{ $meta_author }}">
<meta property="og:title" content="{{ ucfirst($meta_description) }} - {{ $sitename }}"/>
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
              <h4>Mission statement</h4>
              <p>To educate and guide both current and upcoming generations to a successful and prosperous financial future.</p>
            </li>
            <li class="col-md-4 bg_color_2 nopadding">
              <div class="icon wow bounceInUp"  data-wow-duration="0.90s" data-wow-delay="400ms"> <i class="ion-ios7-clock-outline bg_color_2"></i> </div>
              <h4>Vision statement</h4>
              <p>Within five years, the current generation will gain knowledge and understanding on how to save and plan for a better future. The upcoming generations will learn how to save and manage money through the implementation of UFG in the school system. This will better the economy by substantially reducing debt that is generated by the current “American way” of living.</p>
            </li>
            <li class="col-md-4 bg_color_3 nopadding">
              <div class="icon wow bounceInUp" data-wow-duration="0.90s" data-wow-delay="600ms"> <i class="ion-ios7-videocam bg_color_3"></i> </div>
              <h4>PROCESS PLAN</h4>
              <p>Tree Simple Steps</p>
              <p>Educate - Guidance - Planning</p>
            </li>
          </ul>
        </div>
      </div>
      
      <!--======= ICONS =========-->
      <div class="learngo bg_color_2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="border">Learn<span>Go</span> Settings Features</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content.</p>
              
              <!--======= ICONS =========-->
              <div class="features_services">
                <ul class="row">
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceIn"  data-wow-delay="200ms" data-wow-iteration="2"> <i class="ion-help-buoy bg_color_3"></i> </div>
                    <h4>What is UFG</h4>
                    <p>An organization of young adults who have set out to educate and guide the youth to a successful, prosperous financial future. UFG works with a purpose to help the current youth and upcoming generations. </p>
                  </li>
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceInbounceIn"  data-wow-delay="400ms" data-wow-iteration="2"> <i class="ion-ios7-people bg_color_3"></i> </div>
                    <h4>Who is UFG</h4>
                    <p>UFG was started by a young man in San Bernardino who witnessed a lot of his college peers wasting the money that they received from FAFSA and/or their parents. He noticed that they were spending this loaned money on Vegas trips, parties, clothes, and other things that were irrelevant to their future. Those poor financial habits continued as they advanced in their lives and careers. Now UFG is built and managed by young adults who know what it’s like in today’s world, being influenced by so many social and political factors. UFG members are college students, high school students, young parents, young men and women who have held mediocre jobs while they dreamt of long term careers. UFG is youth teaching youth, working together to rise up against the new slavery: Debt. </p>
                  </li>
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceIn" data-wow-delay="600ms" data-wow-iteration="2"> <i class="ion-hammer bg_color_3"></i> </div>
                    <h4>Why UFG</h4>
                    <p>UFG aims to fill in the missing piece of the educational framework that currently molds our youth. Where math class teaches you how to count money, UFG teaches how to use it as a tool in life. Where economics teaches you how money flows through society, UFG teaches you how manage your own cash flow without getting in debt. Where school teaches you how you can make money for the rest of your life, UFG teaches how to work with the money you make to build a successful future and be a positive influence to those around you.</p>
                  </li>
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceIn" data-wow-delay="800ms" data-wow-iteration="2s"> <i class="ion-filing bg_color_3"></i> </div>
                    <h4>How does UFG work</h4>
                    <p>UFG is prevention, not intervention. Our goal is to avoid debt and build a lasting future; to develop good financial habits before bad ones are instilled and harder to break. UFG works by raising young people to be prepared men and women of a successful financial future. UFG hosts seminars, providing this education, in high schools and in colleges.</p>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    <!--======= Perfect Analitic Lessons =========-->
    <section id="lesson" class="bg_color_3">
      <div class="container">
        <h2 class="wow tada" data-wow-delay="200ms">Process <span>Plan</span></h2>
        <p class="wow tada" data-wow-delay="400ms"> Educate your self - Get Guidance - Implement Plan </p>
        <div id="owl-learn" class="owl-carousel owl-theme"> 
          
          <!--======= Slide 1 =========-->
          <div class="row item">
            <div class="col-md-6"> <img class="img-responsive" src="theme/images/browser_img.png" alt=""> </div>
            <div class="col-md-6 text_sec">
              <div class="icon"> <i class="ion-android-data"></i> </div>
              <h3>Perfect Lessons System</h3>
              <div class="clearfix"></div>
              <p class="padding20_top">Young adults in high school who are planning to attend college will be shown how to maintain any income or earnings received during their college career. (Financial aid, grants, etc.) </p>
          </div>
          
          <!--======= SLIDE 2 =========-->
          <div class="row item">
            <div class="col-md-6"> <img class="img-responsive" src="theme/images/browser_img.png" alt=""> </div>
            <div class="col-md-6 text_sec">
              <div class="icon"> <i class="ion-android-data"></i> </div>
              <h3>Perfect Lessons System</h3>
              <div class="clearfix"></div>
              <p class="padding20_top">Students from K-8 will also receive guidance through the lessons in children’s books, activities, and games, teaching the lost value of saving and planning for the future</p>
          </div>
          
          <!--======= SLIDE 2 =========-->
          <div class="row item">
            <div class="col-md-6"> <img class="img-responsive" src="theme/images/browser_img.png" alt=""> </div>
            <div class="col-md-6 text_sec">
              <div class="icon"> <i class="ion-android-data"></i> </div>
              <h3>Perfect Lessons System</h3>
              <div class="clearfix"></div>
              <p class="padding20_top">In the process of teaching the young children, parents can also be educated on how they can plan for a better future not only for themselves but their children as well.</p>
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
    @include('master/footer')
  </div>
@stop
