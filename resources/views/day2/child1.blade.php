@extends('day2/template1')

{{-- this is a comment for blade.
@section('title', 'child1')
--}}
@section('title')
child 1
@stop

@section('body')
this is child 1 page <br/>
{{--data:{{ $data }}--}}
{{--data:{!! $data !!}--}}
data: <br />
{{ $data['a'] }} <br />
{{ $data['b'] }} <br />
{{ $data['c'] }} <br />
@stop