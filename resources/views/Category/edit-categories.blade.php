@extends('layout.plantilla')
@section('TituloPagina','Edit Categories')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/create-categories.css') }}">
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
                    <a href="{{ route('categories.index') }}">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="text">Category List</span>
                    </a>
                </li>
            </ul>
        </div>
    </center>
    <div>
        <center><h2><ion-icon name="apps-outline"></ion-icon> Edit Categories</h2><br><br></center>
        <form class="form"action="{{ route('categories.update', $category->id_category) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label><ion-icon name="copy-outline"></ion-icon> Category</label>
                <input type="text" name="description" class="form-control" placeholder="Category" required value="{{ $category->description }}">
                <small id="emailHelp" class="form-text text-muted">Remember to check the data well.</small>
            </div>
            <center>
            <button type="submit" class="btn btn-success"><ion-icon name="checkmark-outline"></ion-icon>Update</button>
            <button type="reset"  style="color: #fff;" class="btn btn-warning"><ion-icon name="trash-outline"></ion-icon>Delete</button>
            <a class="btn btn-danger" href="{{ route('categories.index') }}" role="button"><ion-icon name="return-down-back-outline"></ion-icon> Go Back</a>
            </center>
        </form>
        @if ($errors ->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors ->all() as $error )
                <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>
        @endif
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
