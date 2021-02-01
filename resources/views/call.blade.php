@extends('layouts.homelay')


@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row mb-2">
            <div style="padding-left: 20px; padding-top: 20px;">
                <h1>Votre réunion a commencé</h1>
                <span>En attente de participant(s)...</span>
            </div>
        </div>
        <div class="chat-room mt">
            <aside class="mid-side" style="height: 590px;">
                <div id="me" class="" style="position: relative;">
                    <!--<div id="canvas-container"></div>-->
                    <footer style="width: 100%; text-align: center; z-index: 2;">
                        <div class="group-row">
                            <div>
                                <button class="float-left" style="border: none; background: transparent;"><i class="fa fa-microphone-slash" style="color: white;"></i>
                                    <p style="color: white;">Couper le son</p>
                                </button>
                                <button class="float-left" style="border: none; background: transparent;"><i class="fa fa-video-camera" style="color: white;"></i>
                                    <p style="color: white;">Arrêter la vidéo</p>
                                </button>
                                <button style="border: none; background: transparent;"><i class="fa fa-user-plus" style="color: white;"></i>
                                    <p style="color: white;">Inviter</p>
                                </button>
                                <button style="border: none; background: transparent;"><i class="fa fa-users" style="color: white;"></i>
                                    <p style="color: white;">Participants</p>
                                </button>
                                <button style="border: none; background: transparent;"><i class="fa fa-desktop" style="color: white;"></i>
                                    <p style="color: white;">Ecran Partagé</p>
                                </button>
                                <button style="border: none; background: transparent;"><i class="fa fa-comments" style="color: white;"></i>
                                    <p style="color: white;">Chats</p>
                                </button>
                                <a href="home" class="float-right" style="border: none; background: transparent;" id="leave" onclick="leave()"><i class="fa fa-sign-out" style="color: white;"></i>
                                    <p style="color: white;">Quitter</p>
                                </a>
                            </div>
                        </div>
                    </footer>
                </div>
            </aside>
            <aside class="right-side">
                <div class="user-head" style="text-align: center;">
                    <button type="button" class="btn btn-white"><i class="fa fa-comments-o"></i></button>
                    <h4 class="">Conversation de groupe</h4>
                </div>
                <div style="padding-left: 10px; padding-top: 10px;">
                    <h5>De moi à <span style="color: blue;">Tout le monde :</span></h5>
                    <span>Bonjour à toute l'équipe.</span>
                </div>
                <div style="padding-left: 10px; padding-top: 10px;">
                    <h5>De <span style="color: blue;">Dongmo</span> à <span style="color: blue;">Tout le monde :</span></h5>
                    <span>Passons directement à l'éssentiel, merci.</span>
                </div>
                <div style="padding-left: 10px; padding-top: 10px;">
                    <h5>De moi à <span style="color: blue;">Tout le monde :</span></h5>
                    <span>Quelqu'un pour nous faire un recap de la semaine ?.</span>
                </div>
                <div style="padding-left: 10px; padding-top: 10px;">
                    <h5>De <span style="color: blue;">Essam Arthur</span> à <span style="color: blue;">Tout le monde :</span></h5>
                    <span>Que des retours positifs concernant le déploiements de toutes les app.</span>
                </div>
                <footer>
                    <div class="group-row">
                        <div style="font-size: 10px;">Envoyer à :
                            <button style="background-color: #E5E8EF; border: none; border-radius: 3px;">Tout le monde
                                <i class="fa fa-sort-desc"></i>
                            </button>
                            <button style="border: none; background-color: white; padding-left: 30px;">
                                <i class="fa fa-file-pdf-o"></i>
                                Fichier
                            </button>
                        </div>
                    </div>
                    <div class="chat-txt">
                        <input type="text" class="" id="sms" placeholder="Saisie le message ici..." style="border: none; font-size: 12px; padding-top: 5px;">
                    </div>
                </footer>
            </aside>
        </div>
        <h4>Remote Feeds :</h4>
        <div id="remote-container">

        </div>
      
    </section>
</section>
@endsection
<script src="js/AgoraRTCSDK-2.4.0.js"></script>
<script src="js/script.js"></script>