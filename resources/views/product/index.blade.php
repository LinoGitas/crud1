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
            <th>Veiksmai</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->title }}</td>
            <td>{!! $product->description !!}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->title }}</td>
            <td>
                <form action={{ 
                        route('product.destroy', $product->id) . 
                        ( app('request')->input('product_id') !== '' 
                            ? '?product_id=' . app('request')->input('product_id') 
                            : '' )
                    }} method="POST">
                    <a class="btn btn-success" href={{ route('product.edit', $product->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary" role="button">Perziura</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('product.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection