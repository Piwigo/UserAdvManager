<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2013 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['UAM_AddURL2Mail_d'] = 'Ao ativar esta opção, irá adicionar o URL da sua galeria ao final dos emails gerados pelo plugin, tal como uma assinatura.';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Quando um administrador ou Webmaster da galeria confirmar manualmente um registo pendente, a notificação por email é enviada automaticamente ao utilizador. Insira aqui o assunto da sua validação por email própria.<br>
Por defeito, o campo tem um texto genérico em inglês, mas este pode ser mudado. Utilize as tags de tradução [lang =?] da plugin de descrição estendida, se o mesmo estiver instalado.
<br><br>
As seguintes tags adicionais de modificação estão disponíveis sem o plugin de Descrição Extendida.<br>
- <b style=&quot;color: red;&quot;>[username]</b> para automaticamente inserir o nome do utilizador destinatário do email. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pata inserir o titulo da sua galeria.<br>';
$lang['UAM_DumpTitle_d'] = 'Isto permite salvar toda a configuração da extensão num arquivo para que possa restaurá-la se algo de errado ocorrer( manipulação errada ou antes de uma atualização, por exemplo) . Por defeito, o arquivo é armazenado na pasta ../plugins/UserAdvManager/include / backup/ e é chamado de "UAM_dbbackup.sql" .
<br/><br/>
<b style=&quot;color: red;&quot;> Aviso: O arquivo é substituído a cada ação de backup</b>
<br/><br/>
Por vezes pode ser útil para recuperar o arquivo de backup no seu computador. Por exemplo: Para restaurar noutra base de dados, para terceirizar ou manter salvos arquivos multiplos. Para fazer isto, basta marcar a caixa para descarregar o arquivo.
<br/><br/>
A recuperação a partir desta interface está disponível apenas para o arquivo de backup local (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql) . Arquivo de backup descarregado não pode ser restaurado deste modo.  Para fazer isto, por favor, use a ferramenta de gerenciamento de banco de dados dedicado (como o phpMyAdmin para banco de dados MySql ) .
<br/><br/>
<b style=&quot;color: red;&quot;>Atenção : Após a restauração , é necessário recarregar a página do plugin administração para ver as configurações restauradas </b>






';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Por defeito, quando um utilizador perdeu a senha e seleciona a opção de recuperação, ele recebe um e-mail contendo apenas o seu nome de utilizador e a sua nova senha.
<br/><br/>
Aqui, pode adicionar o texto que preferir para ser inserido <b> <u>antes</u></b> da informação por defeito.
<br/><br/>
Personalizar ainda mais o conteúdo com inserção de etiquetas especiais:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> Para inserir o título da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> Para inserir a  URL da galeria se configurado nas opções de configuração PIWIGO.
<br/><br/>
Para usar vários idiomas, pode usar as etiquetas da extensão descrição alargada se ativa.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Digite aqui o assunto personalizado do e-mail de confirmação de registo.<br/>
Por defeito, o campo tem um texto genérico em Inglês, mas pode alterá-lo e usar as etiquetas de tradução [lang=?] da extensão de descrição Alargada instalada.
<br/><br/>
As etiquetas personalizadas e adicionais, estão disponíveis sem o uso da extensão de Descrição alargada:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> Para autométicamente inserir o nome do utilizador de destino do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> Para inserir o título da galeria.<br/>
';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Digite aqui o assunto do email confirmação do registo personalizado(com ou sem nova geração de chave). <br/>
Por padrão, o campo tem um texto genérico em Inglês, mas pode alterá-lo e usar as etiquetas de tradução [lang =?] da descrição alargada da extensão se instalada.
<br/><br/>
As etiquetas que se seguem, para personalização adicional, estão disponíveis sem o uso da extensão Descrição alargada:<br/>
-. <b Style="color: red;"> [username] </b> para inserir automaticamente o nome do utilizador de destino do e-mail<br/>
-. <b Style="color: red;"> [mygallery] </b> para inserir o título da galeria<br/>';
$lang['UAM_AdminValidationMail_d'] = 'Quando um administrador ou Webmaster da galeria confirmar manualmente um registo pendente, um e-mail notificação é enviado automaticamente para o utilizador. Digite aqui o texto que aparece neste email.
<br/><br/>
Personalizar ainda mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automáticamente inserir o nome do destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> Para inserir o título da sua galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> Para inserir a URL se definido nas opções de configuração PIWIGO.
<br/><br/>
Para usar vários idiomas, pode usar as etiquetas da descrição alargada da extensão se ativa.






