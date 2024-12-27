<?php

namespace App\Controllers;

class SobreNosController extends BaseController
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
            'textoContato' => [],
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
                    "title" => "Comprometimento",
                    "text" => "É mais do que uma promessa; é uma prática constante. Atuamos com qualidade, transparência e responsabilidade em cada etapa do serviço. Construindo construir relações duradouras baseadas na confiança e na excelência"
                ],
                [
                    "number" => 2,
                    "title" => "Colaboração",
                    "text" => "Colaboramos estreitamente com nossos clientes e fornecedores para encontrar as melhores soluções. Acreditamos que a colaboração é a chave para resultados incríveis,  que superam expectativas."
                ],
                [
                    "number" => 3,
                    "title" => "Competência",
                    "text" => "Está no coração da nossa operação. Somos capacitados e motivado a oferecer soluções que fazem a diferença, garantindo que cada cadeira reformada ou fornecida ofereça sempre um ótimo custo-benefício."
                ],
            ],
            'perguntas' => [
                [
                    "title" => "Como posso solicitar um orçamento ?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => [
                        "Você pode solicitar um orçamento de três maneiras:",
                        "WhatsApp: Envie uma mensagem para (11) 99666-1891 com os detalhes do serviço ou produto desejado.",
                        "Formulário de Contato: Preencha o formulário disponível nesta página, incluindo todas as informações relevantes.",
                        "E-mail: Envie um e-mail para contato@soscadeiras.com com as especificações do serviço ou produto, e nossa equipe retornará com um orçamento detalhado.",
                        "Para serviços de tapeçaria e reforma de estofados, não se esqueça de anexar uma foto do item para um orçamento mais preciso."
                    ]
                ],
                [
                    "title" => "Quanto tempo demora para responder minha mensagem?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Respondemos em até 24 horas, garantindo agilidade e eficiência no atendimento."]
                ],
                [
                    "title" => "Vocês atendem em empresas e escritórios?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Sim, atendemos tanto residências quanto empresas, com opções de pacotes para grandes volumes."]
                ],
                [
                    "title" => "Posso agendar uma visita técnica pelo WhatsApp?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Sim! Basta enviar uma mensagem com suas informações e detalhes da solicitação para o número (11) 99666-1891."]
                ],
                [
                    "title" => "Qual é o horário de atendimento?",
                    "icon" => "dist/image/common/logo_perguntas_frequentes.svg",
                    "text" => ["Nosso horário de atendimento é de segunda a sexta-feira das 9h às 17h, exceto feriados."]
                ],
            ]
        ];
        return view('templates/header') . view('pages/sobrenos', $data)  . view('templates/contato') . view('templates/footer');
    }
}
