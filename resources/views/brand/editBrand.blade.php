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
                    {{-- action="{{ route('addBrand') }}" --}}
                    <form action="{{ route('updateBrand', $brand->brand_id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="brand_website">Brand</label>
                            <input type="text" name="brand_website" class="form-control"
                                value="{{ $brand->brand_website }}" placeholder="Enter Website">
                        </div>
                        <div class="form-group">
                            <label for="brand_create_date">Date</label>
                            <input type="date" class="form-control" name="brand_create_date"
                                value="{{ $brand->brand_create_date }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
