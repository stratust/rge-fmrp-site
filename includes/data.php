<?php
/**
 * data.php — Dados centralizados do Depto de Genética FMRP/USP
 * Corrigido: erros de syntax, dados consistentes
 */

// ── DOCENTES (17 + 3 extras) ──────────────────────────────
$DOCENTES = [
    ['nome'=>'Wilson Araújo da Silva Junior','cargo'=>'Professor Associado — MS 5','setor'=>'Genética Molecular e Bioinformática','email'=>'wilsonjr@usp.br','telefone'=>'(16) 3315-8714','categoria'=>'chefe','area'=>'Bioinformática'],
    ['nome'=>'Ester Silveira Ramos','cargo'=>'Professora Titular — MS 6','setor'=>'Genética Humana e Médica','email'=>'esramos@fmrp.usp.br','telefone'=>'(16) 3315-4914','categoria'=>'vice-chefe','area'=>'Genética Humana'],
    ['nome'=>'Alexandro Guterres da Silva','cargo'=>'Professor Doutor — MS 3','setor'=>'Genética Molecular e Bioinformática','email'=>'guterres@fmrp.usp.br','telefone'=>'(16) 3315-3164','categoria'=>'docente','area'=>'Bioinformática'],
    ['nome'=>'Aparecida Maria Fontes','cargo'=>'Professora Doutora — MS 3','setor'=>'Doenças Metabólicas Hereditárias','email'=>'aparecidamfontes@usp.br','telefone'=>'(16) 3315-3151','categoria'=>'docente','area'=>'Genética Molecular'],
    ['nome'=>'David de Jong','cargo'=>'Professor Doutor — MS 3','setor'=>'Biologia e Genética de Abelhas','email'=>'ddjong@fmrp.usp.br','telefone'=>'(16) 3315-4401','categoria'=>'docente','area'=>'Genética Molecular'],
    ['nome'=>'Israel Gomy','cargo'=>'Professor Doutor — MS 3','setor'=>'Genética Molecular e Bioinformática','email'=>'igomy@usp.br','telefone'=>'(16) 3315-3000','categoria'=>'docente','area'=>'Genética Humana'],
    ['nome'=>'Jeremy Andrew Squire','cargo'=>'Professor Doutor — MS 3','setor'=>'Citogenética Molecular Humana','email'=>'jsquireinsp@gmail.com','telefone'=>'(16) 3315-3252','categoria'=>'docente','area'=>'Oncogenética'],
    ['nome'=>'Maria Cristina da Silva Pranchevicius','cargo'=>'Professora Doutora — MS 3','setor'=>'Genética e Evolução','email'=>'mcspranc@ufscar.br','telefone'=>'(16) 3306-6869','categoria'=>'docente','area'=>'Bioinformática'],
    ['nome'=>'Marina Candido Visontai Cormedi','cargo'=>'Professora Doutora — MS 3','setor'=>'Oncogenética Humana','email'=>'marina.cormedi@usp.br','telefone'=>'(16) 3315-4913','categoria'=>'docente','area'=>'Oncogenética'],
    ['nome'=>'Nilce Maria Martinez Rossi','cargo'=>'Professora Titular — MS 6','setor'=>'Genética e Biologia Molecular de Fungos','email'=>'nmmrossi@usp.br','telefone'=>'(16) 3315-3150','categoria'=>'docente','area'=>'Genética Molecular'],
    ['nome'=>'Reinaldo Otávio Alvarenga Alves de Brito','cargo'=>'Professor Doutor — MS 3','setor'=>'Genética, Melhoramento Animal e Computação','email'=>'brito@ufscar.br','telefone'=>'(16) 3351-8787','categoria'=>'docente','area'=>'Bioinformática'],
    ['nome'=>'Silvana Giuliatti','cargo'=>'Professora Associada — MS 5','setor'=>'Bioinformática','email'=>'silvana@fmrp.usp.br','telefone'=>'(16) 3315-4503','categoria'=>'docente','area'=>'Bioinformática'],
    ['nome'=>'Thiago Yukio Kikuchi Oliveira','cargo'=>'Professor Doutor — MS 3','setor'=>'Bioinformática','email'=>'tyoliveira@usp.br','telefone'=>'(16) 3315-3356','categoria'=>'docente','area'=>'Bioinformática'],
    ['nome'=>'Victor Evangelista de Faria Ferraz','cargo'=>'Professor Doutor — MS 3','setor'=>'Genética Humana e Médica','email'=>'vferraz@usp.br','telefone'=>'(16) 3315-4500','categoria'=>'docente','area'=>'Genética Humana'],
    ['nome'=>'Aguinaldo Luiz Simões','cargo'=>'Professor Associado — MS 5','setor'=>'Genética Bioquímica','email'=>'alsimoes@fmrp.usp.br','telefone'=>'(16) 3315-3157','categoria'=>'colaborador','area'=>'Genética Humana'],
    ['nome'=>'Antonio Rossi Filho','cargo'=>'Professor Titular — MS 6','setor'=>'Bioquímica e Imunologia','email'=>'anrossi@usp.br','telefone'=>'(16) 3315-9053','categoria'=>'colaborador','area'=>'Bioinformática'],
    ['nome'=>'Klaus Hartmann Hartfelder','cargo'=>'Professor Titular — MS 6','setor'=>'Biologia e Genética de Abelhas','email'=>'klaus@fmrp.usp.br','telefone'=>'(16) 3315-3063','categoria'=>'dupla-vinculacao','area'=>'Bioinformática'],
];

