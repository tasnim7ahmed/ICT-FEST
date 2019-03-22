@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>DOTA 2 / <small>list of teams</small></h1>
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
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Team Leader</th>
                          <th>Team Leader DOTA ID</th>
                          <th>Team Leader T-shirt</th>
                          <th>Member - 1</th>
                          <th>Member - 1 DOTA ID</th>
                          <th>Member - 1 T-Shirt</th>
                          <th>Member - 2</th>
                          <th>Member - 2 DOTA ID</th>
                          <th>Member - 2 T-Shirt</th>
                          <th>Member - 3</th>
                          <th>Member - 3 DOTA ID</th>
                          <th>Member - 3 T-Shirt</th>
                          <th>Member - 4</th>
                          <th>Member - 4 DOTA ID</th>
                          <th>Member - 4 T-Shirt</th>
                          <th>Member - 5</th>
                          <th>Member - 5 DOTA ID</th>
                          <th>Member - 5 T-Shirt</th>
                          <th>Fees</th>
                          <th>Registered At</th>
                          <th>Payment<br>Status</th>
                          <th>Selected<br>Status</th>
                          <th><font style="color:red">Payment<br>Completed</th>
                          <th><font style="color:red">Selected</th>
                          <th><font style="color:red">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      		@foreach ($dotas as $dota) 
                          <tr>
                            <td>{{$dota->id}}</td>
                            <td>{{$dota->team_name}}</td>
                            <td>{{$dota->contact}}</td>
                            <td>{{$dota->email}}</td>
                            <td>{{$dota->member_1_name}}</td>
                            <td>{{$dota->member_1_ign}}</td>
                            <td>{{$dota->member_1_tshirt}}</td>
                            <td>{{$dota->member_2_name}}</td>
                            <td>{{$dota->member_2_ign}}</td>
                            <td>{{$dota->member_2_tshirt}}</td>
                            <td>{{$dota->member_3_name}}</td>
                            <td>{{$dota->member_3_ign}}</td>
                            <td>{{$dota->member_3_tshirt}}</td>
                            <td>{{$dota->member_4_name}}</td>
                            <td>{{$dota->member_4_ign}}</td>
                            <td>{{$dota->member_4_tshirt}}</td>
                            <td>{{$dota->member_5_name}}</td>
                            <td>{{$dota->member_5_ign}}</td>
                            <td>{{$dota->member_5_tshirt}}</td>
                            <td>{{$dota->member_6_name}}</td>
                            <td>{{$dota->member_6_ign}}</td>
                            <td>{{$dota->member_6_tshirt}}</td>
                            <td>{{$dota->total}}</td>
                            <td>{{$dota->created_at}}</td>
                            <?php
                            
                            $paid = $dota->total - ($dota->paid);
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
                            
                            $sel = $dota->selected;
                            if($sel=='True')
                            {
                                echo '<th><font style="color:green">'.'True'.'</font></th>';
                            }
                            else
                            {
                              echo '<th><font style="color:red">'.'False'.'</font></th>';
                            }
                            ?>
                <th><a href="/payment_done_dota/{{$dota->id}}" class="glyphicon glyphicon-euro" onclick="return confirm('Are you sure about completing the payment? This cannot be undone.' );"></a></th>
                <th><a href="/selection_done_dota/{{$dota->id}}" class="glyphicon glyphicon-plus" onclick="return confirm('Are you sure about selecting this participant? This cannot be undone.' );"></a></th>
                <th><a href="/delete_dota/{{$dota->id}}" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure about deleting this? This cannot be undone.');"></a></th>

                
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
