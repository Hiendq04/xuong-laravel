@extends('admin.layouts.master')
@section('title')
    Cập nhật Danh mục sản phẩm: {{ $model->name }}
@endsection

@section('content')
    <form action="{{ route('admin.catalogues.update', $model->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $model->name }}"
                        placeholder="Enter name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="cover">Name:</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                        <img src="{{ \Storage::url($model->cover) }}" alt="" style="max-width:100px;max-height:100px">
                </div>
            </div>
            <div class="col-md-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="is_active" value="1"
                            @if ($model->is_active) checked @endif> Is Active</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
