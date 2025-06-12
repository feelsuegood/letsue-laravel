@extends('boards.layout')
@section('content')
    <!-- <a href="/boards/create">Write an article</a> -->
    <a href="{{route('boards.create')}}">Write an article</a>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Subject</th>
            <th>Created at</th>
            <th>Manage</th>
        </tr>
        @foreach ($lists as $ls)
            <tr>
                <td>{{$ls->id}}</td>
                <td>{{$ls->subject}}</td>
                <td>{{$ls->created_at}}</td>
                <td>
                    <a href="{{ route('boards.show', $ls->id)  }}">View</a>
                    <a href="{{ route('boards.edit', $ls->id)  }}">Edit</a>
                    <form action="{{ route('route.destroy', $ls->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection