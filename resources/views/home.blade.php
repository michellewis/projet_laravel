
@extends('layouts.homelay')


<!-- Authentication Links -->
@section('user')
@if (Route::has('login'))
                     
                            <p class="centered"><a href="profile.html"></a></p>
                           <h5 class="centered">{{ Auth::user()->name }}</h5>
                           @endif
                           @endsection
@section('logout')

@guest

                           
                               <div class="top-menu">
                                   <ul class="nav pull-right top-menu">
                                   <li><a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">logout</a></li>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       @csrf
                                    </form>
                                   </ul>
                               
                                   
                               </div>
@endguest
@endsection 

@section('content')
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
            <div class="row">
              <!-- TWITTER PANEL -->
              <div class="col-md-4 mb">
                <div class="twitter-panel pn">
                <p> 
                <a href="call" > <img src="img/appelvisio5.png" alt="appel video"></a>
                </p> 
                
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>TOP USER</h5>
                  </div>
                  <p><img src="img/ui-zac.jpg" class="img-circle" width="50"></p>
                  <p><b>Zac Snider</b></p>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="small mt">MEMBER SINCE</p>
                      <p>2012</p>
                    </div>
                    <div class="col-md-6">
                      <p class="small mt">TOTAL SPEND</p>
                      <p>$ 47,60</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->
              
              <!-- TWITTER PANEL -->
              <div class="col-md-4 mb">
                <div class="twitter-panel pn">
                  <i class="fa fa-twitter fa-4x"></i>
                  <p>Dashio is here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>
                  <p class="user">@Alvrz_is</p>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>TOP USER</h5>
                  </div>
                  <p><img src="img/ui-zac.jpg" class="img-circle" width="50"></p>
                  <p><b>Zac Snider</b></p>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="small mt">MEMBER SINCE</p>
                      <p>2012</p>
                    </div>
                    <div class="col-md-6">
                      <p class="small mt">TOTAL SPEND</p>
                      <p>$ 47,60</p>
                    </div>
                  </div>
                </div>
              </div>
              
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            
            <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    </section>

 <!-- js placed at the end of the document so the pages load faster -->
 <script src="lib/jquery/jquery.min.js"></script>

 <script src="lib/bootstrap/js/bootstrap.min.js"></script>
 <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
 <script src="lib/jquery.scrollTo.min.js"></script>
 <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
 <script src="lib/jquery.sparkline.js"></script>
 <!--common script for all pages-->
 <script src="lib/common-scripts.js"></script>
 <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
 <script type="text/javascript" src="lib/gritter-conf.js"></script>
 <!--script for this page-->
 <script src="lib/sparkline-chart.js"></script>
 <script src="lib/zabuto_calendar.js"></script>
 <script type="text/javascript">
   
 </script>
 <script type="application/javascript">
   $(document).ready(function() {
     $("#date-popover").popover({
       html: true,
       trigger: "manual"
     });
     $("#date-popover").hide();
     $("#date-popover").click(function(e) {
       $(this).hide();
     });

     $("#my-calendar").zabuto_calendar({
       action: function() {
         return myDateFunction(this.id, false);
       },
       action_nav: function() {
         return myNavFunction(this.id);
       },
       ajax: {
         url: "show_data.php?action=1",
         modal: true
       },
       legend: [{
           type: "text",
           label: "Special event",
           badge: "00"
         },
         {
           type: "block",
           label: "Regular event",
         }
       ]
     });
   });

   function myNavFunction(id) {
     $("#date-popover").hide();
     var nav = $("#" + id).data("navigation");
     var to = $("#" + id).data("to");
     console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
   }
 </script>

@endsection



