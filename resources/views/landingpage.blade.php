@extends('layouts.app')

@section('title', env('APP_NAME'))

@section('content')
    <div class="content">
        @include('sections.about')
        @include('sections.education')
        @include('sections.skills')
    </div>
@endsection
