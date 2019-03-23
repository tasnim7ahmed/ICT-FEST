@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">HACKATHON</h1>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img src={{asset('images/Cover_Hackathon.png')}} width="100%" height="100%">
    </div>
    
    <section class="ftco-section" style="background-image: url(../images/Background.png); background-size: 100%;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text heading-section ftco-animate">
            <span class="subheading">HACKATHON</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
            <h5>
          
<h1>Phases</h1>
<h2>ONLINE REGISTRATION:</h2> <p style="color: black">Every team has to register online and choose a topic (Agriculture, Education, Health, Travel) on which they are interested to develop an application during registration.</p>

<h2>APPLICATION DEVELOPMENT:</h2> <p style="color: black">In this phase the team need to develop an application for a given problem statement based on the topic they selected within 24 hours on spot in the event day. The problem statement will be given on spot in the event day.</p>

<h2>PRESENTATION:</h2> <p style="color: black">After the application development phase, 10 teams will be selected. Selected teams need to give a presentation based on the prototype or application they developed.</p>

<h2>RULES</h2>
<ol type="1">
  <li style="color: black">The application must be developed on any of the following platforms:
    <ol type="a">
      <li style="color: black">Android</li>
      <li style="color: black">iOS</li>
      <li style="color: black">Web</li>
    </ol>
  </li>
  <li style="color: black">The problem statement and challenges will be given on spot in the event day.</li>
  <li style="color: black">The developed application does not need to be 100% complete. Building only the prototype and how the prototype is related with the problem statement is enough.</li>
  <li style="color: black">The hackathon will continue for 24 hours. Each team must stay for 24 hours. The team leader will give a presentation on their proposed solution after the development phase.</li>
  <li style="color: black">All the members of the team must be a current student of a university.</li>
  <li style="color: black">Each team can have minimum 3 members and maximum 4 members. The member can be from same/different institution.</li>
  <li style="color: black">Each team must have a team leader.</li>
  <li style="color: red"><strong> No female students are allowed to participate in hackathon. Female students can participate in other events except hackathon. </strong></li>
  <li style="color: black">The team members need to bring their own laptops, cell phones, mobile charger, power bank, multiplug etc. It is better if the team keeps an USB internet modem with them so that they can use it if any unavoidable circumstances occurs.</li>
  <li style="color: black">Only registered teams will be allowed to participate in the hackathon.</li>
  <li style="color:red"><strong> Participants have to use BDAPPS api in their developed application.</strong> </li>
  <li style="color: black">Participants are requested to bring their Identity Cards of respective institutions.</li>
  <li style="color: black">Teams must be present on time in the event day.</li>
  <li style="color: black">The organizing committee holds the right to disqualify any team. Any type of misbehavior with the judges will result in disqualification.</li>
  <li style="color: black">The organizing committee will not be liable if any team or individual lost his/her laptop, cellular phones, gadgets and other stuffs.</li>
</ol>

<p style="color: black"><h5 style="color: red">Registration fee: Tk. 3060.00 (BDT Three thousand taka)</h5></p>


<p><h4 style="color:red">
                <strong>*** If you are facing any problem in our registration process, then please knock us at our <a href="https://www.facebook.com/events/2210175945978123/">Facebook</a> page.</strong>
              </h4>

              <h4 style="color:red">
                <strong>*** Based on your performances in the competition, our sponsors might contact you in the future.</strong>
              </h4></p>


<p><h5 style="color: black">For further query contact, Sabit Bananee: +8801925215306</h5></p>

          </h5>
          </div>
        </div>
      </div>
    <!-- </section>

    <section class="ftco-section contact-section ftco-degree-bg"> -->
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3"><br>Registration Form</h2>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row block-9">
          <div class="col-md-9 pr-md-5">
            <form method="POST" action="{{ route('store_hackathon_front') }}">
                      {{ csrf_field() }}
                      
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Team Information</h3>
                      </div>
                      <div class="form-group">
                          <input type="text" name="team_name" class="form-control" placeholder="Team Name" required="required">
                      </div>

                      <div class="form-group">
                        <label>Topic Category</label>
                          <select name="category" class="form-control" required="required">
                              <option value="Agriculture">Agriculture</option>
                              <option value="Health">Health</option>
                              <option value="Travel">Travel</option>
                              <option value="Education">Education</option>
                          </select>
                      </div>

                      <h6 style="color: red"> **If the members of the team are from different institution then write 'Mixed' in institution name otherwise write your respective institution name** </h6>
                      <div class="form-group">
                          <input type="text" name="institution" class="form-control" placeholder="Institution Name" required="required">
                      </div>

                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="contact" class="form-control" placeholder="Contact Number" required="required">
                      </div>
                      <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="E-mail" required="required">
                      </div>


                      <!-- member_1 -->
                      <div class="col-md-12 mb-4">
                          <h3 class="h4">Information Regarding Team Leader</h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_1_name" class="form-control" placeholder="Name of the Team Leader" required="required">
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
                          <h3 class="h4">Information Regarding Member - 2 </h3>
                      </div>

                      <div class="form-group">
                          <input type="text" name="member_3_name" class="form-control" placeholder="Name of Member - 2" required="required">
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
                        <label>T-Shirt Size of Member - 3</label>
                        
                          <select name="member_4_tshirt" class="form-control">
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