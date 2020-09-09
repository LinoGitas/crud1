@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Nauja preke:</div>
               <div class="card-body">
                   <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Pavadinimas: </label>
                            <input type="text" name="title" class="form-control">
                            @error('title')
                                <br><div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kaina: </label>
                            <input type="text" name="price" class="form-control"> 
                            @error('price')
                                <br><div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                           <label>Aprasymas: </label>
                           <textarea id="mce" name="description" rows=10 cols=100 class="form-control"></textarea>
                           @error('description')
                                <br><div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                       </div>
                        <div class="form-group">
                            <label>Kategorija: </label>
                            <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                                 <option value="" selected disabled>Pasirinkite</option>
                                 @foreach ($categories as $category)
                                 <option value="{{ $category->id }}">{{ $category->title }}</option>
                                 @endforeach
                            </select>
                        </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection