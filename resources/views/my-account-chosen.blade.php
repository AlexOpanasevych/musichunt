@extends('template.template')
@section('title', $title)

@section('page-content')
   <div class="container my-account">
       <h1>Особистий кабінет</h1>
       <div class="row">
           <div class="col-md-4 account-menu">
               @include('inc.my-account-menu')
           </div>
           <div class="col-md-8 left-part">
                   <div class="account-content row">
                       @if(isset($result))
                           @for($i = 0; $i < $result->count(); $i++) {{--Here should be models from DB. They must be added in @include--}}
                               <div class="col-md-4">@include('inc.chosen-item')</div>
                           @endfor
                       @endif
                   </div>
           </div>
       </div>
   </div>
@endsection
