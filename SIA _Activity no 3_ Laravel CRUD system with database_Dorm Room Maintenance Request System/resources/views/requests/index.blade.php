@extends('layout')

@section('content')

<h2>All Requests</h2>

@foreach($requests as $req)
    <p>
        <b>{{ $req->student_name }}</b> (Room {{ $req->room_number }})
        - {{ $req->issue_type }}

        <a href="/requests/{{ $req->id }}">View</a>
        <a href="/requests/{{ $req->id }}/edit">Edit</a>

        <form action="/requests/{{ $req->id }}" method="POST" style="display:inline;">
            @csrf
            @method ('DELETE')
            <button>Delete</button>
        </form>
    </p>
@endforeach

@endsection