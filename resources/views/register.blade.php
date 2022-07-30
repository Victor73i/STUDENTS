@extends('layout.plantilla')
@section('TituloPagina','Register')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/create-customer.css') }}">
        <br><br><br><br><br><br><br><br><br><br>
    <div>
        <form class="form" action="/register" method="POST">
            @csrf
            <div class="form-group">

                <center><h1><ion-icon name="person-add-outline"></ion-icon> Register</h1></center>
                <ion-icon name="person-outline"></ion-icon>
                <label>Username </label>
                <input name="username" type="text" class="form-control" placeholder="Your Username" required>
            </div>
            <div class="form-group">
                <ion-icon name="mail-outline"></ion-icon>
                <label>Email </label>
                <input name="email" type="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <ion-icon name="compass-outline"></ion-icon>
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="Your Password" required>
            </div>
            <div class="form-group">
                <ion-icon name="compass-outline"></ion-icon>
                <label>Password Confirmation</label>
                <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm your password" required>
                <small id="emailHelp" class="form-text text-muted">Remember to check the data well.</small>
            </div>
            <input class="sm" type="checkbox" style="align-content: initial" required>
            <a href="/terms" style="background: transparent" id="emailHelp" class="form-text text-muted">Terms and Conditions.</a>
            <center>
            <button type="submit" class="btn btn-success"><ion-icon name="checkmark-outline"></ion-icon>Save</button>
            <button type="reset" style="color: #fff;" class="btn btn-warning"><ion-icon name="trash-outline"></ion-icon>Delete</button>
            <a class="btn btn-danger" href="/" role="button"><ion-icon name="return-down-back-outline"></ion-icon> Go Back</a>
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
