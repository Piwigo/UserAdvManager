<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '- Informações geração email <br/>
- Registrar confirmação geração email <br/>
- Grupos, estado ou nível de privacidade auto registro <br/>
- Prazo para a confirmação do registro <br/>
- Geração email Lembrete
...';
$lang['UAM_confirmmailTitle_d'] = 'Esta opção permite ao usuário confirmar o registro clicando em um link enviado por email durante o registro ou permite ao administrador ativar manualmente o registro.
<br/><br/>
No primeiro caso, o email é formado por uma parte personalizável para introduzir uma nota de boas vindas e uma parte fixa contendo o link de ativação o qual é gerado de uma chave aleatória que pode ser regerado por meio da aba &quot;Rastreio e confirmações&quot;.
<br/><br/>
No segundo caso, o link de validação é enviado aos administradores da galeria. Visitantes têm de aguardar até que um administrador o confirme por meio do link de ativação ou por meio da aba &quot;rastreio de confirmação&quot;.
<br/>
<b style=&quot;color: red;&quot;>NB: Opções &quot;Último prazo para confirmação do registro limitado&quot; e &quot;Lemrar usuários não confirmados&quot; tem de estar off quando a confirmação manual do administrador estiver habilitado.</b>
<br/><br/>
Esta opção é geralmente usado com a associação automática de grupo e/ou estatutos. Por exemplo, um usuário que não confirmou seu registro é associado à um grupo específico de usuários (com ou sem restrição na galeria) enquanto um usuário que confirmou seu registro será associado a um grupo &quot;normal&quot; .';
$lang['UAM_StuffsTitle_d'] = 'Isso permite que um bloco UAM adicional no PWG Stuffs plugin (se instalado), informar os visitantes que não confirmaram sua inscrição sobre suas condição.
<br/><br/>
Consulte <b>Dicas e Exemplos de Uso</b> na parte inferior desta página para mais detalhes.';
$lang['UAM_adminconfmailTitle_d'] = 'Você pode desativar essa confirmação apenas para contas de usuário criadas pelo administrador através da interface de gerenciamento de usuários do Piwigo. <br/><br/>
Ao ativar essa opção, um e-mail de confirmação de inscrição será enviado para cada usuário criado pelo admin. <br/><br/> 
Ao desativar esta opção (padrão), apenas as informações de e-mail serão enviadas (se "e-mail de Informações para o usuário" estiver ativada). Além disso, o usuário criado será <b> considerado validado </b> por padrão.';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Quando um administrador ou Webmaster da galeira confirma manualmente um registro pendente, um email de notificação é enviado ao usuário automaticamente. Coloque aqui o assunto personalizado do email de validação.<br>
Por padrão, o campo possui um texto genérico em Inglês mas é possível mudá-lo e usar tags de tradução [lang=?] do plugin Descrição Estendida, caso esteja instalado.
<br><br>
As tags seguintes de customização estão disponíveis sem usar o plugin de Descrição Estendida:<br>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir o nome do destinatário do email automaticamente.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da sua galeria.<br>';
$lang['UAM_AdminValidationMail_d'] = 'Quando um administrador ou Webmaster da galeira confirma manualmente um registro pendente, um email de notificação é enviado ao usuário automaticamente. Coloque aqui o texto personalizado do email de validação.
<br><br>
Depois personalize o conteúdo inserindo tags especiais:<br>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do destinatário do email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da galeria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL da sua galeria, se configurado nas opções do Piwigo.
<br><br>
Para usar múltiplos idiomas, é possível utilizar as tags do plugin de Descrições Estendidas, se estiver disponível.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Digite aqui o assunto de seu e-mail de confirmação de registo personalizado. <br/> 
Por padrão, o campo tem um texto genérico em Inglês, mas você pode mudá-lo e usar as etiquetas de tradução [lang =?] Da Descrição Extendida do plugin se instalado. 
<br/> 
As seguintes personalizações de etiquetas adicionais estão disponíveis sem o uso do plugin de Descrição Estendida: <br/> 
- <b Style="color: red;"> [username] </b> para inserir automaticamente o nome do usuário de destino do e-mail <br/>. 
-. <b Style="color: red;"> [mygallery] </b> para inserir o título de sua galeria <br/>';
$lang['UAM_confirmtxtTitle_d'] = 'Digite o texto introdutório que você quer que apareça no e-mail de confirmação da inscrição.
<br/><br/>
Personalize mais o conteúdo com tags especiais inseridas: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do usuário de destino do e-mail <br/>.
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título de sua galeria <br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL de sua galeria se configurado nas opções de configuração do Piwigo <br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> para inserir o número de limite de dias para confirmar a inscrição (&quot;Prazo para confirmação de inscrição limitada,&quot; tem que ser ativado).
<br/><br/>
Para usar vários idiomas, você pode usar as tags a descrição do plugin estendida se ele estiver ativo.';
$lang['UAM_confirmmail_custom1_d'] = 'Quando a opção  &quot;Confirmação do registro&quot; estiver ativa, este campo permitirá personalizar o <b><u>texto de aceitação</u></b> na página de confirmação de registro que é exibida quando o usuário clicar no link enviado por email.
<br/><br/>
Ao instalar o plugin, um texto padrão é colocado como exemplo.
<br/><br/>
Personalize o conteúdo inserindo tags especiais:<br />
- <b style=&quot;color: red;&quot;>[username]</b> para automaticamente inserir o nome do usuário relacionado.<br/>
- <b style=&quot;color: red;&quot;>[minha_galeria]</b> para inserir o título da sua galeria.<br/>
- <b style=&quot;color: red;&quot;>[minha_url]</b> para inserir a URl da sua galeria se estiver setado nas opções de configuração do Piwigo.
<br/><br/>
Esate campo é compatível com o editor FCK e, para multi-idiomas, você pode usar as tags [lang] do plugin "Extended description" se estiver ativado.';
$lang['UAM_confirmmail_custom2_d'] = 'Quando a opção &quot;Confirmação de matrícula&quot; está ativa, este campo permite que você personalize o <u>rejectance texto<b></u> </b> na página de confirmação de inscrição exibida quando o usuário clica no link de confirmação que foi recebido por e-mail.
<br/><br/>
Depois de instalar o plugin, um texto padrão é definido como um exemplo.
<br/><br/>
Personalize mais o conteúdo com tags especiais inseridas: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do usuário relacionado <br/>.
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título de sua galeria <br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL de sua galeria configurada nas opções de configuração do Piwigo.
<br/>
Este campo é compatível com o editor FCK e, para multi-idiomas, você pode usar as tags [lang] do plugin descrição estendida se estiver ativa.';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personalize aqui seu texto explicativo que informa usuários não confirmados que eles não poderão conectar à galeria até que confirmem seu registro.
<br><br>
Este campo é compatível com o editor FCK e, para múltiplos idiomas, pode-se usar a tag [lang] do plugin de descrição estendida, se este estiver ativo.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;> AVISO: O uso de grupos na confirmação requer que você tenha criado pelo menos um grupo de usuários e tenha definido &quot;por padrão&quot; na gestão de grupos de usuários do Piwigo. </b><br/><br/>
Os grupos são validados para uso em conjunto com a &quot;Confirmação de matrícula&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;> AVISO: O uso de status na confirmação requer que você tem mantido o usuário &quot;convidado&quot; com configuração padrão (como modelo de usuário) para novo registro. Note que você pode definir qualquer outro usuário como um modelo para novo registro. Por favor, consulte a documentação do Piwigo para mais detalhes. </b><br/><br/>
Os Estatus são validados para uso em conjunto com a &quot;Confirmação de matrícula&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;> AVISO: O uso de nível de privacidade requer que você tenha utilizado com as suas imagens. Por favor, consulte a documentação do Piwigo para mais detalhes.</b><br/><br/>
O nível de privacidade é validado para uso em conjunto com a "Confirmação de registro"';
$lang['UAM_validationlimitTitle_d'] = 'Esta opção permite limitar a validade da chave de confirmação de e-mail  enviada para novos inscritos. Os visitantes que se inscreverem terão x dias de tempo para confirmar sua inscrição. Após este período, o link de confirmação irá expirar.
<br/><br/>
Esta opção é utilizada em conjunto com a "Confirmação de registo"
<br/><br/>
Se esta opção e a opção "Lembrar os usuários não confirmados" são ativadas, novas opções aparecem em baixo nesta seção para permitir a automação de gestão de usuários não confirmados.';
$lang['UAM_remailTitle_d'] = '
Esta opção permite que você envie um e-mail lembrete aos usuários cadastrados, mas ainda não confirmaram a sua inscrição em tempo. Isso, trabalha em conjunto com a &quot;Confirmação de Registro&quot;
<br/><br/>
2 tipos de e-mails podem ser enviados: Com ou sem regeneração da chave de confirmação. Conforme o caso, o conteúdo de e-mails pode ser personalizado.
<br/><br/>
Consulte a aba &quot;confirmações de rastreamento&quot;.
<br/><br/>
Se esta opção e a opção &quot;Prazo para confirmação de inscrição limitado&quot; são ativados, novas opções aparecem em baixo nesta seção para permitir a automação de gestão usuários não confirmados.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Digite aqui o assunto do seu lembrete de confirmação de inscrição personalizado do email (com ou sem nova geração de chaves).<br/>
Por padrão, o campo tem um texto genérico em Inglês, mas você pode mudá-lo e usar as etiquetas de tradução [lang =?] Da Descrição Extendida do plugin se instalado.
<br/><br/>
As seguintes etiquetas de personalizações adicionais estão disponíveis sem o uso do plugin de Descrição Extendida:<br/>
- <b style=&quot;color: red;&quot;>[username]</b>para inserir automaticamente o nome do usuário de destino do e-mail. <br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para inserir o título de sua galeria. <br/>';
$lang['UAM_remailtxt1Title_d'] = 'Digite o texto introdutório que você quer que apareça no e-mail lembrete, além da tecla de confirmação regenerada.
<br/><br/>
Se deixado em branco, o e-mail de lembrete irá incluir apenas o link de confirmação. É, portanto, fortemente aconselhado um pequeno texto explicativo. (NB: O texto pré-preenchido com a instalação do plug-in é fornecido como um exemplo).
<br/><br/>
Personalize mais o conteúdo com tags especiais inseridas: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do usuário no e-mail de destino<br/>.
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título de sua galeria <br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL de sua galeria se configurado nas opções de configuração do Piwigo <br/>
- <b style=&quot;color: red;&quot;>[days]</b> para inserir o número máximo de dias entre duas visitas.
<br/><br/>
Para usar vários idiomas, você pode usar as tags a descrição do plugin estendida se ele estiver ativo.';
$lang['UAM_remailtxt2Title_d'] = 'Digite o texto introdutório que você quer que apareça no e-mail lembrete sem uma chave de confirmação regenerado.
<br/><br/>
Se deixado em branco , a mensagem lembrete estará vazia. É , portanto, fortemente recomendado um pequeno texto explicativo. ( NB: O texto pré-preenchido com a instalação do plug-in é fornecido como um exemplo).
<br/><br/>
Personalize mais o conteúdo inserindo etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do usuário de destino do e-mail <br/> .
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título de sua galeria <br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL de sua galeria se configurado nas opções de configuração do Piwigo <br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> para inserir o número limite de dias para confirmar a inscrição ( " Prazo para confirmação de inscrição limitada, tem que ser ativado).
<br/><br/>
Para usar vários idiomas, você pode usar as etiquetas do plugin Descrição Extendida  se ele estiver ativo.';
$lang['UAM_USRAutoTitle_d'] = 'Manipulação automática de visitantes não confirmadas é acionado cada vez que você se conectar à galeria e funciona da seguinte forma: 
<br/><br/>
- A exclusão automática de contas não confirmadas no tempo permitido sem o envio de lembrete e-mail automático -> "Prazo para confirmação de inscrição limitada" <b> <u> habilitado </u></b> e "Lembrar os usuários não confirmados" <b><u> desativado </u></b>. 
<br/><br/>
- Enviando automaticamente uma mensagem de lembrete com uma nova geração de chave de confirmação e exclusão automática de contas não confirmadas no tempo após o envio do aviso -> "Prazo para confirmação de inscrição limitada" <b><u> habilitado </u></b> e "Lembrar os usuários não confirmados" <b><u> habilitado </u></b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'Isso é válido somente quando o usuário cuja conta expirou disparar o mecanismo de apagamento (raro mas possível). Ele é então desconectado da galeria e redirecionado para uma página mostrando o apagamento da conta e, possivelmente, os motivos para isso.<br /><br />
Personalize o conteúdo com tags especiais:<br/>
- <b style=&quot;color: red;&quot;>[minha_galeria]</b> para inserir o título da sua galeria.<br/>
- <b style=&quot;color: red;&quot;>[minha_url]</b> para inserir a URL da sua galeria se selecionado nas opções de configuração do Piwigo.<br/>
<b style=&quot;color: red;&quot;>[username]</b> não está disponível aqui pois o usu´[ario em questão foi apagado.
<br/><br/>
O texto personalizado para a página direcionada pode ser inserido nesse campo que é compatível com o editor FCK e, para multi-idiomas, é possível usar as tags [lang] do plugin "Extended descriptions" se estiver ativo.';
$lang['UAM_USRAutoMailTitle_d'] = 'Quando ativada, esta função irá enviar automaticamente conteúdo personalizado em "Lembrete de e-mail com uma nova chave gerada" aos visitantes que correspondem aos critérios.';
?>