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



    <div>
      <img src={{asset('images/Cover_AppDev.png')}} width="100%" height="100%">
    </div>

    
    <section class="ftco-section" style="background-image: url(../images/Background.png); background-size: 100%; ">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text heading-section ftco-animate">
            <span class="subheading">APPLICATION DEVELOPMENT</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
              <br />
              <br />
              <h4><strong>Phase 1 - Online registration</strong></h4>
              <ul>
                <li style="color:black">
                  Every team must <strong>register</strong> and
                  <strong>submit</strong> their application ideas.
                </li>
              </ul>
              <h4><strong>Phase 2 - Idea Assessment and Selection</strong></h4>
              <ul>
                <li style="color:black">
                  <strong>Within 36 hours</strong> from online registration, you
                  will be notified whether your idea has been
                  <strong>selected</strong> or not.
                </li>
                <li style="color:black">
                  Teams are expected to start building their apps after
                  selection.
                </li>
              </ul>
              <h4><strong>Phase 3 - Payment confirmation</strong></h4>
              <ul>
                <li style="color:black">
                  Within 48 hours of receiving your idea selection email,
                  selected teams must confirm their registration by completing
                  the payment procedure.
                </li>
              </ul>
              <h4><strong>Phase 4 - Application Showcasing</strong></h4>
              <ul>
                <li style="color:black">
                  In this phase selected teams will showcase their developed
                  application based on their idea on the event days..
                </li>
                <li style="color:black">
                  Prepare a short presentation (3-5 minutes) to present your application to judges.
                </li>
              </ul>
              <h4><strong>Rules And Regulations</strong></h4>
              <ul>
                <li style="color:black">
                    The application must be based on Android or iOS or Windows platform.
                </li>
                <li style="color:black">
                    All applications must have <strong>at least one of five bdapps api</strong> implemented. The quality of this implementation will be closely moderated by our judges. Failure to implement this will result in <strong>severe deduction</strong> of marks. For more details on bdapps for developers click <a href="http://dev.bdapps.com/">here</a>
                  </li>
                <li style="color:black">
                  The developed app does not need to be 100% complete. Most of the important features should be implemented. UI/UX must be functional and consistent.
                </li>
                <li style="color:black">
                  Each team cannot submit more than one idea.
                </li>
                <li style="color:black">
                  Only registered team members are allowed to showcase their
                  applications. No substitution is permissible.
                <li style="color:black">
                  Each team has to bring their full project on the day of
                  showcasing. Bringing only the apk or exe file will lead to
                  disqualification.
                </li>
                <li style="color:black">
                  The team members must be current students of any university.
                </li>
                <li style="color:black">
                  Each team can have maximum 4 members. The member can be from same/different institution.
                </li>
                <li style="color:black">
                  Participants are requested to bring their Identity Cards of respective institutions.
                </li>
                <li style="color:black">
                  Teams must remain present on both days of the fest as per event schedule.
                </li>
                <li style="color:black">
                  The organizing committee holds the right to disqualify any team. Any type of misbehavior with the judges will result in disqualification.
                </li>
                <li style="color:black">
                  The organizing committee will not be liable if any team or individual lost his/her laptop, cellular phones, gadgets and other stuffs.
                </li>
              </ul>
              <h4><strong>Idea Submission format</strong></h4>
              <div style="color:black">
                  Can be in pdf or doc format<br>
                  <strong>Team Name:</strong><br>
                  <strong>App title:</strong> Give your app an appropriate name<br>
                  <strong>Category:</strong> Chosen category of the app<br>
                  <strong>Platform:</strong> Windows/Android/iOS<br>
                  <strong>Description:</strong> A short description about your app<br>
                  <strong>Features to be implemented:</strong> What features will be there. They must be functional in your demo.<br>
              </div>
              

              <h4><strong>Scoring Scheme</strong></h4>
              <div style="color:black">
                  Apps will be scored based on:
                  <ul>
                    <li style="color:black">
                        App functionality
                    </li>
                    <li style="color:black">
                        Creativity of the app idea
                    </li>
                    <li style="color:black">
                        Productivity of the app and how it serves its purpose
                    </li>
                    <li style="color:black">
                        Innovation - apps that are merely clones of other apps are naturally ranked lower
                    </li>
                    <li style="color:black">
                        Design of the mobile app
                    </li>
                    <li style="color:black">
                        Originality
                    </li> 
                    <li style="color:black">
                       BDapps integration(s)
                    </li>
                  </ul>
              </div>
              

              <h4><strong>Categories for the apps:</strong></h4>
              <div style="color:black">
                  <ul>
                      <li style="color:black">
                          Health (food, agriculture and related others)
                      </li>
                      <li style="color:black">
                          Education
                      </li>
                      <li style="color:black">
                          Lifestyle (lifestyle, music, news, fun, content)
                      </li>
                      <li style="color:black">
                          Social or blogging
                      </li>
                      <li style="color:black">
                          Business or Economy
                      </li>
                   </ul>
                   **All applications must have <strong>at least one of five bdapps api</strong>. The quality of this implementation will be closely moderated by our judges. Failure to implement this will result in <strong>severe deduction</strong> of marks. For more details on bdapps for developers visit http://dev.bdapps.com/<br>
                   **Here are some video tutorials for bdapps integration.<br>
                   <ul>
                     <li style="color:black">
                        <a href="https://www.youtube.com/watch?v=vcuO7fxM0oc&feature=youtu.be">Video Link 1</a><br>
                     </li>
                     <li style="color:black">
                        <a href="https://www.youtube.com/watch?v=QRWvalL53UM&feature=youtu.be">Video Link 2</a><br>
                     </li>
                   </ul>
              </div>
              

              <p style="color:black"><strong>&nbsp;</strong></p>
              <p style="color:black">
                <strong
                  >The last date for idea submission is 6TH APRIL 2019.</strong
                >
              </p>
              <p style="color:black">
                <strong
                  >Selected teams must pay the registration fees within 48 hours of being selected.</strong
                >
              </p>
              <p style="color:black"><strong>&nbsp;</strong></p>
              <p style="color:black"><strong>&nbsp;</strong></p>
              <h4 style="color: red">
                <strong
                  >Registration FEE (only applicable to selected teams)</strong
                >
              </h4>
              <p></p>
              <h4 style="color:red">
                <strong>2040 Taka (for 3/4 people)**</strong>
              </h4>
              <p></p>
              <p></p>
              <h5 style="color: black">
                For further query contact, Ahmed Rafayet: +8801954916806
              </h5>
              <p></p>

              <p style="color:black"><strong>&nbsp;</strong></p>
              <p style="color:black"><strong>&nbsp;</strong></p>
              <p style="color:black"><strong>&nbsp;</strong></p>
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