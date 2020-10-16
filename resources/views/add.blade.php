@extends('layouts.base')


@section('content')

    <main>
        <h1>Ajoutez la statues de votre choix </h1>
        <form method="POST" action="/ajout">
            @csrf
            <div class="form-group ">
                <label for="name">Nom de la statue</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Entrer le nom de la statue"
                    value="Statue">

            </div>
            <div class="form-group">
                <label for="country">Origine de la statue</label>
                <input name="country" type="texte" class="form-control" id="genre"
                    placeholder="Renseignez le pays de la statue" value="France">

            </div>
            <div class="form-group">
                <label for="creation_date">Date de Création de la statue</label>
                <input name="creation_date" type="text" class="form-control" id="creation_date"
                    placeholder="La création de la statue" value="1978">
            </div>

            <div class="form-group">
                <label for="estimation">Estimation de la statue</label>
                <input name="estimation" type="texte" class="form-control" id="estimation"
                    placeholder="Le prix de la statues" value="1000">
            </div>

            <div class="form-group">
                <label for="artist"> Créateur de la statue</label>
                <input name="artist" type="texte" class="form-control" id="artist" placeholder="Renseignez l'artiste'"
                    value="Gab">

            </div>


            <button type="submit" class="btn btn-primary">Ajoute la statues!</button>

        </form>

    </main>
@endsection
