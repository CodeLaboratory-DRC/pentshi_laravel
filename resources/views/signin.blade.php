@extends('templates.app')
@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>S'inscrire</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form method="POST">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Nom d'utilisateur</label>
                        <input type="text" class="form-control" placeholder="Prenom" id="email" data-validation-required-message="Veuillez saisir votre adresse e-mail.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Phone/Mail</label>
                        <input type="text" class="form-control" placeholder="Numero de téléphone ou email" id="email" data-validation-required-message="Veuillez saisir votre adresse e-mail.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 controls">
                        <select class="form-control">
                            <option>Votre Domaine</option>
                            <option>Informatiques</option>
                            <option>Geologie</option>
                            <option>Chimie</option>
                            <option>Math</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" id="phone" data-validation-required-message="Veuillez entrer votre numéro de téléphone.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Valider</button>
            </form>


        </div>
    </div>
</div>

<hr>
@endsection
