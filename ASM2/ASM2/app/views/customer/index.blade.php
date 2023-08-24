@extends('layout.main');
@section('content')
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Tên nhân viên</td>
            <td>Địa chỉ </td>
            <td>Email</td>
            <td><a href="{{BASE_URL.'add_customer'}}">Thêm</a></td>
        </tr>
        @foreach($customers as $ct)
        <tr>
            <td>{{ $ct->id}}</td>
            <td>{{ $ct->name }}</td>
            <td>{{ $ct->address }}</td>
            <td>{{$ct->email}}</td>
            <td><a href="{{route('edit_customer/'.$ct->id)}}">Sửa</a> <a href="{{route('delete_customer/'.$ct->id)}}">Xóa</a></td>
        </tr>
        @endforeach
    </table>
@endsection