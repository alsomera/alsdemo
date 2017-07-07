@extends('day2/template1')

@section('title','update')

@section('body')

<form method="post" action="updatedisplay">

search by  &nbsp;
<select name="combo1">
<option value="id">employee id</option>
<option value="lastname">lastname</option>
</select> &nbsp;

<input type="text" name="text1">  &nbsp;
<input type="submit" name="button1" value="update">

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

</form>

@stop