// ── HISTÓRICO DE CHEFIAS ──────────────────────────────────
$HISTORICO_CHEFIAS = [
    ['gestao'=>'2024-2026','chefe'=>'Wilson Araújo da Silva Junior','vice'=>'Ester Silveira Ramos'],
    ['gestao'=>'2022-2024','chefe'=>'Ester Silveira Ramos','vice'=>'Nilce Martinez Rossi'],
    ['gestao'=>'2020-2022','chefe'=>'Ester Silveira Ramos','vice'=>'Wilson Araújo da Silva Junior'],
    ['gestao'=>'2018-2020','chefe'=>'Ester Silveira Ramos','vice'=>'Aguinaldo Luiz Simões'],
    ['gestao'=>'2016-2018','chefe'=>'Nilce Martinez Rossi','vice'=>'Silvana Giuliatti'],
    ['gestao'=>'2014-2016','chefe'=>'Aguinaldo Luiz Simões','vice'=>'Ester Silveira Ramos'],
    ['gestao'=>'2012-2014','chefe'=>'Klaus Hartmann Hartfelder','vice'=>'David de Jong'],
    ['gestao'=>'2010-2012','chefe'=>'Ester Silveira Ramos','vice'=>'Nilce Martinez Rossi'],
    ['gestao'=>'2008-2010','chefe'=>'Aguinaldo Luiz Simões','vice'=>'Antonio Rossi Filho'],
    ['gestao'=>'2006-2008','chefe'=>'Klaus Hartmann Hartfelder','vice'=>'Ester Silveira Ramos'],
];

// ── COMISSÕES ─────────────────────────────────────────────
$COMISSOES = [
    ['nome'=>'Comissão de Graduação','membros'=>['Jeremy Andrew Squire (Coord.)','Alexandro Guterres da Silva','Marina C. V. Cormedi']],
    ['nome'=>'Comissão de Pós-Graduação','membros'=>['Nilce Martinez Rossi (Coord.)','Wilson Araújo da Silva Junior','Silvana Giuliatti']],
    ['nome'=>'Comissão de Pesquisa','membros'=>['Ester Silveira Ramos (Coord.)','Israel Gomy','Victor E. F. Ferraz']],
    ['nome'=>'Comissão de Extensão','membros'=>['Aparecida Maria Fontes (Coord.)','Marina C. V. Cormedi']],
    ['nome'=>'Comissão de Infraestrutura','membros'=>['David de Jong (Coord.)','Thiago Y. K. Oliveira']],
    ['nome'=>'Comissão de Biossegurança','membros'=>['Israel Gomy (Coord.)','Aparecida Maria Fontes','Jeremy Andrew Squire']],
];

