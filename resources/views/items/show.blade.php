@extends('layout')

@section('content')

<h2>Plant Details</h2>

<p><strong>Name:</strong> {{ $item['name'] }}</p>
<p><strong>Type:</strong> {{ $item['type'] }}</p>
<p><strong>Watering Schedule:</strong> {{ $item['water'] }}</p>

<br>
<a href="/items">⬅ Back to List</a>

@endsection