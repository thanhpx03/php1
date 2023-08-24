@extends('layout.main');
@section('content')
    <!-- Validate lỗi -->
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $err)
        <li style="color: red">{{ $err }}</li>
        @endforeach
    </ul>
    @endif
    <!-- Validate đúng -->
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span style="color:green">{{ $_SESSION['success'] }}</span>
    @endif
    <form action="{{BASE_URL.'post_product'}}" method="post">
        Tên sản phẩm: <input type="text" name="name" id=""> <br>
        Đơn giá: <input type="text" name="price" id=""> <br>
        <input type="submit" name="btnAdd" value="Gửi">
    </form>
@endsection