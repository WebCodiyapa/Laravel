@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin-bottom: 93px;">

                <h3>
                    Review a place you've visited
                </h3>
            </div>
        </div>
        @foreach($visitedPinOgj as $pin)
            <div class="row visited-pin">
                <div>
                    <img class="visited-pin-image" src="{{url('images/test.jpg')}}" alt="pin photo">

                    <span class="add-to-favorites" data-id="{{$pin->name}}"></span>
                </div>
                <div style="float: left; margin-left: 25px">
                    <a href="">{{$pin->name }}</a>
                    <fieldset>
                                            <span class="star-cb-group">
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

                                                <input type="radio" id="rating-4" class="rating-circle" name="rating"
                                                       value="4"/><label
                                                        for="rating-4">4</label>
                                            </span>
                    </fieldset>

                </div>
            </div>
            @include('frontend.modals.add-rate-modal')
        @endforeach
    </div>
@endsection
