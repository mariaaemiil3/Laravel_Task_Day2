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
        <form method="POST" action="{{route('article.save')}}">
            <!-- {{route('article.save')}} -->
            @csrf
            @if($errors)
            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Article Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                <span class="text-danger">{{$errors->first('name')}}</span>
            </div>
           
            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Article Details</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="details">
                <span class="text-danger">{{$errors->first('details')}}</span>
            </div>

            <label for="categories">Choose a category:</label>

            <select name="categories" id="categories">
                <option value=""></option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <span class="text-danger">{{$errors->first('categories')}}</span>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>