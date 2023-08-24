@extends('layout.main')
@section('content')
<table border="1">
    <thead>
        <th>ID</th>
        <th>Product name</th>
        <th>Giá</th>
        <th>Action</th>

    </thead>
    <tbody>
         @foreach($product as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->ten_sp }}</td>
                <td>{{ $p->gia }}</td>
                <th>
                    <a href="{{ route('edit-product/'.$p->id) }}">Sửa</a>
             <a href="javascript:confirmDelete('delete-product/{{$p->id}}')">Xóa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
