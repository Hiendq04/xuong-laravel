@extends('admin.layouts.master')
@section('title')
    Thêm mới Danh mục sản phẩm
@endsection

@section('content')
    <form action="{{ route('admin.catalogues.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="cover">Name:</label>
                    <input type="file" class="form-control" id="cover" name="cover">
                </div>
            </div>
            <div class="col-md-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="is_active" value="1" checked> Is Active</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
@endsection