// ── LABORATÓRIOS ──────────────────────────────────────────
$LABORATORIOS = [
    ['cod'=>1,'nome'=>'Laboratório de Biologia Molecular de Tumores Sólidos','area'=>'Oncologia','responsavel'=>'Jeremy Andrew Squire','descricao'=>'Estudos citogenéticos e moleculares em tumores sólidos, com ênfase em sarcomas e tumores pediátricos.'],
    ['cod'=>2,'nome'=>'Laboratório de Genética Molecular Humana','area'=>'Genética Molecular','responsavel'=>'Wilson Araújo da Silva Junior','descricao'=>'Pesquisa em genética molecular humana, com foco em doenças genéticas raras e variabilidade genômica.'],
    ['cod'=>3,'nome'=>'Laboratório de Genética Humana e Médica','area'=>'Genética Molecular','responsavel'=>'Ester Silveira Ramos','descricao'=>'Estudos de genética médica, síndromes genéticas e aconselhamento genético.'],
    ['cod'=>4,'nome'=>'Laboratório de Biologia Molecular de Fungos','area'=>'Micologia','responsavel'=>'Nilce Martinez Rossi','descricao'=>'Biologia molecular de fungos, com ênfase em Cryptococcus e outros patógenos.'],
    ['cod'=>5,'nome'=>'Laboratório de Doenças Metabólicas Hereditárias','area'=>'Genética Molecular','responsavel'=>'Aparecida Maria Fontes','descricao'=>'Estudo de doenças metabólicas hereditárias e terapia gênica.'],
    ['cod'=>6,'nome'=>'Laboratório de Genética de Abelhas','area'=>'Genética Molecular','responsavel'=>'Klaus Hartmann Hartfelder','descricao'=>'Genética e biologia molecular de abelhas, diferenciação de castas e evolução social.'],
    ['cod'=>7,'nome'=>'Laboratório de Oncogenética','area'=>'Oncologia','responsavel'=>'Marina C. V. Cormedi','descricao'=>'Genética do câncer, predisposição hereditária e marcadores moleculares.'],
    ['cod'=>8,'nome'=>'Laboratório de Genética Bioquímica','area'=>'Genética Molecular','responsavel'=>'Aguinaldo Luiz Simões','descricao'=>'Polimorfismos bioquímicos e genética de populações humanas.'],
    ['cod'=>9,'nome'=>'Laboratório de Citogenética','area'=>'Genética Molecular','responsavel'=>'Victor E. F. Ferraz','descricao'=>'Análises citogenéticas clássicas e moleculares para diagnóstico clínico e pesquisa.'],
    ['cod'=>10,'nome'=>'Laboratório de Genética de Populações','area'=>'Genômica','responsavel'=>'Maria Cristina S. Pranchevicius','descricao'=>'Genética de populações microbianas e evolução molecular.'],
    ['cod'=>11,'nome'=>'Laboratório de Melhoramento Animal','area'=>'Genômica','responsavel'=>'Reinaldo O. A. A. de Brito','descricao'=>'Genética quantitativa e melhoramento animal computacional.'],
    ['cod'=>12,'nome'=>'Laboratório de Bioinformática','area'=>'Genômica','responsavel'=>'Silvana Giuliatti','descricao'=>'Desenvolvimento de ferramentas computacionais para análise de dados genômicos.'],
    ['cod'=>13,'nome'=>'Laboratório de Genética Molecular e Computacional','area'=>'Genômica','responsavel'=>'Thiago Y. K. Oliveira','descricao'=>'Bioinformática, imunoinformática, repertório de receptores de células T (TCR) e modelagem computacional de sistemas imunológicos.'],
    ['cod'=>14,'nome'=>'Laboratório de Bioinformática','area'=>'Genômica','responsavel'=>'Thiago Y. K. Oliveira','descricao'=>'Análise de dados genômicos, imunoinformática, repertório TCR/BCR e filogenia molecular.'],
];

// ── LABORATÓRIOS DE ENSINO ────────────────────────────────
$LABS_ENSINO = [
    ['nome'=>'Laboratório de Ensino I','descricao'=>'Aulas práticas de genética molecular e citogenética.'],
    ['nome'=>'Laboratório de Ensino II','descricao'=>'Aulas práticas de genética de populações, bioinformática e biologia celular.'],
    ['nome'=>'Laboratório de Ensino III','descricao'=>'Laboratório multiuso para projetos de extensão e iniciação científica.'],
];

