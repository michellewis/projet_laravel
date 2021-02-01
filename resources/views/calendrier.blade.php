@extends('layouts.homelay')
@if (Route::has('login'))
                     
                            <p class="centered"><a href="{{asset('profile.html') }}"></a></p>
                           <h5 class="centered">{{Auth::user()->name }}</h5>
                           @endif
                           @endsection

@section('content')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <br/>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Calendrier des Evènements</h1>
            </div>
        </div><br/>
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
    </section>
</section>
@endsection