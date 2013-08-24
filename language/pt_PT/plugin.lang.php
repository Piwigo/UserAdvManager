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
$lang['UAM_LastVisit_Date'] = 'Última visita';
$lang['UAM_Manual_Validation'] = 'Confirmação manual';
$lang['UAM_reg_err_login5'] = 'O seu provedor de e-mail está banido para inscrição. Os provedores de email banidos são:';
$lang['UAM_reg_err_login2'] = 'Nome de utilizador não tem que coincidir com os seguintes caracteres:';
$lang['UAM_reg_err_login3'] = 'Segurança: A senha é obrigatória';
$lang['UAM_save_config'] = 'Configuração salva';
$lang['UAM_submit'] = 'Submeter definições';
$lang['personal_content'] = 'Conteúdo';
$lang['UAM_Save'] = 'Executar o backup';
$lang['UAM_ScoreTest'] = 'Resultado:';
$lang['UAM_Stuffs_Title'] = 'Bloco UAM';
$lang['UAM_SubTitle1'] = 'Configuração da extensão';
$lang['UAM_Tab_Global'] = 'Configuração';
$lang['UAM_Title5'] = 'Opções diversas';
$lang['UAM_Restore'] = 'Para restaurar o arquivo de backup da sua configuração. Apenas o arquivo salvo no servidor é tido em conta.
<br><br>
<b style="color:red;"> Lembre-se da versão de backup!<br>Um backup feito com determinada versão de extenção só pode ser  restaurado com a mesma versão da extensão utilizada. </ b>';
$lang['UAM_Tips1_txt'] = '
<ul>
<li>
Objetivos: Informar o visitante que o registo está aguardando a aprovação mostrando um bloco personalizado na página inicial da galeria. Isto não é aprovação do registo.
            <br><br>
            <b> Lembre-se:. Na operação padrão, o "convidado" vê apenas as categorias públicas, sem mensagem de informação</b>
            </Li><br><br>
            <li>
Pré-requisito:<br>
- Uma galeria com todas ou algumas categorias privadas, visível somente a utilizadores registados <br>
- Pelo menos dois seguintes grupos de utilizadores Piwigo: "Em espera", sem permissão nas categorias privadas, e "Confirmado", com todas as permissões nas categorias privadas<br>
- Extensão UAM<br>
- Extensão PWG Stuffs, para adicionar um módulo especial UAM<br>
- Opcionalmente, a extensão Descrição Alargada para suporte multi-idiomas<br>
            </li><br><br>
            <li>
Estágios:<br><br>
A. na extensão UAM:
              <ol>
                <li> Habilitar o registro de confirmação </li>
                <li> Ativar PWG Stuffs módulo opcional </li>
                <li> Digitar o texto para explicação adicional que será anexada ao e-mail confirmação de inscrição . Se a extensão de Descrição Alargada está ativada, as tags de iioma podem ser usadas </li>
                <li> Selecione o grupo "Em espera" em "Para os utilizadores que não tenham confirmado a sua inscrição" </li>
                <li> Selecione o grupo "Confirmado" em "Para os utilizadores que já confirmaram a sua inscrição" </li>
                <li> Salve a configuração da extensão </li>
              </ol>

<br>
B. Na extensão PWG Stuffs:
              <ol>
                <li> Vá à aba "Adicionar um novo módulo" </li>
                <li> Escolha "Módulo UAM"</li>
                <li> Configure o módulo, indicando o título (por exemplo, "confirmação pendente de Registro") e sua descrição, e apenas sinalizar "Em espera" na lista de grupos permitidos </li>
                <li> Completar o conteúdo do módulo com as informações da mensagem a ser exibida aos utilizadores não confirmados. Como UAM, idiomas de marcação podem ser usados se a extensão Descrição alargada estiver ativada</li>
                <li> Sinalize "Mostrar o módulo na página inicial deste site"</li>
                <li>Validar a configuração do módulo</li>
                </ol>
            </li>
          </ul>