// ── EQUIPAMENTOS MULTIUSUÁRIOS ────────────────────────────
$EQUIPAMENTOS = [
    ['nome'=>'Sequenciador Illumina MiSeq','descricao'=>'Sequenciamento de nova geração para genômica, metagenômica e diagnose molecular.'],
    ['nome'=>'Sequenciador Sanger ABI 3500','descricao'=>'Sequenciamento capilar para genotipagem, análise de mutações e verificação de clones.'],
    ['nome'=>'Microscópio Confocal','descricao'=>'Microscopia confocal de varredura a laser para imagens tridimensionais de alta resolução.'],
    ['nome'=>'PCR Quantitativo em Tempo Real (qPCR)','descricao'=>'Sistemas qPCR para quantificação de expressão gênica e diagnose molecular.'],
    ['nome'=>'Citômetro de Fluxo','descricao'=>'Análise e separação de populações celulares por citometria de fluxo.'],
    ['nome'=>'Sistema de Eletroforese Capilar','descricao'=>'Análise de fragmentos de DNA e genotipagem multiplex.'],
    ['nome'=>'Plataforma de Microarranjos','descricao'=>'Análise de expressão gênica em larga escala e genotipagem de SNPs.'],
    ['nome'=>'Microscopia de Super-resolução','descricao'=>'Imagens celulares com resolução além do limite de difração.'],
];

// ── NOTÍCIAS ──────────────────────────────────────────────
$NOTICIAS = [
    ['data'=>'15 JUN 2026 - 14:00','categoria'=>'EVENTO','titulo'=>'Jéssica Oliveira de Santis - Doutorado','resumo'=>'Caracterização Molecular e Abordagens Funcionais para Identificação de Vulnerabilidades Terapêuticas no Meduloblastoma Pediátrico','imagem'=>'https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=400&h=250&fit=crop'],
    ['data'=>'15 MAI 2025','categoria'=>'EVENTO','titulo'=>'Departamento promove simpósio sobre edição genômica','resumo'=>'Evento reuniu pesquisadores nacionais e internacionais para discutir os avanços em CRISPR e suas aplicações.','imagem'=>'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop'],
    ['data'=>'05 MAI 2025','categoria'=>'PUBLICAÇÃO','titulo'=>'Novo artigo publicado em revista internacional','resumo'=>'Trabalho da equipe de genética molecular é destaque na revista Genetics & Development.','imagem'=>'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop'],
    ['data'=>'28 ABR 2025','categoria'=>'EDITAL','titulo'=>'Abertas as inscrições para pós-graduação 2026','resumo'=>'Processo seletivo para Mestrado e Doutorado. Inscrições até 30/06.','imagem'=>'https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop'],
    ['data'=>'05 MAI 2025','categoria'=>'PUBLICAÇÃO','titulo'=>'Novo artigo publicado em revista internacional','resumo'=>'Trabalho da equipe de genética molecular é destaque na revista Genetics & Development.','imagem'=>'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop'],
    ['data'=>'28 ABR 2025','categoria'=>'EDITAL','titulo'=>'Abertas as inscrições para pós-graduação 2026','resumo'=>'Processo seletivo para Mestrado e Doutorado. Inscrições até 30/06.','imagem'=>'https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop'],
];

