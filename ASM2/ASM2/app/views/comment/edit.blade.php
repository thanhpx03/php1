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

    <form action="{{route('update_comment/'.$comments->id)}}" method="post">
        Tên người dùng: <input type="text" name="name" value="{{$comments->name}}"> <br>
        Nội dung: <input type="text" name="content" value="{{$comments->content}}"> <br>
        <input type="submit" name="btnUpdate" value="Gửi">
    </form>
@endsection