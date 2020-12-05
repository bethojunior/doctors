@extends('layouts.page')
@section('title', 'Listagem de usuários ')
@section('content_header')
    <h1 class="m-0 text-dark">Meus dados</h1>
@stop

@section('content')
    @include('includes.alerts')
    {{ $user }}
@stop

@section('js')
    <script src="{{ asset('js/controllers/UserController/UserController.js') }}"></script>
    <script src="{{ asset('js/modules/user/list.js') }}"></script>
@endsection

