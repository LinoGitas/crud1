@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Nauja kategorija:</div>
               <div class="card-body">
                   <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Pavadinimas: </label>
                            <input type="text" name="title" class="form-control">
                            @error('title')
                                <br><div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pastabos: </label>
                            <input type="text" name="note" class="form-control"> 
                            @error('note')
                                <br><div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection