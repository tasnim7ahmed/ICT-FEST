@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>IT BUSINESS CASE COMPETITION / <small>register a new team</small></h1>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <br />

                      
                    
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_business') }}">
                    	{{ csrf_field() }}
                      

                      







                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="team_name" class="form-control" placeholder="Team Name" required="required">
                      </div>
                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="institution" class="form-control" placeholder="Institution Name" required="required">
                      </div>




                      <!-- member_1 -->
                      <div class="col-md-12 mb-4">
                          <h2 class="h3">Information Regarding Team Leader</h2>
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="member_1_name" class="form-control" placeholder="Name of the Team Leader" required="required">
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" pattern="[+]?\d*" name="member_1_contact" class="form-control" placeholder="Contact No. of the Team Leader" required="required">
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="email" name="member_1_email" class="form-control" placeholder="E-mail of the Team Leader" required="required">
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="member_1_std_id" class="form-control" placeholder="Student ID of the Team Leader" required="required">
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
                          <input type="text" pattern="[+]?\d*" name="member_2_contact" class="form-control" placeholder="Contact No. of Member - 1" required="required">
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="email" name="member_2_email" class="form-control" placeholder="E-mail of Member - 1" required="required">
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="member_2_std_id" class="form-control" placeholder="Student ID of Member - 1" required="required">
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







                      <!-- member_2 -->
                      <div class="col-md-12 mb-4">
                          <h2 class="h3">Information Regarding Member - 2</h2>
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="member_3_name" class="form-control" placeholder="Name of Member - 2" required="required">
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" pattern="[+]?\d*" name="member_3_contact" class="form-control" placeholder="Contact No. of Member - 2" required="required">
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="email" name="member_3_email" class="form-control" placeholder="E-mail of Member - 2" required="required">
                      </div>

                      <div class="form-group col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="member_3_std_id" class="form-control" placeholder="Student ID of Member - 2" required="required">
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