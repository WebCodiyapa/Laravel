<div class="">
    <div class="">
        <div>
            <img class="search-result-image" src="{{url('images/test.jpg')}}" alt="pin photo">
            <a href="{{route('pin-single',['id'=> $pin['id']])}}">{{$pin['name'] .' '.$pin['city'] }}</a>
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
</div>
