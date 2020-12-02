@extends('layouts.page')
@section('title', 'Listagem de usuários ')
@section('content_header')
    <h1 class="m-0 text-dark">Acompanhameto do usuário </h1>
@stop

@section('content')
    @include('includes.alerts')
    <form method="POST" action="{{ route('timeline.create') }}">
        @csrf
        @method('POST')

        <div class="form-group col-lg-4 col-sm-12">
            <span>Selecione o usuário</span>
            <select class="col-lg-12 col-sm-12 js-example-basic-single" name="state">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-lg-4 col-sm-12"></div>
        <div class="form-group col-lg-4 col-sm-12"></div>
        <div class="form-group col-lg-4 col-sm-12"></div>
        <div class="form-group col-lg-4 col-sm-12"></div>
    </form>
@stop

@section('js')
    <script src="{{ asset('js/controllers/UserController/UserController.js') }}"></script>
    <script src="{{ asset('js/modules/user/list.js') }}"></script>
@endsection

