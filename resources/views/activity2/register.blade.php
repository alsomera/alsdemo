@extends('day2/template1')

{{--@section('title', 'child1')--}}
@section('title')
REGISTRY
@stop

@section('body')
This is A Registry Page <br />

<form method="get" action="registersummary">

firstname: <input type="text" name="text1"><br />
lastname: <input type="text" name="text2"><br />
middlename: <input type="text" name="text3"><br />
gender: 
<select name="combo1">
<option value="male">male</option>
<option value="female" selected>female</option>
</select>
<br />

civil status: 
<select name="combo2">
<option value="single" selected>single</option>
<option value="married">married</option>
</select>
<br />

birth date:<input type="datetime" name="date1"><br />

department: <select name="combo3">
		<option value="opd" selected>OPD</option>
		<option value="er">ER</option>
		</select> 		
<br />
position: 
<select name="combo4">
<option value="medtech" selected>Medtech</option>
<option value="doctor">Doctor</option>
</select> 
<br />

<input type="submit" name="button1" value="submit">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

</form>


@stop