<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layout.style')
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-main">
                <ul class="menu">
                    <li><a href="{{route('category')}}">Category</a></li>
                    <li><a href="{{route('product')}}">Product</a></li>
                    <li><a href="{{route('customer')}}">Customer</a></li>
                    <li><a href="{{route('user')}}">User</a></li>
                    <li><a href="{{route('comment')}}">Comment</a></li>
                </ul>
            </div>
        </header>
        <section class="content">
            @yield('content')
        </section>
        <footer>
            <span>Linhx</span>
        </footer>
    </div>
</body>
</html>