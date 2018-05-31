@extends('layouts.start')

@foreach($workers as $worker)
    <p>       
        {{$worker -> fullname}}
        <p align="center"><a class="btn" href="{{route('workerShow', ['id_worker'=>$worker->id_worker])}}" role="button">Подробнее</a></p>
    </p>
@endforeach
