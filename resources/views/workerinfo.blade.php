@extends('layouts.start')

@section('content') 
        <p>
                <h3>Fullname - {{ $worker_fullname }}</h3>
                <h3>ID user - {{ $worker_id }}</h3>
                <h3>Position - {{$position -> n_position}}</h3>
                <h3>Salary - {{$position -> salary}}</h3>
                @foreach($settlementsheet as $SS)
                        <h3>ID SS - {{$SS -> id_settlement_sheet}}</h3>
                        <h3>Sick leave - {{$SS -> sick_leave}}</h3>
                        <h3>Annual leave - {{$SS -> annual_leave}}</h3>
                        <h3>Awards- {{ $SS -> awards_fine}} </h3>
                        <h3>Hours- {{ $SS -> hours}} </h3>
                        <h3>Pay date- {{ $SS -> pay_date}} </h3>
                        @break
                @endforeach
        </p>
        <!-- <button type="submit" class="btn btn-success" href="{{route('addSS', ['id_worker'=>$worker->id_worker])}}">
                Settlement Sheet
        </button> -->
        <p><a class="btn btn-success" href="{{route('addSS', ['id_worker'=>$worker->id_worker])}}" role="button">Settlement Sheet</a></p>
@endsection 

