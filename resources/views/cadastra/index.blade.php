@extends('layout.template')

@push('style')
    <link rel="stylesheet" href=" {{ asset('css/formularios.css') }} ">
@endpush

@section('content')
    <div class="form-regist-user">

        <form action="/cadastra" method="post" id="form-registration">
            @csrf
            <input type="text" name="name" class="input-campo" id="name" placeholder="Nome Completo" title="Informe o seu Nome Completo" required>
            
            <input type="email" name="email" class="input-campo" id="email" placeholder="E-mail" title="Informe o seu e-mail" required>
            {{-- limitar caractere e padrao regex com javascript  --}}
            <input type="text" name="password" class="input-campo" id="password" placeholder="Password" title="Informe sua senha" required>       
            
            <button type="submit" id="but-submit" class="but-submit" >Cadastrar</button>
            <div class="login">
                <p>Já é cadastrado? <a href="/login" class="encaminha-login">Acessar</a> </p>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script src="/javascript/cadastro.js"></script>
@endpush