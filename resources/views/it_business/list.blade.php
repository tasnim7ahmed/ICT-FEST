@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>IT BUSINESS CASE COMPETITION / <small>list of teams</small></h1>
              </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Participants' List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">					
                    <table id="datatable-responsive" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%" align="center">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Team Name</th>
                          <th>Institution</th>
                          <th>Team Leader</th>
                          <th>Team Leader's Email</th>
                          <th>Team Leader's Contact</th>
                          <th>Team Leader's T-shirt</th>
                          <th>Team Leader's Student ID</th>
                          <th>Member - 1</th>
                          <th>Member - 1 Email</th>
                          <th>Member - 1 Contact</th>
                          <th>Member - 1 T-shirt</th>
                          <th>Member - 1 Student ID</th>
                          <th>Member - 2</th>
                          <th>Member - 2 Email</th>
                          <th>Member - 2 Contact</th>
                          <th>Member - 2 T-shirt</th>
                          <th>Member - 2 Student ID</th>
                          <th>Fees</th>
                          <th>Registered At</th>
                          <th>Idea Submission</th>
                          <th>Payment<br>Status</th>
                          <th>Selected<br>Status</th>
                          <th><font style="color:red">Payment<br>Completed</th>
                          <th><font style="color:red">Selected</th>
                          <th><font style="color:red">Download</th>
                          <th><font style="color:red">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      		@foreach ($businesses as $business) 
                          <tr>
                            <td>{{$business->id}}</td>
                            <td>{{$business->team_name}}</td>
                            <td>{{$business->institution}}</td>
                            <td>{{$business->member_1_name}}</td>
                            <td>{{$business->member_1_email}}</td>
                            <td>{{$business->member_1_contact}}</td>
                            <td>{{$business->member_1_tshirt}}</td>
                            <td>{{$business->member_1_std_id}}</td>


                            <td>{{$business->member_2_name}}</td>
                            <td>{{$business->member_2_email}}</td>
                            <td>{{$business->member_2_contact}}</td>
                            <td>{{$business->member_2_tshirt}}</td>
                            <td>{{$business->member_2_std_id}}</td>

                            <td>{{$business->member_3_name}}</td>
                            <td>{{$business->member_3_email}}</td>
                            <td>{{$business->member_3_contact}}</td>
                            <td>{{$business->member_3_tshirt}}</td>
                            <td>{{$business->member_3_std_id}}</td>
                            <td>{{$business->total}}</td>
                            <td>{{$business->created_at}}</td>
                            <?php
                            
                            $sub = $business->submission;
                            if($sub=='True')
                            {
                                echo '<th><font style="color:green">'.'Successful'.'</font></th>';
                            }
                            else
                            {
                              echo '<th><font style="color:red">'.'Pending'.'</font></th>';
                            }
                            ?>

                            <?php
                            
                            $paid = $business->total - ($business->paid);
                            if($paid==0)
                            {
                                echo '<th><font style="color:green">'.'Successful'.'</font></th>';
                            }
                            else
                            {
                              echo '<th><font style="color:red">'.'Pending'.'</font></th>';
                            }
                            ?>
                            <?php
                            
                            $sel = $business->selected;
                            if($sel=='True')
                            {
                                echo '<th><font style="color:green">'.'True'.'</font></th>';
                            }
                            else
                            {
                              echo '<th><font style="color:red">'.'False'.'</font></th>';
                            }
                            ?>
                <th><a href="/payment_done_business/{{$business->id}}" class="glyphicon glyphicon-euro" onclick="return confirm('Are you sure about completing the payment? This cannot be undone.' );"></a></th>
                <th><a href="/selection_done_business/{{$business->id}}" class="glyphicon glyphicon-plus" onclick="return confirm('Are you sure about selecting this participant? This cannot be undone.' );"></a></th>


                
                <th><a href="/business_download/{{$business->id}}" class="glyphicon glyphicon-download"></a></th>
                
                <th><a href="/delete_business/{{$business->id}}" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure about deleting this? This cannot be undone.');"></a></th>

                

                  


                
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
            </div>
          </div>
          
</div>
@endsection
