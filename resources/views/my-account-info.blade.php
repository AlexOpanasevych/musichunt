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
               <div class="account-content">
                   <div class="my-info">
                       <form action="{{url()->current()}}/change-password" method="POST">
                           @csrf
                           <p>Змінити пароль:</p>
                           <label>
                               <input type="password" name="password" class="text_bar" placeholder="Новий пароль" required>
                           </label>
                           <label>
                               <input type="password" name="password-repeat" class="text_bar" placeholder="Повторіть новий пароль" required>
                           </label>

                               @if($errors->any())
                                   <div class="alert">
                                   @foreach($errors->all() as $message)
                                       <p style="font-size: 15px">{{$message}}</p>
                                   @endforeach
                                   </div>
                               @endif
                           <button type="submit">Змінити</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
