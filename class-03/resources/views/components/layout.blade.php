<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $links = [
            [
                "path" => "/",
                "name" => "Home"
            ],
            [
                "path" => "/about",
                "name" => "About"
            ],
            [
                "path" => "/contact",
                "name" => "Contact"
            ]
        ];
    ?>
    <nav>
        @foreach ($links as $link)
            <x-nav-link link="{{$link['path']}}" name="{{$link['name']}}"/>
        @endforeach
    </nav>
    
    <?php // echo $slot ?>
    <!-- Podemos usar tudo o que esta dentro sera um echo do php -->
    {{ $slot }}

</body>
</html>