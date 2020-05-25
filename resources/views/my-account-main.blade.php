@extends('template.template')

@section('title', 'Особистий кабінет')

@section('page-content')
   <div class="container my-account">
       <h1>Особистий кабінет</h1>
       <div class="flex-row-reverse row">
           <div class="col-md-8 left-part">
               <div class="account-content-main" style="background-image: url({{asset('images/my-account-back.jpg')}})">
                   <div>
                    <span>Ласкаво просимо до особистого кабінету</span>
                   </div>
               </div>
           </div>
           <div class="col-md-4 account-menu">
               @include('inc.my-account-menu')
           </div>
       </div>
   </div>
@endsection
