@extends('layouts.app_auth')

@section('script')
<script src="{{asset('js/create_post.js')}}" defer="true"></script>
@endsection

@section('style')
<link href="{{asset('css/home.css')}}" rel="stylesheet">
@endsection

@section('title', "POST");

@section('content')
<html>
    <body>
        <main>

            <section id="ricerca">
            <form name='form_search'  method='post'>
             @csrf
                    <input type='text' name='campo' id='autor' placeholder="Scrivi qui">
                    <select name = 'api'>
                        <option value='opzione1'>Fumetti</option>
                        <option value='opzione2'>Libri</option>
                    </select>
                    <input type='submit' name='cerca' value='Cerca' class="button">
                    <input id="route_do_search_content" type='hidden' name='route_do_search_content' value="{{route('do_searchpost')}}">
                    <input id="route_do_create_post" type='hidden' name='route_do_create_post' value="{{route('do_createpost')}}">
                </form>
                </section>
                <section id="risultati"></section>
                <section id="modal-view" class="hidden"></section>

</main>
</body>

</html>

@endsection