';
$lang['UAM_Error_GTAutoMail_cannot_be_set_without_ConfirmMail'] = 'Erro de consistência na configuração escolhida:
<br><br>
"Definir o monitoramento dos utilizadores registados e outras opções> Gestão visitantes fantasma (detetor de fantasmas)> gestão automática de utilizadores fantasma> que automaticamente enviam um e-mail quando mudam de grupo/status" não pode ser ativada se em "Definir as confirmações de inscrição> Confirmação de registo - Confirmação pelo utilizador "não estiver ativada primeiramente.
<br><br>
Para garantir a coerência, a opção "enviar automaticamente um e-mail quando mudar de grupo/status" foi automaticamente reposicionada em "desativada".
<br>';
$lang['UAM_mail_exclusion_error'] = 'A opção do Piwigo "O endereço de email é obrigatório para todos os utilizadores", foi desativada enquanto que a extensão "Exclusão de domínios de correio" do UserAdvancedManager (UAM) se mantém ativa. Esta combinação é ilógica e não é compatível! <br>
Por favor, reative a opção Piwigo "O endereço de e-mail é obrigatório para todos os utilizadores" para poder, em seguida, desativar a opção "Exclusão de domínios de correio" da UAM se é isso que você quer. <br>
Nota:. Esta mensagem desaparecerá depois de ter feito a respetiva correção e refrescar a página de administração <br>';
$lang['UAM_reg_err_login4_%s'] = 'Segurança: Um sistema de controle calcula uma pontuação na complexidade das senhas escolhidas. A complexidade da sua senha é muito baixa (escore =%s). Por favor, escolha uma nova senha mais segura, seguindo as seguintes regras:<br>
- Use letras e números<br>
- Use maiúsculas e minúsculas<br>
- Aumentar (número de caracteres) <br>
A pontuação mínima exigida pelo administrador é de:';
$lang['UAM_Disable'] = 'Desativar (padrão)';
$lang['UAM_Enable'] = 'Ativar';
$lang['UAM_Default_ConfirmMail_Txt'] = 'Olá  [username]!  Obrigado por se registar na [mygallery].

Para concluir o processo e poder navegar através das imagens, agradecemos que, por favor, confirme a sua inscrição clicando no link desta mensagem.';
$lang['UAM_Default_GhstDeletion_Txt'] = 'Desculpe [username], sua conta foi eliminada devido a  um longo período decorrido desde a sua última visita à [mygallery]. Por favor, registe-se novamente.';
$lang['UAM_Default_GhstDemotion_Txt'] = 'Desculpe [username], sua conta foi suspensa devido a um longo período decorrido desde a sua última visita à [mygallery]. Por favor, use o seguinte link para reativar a sua conta:';
$lang['UAM_Default_GhstReminder_Txt'] = 'Olá  [username].

Este é apenas recordar-lhe que já decorreu um período longo desde a sua última visita à nossa galeria [mygallery]. Se não deseja usar mais a sua conta de acesso, por favor, informe-nos respondendo a este e-mail. Sua conta será eliminada.

Após receber esta mensagem sem que efetue nova visita nonos próximos [days] dias, seremos forçados a eliminar automaticamente a sua conta.

Atenciosamente,

O administrador da galeria [mygallery] - [MyURL]';
$lang['UAM_Default_InfoMail_Subject'] = '[username] - Informação do seu registo na[mygallery]';
$lang['UAM_Default_ValidationTimeout_Txt'] = 'Desculpe! A sua conta foi eliminada por não ter confirmado a sua inscrição no prazo solicitado ([Kdays] dias). Por favor, tente novamente o registo com uma conta de e-mail válido e não bloqueado.';
$lang['UAM_Delete_selected'] = 'Apagar';
$lang['UAM_Default_CfmMail_Remail_Txt2'] = 'Olá [username].
Esta é uma mensagem de lembrança, porque se registou na nossa galeria [mygallery], mas não confirmou o registo e a chave de confirmação irá expirar. Para lhe permitir acessar a nossa galeria, tem x dias para confirmar sua inscrição clicando no link na mensagem  que deverá ter recebido quando se registou.

