@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">POSTER PRESENTATION</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">POSTER PRESENTATION</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
            <p>EVENT DETAILS</p>
<p>&nbsp;</p>
<p><strong><h4>Registration Cost</h4></strong> <h6 style="color: red">BDT 1200 per team. Each team can be maximum of 3 members and minimum of 2.</h6></p>

<p>RULES for the poster presentation competition are :<br /> ---------------------------------------------------------------------------------<br /> </p>
<ol>
<li>An accepted poster must include:</li>
</ol>
<ul>
<li>Title of the poster.</li>
<li>Name of the authors followed by their institution.</li>
<li>Name of the supervisor followed by his institution.(If there is any supervisor supervising for the team)</li>
<li>Abstract</li>
<li>Methodology</li>
<li>Feasibility and Impact Analysis</li>
<li>Conclusion</li>
</ul>
<p>&nbsp;</p>
<ol start="2">
<li>You will get 10-15 minutes to present your poster.<br /> <br /> Note 1: When you begin to make your poster, first create a list of the visuals that you would use if you were describing your project with only the visuals. Write the text after you have created the list of visuals. Don&rsquo;t be afraid to point out uncertainties in your work; this is where you may get useful feedback.<br /> <br /> Note 2: SIMPLICITY IS THE KEY. Keep to the point, and don&rsquo;t try to cover too many things. Present only enough data to support your conclusions.</li>
</ol>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Other rules:</p>
<ul>
<li>Poster size should be 36&rdquo; (height) by 24&rdquo; (width) and must be oriented in Portrait Style.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Poster banner:</li>
</ul>
<p>PVC banner (For University Level Students)</p>
<p>PVC or Handmade Banner (For School-College Level Students)</p>
<p>&nbsp;</p>
<ul>
<li>Students must obtain permission from their mentors/supervisors and</li>
</ul>
<p>co-authors before presenting the poster. Any report referring to an unauthorized poster presentation will be addressed immediately.</p>
<p>&nbsp;</p>
<ul>
<li>Students from schools, colleges and universities (up to Masters) can participate.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>The judgement will be for individual two levels:</li>
</ul>
<ol>
<li>University Level.</li>
<li>School-College Level.</li>
</ol>
<p>&nbsp;</p>
<ul>
<li>The work presented must be original and innovative. Immediate actions will be taken against any form of <strong>plagiarism</strong>.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Upon registration, <strong>abstract</strong> of each poster must be uploaded as a pdf format to the website to get selected as a participant in the competition.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>A team should be formed with a minimum of 2 members and maximum 3 members.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>All the team members must register their posters within the registration deadline.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Registrations should be done online.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>The presenters must bring their Student ID card on program day for verification purpose.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>A certificate will be issued against every poster presented.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Poster printing must be done by the presenter or by the presentation team.</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>In all cases, decisions taken by the organizing committee will be final.</li>
</ul>
<p><br /> <br /> <strong>****************************************************</strong><br /> TOPICS of the competition:<br /> <br /> The topic of the presented poster is open to your choices. We welcome your choice of topic and any creative ideas that you want to share with us.</p>
<p>&nbsp;</p>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
            <form method="POST" action="{{ route('store_poster_front') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Team Information</h3>
                      </div>
                      <div class="form-group">
                          <input type="text" name="team_name" class="form-control" placeholder="Team Name" required="required">
                      </div>

                      <div class="form-group">
                        <label>Category</label>
                          <select name="category" class="form-control" required="required">
                              <option value="School-College">School-College</option>
                              <option value="University">University</option>
                          </select>
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







                      <!-- member_3 -->
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Information Regarding Member - 2 (Optional)</h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_3_name" class="form-control" placeholder="Name of Member - 2">
                      </div>

                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="member_3_contact" class="form-control" placeholder="Contact No. of Member - 2">
                      </div>

                      <div class="form-group">
                          <input type="email" name="member_3_email" class="form-control" placeholder="E-mail of Member - 2">
                      </div>


                      <div class="form-group">
                        <label>T-Shirt Size of Member - 2</label>
                        
                          <select name="member_3_tshirt" class="form-control">
                            <option value="">-- Please select t-shirt size --</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>



                      <!-- coach -->
                      <div class="col-md-12 mb-4">
                          <h2 class="h3">Information Regarding Supervisor (If any)</h2>
                      </div>

                      <div class="form-group">
                          <input type="text" name="coach_name" class="form-control" placeholder="Name of Supervisor">
                      </div>

                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="coach_contact" class="form-control" placeholder="Contact No. of Supervisor">
                      </div>

                      <div class="form-group">
                          <input type="email" name="coach_email" class="form-control" placeholder="E-mail of Supervisor">
                      </div>


                      <div class="form-group">
                        <label>T-Shirt Size of Supervisor</label>
                        
                          <select name="coach_tshirt" class="form-control">
                              <option value="">-- Please select t-shirt size --</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>

                      <div class="col-md-12 mb-4">
                          <h2 class="h3">Abstract of your presentation topic</h2>
                      </div>
                      <div class="form-group">
                        <label>Please select a PDF file not exceeding 5 MB</label>
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