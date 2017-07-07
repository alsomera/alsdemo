@extends('day2/template1')

@section('title','Register Summary')

@section('body')

		This is a Register Summary Page <br />

fullname:
{{$data['title']}}
{{$data['text1']}}
{{$data['text3']}}
{{$data['text2']}}
<br />

birth date:{{$data['date1']}}<br />
department:{{$data['combo3']}}<br />
position:{{$data['combo4']}}<br /><br />

<a href="register">Back to Register</a>
@stop