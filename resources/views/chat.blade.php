<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row sontent-center mt-5"> 
        @foreach($data as $chat)

                <div class="card" style="width: auto;">
                </div>
                
                    <div class="row pt-2">
                        <div class="col-1">
                            <img width="100%;" src="{{ URL::asset('storage/'.Auth::user()->avatar) }}" class="xcard-img-top rounded-pill" alt="...">
                        </div>
                        <div class="col-11"> 
                                <h5 class="card-title">
                                    {{ $chat->name }}
                                </h5>
                                <p class="card-text">
                                {{ $chat->created_at->diffForHumans() }}
                                </p> 
                            </div>
                        </div>
                        <div class="col-12 text-muted">
                        <small>
                        {{ $chat->message }}
                        </small>
                        </div>
                    </div> 
                    @endforeach
                </div>  
            <div class="col-6 mt-5">
                <form action="{{ URL::route('app.chat.send') }}" method="post">
                    @csrf
                    <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
                    <button class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>