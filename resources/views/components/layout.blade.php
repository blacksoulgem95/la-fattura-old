<html>
<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}"/>
    <script src={{mix('js/app.js')}}></script>
</head>
<body class="bg">
<x-navbar></x-navbar>
{{ $slot }}
</body>
</html>
