<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '- Informação geração de email<br/>
- Registar confirmação geração de email<br/>
- Grupos, estado ou nível de privacidade auto aderir<br/>
- Prazo para a confirmação de registo<br/>
- <br/>Lembrança da Geração de email<br/>';
$lang['UAM_confirmmailTitle_d'] = 'Esta opção permite um utilizador confirmar o registo, clicando  num link recebido por e-mail que lhe é enviado depois do registo ou administradores a ativar manualmente o registo.
<br/><br/>
No primeiro caso, o e-mail é composto por uma parte personalizável para introduzir uma pequena nota de boas-vindas e uma parte fixa que contém o link de ativação que é gerado a partir de uma chave aleatória que pode ser eventualmente  regenerada através da aba  &quot;Tracking confirmations&quot;.
<br/>
No segundo caso, o link de validação é enviado para os administradores da galeria. Os visitantes têm de esperar até que um administrador lhes confirme, ele próprio, usando o link de validação ou na guia &quot;confirmation tracking&quot; .
<br/>
<b style=&quot;color: red;&quot;>NB: Opções &quot;Limite para confirmação de registo limited&quot; and &quot;Lembrar utilizadores não confirmados &quot; tem de ser definido para off quando a confirmação manual dos administradores está ativada.</b>
<br/><br/>
Esta opção é geralmente usada com a atribuição automática de grupo e/ou estatutos. Por exemplo, um utilizador que ainda não confirmou o seu registo será enviado para um grupo específico de utilizadores (com ou sem restrições na galeria ), enquanto um utilizador que confirmou o seu registo será enviado para um grupo &quot;normal&quot; ';
$lang['UAM_StuffsTitle_d'] = 'Isto ativa um bloco UAM adicional na extensão PWG Stuffs (se instalada) para informar, acerca da sua condição, os visitantes que não confirmaram a sua inscrição.
<br/><br/>
Para mais detalhes, consulte as <b>Dicas e exemplos de uso </b> na parte inferior desta página.';
$lang['UAM_adminconfmailTitle_d'] = 'Você pode desativar essa confirmação apenas para contas de utilizador criadas pelo administrador através da interface de gerenciamento de utilizadores do Piwigo.<br/><br/>
Ao ativar essa opção, e-mail de confirmação de inscrição será enviada para cada utilizador criado por admin.<br/><br/>
Ao desativar esta opção (padrão), apenas são enviadas as informações de e-mail  (se &quot;e-mail Informação ao utilizador&quot; estiver ativado). Além disso, por defeito, o utilizador criado será <b>considerado validado. </b> ';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Quando um administrador ou Webmaster da galeria confirmar manualmente um registo pendente, a notificação por email é enviada automaticamente ao utilizador. Insira aqui o assunto da sua validação por email própria.<br>
Por defeito, o campo tem um texto genérico em inglês, mas este pode ser mudado. Utilize as tags de tradução [lang =?] da plugin de descrição estendida, se o mesmo estiver instalado.
<br><br>
As seguintes tags adicionais de modificação estão disponíveis sem o plugin de Descrição Extendida.<br>
- <b style=&quot;color: red;&quot;>[username]</b> para automaticamente inserir o nome do utilizador destinatário do email. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pata inserir o titulo da sua galeria.<br>';
$lang['UAM_AdminValidationMail_d'] = 'Quando um administrador ou Webmaster da galeria confirmar manualmente um registo pendente, um e-mail notificação é enviado automaticamente para o utilizador. Digite aqui o texto que aparece neste email.
<br/><br/>
Personalizar ainda mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automáticamente inserir o nome do destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> Para inserir o título da sua galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> Para inserir a URL se definido nas opções de configuração PIWIGO.
<br/><br/>
Para usar vários idiomas, pode usar as etiquetas da descrição alargada da extensão se ativa.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Digite aqui o assunto personalizado do e-mail de confirmação de registo.<br/>
Por defeito, o campo tem um texto genérico em Inglês, mas pode alterá-lo e usar as etiquetas de tradução [lang=?] da extensão de descrição Alargada instalada.
<br/><br/>
As etiquetas personalizadas e adicionais, estão disponíveis sem o uso da extensão de Descrição alargada:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> Para autométicamente inserir o nome do utilizador de destino do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> Para inserir o título da galeria.<br/>';
$lang['UAM_confirmtxtTitle_d'] = 'Digite o texto introdutório que deseja apareça no e-mail de confirmação da inscrição.
<br/><br/>
Personalize mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automáticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL se nas opções de configuração Piwigo.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> Para inserir o número de dias limite para confirmação da inscrição (&quot;limite da data limite para confirmação do registo;&quot; deve ser ativada).
<br/><br/>
Para usar vários idiomas, você pode usar as etiquetas da extensão descrição alargada se ativa.';
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
$lang['UAM_RejectConnexion_d'] = 'Se ativado, os novos utilizadores registrados que não confirmar sua inscrição não poderão ligar-se à galeria. Serão redirecionados para uma página especial onde serão informados deste seu estado.<br/>
<b style="color: red;"> Aviso - Este recurso funciona apenas em conjunto com confirmação de grupos! Veja abaixo para definir os grupos como requerido.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personalize aqui a sua explanação para informar os utilizadores não confirmados de que eles não autorizados a ligar-se à galeria enquanto não confirmarem a sua inscrição.
<br/><br/>
Este campo é compatível com o editor FCK e, para multi-idiomas, você pode usar a etiqueta [lang] se a extensão Descrição Alargada estiver ativa.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>AVISO : A utilização de grupos na confirmação requer que tenha criado pelo menos um grupo de utilizadores e que este esteja definido como grupo &quot;por defeito&quot; na gestão de grupos de utilizadores do Piwigo.</b><br/><br/>
os grupos são validados para utilização conjunta com a &quot;Confirmação de registo&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>AVISO : A utilização de estatutos na confirmação requer que tenha mantido o estatuto &quot;Guest (Visitante)&quot; como o estatuto por defeito (no modelo de utilizador) para os novos registos. Note que também pode definir outro tipo de utilizador como defeito. Por favor reveja a documentação do Piwigo para mais detalhes.</b><br/><br/>
Os estatutos são validados para utilização conjunta com a &quot;Confirmação de registo&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>AVISO : A utilização do nível de privacidade requere que já o tenha utilizado com as suas imagens. Por favor reveja a documentação do Piwigo para mais detalhes.</b><br/><br/>
O nível de privacidade é validado para utilização conjunta com a &quot;Confirmação de registo&quot;';
$lang['UAM_validationlimitTitle_d'] = 'Esta opção permite limitar a validade da chave  confirmação enviada por e-mail para novos inscritos. Os visitantes que se inscreverem terão x dias para confirmar sua inscrição. Após este período, o link de confirmação expirará.
<br/><br/>
Esta opção é utilizada em conjunto com a &quot;Confirmação de registo&quot;
<br/><br/>
Se esta opção e a opção &quot;Lembrar utilizadores não confirmados&quot; estiverem ativadas, novas opções aparecerão em baixo, nesta seção, para permitir a automatização de gestão de utilizadores não confirmados.';
$lang['UAM_remailTitle_d'] = 'Esta opção permite-lhe enviar um e-mail lembrete aos utilizadores registados mas que ainda não confirmaram a sua inscrição em tempo normal. Por isso, age em conjunto com a  &quot;Confirmação de registo&quot;
<br/><br/>
Podem ser enviados dois tipos de emails: Com ou sem regeneração da chave de confirmação. Conforme o caso, o conteúdo dos e-mails pode ser personalizado.
<br/><br/>
Consulte a aba &quot;confirmações de rastreamento&quot;
<br/><br/>
Se esta opção e a opção &quot;Prazo para confirmação de inscrição limitado&quot; são ativados, novas opções aparecem abaixo desta secção para ativar a gestão automática de utilizadores não confirmados.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Digite aqui o assunto do email confirmação do registo personalizado(com ou sem nova geração de chave). <br/>
Por padrão, o campo tem um texto genérico em Inglês, mas pode alterá-lo e usar as etiquetas de tradução [lang =?] da descrição alargada da extensão se instalada.
<br/><br/>
As etiquetas que se seguem, para personalização adicional, estão disponíveis sem o uso da extensão Descrição alargada:<br/>
-. <b Style="color: red;"> [username] </b> para inserir automaticamente o nome do utilizador de destino do e-mail<br/>
-. <b Style="color: red;"> [mygallery] </b> para inserir o título da galeria<br/>';
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
$lang['UAM_USRAutoTitle_d'] = 'Manipulação automática de visitantes não confirmados é acionada cada vez que se ligar à galeria e funciona da seguinte forma:
<br/><br/>
- A exclusão automática de contas não confirmadas no tempo permitido sem o envio automático de e-mail lembrete -> &quot;Prazo para confirmação de inscrição limitado&quot; <b><u> habilitado </u></b> e &quot;Lembrar os utilizadores não confirmados" <b><u> desativado </u><br/><br/>
- Enviando automaticamente uma mensagem de lembrete com nova geração de chave de confirmação e exclusão automática de contas não confirmadas no praso após o envio do lembrete -> &quot;Prazo para confirmação de inscrição limitada &quot;<b><u> ativado </ u></b> e  &quot;Lembrar os usuários não confirmados &quot; <b><u> habilitado</u></b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'Isto só é válido quando o utilizador cuja conta expirou aciona o mecanismo de exclusão (raro, mas possível). ele é de seguida desligado da galeria e redirecionado para uma página que mostra a exclusão da sua conta e, possivelmente, as razões para essa exclusão.
<br/><br/>
Personalize mais o conteúdo com etiquetas especiais inseridas: <br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da sua galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL se definido nas opções de configuração do piwigo.<br/>
<b style=&quot;color: red;&quot;>[username]</b> não existe aqui pois o utilizador em questão foi apagado.
<br/><br/>
Texto personalizado para a página de redirecionamento pode ser inserido neste campo que é compatível com o editor FCK e, para multi-idiomas, você pode usar as etiquetas [lang] da Extensão Descrição alargada seestiver ativa.';
$lang['UAM_USRAutoMailTitle_d'] = 'Quando ativada, esta função enviará automaticamente conteúdo personalizado no &quot;Email lembrete com uma nova chave gerada&quot; aos visitantes que correspondem aos critérios.';
?>