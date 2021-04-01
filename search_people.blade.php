@extends('layouts.app_auth')

@section('script')


<script type="text/javascript"> const UPDATE= "{{route('search_people')}}"</script>
<script type="text/javascript"> const FOLLOW= "{{route('search_people.follow')}}"</script>
<script type="text/javascript"> const UNFOLLOW= "{{route('search_people.unfollow')}}"</script>


<script src="{{asset('js/search_people.js')}}" defer></script>
@endsection

@section('style')
<link href="{{asset('css/home.css')}}" rel="stylesheet">
@endsection

@section('title', "RICERCA UTENTI");

@section('content')
    <body>

                <div id="libreriaContainer">
                <!-- sezione di ricerca -->
                    <div id="searchBox" >
                    <form name ='search-form' action = "{{route('search_people.do_search')}}">
                     @csrf
                    <input type="text"  id="searchtext" placeholder="Scrivi qui">
                    <input type="submit" value='Cerca' id="btntext">
                    </form>
                    </div>

                    <section>
                <div class='grid'>
                </div>
                    </section>
            </div>

</body>

@endsection