Nota: Após este período, a sua conta será excluída definitivamente.';
$lang['UAM_ConfirmMail_TimeOut_true'] = 'Ativar. Número de dias até expirar:';
$lang['UAM_Confirm_Group'] = 'Grupos<br>(deixar------- para não afetar o grupo)';
$lang['UAM_Confirm_Level'] = 'Nível de privacidade<br>(deixar------- para manter o padrão do Piwigo)';
$lang['UAM_Confirm_Mail_local'] = 'Ativar - Confirmação pela admin';
$lang['UAM_Confirm_Mail_true'] = 'Ativar - Confirmação pelo utilizador';
$lang['UAM_Confirm_Status'] = 'Estatutos<br>(deixar------- para manter o padrão do Piwigo)';
$lang['UAM_Confirm_grpstat_notice'] = 'Atenção: É aconselhável usar  ou o grupo ou a confirmação do status e não os dois simultaneamente. O nível de privacidade pode ser utilizado em conjunto com um grupo ou status atribuido.';
$lang['UAM_Default user cannot be pwgreset'] = 'Renovação de senha pode ser definida por defeito para conta de utilizador';
$lang['UAM_Default_AdminValidationMail_Subject'] = '[username]- Registo validado na [mygallery]';
$lang['UAM_Default_AdminValidation_Txt'] = 'Olá [username]! Obrigado pelo seu registo e benvindo(a)à [mygallery].
Sua conta foi confirmada manualmente pelo webmaster da [mygallery]. Agora você pode entrar em [MyURL] e fazer as alterações necessárias ao seu perfile.';
$lang['UAM_Default_CfmMail_Custom_Txt1'] = 'Conta [username] validada com sucesso!';
$lang['UAM_Default_CfmMail_Custom_Txt2'] = 'Chave de ativação incorreta / expirada ou a conta já foi validada.';
$lang['UAM_Default_CfmMail_Remail_Txt1'] = 'Olá [username].
Esta é uma mensagem de lembrança, porque se registou na nossa galeria [mygallery], mas não confirmou o registo e a chave de confirmação já expirou. Ainda lhe é permitido acessar a nossa galeria pois o período de confirmação foi redefinido. Assim, tem novamente x dias para confirmar a sua inscrição.';
$lang['UAM_Confirm_Mail'] = 'Confirmação de registo';
$lang['UAM_ConfirmMail_Text'] = 'Personalização do email confirmação';
$lang['UAM_CustomPasswRetr'] = 'Personalizar email de senha perdida';
$lang['UAM_Customize_messagesandmails'] = 'Personalizar mensagens e mails';
$lang['UAM_AdminValidationMail_Text'] = 'Notificação de confirmação manual de registo';
$lang['UAM_Admins cannot be pwdreset'] = 'Renovação da senha não pode ser definida para conta de administrador';
$lang['UAM_AdminValidationMail_Subject'] = 'Personalizar validação manual do assunto do email';
$lang['UAM_AdminConfMail'] = 'Confiemação de registo para administradores';
$lang['UAM %d user pwdreseted'] = 'Renovação de senha requerida para %d um utilizador';
$lang['UAM %d users pwdreseted'] = 'Renovação de senha requerida para %d utilizadores';
$lang['UAM_%d_Mail_With_Key'] = 'Foi enviada %d mensagem com chave renovada';
$lang['UAM_%d_Mails_With_Key'] = 'Foram enviadas %d mensagens com chave renovada';
$lang['UAM_%d_Reminder_Sent'] = 'Foi enviada %d mensagem a relembrar';
$lang['UAM_%d_Reminders_Sent'] = 'Foram enviadas %d mensagens a relembrar';
$lang['UAM_%d_Validated_User'] = '%d Utilizadoe confirmado manualmente';
$lang['UAM_%d_Validated_Users'] = ' %d Utilizadores confirmados manualmente';
$lang['UAM_Add of %s'] = 'Perfile criado para  %s';
$lang['UAM_AdminPassword_Enforced'] = 'Aplicar aos administradores';
$lang['UAM_ConfirmMail_Remail'] = 'Lembrar utilizadores não confirmados';
$lang['UAM_Title1'] = 'Restrições de registo';
$lang['UAM_Title2'] = 'Confirmação de registo';
$lang['UAM_Validation of %s'] = 'Confirmação de  %s';
$lang['UAM_User: %s'] = 'Utilizador: %s';
$lang['UAM_Username_Char_false'] = 'Permitir tudo (padrão)';
$lang['UAM_Password: %s'] = 'Senha:%s';
$lang['UAM_PasswordTest'] = 'Senha teste:';
$lang['UAM_PwdReset'] = 'Renovação de senha';
$lang['UAM_PwdReset_Done'] = 'Senha renovada';
$lang['UAM_PwdReset_NA'] = 'Senha original';
$lang['UAM_PwdReset_Todo'] = 'Senha a ser renovada';
$lang['UAM_Registration_Date'] = 'Data de registo';
$lang['UAM_Reminder_Sent_NOK'] = 'NÃO';
$lang['UAM_Reminder_Sent_OK'] = 'SIM';
$lang['UAM_Nb_Days'] = 'Diferença em dias';
$lang['UAM_NewFeature'] = 'Nova feitura!';
$lang['UAM_GTAutoDel'] = 'Apagar contas automaticamente';
$lang['UAM_AddURL2Mail'] = 'Adicione a URL da galeria no final dos e-mails (como uma assinatura)';
$lang['UAM_Bad_version_backup'] = 'A versão do arquivo de backup não corresponde à versão da extensão! A recuperação não foi realizada.';
$lang['UAM_Change'] = 'Altere o grupo / Status / Nível de Privacidade  dos utilizadores que foram confirmados';
$lang['UAM_ConfirmMail_ReMail_Subject'] = 'Personalizar o assunto do mail confirmação de registo ';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Personalizando a mensagem de lembrete <b><u>com</u></b> nova regeneração de chave de confirmação.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Personalizando a mensagem de lembrete <b><u>sem</u></b> regeneração de chave de confirmação.';
$lang['UAM_ConfirmMail_Subject'] = 'Personalizar o assunto do e-mail  confirmação de registo';
$lang['UAM_Default_ConfirmMail_Remail_Subject'] = 'Lembrete - [username] confirmação de registo na [mygallery]';
$lang['UAM_Default_ConfirmMail_Subject'] = '[username] confirmação de registo na [mygallery]';
$lang['UAM_Default_GTAutoMail_Subject'] = '[username] - Sua conta foi rebaixada na [mygallery]';
$lang['UAM_Default_InfoMail_Txt'] = 'Olá [username]!

