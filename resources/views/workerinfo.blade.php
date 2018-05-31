@extends('layouts.start')

@section('content') 
        <p>
                <h3>ID должности = {{ $worker_id_position }}</h3>
                <h3>ID пользователя = {{ $worker_id }}</h3>
                <h3>Должность - {{$position -> n_position}}</h3>
                <h3>Зарплата - {{$position -> salary}}</h3>
                @foreach($settlementsheet as $SS)
                        <h3>Дата выдачи зарплты- {{ $SS -> pay_date}} </h3>
                @endforeach
        </p>
@endsection 
