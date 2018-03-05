@extends('admin.layouts')

@section('title', 'Dashboard Main')


@section('content')
    <div class="container" style="    position: relative;
    border: 1px solid #f3ebeba6;
    left: 115px;
    top: 5px;
    width: 82%;">
        <hr>
        <div class="row">
            <div class="col-md-8">
                <h5><i class="fa fa-home"></i>ADMIN DASHBOARD </h5>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <table id="example" class="display" width="100%">
                    <thead>
                    <th>#ID</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Point</th>
                    <th>Visited pin</th>
                    <th>Favorite pin</th>

                    </thead>
                    <tbody>
                    @foreach($userObj as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->firstname .' '. $user->lastname }}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->contributor}}</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


