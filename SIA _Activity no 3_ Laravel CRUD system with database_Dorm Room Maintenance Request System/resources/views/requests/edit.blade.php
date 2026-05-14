@extends('layout')

@section('content')

<h2>Edit Request</h2>

<form action="/requests/{{ $request->id }}" method="POST">
    @csrf
    @method('PUT')

    Name: <input type="text" name="student_name" value="{{ $request->student_name }}"><br>
    Room: <input type="text" name="room_number" value="{{ $request->room_number }}"><br>

    Issue: <input type="text" name="issue_type" value="{{ $request->issue_type }}"><br>

    Description:
    <textarea name="description">{{ $request->description }}</textarea><br>

    Status:
    <select name="status">
        <option {{ $request->status == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option {{ $request->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
        <option {{ $request->status == 'Resolved' ? 'selected' : '' }}>Resolved</option>
    </select>

    <button>Update</button>
</form>

@endsection