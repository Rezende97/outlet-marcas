@extends('layout.template')

@push('style')
    <link rel="stylesheet" href=" {{ asset('css/formularios.css') }} ">
@endpush

@section('content')
    <div class="form-regist-user">

        <form action="/login" method="post" id="form-registration">
            @csrf
                        
            <input type="email" name="email" class="input-campo" id="email" placeholder="E-mail" title="Informe o seu e-mail" required>
            {{-- limitar caractere e padrao regex com javascript  --}}
            <input type="text" name="password" class="input-campo" id="password" placeholder="Password" title="Informe sua senha" required>       
            
            <button type="submit" id="but-submit" class="but-submit" >Acessar</button>
            <div class="login">
                <p>Não tem Cadastro? <a href="/cadastra" class="encaminha-login">Cadastra-se</a> </p>
            </div>
            <div class="login">
                <p>Não deseja realizar o login? <a href="/" class="encaminha-login">Voltar</a> </p>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script src="/javascript/login.js"></script>
@endpush