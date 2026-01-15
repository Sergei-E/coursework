@extends('layouts.app')

@section('content')
    <section class="authorization">
            <div class="authorization-logo">
                <img src="img/logo.png">
            </div>
            <div class="authorization-text">
                Авторизация
            </div>
            <livewire:auth.login />
            <div class="authorization-error">
                Ошибка авторизации
            </div>
        </section>
@endsection