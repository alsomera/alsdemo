@extends('day2/template1')

@section('title','eloq view')

@section('body')

<table border="1" width="70%" align="center">

<tr>
<th>ID</th>
<th>User name</th>
<th>password</th>
<th>created at</th>
<th>updated at</th>
</tr>

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

@foreach($records as $record)

<tr>
<td>{{ $record->id }}</td>
<td>{{ $record->username }}</td>
<td>{{ $record->password }}</td>
<td>{{ $record->created_at }}</td>
<td>{{ $record->updated_at }}</td>



{{--  <td>{{ $record->pic }}</td>  
<td>
<img src="http://localhost/project1/profile/{{ $record->pic }}" width= "100" height="100" /></td>
<td>
<a href="deletequick/{{ $record->id }}" onclick="return confirm('sure to delete?'); ">delete</a>
</td>
<td>
<a href="updatequick/{{ $record->id }}" onclick="return confirm('sure to update?'); ">update</a>
</td>
 --}}



</tr>
@endforeach

</table><br /><br />



<center>
<a href="{{ $records-> url(1) }}">first</a> &nbsp;
<a href="{{ $records-> previousPageUrl() }}">previous</a> &nbsp;
<a href="{{ $records-> nextPageUrl() }}">next</a> &nbsp;
<a href="{{ $records-> Url($records->lastPage()) }}">last</a> &nbsp;
</center>

@stop