<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Css -->
    <style>
        .box {
            margin-top: 20px;
        }
        form {
            display: flex;
            margin: 30px 0;
        }
        form input{
            max-width: 400px;
        }
        form button {
            margin-left: 20px;
        }
    </style>
</head>
<body>
<div class="container box">
    <h1>Book Library</h1>
    <form action="/" method="get">
        <input type="text" class="form-control" placeholder="Search here !" name="search">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Author Id</th>
            <th scope="col">Title</th>
            <th scope="col">ISBN</th>
            <th scope="col">Pub_year</th>
            <th scope="col">Available</th>
        </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <th>{{$book->id}}</th>
                    <td>{{$book->authorId}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->ISBN}}</td>
                    <td>{{$book->pub_year}}</td>
                    <td>{{$book->available}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
