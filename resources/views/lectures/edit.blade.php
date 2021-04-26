@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime paskaitos informaciją</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('lecture.update', $lecture->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label>Paskaita: </label>
                            <input type="text" name="name" class="form-control" value="{{ $lecture->name }}">
                        </div>
                        <div class="form-group">
                            <label>Aprašymas: </label>
                            <input type="text" name="description" class="form-control" value="{{ $lecture->description }}"> 
                        </div>
                        
                      
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
