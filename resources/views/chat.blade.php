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
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
            <aside class="mid-side" style="height: 650px;">
                <div class="chat-room-head">
                    <h3>Discussion Instantanée</h3>
                    <form action="#" class="pull-right position">
                        <input type="text" placeholder="Search" class="form-control search-btn ">
                    </form>
                </div>
                <div id="chat_body" class="">
                </div>
                <footer>
                    <div class="chat-txt">
                        <input type="text" class="form-control" id="sms">
                    </div>
                    <div class="btn-group hidden-sm hidden-xs">
                        <button type="button" class="btn btn-white"><i class="fa fa-meh-o"></i></button>
                        <button type="button" class="btn btn-white"><i class=" fa fa-paperclip"></i></button>
                    </div>
                    <button class="btn btn-theme" id="send_sms">Envoyer</button>
                </footer>
            </aside>
            <aside class="right-side">
                <div class="user-head">
                    <h4 class="pull-left">Contacts</h4>
                    <a href="#" class="btn btn-theme04 pull-right">+ Inviter</a>
                </div>
                <table class="table table-borderless">
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <img class="img-circle" src="img/friends/fr-02.jpg" width="32">
                            <span> {{ $user->name }}</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm"><i class="fa fa-phone" style="font-size: 12px;"></i></button>
                            <button type="button" class="btn btn-sm"><i class="fa fa-video-camera" style="font-size: 12px;"></i></button>
                            <button type="button" class="btn btn-sm"><i class="fa fa-commenting" style="font-size: 12px;"></i></button>
                        </td>
                    </tr><br />
                    @endforeach
                </table>
            </aside>
        </div>
        <!-- page end-->
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
@endsection