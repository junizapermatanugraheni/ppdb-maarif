
<!-- @extends('layouts.main') -->

@section('container')
<main class="login-form">
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success text-light">LOG IN</div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Username (NIK)</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="340001115643444">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Password (Tanggal Lahir)</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-file-lock2-fill"></i></div>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="08091999">
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a href="" class="btn btn-success mr-2">Login</a>
                            </div>
                            <div class="col-12 text-center">
                                <div class="card-text">Belum Punya Akun ? <a href="/identitas" class="text-daftar font-weight-bolder">Daftar Disini</a></div>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</main>


@endsection