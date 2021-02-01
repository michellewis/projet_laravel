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
<section id="main-content">
      <section class="wrapper">
        
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel mt-5" >
              <h4><i class="fa fa-angle-right"></i> liste des utilisateurs</h4>
              <hr>
              <table class="table mt-3">
                <thead>
                  <tr>
                    <th>id</th>
                    <th> Name</th>
                    <th>Email </th>
                    <th>region</th>
                  </tr>
                </thead>
                <tbody>
   @foreach($users as $user)
                  <tr>
                    <th scope="row" >{{ $user->id }}</th>
                    
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->region }}</td>
                    <td class="table-buttons">
                      <a href="" class="btn btn-success">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                      <a href="" class="btn btn-primary">
                        <i class="fa fa-pencil" ></i>
                      </a>
                      <form action="" method="POST">
                        <button type="submit" class="btn btn-danger">
                          <i class="fa fa-trash" ></i>
                        </button>
                      </form>
                    </td>
                  </tr>
  ²@endforeach
                </tbody>
              </table>
            </div>
            <a href="{{ route('gestion.create') }}" class="btn btn-theme mb-3 mt-2" >creer utilisateur</a>
          </div>
          </section>
    </section>
    <script src="lib/common-scripts.js"></script>
@endsection