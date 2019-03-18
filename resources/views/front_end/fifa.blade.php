@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">FIFA 19</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section" style="background-image: url(../images/Fifa.png); background-size: 100%;">
      <div class="container bg-light" style="opacity:0.88">
        <div class="row justify-content-center mb-5 pb-5" >
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">FIFA 19</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
            <h5>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </h5>
          </div>
        </div>
      </div>
    <!-- </section>

    <section class="ftco-section contact-section ftco-degree-bg"> -->
      <div class="container bg-light" style="opacity:0.88">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3"><br>Registration Form</h2>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row block-9">
          <div class="col-md-9 pr-md-5">
            <form method="POST" action="{{ route('store_fifa_front') }}">
                      {{ csrf_field() }}
                      
                      <div class="form-group" >
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required="required">
                      </div>

                      
                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="contact" class="form-control" placeholder="Contact No." required="required">
                      </div>

                      <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="E-mail" required="required">
                      </div>

                      
                      <div class="form-group">
                        <label>Preferred device for playing</label>
                          <select name="device" class="form-control" required="required">
                              <option value="Keyboard">Keyboard</option>
                              <option value="Controller">Controller</option>
                          </select>
                      </div>
                      

                      <div class="form-group">
                        <label>T-Shirt Size</label>
                        
                          <select name="tshirt" class="form-control" required="required">
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label>Registration Fees</label>
                          <select name="total" class="form-control" required="required">
                              <option value="150">150</option>
                          </select>
                      </div>

              <div class="form-group">
                <button type="reset" class="btn btn-primary py-3 px-5">Reset</button>
                <button type="submit" class="btn btn-primary py-3 px-5">Register</button>
              </div>
              <div class="form-group">
                
              </div>
            </form>
            
          </div>

        </div>
      </div>
    </section>
@endsection