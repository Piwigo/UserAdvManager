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
"Definir o monitoramento dos utilizadores registados e outras opções> Gestão visitantes fantasma (ghost Tracker)> gestão automática de utilizadores fantasma> que automaticamente enviam um e-mail quando mudam de grupo/status" não pode ser ativada se em "Definir as confirmações de inscrição> Confirmação de registo - Confirmação pelo utilizador "não estiver ativada primeiramente.
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
?>