@extends('layouts.homelay')
@section('user')
@if (Route::has('login'))
                     
                            <p class="centered"><a href="{{asset('profile.html') }}"></a></p>
                           <h5 class="centered">{{Auth::user()->name }}</h5>
                           @endif
                           @endsection

@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        </br>
        <h3><i class="fa fa-commenting" style="font-size: 12px;"></i>Discussion Instantanée</h3>
        <div class="row">

            <div class="chat-room mt">
                <aside class="mid-side" style="height: 650px;">
                    <div class="chat-room-head">
                        {{ $user->name}}
                        <form action="#" class="pull-right position">
                            <input type="text" placeholder="Search" class="form-control search-btn ">
                        </form>
                    </div>
                    <div id="chat_body" class="form-control" style="font-size: 12px">
                        @if($messages->hasMorePages())
                        <div class="text-center">
                            <a href="{{ $messages->nextPageUrl() }}" class="btn btn-light">
                                voir les messages precedents
                            </a>

                        </div>
                        @endif
                        @foreach(array_reverse($messages->items()) as $message)
                        <div class="row mb-2">
                            <div class="col-md-10 {{$message->from->id !== $user->id ? 'offset-md-2 text-right' :''}} ">
                                <p>
                                    <strong>
                                        {{ $message->from->id !== $user->id ? 'Moi' : $message->from->name  }}</strong>
                                    </br>
                                    {{ $message->content }}
                                </p>
                            </div>
                        </div>

                        @endforeach

                        @if($messages->hasMorePages())
                        <div class="text-center">
                            <a href="{{$messages->previousPageUrl() }}" class="btn btn-light">
                                voir les messages suivants
                            </a>
                        </div>

                        @endif
                    </div>
                    <footer>
                        <form method="POST">
                            {{ csrf_field()}}
                            <div class="chat-txt">
                                <div class="formg-group">
                                    <textarea type="text" name="content" placeholder="ecrivez votre message"
                                        class="form-control {{ $errors->has('content') ? 'is-valid' : ''}}"></textarea>
                                    @if ($errors->has('content'))
                                    <div class="invalid-feedback">{{ implode(',' ,$errors->get('content')) }}</div>
                                    @endif
                                </div>
                                <div class="btn-group hidden-sm hidden-xs">
                                    <button type="button" class="btn btn-white"><i class="fa fa-meh-o"></i></button>
                                    <button type="button" class="btn btn-white"><i
                                            class=" fa fa-paperclip"></i></button>
                                </div>

                            </div>
                            <button class="btn btn-theme" type="submit">Envoyer</button>
                        </form>
                    </footer>
                </aside>
                <aside class="right-side">

                    <table class="table table-borderless">
                        @include('conversations.users',['users' =>$users , 'unread' => $unread])
                    </table>
                </aside>
            </div>
        </div>
        <!-- page end-->
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
@endsection