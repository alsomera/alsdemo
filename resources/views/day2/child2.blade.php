@extends('day2/template1')

{{--@section('title', 'child1')--}}
@section('title')
child 2
@stop

@section('body')
this is child 2 page <br />

<form method="post" action="child3">

firstname: <input type="text" name="text1"><br />
lastname: <input type="text" name="text2"><br />
<input type="submit" name="button1" value="click">

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

</form>


@stop