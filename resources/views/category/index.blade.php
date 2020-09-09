@extends('layouts.app')
@section('content')


<div class="card-body">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Pastabos</th>
            <th>Veikmai</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->title }}</td>
            <td>{{ $category->note }}</td>
            <td>
                <form action={{ 
                        route('category.destroy', $category->id) . 
                        ( app('request')->input('product_id') !== '' 
                            ? '?product_id=' . app('request')->input('product_id') 
                            : '' )
                    }} method="POST">
                    <a class="btn btn-success" href={{ route('category.edit', $category->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                    <!--
                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary" role="button">Peržiūrėti kelionę</a>
                    -->
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('category.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection