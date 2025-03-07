<?php

namespace App\Controllers;

class ReformaEstofadosController extends BaseController
{
    public function index(): string
    {
        /* TODO: Necessário desenvolver o pattern Repository, temporariamente o conteudo esta na controller. 
        Pois foi definido no projeto que no primeiro momento não teria nenhum sistema em backend. */
        $data = [
            'tituloPagina' => "Transforme o visual e o conforto dos seus estofados sem precisar comprar novos.",
            'banner' => "dist/image/reformaestofados/banner_reforma.svg",
            'animacao' => "dist/image/gifs/gifsos2.gif",
            'perguntasFrequentes' => "dist/image/common/perguntas_frequentes.svg",
            'logoPerguntasFrequentes' => "dist/image/common/logo_perguntas_frequentes.svg",
            'textoContato' => [
                'tituloContato' => "Suas cadeiras em perfeito estado!",
                'subtituloContato' => "Solicite seu orçamento agora."
            ],
            'paragrafos' => [
                "Nosso serviço de reforma de estofados é ideal para quem deseja revitalizar cadeiras,  sem abrir mão da qualidade e conforto.",
                "Oferecemos soluções personalizadas que garantem a recuperação da beleza e funcionalidade de seus móveis. Economize e renove a sua casa ou empresa com nosso trabalho especializado."
            ],
            'textoExplicacao' => [
                'titulo' => 'O Que é o serviço de reforma de estofados?',
                'paragrafo' => ["A reforma de estofados consiste em restaurar estofados danificados ou desgastados, proporcionando um aspecto renovado e prolongando a vida útil da cadeira. O processo envolve a troca do tecido, ajuste da estrutura interna, reparos em molas e espumas, e a aplicação de acabamentos de alta qualidade, de acordo com as suas preferências."]
            ],
            'features' => [
                [
                    'icon' => 'bullet-check',
                    'title' => 'Substituição de Tecido:',
                    'description' => 'Escolha entre uma vasta gama de tecidos, cores e texturas para transformar completamente o visual do estofado.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Conservação e durabilidade:',
                    'description' => 'Mantém as cadeiras sempre em excelente estado, preservando sua funcionalidade e aparência.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Reparo e Ajustes Estruturais:',
                    'description' => 'Ajustes nos componentes internos (molas, espuma, madeira) para garantir conforto e durabilidade.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Acabamento Personalizado:',
                    'description' => 'Acabamentos e detalhes que atendem às suas preferências e ao estilo do ambiente.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Economia:',
                    'description' => 'Em vez de substituir móveis caros, você pode reformá-los e dar uma nova vida por um custo muito mais acessível.'
                ],
                [
                    'icon' => 'bullet-check',
                    'title' => 'Sustentabilidade:',
                    'description' => 'A reforma de estofados contribui para a redução de resíduos, evitando o descarte de móveis em bom estado.'
                ],
            ],
            'cards' => [
                [
                    "number" => 1,
                    "title" => "Avaliação do Estofado",
                    "text" => "Nossa equipe avalia as condições, identificando as áreas que precisam de reforma e sugerindo os melhores materiais."
                ],
                [
                    "number" => 2,
                    "title" => "Orçamento",
                    "text" => "Após o diagnóstico, fornecemos um orçamento detalhado com as necessidades de reparo e os custos envolvidos."
                ],
                [
                    "number" => 3,
                    "title" => "Processo de Reforma",
                    "text" => "A reforma é realizada conforme o que foi aprovado em orçamento. Com total atenção aos detalhes escolhidos."
                ],
                [
                    "number" => 4,
                    "title" => "Entrega",
                    "text" => "Após a reforma, entregamos a cadeira renovada e com garantia de qualidade, conforto e durabilidade."
                ]
            ],
            'perguntas' => [
                [
                    "title" => "Quanto tempo dura o processo de reforma?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["O tempo de reforma depende do tipo de cadeira e dos serviços necessários, mas geralmente leva de 7 a 15 dias úteis."]
                ],
                [
                    "title" => "Posso escolher o tecido para a reforma?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Sim, oferecemos uma ampla gama de tecidos para que você escolha o que melhor se adapta ao seu estilo e necessidades."]
                ],
                [
                    "title" => "Como saber qual é o melhor tecido para o meu estofado?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["A escolha depende do uso e do estilo desejado. Sempre orientamos os melhores tecidos de acordo com suas necessidades, garantindo durabilidade e beleza ao seu estofado."]
                ],
                [
                    "title" => "A reforma de estofados é mais barata que comprar uma cadeira nova?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Nem sempre. O custo pode variar dependendo do estado, e dos materiais escolhidos. No entanto, reformar traz outras vantagens, como a possibilidade de personalizar o estofado ao seu gosto, preservar peças com valor sentimental e reduzir o impacto ambiental ao evitar o descarte de móveis."]
                ],
            ]
        ];
        return view('templates/header') . view('pages/servicos', $data) . view('templates/perguntasFrequentes') . view('templates/contato') . view('templates/footer');
    }
}
