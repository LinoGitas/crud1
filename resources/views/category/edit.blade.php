@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Redagavimas</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('category.update', $category->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pavadinimas</label>
                            <input type="text" name="title" class="form-control" value="{{ $category->title }}">
                            @error('title')
                                <br><div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Pastaba</label>
                            <input type="text" name="note" class="form-control" value="{{ $category->note }}">
                            @error('note')
                                <br><div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                     
                        <button type="submit" class="btn btn-primary">Issaugoti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection