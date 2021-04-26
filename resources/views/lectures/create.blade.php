@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Sukurkime klientą:</div>
               <div class="card-body">
                   <form action="{{ route('lecture.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>pavadinimas: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>aprasas: </label>
                            <input type="text" name="description" class="form-control"> 
                        </div>
                        
                        
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection