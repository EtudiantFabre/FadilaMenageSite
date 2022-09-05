<<<<<<< HEAD
@extends('layout')

 @section('title','Manifestation')

 @section('content')
 <h1>Enregistrez une manifestation : </h1>
<div class="container mt-5">
    @if (count($errors) > 0)
        <!-- Form Error List -->
        <div class="alert alert-danger">
            <strong>Whoops! Something went wrong!</strong>

            <br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('societes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Sigle : </label>
            <input type="text"   name="sigle" id="sigle">
        </div>

        <div class="form-group">
            <label>Description : </label>
            <input type="text"   name="description" id="description">
        </div>

        <div class="form-group">
            <label>Date d'offre : </label>
            <input type="date"   name="date_offre" id="date_offre">
        </div>

        <div class="form-group">
            <label>Domaine d'offire : </label>
            <input type="text"   name="domaine" id="domaine">
        </div>

        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">

    </form>

</div>
@endsection



