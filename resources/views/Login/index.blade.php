@extends('layout.template')

@section('content')
    
    <div>

        <form action="/login" method="post">
            @csrf
            <input type="email" name="email" id="email">
            {{-- mostrar e não mostrar a senha  --}}
            <input type="password" name="password" id="password">       
            <button type="submit">Acessar</button>
        </form>
        <div>
            <p>Não tem Cadastro? <a href="/cadastra">Cadastra-se</a> </p>
        </div>
    </div>

@endsection