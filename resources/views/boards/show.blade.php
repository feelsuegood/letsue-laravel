@extends('boards.layout')
@section('content')

    <a href="{{ route('boards.index') }}">List</a>

    <table border="1">
        <tr>
            <th>Subject</th>
            <td>{{ $board->subject }}</td>
        </tr>
        <tr style="height: 100px;">
            <th>Contents</th>
            <td>{{ $board->contents }}</td>
        </tr>
    </table>

@endsection