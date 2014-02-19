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
$lang['UAM_tipsTitle_d'] = 'Dicas e vários exemplos de uso';
$lang['UAM_remailtxt2Title'] = 'Email de lembrete sem uma nova chave';
$lang['UAM_remailtxt1Title'] = 'Email de lembrete com uma nova chave gerada';
$lang['UAM_confirmgrpTitle'] = 'Grupos';
$lang['UAM_confirmlevelTitle'] = 'Nível de privacidade';
$lang['UAM_GT_MainTitle_d'] = '- Gerenciamento automático ou manual de usuários fantasmas<br>
- E-mailing<br>
...';
$lang['UAM_GTAutoDelTitle'] = 'Mensagem personalizada para remover uma conta';
$lang['UAM_AdminValidationMail_d'] = 'Quando um administrador ou Webmaster da galeira confirma manualmente um registro pendente, um email de notificação é enviado ao usuário automaticamente. Coloque aqui o texto personalizado do email de validação.
<br><br>
Depois personalize o conteúdo inserindo tags especiais:<br>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do destinatário do email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da galeria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL da sua galeria, se configurado nas opções do Piwigo.
<br><br>
Para usar múltiplos idiomas, é possível utilizar as tags do plugin de Descrições Estendidas, se estiver disponível.';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Quando um administrador ou Webmaster da galeira confirma manualmente um registro pendente, um email de notificação é enviado ao usuário automaticamente. Coloque aqui o assunto personalizado do email de validação.<br>
Por padrão, o campo possui um texto genérico em Inglês mas é possível mudá-lo e usar tags de tradução [lang=?] do plugin Descrição Estendida, caso esteja instalado.
<br><br>
As tags seguintes de customização estão disponíveis sem usar o plugin de Descrição Estendida:<br>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir o nome do destinatário do email automaticamente.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da sua galeria.<br>';
$lang['UAM_AddURL2Mail_d'] = 'Ativando essa opção, a URL de sua galeria será adicionada ao rodapé dos emails gerados pelo plugin, como uma assinatura.';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personalize aqui seu texto explicativo que informa usuários não confirmados que eles não poderão conectar à galeria até que confirmem seu registro.
<br><br>
Este campo é compatível com o editor FCK e, para múltiplos idiomas, pode-se usar a tag [lang] do plugin de descrição estendida, se este estiver ativo.';
$lang['UAM_GTAutoGpTitle_d'] = 'A mudança automática do grupo, estado ou nível de privacidade é como um rebaixamento das contas envolvidas e que trabalham com o mesmo princípio que o grupo, status ou nível de privacidade de confirmação (consulte "Configurar as confirmações de inscrição"). Portanto,  para definir um grupo, estado e/ou nível de rebaixar do acesso à galeria. Se isso já foi definido com o uso da função de confirmação de inscrição, você pode usar o mesmo grupo / status / nível. <br/>
<b style="color: red;"> Nota importante: </ b> Se um usuário fantasma ainda não ouviu falar de fora do prazo e, apesar da notificação automática por e-mail (se habilitado), ele é automaticamente excluído do base de dados.';
$lang['UAM_RejectConnexion_d'] = 'Se ativado, os novos usuários registrados que não confirmarem sua inscrição não serão capazes de conectar-se à galeria. Eles será redirecionado para uma página especial para informá-los deste estado. <br/><br/>
<b style="color: red;"> Aviso - Este recurso funciona apenas em conjunto com grupos de confirmação! Veja abaixo para definir os grupos, conforme necessário. </b>';
$lang['UAM_RedirTitle_d'] = 'Esta opção redireciona automaticamente um usuário registrado para sua personalização de página somente em sua primeira conexão com a galeria. <br/><br/>
Atenção: Esse recurso não se aplica a todos os usuários registrados. Aqueles com "admin", "webmaster" ou status "genérico" são excluídos.';
$lang['UAM_restricTitle_d'] = '- Exclusão de caracteres<br/>
- Exclusão de domínios de email<br/>
...';
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
$lang['UAM_validationlimitTitle_d'] = 'Esta opção permite limitar a validade da chave de confirmação de e-mail  enviada para novos inscritos. Os visitantes que se inscreverem terão x dias de tempo para confirmar sua inscrição. Após este período, o link de confirmação irá expirar.
<br/><br/>
Esta opção é utilizada em conjunto com a "Confirmação de registo"
<br/><br/>
Se esta opção e a opção "Lembrar os usuários não confirmados" são ativadas, novas opções aparecem em baixo nesta seção para permitir a automação de gestão de usuários não confirmados.';
$lang['UAM_miscTitle_d'] = '- Usuários registrados monitoramento <br/>
- Apelido obrigatório para comentário de visitantes <br/>
...';
$lang['UAM_infomailTitle_d'] = 'Esta opção permite automatizar o envio de um e-mail de informações de um usuário quando ele muda de senha ou endereço de e-mail em sua página de perfil. <br/><bb/>
O conteúdo da mensagem enviada é composta por uma parte customizável a introduzir uma pequena nota de boas-vindas e uma parte fixa, indicando o nome de login, senha e endereço de e-mail do usuário.';
$lang['UAM_confirmstatTitle'] = 'Estatutos';
$lang['UAM_confirmTitle_d'] = '- Informações geração email <br/>
- Registrar confirmação geração email <br/>
- Grupos, estado ou nível de privacidade auto registro <br/>
- Prazo para a confirmação do registro <br/>
- Geração email Lembrete
...';
$lang['UAM_USRAutoMailTitle_d'] = 'Quando ativada, esta função irá enviar automaticamente conteúdo personalizado em "Lembrete de e-mail com uma nova chave gerada" aos visitantes que correspondem aos critérios.';
$lang['UAM_Tracking registered users_d'] = 'Isso ativa uma tabela na guia "de rastreamento de usuários registrados", onde são listados os utilizadores registados na galeria com a data de sua última visita e tempo gasto (em dias) desde a sua última visita. O monitoramento é puramente informativo para o administrador da galeria.';
$lang['UAM_StuffsTitle_d'] = 'Isso permite que um bloco UAM adicional no PWG Stuffs plugin (se instalado), informar os visitantes que não confirmaram sua inscrição sobre suas condição.
<br/><br/>
Consulte <b>Dicas e Exemplos de Uso</b> na parte inferior desta página para mais detalhes.';
$lang['UAM_HidePasswTitle_d'] = 'Escolha esta opção se você deseja exibir a senha escolhida pelo visitante no e-mail informações. Se você ativar a opção, a senha irá aparecer em texto claro. Se você desativar a senha não vai aparecer.';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Por padrão, quando um usuário perdeu a senha e seleciona a opção de recuperação, ele recebe um e-mail contendo apenas o seu nome de usuário e sua senha nova. 
<br/><br/>
Aqui, você pode adicionar texto de sua escolha para ser inserido <b><u>antes</u></b>a informação padrão. 
<br/><br/>
Personalize mais o conteúdo com etiquetas especiais inseridas:<br/> 
-.<b style="color: red;"> [mygallery] </ b> para inserir o título de sua galeria <br/> 
- <b style="color: red;"> [myurl] </ b> para inserir sua galeria de URL se configurado nas opções de configuração do Piwigo. 
<br/><br/>
Para usar vários idiomas, você pode usar as etiquetas do plugin de descrição Estendida se ele estiver ativo.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Digite aqui o assunto de seu e-mail de confirmação de registo personalizado. <br/> 
Por padrão, o campo tem um texto genérico em Inglês, mas você pode mudá-lo e usar as etiquetas de tradução [lang =?] Da Descrição Extendida do plugin se instalado. 
<br/> 
As seguintes personalizações de etiquetas adicionais estão disponíveis sem o uso do plugin de Descrição Estendida: <br/> 
- <b Style="color: red;"> [username] </b> para inserir automaticamente o nome do usuário de destino do e-mail <br/>. 
-. <b Style="color: red;"> [mygallery] </b> para inserir o título de sua galeria <br/>';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Digite aqui o assunto do seu lembrete de confirmação de inscrição personalizado do email (com ou sem nova geração de chaves).<br/>
Por padrão, o campo tem um texto genérico em Inglês, mas você pode mudá-lo e usar as etiquetas de tradução [lang =?] Da Descrição Extendida do plugin se instalado.
<br/><br/>
As seguintes etiquetas de personalizações adicionais estão disponíveis sem o uso do plugin de Descrição Extendida:<br/>
- <b style=&quot;color: red;&quot;>[username]</b>para inserir automaticamente o nome do usuário de destino do e-mail. <br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para inserir o título de sua galeria. <br/>';
?>