<?php

namespace App\Controllers;

class AluguelCadeirasController extends BaseController
{
    public function index(): string
    {
        /*TODO: Necessário desenvolver o pattern Repository, temporariamente o conteudo esta na controller. */
        $data = [
            'tituloPagina' => "Seu escritório ou evento sempre bem equipado, sem comprometer o orçamento.",
            'banner' => "dist/image/aluguelcadeiras/banner_aluguel.svg",
            'animacao' => "dist/image/gifs/gifsos2.gif",
            'perguntasFrequentes' => "dist/image/common/perguntas_frequentes.svg",
            'logoPerguntasFrequentes' => "dist/image/common/logo_perguntas_frequentes.svg",
            'textoContato' => [
                'tituloContato' => "Suas cadeiras em perfeito estado!",
                'subtituloContato' => "Solicite seu orçamento agora."
            ],
            'paragrafos' => [
                "Nosso serviço de aluguel de cadeiras é ideal para empresas, eventos e espaços que precisam de uma solução dinâmica, confortável e econômica.",
                "Evite a compra de cadeiras novas e aproveite a praticidade de locar modelos de alta qualidade, entregues prontos para uso e com manutenção inclusa."
            ],
            'textoExplicacao' => [
                'titulo' => 'O que é o Serviço de Aluguel de Cadeiras?',
                'paragrafo' => ["Oferecemos cadeiras ergonômicas, executivas e até modelos especiais para eventos, disponibilizadas em regime de locação. Você escolhe o modelo e a quantidade desejada, define o período de uso e nós cuidamos de todo o restante: entrega, montagem, suporte e retirada."]
            ],
            'features' => [
                [
                    'icon' => 'bullet-check',
                    'title' => 'Variedade de modelos:',
                    'description' => 'Desde cadeiras de escritório ergonômicas até cadeiras fixas e longarinas para eventos ou áreas de espera.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Condições contratuais flexíveis:',
                    'description' => 'Alugue por períodos curtos (eventos pontuais) ou longos (alocação em escritórios).'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Manutenção Iinclusa:',
                    'description' => 'Caso ocorra qualquer defeito durante o período de locação, fazemos reparos ou substituição sem custo adicional.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Praticidade total:',
                    'description' => 'Entrega, montagem e retirada são por nossa conta, garantindo uma experiência sem preocupações.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Sempre em bom estado:',
                    'description' => 'Cadeiras passam por inspeções e manutenções constantes, chegando até você em perfeitas condições de uso.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Flexibilidade de quantidade:',
                    'description' => 'Ajuste o número de cadeiras conforme a demanda do seu negócio ou evento.'
                ],
            ],
            'cards' => [
                [
                    "number" => 1,
                    "title" => "Seleção de Modelos",
                    "text" => "Na hora da seleção, avalie qual modelo de cadeira do nosso portfólio melhor atende às suas necessidades. "
                ],
                [
                    "number" => 2,
                    "title" => "Definição do Período",
                    "text" => "Para o orçamento, informe por quanto tempo deseja alugar as cadeiras: Temos opções de curto prazo ou longo prazo."
                ],
                [
                    "number" => 3,
                    "title" => "Entrega e Instalação",
                    "text" => "Nossa equipe entrega as cadeiras no local e realiza a montagem ou organização, deixando tudo pronto para uso imediato."
                ],
                [
                    "number" => 4,
                    "title" => "Suporte e Retirada",
                    "text" => "Ao final do contrato ou em caso de ajustes na quantidade, é só nos avisar. Fazemos a retirada ou entrega sem complicações."
                ]
            ],
            'perguntas' => [
                [
                    "title" => "Vocês atendem em todo o estado de São Paulo?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Trabalhamos em toda a Grande São Paulo. Para outras regiões do estado, consulte nossa equipe."]
                ],
                [
                    "title" => "Posso personalizar a cor ou o tecido das cadeiras alugadas?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Temos alguns modelos que permitem essa personalização de cor. Verifique a disponibilidade no momento do orçamento."]
                ],
                [
                    "title" => "E se uma cadeira apresentar defeito durante o aluguel?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Fique tranquilo. Oferecemos manutenção inclusa e, se necessário, substituímos a cadeira por outra em perfeito estado. Para eventos, sempre enviamos algumas unidades extras para garantir que tudo ocorra perfeitamente."]
                ],
                [
                    "title" => "Existe quantidade mínima para aluguel?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Trabalhamos com contratos de no mínimo (X) cadeiras, mas condições especiais podem ser aplicadas para grandes volumes."]
                ],
            ]
        ];
        return view('templates/header') . view('pages/servicos', $data) . view('templates/perguntasFrequentes') . view('templates/contato') . view('templates/footer');
    }
}
