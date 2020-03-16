<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
        <h1 style="margin: 50px; text-align: center"> Chí Chuột School</h1>
        <form style="width: 50%; margin-left: 25%;" action="{{url('post')}}" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <label for="name">Student name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter your name">
                <small id="nameHelp" class="form-text text-muted">Please enter full name</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Please enter email of school</small>
            </div>
            <div class="form-group">
                <label for="phone">Student Telephone</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your telephone">
            </div>
            <div class="form-group">
                <label for="feedBack">Student feedback</label>
                <textarea  class="form-control" id="feedBack" name="feedback" placeholder="Enter your feedback about school"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
