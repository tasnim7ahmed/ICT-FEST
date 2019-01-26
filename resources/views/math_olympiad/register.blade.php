@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Math Olympiad / <small>register a new participant</small></h1>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <br />

                      
                    
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_mo') }}">
                    	{{ csrf_field() }}
                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="name" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Category 
                        </label>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                          
                          <div class="radio">
                            <label>
                              <input type="radio" value="School" class="flat" checked name="category"><strong> School</strong>
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" value="College" class="flat" name="category"><strong> College</strong>
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" value="University" class="flat" name="category"><strong> University</strong>
                            </label>
                          </div>
                          
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact No. </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" pattern="[+]?\d*" name="contact" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="email" name="email" class="form-control" placeholder="">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Institution Name </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="institution" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Registration Fees</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <select name="total" class="form-control" required="required">
                              <option value="150">150</option>
                              <option value="250">250</option>
                              <option value="350">350</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">T-Shirt Size</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <select name="tshirt" class="form-control" required="required">
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
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