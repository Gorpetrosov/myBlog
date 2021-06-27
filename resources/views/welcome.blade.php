@extends('layout.app')
@section('title', 'Home')
@section('css')

@endsection

@section('body')
    <div class="container">
    <div class="row bg-light p-2 mt-4 mb-4">
        <div class="col-12 col-sm-9">
            @include('post.index')
            @include('post.index')
        </div>
        <div class="col-12 col-sm-3">

        </div>
    </div>
@endsection

@section('js')

@endsection
