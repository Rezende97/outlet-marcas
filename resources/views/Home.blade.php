@extends('layout.template')

@section('title', 'Home')

@section('menu')
    <header class="home">
        <div class="logo-header">
            <h1 class="frase-logo">Outlet Marcas</h1>
        </div>
        <nav>
            <ul class="nav-lista">
                <li>
                    <a href="/login" class="frase-home">
                        <img src="/imagens/icones/icone-login-novo.png" alt="login" title="Login de Acesso" class="icone-client">
                    </a>
                </li>
                <li>
                    <a href="" class="frase-home">
                        <img src="/imagens/icones/carrinho-de-compra-novo.png" alt="carrinho de compra" title="Carrinho de Compra" class="icone-cliente">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
@endsection

@section('content')   
    
    <main>

        <section id="marca_one">

            <div class="frase-marca">
                <h1>Marcas</h1>
            </div>

            <div class="empresas-marcas">

                <div class="marcas">

                    <div class="descrition">
                        <img src="/imagens/tenis_one.webp" alt="Tenis" title="Tenis 23" class="tenis-one">
                    </div>

                    <div class="descrition">
                        <img src="/imagens/tenis_neve.jpeg" alt="Caminha sobre a neve" title="Caminha sobre a neve" class="tenis-two">
                    </div>

                </div>

                <div class="marcas">

                    <div class="descrition">
                        <img src="/imagens/tenis_three.jpeg" alt="Caminhando ao Sol" title="Caminhando ao Sol" class="tenis-three">
                    </div>
                    
                    <div class="descrition">
                        <img src="/imagens/tenis_four.jpeg" alt="Paisagem sobre a água" title="Paisagem sobre a água" class="tenis-four">
                    </div>

                </div>

            </div>

        </section>

    </main>

    <footer>        
        <div class="title-rodape">
            <h1>Outlet Marcas</h1>
        </div>
        <div class="rede-sociais">
            <a href="">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </footer>
@endsection