@extends('layouts.homelay')*

@section('user')
@if (Route::has('login'))
                     
                            <p class="centered"><a href="{{asset('profile.html') }}"></a></p>
                           <h5 class="centered">{{ Auth::user()->name }}</h5>
                           @endif
                           @endsection

@section('content')
@section('content')
<section id="main-content">
  <section class="wrapper">
    <br />
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Calendrier des Evènements</h1>
      </div>
    </div><br />
    <div><button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#addEvent" style="font-size: 15px;"><i class="fa fa-plus"></i> Nouvel Evènement</button></div><br />
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Evènements</h3>
      </div>
      <div class="card-body">
        <div class="container col-sm-12">
          <div id="calendar" style="color: black;"></div>
        </div>
      </div>
    </div>
    <form id="programForm" action="events" method="POST">
      {{ csrf_field() }}
      <!-- Modal -->
      <div class="modal fade" id="addEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Planifier une réunion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="card-description">Entrez les détails de l'évènement</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="start_date">Date de début</label>
                    <input type="date" class="form-control" name="start_date" id="start_date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="end_date">Date de fin</label>
                    <input type="date" class="form-control" name="end_date" id="end_date">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="end_date">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <input type="submit" class="btn btn-primary" value="Créer l'évènement">
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</section>
@endsection
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      eventColor: 'green',
      initialDate: "{{ date('Y-m-d') }}",
      events: [
       @foreach ($events as $event)  {
          title: 'All Day Event',
          start: '{{ $event->start_date }}',
          end: '{{ $event->end_date }}',
          title: '{{ $event->description }}',
          url: '{{ route("events.show", $event->id) }}',
          color: '{{ $event->happened ? "grey" : "green" }}',
        }à
      @endforeach
      ]
    });
    calendar.render();
  });
</script>