// ── PUBLICAÇÕES ───────────────────────────────────────────
$PUBLICACOES = [
    ['ano'=>2025,'area'=>'Genética Molecular','titulo'=>'Novel regulatory mechanisms in gene expression control during cellular stress response','autores'=>'Rossi NMM, et al.','revista'=>'Nature Genetics','destaque'=>true],
    ['ano'=>2025,'area'=>'Genômica e Bioinformática','titulo'=>'Computational approaches for TCR repertoire analysis in infectious diseases','autores'=>'Oliveira TYK, et al.','revista'=>'Bioinformatics','destaque'=>false],
    ['ano'=>2024,'area'=>'Biologia Celular','titulo'=>'CRISPR-Cas9 mediated gene editing in pediatric medulloblastoma models','autores'=>'Squire JA, et al.','revista'=>'Cell Reports','destaque'=>false],
    ['ano'=>2024,'area'=>'Genética Molecular','titulo'=>'Molecular characterization of hereditary metabolic disorders in Brazilian cohorts','autores'=>'Fontes AM, et al.','revista'=>'J Inherited Metabolic Disease','destaque'=>false],
    ['ano'=>2024,'area'=>'Genética de Plantas','titulo'=>'Transcriptomic analysis of stress response in tropical crops','autores'=>'Pranchevicius MCS, et al.','revista'=>'Plant Molecular Biology','destaque'=>false],
    ['ano'=>2024,'area'=>'Genética de Populações','titulo'=>'Population structure and genetic diversity of stingless bees','autores'=>'Hartfelder KH, de Jong D, et al.','revista'=>'Molecular Ecology','destaque'=>false],
    ['ano'=>2023,'area'=>'Genética Molecular','titulo'=>'Cytogenetic biomarkers in oncology: a comprehensive review','autores'=>'Ferraz VEF, et al.','revista'=>'Cancer Genetics','destaque'=>false],
    ['ano'=>2023,'area'=>'Genômica e Bioinformática','titulo'=>'Machine learning applied to genomic variant classification','autores'=>'Giuliatti S, et al.','revista'=>'Briefings in Bioinformatics','destaque'=>false],
    ['ano'=>2023,'area'=>'Genética Molecular','titulo'=>'Honey bee caste differentiation: epigenetic regulation of gene networks','autores'=>'Hartfelder KH, et al.','revista'=>'Insect Biochem Mol Biol','destaque'=>false],
    ['ano'=>2022,'area'=>'Genética Humana','titulo'=>'Genetic counseling in rare diseases: a Brazilian perspective','autores'=>'Ramos ES, Gomy I, et al.','revista'=>'Clinical Genetics','destaque'=>false],
];

// ── LINHAS DE PESQUISA ────────────────────────────────────
$LINHAS_PESQUISA = [
    ['nome'=>'Genética Molecular','descricao'=>'Estudo dos mecanismos moleculares dos genes e suas funções, incluindo regulação da expressão gênica, mutações e estrutura do genoma.'],
    ['nome'=>'Genômica e Bioinformática','descricao'=>'Análise de dados genômicos em larga escala e desenvolvimento de ferramentas computacionais para biologia.'],
    ['nome'=>'Biologia Celular','descricao'=>'Investigação dos processos celulares em condições fisiológicas e patológicas, incluindo sinalização, proliferação e diferenciação.'],
    ['nome'=>'Genética de Plantas','descricao'=>'Melhoramento genético, resistência a estresses bióticos e abióticos, e biologia molecular de plantas.'],
    ['nome'=>'Genética de Populações e Evolução','descricao'=>'Estudos sobre diversidade genética, evolução molecular e conservação de espécies.'],
];

// ── PROJETOS ──────────────────────────────────────────────
$PROJETOS = [
    ['titulo'=>'Identificação de Vulnerabilidades Terapêuticas no Meduloblastoma Pediátrico','responsavel'=>'Jeremy Andrew Squire','area'=>'Oncogenética','periodo'=>'2024-2027','fomento'=>'FAPESP'],
    ['titulo'=>'Repertório de Receptores de Células T em Doenças Infecciosas','responsavel'=>'Thiago Y. K. Oliveira','area'=>'Bioinformática','periodo'=>'2025-2029','fomento'=>'CNPq'],
    ['titulo'=>'Caracterização Molecular de Doenças Genéticas Raras','responsavel'=>'Ester Silveira Ramos','area'=>'Genética Humana','periodo'=>'2023-2026','fomento'=>'FAPESP'],
    ['titulo'=>'Biologia Molecular de Cryptococcus spp','responsavel'=>'Nilce Martinez Rossi','area'=>'Micologia','periodo'=>'2024-2028','fomento'=>'FAPESP'],
    ['titulo'=>'Diferenciação de Castas em Abelhas Sociais','responsavel'=>'Klaus Hartmann Hartfelder','area'=>'Genética Molecular','periodo'=>'2023-2027','fomento'=>'CNPq'],
    ['titulo'=>'Ferramentas de Bioinformática para Análise de Variantes Genômicas','responsavel'=>'Silvana Giuliatti','area'=>'Bioinformática','periodo'=>'2024-2026','fomento'=>'FAPESP'],
];