Fez alterações significativas no seu perfile na galeria [mygallery]. Por favor, verifique abaixo as novas configurações:';
$lang['UAM_Default_PwdRequest_Txt'] = 'Pediu uma redefinição de senha na nossa galeria. Por favor, Veja abaixo as novas configurações de ligação.';
$lang['UAM_Default_RejectConnexion_Txt'] = 'Desculpe, o seu registo não é válido, assim não poderá ligar-se à galeria agora';
$lang['UAM_Demotion of %s'] = 'Rebaixamento de %s';
$lang['UAM_DumpTxt'] = 'Backup e restaurar a sua configuração';
$lang['UAM_No_Casse'] = 'Utilizadores: Letra maiúscula e minúscula';
$lang['UAM_GhostTracker_Title'] = 'gerênciar visitantes fantasma';
$lang['UAM_GhostTracker_true'] = 'Ativar. Período máximo de dias entre duas visitas';
$lang['UAM_MailExclusion'] = 'Domínios de Email excluídos';
$lang['UAM_MailInfo_Subject'] = 'Personalizção do assunto do email';
$lang['UAM_MailInfo_Text'] = 'Personalizção do email informação:';
$lang['UAM_Mail_with_key'] = 'Relembrar com chave';
$lang['UAM_GTAutomail_Subject'] = 'Personalizar automaticamente o assunto do Email do Detetor de  fantasmas';
$lang['UAM_GTReminder_Subject'] = 'Personalizar manualmente o assunto do Email do Detetor de  fantasmas';
$lang['UAM_GT_Init'] = 'Inicializar o Detetor de Fantasmas';
$lang['UAM_GT_Reset'] = 'Reset Detetor de fantasmas';
$lang['UAM_GhostTracker'] = 'Gerênciar Visitantes fantasmas (Detetor de fantasmas)';
$lang['UAM_GhostTracker_Init'] = 'Se ativou este recurso pela primeira vez ou se o tiver reativado depois de um longo período, durante o qual novos visitantes se registaram, você deve inicializar ou reiniciar o Detetor de fantasmas. Essa ação deve ser feita somente após a ativação ou reativação da opção. Por favor, clique <u>uma vez</u> o botão  reset abaixo.';
$lang['UAM_GhostTracker_Init_OK'] = 'Reset de Detetor de fantasmas executado';
$lang['UAM_GhostTracker_ReminderText'] = 'Personalizar mensagem informadora do Detetor de fantasmas';
$lang['UAM_SubTitle4'] = 'Detetor de fantasmas';
$lang['UAM_Tab_GhostTracker'] = 'Detetor de fantasmas';
$lang['UAM_Err_audit_advise'] = '<b> Tem que executar correções para cumprir com as novas regras que ativou. .<br>Use um utilitário de gerenciamento do banco de dados para corrigir contas de utilizador diretamente na tabela ### _USERS';
$lang['UAM_Err_audit_email_forbidden'] = '<b>Esta conta usa um provedor de e-mail não permitido:</b>';
$lang['UAM_Err_audit_username_char'] = '<b>Esta conta usa um ou mais caracteres não permitidos:</b>';
$lang['UAM_Error_Using_illegal_Kdays'] = 'Uso de etiqueta [Kdays] só é permitido se a limitação do prazo para inscrição está ativo. Consulte o campo de texto a vermelho para corrigir o problema.';
$lang['UAM_Error_Using_illegal_flag'] = 'Erro de sintaxe! A bandeira [Kdays] de texto automático é usado como o "Prazo de confirmação de registo limitado" opção não foi ativada. Por favor ativar esta opção ou corrigir os campos de texto (s) coloridos a vermelho.';
$lang['UAM_Expired_Group'] = '<b>Grupo</b> para registo de utilizadores expirou<br>';
$lang['UAM_Err_Userlist_Settings'] = 'Esta página está disponível apenas se "Monitoramento de utilizadores registados" está ativo em "Configurar inscrições e outras opções."';
$lang['UAM_Err_UserManager_Settings'] = 'Esta página está disponível apenas se "Confirmação de inscrição" está ativa e se um grupo de visitantes não confirmados estiver configurado em "Configurar as confirmações de inscrição".';
$lang['UAM_Default_GTReminder_Subject'] = 'username] - Longo tempo decorreu desde a sua última visita à [mygallery]
';
$lang['UAM_Dump_Download'] = '
Para descarregar o arquivo de backup, por favor assinale esta caixa';
$lang['UAM_Dump_NOK'] = 'Erro: Impossível criar o arquivo backup';
$lang['UAM_Dump_OK'] = 'Arquivo backup, criado com sucesso';
$lang['UAM_Err_GhostTracker_Settings'] = 'Esta página está disponível apenas se "Ghost Rastreador" está activo em "Configurar inscrições e outras opções."';
$lang['UAM_Title_Tab'] = 'UserAdvManager - Versão: ';
$lang['UAM_mail_exclusionlist_error'] = 'Atenção! Você adicionou uma nova linha (CR-LF) no início da lista do e-mail exclusão (mostrado abaixo a vermelho). Embora esta nova linha não seja visível, ela existe e pode causar mau funcionamento da extensão. Por favor, re-digite na sua lista de exclusão de forma a não começar com uma nova linha.';
$lang['UAM_USRAutoMail'] = 'Email lembrete automático';
$lang['UAM_confirmmail_custom_Txt2'] = 'Texto da página confirmação - Confirmação rejeitada';
$lang['UAM_empty_pwd'] = '[empty password]';
$lang['UAM_audit'] = 'Definições de auditoria';
$lang['UAM_audit_ok'] = 'Auditoria OK';
$lang['UAM_confirmmail_custom_Txt1'] = 'Texto da página confirmação - Confirmação aceite';
$lang['UAM_Tracking registered users'] = 'Rastrear utilizadores registados';
$lang['UAM_Update of %s'] = 'Perfil de %s atualizado';
$lang['UAM_Username_Char'] = 'Nome de Utilizadores: Caratéres excluidos';
$lang['UAM_Valid_Level'] = 'Nivel de privacidade para utilizadores que confirmaram o seu registo<br>';
$lang['UAM_Validated_Status'] = 'Status para utilizadores que não confirmaram o seu registo<br>';
$lang['UAM_ValidationLimit_Info'] = 'Prazo para confirmação de registo limitado';
$lang['UAM_No_reminder_for_Webmaster'] = 'A conta "Webmaster" não recebe lembretes do Detetor de Fantasmas';
$lang['UAM_No_reminder_for_Guest'] = 'A conta de "Visitante" não recebe lembretes do Detetor de Fantasmas';
$lang['UAM_No_reminder_for_default_user'] = 'Conta padrão não recebe lembretes do Detetor de Fantasmas';
$lang['UAM_No_reminder_for_your_account'] = 'A sua conta pessoal de aAdmin não recebe lembretes do Detetor de Fantasmas';
$lang['UAM_No_Confirm_Group'] = 'Grupo de utilizadores que não confirmou o seu registo<br>';
$lang['UAM_No_Confirm_Status'] = 'Status dos utilizadores que não confirmaram o seu registo<br>';
$lang['UAM_No_Valid_Level'] = 'Nível de privacidade para utilizadores que não confirmaram o seu registo<br>';
$lang['UAM_Password_Enforced'] = 'Reforço do nível de senhas de segurança';
$lang['UAM_Stuffs'] = 'Bloco PWG Stuffs';
$lang['UAM_Title4'] = 'Tipos e exemplos de uso';
$lang['UAM_Tracking confirmations'] = 'Confirmações de rastreameneto';
$lang['UAM_Support_txt'] = 'O apoio oficial sobre esta extensão é apenas apenas existe neste tópico do fórum Piwigo: <br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;"> Forum em Inglês - http://piwigo.org/forum/viewtopic.php?id=15015</a><br>
Também disponível,projeto bugtracker: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
$lang['UAM_Tips2_txt'] = '            <ul>
            <li>
            Objetivos: Informar o visitante que o registo está aguardando a confirmação por colocação de uma página adicional  substituindo a página padrão inicial da galeria  em cada uma das ligações, e isto, porque  o registo não foi aprovado.
            <br><br>
            Vantagens sobre o método com PWG_Stuffs: Permitir informações de formatação e exibir imediatamente após o registo de visitantes.
            </li><br><br>
            <li>
