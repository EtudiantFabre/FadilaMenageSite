@extends('layout')
@section('title', 'Envoi de mail')

@section('content')

<body>
    <h2>Prise de contact sur mon beau site</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : Toyi{{-- $contact['nom'] --}}</li>
      <li><strong>Email</strong> : Fabrice{{-- $contact['email'] --}}</li>
      <li><strong>Message</strong> : Message{{-- $contact['message'] --}}</li>
    </ul>
</body>

@endsection