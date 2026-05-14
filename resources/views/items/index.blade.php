@extends('layout')

@section('content')

<h2>Plant List</h2>

<ul>
@foreach($items as $item)
    <li>
        <a href="/items/{{ $item['id'] }}">
            {{ $item['name'] }}
        </a>
    </li>
@endforeach
</ul>

@endsection