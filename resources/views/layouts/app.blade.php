<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terralnvest - Invest in Our Planet's Future</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @yield('content')
    
    <script>
        const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        
        function switchTheme(e) {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
            }
        }
        
        toggleSwitch.addEventListener('change', switchTheme, false);
    </script>
</body>
</html>