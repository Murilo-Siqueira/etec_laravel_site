@extends('layouts.app')

@section('title', 'Sobre - ETEC Zona Leste')

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

    .about-grid {
        display: grid;
        gap: 3rem;
        align-items: center;
        margin-bottom: 3rem;
    }

    @media (min-width: 768px) {
        .about-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    .about-grid img {
        border-radius: 0.5rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        width: 100%;
        height: auto;
    }

    .mvv-section {
        display: grid;
        gap: 1.5rem;
        margin-bottom: 3rem;
    }

    @media (min-width: 768px) {
        .mvv-section {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .mvv-card {
        text-align: center;
    }

    .mvv-icon {
        width: 60px;
        height: 60px;
        background-color: var(--secondary);
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 2rem;
    }

    .mvv-card h3 {
        color: var(--primary);
        margin-bottom: 1rem;
    }

    .highlights-section {
        background-color: var(--secondary);
        padding: 2rem;
        border-radius: 0.5rem;
    }

    .highlights-grid {
        display: grid;
        gap: 2rem;
    }

    @media (min-width: 768px) {
        .highlights-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .highlight-item {
        display: flex;
        gap: 1rem;
    }

    .highlight-line {
        width: 4px;
        background-color: var(--primary);
        border-radius: 9999px;
        flex-shrink: 0;
    }

    .highlight-item h4 {
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: var(--foreground);
    }

    .stats-section {
        background-color: var(--primary);
        color: #ffffff;
        text-align: center;
        padding: 3rem 0;
    }

    .stats-grid {
        display: grid;
        gap: 2rem;
    }

    @media (min-width: 768px) {
        .stats-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .stat-item {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        font-size: 1rem;
        opacity: 0.9;
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

    .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        justify-content: center;
    }

    @media (min-width: 768px) {
        .cta-buttons {
            flex-direction: row;
        }
    }
</style>
@endsection

@section('content')
<!-- Header Section -->
<section class="header-section">
    <div class="container">
        <a href="{{ route('home') }}" class="back-button">← Voltar</a>
        <h1>Sobre a ETEC Zona Leste</h1>
        <p>Conheça nossa história, missão e compromisso com a educação de qualidade</p>
    </div>
</section>

<!-- About Section -->
<section class="section-light">
    <div class="container">
        <div class="about-grid">
            <div>
                <h2 class="text-primary mb-6">Quem Somos</h2>
                <p class="mb-4">A ETEC Zona Leste é uma instituição de ensino técnico vinculada ao Centro Paula Souza (CPS), órgão ligado à Secretaria de Desenvolvimento Econômico do Estado de São Paulo. Desde sua fundação, dedicamos-nos a oferecer educação profissionalizante de qualidade.</p>
                <p class="mb-4">Nosso compromisso é preparar profissionais competentes, éticos e responsáveis, capazes de contribuir para o desenvolvimento da sociedade e do mercado de trabalho.</p>
                <p>Com professores experientes e infraestrutura moderna, oferecemos uma formação integral que combina conhecimento técnico com desenvolvimento de habilidades socioemocionais.</p>
            </div>
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%232D5016' width='400' height='300'/%3E%3Ctext x='50%' y='50%' font-size='24' fill='white' text-anchor='middle' dominant-baseline='middle'%3ECampus ETEC%3C/text%3E%3C/svg%3E" alt="Campus ETEC">
        </div>

        <!-- Mission, Vision, Values -->
        <div class="mvv-section">
            <div class="card mvv-card">
                <div class="mvv-icon">🎯</div>
                <h3>Missão</h3>
                <p class="text-muted">Oferecer educação técnica de qualidade que prepare profissionais competentes e éticos para o mercado de trabalho e para a vida em sociedade.</p>
            </div>
            <div class="card mvv-card">
                <div class="mvv-icon">💡</div>
                <h3>Visão</h3>
                <p class="text-muted">Ser referência em educação técnica profissionalizante, reconhecida pela excelência, inovação e compromisso com o desenvolvimento social e econômico.</p>
            </div>
            <div class="card mvv-card">
                <div class="mvv-icon">❤️</div>
                <h3>Valores</h3>
                <p class="text-muted">Ética, qualidade, inclusão, inovação, responsabilidade social e respeito à diversidade guiam todas as nossas ações.</p>
            </div>
        </div>

        <!-- Highlights -->
        <div class="highlights-section">
            <h2 class="text-primary mb-6">Destaques da ETEC</h2>
            <div class="highlights-grid">
                <div class="highlight-item">
                    <div class="highlight-line"></div>
                    <div>
                        <h4>Professores Qualificados</h4>
                        <p class="text-muted">Equipe de professores com experiência profissional e formação acadêmica sólida</p>
                    </div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-line"></div>
                    <div>
                        <h4>Infraestrutura Moderna</h4>
                        <p class="text-muted">Laboratórios equipados e salas de aula com tecnologia de ponta</p>
                    </div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-line"></div>
                    <div>
                        <h4>Parcerias Empresariais</h4>
                        <p class="text-muted">Convênios com empresas para estágios e oportunidades de trabalho</p>
                    </div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-line"></div>
                    <div>
                        <h4>Programas Especiais</h4>
                        <p class="text-muted">Projetos de extensão, eventos técnicos e atividades complementares</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="stats-section">
    <div class="container">
        <h2 style="color: #ffffff; margin-bottom: 3rem;">Números que Falam por Si</h2>
        <div class="stats-grid">
            <div>
                <div class="stat-item">1500+</div>
                <div class="stat-label">Alunos Ativos</div>
            </div>
            <div>
                <div class="stat-item">50+</div>
                <div class="stat-label">Professores</div>
            </div>
            <div>
                <div class="stat-item">10+</div>
                <div class="stat-label">Cursos Técnicos</div>
            </div>
            <div>
                <div class="stat-item">95%</div>
                <div class="stat-label">Taxa de Empregabilidade</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Quer fazer parte da ETEC?</h2>
        <p>Conheça nossos cursos e descubra como podemos ajudar você a alcançar seus objetivos profissionais.</p>
        <div class="cta-buttons">
            <a href="{{ route('cursos') }}" class="btn btn-primary">Ver Cursos</a>
            <a href="{{ route('contato') }}" class="btn btn-outline">Fale Conosco</a>
        </div>
    </div>
</section>
@endsection
