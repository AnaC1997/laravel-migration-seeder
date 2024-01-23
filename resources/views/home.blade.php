@extends('layouts.app')

@section('content')
    <h1>Treni</h1>
    <ul>
        @foreach ($treni as $treno)
                <span>{{ $treno->azienda }}</span>
        @endforeach
    </ul>

@endsection