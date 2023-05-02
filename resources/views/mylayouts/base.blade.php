<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/itens.css">
    <title>@yield('title')</title>
</head>
<body>
    <script>
        AOS.init();
    </script>
    <style>
        
            ul {
                position: sticky;
                top: 0;
                z-index: 1;
                font-size: 150%;
                list-style-type: none;
                margin: 0;
                padding: 10px;
                overflow: hidden;
                background-color: #5db3ff;
            }
            
            li {
                float: right;
            }

            li a {
                border-radius:20px;
                display: block;
                color: black;
                text-align: center;
                padding: 9px 10px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #afe5ea;
            }

        </style>
    
    <ul>
        
        <li><a href="#about">Sobre nós</a></li>
        
        <li><a class="active" href="#home">Noticias</a></li>
        <li><a href="#news">Vagas</a></li>
        <li><a href="#contact">Contato</a></li>
        <li><a href="/">Inicio</a></li>
        <li><a href="register">Cadastrar</a></li>
        <li><a href="login">Entrar</a></li>

    </ul>
    </div>
    @yield('content')
</body>
</html>