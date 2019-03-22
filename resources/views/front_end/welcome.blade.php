@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Welcome to the largest <strong>ICT FEST</strong> of the country</h1>
            <!-- <p ><a href={{route('events')}} class="btn btn-primary btn-outline-white px-5 py-3">Events</a></p> -->
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
      <div class="container-fluid" data-scrollax-parent="true">
        <div class="row no-gutters d-flex align-items-center" >

          <div class="col-md-3 mb-4">
            <a href="#" class="featured-img">
              <!-- <div class="text-1 p-4 d-flex align-items-center">
                <h3>The Verge<br><span class="tag">Website</span></h3>
              </div> -->
              <img src="../images/01 First Top.jpg" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  <div class="user-img mr-3"></div>
                  <h3>THE FIVE PILLARS <!-- <br><span class="position">Designer</span> --></h3>
                </div>
              </div>
            </a>
          </div>
          
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-end">

                  <div class="col-md-6">
                    <a href="#" class="featured-img">
                      <!-- <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Racks<br><span class="tag">Website</span></h3>
                      </div> -->
                      <img src="../images/02 Middle up.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3"></div>
                          <h3>THE ENTRANCE</h3>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-6">
                    <a href="#" class="featured-img">
                      <!-- <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Zendesk<br><span class="tag">Website</span></h3>
                      </div> -->
                      <img src="../images/03 Right Top.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" ></div>
                          <h3>MOSQUE &amp; THE FIELD</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-start">
                  <div class="col-md-6">
                    <a href="#" class="featured-img">
                      <!-- <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Curator<br><span class="tag">Website</span></h3>
                      </div> -->
                      <img src="../images/04 Left Down.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" ></div>
                          <h3>PARTICIPANTS AND GUESTS </h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="#" class="featured-img">
                      <!-- <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Tasty<br><span class="tag">Website</span></h3>
                      </div> -->
                      <img src="../images/05 Middle Down.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3"></div>
                          <h3>9TH ICT FEST ORGANIZERS</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <a href="#" class="featured-img">
              <!-- <div class="text-1 p-4 d-flex align-items-center">
                <h3>Voyage<br><span class="tag">Website</span></h3>
              </div> -->
              <img src="../images/06 Right Down.jpg" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  <div class="user-img mr-3"></div>
                  <h3>ICT FEST SNEAK PEAKS</h3>
                </div>
              </div>
            </a>
          </div>

        </div>
        <div class="row mt-5 d-flex justify-content-center">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <!-- <h2 class="h1">UI/UX, visual, <strong class="px-3">Web designer</strong> with more than 12 years of experience in designing websites and mobile apps.</h2> -->

            <h2 class="h1">“Simplicity, carried to the extreme, becomes elegance.” — Jon Franklin</h2>
            <!-- <p><a href="#" class="btn btn-primary mt-3 py-3 px-5">Get in touch</a></p> -->
          </div>
        </div>
      </div>
    </section>
    </div>
    
  
    <!-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">Our Services</span>
            <h2 class="mb-4">Web &amp; Mobile app design, bring your ideas to life</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-lightbulb-o"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Strategy</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-laptop"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Design</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gear"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Development</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-live_help"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Help &amp; Supports</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>-->

    <div>
      <img src={{asset('images/Banner.png')}} width="100%" height="100%">
    </div>

    <!-- <section class="ftco-section-parallax" >
      <div class="parallax-img d-flex align-items-center" style="background-image: url(../images/banner.png); background-size: 100%; ">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                  <form action="#" class="subscribe-form">
                    <div class="form-group">
                      <span class="icon icon-paper-plane"></span>
                      <input type="text" class="form-control" placeholder="Enter email address">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section> -->

    <!--<section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Works</span>
            <h2 class="mb-4">View our works below to see our design and way of development.</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="../snipp/portfolio.html" class="image" style="background-image: url('../snipp/images/work-1.jpg'); " data-scrollax=" properties: { translateY: '-20%'}">
            </a>
            <div class="text">
              <h4 class="subheading">Illustration</h4>
              <h2 class="heading"><a href="../snipp/portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="../snipp/portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="../snipp/portfolio.html" class="image image-2 order-2" style="background-image: url('../snipp/images/work-2.jpg');" data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text order-1">
              <h4 class="subheading">Application</h4>
              <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="../snipp/portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="../snipp/portfolio.html" class="image" style="background-image: url('../snipp/images/work-3.jpg'); " data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text">
              <h4 class="subheading">Web Design</h4>
              <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="../snipp/portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <span><a href="#" class="btn btn-primary py-3 px-5">View All Projects</a></span>
          </div>
        </div>
      </div>
    </section>
 -->

    <section class="ftco-section testimony-section bg-light" >
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span>Organizers</span>
            <h2 class="mb-4">IUT Computer Society</h2>
           <!--  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> -->
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(../images/Rahat2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    
                    <p class="name" style="color: black">Rahat Anwar Khan</p>
                    <p class="mb-2" style="color: black">President</p>
                    <span class="position" style="color: black">facebook.com/rahat.khan.2848</span><br>
                    <span class="position" style="color: black">+8801521323672</span>
                  </div>
                </div>
              </div>


              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(../images/anqur.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    
                    <p class="name" style="color: black">Anqur Enayet</p>
                    <p class="mb-2" style="color: black">Vice-President</p>
                    <span class="position" style="color: black">facebook.com/anqur.enayet</span><br>
                    <span class="position" style="color: black">+8801834684946</span>
                  </div>
                </div>
              </div>

              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(../images/Reed.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    
                    <p class="name" style="color: black">Fahim Shahriar Reed</p>
                    <p class="mb-2" style="color: black">Treasurer</p>
                    <span class="position" style="color: black">facebook.com/fahim.reed</span><br>
                    <span class="position" style="color: black">+8801930696040</span>
                  </div>
                </div>
              </div>


              
              

              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(../images/tam.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                   
                    <p class="name" style="color: black">Tamzid Karim</p>
                    <p class="mb-2" style="color: black">Vice-President</p>
                    <span class="position" style="color: black">facebook.com/karim.tamzid</span><br>
                    <span class="position" style="color: black">+8801722237176</span>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span>WEB-DEV</span>
            <h2 class="mb-4">Developers Panel</h2>
            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> -->
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(../images/saadman2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                   
                    <p class="name" style="color: black">Saadman Malik Aurko</p>
                    <p class="mb-2" style="color: black">Front-end and Back-end Dev</p>
                    <span class="position" style="color: black">facebook.com/saadman.malik</span><br>
                    <span class="position" style="color: black">+8801912810987</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(../images/aflan.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    
                    <p class="name" style="color: black">Ifaz Ahmed Aflan</p>
                    <p class="mb-2" style="color: black">Graphics Designer</p>
                    <span class="position" style="color: black">facebook.com/aflan.cse</span><br>
                    <span class="position" style="color: black">+8801954790638</span>
                  </div>
                </div>
              </div>

              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(../images/tasnim.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    
                    <p class="name" style="color: black">Tasnim Ahmed</p>
                    <p class="mb-2" style="color: black">Front-end and Back-end Dev</p>
                    <span class="position" style="color: black">facebook.com/tasnim.ahmed.iut</span>
                    <span class="position" style="color: black">+8801733004000</span>
                  </div>
                </div>
              </div>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </section>



    
    <!-- <section class="ftco-section ftco-counter" id="section-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Our achievements</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="400">0</strong>
                <span>Customers are satisfied with our professional support</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000">0</strong>
                <span>Amazing preset options to be mixed and combined</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8000">0</strong>
                <span>Average response time on live chat support channel</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('../snipp/images/image_1.jpg');">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">July 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('../snipp/images/image_2.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-3">
                  <div><a href="#">July 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="../snipp/blog-single.html" class="block-20" style="background-image: url('../snipp/images/image_3.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-3">
                  <div><a href="#">July 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
@endsection