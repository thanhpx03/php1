@extends('layout.main');
@section('content')

@if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $err)
        <li style="color: red">{{ $err }}</li>
        @endforeach
    </ul>
    @endif
    <!-- Validate đúng -->
    @if(isset($_SESSION['success']) &&  isset($_GET['msg']))
    <span style="color:green">{{ $_SESSION['success'] }}</span>
    @endif
    <form action="{{route('update_user/'.$users->id)}}" method="post">
        Tên tài khoản: <input type="text" name="name" id="" value="{{$users->name}}"> <br>
        Mật khẩu: <input type="password" name="password" id="" value="{{$users->password}}"> <br>
        Địa chỉ: <input type="text" name="address" id="" value="{{$users->address}}"> <br>
        Số điện thoại: <input type="text" name="phone" id="" value="{{$users->phone}}"> <br>
        <input type="submit" name="btnUpdate" value="Sửa">
    </form>
@endsection