@extends('layouts.app')

@section('content')
    <div class="d-none d-sm-block">
        <div class=" front-header" style="    height: 350px">
            <div class="container" style="margin: 0 auto;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6 offset-3   search-pin">
                            <h3 class=text-center> Latest reviews. Lowest prices.</h3>
                            <form action="{{route('pin')}}" method="get" role="search">
                                <div class="input-group">
                                    <input class="form-control hotel-search" placeholder="Search . . ." name="pin"
                                           id="ed-srch-term"
                                           type="text">
                                    <div class="input-group-btn">
                                        <button type="submit" id="searchbtn" style="margin-top: 0px">
                                            search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-block d-sm-none">
        <form action="{{route('pin')}}" method="get" role="search" style="width: 95%">
            <div class="input-group">
                <input class="form-control" placeholder="   Search . . ." name="pin"
                       id="ed-srch-term"
                       type="text">
                <div class="input-group-btn">
                    <button type="submit" id="" style="margin-top: 0px; height: 93%">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="search-resultat">
        <div class="container">
            <div class="row">


                <div class="col-md-12 category-head">
                    <div class="shop-h" style="float: left">
                    </div>
                    <div class="event-h" style="float: left">
                    </div>
                    <div class="trainers-h" style="float: left">
                    </div>
                    <div class="gym-h" style="float: left">
                    </div>
                    <div class="beaty-h" style="float: left">
                    </div>
                    <div class="medical-h" style="float: left">
                    </div>
                    <div class="insurance-h" style="float: left">
                    </div>
                    <div class="public-h" style="float: left">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 search">
                    <button class="refine-search  btn-primary"> Refine Search</button>
                </div>
                <div class="col-md-6 offset-3  col-sm-offset-3 refine-search-category" style="display: none">
                    <h3 class=text-center> Category</h3>
                    <form action="{{route('pin')}}" method="get" role="search">
                        <div class="input-group">

                            <select class="form-control filter-sort category multiple-items-selector"
                                    id="filter_category" style="height: 100%"
                                    name="filter_category[]">
                                @foreach(['Shops', 'Events', 'Trainers', 'Gym', 'Beaty', 'Medical', 'Instrument', 'public'] as $value)
                                    <option value='{{$value}}'
                                            @if(in_array($value, Request::input('filter_category', [])))
                                            selected
                                            @endif
                                    >{{$value}}
                                    </option>
                                @endforeach
                            </select>
                            <div class="select__arrow"></div>
                            <div class="input-group-btn">
                                <button type="submit" id="searchbtn" style="margin-top: 0px; min-height: 47px;">
                                    search
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="d-none d-sm-block pin-results" style="float: left">
                <div class="row">
                    <div class="col-md-12 search-result">
                        <div class="result"></div>
                        @if($pinObj==null)
                            <h3>No Results</h3>
                        @else
                            @foreach($pinObj as $pin)
                                <div class="pin-block">
                                    @include('frontend.hotel._pin_box')
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 book-now">
                        <div class="book"></div>
                        <button class="refine-search  btn-primary">BOOK NOW</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 banner">
                        <div class=""></div>
                        <h3>Banner</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="map-pin">

                    </div>

                </div>
            </div>
            <div class="d-block d-sm-none">
                <div class="row">
                    <div class="col-md-12 search-result">
                        <div class="result"></div>
                        @if($pinObj==null)
                            <h3>No Results</h3>
                        @else
                            @foreach($pinObj as $pin)
                                <div class="pin-block">
                                    @include('frontend.hotel._pin_box')
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 book-now">
                        <div class="book"></div>
                        <button class="refine-search  btn-primary">BOOK NOW</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 banner">
                        <div class=""></div>
                        <h3>Banner</h3>
                    </div>
                </div>
            </div>


        </div>
    </div>
        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('js/pin/search.js') }}"></script>
        <style>
            #map-pin {
                width: 100%;
                height: 250px;
                background-color: grey;
            }
        </style>
        <script>
            function initMap() {
                var uluru = {lat: -25.363, lng: 131.044};
                var map = new google.maps.Map(document.getElementById('map-pin'), {
                    zoom: 4,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDf_x9ZUjMHX-RSDY5hf3Lg3whNyGtx6c&callback=initMap">
        </script>
@endsection
