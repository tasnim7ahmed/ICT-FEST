@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">MATH OLYMPIAD</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">Math Olympiad</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
      </div>
    </section>

    <div class="x_content">         
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>Institution</th>
                          <th>Registration<br>Fees</th>
                          <th>T-Shirt</th>
                          <th>Payment<br>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($mos as $mo) 
                          <tr>
                            <th>{{$mo->id}}</th>
                            <th>{{$mo->name}}</th>
                            <th>{{$mo->category}}</th>
                            <th>{{$mo->institution}}</th>
                            <th>{{$mo->total}}</th>
                            <th>{{$mo->tshirt}}</th>
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
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
          
          
  </div>

@endsection