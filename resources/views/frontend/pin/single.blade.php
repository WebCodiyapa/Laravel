@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <img src="{{url('images/cover.jpg')}}" alt="" style="width: 100%;height: 245px">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="pin-image" src="{{url('images/test.jpg')}}" alt="pin photo"> {{$pin->name}}
                @if (\Auth::user())
                    @if (isset($pin->is_favorite) && $pin->is_favorite)
                        <span class="add-to-favorites pins-favourite-delete-form-btn" data-id="{{$pin['id']}}">
                    <i class="fa fa-heart  "></i>
                    </span>
                    @else
                        <span class="add-to-favorites pins-favourite-form-btn" data-id="{{$pin['id']}}">
                         <i class="fa fa-heart-o  "></i>
                    </span>
                    @endif
                @else
                    <span class="next-btn login-modal" data-listing-id="{{ $pin->id }}"
                          data-toggle="modal" data-target="#login-modal">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                        </span>
                @endif
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <button class="btn-success">BOOK NOW</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <span>Opening Hours</span><br>
                <span>08:00-20:00</span>

                <span class="pull-right" style="color: red">Now Closed</span>
            </div>
        </div>
        <div class="row contact">
            <div class="col-md-12" style="text-align: center">
                <h3>Contact</h3>
                <div class="telephone" style="float: left">
                    <a href="">
                        <i class="fa fa-phone"></i>Telephone
                    </a>
                </div>
                <div class="email" style="float: left">
                    <a href="">
                        <i class="fa fa-envelope-o"></i> Email
                    </a>
                </div>
                <div class="web-site" style="float: left">
                    <a href="">
                        <i class="fa fa-globe"></i>Web site
                    </a>
                </div>
            </div>

        </div>
        <div class="row">
            <div style="">Address</div>
            <div id="map"></div>
        </div>
        <div class="row" style="margin-top: 25px;">
            <div style="" class="title-description">Description</div>
            <div class="description">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 reviews">
                <div style="color: #1c98f7;font-size: 21px">Reviews</div>
                @if(count($reviewObj))
                    @foreach($reviewObj as $review)
                        <div>
                            <div style="float: left; ">
                                <img class="review-image" src="{{url('images/test.jpg')}}"
                                     alt="pin photo">
                            </div>
                            <div style="float: left; margin-top: 20px">
                                <span>
                                {{$review->firstname }}
                                    <p>{{$review->contributor}} Contributor</p>

                            </span>

                                <span style="margin-left: 80px"> </span>
                                {{--<div style="text-align: center;">Show more reviews</div>--}}
                            </div>
                            <div class="feedback-pin">
                                <span>{{$review->comment}}</span>
                                <fieldset>
                                            <span class="star-cb-group">
                                               <input type="radio" id="rating-v-5"   value="5"/><label
                                                        for="rating-5">5</label>
                                                <input type="radio" id="rating-v-4"  value="4"
                                                       checked="checked"/><label for="rating-4">4</label>
                                                <input type="radio" id="rating-v-3"  value="3"/><label
                                                        for="rating-3">3</label>
                                                <input type="radio" id="rating-v-2"  value="2"/><label
                                                        for="rating-2">2</label>
                                                <input type="radio" id="rating-v-1"  value="1"/><label
                                                        for="rating-1">1</label>
                                                <input type="radio" id="rating-v-0"  value="0"
                                                       class="star-cb-clear"/><label for="rating-0">0</label>
                                            </span>
                                            </span>
                                </fieldset>

                            </div>

                        </div>
                    @endforeach
                @else
                    <div>
                        No any reviews
                    </div>
                @endif
            </div>

            <div class="col-md-6 rate">
                @if(\Auth::user())
                    <div style="color: #1c98f7;font-size: 21px">Your rate</div>
                    <div>
                        <div style="float: left">
                            <img class="review-image" src="{{url('images/test.jpg')}}"
                                 alt="pin photo"> <span class="rate-pin">{{\Auth::user()->firstname}}</span>
                        </div>
                        <div style="float: left; margin-left: 25px">
                            <fieldset>
                                            <span class="star-cb-group">
                                                <input type="radio" id="rating-4" class="rating-circle" name="rating"
                                                       value="4"/><label
                                                        for="rating-4">4</label>
                                                 <input type="radio" id="rating-0" class="rating-circle" name="rating"
                                                        value="0"/><label
                                                        for="rating-0">0</label>
                                                <input type="radio" id="rating-1" class="rating-circle" name="rating"
                                                       value="1"
                                                       checked="checked"/><label for="rating-1">1</label>
                                                  <input type="radio" id="rating-2" class="rating-circle" name="rating"
                                                         value="2"/><label
                                                        for="rating-2">2</label>
                                                 <input type="radio" id="rating-3" class="rating-circle" name="rating"
                                                        value="3"/><label
                                                        for="rating-3">3</label>
                                            </span>
                            </fieldset>

                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('frontend.modals.add-rate-modal')
@endsection
<style>
    #map {
        width: 100%;
        height: 200px;
        background-color: grey;
    }
</style>
<script>
    function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
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