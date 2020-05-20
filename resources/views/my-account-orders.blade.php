@extends('template.template')

@section('title', 'Особистий кабінет')

@section('page-content')
   <div class="container my-account">
       <h1>Особистий кабінет</h1>
       <div class="row">
           <div class="col-md-4 account-menu">
               @include('inc.my-account-menu')
           </div>
           <div class="col-md-8 left-part">
                   <div class="account-content row">
                      @foreach($data as $elem) {{--Here should be models from DB. They must be added in @include--}}
                            @if($loop->last)
                                @include('inc.my-orders')
                           <div style="display:block; width: 100%;font-size: 20px; font-weight: bold; color: #EEEFA9; padding-bottom: 20px">
                               <span>Всього: </span>
                               <span>99999 грн.</span>
                           </div>
                            @else
                               @include('inc.my-orders')
                                <div style="display:block; width: 100%;font-size: 20px; font-weight: bold; color: #EEEFA9; padding-bottom: 20px">
                                   <span>Всього: </span>
                                   <span>99999 грн.</span>
                                </div>
                               <div class="my-order-line"></div>
                            @endif
                      @endforeach
                   </div>
           </div>
       </div>
   </div>
@endsection
