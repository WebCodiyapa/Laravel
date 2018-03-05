<div class="modal fade" tabindex="-1" role="dialog" id="favorite-add-note">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>

            </div>
            <form role="form" action="{{route('user-note')}}" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Rate this pin:</label>
                        <div class="form-group-rating">
                            <fieldset>
                                {{--<span class="star-cb-group">--}}
                                {{--<input type="radio" id="rating-4" class="rating-circle" name="rating"--}}
                                {{--value="4"/><label--}}
                                {{--for="rating-4">4</label>--}}
                                {{--<input type="radio" id="rating-0" class="rating-circle" name="rating"--}}
                                {{--value="0"/><label--}}
                                {{--for="rating-0">0</label>--}}

                                {{--<input type="radio" id="rating-1" class="rating-circle" name="rating"--}}
                                {{--value="1"--}}
                                {{--checked="checked"/><label for="rating-1">1</label>--}}
                                {{--<input type="radio" id="rating-2" class="rating-circle" name="rating"--}}
                                {{--value="2"/><label--}}
                                {{--for="rating-2">2</label>--}}
                                {{--<input type="radio" id="rating-3" class="rating-circle" name="rating"--}}
                                {{--value="3"/><label--}}
                                {{--for="rating-3">3</label>--}}
                                {{--</span>--}}
                                <span class="star-cb-group">
                                                <input type="radio" id="rating-5"  name="rating-circle" value="5"/><label
                                            for="rating-5">5</label>
                                                <input type="radio" id="rating-4" name="rating-circle" value="4"
                                                       checked="checked"/><label for="rating-4">4</label>
                                                <input type="radio" id="rating-3" name="rating-circle" value="3"/><label
                                            for="rating-3">3</label>
                                                <input type="radio" id="rating-2" name="rating-circle" value="2"/><label
                                            for="rating-2">2</label>
                                                <input type="radio" id="rating-1" name="rating-circle" value="1"/><label
                                            for="rating-1">1</label>
                                                <input type="radio" id="rating-0" name="rating-circle" value="0"
                                                       class="star-cb-clear"/><label for="rating-0">0</label>
                                            </span>
                            </fieldset>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Note</label>
                        <textarea id="favorite-note" class="form-control" name="favorite_note" rows="10"
                                  cols="80"></textarea>
                    </div>
                    <input type="hidden" class="favorite_rating" name="favorite_rating">
                    <input type="hidden" name="pin_id" value="{{$pin->id}}">
                    {{ csrf_field() }}
                </div>
                <div class="modal-footer">
                    <button type="button" class=" btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn-primary">Save</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->