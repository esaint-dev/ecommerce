<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
</head>
<body>
    <h1>Create a Product</h1>
    <div class="error_display">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form id="create_form" method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />

            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" />

            <label>Price</label>
            <input type="text" name="price" placeholder="Price" />

            <label>Description</label>
            <input type="text" name="description" placeholder="Description" />
            
            <input id="submit" type="submit" value="Save a New Product" />
            <a id="return_product" href="{{ route ('product.index')}}">Go back</a>

    </form>
</body>
</html>