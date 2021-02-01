@extends('layouts.homelay')
@section('user')
@if (Route::has('login'))
                     
                            <p class="centered"><a href="{{asset('profile.html') }}"></a></p>
                           <h5 class="centered">{{ Auth::user()->name }}</h5>
                           @endif
                           @endsection

@section('content')

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

                <table class="table table-borderless">
                    @include('conversations.users',['users' =>$users])
                </table>
            </aside>
        </div>
        <!-- page end-->
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
@endsection