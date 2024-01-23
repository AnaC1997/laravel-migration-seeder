@extends('layouts.app')

@section('content')
    <h1 class="text-center">Treni</h1>
    <div class="d-flex flex-wrap">
        @foreach ($treni as $treno)
        <div class="card m-3 " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> {{ $treno->azienda }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Stazione pertenza: {{ $treno->stazione_partenza }}</h6>
                <p class="card-text">Stazione arrivo: {{ $treno->stazione_arrivo }}</p>
                <p class="card-text">Orario partenza: {{ $treno->orario_partenza }}</p>
                <p class="card-text">Orario arrivo: {{ $treno->orario_arrivo }}</p>
                <a href="#" class="card-link">Numero treno:{{ $treno->codice_treno }}</a>
                <a href="#" class="card-link">Numero carrozza:{{ $treno->numero_carrozze }}</a>
            </div>
        </div>
    @endforeach
    </div>
   
@endsection
