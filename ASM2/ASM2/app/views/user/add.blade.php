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
    <form action="{{route('post_user')}}" method="post">
        Tên tài khoản: <input type="text" name="name" id=""> <br>
        Mật khẩu: <input type="text" name="password" id=""> <br>
        Địa chỉ: <input type="text" name="address" id=""> <br>
        Số điện thoại: <input type="text" name="phone" id=""> <br>
        <input type="submit" name="btnAdd" value="Gửi">
    </form>
@endsection