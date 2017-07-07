@extends('day2/template1')

@section('title','update form')

@section('body')

@foreach($records as $record)

<form method="post" action="updateprocess">

employee id:
<input type="text" name="text0" value="{{ $record->id }}" readonly><br />

first name:
<input type="text" name="text1" value="{{ $record->firstname }}"><br />

last name:
<input type="text" name="text2" value="{{ $record->lastname }}"><br />

department:
<input type="text" name="text3" value="{{ $record->department }}"><br />

position:
<input type="text" name="text4" value="{{ $record->position }}"><br />


<input type="submit" name="button1" value="update">

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

</form>

@endforeach

@stop