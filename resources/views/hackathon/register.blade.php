@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>HACKATHON / <small>register a new team</small></h1>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <br>

                      
                    
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_hackathon') }}">
                    	{{ csrf_field() }}
                      

                 <div class="col-md-12 mb-4">
                          <h2 class="h3">Team Information</h2>
                      </div>
                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="team_name" class="form-control" placeholder="Team Name" required="required">
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Topic Category 
                        </label>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                          
                          <div class="radio">
                            <label>
                              <input type="radio" value="Agriculture" class="flat" checked name="category"><strong> Agriculture</strong>
                            </label>
                          </div>
                          
                          <div class="radio">
                            <label>
                              <input type="radio" value="Health" class="flat" name="category"><strong> Health</strong>
                            </label>
                          </div>

                          <div class="radio">
                            <label>
                              <input type="radio" value="Travel" class="flat" name="category"><strong> Travel</strong>
                            </label>
                          </div>

                          <div class="radio">
                            <label>
                              <input type="radio" value="Education" class="flat" name="category"><strong> Education</strong>
                            </label>
                          </div>
                          
                        </div>
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="institution" class="form-control" placeholder="Institution Name" required="required">
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" pattern="[+]?\d*" name="contact" class="form-control" placeholder="Contact Number" required="required">
                      </div>
                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="email" name="email" class="form-control" placeholder="E-mail" required="required">
                      </div>



                      <!-- member_1 -->
                      <div class="col-md-12 mb-4">
                          <h2 class="h3">Information Regarding Team Leader</h2>
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="member_1_name" class="form-control" placeholder="Name of the Team Leader" required="required">
                      </div>


                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
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
                          <h2 class="h3">Information Regarding Member - 1</h2>
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="member_2_name" class="form-control" placeholder="Name of Member - 1" required="required">
                      </div>


                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
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
                          <h2 class="h3">Information Regarding Member - 2</h2>
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="member_3_name" class="form-control" placeholder="Name of Member - 2" required="required">
                      </div>


                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
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
                          <h2 class="h3">Information Regarding Member - 3 (Optional)</h2>
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="member_4_name" class="form-control" placeholder="Name of Member - 3">
                      </div>


                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <label>T-Shirt Size of Member - 3</label>
                        
                          <select name="member_4_tshirt" class="form-control">
                              <option value="">-- please select t-shirt size --</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>



                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <label>Registration Fees</label>
                          <select name="total" class="form-control" required="required" selected = "true">
                              <option value="2000">2000</option>
                          </select>
                      </div>



                      <!-- <div class="ln_solid"></div> -->
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Register</button>
                        </div>
                      </div>

                    </form>

                    
                  </div>
                </div>
              </div>

          
</div>
@endsection