<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shared Url</title>
</head>
<body>
    <section>

        <div>
            <div>
                
                <ul>
                    <li>Nombre: {{$sharedUrls->title}}</li>
                    <li>Texto: {{$sharedUrls->text}}</li>
                    @if ($sharedUrls->image)
                        <li>Imagen: <img src="{{$sharedUrls->image}}" width="150" height="150"></li>
                    @endif
                </ul>
                
            </div>
        </div>
    </section>
</body>
</html>