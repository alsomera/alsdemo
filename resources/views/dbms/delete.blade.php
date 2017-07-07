@extends('day2/template1')

@section('title','delete')

@section('body')

<form method="post" action="deleteprocess" onsubmit="return confirm('sure to delete?');">

enter employee id to delete:
<input type="text" name="text1">  &nbsp;
<input type="submit" name="button1" value="delete">

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

</form>

@stop