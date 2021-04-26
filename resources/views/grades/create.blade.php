@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Pažymių įvedimas:</div>
               <div class="card-body">
                   <form action="{{ route('grade.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                            <label for="">Pažymys: </label>
                            <input type="text" name="grade" class="form-control">
                        </div>
                        
                       <div class="form-group">
                           <label>Studentas: </label>
                           <select name="student_id" id="" class="form-control">
                                <option value="" selected disabled>Pasirinkite studentą</option>
                                @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                              
                                
                           </select>
                       </div>
                       <div class="form-group">
                        <label>Paskaita: </label>
                        <select name="lecture_id" id="" class="form-control">
                             <option value="" selected disabled>Pasirinkite paskaitą</option>
                             @foreach ($lectures as $lecture)
                             <option value="{{ $lecture->id }}">{{ $lecture->name }}</option>
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
