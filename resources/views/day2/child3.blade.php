@extends('day2/template1')

{{--@section('title', 'child1')--}}
@section('title')
child 3
@stop

@section('body')
this is child 3 page <br />

firstname: {{$data['fn']}}<br />
lastname:{{$data['ln']}}<br />


@stop