<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Ticket System</title>
    @viteReactRefresh
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app"></div>
    <script>
        window.addEventListener('load', function() {
            console.log('Page loaded');
            if (!document.querySelector('#app').__vue_app__) {
                console.error('Vue app not mounted');
            }
        });
    </script>
</body>
</html>