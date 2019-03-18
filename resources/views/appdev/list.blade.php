@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>APPLICATION DEVELOPMENT / <small>list of teams</small></h1>
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
                          
                          <th>Team Leader</th>
                          <th>Team Leader's Institution</th>
                          <th>Team Leader's Student ID</th>
                          <th>Member - 1</th>
                          <th>Member - 1 Institution</th>
                          <th>Member - 1 Student ID</th>
                          <th>Member - 2</th>
                          <th>Member - 2 Institution</th>
                          <th>Member - 2 Student ID</th>
                          <th>Member - 3</th>
                          <th>Member - 3 Institution</th>
                          <th>Member - 3 Student ID</th>
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
                      		@foreach ($appdevs as $appdev) 
                          <tr>
                            <td>{{$appdev->id}}</td>
                            <td>{{$appdev->team_name}}</td>
                            
                            <td>{{$appdev->member_1_name}}</td>
                            <td>{{$appdev->member_1_institution}}</td>
                            <td>{{$appdev->member_1_std_id}}</td>
                            <td>{{$appdev->member_2_name}}</td>
                            <td>{{$appdev->member_2_institution}}</td>
                            <td>{{$appdev->member_2_std_id}}</td>
                            <td>{{$appdev->member_3_name}}</td>
                            <td>{{$appdev->member_3_institution}}</td>
                            <td>{{$appdev->member_3_std_id}}</td>
                            <td>{{$appdev->member_4_name}}</td>
                            <td>{{$appdev->member_4_institution}}</td>
                            <td>{{$appdev->member_4_std_id}}</td>
                            <td>{{$appdev->total}}</td>
                            <td>{{$appdev->created_at}}</td>

                            <?php
                            
                            $sub = $appdev->submission;
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
                            
                            $paid = $appdev->total - ($appdev->paid);
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
                            
                            $sel = $appdev->selected;
                            if($sel=='True')
                            {
                                echo '<th><font style="color:green">'.'True'.'</font></th>';
                            }
                            else
                            {
                              echo '<th><font style="color:red">'.'False'.'</font></th>';
                            }
                            ?>
                <th><a href="/payment_done_appdev/{{$appdev->id}}" class="glyphicon glyphicon-euro"></a></th>
                <th><a href="/selection_done_appdev/{{$appdev->id}}" class="glyphicon glyphicon-plus"></a></th>
                
                <th><a href="/appdev_download/{{$appdev->id}}" class="glyphicon glyphicon-download"></a></th>
                <th><a href="/delete_appdev/{{$appdev->id}}" class="glyphicon glyphicon-trash"></a></th>
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
