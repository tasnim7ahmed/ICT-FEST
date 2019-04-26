@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Schedule & Transportation</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section" style="background-image: url(../images/Background.png); background-size: 100%;">
        <h1 align = 'center' ><strong> Schedule </strong></h1><br>
      <div class="container" align="center">
      <img src={{asset('images/Schedule-day1.jpg')}} width="75%" height="75%">
      
     </div>
    <div class="container" align="center">
      <img src={{asset('images/Schedule-day2.jpg')}} width="75%" height="75%">
    </div>
    <!--</section>-->
    
    <h1 align = 'center' > Transportation - Day 1 (12<sup>th</sup> April,2019)</h1>
      <div class="container" align="center">
      <img src={{asset('images/Transport-day1-r1.jpg')}} width="75%" height="75%">
      
     </div>
    <div class="container" align="center">
      <img src={{asset('images/Transport-day1-r2.jpg')}} width="75%" height="75%">
    </div>
    
    <h1 align = 'center' > Transportation - Day 2 (13<sup>th</sup> April,2019)</h1>
      <div class="container" align="center">
      <img src={{asset('images/Transport-day2-r1.jpg')}} width="75%" height="75%">
      
     </div>
    <div class="container" align="center">
      <img src={{asset('images/Transport-day2-r2.jpg')}} width="75%" height="75%">
    </div>
    </section>

    

@endsection