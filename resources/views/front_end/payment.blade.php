@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">PAYMENT</h1>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img src={{asset('images/pay.png')}} width="100%" height="100%">
    </div>
    
    <section class="ftco-section" style="background-image: url(../images/Background.png); background-size: 100%;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text heading-section ftco-animate">
            <!-- <span class="subheading">Payment</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2> -->
            <h4 style="color: red" align="center"><strong>Do not proceed to payment section until you/your team has been selected. Please, visit Selected Participants' list first. </strong></h4>

    <div>
      <img src={{asset('images/prize.jpg')}} width="100%" height="100%">
    </div>


<!-- <ul>
<li style="color:black">First you have to fill up the online form in the website.</li>
<li style="color:black">Then you have to complete the payment.<br></li>
<br>
<h4 align="text-center"><strong>Registration Fee</strong></h4>

<li ><h5 style="color: red">University Level: 410 Taka (Four Hundred Taka)</h4></li>
<li ><h5 style="color: red">School/College Level: 310 Taka (Three Hundred Taka)</h4></li>
<br>
</li>
</ul>
<h4 align="text-center"><strong>Participation Rules</strong></h4>
<ul>
<li style="color:black">You must complete the registration to participate.</li>
<li style="color:black">You have to participate individually.</li>
<li style="color:black">There will be two categories.
<ul>
<li style="color:black">University Level (Undergraduate students)</li>
<li style="color:black">School/College Level (College students + School students from Class 8 to Class 10)</li>
</ul>
</li>
<li style="color: red">You must bring your School/College/University ID Card at the day of the olympiad for verification purpose.</li>
</ul>
<br>
<h4 align="center"><strong>Olympiad Rules</strong></h4>
<ul>
<li style="color:black">There will be a total of 50 MCQ questions.</li>
<li style="color:black">You will be given 50 minutes to answer the questions.</li>
<li style="color:black">The total marks will be 50.</li>
<li style="color:black">You have to fill the circle for the appropriate answer on the given answer sheet.</li>
<li style="color:black">It is recommended to use black ball point pen for marking the answers</li>

</ul>
<p>&nbsp;</p>
<h5>The probable fields of questions are:</h5>
<br>
<ul>
<h4 align="text-center">University Level</h4>
<ul>
<li style="color:black">Computer Fundamentals</li>
<li style="color:black">Programming language basics</li>
<li style="color:black">Operating System</li>
<li style="color:black">Boolean Logic</li>
<li style="color:black">Data Structures</li>
<li style="color:black">Database Management</li>
<li style="color:black">Common Algorithms</li>
<li style="color:black">Basic Networking</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<h4 align="text-center">School/College Level</h4>
<ul>
<li style="color:black">Computer Fundamentals</li>
<li style="color:black">Programming language basics</li>
<li style="color:black">Operating System</li>
<li style="color:black">Boolean Logic</li>
<li style="color:black">Database Management</li>
</ul>
</li>
</ul>


<p><h4 style="color:red">
                <strong>*** If you are facing any problem in our registration process, then please knock us at our <a href="https://www.facebook.com/events/2210175945978123/">Facebook</a> page.</strong>
              </h4>

              <h4 style="color:red">
                <strong>*** Based on your performances in the competition, our sponsors might contact you in the future.</strong>
              </h4></p>

<p><h5 style="color: black">For further query contact, Shahriar Ivan: +8801720968532</h5></p>
<p>&nbsp;</p> -->
          </div>
        </div>
      </div>
    <!-- </section>

    <section class="ftco-section contact-section ftco-degree-bg"> -->
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Payment Confirmation Form</h2>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row block-9">
          <div class="col-md-9 pr-md-5">
            <form method="POST" action="{{route('store_payment')}}">
                      {{ csrf_field() }}
                      
                      <div class="form-group">
                          <input type="text" name="key" class="form-control" placeholder="Secret Key" required="required">
                      </div>
                      <div class="form-group">
                          <input type="text" name="trxid" class="form-control" placeholder="bKash Transaction ID" required="required">
                      </div>

                      

              <div class="form-group">
                <button type="reset" class="btn btn-primary py-3 px-5">Reset</button>
                <button type="submit" class="btn btn-primary py-3 px-5">Submit</button>
              </div>
              <div class="form-group">
                
              </div>
            </form>


          
          </div>

        </div>
      </div>
    </section>

    

@endsection