<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'Quando o Rastreador de Fantasma é habilitado e inicializado, você encontrará abaixo a lista de visitantes registrados que não voltaram desde x dias. &quot;x&quot; é o número de dias configurados na guia Configuração geral. Além disso, você vai encontrar uma coluna que indica se um lembrete de e-mail foi enviado para os visitantes direcionados. Assim, você pode ver de relance e tratar os visitantes que não tenham tomado conhecimento do lembrete 
<br/><br/>
Neste ponto, você pode.:
<br/><br/>
- Contas <b> Eliminar manualmente (dreno manual) </b>
<br/>
- Gerar e-mail lembrete <b> redefinindo a data da última visita </b>. Isto permite dar um curinga para visitantes alvejados. Se o visitante já recebeu uma lembrança, nada impede o reenvio de um novo e-mail que irá reinicializar novamente, na verdade, é a data da última visita.
<br/><br/>
<b>Função Tabela de Classificação </b>: Você pode classificar os dados exibidos, clicando nos cabeçalhos das colunas. Segure a tecla SHIFT para classificar até 4 colunas simultâneas.
';


// Userlist tab
$lang['UAM_userlistTitle_d'] = 'Esta página é para dar informações ao administrador. Ela exibe uma lista de todos os usuários registrados na galeria mostrando a data e o número de dias desde sua última visita. A lista é ordenada em ordem crescente de número de dias.
<br/><br/>
<b><u> Somente quando o Rastreador de Fantasmas estiver ativo </u></b> , o número de dias sem uma visita aparece como o seguinte código de cores , de acordo com o máximo definido nas opções do Rastreador de Fantasmas :
<br/>
- <b style=&quot;color: lime;&quot;>Verde</b> : Quando o usuário visitou a galeria <b style=&quot;color: lime;&quot;><u>menor que 50%</u></b> do montante máximo referido no Rastreador de Fantasmas. <br/>
- <b style=&quot;color: orange;&quot;>Laranja</b> : Quando o usuário visitou a galeria <b style=&quot;color: orange;&quot;><u> entre 50% e 99% </u></b> do montante máximo referido no Rastreador de Fantasmas. <br/>
- <b style=&quot;color: red;&quot;>Vermelho</b> : Quando o usuário visitou a galeria <b style=&quot;color: red;&quot;><u>por mais de 100%</u></b> do montante máximo referido no Rastreador de Fantasmas. <b><u> Neste caso , o usuário também deve aparecer na tabela de Rastreador de Fantasmas. </u> </b > <br/>
<br/>
Exemplo :
<br/>
O período máximo de Seguidor de Fantasmas é configurado para 100 dias.
<br/>
Um usuário aparecerá em verde, se ele visitou a galeria em menos de 50 dias , em laranja , se sua última visita ocorreu entre 50 e 99 dias e vermelho  100 dias ou mais.
<br/>
<b> NOTA </ b>: A lista não exibe quem não confirmou sua inscrição (se a opção de confirmar o registro é ativado). Esses usuários são então geridos de uma forma especial na guia "confirmações de rastreamento".
<br/>
Função <b> tabela de classificação </b>: Você pode classificar os dados exibidos , clicando nos cabeçalhos das colunas. Segure a tecla SHIFT para classificar até 4 colunas simultâneas .';


// UserManagement tab
$lang['UAM_usermanTitle_d'] = 'Quando o limite de prazo para inscrição é habilitado, você encontrará abaixo a lista de usuários cuja confirmação da inscrição é esperada, <b style="text-decoration: underline;"> ou não </b> que estão no tempo para confirmar. <br/>
A data de registro é exibida em verde enquanto o tempo for inferior ao limite de tempo para confirmar sua inscrição. Neste caso, a tecla de confirmação ainda é válida e podemos enviar um e-mail com ou sem uma nova chave de confirmação. <br/>
Quando a data de registro aparece em vermelho , o período de confirmação expirou. Neste caso , você deve enviar um e-mail com a regeneração de chave de confirmação , se você quiser permitir que o usuário ainda confirme a sua inscrição. <br/>
Em todos os casos , é possível forçar manualmente a confirmação . <br/>
Neste ponto, você pode:
<br/>
- Manualmente apagar as contas <b> (dreno manual) </b>
<br/>
- Gerar e-mail lembrete <b> sem </b> geração de uma nova chave. Aviso: Enviar um e-mail para lembrete de visitantes alvejados. Esta função não redefinir a data de registo de visitantes alvejados e o tempo limite ainda é válido.
<br/>
- Gerar lembrete email <b> com </b> geração de uma nova chave. Aviso: Enviar um e-mail para lembrete de visitantes alvejados. Esta função também redefine a data de registo de visitantes alvejados que equivale a prorrogar o prazo para confirmação.
<br/>
- Enviar um registro aguardando a confirmação manualmente , mesmo que o prazo de validade tenha ultrapassado <b> (forçando confirmação ) </b>.
<br/>
<b> Função tabela de classificação </b>: Você pode classificar os dados exibidos , clicando nos cabeçalhos das colunas. Segure a tecla SHIFT para classificar até 4 colunas simultâneas .';
?>