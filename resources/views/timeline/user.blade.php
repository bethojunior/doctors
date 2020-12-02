@extends('layouts.page')
@section('title', 'Listagem de usuários ')
@section('content_header')
    <h1 class="m-0 text-dark">Acompanhameto do usuário </h1>
@stop

@section('content')
    @include('includes.alerts')

@stop

@section('js')
    <script src="{{ asset('js/controllers/UserController/UserController.js') }}"></script>
    <script src="{{ asset('js/modules/user/list.js') }}"></script>
@endsection

