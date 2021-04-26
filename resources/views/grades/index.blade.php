@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>paskaita</th>
            <th>studentas</th>
            <th>pazymus</th>
            
        </tr>
        @foreach ($grades as $grade)
        <tr>
            <td>{{ $grade->lecture->name }}</td>
            <td>{{ $grade->student->name }}</td>
            <td>{{ $grade->grade }}</td>
            <td>
                <form action={{ route('grade.destroy', $grade->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('grade.edit', $grade->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('grade.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
