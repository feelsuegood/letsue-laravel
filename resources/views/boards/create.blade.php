@extends('boards.layout')
@section('content')
    <h1>Create a new article</h1>
    <!-- <form action="{{route('boards.store')}}" method="post">
                                @csrf
                                <input type="text" name="subject" placeholder="Subject">
                                <textarea name="contents" placeholder="Contents"></textarea>
                                <button type="submit">Create</button>
                            </form> -->
    <form action="{{ route('boards.store') }}" method="post">
        @csrf
        <table border="1">
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" name="subject" value="">
                </td>
            </tr>
            <tr>
                <th>Contents</th>
                <td>
                    <textarea name="contents" rows="5"></textarea>
                </td>
            </tr>
            <tr>

                <td colspan="2">
                    <button type="submit">Post</button>
                </td>
            </tr>
        </table>
    </form>
@endsection