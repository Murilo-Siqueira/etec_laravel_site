@extends('layouts.app')

@section('title', 'Contato - ETEC Zona Leste')

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

    .contact-grid {
        display: grid;
        gap: 2rem;
    }

    @media (min-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr 2fr;
        }
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .contact-card {
        display: flex;
        gap: 1rem;
    }

    .contact-icon {
        width: 48px;
        height: 48px;
        background-color: var(--secondary);
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 1.5rem;
    }

    .contact-card h3 {
        font-size: 1.125rem;
        margin-bottom: 0.5rem;
    }

    .contact-card a {
        color: var(--primary);
        text-decoration: none;
    }

    .contact-card a:hover {
        text-decoration: underline;
    }

    .hours-section {
        background-color: var(--secondary);
        padding: 1.5rem;
        border-radius: 0.5rem;
    }

    .hours-section h3 {
        margin-bottom: 1rem;
    }

    .hours-section p {
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
    }

    .contact-form {
        padding: 2rem;
    }

    .form-row {
        display: grid;
        gap: 1.5rem;
    }

    @media (min-width: 768px) {
        .form-row-2 {
            grid-template-columns: 1fr 1fr;
        }
    }

    .form-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .form-buttons button {
        flex: 1;
    }

    .form-note {
        font-size: 0.875rem;
        color: var(--muted-foreground);
        margin-top: 1rem;
    }
</style>
@endsection

@section('content')
<!-- Header Section -->
<section class="header-section">
    <div class="container">
        <a href="{{ route('home') }}" class="back-button">← Voltar</a>
        <h1>Entre em Contato</h1>
        <p>Tem dúvidas? Quer saber mais sobre nossos cursos? Fale conosco!</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section-light">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info">
                <div class="card contact-card">
                    <div class="contact-icon">✉️</div>
                    <div>
                        <h3>Email</h3>
                        <a href="mailto:contato@eteczonaleste.edu.br">contato@eteczonaleste.edu.br</a>
                    </div>
                </div>

                <div class="card contact-card">
                    <div class="contact-icon">📞</div>
                    <div>
                        <h3>Telefone</h3>
                        <a href="tel:+551130000000">(11) 3000-0000</a>
                    </div>
                </div>

                <div class="card contact-card">
                    <div class="contact-icon">📍</div>
                    <div>
                        <h3>Endereço</h3>
                        <p>Rua Exemplo, 123<br>São Paulo - SP<br>CEP: 00000-000</p>
                    </div>
                </div>

                <div class="card hours-section">
                    <h3>Horário de Atendimento</h3>
                    <p><strong>Segunda a Sexta:</strong> 08:00 - 18:00</p>
                    <p><strong>Sábado:</strong> 08:00 - 12:00</p>
                    <p><strong>Domingo:</strong> Fechado</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="card contact-form">
                <form action="{{ route('enviar-contato') }}" method="POST">
                    @csrf

                    <div class="form-row form-row-2">
                        <div class="form-group">
                            <label for="nome">Nome Completo *</label>
                            <input type="text" id="nome" name="nome" placeholder="Seu nome" value="{{ old('nome') }}" required>
                            @error('nome')
                                <span style="color: #721c24; font-size: 0.875rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" placeholder="seu@email.com" value="{{ old('email') }}" required>
                            @error('email')
                                <span style="color: #721c24; font-size: 0.875rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row form-row-2">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" id="telefone" name="telefone" placeholder="(11) 9999-9999" value="{{ old('telefone') }}">
                            @error('telefone')
                                <span style="color: #721c24; font-size: 0.875rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="assunto">Assunto *</label>
                            <select id="assunto" name="assunto" required>
                                <option value="">Selecione um assunto</option>
                                <option value="duvida-curso" @if(old('assunto') === 'duvida-curso') selected @endif>Dúvida sobre curso</option>
                                <option value="inscricao" @if(old('assunto') === 'inscricao') selected @endif>Inscrição</option>
                                <option value="vestibulinho" @if(old('assunto') === 'vestibulinho') selected @endif>Vestibulinho</option>
                                <option value="outro" @if(old('assunto') === 'outro') selected @endif>Outro</option>
                            </select>
                            @error('assunto')
                                <span style="color: #721c24; font-size: 0.875rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem *</label>
                        <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem aqui..." required>{{ old('mensagem') }}</textarea>
                        @error('mensagem')
                            <span style="color: #721c24; font-size: 0.875rem;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-buttons">
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                        <button type="reset" class="btn btn-outline">Limpar</button>
                    </div>

                    <p class="form-note">* Campos obrigatórios. Responderemos sua mensagem em até 24 horas úteis.</p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