Pré-requisito:<br>
- Uma galeria com todas ou algumas categorias privadas, é visível apenas por utilizadores registados <br>
- Pelo menos os dois seguintes grupos de utilizadores Piwigo: "Em espera", sem permissão nas categorias privadas, e "Confirmado", com todas as permissões nas categorias privadas<br>
- Extenção UAM<br>
- Extensão para Páginas adicionais para adicionar e gerenciar uma página adicional para substituir a página inicial da galeria<br>
 - Opcionalmente, a extensão de Descrição Alargada para suporte de multi-idiomas<br>
            </li><br><br>
            <li>
Estágios:<br>
A. Na extenção UAM:
              <ol>
                <li>Habilitar o registro de confirmação </ li>
                <li>Digite o texto para explicação adicional que será anexado no mail confirmação de inscrição. Se a extensão de Descrição Alargada estiver ativado, as etiquetas do idioma podem ser usadam</li>
                <li>Selecione o grupo "Em Espera" em "Para os utilizadores que não tenham confirmado a sua inscrição"</li>
                <li> Selecione o grupo "Confirmado" em "Para os utilizadores que já confirmaram a sua inscrição"</li>
                <li>Salve a configuração da extensão</li>
              </ol>
<br>
B. Nas páginas adicionais da extensão:<br>
                <b> NOTA: A gestão de direitos de acesso para grupos em páginas adicionais deve estar ativada (consulte as configurações da extensão) </b>.
                <br>
              <ol>
                <li> Adicione uma nova página com, pelo menos, os seguintes parâmetros:</li>
                <ul>
                  <li>Nome da página: O nome que você deseja dar à página adicional (ou seja: Registo não confirmado)</li>
                  <li> Definir como página inicial (sinaliza a caixa)</li>
                  <li> Grupos  permitidos: Marque a caixa correspondente ao grupo "Em espera" configurado no UAM</li>
                  <li> Conteúdo:. O texto que você deseja usar para visitantes </li>
                </ul>
                <br>
                <li> E é isto! Somente os visitantes inscritos e cuja inscrição não tenha sido confirmada verá esta página inicial  adicional.</li>
              </ol>
            </li>
          </ul>';
