<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <body>
    <div class="container col-4 pt-5">   
        <form action="{{route('save-data')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <input name="id" type="hidden" class="form-control" @if (!empty($edit->id)) value="{{$edit->id}}" @endif>

            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" @if (!empty($edit->name)) value="{{$edit->name}}" @endif>

            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" @if (!empty($edit->email)) value="{{$edit->email}}" @endif>

            <label for="exampleInputEmail1" class="form-label">Image</label>
            <input name="image" type="file" class="form-control" @if (!empty($edit->image)) value="{{$edit->image}}" @endif>

            {{-- <img width="100" height="100px" src="{{ asset('storage/'.$edit->image) }}" alt="">     --}}

            <button class="btn btn-primary mt-3" type="submit">Submit</button>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>