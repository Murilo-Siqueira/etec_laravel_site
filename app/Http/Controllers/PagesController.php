<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Exibir página inicial
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Exibir página de cursos
     */
    public function cursos()
    {
        $cursos = [
            [
                'id' => 1,
                'nome' => 'Técnico em Informática',
                'descricao' => 'Formação completa em desenvolvimento web, sistemas e suporte técnico',
                'duracao' => '3 semestres',
                'vagas' => 40,
            ],
            [
                'id' => 2,
                'nome' => 'Técnico em Administração',
                'descricao' => 'Gestão empresarial, recursos humanos e operações comerciais',
                'duracao' => '3 semestres',
                'vagas' => 35,
            ],
            [
                'id' => 3,
                'nome' => 'Técnico em Logística',
                'descricao' => 'Gestão de cadeias de suprimentos e operações logísticas',
                'duracao' => '3 semestres',
                'vagas' => 30,
            ],
            [
                'id' => 4,
                'nome' => 'Técnico em Eletrônica',
                'descricao' => 'Circuitos, automação e sistemas eletrônicos',
                'duracao' => '3 semestres',
                'vagas' => 25,
            ],
            [
                'id' => 5,
                'nome' => 'Técnico em Mecânica',
                'descricao' => 'Desenho técnico, usinagem e manutenção industrial',
                'duracao' => '3 semestres',
                'vagas' => 28,
            ],
            [
                'id' => 6,
                'nome' => 'Técnico em Segurança do Trabalho',
                'descricao' => 'Normas, prevenção e gestão de segurança ocupacional',
                'duracao' => '3 semestres',
                'vagas' => 32,
            ],
        ];

        return view('pages.cursos', compact('cursos'));
    }

    /**
     * Exibir página sobre
     */
    public function sobre()
    {
        return view('pages.sobre');
    }

    /**
     * Exibir página de contato
     */
    public function contato()
    {
        return view('pages.contato');
    }

    /**
     * Processar formulário de contato
     */
    public function enviarContato(Request $request)
    {
        // Validar dados
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'telefone' => 'nullable|string',
            'assunto' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        // Aqui você pode enviar um email ou salvar em banco de dados
        // Por enquanto, apenas retornamos com sucesso
        
        return redirect()->route('contato')->with('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
    }
}
