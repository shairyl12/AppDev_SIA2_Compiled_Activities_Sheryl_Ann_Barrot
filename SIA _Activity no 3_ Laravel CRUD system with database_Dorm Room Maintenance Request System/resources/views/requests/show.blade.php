@extends('layout')

@section('content')

<h2>Request Details</h2>

<p>Name: {{ $request->student_name }}</p>
<p>Room: {{ $request->room_number }}</p>
<p>Issue: {{ $request->issue_type }}</p>
<p>Description: {{ $request->description }}</p>
<p>Status: {{ $request->status }}</p>

<a href="/requests">Back</a>

@endsection