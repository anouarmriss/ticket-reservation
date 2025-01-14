<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Ticket System</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('build/assets/app-D9ezDlAS.css') }}">
</head>
<body>
    <div id="app"></div>
    <script src="{{ asset('build/assets/app-aLDTWd2_.js') }}"></script>
    <script>
        console.log('Page loaded');
        window.addEventListener('load', function() {
            console.log('Window loaded');
            const appElement = document.querySelector('#app');
            console.log('App element:', appElement);
        });
    </script>
</body>
</html>