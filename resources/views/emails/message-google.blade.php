@extends('layout')

@section('title', "Envoi de message")

@section('content')

    <!--body style="background: #e5e5e5; padding: 30px;" -->

    <div class="container">
        @if (session()->has('text'))
            <p>{{ session('text') }}</p>
        @endif

        <form url="{{ route('send.message.google') }}" method="POST" >
            {{ @csrf_field() }}
            <h1 class="text-center">Envoie de mail</h1>
            <div>
                <label for="email">Adresse email</label>
                <input class="form-control" type="email" name="email" placeholder="Ex:exemple@gmail.com" autocomplete="additional-name">
                {{ $errors->first("email", ":email")}}
            </div>
            <br>
            <div>
                <label for="message" >Message</label>
                <p>
                    <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message à envoyer ici" ></textarea>
                    {{ $errors->first('message', ":message")}}
                </p>
            </div>

            <button type="submit" class="btn btn-warning" >Envoyer</button>
        </form>
    </div>
    <!--/body-->
@endsection


