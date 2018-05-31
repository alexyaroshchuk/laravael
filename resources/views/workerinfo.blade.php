@extends('layouts.start')

@section('content') 
        <p>
                <h3>ID должности = {{ $worker_id_position }}</h3>
                <h3>ID пользователя = {{ $worker_id }}</h3>
                @foreach($settlementsheet as $SS)
                        <h3>ID settlement = {{ $SS -> id_settlement_sheet}} </h3>
                @endforeach
        </p>
@endsection 
