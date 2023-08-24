@extends('layout.main');
@section('content')
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Tài khoản</td>
            <td>Nội dung </td>
            <td><a href="{{route('add_comment')}}">Thêm</a></td>
        </tr>
        @foreach($comments as $cm)
        <tr>
            <td>{{ $cm->id}}</td>
            <td>{{ $cm->name }}</td>
            <td>{{ $cm->content }}</td>
            <td><a href="{{route('edit_comment/'.$cm->id)}}">Sửa</a> <a href="{{route('delete_category/'.$cm->id)}}">Xóa</a></td>
        </tr>
        @endforeach
    </table>
@endsection