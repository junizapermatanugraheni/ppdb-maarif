
@extends('layouts.main')

@section('container')

<div class="row justify-content-start">
    <div class="col-md-4 justify-content-center">
        <form class="row g-3">
            <div class="col-12">
                <label for="inputAddress" class="form-label">Username (NIK)</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="340001115643444">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Password (Tanggal Lahir)</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="08091999">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>    
    </div>
</div>

@endsection