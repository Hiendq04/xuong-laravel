@extends('admin.layouts.master')
@section('title')
    Danh sách Danh mục sản phẩm
@endsection

@section('content')
    <a href="{{ route('admin.catalogues.create') }}" class="btn btn-primary">Thêm mới</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Cover</th>
            <th>Is Active</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <img src="{{\Storage::url($item->cover)}}" alt="" style="max-width:100px;max-height:100px">
                    </td>
                    <td>{!! $item->is_active
                        ? '<span class="badge bg-success">YES</span>'
                        : '<span class="badge bg-danger">NO</span>' !!}
                    </td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('admin.catalogues.show', $item->id) }}" class="btn btn-info">Xem</a>
                        <a href="{{ route('admin.catalogues.edit', $item->id) }}" class="btn btn-warning">Sửa</a>
                        <a href="{{ route('admin.catalogues.destroy', $item->id) }}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $data->links() }}
@endsection
