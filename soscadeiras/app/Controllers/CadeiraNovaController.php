<?php

namespace App\Controllers;

class CadeiraNovaController extends BaseController
{
    public function index(): string
    {
        /* TODO: Necessário desenvolver o pattern Repository, temporariamente o conteudo esta na controller. 
        Pois foi definido no projeto que no primeiro momento não teria nenhum sistema em backend. */
        $data = [
            'tituloPagina' => "Cadeiras Novas",

            'banner' => "dist/image/cadeirasnovas/novas_banner.png",
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
                'titulo' => 'O que é o serviço de Cadeiras novas ?',
                'paragrafo' => ["A SOS Cadeiras oferece uma linha completa de cadeiras personalizáveis, projetadas para atender às necessidades de diversos ambientes, como escritórios, salas de reunião e home offices. Com a linha SOS Custom, você pode escolher o modelo ideal e personalizá-lo com tecidos, cores e ajustes ergonômicos, garantindo conforto, durabilidade e estilo."]
            ],
            'conteudoCadeiras' => [
                [
                    'subTituloCadeiras' => "Cadeiras de Escritório",
                    'textoNegrito' => 'Invista no seu bem-estar e na sua performance com a nossa linha de cadeiras de escritório. ',
                    'textos' => [
                        'Desenvolvidas com design ergonômico e tecnologia de ponta, nossas cadeiras oferecem o suporte ideal para longas jornadas de trabalho, prevenindo dores e promovendo uma postura correta.',
                        'Com ajustes personalizados de altura, inclinação, apoio lombar e braços, nossas cadeiras se adaptam às necessidades individuais de cada usuário, proporcionando conforto e produtividade.',
                        'Escolha entre diversos modelos, estilos e materiais, e encontre a cadeira perfeita para o seu escritório.'
                    ],
                    'bannerCadeira' => 'dist/image/cadeirasnovas/cadeiras_banner1.png',
                    'imageCadeira' => 'dist/image/cadeirasnovas/cadeira1.png',
                    'botaoContato' => false,
                    'itemAtivo' => 'cadeira-1 active'
                ],
                [
                    'subTituloCadeiras' => "Cadeiras Caixa",
                    'textoNegrito' => 'Cadeiras caixa: conforto e ergonomia para o dia a dia profissional',
                    'textos' => [
                        'As cadeiras caixa são projetadas para atender às necessidades específicas de ambientes operacionais, como caixas de supermercados, recepções e balcões de atendimento.',
                        'Com regulagem de altura do assento e apoio para os pés, nossas cadeiras caixa proporcionam conforto e ergonomia para profissionais que trabalham em posição elevada.',
                        'A estrutura robusta e os materiais duráveis garantem a segurança e a longevidade do produto, mesmo em ambientes de alta demanda.'
                    ],
                    'bannerCadeira' => 'dist/image/cadeirasnovas/cadeiras_banner2.png',
                    'imageCadeira' => 'dist/image/cadeirasnovas/cadeira2.png',
                    'botaoContato' => false,
                    'itemAtivo' => 'cadeira-2'
                ],
                [
                    'subTituloCadeiras' => "Cadeiras fixas/ Multifuncionais",
                    'textoNegrito' => 'Cadeiras Fixas e Multifuncionais: versatilidade e conforto para qualquer ambiente.',
                    'textos' => [
                        'Nossa linha de cadeiras fixas e multifuncionais oferece soluções versáteis e práticas para diversos ambientes, como salas de espera, auditórios, refeitórios e áreas de convivência.',
                        'Com design clean e funcional, nossas cadeiras se adaptam a diferentes estilos de decoração e proporcionam conforto para usuários em diversas situações.',
                        'Escolha entre modelos empilháveis, com ou sem braços, e encontre a opção ideal para o seu espaço.'
                    ],
                    'bannerCadeira' => 'dist/image/cadeirasnovas/cadeiras_banner3.png',
                    'imageCadeira' => 'dist/image/cadeirasnovas/cadeira3.png',
                    'botaoContato' => false,
                    'itemAtivo' => 'cadeira-3'
                ],
                [
                    'subTituloCadeiras' => "Cadeiras Sobrepeso",
                    'textoNegrito' => 'Cadeiras Reforçadas: mais conforto, segurança e estabilidade para todos.',
                    'textos' => [
                        'Pensando no conforto e bem-estar de todos os usuários, desenvolvemos uma linha de cadeiras com suporte reforçado, projetadas para oferecer maior estabilidade e segurança.',
                        'Com estruturas robustas, assentos amplos e materiais de alta resistência, essas cadeiras proporcionam o suporte ideal para pessoas de diferentes biotipos, garantindo conforto e ergonomia durante o uso.'
                    ],
                    'bannerCadeira' => 'dist/image/cadeirasnovas/cadeiras_banner4.png',
                    'imageCadeira' => 'dist/image/cadeirasnovas/cadeira4.png',
                    'botaoContato' => false,
                    'itemAtivo' => 'cadeira-4'
                ],
                [
                    'subTituloCadeiras' => "Cadeiras Longarinas",
                    'textoNegrito' => 'Longarinas: conforto e praticidade para otimizar espaços de espera',
                    'textos' => [
                        'As longarinas são a solução ideal para otimizar espaços de espera em clínicas, hospitais, aeroportos e outros ambientes com grande fluxo de pessoas.',
                        'Com design moderno e funcional, nossas longarinas oferecem conforto e praticidade para os usuários.Com estruturas robustas, assentos amplos e materiais de alta resistência, essas cadeiras proporcionam o suporte ideal para pessoas de diferentes biotipos, garantindo conforto e ergonomia durante o uso.',
                        'Disponíveis em diferentes tamanhos e configurações, nossas longarinas se adaptam às necessidades do seu espaço.'
                    ],
                    'bannerCadeira' => 'dist/image/cadeirasnovas/cadeiras_banner5.png',
                    'imageCadeira' => 'dist/image/cadeirasnovas/cadeira5.png',
                    'botaoContato' => false,
                    'itemAtivo' => 'cadeira-5'
                ],
                [
                    'subTituloCadeiras' => "Linha Econômica",
                    'textoNegrito' => 'Cadeiras econômicas: qualidade e conforto por um preço acessível',
                    'textos' => [
                        'Oferecemos uma linha de cadeiras com excelente custo-benefício, ideal para quem busca qualidade e conforto sem abrir mão de um preço acessível.',
                        'Nossas cadeiras da linha econômica são produzidas com materiais resistentes e design funcional, garantindo durabilidade e praticidade para o seu dia a dia.',
                    ],
                    'bannerCadeira' => 'dist/image/cadeirasnovas/cadeiras_banner6.png',
                    'imageCadeira' => 'dist/image/cadeirasnovas/cadeira6.png',
                    'botaoContato' => false,
                    'itemAtivo' => 'cadeira-6'
                ]
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
            'cardsCadeiraNova' => [
                [
                    "number" => 1,
                    "title" => "",
                    "text" => "A escolha da cadeira certa transforma espaços, eleva o conforto e aumenta a produtividade."
                ],
                [
                    "number" => 2,
                    "title" => "",
                    "text" => "SOS Cadeiras sua melhor escolha em cadeiras.      "
                ],
                [
                    "number" => 3,
                    "title" => "",
                    "text" => "Melhor custo-benefício do mercado, com atendimento personalizado e entrega rápida"
                ],

            ],
            'cards' => [
                [
                    "number" => 1,
                    "title" => "",
                    "text" => " Explore as opções no nosso catálogo SOS Custom e selecione a linha que melhor atende às suas necessidades."
                ],
                [
                    "number" => 2,
                    "title" => "",
                    "text" => "Escolha o tecido, cor, tipo de braço, rodízios e mecanismos. Nossos especialistas estão à disposição para orientá-lo."
                ],
                [
                    "number" => 3,
                    "title" => "",
                    "text" => "Solicite um orçamento detalhado com base na personalização escolhida e caracteristicas que você precisa."
                ],
                [
                    "number" => 4,
                    "title" => "",
                    "text" => "Após a aprovação, as cadeiras são montadas e produzidas com todo o cuidado e entregues prontas para uso."
                ],
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
        return view('templates/header') . view('pages/cadeiraNova', $data) . view('templates/perguntasFrequentes') . view('templates/contato') . view('templates/footer');
    }
}
