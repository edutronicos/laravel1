<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap v5.0 -->
        <link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- CSS Interno -->
        <link rel="stylesheet" href="{{URL::asset('css/estilo.css')}}">
        <!-- CSS Menu -->
        <link rel="stylesheet" href="{{URL::asset('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('https://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700')}}">
        <!--<link rel="stylesheet" href="{{URL::asset('http://andytran.me/lib/css/animate.css')}}"> -->
        <link rel="stylesheet" href="{{URL::asset('css/menu.css')}}">
        <link rel="stylesheet" href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css')}}">
        <title>@yield('title')</title>
    </head>
    
    <body>
        <nav class='animated flipInX'>
            <ul>
                <li>
                <a href='/'>
                    <div class='fa fa-home'></div>
                </a>
                </li>
                <li>
                <a href='/'>
                    Inicio
                </a>
                </li>
                <li class='sub-menu'>
                <a href='#'>
                    Empresa
                    <i class='fa fa-angle-down'></i>
                </a>
                <ul>
                    <li>
                    <a href='/branch'>
                        Ramais
                    </a>
                    </li>
                    <li>
                    <a href='/emails'>
                        E-mails
                    </a>
                    </li>
                    <li>
                    <a href='/events'>
                        Fotos
                    </a>
                    </li>
                </ul>
                </li>
                <li class='sub-menu'>
                <a href='#'>
                    Recrutamento
                    <i class='fa fa-angle-down'></i>
                </a>
                <ul>
                    @auth
                    <li>
                    <a href='/recru/novo'>
                        Novo Cadastro
                    </a>
                    </li>
                    @endauth
                    <li>
                    <a href='/recru/lista'>
                        Lista Cadastros
                    </a>
                    </li>
                    <li>
                    <a href='#'>
                        Product Item
                    </a>
                    </li>
                </ul>
                </li>
                <li>
                <a href='#'>
                    Contato
                </a>
                </li>
                <li class='sub-menu'>
                <a href='#'>
                    LOGIN
                    <i class='fa fa-angle-down'></i>
                </a>
                <ul>
                    @guest
                    <li>
                    <a href='/login'>
                        Entrar
                    </a>
                    </li>
                    @endguest
                    @auth
                    <li>
                    <form action="/logout" method="post">
                        @csrf
                        <a href='/logout' onclick="event.preventDefault(); this.closest('form').submit();">
                        Sair
                        </a>
                    </form>
                    </li>
                    @endauth
                    @guest
                    <li>
                    <a href='/register'>
                        Novo Usuário
                    </a>
                    </li>
                    @endguest
                </ul>
                </li>
            </ul>
        </nav>
        
        @yield('content')
        
    </body>

    <footer>
        <p>Edutronicos &copy; 2022<p>
    </footer>
    <!-- Bootstrap v5.0 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{URL::asset('js/menu.js')}}"></script>
    <!-- CSS Fotos -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script>
 
    $(document).ready(function(){
     $('#file-input').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
             
            var data = $(this)[0].files; //this file data
             
            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
                        $('#thumb-output').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
             
        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });
     
    </script>
</html>