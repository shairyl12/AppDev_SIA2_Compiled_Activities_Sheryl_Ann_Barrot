@extends('layout')

@section('content')

<h2>Submit Maintenance Request</h2>

<form action="/requests" method="POST">
    @csrf

    Name: <input type="text" name="student_name"><br>
    Room: <input type="text" name="room_number"><br>

    Issue:
    <select name="issue_type">
        <option>Electrical</option>
        <option>Plumbing</option>
        <option>Furniture</option>
        <option>Cleaning</option>
    </select><br>

    Description:
    <textarea name="description"></textarea><br>

    <button type="submit">Submit</button>
</form>

@endsection