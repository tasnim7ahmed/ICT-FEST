@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">IT BUSINESS CASE COMPETITION</h1>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img src={{asset('images/Cover_Business.png')}} width="100%" height="100%">
    </div>

    <section class="ftco-section" style="background-image: url(../images/Background.png); background-size: 100%;">
      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Idea Submission Form</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        
        <form method="POST" action="{{ route('business_upload') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}



                      <div class="form-group">
                        <label>Secret Key</label>
                          <input type="text" name="key" class="form-control" placeholder="Enter Your Secret-Key" required="required">
                      </div>

                      <div class="form-group">
                        <label>Please select a File not exceeding 50 MB</label>
                          <input type="file" name="pdf" class="form-control" placeholder="" required="required">
                      </div>
                      
                    <div class="form-group">
                <button type="reset" class="btn btn-primary py-3 px-5">Reset</button>
                <button type="submit" class="btn btn-primary py-3 px-5">Submit</button>
              </div>
            </form>

      </div>
        
      </div>
    </div>
  </div>
</div>



<div class="text-center">
  <h2>
  <a href=""data-toggle="modal" data-target="#modalLoginForm">Submit Your Idea Here! <br><br></a></h2>
</div>
</section>

    
    
    <section class="ftco-section" style="background-image: url(../images/Background.png); background-size: 100%;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text heading-section ftco-animate">
            <span class="subheading">IT BUSINESS CASE COMPETITION</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
            <p style="color: black">IUT Computer Society (IUTCS) invites you to ICT Fest Business Case Competition 2019. This year, we&rsquo;re doing it differently to make it more challenging for you.</p>
<!-- <h4><strong>Prize Money </strong></h4>
<p style="color: black">Champion : 50k</p>
<p style="color: black">1st Runner Up : 25k</p>
<p style="color: black">2nd Runner Up : 15k</p>
<br> -->
<h4><strong>Registration guidelines :</strong></h4>
<p style="color: black">Teams have to be from the same institution. Each team should have 3 members.</p>
<h4><strong>Registration deadline </strong>: 28th March 11:59 PM.</h4>
<br>
<p style="color: black"><strong>This year, we will have 3 rounds. </strong></p>
<ol>
<li style="color:black">Online round</li>
<li style="color:black">Presentation round</li>
<li style="color:black">The grand finale</li>
</ol>
<br>
<h4><strong>Online Round :</strong></h4>
<p style="color: black">Upon registration, each team will be provided a unique code. The respective team leader will get the case within 48 hours via his/her email.</p>
<p style="color: black">The solution of the case study should be submitted in this link using the unique code :</p>
<h4>Case submission deadline March 31st, 11:59 PM</h4>
<p style="color: black">The case solution should be within 1000 words. Rename the case solution file before submission using this format : &lsquo;Team name_institution&rsquo;. For example, The Boring Team_IUT.</p>
<p style="color: black">A selected list of teams will be announced on our facebook event page on April 3rd, 8PM. A waiting list for teams will also be published.</p>
<p style="color: black">The teams will then have to pay the registration fee.</p>
<br>
<h4><strong>Payment Details :</strong></h4>
<p style="color: black">ONLY THE SELECTED TEAMS from will have to pay the registration fee.</p>
<p style="color: black"><h6 style="color:red">Registration Fee : 2000 Tk</p></h6>
<br>
<h4><strong>Presentation Round :</strong></h4>
<p style="color: black">The selected teams will make a presentation on their case on April 12th at IUT Campus. Each team will get 15 minutes to present their case and there will be 5 minutes of question-answer round.</p>
<p style="color: black">The presentation should be in .pptx format. The teams will submit their presentations to the volunteers at 9:30 AM. After that, no modification will be allowed.</p>
<p style="color: black">6 teams from the presentation round will proceed to the grand finale on 13th April.</p>
<h4><strong>Grand Finale :</strong></h4>
<p style="color: black">The grand finale will be an instant case solution round.</p>
<p style="color: black">Teams will have to report at 9 AM sharp at the venue. A case will be given at 9:30 AM. Teams will get 2 hours to solve the case and make a presentation.</p>
<p style="color: black">From 12PM, the presentations will start at IUT Auditorium.</p>
<p style="color: black">3 Teams will win prizes based on their performance at Grand Finale.</p>
<p style="color: black">We&rsquo;re very excited to invite you to an event you&rsquo;ll remember for a long time.</p>
<p style="color: black">&nbsp;</p>
          </div>
        </div>
      </div>
    <!-- </section>

    <section class="ftco-section contact-section ftco-degree-bg"> -->
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Registration Form</h2>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row block-9">
          <div class="col-md-9 pr-md-5">
            <form method="POST" action="{{ route('store_business_front') }}">
                      {{ csrf_field() }}
                      
                      <div class="form-group">
                          <input type="text" name="team_name" class="form-control" placeholder="Team Name" required="required">
                      </div>
                      <div class="form-group">
                          <input type="text" name="institution" class="form-control" placeholder="Institution Name" required="required">
                      </div>



                      <!-- member_1 -->
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Information Regarding Team Leader</h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_1_name" class="form-control" placeholder="Name of the Team Leader" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="member_1_contact" class="form-control" placeholder="Contact No. of the Team Leader" required="required">
                      </div>

                      <div class="form-group">
                          <input type="email" name="member_1_email" class="form-control" placeholder="E-mail of the Team Leader" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_1_std_id" class="form-control" placeholder="Student ID of the Team Leader" required="required">
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
                          <input type="text" pattern="[+]?\d*" name="member_2_contact" class="form-control" placeholder="Contact No. of Member - 1" required="required">
                      </div>

                      <div class="form-group">
                          <input type="email" name="member_2_email" class="form-control" placeholder="E-mail of Member - 1" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_2_std_id" class="form-control" placeholder="Student ID of Member - 1" required="required">
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
                          <input type="text" pattern="[+]?\d*" name="member_3_contact" class="form-control" placeholder="Contact No. of Member - 2" required="required">
                      </div>

                      <div class="form-group">
                          <input type="email" name="member_3_email" class="form-control" placeholder="E-mail of Member - 2" required="required">
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