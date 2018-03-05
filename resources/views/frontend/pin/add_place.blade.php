@extends('layouts.app')

@section('content')



    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-12 offset-4">
                <h3>Add a New Place</h3>
            </div>

        </div>

    </div>
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/pin/search.js') }}"></script>

@endsection
