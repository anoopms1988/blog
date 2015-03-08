@extends('app')

@section('content')
     @foreach($articles as $articlesKey=>$articlesValue)
       
        <a href="{{action('ArticlesController@show',$articlesValue->id)}}">{{{$articlesValue->name}}}</a>

     @endforeach
@stop
