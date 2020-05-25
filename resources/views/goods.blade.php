@extends('template.template')
@section('title', $title)

@section('page-content')
    <h3 class="header-name" style="margin: 15px">{{$title}}</h3>
    @include('inc.container')
@endsection
