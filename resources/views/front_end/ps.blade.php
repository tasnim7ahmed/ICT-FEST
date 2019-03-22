@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">PROJECT SHOWCASING</h1>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img src={{asset('images/Cover_PS.png')}} width="100%" height="100%">
    </div>
    
    <section class="ftco-section"  style="background-image: url(../images/Background.png); background-size: 100%;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text heading-section ftco-animate">
            <span class="subheading">PROJECT SHOWCASING</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
          
<p>&nbsp;</p>
<h1>Online submission:</h1>
<ul>
<li style="color:black">Every willing contestant must register and submit their project idea assessment online.</li>
<li style="color:black">The online project idea must be in PDF or DOC format (max 5 MB) and to be submitted while registering</li>
<li style="color:black">The project idea assessment must include the following points with other details:
<ol>
<li style="color:black">Project Abstract</li>
<li style="color:black">Project Detail</li>
<li style="color:black">Execution Hurdles</li>
<li style="color:black">Benefit</li>
<li style="color:black">Scalability</li>
</ol>
</li>
<li style="color:black">After submission a screening will be held by the judge panel</li>
<li style="color:black">Selected teams will be notified through email and text message</li>
<li style="color:black">On spot registration will not be allowed</li>
</ul>
<br>
<h1>Final Showcasing:</h1>
<ul>
<li style="color:black">Every team must be present with their project for judgment on event day</li>
<li style="color:black">Only registered team members can be present in the team booth. No substitution or addition will be permissible</li>
<li style="color:black">Every participant must carry their ID cards of respective institutions</li>
</ul>
<br>
<h1>Project Criteria:</h1>
<ul>
<li style="color:black">Projects must be either hardware base or software base</li>
<li style="color:black">Participant must be an ongoing college or university student</li>
<li style="color:black">The participating projects don&rsquo;t need to be completely functional but must include a working prototype and a technical demonstration</li>
<li style="color:black">Simple games or utility applications developed for PC or mobile platform are not acceptable</li>
<li style="color:black">Participating team must be consisted of minimum two or at most three members. Members can joint from same or different institution.</li>
</ul>
<br>
<h1>Guideline:</h1>
<ul>
<li style="color:black">Any type of plagiarism will be considered as serious violation of event rules</li>
<li style="color:black">Project can be either Hardware or Software bases</li>
<li style="color:black">Project should solve any present or future problem or improve any aspect of people&rsquo;s daily life</li>
<li style="color:black">Better impact on mass people or industry will be considered by judges</li>
<li style="color:black">Any project related to IOT or ICT and Technology is welcome to participate</li>
<li style="color:black">Any type of misconduct or inappropriate behavior might lead to disqualification</li>
</ul>
<br>
<p><h6 style="color: red">Registration fee: Tk. 2000.00 (Two thousand taka). Only selected teams will have to pay the registration fee</h6></p>

<p>&nbsp;</p>
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
            <form method="POST" action="{{ route('store_ps_front') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      
                      <div class="form-group">
                          <input type="text" name="team_name" class="form-control" placeholder="Team Name" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" name="project_name" class="form-control" placeholder="Project Name" required="required">
                      </div>

                      <div class="col-md-12 mb-4">
                          <h2 class="h3">Abstract of your project</h2>
                      </div>
                      <div class="form-group">
                        <label>Please select your idea assessment file. (Must be PDF or DOC file not exceeding 5 MB)</label>
                          <input type="file" name="pdf" class="form-control" placeholder="" required="required">
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
                          <h3 class="h4">Information Regarding Member - 2 (optional)</h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_3_name" class="form-control" placeholder="Name of Member - 2">
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_3_institution" class="form-control" placeholder="Institution Name of Member - 2">
                      </div>

                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="member_3_contact" class="form-control" placeholder="Contact No. of Member - 2" >
                      </div>

                      <div class="form-group">
                          <input type="email" name="member_3_email" class="form-control" placeholder="E-mail of Member - 2">
                      </div>

                      <div class="form-group">
                        <label>T-Shirt Size of Member - 2</label>
                        
                          <select name="member_3_tshirt" class="form-control" >
                              <option value="">-- please select t-shirt size --</option>
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