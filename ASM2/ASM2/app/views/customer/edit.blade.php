@extends('layout.main')
@section('content')
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $err)
        <li style="color: red;">{{ $err }}</li>
        @endforeach
    </ul>
    @endif

    @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif

    <form action="{{BASE_URL.'update_customer/'.$customers->id}}" method="post">
        Tên nhân viên: <input type="text" name="name" id="" value="{{ $customers->name}}"> <br>
        Địa chỉ: <input type="text" name="address" id="" value="{{ $customers->address}}"> <br>
        Email: <input type="text" name="email" id="" value="{{ $customers->email}}"> <br>
        <input type="submit" name="btnUpdate" value="Sửa">
    </form>
@endsection