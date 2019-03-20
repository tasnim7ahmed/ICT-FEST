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
    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">HACKATHON</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
            <h5>
          
<h1>Phases</h1>
<h2>ONLINE REGISTRATION:</h2> <p>Every team has to register online and choose a topic (Agriculture, Education, Health, Travel) on which they are interested to develop an application during registration.</p>

<h2>APPLICATION DEVELOPMENT:</h2> <p>In this phase the team need to develop an application for a given problem statement based on the topic they selected within 24 hours on spot in the event day. The problem statement will be given on spot in the event day.</p>

<h2>PRESENTATION:</h2> <p>After the application development phase, 10 teams will be selected. Selected teams need to give a presentation based on the prototype or application they developed.</p>

<h2>RULES</h2>
<ol type="1">
  <li>The application must be developed on any of the following platforms:
    <ol type="a">
      <li>Android</li>
      <li>iOS</li>
      <li>Web</li>
    </ol>
  </li>
  <li>The problem statement and challenges will be given on spot in the event day.</li>
  <li>The developed application does not need to be 100% complete. Building only the prototype and how the prototype is related with the problem statement is enough.</li>
  <li>The hackathon will continue for 24 hours. Each team must stay for 24 hours. The team leader will give a presentation on their proposed solution after the development phase.</li>
  <li>All the members of the team must be a current student of a university.</li>
  <li>Each team can have minimum 3 members and maximum 4 members. The member can be from same/different institution.</li>
  <li>Each team must have a team leader.</li>
  <li>The team members need to bring their own laptops, cell phones, mobile charger, power bank, multiplug etc. It is better if the team keeps an USB internet modem with them so that they can use it if any unavoidable circumstances occurs.</li>
  <li>Only registered teams will be allowed to participate in the hackathon.</li>
  <li>Participants are requested to bring their Identity Cards of respective institutions.</li>
  <li>Teams must be present on time in the event day.</li>
  <li>The organizing committee holds the right to disqualify any team. Any type of misbehavior with the judges will result in disqualification.</li>
  <li>The organizing committee will not be liable if any team or individual lost his/her laptop, cellular phones, gadgets and other stuffs.</li>
</ol>

<p><h5 style="color: red">Registration fee: Tk. 3000.00 (BDT Three thousand taka)</h5></p>

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