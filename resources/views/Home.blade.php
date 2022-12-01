@extends('layout.template')

@section('title', 'Home')

@section('menu')
    <header class="home">
        <div class="logo-header">
            <h1>Outlet Marcas</h1>
        </div>
        <nav>
            <ul class="nav-lista">
                <li>
                    <a href="/login" class="frase-home">
                        Login
                    </a>
                </li>
                <li>
                    <a href="" class="frase-home">
                        Carrinho
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
                        <img src="/imagens/tenis_one.webp" alt="Tenis" title="Tenis 23">
                    </div>

                    <div class="descrition">
                        <img src="/imagens/tenis_neve.jpeg" alt="Caminha sobre a neve" title="Caminha sobre a neve">
                    </div>

                </div>

                <div class="marcas">

                    <div class="descrition">
                        <img src="/imagens/tenis_three.jpeg" alt="Caminhando ao Sol" title="Caminhando ao Sol">
                    </div>
                    
                    <div class="descrition">
                        <img src="/imagens/tenis_four.jpeg" alt="Paisagem sobre a água" title="Paisagem sobre a água">
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