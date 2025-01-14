<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Ticket System</title>
    @viteReactRefresh
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app"></div>
    <script>
        console.log('DOM loaded');
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Document ready');
            const app = document.getElementById('app');
            console.log('App element:', app);
        });
    </script>
</body>
</html>