@extends('admin.layouts.master')
@section('title')
    Xem chi tiết Danh mục sản phẩm: {{ $model->name }}
@endsection

@section('content')
    <table>
        <thead>
            <th>Trường</th>
            <th>Giá trị</th>
        </thead>
        <tbody>
            @foreach ($model->toArray() as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>
                        @php
                            if ($key == 'cover') {
                                $url = \Storage::url($value);

                                echo "<img src=\"$url\" style=\"max-width:100px;max-height:100px\">";
                            } elseif (\Str::contains($key, 'is_')) {
                                echo $value
                                    ? '<span class="badge bg-success">YES</span>'
                                    : '<span class="badge bg-danger">NO</span>';
                            } else {
                                echo $value;
                            }
                        @endphp
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
