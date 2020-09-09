@extends('layouts.app')
@section('content')

<div class="card-body">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Aprasymas</th>
            <th>Kaina</th>
            <th>Kategorija</th>
        </tr>
        <tr>
            <td>{{ $product->title }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->title }}</td>
        </tr>
    </table>
</div>
@endsection