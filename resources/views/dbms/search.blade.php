@extends('day2/template1')

@section('title','search')

@section('body')

<form method="post" action="searchresult">

search by  &nbsp;
<select name="combo1">
<option value="lastname">last name</option>
<option value="department">department</option>
</select> &nbsp;

<input type="text" name="text1">  &nbsp;
<input type="submit" name="button1" value="search">

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

</form>

@stop