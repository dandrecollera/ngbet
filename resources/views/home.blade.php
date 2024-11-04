@extends('template')
@section('content')
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 position-relative vh-100">
                    <div class="position-absolute top-50 start-50 translate-middle">

                        <h1>Break Up Bet</h1>
                        <form action="/loginprocess" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option value=">">Greater Than</option>
                                    <option value="<">Less Than</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                                <input class="form-control" type="date" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <hr>
                            <button class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
