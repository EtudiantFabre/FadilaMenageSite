@extends('layout')
@section('title','Candidature')

@section('content')
<div class="card">
  <div class="card-body">

    <h1>Deposez votre candidature : </h1>

    <form action="{{ route('candidats.store') }}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
            <label>Nom : </label>
            <input type="text"   name="nom" id="nom">
        </div>

        <div class="form-group">
            <label>Prenom : </label>
            <input type="text"   name="prenom" id="prenom">
        </div>

        <div class="form-group">
            <label>Date de naissance : </label>
            <input type="date"   name="gente" id="genre">
        </div>

        <div class="form-group">
            <label>Lieu de naissance : </label>
            <input type="text"   name="lieu_naissance" id="lieu_naissance" placeholder="ville(pays)">
        </div>
        <div class="form-group">
            <label>Genre : </label>
            <input type="text"   name="genre" id="genre" placeholder="sexe">
        </div>
        <div class="form-group">
            <label>Nationalité : </label>
            <input type="text"   name="nationalite" id="nationalite" placeholder="Ex: Togolaise">
        </div>
        <div class="form-group">
            <label>Pièce d'identité : </label>
            <input type="text"   name="domaine" id="domaine" placeholder="Ex: carte d'elcecteur ou carte nationale ou passport">
        </div>
        <div class="form-group">
            <label>Numéro de la pièce : </label>
            <input type="text"   name="domaine" id="domaine" placeholder="le numero de la carte/passport">
        </div>
        <div class="form-group">
            <label>Date de delivrance : </label>
            <input type="date"   name="domaine" id="domaine" placeholder="fait le">
        </div>
        <div class="form-group">
            <label>Date d'expiration : </label>
            <input type="date"   name="domaine" id="domaine" placeholder="Expire le ">
        </div>
        <div class="form-group">
            <label>Ville résidence : </label>
            <input type="text"   name="ville" id="ville" placeholder="ville où vous résidez">
        </div>
        <div class="form-group">
            <label>Quartier : </label>
            <input type="text"   name="quartier" id="quartier" placeholder="votre qaurtier">
        </div>
        <div class="form-group">
            <label>Rue : </label>
            <input type="text"   name="rue" id="rue" placeholder="nom du rue">
        </div>
        <div class="form-group">
            <label>Email : </label>
            <input type="mail"   name="email" id="email" placeholder="votre addresse e-mail">
        </div>
        <div class="form-group">
            <label>Situation matrimoniale : </label>
            <input type="text"   name="situationfamille" id="situationfamille" placeholder="marier ou célibataire ?">
        </div>
        <div class="form-group">
            <label>Nombre d'enfant en charge : </label>
            <input type="text"   name="nbrenfan" id="nbrenfant" placeholder="combien d'enfants aveez-vou?">
        </div>
        <div class="form-group">
            <label>Profession : </label>
            <input type="text"   name="profession" id="profession" placeholder="votre profession actuel">
        </div>
        <div class="form-group">
            <label>Photo d'identité : </label>
            <input type="text"   name="photo_id" id="photo_id">
        </div>
        <div class="form-group">
            <label>Avatar : </label>
            <input type="text"   name="avatar" id="avatar" placeholder="avatar">
        </div>
        <div class="form-group">
            <label>Numéro de téléphone" : </label>
            <input type="text"   name="telephone" id="telephone" placeholder="votre numéro de téléphone">
        </div>
        <div class="form-group">
            <input type="select">
                <label>Les horaires de travail souhaité : </label>
                <option valeur="fr"> </option>
                <option valeur="fr">Français</option>
                <option valeur="nl">Néerlandais</option>
                <option valeur="en">Anglais</option>
                <option valeur="other">Autre</option>
        </div>
        <div class="form-group">
            <label>Objectif : </label>t
			<textarea name="objectif" id="objectif" lang="fr" rows="10" cols="50" placeholder="Votre objectif pour ce candidature" ></textarea>
        </div>
        <div class="form-group">
            <label>Qualité personnels : </label>t
			<textarea name="qualite" id="qualite" lang="fr" rows="10" cols="50" placeholder="Vos qualités personnelles" ></textarea>
        </div>
        <div class="form-group">
            <label>Savoir faire : </label>t
			<textarea name="savoir faire" id="savoir faire" lang="fr" rows="10" cols="50" placeholder="Vos qualités personnelles" ></textarea>
        </div>
        <div class="form-group">
            <label>Disponible à logere : </label>
            <input type="text"   name="diponible" id="disponible" placeholder="Estes vous dispnible à loger">
        </div>
        <div class="form-group">
            <input type="select">
            <option valeur="fr"> </option>
                <label>Nature de contrat : </label>
                <option valeur="fr">Français</option>
                <option valeur="nl">Néerlandais</option>
                <option valeur="en">Anglais</option>
                <option valeur="other">Autre</option>
        </div>
             <div class="form-group">
            <input type="select">
            <label>Horaire de travail passé : </label>
            <option valeur="fr"> </option>
            <option valeur="fr">Temps plein</option>
             <option valeur="nl">Mis temps</option>
             <option valeur="en">Temps partiel</option>
             <option valeur="other">Autre</option>
        </div>
        <div class="form-group">
            <label>Lieu de naissance : </label>
            <input type="text"   name="domaine" id="domaine" placeholder="ville(pays)">
        </div>

        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">

    </form>


  </div>
</div>
@stop
