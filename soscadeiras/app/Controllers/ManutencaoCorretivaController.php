<?php

namespace App\Controllers;

class ManutencaoCorretivaController extends BaseController
{
    public function index(): string
    {
        /* TODO: Necessário desenvolver o pattern Repository, temporariamente o conteudo esta na controller. 
        Pois foi definido no projeto que no primeiro momento não teria nenhum sistema em backend. */
        $data = [
            'tituloPagina' => "Cadeiras como novas, sempre prontas para uso.",
            'banner' => "dist/image/manutencaocorretiva/banner_corretiva.svg",
            'animacao' => "dist/image/gifs/gifsos2.gif",
            'perguntasFrequentes' => "dist/image/common/perguntas_frequentes.svg",
            'logoPerguntasFrequentes' => "dist/image/common/logo_perguntas_frequentes.svg",
            'textoContato' => [
                'tituloContato' => "Suas cadeiras em perfeito estado!",
                'subtituloContato' => "Solicite seu orçamento agora."
            ],
            'paragrafos' => [
                "Nosso serviço de manutenção corretiva foi projetado para garantir que suas cadeiras permaneçam funcionais, seguras e confortáveis.",
                "Especialistas em reparos, oferecemos soluções rápidas e eficazes para corrigir qualquer defeito, desgaste ou quebra, prolongando a vida útil das cadeiras e mantendo a qualidade do seu espaço."
            ],
            'textoExplicacao' => [
                'titulo' => 'O que é o serviço de manutenção corretiva de cadeiras?',
                'paragrafo' => ["A manutenção corretiva é um serviço de reparo para cadeiras que sofreram danos ou apresentam defeitos que comprometem sua estrutura ou conforto. Atuamos em problemas comuns, como ajuste de altura, substituição de rodízios, trocas de estofado, reparo em encostos e bases, garantindo a restauração completa das funções e do conforto original da cadeira."]
            ],
            'features' => [
                [
                    'icon' => 'bullet-check',
                    'title' => 'Rápido Atendimento:',
                    'description' => 'Agilidade no diagnóstico e reparo, evitando interrupções longas no uso.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Reparo Completo:',
                    'description' => 'Reparos em todas as partes da cadeira desde o assento até a base e o encosto.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Materiais de Alta Qualidade:',
                    'description' => 'Peças e componentes de reposição de excelente durabilidade, mantendo a qualidade original.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Economia:',
                    'description' => 'Restaure ao invés de substituir mantenha suas cadeiras funcionando bem e economize com a reposição completa.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Conforto e Segurança:',
                    'description' => 'Reparo em estruturas danificadas garante que as cadeiras ofereçam conforto e segurança aos usuários.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Sustentabilidade:',
                    'description' => 'Prolongar a vida útil das cadeiras é uma escolha sustentável, reduzindo o descarte de móveis.'
                ],
            ],
            'cards' => [
                [
                    "number" => 1,
                    "title" => "Diagnóstico Inicial",
                    "text" => "Nossa equipe realiza uma avaliação completa para identificar os problemas e necessidades de cada cadeira."
                ],
                [
                    "number" => 2,
                    "title" => "Orçamento",
                    "text" => "Após o diagnóstico, fornecemos um orçamento detalhado com as necessidades de reparo e os custos envolvidos."
                ],
                [
                    "number" => 3,
                    "title" => "Aprovação e Execução",
                    "text" => "Após a aprovação, realizamos o reparo com peças de alta qualidade, devolvendo as cadeiras ao estado funcional."
                ],
                [
                    "number" => 4,
                    "title" => "Revisão e Teste Final",
                    "text" => "Cada cadeira é revisada e testada para garantir que esteja completamente restaurada e segura para uso."
                ]
            ],
            'perguntas' => [
                [
                    "title" => "Quais tipos de reparo vocês oferecem?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Fazemos reparos em rodízios, encostos, assentos, ajustes de altura, substituição de estofados, entre outros."]
                ],
                [
                    "title" => "Quanto tempo leva para concluir o serviço?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["O tempo depende do tipo de reparo e da quantidade de cadeiras. Geralmente, o prazo é rápido, e informamos com clareza após o diagnóstico."]
                ],
                [
                    "title" => "Vocês atendem em empresas e escritórios?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Sim, atendemos tanto residências quanto empresas, com opções de pacotes para grandes volumes."]
                ],
                [
                    "title" => "Posso solicitar orçamento sem compromisso?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Claro, nossa equipe está à disposição para fazer um orçamento detalhado antes de qualquer compromisso."]
                ],
            ]
        ];
        return view('templates/header') . view('pages/servicos', $data) . view('templates/perguntasFrequentes') . view('templates/contato') . view('templates/footer');
    }
}
