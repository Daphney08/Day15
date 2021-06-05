<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::asset('storage/'.Auth::user()->avatar) }}" class="card-img-top rounded-pill" alt="...">
                        
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{ Auth::user()->name }}
                        <p class="card-text"></p>
                        {{ Auth::user()->email }}
                        <div>
                            <a href="{{ URL::route('app.logout') }}" class="btn btn-primary">log Out</a>
                            <a href="{{ URL::route('app.chat') }}" class="btn btn-success">Chat Box</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
            </script>
</body>

</html>