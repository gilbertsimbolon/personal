@extends('layouts.app')

@section('title', env('APP_NAME'))

@section('content')
    <div class="content">
        @include('sections.home')
    </div>
@endsection
