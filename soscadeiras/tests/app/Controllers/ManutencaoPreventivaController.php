<?php

namespace App\Controllers;

class ManutencaoPreventivaController extends BaseController
{
    public function index(): string
    {
        /* TODO: Necessário desenvolver o pattern Repository, temporariamente o conteudo esta na controller. 
        Pois foi definido no projeto que no primeiro momento não teria nenhum sistema em backend. */
        $data = [
            'tituloPagina' => "Prevenção e cuidados regulares para cadeiras sempre confortáveis e seguras.",
            'banner' => "dist/image/manutencaopreventiva/banner_preventiva.svg",
            'animacao' => "dist/image/gifs/gifsos2.gif",
            'perguntasFrequentes' => "dist/image/common/perguntas_frequentes.svg",
            'logoPerguntasFrequentes' => "dist/image/common/logo_perguntas_frequentes.svg",
            'textoContato' => [
                'tituloContato' => "Suas cadeiras em perfeito estado!",
                'subtituloContato' => "Solicite seu orçamento agora."
            ],
            'paragrafos' => [
                "Nosso serviço de manutenção preventiva foi desenvolvido para garantir que suas cadeiras permaneçam sempre em ótimo estado, evitando problemas e custos de reparos inesperados.",
                "Ideal para empresas e residências que desejam manter a qualidade e a durabilidade de seus móveis, a manutenção preventiva é uma escolha inteligente e econômica para preservar o conforto e a funcionalidade de suas cadeiras."
            ],
            'textoExplicacao' => [
                'titulo' => 'O que é o serviço de manutenção preventiva de cadeiras?',
                'paragrafo' => ["A manutenção preventiva é um conjunto de práticas de inspeção e pequenos ajustes realizados periodicamente para prevenir danos, desgaste excessivo e problemas futuros. Isso inclui lubrificação de mecanismos, ajuste de componentes e verificação de estabilidade para garantir que as cadeiras estejam sempre prontas para uso, minimizando a necessidade de manutenções corretivas e prolongando sua durabilidade."]
            ],
            'features' => [
                [
                    'icon' => 'bullet-check',
                    'title' => 'Prevenção de danos:',
                    'description' => 'Inspeções regulares ajudam a identificar pequenos problemas antes que se tornem grandes.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Conservação e durabilidade:',
                    'description' => 'Mantém as cadeiras sempre em excelente estado, preservando sua funcionalidade e aparência.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Segurança para os usuários:',
                    'description' => 'Verificação de estabilidade e integridade estrutural, reduzindo o risco de acidentes.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Redução de custos:',
                    'description' => 'Evita reparos emergenciais e aumenta a vida útil dos móveis, gerando economia, inclusive a longo prazo.'
                ],
            ],
            'cards' => [
                [
                    "number" => 1,
                    "title" => "Avaliação Inicial",
                    "text" => "Nossa equipe realiza uma avaliação para definir a frequência ideal de manutenção para cada cliente."
                ],
                [
                    "number" => 2,
                    "title" => "Plano de Manutenção ",
                    "text" => "Elaboramos um plano de acordo com o tipo e quantidade de cadeiras, além do nível de uso."
                ],
                [
                    "number" => 3,
                    "title" => "Serviços",
                    "text" => "Inclui pequenos ajustes, lubrificação de componentes e substituição de peças desgastadas para evitar problemas futuros."
                ],
                [
                    "number" => 4,
                    "title" => "Relatório",
                    "text" => "Ao final de cada manutenção, entregamos um relatório com as condições de cada cadeira e recomendações de cuidados adicionais."
                ]
            ],
            'perguntas' => [
                [
                    "title" => "Qual a frequência recomendada para a manutenção preventiva?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["A frequência depende do uso das cadeiras. Para cadeiras muito usadas, recomenda-se uma manutenção a cada 6 meses; em outros casos, pode ser anual."]
                ],
                [
                    "title" => "Vocês oferecem contratos de manutenção preventiva para empresas?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Sim, temos pacotes especiais para empresas que precisam de manutenção regular em cadeiras de escritório."]
                ],
                [
                    "title" => "Quais problemas são evitados com a manutenção preventiva?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["A manutenção preventiva previne desgastes em rodízios, ajuste de altura, bases e estrutura geral, evitando grandes reparos no futuro."]
                ],
                [
                    "title" => "Posso combinar com outros serviços, como manutenção corretiva?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Sim, a manutenção preventiva pode ser combinada com manutenções corretivas, ajustando as cadeiras que apresentarem qualquer problema."]
                ],
            ]
        ];
        return view('templates/header') . view('pages/servicos', $data) . view('templates/perguntasFrequentes') . view('templates/contato') . view('templates/footer');
    }
}
