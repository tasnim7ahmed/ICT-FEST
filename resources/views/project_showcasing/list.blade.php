@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>PROJECT SHOWCASING / <small>list of teams</small></h1>
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
                          <th>Project Name</th>
                          
                          <th>Team Leader</th>
                          <th>Team Leader Institution </th>
                          <th>Team Leader Email </th>
                          <th>Team Leader Contact </th>
                          <th>Team Leader T-Shirt </th>
                          <th>Member - 1</th>
                          <th>Member - 1 Institution</th>
                          <th>Member - 1 Email</th>
                          <th>Member - 1 Contact</th>
                          <th>Member - 1 T-Shirt</th>
                          <th>Member - 2</th>
                          <th>Member - 2 Institution</th>
                          <th>Member - 2 Email</th>
                          <th>Member - 2 Contact</th>
                          <th>Member - 2 T-Shirt</th>
                          <th>Fees</th>
                          <th>Registered At</th>
                          <th>Payment<br>Status</th>
                          <th>Selected<br>Status</th>
                          <th><font style="color:red">Payment<br>Completed</th>
                          <th><font style="color:red">Selected</th>
                          <th><font style="color:red">Download</th>
                          <th><font style="color:red">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      		@foreach ($pss as $pc) 
                          <tr>
                            <td>{{$pc->id}}</td>
                            <td>{{$pc->team_name}}</td>
                            <td>{{$pc->project_name}}</td>
                            <td>{{$pc->member_1_name}}</td>
                            <td>{{$pc->member_1_institution}}</td>
                            <td>{{$pc->member_1_email}}</td>
                            <td>{{$pc->member_1_contact}}</td>
                            <td>{{$pc->member_1_tshirt}}</td>
                            <td>{{$pc->member_2_name}}</td>
                            <td>{{$pc->member_2_institution}}</td>
                            <td>{{$pc->member_2_email}}</td>
                            <td>{{$pc->member_2_contact}}</td>
                            <td>{{$pc->member_2_tshirt}}</td>
                            <td>{{$pc->member_3_name}}</td>
                            <td>{{$pc->member_3_institution}}</td>
                            <td>{{$pc->member_3_email}}</td>
                            <td>{{$pc->member_3_contact}}</td>
                            <td>{{$pc->member_3_tshirt}}</td>
                            <td>{{$pc->total}}</td>
                            <td>{{$pc->created_at}}</td>
                            <?php
                            
                            $paid = $pc->total - ($pc->paid);
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
                            
                            $sel = $pc->selected;
                            if($sel=='True')
                            {
                                echo '<th><font style="color:green">'.'True'.'</font></th>';
                            }
                            else
                            {
                              echo '<th><font style="color:red">'.'False'.'</font></th>';
                            }
                            ?>
                <th><a href="/payment_done_ps/{{$pc->id}}" class="glyphicon glyphicon-euro" onclick="return confirm('Are you sure about completing the payment? This cannot be undone.' );"></a></th>
                <th><a href="/selection_done_ps/{{$pc->id}}" class="glyphicon glyphicon-plus" onclick="return confirm('Are you sure about selecting this participant? This cannot be undone.' );"></a></th>

                <th><a href="/ps_download/{{$pc->id}}" class="glyphicon glyphicon-download"></a></th>

                <th><a href="/delete_ps/{{$pc->id}}" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure about deleting this? This cannot be undone.' );"></a></th>
                
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
