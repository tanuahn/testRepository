<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Book</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<a href=""><button type="button" class="btn btn-primary">ADD</button></a>

<table class="table table-striped">
    <thead class="btn-dark">
    <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Author</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($books as $key=> $book)
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$book['name']}}</td>
        <td>{{$book['author']}}</td>
        <td>{{$book['price']}}</td>
        <td><a href=""><button class="btn btn-danger" onclick="return confirm('Do you want delete :{{$book['name']}}')">Delete</button></a>
            <a href=""><button class="btn btn-warning">Edit</button></a>
            <a href=""><button class="btn btn-dark">Detail</button></a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>