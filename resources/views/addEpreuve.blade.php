@extends('templates.app')

@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Ajouter un Cours</h1>
                    {{-- <span class="subheading">Vous avez des questions? Nous avons des réponses.</span> --}}
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{-- <p>Vous souhaitez nous contacter? Remplissez le formulaire ci-dessous pour nous envoyer un message et nous vous répondrons dans les plus brefs délais!</p> --}}
            <form method="POST" href="#">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Titre</label>
                        <input type="text" class="form-control" placeholder="Entrer le nom du cours concerner" id="name" required data-validation-required-message="S'il vous plaît entrez votre nom.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group  controls">
                        {{-- <label>Promotion</label> --}}
                        <select class="form-control">
                            <option>Choisir la promotion</option>
                            <option>Bac1</option>
                            <option>Bac2</option>
                            <option>Bac3</option>
                            <option>G1</option>
                            <option>G2</option>
                            <option>G3</option>
                            <option>L1</option>
                            <option>L2</option>
                            <option>Master 1</option>
                            <option>Master 2</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group  controls">
                        {{-- <label>Promotion</label> --}}
                        <select class="form-control">
                            <option>Choisir la faculté</option>
                            <option>Sciences</option>
                            <option>Polytechnique</option>
                            <option>Medecine</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group  controls">
                        {{-- <label>Promotion</label> --}}
                        <select class="form-control">
                            <option>Choisir l'université</option>
                            <option>UNILU</option>
                            <option>ISC</option>
                            <option>UPL</option>
                            <option>UNH</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group  controls">
                        {{-- <label>Promotion</label> --}}
                        <select class="form-control">
                            <option>Choisir la categorie du fichier</option>
                            <option>Cours</option>
                            <option>Examens</option>
                            <option>Interrogation</option>
                            <option>TP</option>
                            <option>TD</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group  controls">
                        <select class="form-control">
                            <option>Choisir l'année d'emission du fichier</option>
                            @for($i=2000; $i <= date('Y'); $i++))
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor; ?>
                        </select>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Ajouter</button>
            </form>
        </div>
    </div>
</div>

<hr>
@endsection
