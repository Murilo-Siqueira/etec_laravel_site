@extends('layouts.app')

@section('title', 'Cursos - ETEC Zona Leste')

@section('extra-styles')
<style>
    .header-section {
        background-color: var(--secondary);
        padding: 2rem 0;
    }

    .header-section h1 {
        color: var(--primary);
        margin-bottom: 1rem;
    }

    .back-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--primary);
        text-decoration: none;
        margin-bottom: 1rem;
        font-weight: 500;
    }

    .back-button:hover {
        text-decoration: underline;
    }

    .courses-grid {
        display: grid;
        gap: 1.5rem;
    }

    @media (min-width: 768px) {
        .courses-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        @media (min-width: 1024px) {
            .courses-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    }

    .course-card {
        display: flex;
        flex-direction: column;
    }

    .course-card-header {
        height: 120px;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        border-radius: 0.5rem 0.5rem 0 0;
    }

    .course-info {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .course-info h3 {
        margin-bottom: 0.5rem;
    }

    .course-info p {
        color: var(--muted-foreground);
        font-size: 0.875rem;
        margin-bottom: 1rem;
        flex: 1;
    }

    .course-details {
        display: flex;
        gap: 1rem;
        padding-top: 1rem;
        border-top: 1px solid var(--border);
        margin-bottom: 1rem;
        font-size: 0.875rem;
    }

    .course-detail-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--foreground);
    }

    .course-detail-item strong {
        color: var(--primary);
    }

    .cta-section {
        text-align: center;
        background-color: var(--secondary);
        padding: 3rem 0;
        margin-top: 3rem;
    }

    .cta-section h2 {
        color: var(--primary);
        margin-bottom: 1rem;
    }

    .cta-section p {
        color: var(--muted-foreground);
        margin-bottom: 2rem;
    }
</style>
@endsection

@section('content')
<!-- Header Section -->
<section class="header-section">
    <div class="container">
        <a href="{{ route('home') }}" class="back-button">← Voltar</a>
        <h1>Nossos Cursos</h1>
        <p>Escolha entre nossos cursos técnicos de qualidade e comece sua jornada profissional</p>
    </div>
</section>

<!-- Courses Grid -->
<section class="section-light">
    <div class="container">
        <div class="courses-grid">
            @foreach($cursos as $curso)
            <div class="card course-card">
                <div class="course-card-header"></div>
                <div class="course-info">
                    <h3>{{ $curso['nome'] }}</h3>
                    <p>{{ $curso['descricao'] }}</p>
                    <div class="course-details">
                        <div class="course-detail-item">
                            <span>⏱️</span>
                            <span>{{ $curso['duracao'] }}</span>
                        </div>
                        <div class="course-detail-item">
                            <span>👥</span>
                            <span>{{ $curso['vagas'] }} vagas</span>
                        </div>
                    </div>
                    <button class="btn btn-primary" style="width: 100%;">Saiba Mais</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Tem dúvidas sobre qual curso escolher?</h2>
        <p>Entre em contato conosco! Nossos orientadores estão prontos para ajudar você a escolher o melhor caminho.</p>
        <a href="{{ route('contato') }}" class="btn btn-primary">Fale Conosco</a>
    </div>
</section>
@endsection
