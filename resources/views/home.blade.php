@extends('layouts.desktop')
@section('content')
    <div id="home">
        <div class="container header">
            <div class="float-left logo">
                <img src="{{ asset('images/logo.png') }}"/>
            </div>
            <div class="float-right auth">
                <button class="btn btn-secondary">{{ trans('string.login') }}</button>
            </div>
        </div>
    </div>
@endsection
