<html>
<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}"/>
    <script src={{mix('js/app.js')}}></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg">
<x-navbar></x-navbar>
{{ $slot }}
</body>
</html>
