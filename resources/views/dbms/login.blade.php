@extends('day2/template1')

@section('title','login')

@section('body')
<center>
<form method="post" action="logincheck">

username: <input type="text" name="text1"><br />
password: <input type="password" name="text2"><br />
<input type="submit" name="button1" value="login">

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


</form>

@stop