@extends('layout.main');
@section('content')
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá </td>
            <td><a href="{{BASE_URL.'add_product'}}">Thêm</a></td>
        </tr>
        @foreach($products as $pr)
        <tr>
            <td>{{ $pr->id}}</td>
            <td>{{ $pr->name }}</td>
            <td>{{ $pr->price }}</td>
            <td><a href="{{route('edit_product/'.$pr->id)}}">Sửa</a> <a href="{{route('delete_product/'.$pr->id)}}">Xóa</a> </td>
        </tr>
        @endforeach
    </table>
@endsection