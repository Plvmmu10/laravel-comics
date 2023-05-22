@extends('layout.app')

@section('content')
    @include('partials.jumbotron')
    <div class="main-box">
        @include('partials.main')
    </div>
    @include('partials.mainNav')
@endsection
