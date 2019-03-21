@extends('front_end.master_front_end')

@section('body')
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">FIFA 19</h1>
          </div>
        </div>
      </div>
    </div>
    
    <div>
      <img src={{asset('images/Cover_FIFA.png')}} width="100%" height="100%">
    </div>
    <section class="ftco-section" style="background-image: url(../images/Background.png); background-size: 100%;">

      

      <div class="container" style="opacity:0.92">
        <div class="row justify-content-center mb-5 pb-5" >
          <div class="col-md-6 text heading-section ftco-animate">
            <span class="subheading">FIFA 19</span>
            <h2 class="mb-4">Rules &amp; Regulations</h2>
            <h5>
            <h2><strong>IUT ICT Fest FIFA 19 Tournament Format/Rules</strong></h2>
<h2>GAME SETTINGS</h2>
<ul>
<li style="color:black">Game Mode: International and Club (No World XI or Classic XI)</li>
<li style="color:black">Custom Formations: NOT allowed</li>
<li style="color:black">Custom Tactics: Allowed</li>
<li style="color:black">Custom Corners &amp; set pieces: NOT allowed</li>
<li style="color:black">Half Length: 5 minutes (4 minutes only in 1st round)</li>
<li style="color:black">Difficulty level: Legendary</li>
<li style="color:black">Game Speed: Normal</li>
<li style="color:black">Injuries: Off</li>
<li style="color:black">Offside: On</li>
<li style="color:black">Bookings: On</li>
<li style="color:black">Handball: Off</li>
<li style="color:black">Subs on Bench: 7</li>
<li style="color:black">Radar: 3D/2D</li>
<li style="color:black">HUD: Player Name Bar</li>
<li style="color:black">Time/Score Display = ON</li>
</ul>
<h2>CAMERA SETTINGS</h2>
<ul>
<li style="color:black">Camera: Tele</li>
<li style="color:black">Camera Height: 20</li>
<li style="color:black">Camera Zoom: 0</li>
</ul>
<h2>CONTROLLER SETTINGS</h2>
<ul>
<li style="color:black">Auto switching: all options are allowed</li>
<li style="color:black">Auto switching move assistance: all options are allowed</li>
<li style="color:black">Passing Power Assistance: all options are allowed</li>
<li style="color:black">Defending: Tactical defending (legacy defense is forbidden)</li>
<li style="color:black">Players are allowed to choose any controller settings they prefer apart from defending setting</li>
</ul>
<h2>GENERAL RULES</h2>
<ul>
<li style="color:black">It is the responsibility of all the players of this tournament to know and understand the rules.</li>
<li style="color:black">Organizing committee has the right to change any rules at any time and their decision will be final.</li>
<li style="color:black">Every match will be played in Single PC</li>
<li style="color:black">Tournament Method:&nbsp;matches will be played per round (Except Final). If aggregate score is even after 2 matches, a 3rd match will be played which will continue up to penalties if score still remains even</li>
<li style="color:black">Competition Method: (GP Player vs. GP Player) or (GP Player vs. KB Player)</li>
<li style="color:black">(KB Player vs. KB Player) is not possible. If needed origin id and internet connection will be provided to arrange certain KB vs. KB matches.</li>
<li style="color:black">IUT-ICT FEST committee recommends players to bring their own Gamepad (GP), Keyboard (KB), Headphone and any other peripheral to simulate their own best playing environment and avoid problems of using default accessories.</li>
<li style="color:black">&nbsp;A warning may be given for overtime, and if the player is found to be delaying the match for non-technical reasons, the referee may declare the match forfeit</li>
<li style="color:black">At the end of each match, the players must remain seated, remain at the victory/defeat screen and await a referee to record the results and save the replay</li>
<li style="color:black">Closing the victory/defeat screen without the replay being saved by a referee may result in a default loss</li>
<li style="color:black">Player changes and strategy changes can be made whenever the ball is out for a throw-in or goal-kick. The changes should be made before throwing-in or goal-kicking. (The changes before the start of first and second half are not included in this count.) The changes can also be made at players each other&rsquo;s mutual agreement</li>
</ul>
<h2>GAME SETTINGS PRECAUTIONS</h2>
<ul>
<li style="color:black">The teams&rsquo; and players&rsquo; abilities cannot be modified arbitrarily (e.g. you</li>
<li style="color:black">cannot modify players&rsquo; work-rate, passing speed etc.)</li>
<li style="color:black">Players on both sides must select the options before they begin the game</li>
<li style="color:black">The match result will be accepted even if the players, during or after the match, find out each other&rsquo;s settings were different from the official settings.</li>
</ul>
<h2>FORBIDDEN MOVES</h2>
<ul>
<li style="color:black">The following rules must be observed:</li>
</ul>
<ul>
<ul>
<li style="color:black">Players must kick-off with a backward pass at the beginning of each half and after every goal is scored</li>
<li style="color:black">Players are not allowed to shoot the ball directly onto the crossbar from a corner kick in order to get a chance for a header when the ball rebound.</li>
<li style="color:black">It is not allowed to score a goal from one&rsquo;s own half of the field</li>
<li style="color:black">It is forbidden to make a throw-in directly into the opponent's penalty area. Should a player throw the ball directly into the opponent's penalty area he shall be warned. Should he persist, he shall be disqualified from the tournament. Any goals resulting from a throw-in into the opponent's penalty area will not be counted.</li>
<li style="color:black">If a player is found to be intentionally delaying the game time by passing the ball around and clearly not attempting to score, he may be given a warning or lose by default at the referee's discretion.</li>
</ul>
</ul>
<ul>
<li style="color:black">In any case, a goal scored due to the use of a &ldquo;forbidden move&rdquo; shall not be counted.</li>
<li style="color:black">If a player is found in playing with forbidden moves, he may be disqualified from the tournament.</li>
<li style="color:black">All complaints shall be dealt with after the match has been completed</li>
</ul>
<h2>DISCONNECTIONS</h2>
<p>Disconnection: Any connection loss between opponents due to system, network, PC, and/or power problems/issues. Intentional Disconnection: Any connection loss between opponents due to a player&rsquo;s (intentional) actions, upon the judgment of the referee, the offending player may be charged with a default loss.</p>
<p>If disconnection occurs:</p>
<ul>
<li style="color:black">A referee will confirm the exact score to that point(even if the ball is about to cross the goal line, the goal shall not count), and restart the match.</li>
<li style="color:black">A referee will inform the players on exactly how many minutes must still be played in order to complete the match.</li>
<li style="color:black">Any players sent off the field (red carded) in that very match who was disconnected shall count each as a goal for the opponent when the match resumes.</li>
<li style="color:black">If the disconnection occurs after a corner kick was awarded to a player, the match will resume with a corner kick for that same player.</li>
</ul>
<h2>FINAL PROVISIONS</h2>
<p>The above-mentioned rules may be amended in the following cases:</p>
<ul>
<li style="color:black">Should the IUT-ICT FEST committee, at its sole discretion, decide to adopt the latest patch/version release of each official game.</li>
<li style="color:black">Should the IUT-ICT FEST committee, at its sole discretion, decide to modify in-game settings and options required by the use of most recent patch version/release.</li>
<li style="color:black">Should the IUT-ICT FEST committee, at its sole discretion, decide to use a newly released Cheat Protection Program and/or cheat protection functions.</li>
<li style="color:black">Should the IUT-ICT FEST committee, at its sole discretion, decide to change game settings and/or operations guidelines due to differences between online and offline tournaments</li>
</ul>
<p><strong>***Authorities may change the rules and regulations along with other details if necessary. In that case everyone will be notified through the facebook page of IUT Computer Society (IUTCS). Everyone is requested to follow the facebook page for updated news.</strong></p>
<p><h6 style="color: red">Entry fee: </h6></p>
<p><h6 style="color: red">300tk per participant</h6></p>
          </h5>
          </div>
        </div>
      </div>
    <!-- </section>

    <section class="ftco-section contact-section ftco-degree-bg"> -->
      <div class="container bg-light" style="opacity:0.92">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3"><br>Registration Form</h2>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row block-9">
          <div class="col-md-9 pr-md-5">
            <form method="POST" action="{{ route('store_fifa_front') }}">
                      {{ csrf_field() }}
                      
                      <div class="form-group" >
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required="required">
                      </div>

                      
                      <div class="form-group">
                          <input type="text" pattern="[+]?\d*" name="contact" class="form-control" placeholder="Contact No." required="required">
                      </div>

                      <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="E-mail" required="required">
                      </div>

                      
                      <div class="form-group">
                        <label>Preferred device for playing</label>
                          <select name="device" class="form-control" required="required">
                              <option value="Keyboard">Keyboard</option>
                              <option value="Controller">Controller</option>
                          </select>
                      </div>
                      

                      <div class="form-group">
                        <label>T-Shirt Size</label>
                        
                          <select name="tshirt" class="form-control" required="required">
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>

                      

              <div class="form-group">
                <button type="reset" class="btn btn-primary py-3 px-5">Reset</button>
                <button type="submit" class="btn btn-primary py-3 px-5">Register</button>
              </div>
              <div class="form-group">
                
              </div>
            </form>
            
          </div>

        </div>
      </div>
    </section>
@endsection