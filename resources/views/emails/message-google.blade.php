@extends('layout')

@section('title', "Envoi de message")

@section('content')

    <!--body style="background: #e5e5e5; padding: 30px;" -->


        @if (session()->has('text'))
            <p>{{ session('text') }}</p>
        @endif

        <form url="{{ route('send.message.google') }}" method="POST" >
            <label for="message" >Message</label>
            {{ @csrf_field() }}
            <p>
                <textarea name="message" id="message" rows="4" placeholder="Message à envoyer ici" ></textarea>
                {{ $errors->first('message', ":message")}}
            </p>
            <button type="submit" >Envoyer</button>
        </form>
        
    <!--/body-->
@endsection


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Le formulaire d'envoi du message</title>
</head>
<body>

	@if (session()->has('text'))
	<p>{{ session('text') }}</p>
	@endif

	<form url="{{ route('send.message.google') }}" method="POST" >
		<label for="message" >Message</label>
		{{ @csrf_field() }}
		<p>
			<textarea name="message" id="message" rows="4" placeholder="Message à envoyer ici" ></textarea>
			{{ $errors->first('message', ":message")}}
		</p>
		<button type="submit" >Envoyer</button>
	</form>

</body>
</html>