<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>WORKLINK</title>

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png')}}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/zabuto_calendar.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/fullcalendar/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style1.css')}}">
  <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  <script src="{{ asset('lib/chart-master/Chart.js')}}"></script>
  <script src="{{ asset('js/app.js')}}"></script>

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="home" class="logo"><b>WORK<span>LINK</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="home">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
            </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                    <span class="from">Zac Snider</span>
                    <span class="time">Just now</span>
                  </span>
                  <span class="message">
                    Hi mate, how is everything?
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                    <span class="from">Divya Manian</span>
                    <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                    Hi, I need your help with this.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                    <span class="from">Dan Rogers</span>
                    <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                    Love your new Dashboard.
                  </span>
                </a>
              </li>
              <li>
                <a href="home">

                  <span class="subject">
                    <span class="from">Dj Sherman</span>
                    <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                    Please, answer asap.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
            </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="#" data-toggle="modal" data-target="#program"><i class="fa fa-clock-o"></i> Programmer une réunion</a></li>
          <li><a class="logout" href="#" data-toggle="modal" data-target="#join"><i class="fa fa-plus"></i> Se joindre à une réunion</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          @yield('user')
          <br />
          <li class="nav-header">Personnel</li>
          <li class="mt">
            <a class="active" href="conversations/2">
              <i class="fa fa-comments"></i>
              <span>Salon de Chat</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="call">
              <i class="fa fa-desktop"></i>
              <span>Démarrer une réunion</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="events">
              <i class="fa fa-calendar"></i>
              <span>Evènements</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Profil</span>
            </a>
          </li>
          <li class="nav-header">Administrateurs</li>
          <li class="sub-menu">
            <a href="gestion">
              <i class="fa fa-arrow-right"></i>
              <span>Gestion des utilisateur</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-arrow-right"></i>
              <span>Gestion de compte</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-arrow-right"></i>
              <span>Autres</span>
            </a>
          </li>
          <li class="nav-header"></li><br />
          <li class="sub-menu"><a class="logout" href="logout"><i class="fa fa-sign-out"></i> Déconnexion</a></li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <form id="joinForm" action="call" method="POST">
      {{ csrf_field() }}
      <!-- Modal -->
      <div class="modal fade" id="join" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Rejoindre une réunion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="nomdep">Veuuillez renseignez le lien de la réunion</label>
                <input type="text" class="form-control" name="link" id="link" autocomplete="off" require>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <input type="submit" class="btn btn-primary" value="Rejoindre">
            </div>
          </div>
        </div>
      </div>
    </form>
    <form id="programForm" action="/events" method="POST">
      {{ csrf_field() }}
      <!-- Modal -->
      <div class="modal fade" id="program" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Planifier une réunion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Sujet de la reunion :</label>
                <input type="text" name="description" class="form-control" placeholder="Veuillez saisir le sujet" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="start_date">Date de début :</label>
                  <input type="date" name="start_date" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="end_date">Date de fin:</label>
                  <input type="date" name="end_date" class="form-control" required>
                </div>
                <div class="form-group col-md-12">
                  <label>Description :</label>
                  <textarea class="form-control" name="sujet" rows="3" aria-describedby="helperDes" placeholder="Brève description de la réunion"></textarea>
                </div>
                <div class="col-md">
                  <p style="font-size: 12px;">NB: Les réunions se lancent automatiquement une fois les délais atteint.</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <input type="submit" class="btn btn-primary" value="Programmer">
            </div>
          </div>
        </div>
      </div>
    </form>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{ asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{ asset('lib/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery.sparkline.js')}}"></script>
    <!--common script for all pages-->
    <script src="{{ asset('lib/common-scripts.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/gritter-conf.js')}}"></script>
    <!--script for this page-->
    <script src="{{ asset('lib/sparkline-chart.js')}}"></script>
    <script src="{{ asset('lib/zabuto_calendar.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <script>
      $("#send_sms").on('click', function() {
        var sms = $("#sms").val();

        var html = '<div class="group-row pull float-right" style="padding: 50px;"><span id="sms">' + sms + ' ' + '<span><img class="img-circle" src="img/friends/fr-05.jpg" width="32"></div>'

        $("#chat_body").html(html);

        return false;
      });
    </script>
    <script>
      $(document).ready(function() {
        var calendar = $('#calendar').fullCalendar({
          editable: true,
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          events: 'load.php',
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt("Entrer la tache");
            if (title) {
              var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
              var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
              $.ajax({
                url: "insert.php",
                type: "POST",
                data: {
                  title: title,
                  start: start,
                  end: end,
                },
                success: function() {
                  calendar.fullCalendar('refetchEvents');
                  alert("Added Successfully");
                }
              })
            }
          },
          editable: true,
          eventResize: function(event) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            $.ajax({
              url: "update.php",
              type: "POST",
              data: {
                title: title,
                start: start,
                end: end,
                id: id
              },
              success: function() {
                calendar.fullCalendar('refetchEvents');
                alert('Task Update');
              }
            })
          },

          eventDrop: function(event) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            $.ajax({
              url: "update.php",
              type: "POST",
              data: {
                title: title,
                start: start,
                end: end,
                id: id
              },
              success: function() {
                calendar.fullCalendar('refetchEvents');
                alert("Task Updated");
              }
            });
          },

          eventClick: function(event) {
            if (confirm("Etes-vous sûr(e)s de vouloir retirer cet évènement ?")) {
              var id = event.id;
              $.ajax({
                url: "delete.php",
                type: "POST",
                data: {
                  id: id
                },
                success: function() {
                  calendar.fullCalendar('refetchEvents');
                  alert("Task Removed");
                }
              })
            }
          },

        });
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(function() {
        $("#utilisateurs").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
      });

      $(document).ready(function() {

        var table = $('#utilisateurs').DataTable();
        // Start Edit Record
        table.on('click', '.edit', function() {
          $tr = $(this).closest('tr');
          if ($($tr).hasClass('child')) {
            $tr = $tr.prev('.parent');
          }
          var data = table.row($tr).data();
          console.log(data);

          $('#nomUser').val(data[1]);
          $('#emailUser').val(data[2]);
          $('#region').val(data[3]);
          $('#tel').val(data[4]);
          $('#mdp').val(data[5]);

          $('#editForm').attr('action', '/gestion/' + data[0]);
          $('#editUser').modal('show');
          // End Edit Record
        });

        table.on('click', '.delete', function() {
          $tr = $(this).closest('tr');
          if ($($tr).hasClass('child')) {
            $tr = $tr.prev('.parent');
          }
          var data = table.row($tr).data();
          console.log(data);

          $('#deleteForm').attr('action', '/gestion/' + data[0]);
          $('#delUser').modal('show');
          // End delete Record
        });
      });
    </script>

    <script src="{{ asset('assets/fullcalendar/main.js') }}"></script>

</body>

</html>