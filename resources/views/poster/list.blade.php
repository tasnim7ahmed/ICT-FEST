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
                          <th>Member - 1</th>
                          <th>Member - 2</th>
                          <th>Name of Supervisor</th>
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
                            <td>{{$poster->member_2_name}}</td>
                            <td>{{$poster->member_3_name}}</td>
                            <td>{{$poster->coach_name}}</td>
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
                <!-- <th><a href="/payment_done_poster/{{$poster->id}}" class="glyphicon glyphicon-euro"></a></th>
                <th><a href="/selection_done_poster/{{$poster->id}}" class="glyphicon glyphicon-plus"></a></th>
                
                <th><a href="/poster_download/{{$poster->id}}" class="glyphicon glyphicon-download"></a></th>
                <th><a href="/delete_poster/{{$poster->id}}" class="glyphicon glyphicon-trash"></a></th> -->


                <th>
                  <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">
                          Payment
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Payment Completion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Payment Completed? <br>This process can't be undone.      
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="/payment_done_poster/{{$poster->id}}"><button type="button" class="btn btn-success">Complete Payment</button></a>
                              </div>
                            </div>
                          </div>
                        </div>
                </th>
                
              <th>
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                      Select
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Select Participant</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Do you want to select this participant? <br>This process can't be undone.      
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="/selection_done_poster/{{$poster->id}}"><button type="button" class="btn btn-primary">Select</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </th>

                  <th><a href="/poster_download/{{$poster->id}}" class="glyphicon glyphicon-download"></a></th>


                <th>
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                      Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Entity</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Do you want to delete? <br>This process can't be undone.      
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="/delete_poster/{{$poster->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </th>
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
