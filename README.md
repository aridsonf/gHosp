# gHosp

## 1. Objetivos

Um software em aplicação web para operar como um sistema de gestão hospitalar.

## 2. Análise

## 2.1 Requisitos do Sistema

### 2.1.1 Requisitos Funcionais

-   [RF01] – O médico e o enfermeiro podem consultar a ficha do paciente.
-   [RF02] – O médico e o enfermeiro podem verificar as cirurgias marcadas.
-   [RF03] – O médico e o enfermeiro podem consultar suas equipes.
-   [RF04] – O médico pode prescrever a medicação para um paciente.
-   [RF05] – O enfermeiro pode verificar os pacientes internados e que precisam de cuidados.
-   [RF06] – O paciente pode verificar o seu receituário.
-   [RF07] – O paciente pode realizar o pagamento das suas despesas.
-   [RF08] – O paciente pode submeter-se aos procedimentos hospitalares.
-   [RF09] – A administração define as equipes de médicos e enfermeiros.
-   [RF10] – A administração aloca as equipes para as salas de operações hospitalares.
-   [RF11] – A administração pode alocar os pacientes para as salas de cirurgias, de recuperação etc.

### 2.1.2 Requisitos Não Funcionais

-   [RNF01] – O sistema deve ser uma aplicação web responsiva e desenvolvida para rodar em qualquer aparelho com um navegador de internet.
-   [RNF02] – O sistema deverá ser desenvolvido em PHP, JavaScript e VueJS.
-   [RNF03] – Os procedimentos hospitalares disponíveis no sistema são: consultas, exames, cirurgias, internações ou outro procedimento de hospital.
-   [RNF04] – O paciente deve entrar no sistema com o número de CPF e uma senha definida no início do cadastro do mesmo no hospital.
-   [RNF05] – Os receituários deverão ficar no ar para os pacientes no período referente ao tratamento dos mesmos.
-   [RNF06] – O paciente poderá realizar o pagamento pelo sistema com as principais formas de pagamento ou por meio de convênio.
-   [RNF07] – O limite de integrantes das equipes varia de acordo com a gravidade dos procedimentos hospitalares.
-   [RNF08] – O sistema não permitirá a alocação de médico/enfermeiro que estão com a carga horária cheia.

## 2.2 Casos de Uso

### 2.2.1 Diagrama de Casos de Uso

