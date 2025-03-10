<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New User</h1>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                <form action="{{route('addUser')}}" method="POST">
                    @csrf
                   <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="username">
                <span class="text-danger">
                    @error('username')
                 {{$message}}   @enderror </span>
                </div>
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="useremail">
                    <span class="text-danger">
                        @error('useremail')
                     {{$message}}   @enderror </span></div>
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" name="userage">
                    <span class="text-danger">
                        @error('userage')
                     {{$message}}   @enderror </span></div>
                    <label class="form-label">city</label>
                    <input type="text" class="form-control" name="usercity">
                    <span class="text-danger">
                        @error('usercity')
                     {{$message}}   @enderror </span></div>
                    <button type="submit" class="btn btn-primary">Submit</button>   
                </form>
            </div>
        </div>
    </div>
</body>
</html>