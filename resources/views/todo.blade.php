@extends('layout.app')
@section('title')
    Here are my todos:
@endsection
@section('content')
    <div>
        @foreach($todos as $todo)
            <p>
                I have got to do {{ $todo }}
            </p>
        @endforeach
        @if(count($todos) < 4)
            <p>Pretty easy day :)</p>
        @else <p>Ohhhh noooooooo</p>
        @endif

    </div>
@endsection

