@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">PROGRAMMING CONTEST</h1>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img src={{asset('images/Cover_PC.png')}} width="100%" height="100%">
    </div>
    
    <section class="ftco-section" style="background-image: url(../images/Background.png); background-size: 100%;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text heading-section ftco-animate">
            <span class="subheading"><center>PROGRAMMING CONTEST</center></span>
            <h2 class="mb-4"><center>Rules &amp; Regulations</center></h2>
            <p style="color:black"><strong><u>&nbsp;</u></strong></p>
<h4><center><strong><u>Registration Procedure </center> </u></strong></h4>
<br>
<p style="color:black">Registration should be completed online at IUT IUPC official website at <a href="http://www.ictfest2019.com/">http://www.ictfest2019.com/</a></p>
<p style="color:black">An email will be sent to the coach and to the contestants for verification by our system.</p>
<p style="color:black"><h6 style="color: red">Registration fee: Tk 4080 (Four thousand taka)</h6></p>
<p style="color:black">&nbsp;</p>
<h4><strong><center><u>Important Dates </center> </u></strong></h4>
<br>
<!-- <p style="color:black">Registration Opens:</p> -->
<p style="color:black"><h6 style="color: red">Last date of registration: (**Will be revealed soon**)</h6></p>
<p style="color:black"><h6 style="color: red">Last date of payment: (**Will be revealed soon**)</h6></p>
<p style="color:black">Mock Contest: 12th April, 2019&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p style="color:black">Contest : 13th April, 2019</p>
<br>
<h4><strong><u><center>Number of Teams </center></u></strong></h4>
<br>
<p style="color:black">Every university participating in the IUT IUPC 2019 will get at least one team.</p>
<p style="color:black">Slots will be provided to each university depending on the recent ICPC performance.</p>
<p style="color:black">The program committee reserves all the rights to accept or reject any additional teams.</p>
<p style="color:black">The contest hosting university may be allowed to have additional teams, which will be decided by program committee.</p>
<br>
<h4><strong><u><center>Contest Rules </center> </u></strong></h4>
<br>
<p style="color:black">Each team has access to one computer with a specific set of problems which may be solved in any order.</p>
<p style="color:black">The contest runs for five hours and consists of 8-12 problems. Ranklist will be available online to contestants and spectators. (The ranklist will be frozen during the last hour of the contest).</p>
<p style="color:black">For any questions about the problems, you can send your clarifications through Toph. You must not ask any irrelevant questions to judges. In such cases, judges can take any decision even can disqualify your team.</p>
<p style="color:black">In case of problem with network or system, please seek help of volunteers and system support team.</p>
<p style="color:black">While printing your code, please write your team ID and room number above the code.</p>
<p style="color:black">Teams are not allowed to use or keep any kind of electronic devices including USB drive, cell phone, smart watch etc. Browsing internet in any manner is prohibited.</p>
<p><h5 style="color: black">For further query contact, <br>Fardin Saad: +8801622036553 <br> Ahsan Rezwan Zaman: +8801746800626</h5></p>
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
            <form method="POST" action="{{ route('store_pc_front') }}">
                      {{ csrf_field() }}
                      
                      <div class="form-group">
                          <input type="text" name="team_name" class="form-control" placeholder="Team Name" required="required">
                      </div>
                      <div class="form-group">
                          <input type="text" name="institution" class="form-control" placeholder="Institution Name" required="required">
                      </div>



                      <!-- COACH -->
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Information Regarding the Coach</h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="coach_name" class="form-control" placeholder="Name of the Coach" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="coach_contact" class="form-control" placeholder="Contact No. of the Coach" required="required">
                      </div>

                      <div class="form-group">
                          <input type="email" name="coach_email" class="form-control" placeholder="E-mail of the Coach" required="required">
                      </div>

                      <div class="form-group">
                        <label>T-Shirt Size of the Coach</label>
                        
                          <select name="coach_tshirt" class="form-control" required="required">
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
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
                        <label>T-Shirt Size of Member - 1</label>
                        
                          <select name="member_2_tshirt" class="form-control" required="required">
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>







                      <!-- member_2 -->
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