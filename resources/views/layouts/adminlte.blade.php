@extends('adminlte::master')

@section('adminlte_css')
    @stack('css')
@stop

@section('body_class', 'hold-transition login-page')

@section('body')
    <div class="d-flex justify-content-center align-items-center vh-100">
        @yield('content')
    </div>
@stop

@section('adminlte_js')
    @stack('js')
@stop
