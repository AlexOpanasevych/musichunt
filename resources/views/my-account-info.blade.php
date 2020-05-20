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
                       <form method="POST">
                           <p>Змінити ім'я:</p>
                           <label>
                               <input type="text" name="username" class="text_bar" placeholder="@if( auth()->check() ) {{ auth()->user()->name }}@endif" required> {{--Замість UserName ввести теперішнє імя користувача--}}
                           </label>
                           <button>Змінити</button>
                       </form>
                       <form method="POST">
                           <p>Змінити пароль:</p>
                           <label>
                               <input type="password" name="password" class="text_bar" placeholder="Новий пароль" required>
                           </label>
                           <button>Змінити</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
