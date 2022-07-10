@extends('admin.master')

@section('title')
   {{ env('APP_NAME') }} - manage
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto card">
                <div class="card-header">
                    <h4>All Products</h4>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>#Product Name</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->category_name }}</td>
                                        <td>{{ $product->brand_name }}</td>
                                        <td>{{ $product->product_price }}</td>
                                        <td>
                                         <img src="{{ asset($product->product_image) }}" width="130px" height="100px" alt="">
                                        </td>
                                        <td> {!! substr_replace($product->description ,'<a href="" class="btn btn-success">Read More</a>', 200) !!} </td>
                                        <td>{{ $product->status== 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection