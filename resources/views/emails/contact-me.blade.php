@component('mail::message')
# A Heading

Some rando text 

- A list
- Goes
- Heree

@component('mail::button', ['url' => 'https://laracasts.com'])
    Visit Laracast
@endcomponent
    
@endcomponent


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trying it again!</h1>

    <p>It sound like you wanna hear more about {{ $topic }}, right?</p>

    <h2>Awesome sauce!</h2>
    
</body>
</html> --}}