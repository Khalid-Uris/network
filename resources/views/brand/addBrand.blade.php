@extends('layout')

@section('content')
    {{-- <h1>Hello world</h1> --}}
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h2>Header</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('addBrand') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="brand_website">Email address</label>
                            <input type="text" name="brand_website" class="form-control" placeholder="Enter Website">

                        </div>
                        <div class="form-group">
                            <label for="brand_create_date">Date</label>
                            <input type="date" class="form-control" name="brand_create_date">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
