@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>POSTER PRESENTATION / <small>list of teams</small></h1>
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
                    <!-- in table tag, inside class it was written dt-responsive before nowrap -->
                    <table id="datatable-responsive" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%" align="center">
                      <thead>
                        <tr >
                          <th>ID</th>
                          <th>Team Name</th>
                          <th>Category</th>
                          <th>Institution</th>
                          <th>Team Leader</th>
                          <th>Team Leader's Email</th>
                          <th>Team Leader's Contact</th>
                          <th>Team Leader's T-shirt</th>
                          <th>Member - 1</th>
                          <th>Member - 1 Email</th>
                          <th>Member - 1 Contact</th>
                          <th>Member - 1 T-shirt</th>
                          <th>Member - 2</th>
                          <th>Member - 2 Email</th>
                          <th>Member - 2 Contact</th>
                          <th>Member - 2 T-shirt</th>
                          <th>Name of Supervisor</th>
                          <th>Supervisor Email</th>
                          <th>Supervisor Contact</th>
                          <th>Supervisor T-shirt</th>
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
                      		@foreach ($posters as $poster) 
                          <tr>
                            <td>{{$poster->id}}</td>
                            <td>{{$poster->team_name}}</td>
                            <td>{{$poster->category}}</td>
                            <td>{{$poster->institution}}</td>
                            <td>{{$poster->member_1_name}}</td>
                            <td>{{$poster->member_1_email}}</td>
                            <td>{{$poster->member_1_contact}}</td>
                            <td>{{$poster->member_1_tshirt}}</td>

                            <td>{{$poster->member_2_name}}</td>
                            <td>{{$poster->member_2_email}}</td>
                            <td>{{$poster->member_2_contact}}</td>
                            <td>{{$poster->member_2_tshirt}}</td>

                            <td>{{$poster->member_3_name}}</td>
                            <td>{{$poster->member_3_email}}</td>
                            <td>{{$poster->member_3_contact}}</td>
                            <td>{{$poster->member_3_tshirt}}</td>

                            <td>{{$poster->coach_name}}</td>
                            <td>{{$poster->coach_email}}</td>
                            <td>{{$poster->coach_contact}}</td>
                            <td>{{$poster->coach_tshirt}}</td>
                            <td>{{$poster->total}}</td>
                            <td>{{$poster->created_at}}</td>

                            <?php
                            
                            $sub = $poster->submission;
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
                            
                            $paid = $poster->total - ($poster->paid);
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
                            
                            $sel = $poster->selected;
                            if($sel=='True')
                            {
                                echo '<th><font style="color:green">'.'True'.'</font></th>';
                            }
                            else
                            {
                              echo '<th><font style="color:red">'.'False'.'</font></th>';
                            }
                            ?>
                <th><a href="/payment_done_poster/{{$poster->id}}" class="glyphicon glyphicon-euro" onclick="return confirm('Are you sure about completing the payment? This cannot be undone.' );"></a></th>
                <th><a href="/selection_done_poster/{{$poster->id}}" class="glyphicon glyphicon-plus" onclick="return confirm('Are you sure about selecting this participant? This cannot be undone.' );"></a></th>
                
                <th><a href="/poster_download/{{$poster->id}}" class="glyphicon glyphicon-download"></a></th>
                <th><a href="/delete_poster/{{$poster->id}}" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure about deleting this? This cannot be undone.' );"></a></th>


                
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
