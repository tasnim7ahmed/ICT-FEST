@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">EVENTS</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section">
      <div class="container" align="center">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-9 text-center heading-section ftco-animate">
            <span>Our Events</span>
            <h3 align="center" class="mb-4">With a plethora of events to offer, ICT Fest ensures that every tech enthusiast has something they can enjoy.<br>Scroll on to discover more!</h3>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            <a href="{{route('mo')}}">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-line-chart"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Math Olympiad</h3>
                <p>Is crunching large numerical datasets your forte? Or maybe, solving unsolvable equations is your jam? Either way, our Math Olympiad is the perfect opportunity to get your analytical juices flowing. Register now!</p>
              </div>
            </a>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            <a href="{{route('io')}}">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-keyboard"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">ICT Olympiad</h3>
                <p>Think you know the ins and outs of the latest technological advances out there? Prove yourself in our cleverly designed ICT Olympiad and win it big!</p>
              </div>
            </a>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href = "{{route('pc')}}">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-code"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Programming Contest</h3>
                <p>Speed or accuracy? Hasty start or steady finish? If you have what it takes to make the right decisions in the right scenarios, register now with your team to show that your analytical prowess is above and beyond your peers!</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href = "{{route('ps-go')}}">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-puzzle-piece"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Project Showcasing</h3>
                <p>Brimming with ideas but lack the proper podium to present your ideas and articulate your thoughts? We have just the place where you can showcase your project and turn heads in the process! Register now and prove your worth!</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href = "{{route('business')}}">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-briefcase"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">IT Business Case Competition</h3>
                <p>Have a ground-breaking idea that can potentially improve the lives of millions? Is so, this is your opportunity to showcase your talents and ideas in the right platform, in front of the right people. Register now and unleash your inner genie!</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href = "{{route('fifa')}}">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-soccer-ball-o"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">FIFA 19</h3>
                <p>Do you have a knack for scoring exceptional goals against the toughest defenses? Register now!</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href = "{{route('siege')}}">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-gamepad"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Rainbow Six Siege</h3>
                <p>Do you think your precision aim and quick thinking can successfully defuse bombs in hostile situations? Register now to find out!</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href = "{{route('dota')}}">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-fire"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">DOTA 2</h3>
                <p>Your phenomenal carry or support gameplay can lead your team to a glorious victory. In any case, our gaming fest gives you the opportunity to accomplish all this and more! Register now!
</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href = "{{route('poster')}}">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-pencil-square"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Poster Presentation</h3>
                <p>To all the technology enthusiasts out there, it’s your time to shine! Grab all of your creative ideas and thoughts about our today’s technology, and present them with stunning posters. Share your creativity with us and win amazing cash prizes!</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href = "{{route('appdev')}}">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-desktop"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Application Development</h3>
                <p>If you have what it takes to transform abstract ideas into truly innovational breakthroughs, then our “App Development” event is made for you. Register now and show everyone that your development skills are second to none!</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href = "{{route('hackathon')}}">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-cloud-download"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Hackathon</h3>
                <p>Brainstorm your way through seemingly impossible difficulties and hurdles and show the world that every problem has a solution when there’s creativity and the will to achieve success. Registration for hackathon is now live!</p>
              </div>
            </div>    
          </div>

        
        <div class="row mt-5">
          
          
          <div class="col-md-4 ftco-animate">
                        <ul class="list-services">
              <li><h3></h3></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
@endsection