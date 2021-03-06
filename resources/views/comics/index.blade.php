@extends('homepage')

@section('page-title')
    Homepage
@endsection

@section('page-content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>COVER</th>
                <th>TITLE</th>
                <th>PRICE</th>
                <th>RELEASE DATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td><img width="100" src="{{$comic->thumb}}"></td>                        
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}} €</td>
                    <td>{{$comic->sale_date}}</td>
                    <td class="text-center">
                        <a class="btn btn-outline-primary" href="{{route('comics.show', $comic->id)}}">View More</a>
                        <a class="btn btn-outline-warning" href="{{route('comics.edit', $comic->id)}}">Modify</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Cancel</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection