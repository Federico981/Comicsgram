@extends('layouts.app_auth')

@section('title', "HOME");

@section('style')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('script')
    <script src='{{asset('js/home.js')}}' defer="true"></script>
@endsection

@section('content')
<html>
    <body>
        <main>


<form name='form_refresh' method="POST">
    @csrf
    <input id="update_home" type='hidden' name='update_home' value="{{route('update_home')}}">
    <input id="miPiace" type='hidden' name='miPiace' value="{{route('miPiace')}}">
    <input id="add_like" type='hidden' name='add_like' value="{{route('add_like')}}">
    <input id="remove_like" type='hidden' name='remove_like' value="{{route('remove_like')}}">
    <input id="show_like" type='hidden' name='show_like' value="{{route('show_like')}}">
</form>




<section class="result_view">
</section>

<section id="modal-view" class="hidden">
<div id="box"></div>
</section>

</main>
</body>

</html>

@endsection
