@extends('layout.plantilla')
@section('TituloPagina','Customer Create')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/create-customer.css') }}">
        <br><br>
        <center>
        <div class="navigation">
            <ul>

                <li class="list active">
                    <a href="/welcome">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="{{ route('customers.index') }}">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="text">Category List</span>
                    </a>
                </li>
            </ul>
        </div>
    </center>
    <div>
        <center><h2><ion-icon name="accessibility-outline"></ion-icon> Add Customers</h2></center> <br><br>
        <form class="form" action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <ion-icon name="person-outline"></ion-icon>
                <label>Name </label>
                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <ion-icon name="pencil-outline"></ion-icon>
                <label>Address </label>
                <input name="address" type="text" class="form-control" placeholder="Your Address" required>
            </div>
            <div class="form-group">
                <ion-icon name="call-outline"></ion-icon>
                <label>Phone Number</label>
                <input name="phone_number" type="text" class="form-control" placeholder="Your Phone" required>
            </div>
            <div class="form-group">
                <ion-icon name="copy-outline"></ion-icon>
                <label>Category </label>
                <select class="form-control" required name="id_category">
                <option>---Choice---</option>
                    @foreach ( $datos as $dat )
                        <option value="{{ $dat->id_category }}">{{ $dat->description  }}</option>

                    @endforeach
            </select>
                <small id="emailHelp" class="form-text text-muted">Remember to check the data well.</small>
            </div>

            <center>
            <button type="submit" class="btn btn-success"><ion-icon name="checkmark-outline"></ion-icon>Save</button>
            <button type="reset" style="color: #fff;" class="btn btn-warning"><ion-icon name="trash-outline"></ion-icon>Delete</button>
            <a class="btn btn-danger" href="{{ route('customers.index') }}" role="button"><ion-icon name="return-down-back-outline"></ion-icon> Go Back</a>
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
