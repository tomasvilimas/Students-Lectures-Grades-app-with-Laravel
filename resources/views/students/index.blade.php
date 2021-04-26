@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>email</th>
            <th>telefonas</th>
            
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            
            <td>
                <form action={{ route('student.destroy', $student->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('student.edit', $student->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('student.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
