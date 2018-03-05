@extends('layouts.app')

@section('content')
    <body>
    <div>
        @include('frontend.pin._main')
    </div>

    </body>
    <div class="footer" style="margin-top:70px;">
        <div class="container" style="margin: 0px">
            @include('frontend.footer.fooster')
        </div>
    </div>
@endsection
<style>
    .form-group {
        margin: 0;
        padding: 20px;
    }
</style>
