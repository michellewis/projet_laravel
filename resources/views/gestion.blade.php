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
        <!--row -->
        <div class="row">
            <div class="col-md-12">
                <div class="content-panel mt-3">
                    <h4><i class="fa fa-angle-right"></i> liste des utilisateurs</h4>
                    <hr>
                    <table class="table table-bordered table-striped mt-3" id="utilisateurs">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th> Name</th>
                                <th>Email </th>
                                <th>region</th>
                                <th>Numéro de téléphone</th>
                                <th>Mot de Passe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->region }}</td>
                                <td>{{ $user->numero }}</td>
                                <td>{{ $user->password }}</td>
                                <td class="table-buttons">
                                    <a href="" class="btn btn-success">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#editUser">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#delUser">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- contents pannel -->
                </div>
                <button type=" button" class="btn btn-theme mt-3 mt- info float-right" data-toggle="modal" data-target="#addUser">creer utilisateur</button>
                <!-- col-md-12 -->
            </div>
            <!-- Row -->
        </div>



        <!-- Modal -->
        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Ajouter</h4>
                    </div>
                    <div class="modal-body">
                        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="gestion">

                            {{ csrf_field() }}
                            <div class="row mt">
                                <div class="col-lg-12">
                                    <h4><i class="fa fa-user-plus"></i>creation des utilisateurss</h4>
                                    <div class="form-panel">
                                        <div class="form">

                                            <div class="form-group ">
                                                <label for="name" class="control-label col-lg-2">name</label>
                                                <div class="col-lg-10">
                                                    <input class=" form-control" id="name" name="name" type="text" />
                                                </div>
                                            </div>


                                            <div class="form-group ">
                                                <label for="password" class="control-label col-lg-2">Password</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control " id="password" name="password" type="password" />
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label for="email" class="control-label col-lg-2">Email</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control " id="email" name="email" type="email" />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="region" class="control-label col-lg-2">region</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control " id="region" name="region" type="text" />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="numero" class="control-label col-lg-2">numero</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control " id="numero" name="numero" type="text" />
                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                </div>
                                <!-- /form-panel -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="enregistrer">
                            </div>

                    </div>
                    <!-- /row -->

                </div>

            </div>
        </div>
        </form>
        </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>
                    <div class="modal-body">
                        <!-- /row -->
                        <div class="row mt">
                            <div class="col-lg-12">
                                <h4><i class="fa fa-pencil"></i> Modifier Utilisateur</h4>

                                <div class="form">
                                    <form class="cmxform form-horizontal style-form" id="editForm" method="POST" action="gestion">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group ">
                                            <label for="name" class="control-label col-lg-2">Nom(s)</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="nomUser" name="nomUser" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="email" class="control-label col-lg-2">Email</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="emailUser" name="emailUser" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="region" class="control-label col-lg-2">region</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="region" name="region" type="text" />
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label for="numero" class="control-label col-lg-2">numero</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="tel" name="tel" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="mdp" class="control-label col-lg-2">mot de passe</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="mdp" name="mdp" type="text" />
                                            </div>
                                        </div>


                                </div>

                            </div>
                            <!-- /col-lg-12 -->
                        </div>
                        <!-- /row -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" type="submit" value="Modifier">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="delUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Suppression</h4>
                    </div>
                    <div class="modal-body">
                        <form class="cmxform form-horizontal style-form" id="deleteForm" method="POST" action="gestion">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <input type="hidden" class="method" value="DELETE">
                            <p>Êtes-vous sûr(e) de vouloir supprimer ?
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" type="submit" value="supprimer">
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        </div>





    </section>
</section>
<script src="lib/common-scripts.js"></script>



@endsection