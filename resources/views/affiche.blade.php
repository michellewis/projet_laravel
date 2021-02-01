@extends('layouts.homelay')

@section('content')

<section id="container">
   @include('user',['users'=> $users])
   
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ $user->name }}</div>
            <div class="card-body" message>
                
            </div>
        </div>
    </div>
  
    </section>
@endsection