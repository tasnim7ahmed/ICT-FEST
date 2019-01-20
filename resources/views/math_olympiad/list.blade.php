@extends('layouts.master')

@section('body')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Math Olympiad / <small>list of all participants</small></h1>
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
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>Contact No.</th>
                          <th>E-mail</th>
                          <th>Institution</th>
                          <th>Registration<br>Fees</th>
                          <th>Paid<br>Amount</th>
                          <th>Payment<br>Status</th>
                          <th>Payment<br>Completed</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      		@foreach ($mos as $mo) 
                          <tr>
                            <th>{{$mo->id}}</th>
                            <th>{{$mo->name}}</th>
                            <th>{{$mo->category}}</th>
                            <th>{{$mo->contact}}</th>
                            <th>{{$mo->email}}</th>
                            <th>{{$mo->institution}}</th>
                            <th>{{$mo->total}}</th>
                            <th>{{$mo->paid}}</th>
                            <?php
                            
                            $paid = $mo->total - ($mo->paid);
                            if($paid==0)
                            {
                                echo '<th><font style="color:green">'.'Successful'.'</font></th>';
                            }
                            else
                            {
                              echo '<th><font style="color:red">'.'Pending'.'</font></th>';
                            }
                            ?>
                <th><a href="#" class="glyphicon glyphicon-pencil"></a></th>
                <th><a href="/delete_mo/{{$mo->id}}" class="glyphicon glyphicon-trash"></a></th>
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
