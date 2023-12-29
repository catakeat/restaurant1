<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles
</head>
<body>
    
@livewire('counter')

<br><br>


{{--<livewire:citate citat="citatul"/>--}}

<livewire:citate :citat="$citat"/>
@livewireScripts
</body>
</html>