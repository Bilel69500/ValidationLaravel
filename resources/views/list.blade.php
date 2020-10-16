@extends('layouts.base')
@section('content')

    <main>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Origine</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Estimation</th>
                    <th scope="col">Artiste</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statue as $information)
                    <td><img src="img/img2.png" alt=""></td>
                    <td>{{ $information->name }}</td>
                    <td>{{ $information->country }}</td>
                    <td>{{ $information->creation_date }}</td>
                    <td>{{ $information->estimation }} €</td>
                    <td>{{ $information->artist }}</td>
                    <td>

                        <form action="/delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $information->id }}">
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                            <a class="btn btn-primary" href="{{ url('edit/' . $information->id) }}">Modifier</a>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
