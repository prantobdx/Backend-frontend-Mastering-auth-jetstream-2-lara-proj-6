<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
</head>
<body>
    

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
     <div class="container">
        <a class="navbar-brand" href="">Logo</a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
        </ul>
     </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center font-weight-bold">Products Details</h2>
                    <div class="row py-3">
                        <div class="col-md-6">
                            <img src="{{ asset($product->product_image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h2>{{ $product->product_name }}</h2>
                            <h2>Category Name: {{ $product->category_name }}</h2>
                            <h2>Brand Name: {{ $product->brand_name }}</h2>
                            <h2>Product Price: {{ $product->price }}</h2>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                            {!!$product->description !!}
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>