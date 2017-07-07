@extends('day2/template1')

@section('title','view records')

@section('body')

<table border="1" width="70%" align="center">

<tr>
<th>employee id</th>
<th>first name</th>
<th>last name</th>
<th>department</th>
<th>position</th>
<th>pic</th>
</tr>

@foreach($records as $record)

<tr>
<td>{{ $record->id }}</td>
<td>{{ $record->firstname }}</td>
<td>{{ $record->lastname }}</td>
<td>{{ $record->department }}</td>
<td>{{ $record->position }}</td>
{{--   <td>{{ $record->pic }}</td> --}}

<td><img src="http://localhost/project1/public/profile/{{ $record->pic }}" width= "100" height="100" /></td> --}}
</tr>
@endforeach

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

</table>

@stop