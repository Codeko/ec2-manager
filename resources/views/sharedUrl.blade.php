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
                    <li>Nombre: {{$sharedurl->title}}</li>
                    <li>Texto: {{$sharedurl->text}}</li>
                    @if ($sharedurl->image)
                        <li>Imágen: <img src="{{$sharedurl->image}}" width="150" height="150"></li>
                    @endif
                    
                </ul>

      
            </div>
        </div>
    </section>
</body>
</html>