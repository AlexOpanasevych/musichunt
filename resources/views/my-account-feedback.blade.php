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
                       <form action="{{url()->current()}}/send" method="POST">
                           @csrf
                           <p>Ваше повідомлення:</p>
                           <label>
                                <textarea id="message-form" name="message" rows="7"
                                     placeholder="Повідомлення (не менше 20 символів)" minlength="20" maxlength="500"
                                         required></textarea>
                           </label>
                           <button type="submit">Надіслати</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
