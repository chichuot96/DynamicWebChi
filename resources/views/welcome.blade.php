<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

       <div class="container">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Launch demo modal
           </button>

           <!-- Modal -->
           <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           Form feedback
                       </div>
                       <div class="modal-body">
                           <form style="width: 50%; margin-left: 25%;" >

                               <div class="form-group">
                                   <label for="name">Student name</label>
                                   <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your name">
                               </div>
                               <div class="form-group">
                                   <label for="email">Email address</label>
                                   <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                               </div>
                               <div class="form-group">
                                   <label for="phone">Student Telephone</label>
                                   <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your telephone">
                               </div>
                               <div class="form-group">
                                   <label for="feedBack">Student feedback</label>
                                   <textarea  class="form-control" id="feedback" name="feedback" placeholder="Enter your feedback about school"></textarea>
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   <button type="button" class="btn btn-primary" id="send">Send feedback</button>
                               </div>

                           </form>
                       </div>
                   </div>

               </div>

           </div>
           <table class="table">
               <thead>
               <tr>
                   <th scope="col">Name</th>
                   <th scope="col">Email</th>
                   <th scope="col">Phone</th>

               </tr>
               </thead>
               <tbody>
               @foreach($list as $l)
                   <tr >
                       <td>{{$l->name}}</td>
                       <td>{{$l->email}}</td>
                       <td>{{$l->telephone}}</td>
                   </tr>
               @endforeach
               </tbody>
           </table>
       </div>
    </body>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/notify.js') }}" ></script>
    <script>
        $("#send").click(function() {
            var name = $("#name").val();
            var email=$("#email").val();
            var phone=$("#phone").val();
            var feedback=$("#feedback").val();
            var token = "{{csrf_token()}}";
            $.post(
                "{{url('post')}}",
                {name: name,email:email,phone:phone,feedback:feedback, _token: token},
                function (result) {
                    alert("Success");
                    location.reload();
                }
            );
        });
    </script>

</html>
