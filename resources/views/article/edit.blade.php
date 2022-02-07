<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">


        <h2 class="text-center">Articles</h2>
        <form method="POST" action="{{route('article.update',['id'=>$id])}}">
            @csrf
            @method('put')
            <!-- <input type="hidden" name="_method" value="PUT"> -->

            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Article Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$article->name}}">
            </div>
            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Article Details</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="details" value="{{$article->details}}">
            </div>

            <label for="categories">Choose a category:</label>

            <select name="categories" id="categories">
                <option value="">          </option>
                @foreach ($categories as $category)
                @if($category->id == $article->category_id)
                <option value="{{$category->id}}" selected >{{$category->name}}</option>
                @else
                <option value="{{$category->id}}"  >{{$category->name}}</option>
                @endif
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>