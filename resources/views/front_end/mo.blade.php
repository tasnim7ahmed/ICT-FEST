@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">MATH OLYMPIAD</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">Math Olympiad</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Registration Form</h2>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row block-9">
          <div class="col-md-9 pr-md-5">
            <form method="POST" action="{{ route('store_mo_front') }}">
                      {{ csrf_field() }}
                      
                      <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required="required">
                      </div>

                      <div class="form-group">
                        <label>Category</label>
                          <select name="category" class="form-control" required="required">
                              <option value="School">School</option>
                              <option value="College">College</option>
                              <option value="University">University</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="contact" class="form-control" placeholder="Contact No." required="required">
                      </div>

                      <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="E-mail">
                      </div>

                      <div class="form-group">
                          <input type="text" name="institution" class="form-control" placeholder="Institution Name" required="required">
                      </div>

                      <div class="form-group">
                        <label>Registration Fees</label>
                          <select name="total" class="form-control" required="required">
                              <option value="150">150</option>
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
                <button type="reset" class="btn btn-primary py-3 px-5">Reset</button>
                <button type="submit" class="btn btn-primary py-3 px-5">Register</button>
              </div>
              <div class="form-group">
                
              </div>
            </form>





<!--             <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
              </div>
            </form> -->
          
          </div>

        </div>
      </div>
    </section>
@endsection