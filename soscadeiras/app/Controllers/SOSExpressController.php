<?php

namespace App\Controllers;

class SOSExpressController extends BaseController
{
    public function index(): string
    {
        /* TODO: Necessário desenvolver o pattern Repository, temporariamente o conteudo esta na controller. 
        Pois foi definido no projeto que no primeiro momento não teria nenhum sistema em backend. */
        $data = [
            'tituloPagina' => "Sua cadeira de volta à ação, sem sair do lugar.",
            'banner' => "dist/image/sosexpress/banner_sosexpress.svg",
            'animacao' => "dist/image/gifs/gifsos2.gif",
            'perguntasFrequentes' => "dist/image/common/perguntas_frequentes.svg",
            'logoPerguntasFrequentes' => "dist/image/common/logo_perguntas_frequentes.svg",
            'textoContato' => [
                'tituloContato' => "Suas cadeiras em perfeito estado!",
                'subtituloContato' => "Solicite seu orçamento agora."
            ],
            'paragrafos' => [
                "Oferecemos o conserto em domicílio para cadeiras de escritório, proporcionando conforto, conveniência e rapidez para quem precisa de uma solução imediata.",
                "Se você está na Grande São Paulo e não quer perder tempo com deslocamento, conte com a nossa equipe para resolver o problema na sua casa ou empresa."
            ],
            'textoExplicacao' => [],
            'features' => [
                [
                    'icon' => 'bullet-check',
                    'title' => 'Conveniência Absoluta:',
                    'description' => 'Conserto no local, evitando a necessidade de levar a cadeira até uma assistência.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Estoque de Peças Essenciais:',
                    'description' => 'Dispomos de peças como rodízios, pistões e bases para garantir que sua cadeira volte ao uso no mesmo dia.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Garantia de 12 Meses:',
                    'description' => 'Todas as peças substituídas possuem garantia de um ano contra defeitos de fabricação.'
                ],
            ],
            'cards' => [
                [
                    "number" => 1,
                    "title" => "Solicite a Avaliação",
                    "text" => "Entre em contato conosco via formulário, telefone ou WhatsApp para agendar uma avaliação gratuita."
                ],
                [
                    "number" => 2,
                    "title" => "Análise no Local",
                    "text" => "Um técnico especializado vai até o seu endereço, avalia a cadeira e identifica as necessidades de reparo."
                ],
                [
                    "number" => 3,
                    "title" => "Conserto Imediato",
                    "text" => "Com as peças em mãos, realizamos o conserto no local, garantindo que a cadeira esteja pronta para uso o mais rápido possível."
                ],
                [
                    "number" => 4,
                    "title" => "Pagamento e Garantia",
                    "text" => "Pagamento pode ser realizado no local, com emissão de garantia para as peças substituídas."
                ]
            ],
            'perguntas' => [
                [
                    "title" => "Quais regiões da Grande São Paulo são atendidas?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Atendemos São Paulo e toda a Grande São Paulo, incluindo ABC Paulista, Osasco, Guarulhos e Taboão da Serra."]
                ],
                [
                    "title" => "Quais peças estão disponíveis para substituição imediata?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Mantemos um estoque das peças mais solicitadas, como bases, rodízios, pistões e assentos, para facilitar o atendimento no mesmo dia."]
                ],
                [
                    "title" => "O conserto é feito na hora?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Sim, sempre que possível, realizamos o conserto no local. Caso seja necessária uma peça que não esteja disponível no momento, agendamos uma segunda visita sem custos adicionais."]
                ],
            ]
        ];
        return view('templates/header') . view('pages/servicos', $data) . view('templates/perguntasFrequentes') . view('templates/contato') . view('templates/footer');
    }
}
