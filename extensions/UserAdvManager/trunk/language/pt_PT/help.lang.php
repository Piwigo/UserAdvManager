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
?>