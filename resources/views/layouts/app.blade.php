<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ETEC Zona Leste')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #2D5016;
            --primary-light: #3a6b1f;
            --secondary: #f5f5f5;
            --foreground: #1a1a1a;
            --border: #e5e5e5;
            --muted-foreground: #666666;
        }

        html {
            font-family: 'Roboto', sans-serif;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #ffffff;
            color: var(--foreground);
            line-height: 1.6;
            letter-spacing: 0.3px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        h1 {
            font-size: 2.5rem;
            line-height: 1.2;
        }

        h2 {
            font-size: 2rem;
            line-height: 1.3;
        }

        h3 {
            font-size: 1.5rem;
            line-height: 1.4;
        }

        .container {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        @media (min-width: 640px) {
            .container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }

        @media (min-width: 1024px) {
            .container {
                padding-left: 2rem;
                padding-right: 2rem;
                max-width: 1280px;
            }
        }

        /* Navigation */
        nav {
            background-color: #ffffff;
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .nav-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            color: var(--foreground);
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background-color: var(--primary);
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-weight: bold;
            font-size: 1.125rem;
        }

        .logo-text h1 {
            font-size: 1.125rem;
            margin: 0;
            color: var(--primary);
        }

        .logo-text p {
            font-size: 0.75rem;
            color: var(--muted-foreground);
            margin: 0;
        }

        .nav-links {
            display: none;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .nav-links {
                display: flex;
            }
        }

        .nav-links a {
            color: var(--foreground);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary);
        }

        /* Buttons */
        button, .btn, a.btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .btn-primary {
            background-color: var(--primary);
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: var(--primary-light);
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            background-color: transparent;
        }

        .btn-outline:hover {
            background-color: rgba(45, 80, 22, 0.1);
        }

        /* Cards */
        .card {
            background-color: #ffffff;
            border: 1px solid var(--border);
            border-radius: 0.5rem;
            padding: 1.5rem;
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Grid */
        .grid {
            display: grid;
            gap: 1.5rem;
        }

        @media (min-width: 768px) {
            .grid-2 {
                grid-template-columns: repeat(2, 1fr);
            }

            .grid-3 {
                grid-template-columns: repeat(3, 1fr);
            }

            .grid-4 {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Sections */
        section {
            padding: 4rem 0;
        }

        .section-light {
            background-color: #ffffff;
        }

        .section-secondary {
            background-color: var(--secondary);
        }

        .section-primary {
            background-color: var(--primary);
            color: #ffffff;
        }

        /* Footer */
        footer {
            background-color: var(--foreground);
            color: #ffffff;
            padding: 3rem 0;
        }

        .footer-grid {
            display: grid;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        @media (min-width: 768px) {
            .footer-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        footer h4 {
            font-weight: bold;
            margin-bottom: 1rem;
            color: #ffffff;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            margin-bottom: 0.5rem;
        }

        footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        footer a:hover {
            opacity: 1;
        }

        footer p {
            font-size: 0.875rem;
            opacity: 0.8;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 2rem;
            text-align: center;
            font-size: 0.875rem;
            opacity: 0.8;
        }

        /* Alerts */
        .alert {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Form */
        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--foreground);
        }

        input, textarea, select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border);
            border-radius: 0.5rem;
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            ring: 2px solid var(--primary);
            border-color: var(--primary);
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        /* Utility Classes */
        .text-center {
            text-align: center;
        }

        .text-primary {
            color: var(--primary);
        }

        .text-muted {
            color: var(--muted-foreground);
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .mb-6 {
            margin-bottom: 2rem;
        }

        .mb-8 {
            margin-bottom: 3rem;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }

        .mt-6 {
            margin-top: 2rem;
        }

        .mt-8 {
            margin-top: 3rem;
        }

        .gap-4 {
            gap: 1.5rem;
        }

        .gap-6 {
            gap: 2rem;
        }

        .flex {
            display: flex;
        }

        .flex-col {
            flex-direction: column;
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .max-w-2xl {
            max-width: 42rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        /* Responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            h3 {
                font-size: 1.25rem;
            }

            section {
                padding: 2rem 0;
            }
        }
    </style>
    @yield('extra-styles')
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="nav-content">
                <a href="{{ route('home') }}" class="logo">
                    <div class="logo-icon">E</div>
                    <div class="logo-text">
                        <h1>ETEC</h1>
                        <p>Zona Leste</p>
                    </div>
                </a>
                <div class="nav-links">
                    <a href="{{ route('home') }}" class="@if(Route::current()->getName() === 'home') active @endif">Home</a>
                    <a href="{{ route('cursos') }}" class="@if(Route::current()->getName() === 'cursos') active @endif">Cursos</a>
                    <a href="{{ route('sobre') }}" class="@if(Route::current()->getName() === 'sobre') active @endif">Sobre</a>
                    <a href="{{ route('contato') }}" class="@if(Route::current()->getName() === 'contato') active @endif">Contato</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4>ETEC Zona Leste</h4>
                    <p>Formação técnica de qualidade para profissionais do futuro</p>
                </div>
                <div>
                    <h4>Links</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('cursos') }}">Cursos</a></li>
                        <li><a href="{{ route('sobre') }}">Sobre</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contato</h4>
                    <ul>
                        <li>Email: contato@eteczonaleste.edu.br</li>
                        <li>Telefone: (11) 3000-0000</li>
                    </ul>
                </div>
                <div>
                    <h4>Redes Sociais</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 ETEC Zona Leste. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    @yield('extra-scripts')
</body>
</html>