$lang['UAM_Title3'] = 'Gerênciar utilizadores fantasma';
$lang['UAM_Password_Enforced_true'] = 'Ativar: Pontuação mínima';
$lang['UAM_RedirToProfile'] = 'Redirecionar para página personalizada';
$lang['UAM_RejectConnexion_Custom_Txt'] = 'personalizar texto rejeição';
$lang['UAM_Restore_File'] = 'Restaurar configuração';
$lang['UAM_No_validation_for_Webmaster'] = 'A conta "Webmaster" não está sujeita a confirmação';
$lang['UAM_No_validation_for_default_user'] = 'Conta padrão não está sujeita a confirmação';
$lang['UAM_No_validation_for_your_account'] = 'A sua conta pessoal de admin não está sujeita a confirmação';
$lang['UAM_Password reset selected users'] = 'Solicitar renovação de senha aos seguintes utilizadores';
$lang['UAM_Reminder_without_key_of_%s'] = '%s,a sua chave de confirmação vai expirar';
$lang['UAM_Password_Reset_Msg'] = 'Por favor altere a sua semha';
$lang['UAM_Reminder'] = 'Email lembrete';
$lang['UAM_Reminder_with_key_of_%s'] = '%s,A sua chave de confirmação foi renovada';
$lang['UAM_Expired_Level'] = '<b>Nivel de privacidade</b> para utilizadores de registo expirado<br>';
$lang['UAM_Expired_Status'] = '<b>Status</b> para utilizadores com registo expirado<br>';
$lang['UAM_No_Ghosts'] = 'Não existem visitantes fantasma de momento';
$lang['UAM_No_Userlist'] = 'Não existem visitantes a listar de momento';
$lang['UAM_No_Usermanager'] = 'Não existem registos não confirmados de momento';
$lang['UAM_No_validation_for_Guest'] = 'A conta de "Visitante" não está sujeita a confirmação';
$lang['UAM_GTAuto'] = 'Gerência automática dos utilizadores fantasma';
$lang['UAM_GTAutoGp'] = 'Alteração automática do grupo/status/nível de privacidade';
$lang['UAM_GTAutoMail'] = 'Enviar automaticamente um e-mail quando alteração de grupo / status/nível de privacidade';
$lang['UAM_GTAutomail_Text'] = 'Personalizar texto do email';
$lang['UAM_Generic cannot be pwdreset'] = 'Renovação de senha não pode ser definida para contas genéricas';
$lang['UAM_Ghost_reminder_of_%s'] = '%s, este é um mail lembrete';
$lang['UAM_Guest cannot be pwdreset'] = 'Renovação de senha não pode ser definido para contas de visitantes!';
$lang['UAM_HidePassw'] = 'Senha em texto explicito no mail informativo';
$lang['UAM_Link: %s'] = 'Por favor clique neste link para confirmar o registo:  %s';
$lang['UAM_MailExclusion_No'] = 'Domínios de Emails excluídos - Não disponível pois estes e-mails não são aceites para inscrição!';
$lang['UAM_MailExclusion_true'] = 'Excluir os seguintes domínios:<br>(Separar cada domínio por virgula)';
$lang['UAM_Mail_Info'] = 'Mail informação para o utilizador';
$lang['UAM_Mail_without_key'] = 'Lembrar sem chave';
$lang['UAM_MiscOptions'] = 'Outras operações diversas';
$lang['UAM_No_Backup_File'] = 'Não existe backup do arquivo';
?>