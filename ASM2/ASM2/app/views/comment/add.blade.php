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

    @isset($_SESSION['success'])
    <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endisset

    <form action="{{route('post_comment')}}" method="post">
        Tên người dùng: <input type="text" name="name"> <br>
        Nội dung: <input type="text" name="content"> <br>
        <input type="submit" name="btnAdd" value="Gửi">
    </form>
@endsection