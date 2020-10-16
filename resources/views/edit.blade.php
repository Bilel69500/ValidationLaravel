@extends('layouts.base')
@section('content')

    <div class="container mt-5">

        <form method="POST" action="/update">
            @csrf
            <div class="form-group">
                <label>Nom de la statue</label>
                <input type="text" class="form-control" name="name" value="{{ $Statue->name }}">
            </div>
            <div class="form-group">
                <label>Origine de la statue</label>
                <input type="text" class="form-control" name="country" value="{{ $Statue->country }}">
            </div>
            <div class="form-group">
                <label>Création de la statue</label>
                <input type="text" class="form-control" name="estimation" value="{{ $Statue->estimation }}">
            </div>
            <div class="form-group">

                <label>Estimation de la statue</label>
                <input type="text" class="form-control" name="creation_date" value="{{ $Statue->creation_date }}">
            </div>
            <div class="form-group">
                <label>Auteur</label>
                <textarea rows="4" class="form-control" name="artist">{{ $Statue->artist }}</textarea>
            </div>
            <input type="hidden" name="id" value="{{ $Statue->id }}">
            <button type="submit" class="btn btn-primary float-right">Modifier</button>
        </form>
    </div>

@endsection
