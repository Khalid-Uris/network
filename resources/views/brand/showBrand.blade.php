@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Show Data</h2>
                </div>
                <div class="card-body">
                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Website</th>
                                <th>Created Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brand as $item)
                                <tr>
                                    <td>{{ $item->brand_id }}</td>
                                    <td>{{ $item->brand_website }}</td>
                                    <td>{{ $item->brand_create_date }}</td>
                                    <td>
                                        <a href="" class="btn btn-success">Show</a>
                                        <a href="{{ route('editBrand', $item->brand_id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('deleteBrand', $item->brand_id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
