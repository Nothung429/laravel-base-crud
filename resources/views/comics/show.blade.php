@extends('homepage')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <h1 class="text-center">Comic</h1>
    <div class="container-custom">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>TITOLO</th>
                    <th>DESCRIZIONE</th>
                    <th>COPERTINA</th>
                    <th>PREZZO</th>
                    <th>DATA D'USCITA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td><img src="{{$comic->thumb}}"></td>
                    <td>{{$comic->price}} €</td>
                    <td>{{$comic->sale_date}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection