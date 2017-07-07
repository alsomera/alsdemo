@extends('day2/template1')

@section('title','view records')

@section('body')

<table border="1" width="70%" align="center">

<tr>
<th>Employee ID</th>
<th>First name</th>
<th>Last name</th>
<th>Department</th>
<th>Position</th>
<th>Pic</th>
<th>Delete</th>
<th>Update</th>
</tr>

@foreach($records as $record)

<tr>
<td>{{ $record->id }}</td>
<td>{{ $record->firstname }}</td>
<td>{{ $record->lastname }}</td>
<td>{{ $record->department }}</td>
<td>{{ $record->position }}</td>
{{--  <td>{{ $record->pic }}</td>   --}}
<td>
<img src="http://localhost/project1/profile/{{ $record->pic }}" width= "100" height="100" /></td>
<td>
<a href="deletequick/{{ $record->id }}" onclick="return confirm('sure to delete?'); ">delete</a>
</td>
<td>
<a href="updatequick/{{ $record->id }}" onclick="return confirm('sure to update?'); ">update</a>
</td>


</tr>
@endforeach

</table>

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

<center>
<a href="{{ $records-> Url(1) }}">first</a> &nbsp;
<a href="{{ $records-> previousPageUrl() }}">previous</a> &nbsp;
<a href="{{ $records-> nextPageUrl() }}">next</a> &nbsp;
<a href="{{ $records-> Url($records->lastPage()) }}">last</a> &nbsp;
</center>
@stop