<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Api Tes</title>
</head>
<body>
    <div class="container">
        <form action="{{route('login-api')}}" method="post">
            @csrf
            <input class="w-full h-3" type="email" name="email" id="email">
            <input class="w-full h-3" type="password" name="password" id="password">
            <button type="submit">submit</button>
        </form>
        
        <div class="">
    
        </div>
    </div>
</body>
</html>