@extends('boards.layout')
@section('content')

    <a href="{{ route('boards.index') }}">List</a>

    <form action="{{ route('boards.update', $board->id) }}" method="post">
        @csrf
        @method('PUT')
        <table border="1">
            <tr>
                <th>Subject</th>
                <td><input type="text" name="subject" value="{{ $board->subject }}" /></td>
            </tr>
            <tr style="height: 100px;">
                <th>Contents</th>
                <td><textarea name="contents">{{ $board->contents }}</textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>

@endsection