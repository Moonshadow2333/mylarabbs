@extends('layouts.app')
@section('title','话题')
@section('content')
  <h1>title - {{$topic->title}}</h1>
  <p>content - {{$topic->body}}</p>
@stop
