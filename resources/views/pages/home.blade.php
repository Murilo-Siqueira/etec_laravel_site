@extends('layouts.app')

@section('title', 'Home - ETEC Zona Leste')

@section('extra-styles')
<style>
    .hero {
        position: relative;
        height: 400px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%232D5016" width="1200" height="600"/></svg>');
        background-size: cover;
        background-position: center;
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: #ffffff;
    }

    .hero h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: #ffffff;
    }

    .hero p {
        font-size: 1.25rem;
        margin-bottom: 2rem;
        color: rgba(255, 255, 255, 0.9);
    }

    .highlights {
        display: grid;
        gap: 1.5rem;
    }

    @media (min-width: 768px) {
        .highlights {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .highlight-card {
        text-align: center;
    }

    .highlight-icon {
        width: 48px;
        height: 48px;
        background-color: var(--secondary);
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.5rem;
    }

    .about-section {
        display: grid;
        gap: 3rem;
        align-items: center;
    }

    @media (min-width: 768px) {
        .about-section {
            grid-template-columns: 1fr 1fr;
        }
    }

    .about-section img {
        border-radius: 0.5rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .courses-preview {
        display: grid;
        gap: 1.5rem;
    }

    @media (min-width: 768px) {
        .courses-preview {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .course-card {
        padding: 1.5rem;
    }

    .course-card-header {
        height: 100px;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        border-radius: 0.5rem 0.5rem 0 0;
        margin: -1.5rem -1.5rem 1rem -1.5rem;
    }

    .cta-section {
        text-align: center;
    }

    .cta-section h2 {
        color: #ffffff;
        margin-bottom: 1.5rem;
    }

    .cta-section p {
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 2rem;
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>ETEC Zona Leste</h1>
        <p>Formação técnica de qualidade para o seu futuro profissional</p>
        <a href="{{ route('cursos') }}" class="btn btn-primary">Conheça Nossos Cursos</a>
    </div>
</section>

<!-- Highlights Section -->
<section class="section-light">
    <div class="container">
        <h2 class="text-center mb-8 text-primary">Por que escolher a ETEC?</h2>
        <div class="highlights">
            <div class="highlight-card card">
                <div class="highlight-icon">📚</div>
                <h3>Cursos Técnicos</h3>
                <p class="text-muted">Formação profissionalizante de qualidade reconhecida no mercado</p>
            </div>
            <div class="highlight-card card">
                <div class="highlight-icon">👥</div>
                <h3>Comunidade</h3>
                <p class="text-muted">Ambiente acolhedor com professores dedicados e colegas engajados</p>
            </div>
            <div class="highlight-card card">
                <div class="highlight-icon">🏆</div>
                <h3>Certificação</h3>
                <p class="text-muted">Diplomas reconhecidos pelo estado e valorizados pelas empresas</p>
            </div>
            <div class="highlight-card card">
                <div class="highlight-icon">📧</div>
                <h3>Suporte</h3>
                <p class="text-muted">Acompanhamento completo durante toda sua jornada na ETEC</p>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="section-secondary">
    <div class="container">
        <div class="about-section">
            <div>
                <h2 class="text-primary mb-6">Sobre a ETEC Zona Leste</h2>
                <p class="mb-4">A ETEC Zona Leste é uma instituição de ensino técnico vinculada ao Centro Paula Souza (CPS), oferecendo formação profissionalizante de qualidade para jovens e adultos.</p>
                <p class="mb-6">Com uma trajetória de excelência, preparamos nossos alunos não apenas com conhecimento técnico, mas também com valores éticos e responsabilidade social.</p>
                <a href="{{ route('sobre') }}" class="btn btn-outline">Saiba Mais</a>
            </div>
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%232D5016' width='400' height='300'/%3E%3Ctext x='50%' y='50%' font-size='24' fill='white' text-anchor='middle' dominant-baseline='middle'%3ECampus ETEC%3C/text%3E%3C/svg%3E" alt="Campus ETEC" style="width: 100%; height: auto;">
        </div>
    </div>
</section>

<!-- Courses Preview Section -->
<section class="section-light">
    <div class="container">
        <h2 class="text-center mb-8 text-primary">Nossos Cursos</h2>
        <div class="courses-preview">
            <div class="card course-card">
                <div class="course-card-header"></div>
                <h3>Informática</h3>
                <p class="text-muted">Desenvolvimento web e sistemas</p>
                <a href="{{ route('cursos') }}" class="btn btn-primary" style="width: 100%; text-align: center; margin-top: 1rem;">Ver Detalhes →</a>
            </div>
            <div class="card course-card">
                <div class="course-card-header"></div>
                <h3>Administração</h3>
                <p class="text-muted">Gestão empresarial e negócios</p>
                <a href="{{ route('cursos') }}" class="btn btn-primary" style="width: 100%; text-align: center; margin-top: 1rem;">Ver Detalhes →</a>
            </div>
            <div class="card course-card">
                <div class="course-card-header"></div>
                <h3>Logística</h3>
                <p class="text-muted">Gestão de cadeias de suprimentos</p>
                <a href="{{ route('cursos') }}" class="btn btn-primary" style="width: 100%; text-align: center; margin-top: 1rem;">Ver Detalhes →</a>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="{{ route('cursos') }}" class="btn btn-primary">Ver Todos os Cursos</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-primary">
    <div class="container cta-section">
        <h2>Pronto para começar sua jornada?</h2>
        <p>Entre em contato conosco para mais informações sobre inscrições, vestibulinho e programas especiais.</p>
        <a href="{{ route('contato') }}" class="btn btn-primary" style="background-color: #ffffff; color: var(--primary);">Fale Conosco</a>
    </div>
</section>
@endsection
