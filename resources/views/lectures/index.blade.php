@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Aprašas</th>
            
        </tr>
        @foreach ($lectures as $lecture)
        <tr>
            <td>{{ $lecture->name }}</td>
            <td>{{ $lecture->description }}</td>
            
            <td>
                <form action={{ route('lecture.destroy', $lecture->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('lecture.edit', $lecture->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('lecture.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
