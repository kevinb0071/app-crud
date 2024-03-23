<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>App Crud Create Product</title>
</head>

<body>
    <h1 class="text-center">Create a Product</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label class="form-label" for="name">Name:</label><br>
                        <input type="text" class="form-control" name="name" placeholder="Name" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="qty">Quantity:</label><br>
                        <input type="text" class="form-control" name="qty" placeholder="Quantity" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="price">Price:</label><br>
                        <input type="text" class="form-control" name="price" placeholder="Price" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="description">Description:</label><br>
                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
