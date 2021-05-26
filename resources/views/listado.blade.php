<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Shared Url</title>
</head>
<body>
    <section>
    
        <div>
            <div>
                <h1>Listado de Shared Url</h1>
                @foreach ($sharedUrls as $sharedUrl )
                <ul>
                    <li><a href="{{$sharedUrl->id}}">{{$sharedUrl->url}}</a></li>
                </ul>

                @endforeach
            </div>
        </div>
    </section>
</body>
</html>