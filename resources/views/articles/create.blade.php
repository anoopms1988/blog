@extends('app')
@section('content')
{!! Form::open(['url'=>'articles/save']) !!}
{!! Form::label('name', 'Name') !!}
{!! Form::text('name') !!}
<br>
{!! Form::text('body') !!}
<input type="submit" name="submit" value="Submit">

{!!Form::close() !!}
@stop

