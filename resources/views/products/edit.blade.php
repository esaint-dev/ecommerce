<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">

</head>
<body>
    <h1>Edit a Product</h1>
    <div id="error_display">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form id="update_form" method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}" />

            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}" />

            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}" />

            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}" />

            <input id="update" type="submit" value="Update" />

    </form>
</body>
</html>