@extends('layout.main');
@section('content')
    <!-- Validate duwx lieeuj -->
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $err)
        <li style="color: red">{{ $err }}</li>
        @endforeach
    </ul>
    @endif

    @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif

    <form action="{{route('post_category')}}" method="post">
        Tên loại: <input type="text" name="name"> <br>
        Số lượng: <input type="text" name="amount"> <br>
        <input type="submit" name="btnAdd" value="Gửi">
    </form>
@endsection