// ── DISCIPLINAS — GRADUAÇÃO ───────────────────────────────
$DISCIPLINAS_GRAD = [
    ['codigo'=>'BMPG-6001','nome'=>'Genética Básica','curso'=>'Medicina','carga'=>'60h'],
    ['codigo'=>'BMPG-6002','nome'=>'Genética Molecular','curso'=>'Ciências Biomédicas','carga'=>'60h'],
    ['codigo'=>'BMPG-6003','nome'=>'Biologia Celular e Molecular','curso'=>'Informática Biomédica','carga'=>'60h'],
    ['codigo'=>'BMPG-6004','nome'=>'Genética de Populações','curso'=>'Ciências Biológicas','carga'=>'60h'],
    ['codigo'=>'BMPG-6005','nome'=>'Evolução','curso'=>'Ciências Biológicas','carga'=>'60h'],
    ['codigo'=>'BMPG-6006','nome'=>'Citogenética','curso'=>'Ciências Biomédicas','carga'=>'30h'],
];

// ── DISCIPLINAS — PÓS-GRADUAÇÃO ───────────────────────────
$DISCIPLINAS_POS = [
    ['codigo'=>'BMPG-7001','nome'=>'Tópicos em Genética Molecular','carga'=>'60h'],
    ['codigo'=>'BMPG-7002','nome'=>'Bioinformática Aplicada à Genômica','carga'=>'60h'],
    ['codigo'=>'BMPG-7003','nome'=>'Genética de Populações e Evolução Molecular','carga'=>'60h'],
    ['codigo'=>'BMPG-7004','nome'=>'Biologia Celular e do Desenvolvimento','carga'=>'60h'],
    ['codigo'=>'BMPG-7005','nome'=>'Metodologia Científica em Genética','carga'=>'30h'],
    ['codigo'=>'BMPG-7006','nome'=>'Seminários em Genética','carga'=>'30h'],
    ['codigo'=>'BMPG-7007','nome'=>'Análise de Dados Genômicos','carga'=>'45h'],
    ['codigo'=>'BMPG-7008','nome'=>'Tópicos Especiais em Genética Humana','carga'=>'45h'],
];

// ── ROTATÓRIAS RESIDÊNCIA ─────────────────────────────────
$ROTATORIAS_RESIDENCIA = [
    ['nome'=>'Ambulatório de Genética Médica','carga'=>'6 meses','descricao'=>'Atendimento ambulatorial, diagnóstico e aconselhamento genético.'],
    ['nome'=>'Laboratório de Citogenética','carga'=>'3 meses','descricao'=>'Técnicas de citogenética clássica e molecular.'],
    ['nome'=>'Laboratório de Biologia Molecular','carga'=>'3 meses','descricao'=>'Diagnóstico molecular de doenças genéticas.'],
    ['nome'=>'Enfermaria / Consultoria','carga'=>'3 meses','descricao'=>'Atendimento a pacientes internados com suspeita de doenças genéticas.'],
];

// ── SERVIÇOS DE GENÉTICA MÉDICA ───────────────────────────
$SERVICOS_GENETICA = [
    ['nome'=>'Aconselhamento Genético','descricao'=>'Avaliação de risco familiar e orientação sobre doenças genéticas hereditárias.'],
    ['nome'=>'Diagnóstico Citogenético','descricao'=>'Análises cromossômicas (cariótipo, FISH, array-CGH) para diagnóstico de anomalias.'],
    ['nome'=>'Diagnóstico Molecular','descricao'=>'Identificação de mutações específicas em genes associados a doenças genéticas.'],
    ['nome'=>'Testes Genéticos Pré-natais','descricao'=>'Diagnóstico de anomalias genéticas durante a gestação.'],
    ['nome'=>'Farmacogenômica','descricao'=>'Análise de polimorfismos para personalização de tratamento medicamentoso.'],
    ['nome'=>'Acompanhamento de Pacientes','descricao'=>'Seguimento longitudinal de pacientes com doenças genéticas e suas famílias.'],
];
