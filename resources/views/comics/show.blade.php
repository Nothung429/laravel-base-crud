@extends('homepage')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>COVER</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>PRICE</th>
                <th>RELEASE DATE</th>
                <th>SERIES</th>
                <th>TYPE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img width="100" src="{{$comic->thumb}}"></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>                    
                <td>{{$comic->price}} €</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->type}}</td>
            </tr>
        </tbody>
    </table>
@endsection