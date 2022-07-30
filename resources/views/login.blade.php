@extends('layout.plantilla')
@section('TituloPagina','Login')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/create-customer.css') }}">
<br><br><br><br><br><br><br><br><br><br><br><br>
    <div>
        <form class="form" action="/" method="POST">
            @csrf
            <div class="form-group thead-dark">
                <center><h1><ion-icon name="id-card-outline"></ion-icon> Login</h1></center>
                <ion-icon name="mail-outline"></ion-icon>
                <label>Email</label>
                <input name="username" type="text" class="form-control" placeholder="Your Mail" required>
            </div>
            <div class="form-group">
                <ion-icon name="pencil-outline"></ion-icon>
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="Your Password" required>
                <small id="emailHelp" class="form-text text-muted">Remember to check the data well.</small>
            </div>
            <center>
            <button type="submit" class="btn btn-success"><ion-icon name="checkmark-outline"></ion-icon> Login</button>
            <a class="btn btn-danger" href="/register" role="button"><ion-icon name="person-add-outline"></ion-icon> Register</a>
            </center>
        </form>
    </div>
    <center>
        <footer>
           <div class="">
             <div class="container text-center">
               <p class="text-muted mb-0 py-2">© 2022 DesWeb - Grupo R.V.W.L All rights reserved.</p>
             </div>
           </div>
         </footer>
   </center>
        <script>
            const list = document.querySelectorAll('.list');
            function activeLink(){
                list.forEach((item) =>
                item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) =>
            item.addEventListener('click',activeLink));
        </script>
