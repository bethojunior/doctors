@extends('layouts.page')
@section('title', 'Listagem de usuários ')
@section('content_header')
    <h1 class="m-0 text-dark">Meus Perfil</h1>
@stop

@section('content')
    @include('includes.alerts')
    <div class="row col-lg-12 col-sm-12 card pt-2">
        <p>
            Nome : {{ $user->name }}
        </p>
        <p>
            Fone : {{ $user->phone }}
        </p>
        <p>
            Email : {{ $user->email }}
        </p>
        <p>
            Documento : {{ $user->document }}
        </p>
        <p>
            Data de nascimento : {{ Carbon\Carbon::parse($user->was_born_in)->format('d/m/Y')  }}
        </p>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/controllers/UserController/UserController.js') }}"></script>
    <script src="{{ asset('js/modules/user/list.js') }}"></script>
@endsection

