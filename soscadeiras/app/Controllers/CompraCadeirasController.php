<?php

namespace App\Controllers;

class CompraCadeirasController extends BaseController
{
    public function index(): string
    {
        /* TODO: Necessário desenvolver o pattern Repository, temporariamente o conteudo esta na controller. 
        Pois foi definido no projeto que no primeiro momento não teria nenhum sistema em backend. */
        $data = [
            'tituloPagina' => "Compra de Cadeiras",
            'banner' => "dist/image/compracadeiras/banner_compra.png",
            'animacao' => "dist/image/gifs/gifsos2.gif",
            'perguntasFrequentes' => "dist/image/common/perguntas_frequentes.svg",
            'logoPerguntasFrequentes' => "dist/image/common/logo_perguntas_frequentes.svg",
            'textoContato' => [
                'tituloContato' => "Suas cadeiras em perfeito estado!",
                'subtituloContato' => "Solicite seu orçamento agora."
            ],
            'paragrafos' => [
                "Trabalhar com conforto e ergonomia é essencial para a sua saúde e produtividade, nossa linha de cadeiras de escritório oferece design moderno, ajustes personalizados e materiais de alta qualidade, garantindo o suporte ideal para longas jornadas de trabalho.",
                "Descubra a cadeira perfeita para você e transforme o seu ambiente de trabalho, invista em cadeiras que proporcionam bem-estar e produtividade e traga mais conforto e ergonomia para o seu dia a dia",
                "Encontre a cadeira Ideal para o seu estilo e necessidade"
            ],
            'textoExplicacao' => [
                'titulo' => 'O que é o serviço de Compra de Cadeiras?',
                'paragrafo' => ["A SOS Cadeiras oferece uma linha completa de cadeiras personalizáveis, projetadas para atender às necessidades de diversos ambientes, como escritórios, salas de reunião e home offices. Com a linha SOS Custom, você pode escolher o modelo ideal e personalizá-lo com tecidos, cores e ajustes ergonômicos, garantindo conforto, durabilidade e estilo."]
            ],
            'features' => [
                [
                    'icon' => 'bullet-check',
                    'title' => 'Variedade de Modelos:',
                    'description' => 'Opções que incluem cadeiras Secretária, Executiva, Diretor e Presidente, adaptáveis a diferentes espaços e funções.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Personalização Completa:',
                    'description' => 'Escolha tecidos (Curvin, Detroit, Crepe, entre outros), cores e tipos de braços e rodízios.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Ergonomia Garantida:',
                    'description' => 'Mecanismos ergonômicos com regulagem de altura e inclinação para maior conforto.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Durabilidade Superior:',
                    'description' => 'Estruturas em aço ou nylon e espumas injetadas D45 de alta densidade, projetadas para uso intenso e prolongado.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Opções de Montagem:',
                    'description' => 'Configurações com braços fixos, reguláveis ou sem braços, além de bases fixas ou giratórias.'
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
                    "title" => "Escolha do Modelo",
                    "text" => " Explore as opções no nosso catálogo SOS Custom e selecione a linha que melhor atende às suas necessidades."
                ],
                [
                    "number" => 2,
                    "title" => "Personalização",
                    "text" => "Escolha o tecido, cor, tipo de braço, rodízios e mecanismos. Nossos especialistas estão à disposição para orientá-lo."
                ],
                [
                    "number" => 3,
                    "title" => "Orçamento e Pedido",
                    "text" => "Solicite um orçamento detalhado com base na personalização escolhida e caracteristicas que você precisa."
                ],
                [
                    "number" => 4,
                    "title" => "Produção e Entrega",
                    "text" => "Após a aprovação, as cadeiras são montadas e produzidas com todo o cuidado e entregues prontas para uso."
                ]
            ],
            'perguntas' => [
                [
                    "title" => "Posso personalizar todas as cadeiras do catálogo?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Sim! Todos os modelos SOS Custom são personalizáveis, incluindo tecido, cor, e tipo de braços e rodízios."]
                ],
                [
                    "title" => "Quais são as opções de cores e tecidos?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Trabalhamos com uma ampla variedade, incluindo Curvin, Detroit, Crepe e outros. Consulte nosso catálogo para detalhes."]
                ],
                [
                    "title" => "Quanto tempo leva para produzir uma cadeira personalizada?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["O prazo médio é de 10 a 15 dias úteis, dependendo da quantidade e do nível de personalização."]
                ],
                [
                    "title" => "Vocês oferecem garantia nas cadeiras?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Sim, nossas cadeiras possuem garantia contra defeitos de fabricação. Consulte os termos para mais detalhes."]
                ],
            ]
        ];
        return view('templates/header') . view('pages/servicos', $data) . view('templates/perguntasFrequentes') . view('templates/contato') . view('templates/footer');
    }
}
