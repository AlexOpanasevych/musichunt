@extends('template.template')

@section('title')
    Особистий кабінет
@endsection

@section('page-content')
   <div class="container my-account">
       <h1>Особистий кабінет</h1>
       <div class="row">
           <div class="col-md-4 account-menu">
               @include('inc.my-account-menu')
           </div>
           <div class="col-md-8 left-part">
                   <div class="account-content row">
                      @foreach([0,1,2,3,4,5,6,7] as $i) {{--Here should be models from DB. They must be added in @include--}}
                           <div class="col-md-4">@include('inc/chosen-item')</div>
                      @endforeach
                   </div>
           </div>
       </div>
   </div>
@endsection