';
$lang['UAM_confirmmailTitle_d'] = 'Esta opção permite um utilizador confirmar o registo, clicando  num link recebido por e-mail que lhe é enviado depois do registo ou administradores a ativar manualmente o registo.
<br/><br/>
No primeiro caso, o e-mail é composto por uma parte personalizável para introduzir uma pequena nota de boas-vindas e uma parte fixa que contém o link de ativação que é gerado a partir de uma chave aleatória que pode ser eventualmente  regenerada através da aba  &quot;Tracking confirmations&quot;.
<br/>
No segundo caso, o link de validação é enviado para os administradores da galeria. Os visitantes têm de esperar até que um administrador lhes confirme, ele próprio, usando o link de validação ou na guia &quot;confirmation tracking&quot; .
<br/>
<b style=&quot;color: red;&quot;>NB: Opções &quot;Limite para confirmação de registo limited&quot; and &quot;Lembrar utilizadores não confirmados &quot; tem de ser definido para off quando a confirmação manual dos administradores está ativada.</b>
<br/><br/>
Esta opção é geralmente usada com a atribuição automática de grupo e/ou estatutos. Por exemplo, um utilizador que ainda não confirmou o seu registo será enviado para um grupo específico de utilizadores (com ou sem restrições na galeria ), enquanto um utilizador que confirmou o seu registo será enviado para um grupo &quot;normal&quot; ';
$lang['UAM_USRAutoDelTitle_d'] = 'Isto só é válido quando o utilizador cuja conta expirou aciona o mecanismo de exclusão (raro, mas possível). ele é de seguida desligado da galeria e redirecionado para uma página que mostra a exclusão da sua conta e, possivelmente, as razões para essa exclusão.
<br/><br/>
Personalize mais o conteúdo com etiquetas especiais inseridas: <br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da sua galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL se definido nas opções de configuração do piwigo.<br/>
<b style=&quot;color: red;&quot;>[username]</b> não existe aqui pois o utilizador em questão foi apagado.
<br/><br/>
Texto personalizado para a página de redirecionamento pode ser inserido neste campo que é compatível com o editor FCK e, para multi-idiomas, você pode usar as etiquetas [lang] da Extensão Descrição alargada seestiver ativa.';
$lang['UAM_GTReminder_Subject_d'] = 'Digite aqui manualmente o assunto do email informação personalizado do Rastreador fantasma. <br/>
Por defeito, o campo tem um texto genérico em Inglês, mas você pode alterá-lo e usar as etiquetas de tradução [lang =?] Da extensão Descrição Alargada se instalada.
<br/>
As seguintes personalizações adicionais estão disponíveis sem o uso da extensão Descrição alargada:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automaticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da galeria.<br/>
';
$lang['UAM_GTAutomail_Text_d'] = 'Digite o texto personalizado que também explica as razões para o rebaixamento, para acompanhar o link de confirmação. O texto personalizado não é obrigatório, mas fortemente recomendado. Na verdade, os visitantes não apreciam receber um e-mail contendo apenas um link, sem mais explicações. ;-)
<br/><br/>
Personalize mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automaticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL da galeria se definido nas opções de configuração do Piwigo.
<br/><br/>
Para usar vários idiomas, você pode usar as etiquetas da extensão Descrição Alargada desde que ativa.';
$lang['UAM_GTAutomail_Subject_d'] = 'Digite aqui o assunto do seu email automático personalizado.<br/>
Por defeito, o campo tem um texto genérico em Inglês, mas você pode alterá-lo e usar as etiquetas de tradução [lang =?] Da extensão  Descrição Alargada se instalada.
<br/><br/>
As seguintes etiquetas de personalização estão disponíveis sem o uso da extensão Descrição alargada:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> para auomaticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da sua galeria.<br/>
';
$lang['UAM_GT_MainTitle_d'] = '- Gerênciamento Automatico ou manual de utilizadores<br/>
- E-mailing<br/>
...';
$lang['UAM_HidePasswTitle_d'] = 'Defina aqui se deseja exibir a senha escolhida pelo visitante no e-mail informação. Se  ativar a opção, a senha irá aparecer em texto claro. Se desativar a senha não vai aparecer.';
$lang['UAM_confirmlevelTitle'] = 'Nível de privacidade';
$lang['UAM_GTAutoTitle_d'] = 'Esta opção permite aplicar regras para a gestão automatizada de utilizadores fantasmas.
<br/><br/>Princípio Básico: Um utilizador que atinge o máximo de tempo entre visitas <b><u>e</u></b> já foi notificado por e-mail é considerado como expirado. Em seguida, você pode aplicar as regras de processamento automatizadas tais como a exclusão automática de contas expiradas ou rebaixamento, restringindo o acesso à galeria (mudar automaticamente para um grupo restrito e/ou estado).
<br/><br/>O desencadeamento desta automatização é alcançado quando ligar os utilizadores (qualquer utilizador!) à galeria.';
$lang['UAM_GTAutoMailTitle_d'] = 'Quando uma conta está expirada (mudança de nível de grupo / status / nível de privacidade, rebaixando o visitante), um email informativo pode ser enviado para esclarecer as razões desta alteração e os meios para recuperar o acesso inicial à galeria.
<br/> Para fazer isso, um link para reconfirmação do registo é anexado ao e-mail (geração automática de uma nova chave de confirmação).).<b style=&quot;color: red;&quot;> Se o utilizador já haja sido notificado, a sua conta é automaticamente destruída. <br/><br/>
<b style=&quot;color: red;&quot;>Aviso: O uso desta função está intimamente associado com a confirmação da registo por parte do utilizador (confirmação por e-mail) e não pode ser ativada sem esta opção</b>.';
$lang['UAM_confirmTitle_d'] = '- Informação geração de email<br/>
- Registar confirmação geração de email<br/>
- Grupos, estado ou nível de privacidade auto aderir<br/>
- Prazo para a confirmação de registo<br/>
- <br/>Lembrança da Geração de email<br/>
';
$lang['UAM_confirmgrpTitle'] = 'Grupos';
$lang['UAM_GTAutoGpTitle_d'] = 'A mudança automática do grupo, estado ou nível de privacidade é como um rebaixamento das contas envolvidas e que trabalham com o mesmo princípio do grupo, status ou nível de privacidade de confirmação (ver &quot;Setting confirmations of registration&quot;). Portanto, para ser definido um grupo, estado e / ou nível de rebaixar o acesso à galeria. Se isto já foi definido com o uso da função confirmação de inscrição, você pode usar o mesmo grupo/status/nivel. <br/>
<b style=&quot;color: red;&quot;>Nota importante: </b> Se um utilizador fantasma não ouviu falar em fora de prazo e da notificação automática por e-mail (se ativada), ele é automaticamente apagado da base de dados.';
$lang['UAM_GTAutoDelTitle'] = 'Mensagem personalizada na conta eliminada';
$lang['UAM_GTAutoDelTitle_d'] = 'Isto só é válido quando o utilizador, de cuja conta expirou, aciona o mecanismo eliminar, (raro, mas possível). Então,é desligado da galeria e redirecionado para uma página que mostra a eliminação da sua conta e, possivelmente, as razões para esta eliminação.
<br/><br/>
Personalize mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da sua galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> Para inserir a URL da galeria desde que definido nas opções de configuração da galeria.<br/>
<b style=&quot;color: red;&quot;>[username]</b> não é existente aqui porque o utilizador respetivo foi apagado.
<br/><br/>
Texto personalizado para a página de redirecionamento pode ser inserido neste campo que é compatível com o editor FCK e, para multi-idiomas, pode usar as etiquetas [lang] da extensão descrição alargada se ativa.';
$lang['UAM_remailtxt1Title'] = 'Email lembrete com nova chave gerada';
$lang['UAM_validationlimitTitle_d'] = 'Esta opção permite limitar a validade da chave  confirmação enviada por e-mail para novos inscritos. Os visitantes que se inscreverem terão x dias para confirmar sua inscrição. Após este período, o link de confirmação expirará.
<br/><br/>
Esta opção é utilizada em conjunto com a &quot;Confirmação de registo&quot;
<br/><br/>
Se esta opção e a opção &quot;Lembrar utilizadores não confirmados&quot; estiverem ativadas, novas opções aparecerão em baixo, nesta seção, para permitir a automatização de gestão de utilizadores não confirmados.';
$lang['UAM_remailtxt2Title_d'] = 'Digite o texto introdutório que deseja apareça no e-mail lembrete sem uma chave de confirmação regenerada.
<br/><br/>
Se deixado em branco , o email lembrete ficará vazio. É, portanto, fortemente aconselhado a colocar um pequeno texto explicativo. ( NB: O texto pré-preenchido com a instalação da extensão é fornecido como um exemplo).
<br/><br/>
Personalize o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do utilizador destinatário do e-mail<br/>.
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da sua galeria<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL da galeria se configurado nas opções de configuração do Piwigo<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b>para inserir o número de limite de dias para confirmar a inscrição (&quot;Limite para confirmação do registo; deve estar ativado).
<br/><br/>
Para usar vários idiomas, você pode usar as etiquetas da extensão Descrição Alargada se estiver ativada.';
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
$lang['UAM_remailtxt2Title'] = 'Email lembrete sem geração de nova chave';
$lang['UAM_restricTitle_d'] = '- Exclusão de caratéres<br/>
- Exclusão de domínios de email<br/>';
$lang['UAM_tipsTitle_d'] = 'Dicas e vários exemplos de uso';
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
$lang['UAM_mailexcTitle_d'] = 'Por defeito, Piwigo aceita todas as direções de email no formato xxx@yyy.zz. Ativando esta opção permite-lhe excluir certos domínios no formato: @[domain_name].[domain_extension].<br/><br/>
Exemplos:<br/>
@hotmail.com -> excluindo direções *@hotmail.com<br/>
@hotmail -> excluindo todas as direções *@hotmail*<br/><br/>
<b style=&quot;color: red;&quot;>Atenção - Esta opção apenas atua se os emails forem os de registo! Por favor verifique as opções de configuração Piwigo.</b>
	 ';
