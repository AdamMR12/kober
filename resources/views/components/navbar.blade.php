    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            transition: background-color 0.3s, color 0.3s;
            min-height: 100vh;
        }

        body.light-mode {
            background-color: #ffffff;
            color: #333333;
        }

        body.dark-mode {
            background-color: #1a1a1a;
            color: #f5f5f5;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: background-color 0.3s;
        }

        .dark-mode .navbar {
            background-color: #2d2d2d;
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .website-title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .dark-mode-toggle {
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            border-radius: 10%;
            width: 70px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .dark-mode-toggle:hover {
            background-color: rgba(0,0,0,0.1);
        }

        .dark-mode .dark-mode-toggle:hover {
            background-color: rgba(255,255,255,0.1);
        }

        .light-icon, .dark-icon {
            font-size: 1.2rem;
        }

        .light-icon {
            display: inline-block;
        }

        .dark-icon {
            display: none;
        }

        .dark-mode .light-icon {
            display: none;
        }

        .dark-mode .dark-icon {
            display: inline-block;
        }

        .content {
            padding: 2rem;
            text-align: center;
        }
    </style>

<body class="light-mode">
    <nav class="navbar">
        <div class="website-title">TerraInvest</div>
        <button class="dark-mode-toggle" id="darkModeToggle" aria-label="Toggle dark mode">
            <span class="light-icon">Light</span>
            <span class="dark-icon">Dark</span>
        </button>
    </nav>

    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;

        const savedMode = localStorage.getItem('darkMode');
        
        if (savedMode === 'enabled') {
            body.classList.add('dark-mode');
            body.classList.remove('light-mode');
        }

        darkModeToggle.addEventListener('click', () => {
            if (body.classList.contains('dark-mode')) {
                body.classList.remove('dark-mode');
                body.classList.add('light-mode');
                localStorage.setItem('darkMode', 'disabled');
            } else {
                body.classList.add('dark-mode');
                body.classList.remove('light-mode');
                localStorage.setItem('darkMode', 'enabled');
            }
        });
    </script>
</body>