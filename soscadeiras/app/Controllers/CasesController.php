<?php

namespace App\Controllers;

class CasesController extends BaseController
{
    public function index(): string
    {
        $producao = 'Produção de pranchetas';
        $adaptacao = 'Trocas estofados, produção de pranchetas e adaptação assento';
        $manutencao = 'Padronização de estofados e manutenção mecânica';
        $pintura = 'Troca estofados, produção pranchetas e pintura';

        /*TODO: Necessário desenvolver o pattern Repository, temporariamente o conteudo esta na controller. */
        $data = [
            'tituloPagina' => "Nossos Cases",
            'subtitulo' => "Transformação com qualidade e dedicação",

            'textoContato' => [
                'tituloContato' => "Suas cadeiras em perfeito estado!",
                'subtituloContato' => "Solicite seu orçamento agora."
            ],
            'paragrafos' => [
                //"Veja como nossas soluções já transformaram cadeiras e ambientes, garantindo conforto, estilo e funcionalidade.",
                "Aqui você acompanha alguns de nossos projetos de reforma de cadeiras, onde devolvemos a beleza e o conforto a peças antigas ou danificadas. Cada projeto é único e realizado com cuidado e expertise, utilizando técnicas e materiais de alta qualidade.",
                "Descubra como podemos transformar suas cadeiras desgastadas em peças renovadas, com design atualizado e conforto incomparável. Veja alguns exemplos de nosso trabalho e inspire-se para o seu próximo projeto."
            ],
            'casesFilters' => [
                [
                    'dataFilter' => '*',
                    'class' => 'filter-active',
                    'title' => 'TODOS',
                    'descricaoCategoria' => 'Produtos'
                ],
                [
                    'dataFilter' => 'prod',
                    'class' => null,
                    'title' => 'PRODUÇÃO DE PRANCHETAS',

                ],
                [
                    'dataFilter' => 'adapt',
                    'class' => null,
                    'title' => 'TROCA DE ESTOFADOS',
                    'descricaoCategoria' => 'Trocas estofados, produção de pranchetas e adaptação assento'
                ],
                [
                    'dataFilter' => 'manut',
                    'class' => null,
                    'title' => 'MANUTENÇÃO',
                    'descricaoCategoria' => ''
                ],
                [
                    'dataFilter' => 'pin',
                    'class' => null,
                    'title' => 'PINTURA',
                    'descricaoCategoria' => ''
                ],
            ],
            'casesConteudos' => [
                [
                    'categoriaFilter' => 'adapt',
                    'imagemGaleria' => 'dist/image/reformaestofados/Estofados-ProducaoDePranchetas-AdaptacoesEPadronizacoes-01.jpg',
                    'description' => 'Trocas estofados, produção de pranchetas e adaptação assento (modelo de longarinas não é mais fabricado, cliente não encontrava quem pudesse realizar o serviço)',
                    'descricaoThumb' => $adaptacao
                ],
                [
                    'categoriaFilter' => 'adapt',
                    'imagemGaleria' => 'dist/cases/descritivo1/Estofados-ProducaoDePranchetas-AdaptacoesEPadronizacoes-02.jpg',
                    'description' => 'Trocas estofados, produção de pranchetas e adaptação assento (modelo de longarinas não é mais fabricado, cliente não encontrava quem pudesse realizar o serviço)',
                    'descricaoThumb' => $adaptacao
                ],
                [
                    'categoriaFilter' => 'adapt',
                    'imagemGaleria' => 'dist/cases/descritivo4/Estofados-ProducaoDePranchetas-AdaptacoesEPadronizacoes-03.jpg',
                    'description' => 'Trocas estofados, produção de pranchetas e adaptação assento (modelo de longarinas não é mais fabricado, cliente não encontrava quem pudesse realizar o serviço)',
                    'descricaoThumb' => $adaptacao
                ],
                [
                    'categoriaFilter' => 'adapt',
                    'imagemGaleria' => 'dist/cases/descritivo5/Estofados-Manutencao-01.jpg',
                    'description' => 'Trocas estofados, produção de pranchetas e adaptação assento (modelo de longarinas não é mais fabricado, cliente não encontrava quem pudesse realizar o serviço)',
                    'descricaoThumb' => $adaptacao
                ],
                [
                    'categoriaFilter' => 'adapt',
                    'imagemGaleria' => 'dist/cases/descritivo3/estofados.jpg',
                    'description' => 'Trocas estofados, produção de pranchetas e adaptação assento (modelo de longarinas não é mais fabricado, cliente não encontrava quem pudesse realizar o serviço)',
                    'descricaoThumb' => $adaptacao
                ],

                //descritivo 2
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-01.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-02.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-03.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-04.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-05.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-06.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-07.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-08.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-09.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-10.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-11.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],
                [
                    'categoriaFilter' => 'pin',
                    'imagemGaleria' => 'dist/cases/descritivo2/Estofados-ProducaoDePranchetas-Pintura-12.jpg',
                    'description' => 'Troca estofados, produção pranchetas e pintura eletrostática de bases tubulares',
                    'descricaoThumb' => $pintura
                ],

                //descritivo 3
              
                //descritivo 4
               
                [
                    'categoriaFilter' => 'prod',
                    'imagemGaleria' => 'dist/cases/descritivo4/Estofados-ProducaoDePranchetas-AdaptacoesEPadronizacoes-04.jpg',
                    'description' => 'Trocas estofados, produção de pranchetas e adaptação assento',
                    'descricaoThumb' => $producao
                ],
                // descritivo 5
               
                // descritivo 6
                [
                    'categoriaFilter' => 'manut',
                    'imagemGaleria' => 'dist/cases/descritivo6/Estofados-Manutencao-03.jpg',
                    'description' => 'Padronização de estofados e manutenção mecânica',
                    'descricaoThumb' => $manutencao
                ],
                // descritivo 7
                [
                    'categoriaFilter' => 'manut',
                    'imagemGaleria' => 'dist/cases/descritivo7/Estofados-Manutencao-02.jpg',
                    'description' => 'Padronização de estofados e manutenção mecânica',
                    'descricaoThumb' => $manutencao
                ]
            ]
        ];
        return view('templates/header') . view('pages/cases', $data) . view('templates/contato') . view('templates/footer');
    }
}
