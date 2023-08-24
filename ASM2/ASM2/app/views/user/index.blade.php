@extends('layout.main');
@section('content')
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Tên người dùng</td>
            <td>Password </td>
            <td>Địa chỉ</td>
            <td>Số điện thoại</td>
            <td><a href="{{route('add_user')}}">Thêm</a></td>
        </tr>
        @foreach($users as $u)
        <tr>
            <td>{{ $u->id}}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->password }}</td>
            <td>{{ $u->address }}</td>
            <td>{{ $u->phone }}</td>
            <td>
                <a href="{{route('edit_user/'.$u->id)}}">Sửa</a>
                <a href="{{route('delete_user/'.$u->id)}}">Xóa</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection