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
            <label for="message" >Message</label>

            <p>
                <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message à envoyer ici" ></textarea>
                {{ $errors->first('message', ":message")}}
            </p>
            <button type="submit" class="btn btn-warning" >Envoyer</button>
        </form>
    </div>
    <!--/body-->
@endsection


