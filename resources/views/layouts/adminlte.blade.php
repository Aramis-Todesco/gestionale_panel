@extends('adminlte::page')

@section('title', $title ?? 'Dashboard')

@section('content_header')
    <h1>{{ $header ?? 'Dashboard' }}</h1>
@stop

@section('content')
    @yield('content')
@stop

@section('css')
    @livewireStyles
    @stack('css')
@stop

@section('js')
    @livewireScripts
    @stack('js')
@stop
