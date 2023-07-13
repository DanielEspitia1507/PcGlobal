<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.min.css')}}">
    <title>PcGlobal</title>
</head>
<body class="flex flex-col min-h-screen">
    @include('navbar')
    <main class="container my-10 text-justify mx-auto flex-grow">
    </main>
    @include('footer')
</body>
</html>