$lang['UAM_miscTitle_d'] = '- Monotorização de utilizadores registados<br/>
- Nome de utilizador obrigatório para comentários de visitantes<br/>';
$lang['UAM_confirmmail_custom1_d'] = 'Quando a opção &quot;Confirmação de registo&quot; está ativa, este campo permite-lhe personalizar o <b><u>texto rejeição</u></b> na página confirmação de registo mostrada quando um utilizador clica no link confirmação que recebeu por email.
<br/><br/>
Depois de instalar a extensão, um texto standard é mostrado como um exemplo.
<br/><br/>
Personalizar o conteúdo com inserção de etiquetas especiais:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir o nome do utilizador em causa.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o nome da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL se definido nas opções de configuração Piwigo.
<br/><br/>
Este campo é compatível com o editor FCK e, para idiomas multiplos, pode utilizar as etiquetas [lang] da extensão Descrição Alargada se estiver ativada.';
$lang['UAM_confirmmail_custom2_d'] = 'Quando a opção &quot;Confirmação de registo&quot; está ativa, este campo permite-lhe personalizar o <b><u>texto rejeição</u></b> na página confirmação de registo mostrada quando um utilizador clica no link confirmação que recebeu por email.
<br/><br/>
Depois de instalar a extensão, um texto standard é mostrado como um exemplo.
<br/><br/>
Personalizar o conteúdo com inserção de etiquetas especiais:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir o nome do utilizador em causa.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o nome da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL se definido nas opções de configuração Piwigo.
<br/><br/>
Este campo é compatível com o editor FCK e, para idiomas multiplos, pode utilizar as etiquetas [lang] da extensão Descrição Alargada se estiver ativada.';
$lang['UAM_confirmtxtTitle_d'] = 'Digite o texto introdutório que deseja apareça no e-mail de confirmação da inscrição.
<br/><br/>
Personalize mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automáticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL se nas opções de configuração Piwigo.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> Para inserir o número de dias limite para confirmação da inscrição (&quot;limite da data limite para confirmação do registo;&quot; deve ser ativada).
<br/><br/>
Para usar vários idiomas, você pode usar as etiquetas da extensão descrição alargada se ativa.';
$lang['UAM_gtTitle_d'] = 'Quando o Ghost Tracker é ativado e inicializado, você encontrará abaixo a lista de visitantes registados que não voltaram desde x dias. &quot;x&quot; é o número de dias configurados na guia Configuração geral. Além disso, vai encontrar uma coluna que indica se um lembrete de e-mail foi enviado para os visitantes direcionados. Assim, você pode ver de relance e tratar os visitantes que não tiveram em atenção o lembrete <br/><br/> Neste ponto de vista, você pode.:
<br/><br/>
- Manualmente apagar contas<b>(dreno manual)</b>
<br/>
- Gerar e-mail lembrete <b>com redefinição da data da última visita </b>. Isto permite mostrar cartão aos visitantes alvejados. Se o visitante já recebeu um lembrete, nada impede do envio de um novo e-mail que irá repor novamente, na realidade, a data da última visita.
<br/><br/>
<b> Função tabela de classificação</b>: Você pode classificar os dados exibidos, clicando nos cabeçalhos das colunas. Segure a tecla SHIFT para classificar até 4 colunas simultâneas.';
$lang['UAM_MailInfo_Subject_d'] = 'Digite aqui a informação do assunto personalizado. <br/>
Por defeito, o campo tem um texto genérico em Inglês, mas você pode alterá-lo e usar as etiquetas de tradução [lang=?] Da extensão Descrição Alargada se instalada.
<br/>
As seguintes etiquetas adicionais personalizadas estão disponíveis sem o uso da extensão Descrição alargada: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automáticamente inserir o nome do destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da sua galeria.<br/>';
$lang['UAM_gttextTitle_d'] = 'Digite o texto que deseja apareça no lembrete de e-mail para solicitar ao utilizador para visitar sua galeria de imediato. (NB: O texto pré-preenchido com a instalação da extensão é fornecido como exemplo).
<br/><br/
Personalize mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automáticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL da galeria se ativado nas opções configuração do Piwigo.<br/>
- <b style=&quot;color: red;&quot;>[days]</b> para inserir o número máximo de dias entre duas visitas.
<br/><br/>
Para multiplos idiomas, poderá usar as etiquetas da extensão Descrição alargada se estiver ativada.';
$lang['UAM_RejectConnexion_d'] = 'Se ativado, os novos utilizadores registrados que não confirmar sua inscrição não poderão ligar-se à galeria. Serão redirecionados para uma página especial onde serão informados deste seu estado.<br/>
<b style="color: red;"> Aviso - Este recurso funciona apenas em conjunto com confirmação de grupos! Veja abaixo para definir os grupos como requerido.</b>';
$lang['UAM_infotxtTitle_d'] = 'Introduza o texto introdutório que deseja apareça no email informação.
<br/><br/>
Depois personalize o conteúdo com inserção de etiquetas especiais:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automáticamente introduzir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL da galeria se definido nas opções configuração do.
<br/><br/>
Para múltiplos idiomas, pode usar a extensão Descrição alargada se estiver ativada.';
$lang['UAM_StuffsTitle_d'] = 'Isto ativa um bloco UAM adicional na extensão PWG Stuffs (se instalada) para informar, acerca da sua condição, os visitantes que não confirmaram a sua inscrição.
<br/><br/>
Para mais detalhes, consulte as <b>Dicas e exemplos de uso </b> na parte inferior desta página.';
$lang['UAM_Tracking registered users_d'] = 'Isso ativa uma tabela na aba &quot;Rastrear utilizadores registrados&quot;, onde constam os utilizadores registados na galeria com a data de sua última visita e tempo gasto (em dias) desde a sua última visita. O monitoramento é puramente informativo para o administrador da Galeria.';
$lang['UAM_USRAutoMailTitle_d'] = 'Quando ativada, esta função enviará automaticamente conteúdo personalizado no &quot;Email lembrete com uma nova chave gerada&quot; aos visitantes que correspondem aos critérios.';
$lang['UAM_confirmstatTitle'] = 'Estatutos';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personalize aqui a sua explanação para informar os utilizadores não confirmados de que eles não autorizados a ligar-se à galeria enquanto não confirmarem a sua inscrição.
<br/><br/>
Este campo é compatível com o editor FCK e, para multi-idiomas, você pode usar a etiqueta [lang] se a extensão Descrição Alargada estiver ativa.';
$lang['UAM_remailTitle_d'] = 'Esta opção permite-lhe enviar um e-mail lembrete aos utilizadores registados mas que ainda não confirmaram a sua inscrição em tempo normal. Por isso, age em conjunto com a  &quot;Confirmação de registo&quot;
<br/><br/>
Podem ser enviados dois tipos de emails: Com ou sem regeneração da chave de confirmação. Conforme o caso, o conteúdo dos e-mails pode ser personalizado.
<br/><br/>
Consulte a aba &quot;confirmações de rastreamento&quot;
<br/><br/>
Se esta opção e a opção &quot;Prazo para confirmação de inscrição limitado&quot; são ativados, novas opções aparecem abaixo desta secção para ativar a gestão automática de utilizadores não confirmados.';
$lang['UAM_RedirTitle_d'] = 'Esta opção automaticamente redireciona um utilizador registado para a sua página personalizada apenas na sua sua primeira ligação à galeria.<br/><br/>
Atenção: Esse recurso não se aplica a todos os utilizadores registados. Aqueles com estatus &quot;admin&quot;, &quot;webmaster&quot; ou &quot;generic&quot; são excluídos';
$lang['UAM_remailtxt1Title_d'] = 'Digite o texto introdutório que deseja apareça no e-mail lembrete em adição à confirmação da chave regenerada.
<br/><br/>
Se deixado em branco, o  mail lembrete incluirá apenas o link de confirmação . É, portanto, fortemente aconselhado seja escrito um pequeno texto explanatório. (NB: O texto pré-preenchido com a instalação da extensão é fornecido apenas como exemplo).
<br/><br/>
Personalize mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do utilizador destinatário do e-mail <br/>.
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da sua galeria <br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>  para inserir a URL da galeria se configurado nas opções de configuração do Piwigo <br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> para inserir o número de dias limite para confirmar a inscrição  (&quot;Deadline for registration confirmation limited;&quot; tem de estar ativado).
<br/><br/>
Para usar vários idiomas, pode usar a extensão Descrição Alargada se estiver ativada.';
$lang['UAM_adminconfmailTitle_d'] = 'Você pode desativar essa confirmação apenas para contas de utilizador criadas pelo administrador através da interface de gerenciamento de utilizadores do Piwigo.<br/><br/>
Ao ativar essa opção, e-mail de confirmação de inscrição será enviada para cada utilizador criado por admin.<br/><br/>
Ao desativar esta opção (padrão), apenas são enviadas as informações de e-mail  (se &quot;e-mail Informação ao utilizador&quot; estiver ativado). Além disso, por defeito, o utilizador criado será <b>considerado validado. </b> ';
$lang['UAM_USRAutoTitle_d'] = 'Manipulação automática de visitantes não confirmados é acionada cada vez que se ligar à galeria e funciona da seguinte forma:
<br/><br/>
- A exclusão automática de contas não confirmadas no tempo permitido sem o envio automático de e-mail lembrete -> &quot;Prazo para confirmação de inscrição limitado&quot; <b><u> habilitado </u></b> e &quot;Lembrar os utilizadores não confirmados" <b><u> desativado </u><br/><br/>
- Enviando automaticamente uma mensagem de lembrete com nova geração de chave de confirmação e exclusão automática de contas não confirmadas no praso após o envio do lembrete -> &quot;Prazo para confirmação de inscrição limitada &quot;<b><u> ativado </ u></b> e  &quot;Lembrar os usuários não confirmados &quot; <b><u> habilitado</u></b>.
';
$lang['UAM_ghosttrackerTitle_d'] = 'Também chamado de &quot;Rastreador de Fantasmas&quot;, quando esta função está ativada, você pode gerenciar seus visitantes, dependendo da freqüência de suas visitas. Estão disponíveis 2 modos de funcionamento: <br/><br/>
- Gestão manual: Quando o tempo entre duas visitas é atingido, o visitante aparece na tabela &quot;Rastreador de Fantasmas&quot;, onde, através de email poderá lembra-lo ou apaga-lo <br/><br/>.
- Gestão Automatizada: Quando o período entre duas visitas sucessivas for atingido, o visitante é excluído ou movido automaticamente para um grupo no  estado de espera. Neste segundo caso, um e-mail informação pode ser-lhe enviado. <br/><br/>
<b style=&quot;color: red;&quot;>Nota importante: Se ativar este recurso pela primeira vez ou o reativar após um longo período, durante o qual os novos visitantes foram registados, deve inicializar ou reinicializar o &quot;Rastreador de Fantasmas&quot;,  (veja as instruções correspondentes no separador &quot;Rastreador de Fantasmas&quot;).<br/>
';
$lang['UAM_infomailTitle_d'] = 'Esta opção permite automatizar o envio de um e-mail informação para um utilizador quando ele altera a senha ou endereço de e-mail no seu perfil. <br/>
O conteúdo da mensagem a enviar é composto por uma parte personalizável para introduzir uma pequena nota de boas-vindas e uma parte fixa, indicando o nome de login, senha e endereço de e-mail do utilizador.';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>AVISO : A utilização de estatutos na confirmação requer que tenha mantido o estatuto &quot;Guest (Visitante)&quot; como o estatuto por defeito (no modelo de utilizador) para os novos registos. Note que também pode definir outro tipo de utilizador como defeito. Por favor reveja a documentação do Piwigo para mais detalhes.</b><br/><br/>
Os estatutos são validados para utilização conjunta com a &quot;Confirmação de registo&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>AVISO : A utilização do nível de privacidade requere que já o tenha utilizado com as suas imagens. Por favor reveja a documentação do Piwigo para mais detalhes.</b><br/><br/>
O nível de privacidade é validado para utilização conjunta com a &quot;Confirmação de registo&quot;';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>AVISO : A utilização de grupos na confirmação requer que tenha criado pelo menos um grupo de utilizadores e que este esteja definido como grupo &quot;por defeito&quot; na gestão de grupos de utilizadores do Piwigo.</b><br/><br/>
os grupos são validados para utilização conjunta com a &quot;Confirmação de registo&quot;
';
$lang['UAM_carexcTitle_d'] = 'Pode ser interessante a proibição da utilização de certos caracteres nos nomes de utilizador (exemplo: recusar nomes de login que contenham @). Esta opção permite excluir caracteres ou sequências de caracteres.<br/>
NB: A opção pode também excluir palavras inteiras
<br/><br/>
<b style=&quot;color: red;&quot;>Aviso: esta opção não tem efeito sobre os nomes de utilizador criados à ativação da mesma.</b>';
?>