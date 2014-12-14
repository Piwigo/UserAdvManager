<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'Quando o Ghost Tracker é ativado e inicializado, você encontrará abaixo a lista de visitantes registados que não voltaram desde x dias. &quot;x&quot; é o número de dias configurados na guia Configuração geral. Além disso, vai encontrar uma coluna que indica se um lembrete de e-mail foi enviado para os visitantes direcionados. Assim, você pode ver de relance e tratar os visitantes que não tiveram em atenção o lembrete <br/><br/> Neste ponto de vista, você pode.:
<br/><br/>
- Manualmente apagar contas<b>(dreno manual)</b>
<br/>
- Gerar e-mail lembrete <b>com redefinição da data da última visita </b>. Isto permite mostrar cartão aos visitantes alvejados. Se o visitante já recebeu um lembrete, nada impede do envio de um novo e-mail que irá repor novamente, na realidade, a data da última visita.
<br/><br/>
<b> Função tabela de classificação</b>: Você pode classificar os dados exibidos, clicando nos cabeçalhos das colunas. Segure a tecla SHIFT para classificar até 4 colunas simultâneas.';


// Userlist tab
$lang['UAM_userlistTitle_d'] = 'Esta página é para informação ao administrador. Exibe uma lista de todos os utilizadores registados na galeria mostrando a data e o número de dias desde sua última visita. A lista é ordenada em ordem crescente de número de dias.
<br/><br/>
<b><u> Apenas quando o Detetor de Fantasmas estiver ativo </u></b> , o número de dias sem uma visita aparece como o seguinte código de cor, de acordo com o máximo definido nas opções do Detetor de Fantasmas:
<br/>
- <b style=&quot;color: lime;&quot;>Verde</b> : Quando o utilizador visitou a galeria <b style=&quot;color: lime;&quot;><u>menas de 50%</u></b> do montante máximo referido no Detetor de fantasmas.<br/>
- <b style=&quot;color: orange;&quot;>Laranja</b> : Quando o utilizador visitou a galeria <b style=&quot;color: orange;&quot;><u> entre 50% e 99% </u></b> do máximo indicado no Detetor de Fantasmas .<br/>
- <b style=&quot;color: red;&quot;>vermelho</b> : Quando o utilizador visitou a galeria <b style=&quot;color: red;&quot;><u>para mais de 100%</u></b> do máximo indicado no Detetor de Fantasmas . <b><u>Neste caso, o utilizador também deve aparecer na tabela do Detetor de fantasmas.</u></b><br/>
<br/>
exemplo :
<br/>
O período máximo do Detetor de Fantasmas é configurado para 100 dias.
<br/>
Um utilizador aparecerá a verde, se ele visitou a galeria há menos de 50 dias , em laranja , se sua última visita ocorreu entre 50 e 99 dias e a vermelho há 100 dias ou mais.
<br/><br/>
<b>NOTA</b>: A lista não exibe quem não confirmou a sua inscrição (se a opção de confirmação de registo está ativada). Esses utilizadores são então geridos de uma forma especial no separador &quot;Tracking confirmations&quot; .
<br/><br/>
Função <b> tabela de classificação </ b>: Você pode classificar os dados exibidos, clicando nos cabeçalhos das colunas. Segure a tecla SHIFT para classificar até 4 colunas simultâneas.
<br/>
<b>Função tabela de classificação </b>: Você pode classificar os dados exibidos, clicando nos cabeçalhos das colunas. Prima a tecla SHIFT para classificar até 4 colunas simultâneas.';


// UserManagement tab
$lang['UAM_usermanTitle_d'] = 'Ao ativar o limite de prazo para inscrição, encontrará abaixo uma lista de utilizadores cuja confirmação de inscrição é aguardado, <b style=&quot;text-decoration: underline;&quot;> ou não </ b> estão no prazo para confirmar.<br/><br/>
A data de registo é exibida a verde quando o utilizador em causa está abaixo do limite de tempo para confirmar sua inscrição. Neste caso, a tecla de confirmação ainda é válida e podemos enviar um e-mail com ou sem uma nova chave de confirmação.<br/>
Quando a data de registo aparece a vermelho , o período de confirmação expirou. Neste caso , deve enviar um e-mail com a regeneração da chave de confirmação , se desejar permitir ao utilizador que confirme a sua inscrição.<br/><br/>
Em todos os casos , é possível forçar manualmente a confirmação . <br/><br/>
Neste ponto de vista , você pode:
<br/><br/>
- Apagar manualmente Contas <b>(dreno manual)</ b>
<br/>
- Gerar e-mail lembrete <b>sem</b> gerar uma nova chave. Aviso: Enviar um e-mail lembrete para visitantes alvo. Esta função não redefine a data de registo de visitantes alvo e o tempo limite permanece válido.
<br/>
- Gerar email lembrete <b>com</b> geração de uma nova chave. Aviso: Enviar um e-mail lembrete para visitantes alvo. Esta função também redefine a data de registo de visitantes alvo o que equivale a prorrogar o prazo para confirmação.
<br/>
- Enviar um registo aguardando a confirmação manualmente , mesmo que com o prazo de validade caducado <b>(forçando confirmação)</b>.
<br/><br/>
<b>Função  tabela de classificação </b>: Você pode classificar os dados exibidos , clicando nos cabeçalhos das colunas. Prima a tecla SHIFT para classificar até 4 colunas simultâneas .';
?>