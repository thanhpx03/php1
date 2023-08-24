@extends('layout.main');
@section('content')
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Tên loại</td>
            <td>Số lượng </td>
            <td><a href="{{BASE_URL.'add_category'}}">Thêm</a></td>
        </tr>
        @foreach($categories as $cg)
        <tr>
            <td>{{ $cg->id}}</td>
            <td>{{ $cg->name }}</td>
            <td>{{ $cg->amount }}</td>
            <td><a href="{{route('edit_category/'.$cg->id)}}">Sửa</a>
            <a href="{{route('delete/'.$cg->id)}}">Xóa</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection