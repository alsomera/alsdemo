@extends('day2/template1')

@section('title','insert')

@section('body')

<form method="post" action="insertprocess" enctype="multipart/form-data">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
first name: <input type="text" name="text1"><br />
last name:<input type="text" name="text2"><br />

department:
<select name="combo1">
<option value="hr">hr</option>
<option value="admin">admin</option>
</select><br />

position:
<select name="combo2">
<option value="boss">boss</option>
<option value="assist">assist</option>
</select><br />

pic:
<input type="file" name="file1"><br /><br />
<input type="submit" name="button1" value="submit record">
</form>
