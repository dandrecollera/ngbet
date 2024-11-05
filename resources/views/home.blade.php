@extends('template')
@section('content')
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 position-relative vh-100">
                    <div class="position-absolute top-50 start-50 translate-middle">

                        <h1>Break Up Bet</h1>
                        <form action="/deleteaccount" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text">id</span>
                                <input class="form-control" name="id" type="text">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">username</span>
                                <input class="form-control" name="username" type="text">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">password</span>
                                <input class="form-control" name="password" type="text">
                            </div>
                            <hr>
                            <button class="btn btn-primary w-100">create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>

        @php
            $userssssss = DB::table('main_users')->get()->toArray();
        @endphp

        @foreach ($userssssss as $user)
            Username: {{ $user->username }}
            <br>
            Password: {{ $user->password }}
            <hr>
        @endforeach
    </div>
@endsection
