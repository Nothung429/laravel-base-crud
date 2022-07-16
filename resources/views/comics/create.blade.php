@extends('homepage')

@section('page-title')
    Add a New Comic
@endsection

@section('page-content')
    <h1>Add a New Comic</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Add Image</label>
            <input type="text" class="form-control" id="image" name="thumb">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price">            
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Series</label>
            <input type="text" class="form-control" id="image" name="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Release Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Comic Type</label>
            <select class="form-select" id="type" name="type">
                <option value="graphic-novel">Graphic Novel</option>
                <option value="collection">Collection</option>
                <option value="comic-book">Comic Book</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Add</button>
    </form>
@endsection