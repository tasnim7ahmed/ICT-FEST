@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">APPLICATION DEVELOPMENT</h1>
          </div>
        </div>
      </div>
    </div>












    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">APPLICATION DEVELOPMENT</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
            <br>
            <br>
            <h4><strong>ONLINE SUBMISSION</strong></h4>
<ul>
<li><strong>Every team has to register and submit their idea online</strong></li>
</ul>
<h4><strong>IDEA SELECTION</strong></h4>
<ul>
<li><strong>From the submitted ideas, a fixed number of ideas will be selected and the selected teams need to pay the registration fee to confirm their participation</strong></li>
</ul>
<h4><strong>APPLICATION SHOWCASING</strong></h4>
<ul>
<li><strong>In this phase selected teams will showcase their developed application or prototype based on the idea on the event days.</strong></li>
</ul>
<h4><strong>RULES</strong></h4>
<ul>
<li><strong>The application must be based on Android or iOS or Windows platform.</strong></li>
<li><strong>The developed app does not need to be 100% complete. Building only a working demo and demonstration of the demo is enough.</strong></li>
<li><strong>Each team cannot submit more than one idea.</strong></li>
<li><strong>Among the submitted ideas, a fixed number of ideas will be selected and declared in the &ldquo;IUT 10th ICT FEST 2019&rdquo; Facebook page and event. The selected teams then need to perform the final registration by sending the registration fee within a given period of time.</strong></li>
<li><strong>If all the selected teams from the main list do not perform the final registration within the specified time, their chance of final registration will be canceled and a second list of selected ideas will be declared in the &ldquo;IUT 10th ICT FEST 2019&rdquo; Facebook page and event. The selected teams in the second list will be given a specified time within which they need to perform final registration by sending the registration fee.</strong></li>
<li><strong>Only registered team members are allowed to showcase their applications. No substitution is permissible.</strong></li>
<li><strong>Each team has to bring their full project on the day of showcasing. Bringing only the apk or exe file will lead to disqualification.</strong></li>
<li><strong>The application can be fully developed or a prototype. In both cases, the developed app must be relevant to the submitted idea and will be able to perform all the features that are described when submitting the ideas.</strong></li>
<li><strong>The team members must be current students of any university.</strong></li>
<li><strong>Each team can have maximum 4 members. The member can be from same/different institution.</strong></li>
<li><strong>Participants are requested to bring their Identity Cards of respective institutions.</strong></li>
<li><strong>Teams must remain present on both days of the fest as per event schedule.</strong></li>
<li><strong>The organizing committee holds the right to disqualify any team. Any type of misbehavior with the judges will result in disqualification.</strong></li>
<li><strong>The organizing committee will not be liable if any team or individual lost his/her laptop, cellular phones, gadgets and other stuffs.</strong></li>
</ul>
<p><strong>&nbsp;</strong></p>
<p><strong>The last date for idea submission is 7TH APRIL 2019.</strong></p>
<p><strong>Selected teams will be notified within 9TH APRIL 2019.</strong></p>
<p><strong>Selected teams must pay the registration fees within 10TH APRIL 2019.</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>&nbsp;</strong></p>
<h4 style="color: red"><strong>Registration FEE (only applicable to selected teams)</strong></h4>
<p><strong>2000 Taka (for 3/4 people)**</strong></p>
<p><strong>bKash Account Number for payment: ***** ****** or ***** ******</strong></p>
<p><strong>DBBL Rocket Account Number for payment: ***** ******</strong></p>
<p><strong>To know more about the payment procedure, click </strong><a href="http://cse.iutoic-dhaka.edu/ictfest/payment.php"><strong>HERE</strong></a></p>
<p><strong>&nbsp;</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>&nbsp;</strong></p>
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
            <form method="POST" action="{{ route('store_appdev_front') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Team Information</h3>
                      </div>
                      <div class="form-group">
                          <input type="text" name="team_name" class="form-control" placeholder="Team Name" required="required">
                      </div>

                    
                      



                      <!-- member_1 -->
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Information Regarding Team Leader</h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_1_name" class="form-control" placeholder="Name of the Team Leader" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_1_institution" class="form-control" placeholder="Institution Name of the Team Leader" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_1_std_id" class="form-control" placeholder="Student ID of the Team Leader" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="member_1_contact" class="form-control" placeholder="Contact No. of the Team Leader" required="required">
                      </div>

                      <div class="form-group">
                          <input type="email" name="member_1_email" class="form-control" placeholder="E-mail of the Team Leader" required="required">
                      </div>

                      <div class="form-group">
                        <label>T-Shirt Size of the Team Leader</label>
                        
                          <select name="member_1_tshirt" class="form-control" required="required">
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>


                      



                      <!-- member_2 -->
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Information Regarding Member - 1</h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_2_name" class="form-control" placeholder="Name of Member - 1" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_2_institution" class="form-control" placeholder="Institution Name of Member - 1" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_2_std_id" class="form-control" placeholder="Student ID of Member - 1" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="member_2_contact" class="form-control" placeholder="Contact No. of Member - 1" required="required">
                      </div>

                      <div class="form-group">
                          <input type="email" name="member_2_email" class="form-control" placeholder="E-mail of Member - 1" required="required">
                      </div>


                      <div class="form-group">
                        <label>T-Shirt Size of Member - 1</label>
                        
                          <select name="member_2_tshirt" class="form-control" required="required">
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>







                      <!-- member_3 -->
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Information Regarding Member - 2</h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_3_name" class="form-control" placeholder="Name of Member - 2" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_3_institution" class="form-control" placeholder="Institution Name of Member - 2" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_3_std_id" class="form-control" placeholder="Student ID of Member - 2" required="required">
                      </div>


                      <div class="form-group">
                        <label>T-Shirt Size of Member - 2</label>
                        
                          <select name="member_3_tshirt" class="form-control" required="required">
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>



                      <!-- member_4 -->
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Information Regarding Member - 3 (Optional)</h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_4_name" class="form-control" placeholder="Name of Member - 3">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_4_institution" class="form-control" placeholder="Institution Name of Member - 3">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_4_std_id" class="form-control" placeholder="Student ID of Member - 3">
                      </div>


                      <div class="form-group">
                        <label>T-Shirt Size of Member - 3</label>
                        
                          <select name="member_4_tshirt" class="form-control">
                            <option value="">-- Please select t-shirt size --</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>


                      <div class="col-md-12 mb-4">
                          <h2 class="h3">Summary of your application</h2>
                      </div>
                      <div class="form-group">
                        <label>Please select a PDF/DOC file not exceeding 5 MB</label>
                          <input type="file" name="pdf" class="form-control" placeholder="" required="required">
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