@extends('layouts.homelay')
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

<section id="container">
 <div class="row">
       @include('user',['users'=> $users])
<div class="col-md-9">
    <div class="card">
        <div class="card-header">{{ $user->name }}</div>

        <div class="card-body">
            
        </div>

    </div>
    </div> 
</div>
</section>
@endsection