![Diagrama de Casos de Uso](https://github.com/aridsonf/gHosp/blob/main/gHosp%20-%20Diagrama%20de%20Casos%20de%20Uso.png)

### 2.2.2 Descrição dos Casos de Uso

-   #### Definir equipe
    -   **Descrição:** O Admnistrador deverá fazer a definição de equipe de funcionários.
    -   **Ator:** Admnistrador.
    -   **Pré-condições:**
        - Haver um paciente que irá realizar um procedimento que necessitará de uma equipe.
        - Haver funcionários disponiveis para formação de equipe.
    -   **Fluxo principal:**
        1. O Admnistrador irá entrar no sistema 
        2. O Admnistrador selecionará a opção de Definir Equipe.
        3. O Sistema irá listar os profissionais disponíveis.
        4. O Admnistrador definirá a equipe baseado nos requisitos do procedimento que esta irá realizar.
        5. O Admnistrador será retornado para sua tela inicial.
    -   **Fluxo alternativo:**
        1. O Sistema não encontra profissionais disponíveis.
        2. O Sitema irá retornar uma mensagem para o Admnistrador.
        3. O Admnistrador irá confirmar que recebeu a mensagem.
        4. O Admnistrador será retornado para sua tela inicial.
    -   **Pós-condição:**
        -   Deverá ser registrado no sistema a equipe definida.
-   #### Alocar Pacientes
    -   **Descrição:** O Admnistrador deverá alocar o paciente na região do hospital especializada para a realização dos seus procedimentos necessários.
    -   **Ator:** Admnistrador.
    -   **Pré-Condições:**
        -   O paciente deverá estar cadastrado no sistema.
    -   **Fluxo principal:**
        1. O Admnistrador irá entrar no sistema.
        2. O Admnistrador selecionará a opção de Alocar Pacientes.
        3. O Sistema irá listar os Pacientes que ainda não foram alocados.
        4. O Admnistrador irá alocar os Pacientes de acordo com seus procedimentos.
        5. O Sistema irá retornar confirmando a alocação.
    -   **Fluxo alternativo:**
        1. Falta de suporte ao procedimento: Caso não haja suporte para o procedimento do Paciente ele não será alocado.
    -   **Pós-Condição:**
        -   Deverá ser registrado no sistema os dados de alocamento do Paciente.
        -   O usuário da Admnistração será redirecionado para a sua tela principal.
-   #### Realizar procedimentos
    -   **Descrição:** O Paciente irá requerir a realização de procedimentos.
    -   **Ator:** Paciente.
    -   **Pré-Condição:**
        -   O ator deverá estar cadastrado no sistema.
        -   O ator não deve apresentar pendências em pagamentos de procedimentos anteriores.
    -   **Fluxo principal:**
        1. O ator entrará em sua conta.
        2. O ator escolherá um dos procedimentos disponíveis para requerir a realização.
            - Marcar consulta.
            - Marcar realização de exames.
    -   **Fluxo alternativo:**
        -   Caso não haja disponibilidade imediata para a realização do procedimento o Paciente deverá ser avisado e intrucionado a requerir seu procedimento para outra ocasião.
    -   **Pós-Condição:**
        -   O Hospital terá que conter suporte para a realização do procedimento.
        -   Deverá ser registrado no sistema os procedimentos requeridos.
        -   O Paciente será redirecionado para sua página principal.
-   #### Verificar cirurgias Marcadas
    -   **Descrição:** Irá disponibilizar os procedimentos a serem realizados pelo Médico ou Enfermeiro.
    -   **Atores:** Médico e Enfermeiro.
    -   **Pré-Condição:**
        -   O Ator deve estar cadastrado no sistema.
        -   O Ator deve estar em uma equipe.
    -   **Fluxo principal:**
        1. O Ator irá abrir painel principal.
        2. Através de um botão neste painel o Ator irá requerir suas cirurgias agendadas.
        3. O Sistema irá retornar a tela de cirurgia marcadas.
    -   **Pós-Condição:**
        -   O sistema deverá exibir uma página contendo os dados das cirurgias agendadas.
-   #### Prescrever medicação
    -   **Descrição:** O Médico irá prescrever medicação a um Paciente.
    -   **Ator:** Médico.
    -   **Pré-Condição:**
        -   Médico deverá estar na equipe atrelada ao Paciente.
        -   Dados do paciente estarem preenchidos com possíveis alergias à medicações.
    -   **Fluxo principal:**
        1. O Médico acessará sua lista de pacientes em seu painel principal.
        2. O Sistema deverá mostrar os dados do Paciente escolhido, incluindo as alergias.
        3. O Médico prescreverá através de uma receita digital a medicação.
        4. O Sistema confirmará se nenhuma medicação passada está conflitando com as alergias.
    -   **Pós-Condição:**
        -   O Sistema deverá disponibilizar para o Paciente, em sua tela principal, sua receita.
-   #### Registrar Procedimento
    -   **Descrição:** O administrativo irá registrar um novo procedimento a ser executado.
    -   **Ator:** Administração.
    -   **Pré-Condição:**
        -   O Administrador deverá estar logado no Sistema.
        -   Deverá constar requisições de pacientes para a realização de um novo procedimento.
        -   Dados do paciente estarem preenchidos com possíveis alergias à medicações.
    -   **Fluxo principal:**
        1. O ator acessará sua lista de pacientes requisitando um novo procedimento em sua tela de procedimentos.
        2. O sistema deverá mostrar os dados do Paciente escolhido, incluindo as alergias.
        3. O ator envia os dados para registrar um novo procedimento. 
        4. O sistema confirmará com o ator se os dados estão corretos sem faltas de dados obrigatórios e registra o novo procedimento.
    -   **Fluxo alternativo:**
        1. Caso haja um procedimento marcado para mesma data ou local, o sistema exibe um alerta informando ao ator.
        2. Retorna ao fluxo principal.
    -   **Pós-Condição:**
        -   O sistema deverá disponibilizar para o Paciente e para as equipes o procedimentos pendentes, em suas respectivas telas de procedimentos.
-   #### Cadastrar Usuário
    -   **Descrição:** O administrativo cadastrará um novo usuário.
    -   **Ator:** Administração.
    -   **Pré-Condição:**
        -   O administrador deve estar logado no sistema.
        -   Devem conter dados do usuário para realizar o cadastro.
    -   **Fluxo principal:**
        1. O ator acessará sua tela de cadastrar novo usuário.
        2. O ator insere os dados, junto com o tipo determinado seja ele médico, enfermeiro, amdinistrador ou paciente.
        3. O sistema faz uma validação dos tipos de dados, e realiza a inserção de um novo usuário.
        4. O sistema confirmará o novo cadastro realizado com sucesso.
    -   **Fluxo alternativo:**
        1. Caso o usuário já esteja cadastrado, o sistema enviar uma mensagem de erro ao ator.
        2. O sistema exibirá quais campos devem ser alterados para que o cadastro possa ser válido.
        3. O sistema retornará a tela de cadastro aguardando adequação dos dados de usuários para a realização do cadastro.
-   #### Verificar Receituário
    -   **Descrição:** O paciente verificará seu receiturário.
    -   **Ator:** Paciente.
    -   **Pré-Condição:**
        -   O paciente deve estar cadastrado no sistema.
        -   O paciente deve possuir alguma receita ativa cadastrada por algum médico.
    -   **Fluxo principal:**
        1. O Ator acessará sua tela de receitas.
        2. O sistema exibirá ao paciente as receitas ativas.
        3. O Ator selecionará uma receita para ver a sua composição e informações de bula.
        4. O sistema buscará e informará ao Ator as informações disponíveis.
    -   **Fluxo alternativo:**
        1. Caso não haja receitas ativas o sistema informa ao Ator.
        2. Quando houver terminado alguma prescrição temporal executada por médicos, o sistema exibirá um histórico de receitas.
-   #### Emitir Receita Médica
    -   **Descrição:**  O Médico irá emitir uma receita para um Paciente
    -   **Ator:** Médico.
    -   **Pré-Condições:**
        -   O Médico deverá estar em uma Equipe.
        -   A Equipe deverá estar atrelada ao Paciente.
        -   O Médico deverá ter Prescrevido a medicação do paciente.
    -   **Fluxo principal:**
        1. O Sistema irá emitir a receita médica ao Paciente.        
-   #### Verificar Equipe
    -   **Descrição:**  O Ator poderá verificar a Equipe da qual faz parte.
    -   **Atores:** Médico e Enfermeiro
    -   **Pré-Condições:** 
        -   O Ator deverá estar cadastrado no sistema.
    -   **Fluxo principal:**
        1. O Ator acessará sua tela inicial.
        2. O Ator selecionará a opção Verificar Equipe.
        3. O Sistema retornará uma tela contendo as informações da equipe do Ator.
        4. O Ator poderá retornar à sua tela principal.
    -   **Fluxo alternativo:**
        1. Caso o Ator não esteja em uma equipe o Sistema o informará.
        2. O Ator poderá retornar à sua tela principal.
-   #### Consultar Ficha do Paciente
    -   **Descrição:** O Ator irá consultar a ficha de um Paciente.
    -   **Ator:** Médico e Enfemeiro.
    -   **Pré-Condições:**
        -   O Ator deverá estar em uma Equipe.
        -   A Equipe deverá estar atrelada ao Paciente.
    -   **Fluxo principal:**
        1. O Ator acessará a sua tela inicial.
        2. O Ator selecionará a opção Consultar Ficha do Paciente.
        3. O Sistema irá retornar uma tela contendo a Ficha do Paciente.
    -   **Fluxo alternativo:**
        1. Caso o Paciente não pussua ficha, o Sistema deverá informar ao Ator.
-   #### Realizar Pagamento
    -   **Descrição:** O Ator realizar o pagamento de um procedimento.
    -   **Ator:** Paciente.
    -   **Pré-Condições:**
        -   O Ator deve ter um procedimento com pendencia de pagamento.
    -   **Fluxo principal:**
        1. O Ator acessará a sua tela inicial.
        2. O Ator selecionará a opção de procedimentos.
        3. O Sistema descreverá os procedimentos com pagamento pendentes. 
        3. O Ator seleciona um procedimento assim gerando uma cobrança a ser paga pelos meios disponíveis.
    -   **Fluxo alternativo:**
        1. Caso o pagamento não for possível pelos meios disponíveis, o ator deve entrar em contato com a administação.
        2. O sistema deve encaminhar os contatos do setor de atendimento ao cliente.
    -   **Pós-Condições:**
        -   O Sistema adiciona ao perfil do ator o registro de pagamento.
        -   O Sistema salva os dados de pagamento para validação do sertor de finanças.
-   #### Atualizar Cadastro
    -   **Descrição:** O Ator realizar o pagamento de um procedimento.
    -   **Ator:** Paciente.
    -   **Pré-Condições:**
        -   O Ator estar com cadastro ativo no Sistema.
    -   **Fluxo principal:**
        1. O Ator acessará a sua tela inicial.
        2. O Ator atualizar dados cadastrais.
        3. O Sistema irá abrir a tela de cadastro para alteração dos dados do ator. 
        3. O Sistema valida a alteração dos dados e os atualiza no banco de dados.
    -   **Fluxo alternativo 1:**
        1. Caso os dados não sejam válidos o sistema envia uma mensagem de alerta para o ator.
        2. O sistema continua na tela de cadastro para atualização até os dados serem válidos.
    -   **Fluxo alternativo 2:**
        1. Caso os dados não sejam válidos o Ator pode solicitar para cancelar a alteração dos dados.
        2. O Sistema cancela o envio de atualização e volta para a tela inicial do ator.
    -   **Pós-Condições:**
        -   O Sistema exibe uma mensagem de confirmação de alteração.
        -   O Sistema redireciona o ator para sua tela inicial.
