<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <div class="container text-center">

        <h2 class="text-center">Articles</h2>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Category Id</th>

                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article['id']}}</th>
                    <td>{{$article['name']}}</td>
                    <td>{{$article['details']}}</td>
                    <td>{{$article->category_id}}</td>

                    <td>
                        <a href="{{route('article.show',['id'=> $article->id])}}"><i class="fas fa-eye text-success mx-2"></i></a>
                        <!-- <a href=""><i class="fas fa-edit mx-2"></i></a> -->
                        <form method="post" action="{{ route('article.edit',['id' => $article->id])}}" class="d-inline">
                            @csrf
                            
                            <button class="btn btn-none"><i class="fas fa-edit text-primary"></i></button>
                        </form>
                        <form method="post" action="{{ route('article.delete',['id' => $article->id])}}" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-none"><i class="fas fa-trash-alt text-danger"></i></button>
                        </form>
                        <!-- <a href="/delete/{{$article->id}}"><i class="fas fa-trash-alt text-danger mx-2"></i></a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn btn-primary mx-auto">
            <a href="{{route('article.create')}}" class="text-decoration-none text-light">
                Add new article
                <i class="fas fa-plus text-light mx-2"></i>
            </a>
        </div>
        <a href="{{route('category.list')}}" class="btn btn-primary m-5">Show Categories</a>
        <a href='dashboard' class="btn btn-primary m-5">Dashboard</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>