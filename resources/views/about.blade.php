@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About This Page</h1>
    <p>This page is accessed through a named route: <code>route('about')</code>.</p>

    <x-alert type="info">
        This page uses a blade layout, an include, and a blade component.
    </x-alert>
@endsection