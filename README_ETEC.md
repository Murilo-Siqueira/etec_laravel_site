# Site da ETEC Zona Leste - Laravel

Um site moderno e responsivo para a ETEC Zona Leste, desenvolvido com Laravel 10 e PHP 8.1.

## 📋 Características

- ✅ **4 Páginas Principais**: Home, Cursos, Sobre e Contato
- ✅ **Design Responsivo**: Funciona em desktop, tablet e mobile
- ✅ **Formulário de Contato**: Com validação de dados
- ✅ **Navegação Intuitiva**: Menu sticky e fácil navegação
- ✅ **Cores Institucionais**: Verde (#2D5016) e branco
- ✅ **Tipografia Moderna**: Roboto e Roboto Slab do Google Fonts
- ✅ **Estrutura Simples**: Fácil de manter e expandir

## 🚀 Requisitos

- PHP 8.1 ou superior
- Composer
- Laravel 10

## 📦 Instalação

### 1. Clonar o repositório

```bash
git clone <seu-repositorio> etec_laravel
cd etec_laravel
```

### 2. Instalar dependências

```bash
composer install
```

### 3. Configurar arquivo .env

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Iniciar o servidor

```bash
php artisan serve
```

O site estará disponível em `http://localhost:8000`

## 📁 Estrutura do Projeto

```
etec_laravel/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PagesController.php       # Controller das páginas
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php             # Layout base
│       └── pages/
│           ├── home.blade.php            # Página inicial
│           ├── cursos.blade.php          # Página de cursos
│           ├── sobre.blade.php           # Página sobre
│           └── contato.blade.php         # Página de contato
├── routes/
│   └── web.php                           # Rotas da aplicação
└── public/
    └── index.php                         # Ponto de entrada
```

## 🎨 Customização

### Alterar Cores

Edite o arquivo `resources/views/layouts/app.blade.php` e procure pela seção `:root`:

```css
:root {
    --primary: #2D5016;           /* Cor principal (verde) */
    --primary-light: #3a6b1f;     /* Cor principal clara */
    --secondary: #f5f5f5;         /* Cor secundária (cinza claro) */
    --foreground: #1a1a1a;        /* Cor do texto */
    --border: #e5e5e5;            /* Cor das bordas */
    --muted-foreground: #666666;  /* Cor do texto muted */
}
```

### Adicionar Novos Cursos

Edite o arquivo `app/Http/Controllers/PagesController.php` no método `cursos()`:

```php
$cursos = [
    [
        'id' => 7,
        'nome' => 'Novo Curso',
        'descricao' => 'Descrição do novo curso',
        'duracao' => '3 semestres',
        'vagas' => 40,
    ],
    // ... mais cursos
];
```

### Alterar Informações de Contato

Edite o arquivo `resources/views/pages/contato.blade.php` e procure pela seção de contato:

```blade
<a href="mailto:novo@email.com">novo@email.com</a>
<a href="tel:+551133333333">(11) 3333-3333</a>
```

## 📧 Formulário de Contato

O formulário de contato valida os dados e exibe mensagens de sucesso/erro. Para implementar envio de emails, adicione a configuração no arquivo `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=seu-smtp-host
MAIL_PORT=587
MAIL_USERNAME=seu-email
MAIL_PASSWORD=sua-senha
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=seu-email
MAIL_FROM_NAME="ETEC Zona Leste"
```

E atualize o método `enviarContato()` no controller para enviar emails.

## 🔧 Rotas Disponíveis

| Rota | Método | Descrição |
|------|--------|-----------|
| `/` | GET | Página inicial |
| `/cursos` | GET | Página de cursos |
| `/sobre` | GET | Página sobre |
| `/contato` | GET | Página de contato |
| `/contato` | POST | Enviar formulário de contato |

## 📱 Responsividade

O site é totalmente responsivo e se adapta a:
- **Desktop**: 1024px ou mais
- **Tablet**: 768px a 1023px
- **Mobile**: Menos de 768px

## 🎯 Próximos Passos

Para expandir o projeto, você pode:

1. **Adicionar banco de dados**: Criar modelos para cursos, notícias, etc.
2. **Sistema de autenticação**: Painel administrativo para gerenciar conteúdo
3. **Blog/Notícias**: Página para publicar notícias e eventos
4. **Galeria de fotos**: Seção com imagens do campus
5. **Integração com email**: Enviar confirmações de contato por email

## 📝 Licença

Este projeto é de uso livre para a ETEC Zona Leste.

## 👨‍💻 Desenvolvedor

Desenvolvido como um projeto educacional simples e iniciante em Laravel.

---

**Versão**: 1.0.0  
**Data**: Abril de 2026  
**Laravel**: 10.x  
**PHP**: 8.1+
