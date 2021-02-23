@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact Us</div>

                <div class="card-body">
                    <form method="POST" action="{{route('contact-us.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Alamat Email</label>

                            <div class="col-md-6">
                                <input  type="email" class="form-control" placeholder="Emaill Kamu" name="email"  required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Message</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " placeholder="Pesan kamu buat kita" name="pesan" required >

                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
