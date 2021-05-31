<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-one-to-many</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: lightgray;
        }
        header, footer{
            background-color: gray;
        }

    </style>
</head>
<body>
    <header>Questo é header</header>
    <ul>

        @foreach ($employee as $item)
        <li>
            {{$item->lastname}}
            @foreach ($item -> task as $i)
                {{$i->title}}

            @endforeach
        </li>
        @endforeach
    </ul>
    <footer>Questo é footer</footer>
</body>
</html>
