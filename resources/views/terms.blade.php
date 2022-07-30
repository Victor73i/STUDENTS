@extends('layout.plantilla')
@section('TituloPagina','Terms And Conditions')
@section('contenido')
    <link rel="stylesheet" href="css/terms.css">
    <center><h2><ion-icon name="folder-open-outline"></ion-icon>Terms And Conditions</h2><br><br></center>
    <div class="navigation">
        <small style="color: #FFFFFF">
            This agreement is between you or the entity you represent and Microsoft Corporation, and consists of the terms below, Exhibit A, terms incorporated by reference, terms applicable to other Microsoft web sites and services that you use and are necessary to use the Services (for example, your Microsoft Account), Microsoft API Terms, and the Privacy Statement (together, the “Agreement”). If you are entering into this Agreement on behalf of an entity, such as your employer, you represent that you have the legal authority to bind that entity. If you specify a company name in connection with signing up for or ordering a Service, you will be deemed to have placed that order and to have entered into this Agreement on behalf of that organization or company. Key terms are defined in Section 11. By accepting this Agreement, you agree to these terms. If you do not accept and comply with this Agreement, you may not use the Services.
        </small>
    </div>
    <center><br><br>
         <a class="btn btn-danger" href="/" role="button"><ion-icon name="return-down-back-outline"></ion-icon> Go Back</a></center>
    <center>
        <footer>
            <div class="">
                <div class="container text-center">
                    <p class="text-muted mb-0 py-2">© 2022 DesWeb - Grupo R.V.W.L All rights reserved.</p>
                    @auth
                        <p class="text-muted mb-0 py-2">You are logged in with: {{ auth()->user()->username }}.</p>

                    @endauth

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
@endsection
