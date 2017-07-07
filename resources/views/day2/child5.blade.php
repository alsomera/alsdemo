@extends('day2/template1')

@section('title','child 5')

@section('body')
@parent
i am using stop.<br />
@stop

@section('body')
@parent
i am using endsection.<br />
{{--@endsection       data is cache like in @stop --}}
@stop

@section('body')
@parent
i am using show.<br />
{{--@show      immediate effect --}}
@stop


