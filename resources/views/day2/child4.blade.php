@extends('day2/template1')

@section('title','child 4')

@section('body')

		this is child 4 page <br />

		@php
		echo "hello there";
		@endphp

		<br />
{{--		status:{{$data}}   --}}

		@if($x >= 75)
			status:passed
		@else
			status:failed
		@endif

@stop