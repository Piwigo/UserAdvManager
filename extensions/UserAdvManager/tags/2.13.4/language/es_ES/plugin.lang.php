<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* UserManager Tab */
$lang['Registration_Date'] = 'Fecha de registro';


/* Mailing */
$lang['infos_mail %s'] = '%s, Aquí encontrará su información para entrar en la galería:';
$lang['User: %s'] = 'Usuario : %s';
$lang['Password: %s'] = 'Contraseña: %s';
$lang['Link: %s'] = 'Por favor, haga clic en este enlace para confirmar su registro: %s';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Validar su inscripción';
$lang['confirm_mail_page_title'] = 'Validar su inscripción';
$lang['confirm_mail_ok'] = '<br><br><br>Gracias a haber confirmado su dirección de correo electrónico y su registro en la galería. ¡Have fun!<br><br><br><br>';


/* Errors and Warnings */
$lang['UserAdvManager_audit_ok'] = 'Auditoría OK';
$lang['Err_audit_no_casse'] = '<b>Estas cuentas son idénticos para el caso de cerca:</b> ';
$lang['Err_audit_username_char'] = '<b>Esta cuenta se utiliza uno o más caracteres prohibidos:</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Esta cuenta se utiliza un proveedor de correo electrónico está prohibido:</b> ';
$lang['Err_audit_advise'] = '<b>Usted tiene que realizar correcciones para cumplir con nuevas normas que ha activado.<br>Use una herramienta de gestión de base de datos para corregir las cuentas de usuario directamente en la tabla ###_USERS';
$lang['UserAdvManager_Empty Author'] = 'El campo de autor tienen que ser llenados para enviar un comentario.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['reg_err_login5'] = 'Nombre de usuario ya existe, el nombre de ADVERTENCIA se distinguen las mayúsculas (Shift = pequeño).';
$lang['reg_err_login6'] = 'Nombre de usuario no tiene que coincidir con los siguientes caracteres: ';
$lang['reg_err_login7'] = 'Su proveedor de correo electrónico está prohibido para el registro. Proveedores de correo electrónico en veda son: ';
$lang['UserAdvManager_empty_pwd'] = '[contraseña vacía]';
$lang['UserAdvManager_no_update_pwd'] = '[Perfil actualizado sin cambiar contraseña]';
$lang['invalid_pwd'] = '¡Nombre de usuario o contraseña no válidos!';
$lang['No_validation_for_Guest'] = 'El "Invitado" cuenta no está sujeta a la validación';
$lang['No_validation_for_default_user'] = 'La cuenta predeterminada no está sujeta a la validación';
$lang['No_validation_for_Webmaster'] = 'El "webmaster" cuenta no está sujeta a la validación';
$lang['No_validation_for_your_account'] = 'Tu cuenta de administrador personnal no está sujeta a la validación';
$lang['Database_Error'] = '<b><u>¡Advertencia! Error de integridad críticas en su base de datos.</u></b><br><br>Por favor, compruebe la integridad de la tabla de #_user_confirm_mail.';


/* Processing messages */
$lang['%d_Mail_With_Key'] = '%d mensaje con la clave de la renovación fue enviado';
$lang['%d_Mails_With_Key'] = '%d Mensajes con la renovación de claves fueron enviados';
$lang['%d_Reminder_Sent'] = '%d mensaje recordatorio fue enviado';
$lang['%d_Reminders_Sent'] = '%d mensajes fueron enviados recordatorio';
$lang['%d_Validated_User'] = '%d usuario validado manualmente';
$lang['%d_Validated_Users'] = '%d usuarios validados manualmente';


/* Action button names */
$lang['Delete_selected'] = 'Suprimir';
$lang['Mail_without_key'] = 'Aviso sin clave';
$lang['Mail_with_key'] = 'Aviso con clave';
$lang['Force_Validation'] = 'Validación forzoso';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['PasswordTest'] = 'Cálculo de la puntuación';
/* Ghost Tracker Tab */
$lang['Tab_GhostTracker'] = 'Ghost Tracker';
$lang['LastVisit_Date'] = 'Última visita';
$lang['Reminder'] = 'Recordatorio por email';
$lang['Reminder_Sent_OK'] = 'SI';
$lang['Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UserAdvManager_save_config'] ='Configuración guardada.';
$lang['reg_err_login3'] = '¡Seguridad: Contraseña es obligatorio!';
$lang['reg_err_login4_%s'] = 'Seguridad: Un sistema de control calcula la puntuación de la complejidad elegido contraseñas. La complejidad de la contraseña es demasiado baja (puntuación = %s). Por favor, elija una nueva contraseña más segura siguiendo estas reglas:<br>
- Usar letras y números<br>
- Utilice minúsculas y mayúsculas<br>
- Aumentar su longitud (número de caracteres)<br>
Las contraseñas Puntuación mínima exigida por el administrador es el siguiente: ';
$lang['No_reminder_for_Guest'] = 'El "Invitado" cuenta no está sujeta a recibir recordatorios de Ghost Tracker';
$lang['No_reminder_for_default_user'] = 'La cuenta predeterminada no está sujeto a recibir recordatorios de Ghost Tracker';
$lang['No_reminder_for_Webmaster'] = 'El "webmaster" cuenta no está sujeta a recibir recordatorios de Ghost Tracker';
$lang['No_reminder_for_your_account'] = 'Usted cuenta de administrador personnal no está sujeto a recibir recordatorios de Ghost Tracker';
/* Action button names */
$lang['audit'] = 'Auditar la configuración';
$lang['submit'] = 'Guardar configuración';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['GhostTracker_Init_OK'] = '¡Ghost Tracker restablecer hecho!';
/* Action button names */
$lang['GT_Reset'] = 'Perdí Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.7
/* Errors and Warnings */
$lang['mail_text_error'] = '<b>¡Advertencia!</b> - Punto y coma (;) no están permitidos en el texto del mensaje addtionnal. Este carácter se han sustituido automáticamente por un punto (.). Para más información, el texto modificado(s) es(son) se muestra en rojo en el campo correspondiente(s). Por favor, compruebe que (ellos) hacia fuera.';
// --------- End: New or revised $lang ---- from version 2.12.7


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['mail_exclusionlist_error'] = '¡Advertencia! Ha introducido una nueva línea (CR-LF) al principio de la lista de exclusión de correo electrónico (en rojo abajo). Aunque esta nueva línea no es visible, todavía está presente y puede causar un mal funcionamiento del plugin. Por favor, vuelva a escribir en su lista de exclusión de una manera que no comienza con una nueva línea.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UserList_Title'] = 'Seguimiento los usuarios registrados';
$lang['Nb_Days'] = 'Número de días<br>desde la última visita';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
$lang['uam_no_unlink'] = '\'unlink\' function is not available';
$lang['uam_unlink_errors'] = 'Errors occurred when deleting files';
/* Global Configuration Tab */
$lang['Title_Tab'] = 'UserAdvManager - Versión: ';
$lang['SubTitle1'] = 'Configuración del plugin';
$lang['Tab_Global'] = 'Configuración';
$lang['UserAdvManager_Title1'] = 'Configuración de los restricciones para el registro';
$lang['UserAdvManager_Title2'] = 'Configuración de las confirmaciones y validaciones de registro';
$lang['UserAdvManager_Title3'] = 'Configuración de los registros seguido y otras opciones';
$lang['UserAdvManager_Title4'] = 'Consejos y ejemplos de uso';
$lang['UserAdvManager_No_Casse'] = 'Nombres de usuario: mayúsculas y minúsculas';
$lang['UserAdvManager_No_Casse_true'] = ' Activar';
$lang['UserAdvManager_No_Casse_false'] = ' Desactivar (por defecto)';
$lang['UserAdvManager_Username_Char'] = 'Nombres de usuario: Excluyendo los caracteres';
$lang['UserAdvManager_Username_Char_true'] = ' Prohibición de caracteres:<br>(Utilice una coma para separar cada caracteres)<br><br>';
$lang['UserAdvManager_Username_Char_false'] = ' Permiso de todos (por defecto)';
$lang['UserAdvManager_Password_Enforced'] = 'Fortalecimiento del nivel de seguridad de las contraseñas';
$lang['UserAdvManager_Password_Enforced_true'] = ' Activar. Puntuación mínima:';
$lang['UserAdvManager_Password_Enforced_false'] = ' Desactivar (por defecto)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Aplicando a los administradores';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = ' Activar';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = ' Desactivar (por defecto)';
$lang['UserAdvManager_PasswordTest'] = 'Prueba Contraseña: ';
$lang['UserAdvManager_ScoreTest'] = 'Resultado: ';
$lang['UserAdvManager_MailExclusion'] = 'Exclusión de dominios de correo electrónico';
$lang['UserAdvManager_MailExclusion_true'] = ' Excluir los siguientes dominios: <br>(Utilice una coma para separar cada dominio)';
$lang['UserAdvManager_MailExclusion_false'] = ' Desactivar (por defecto)';

$lang['UserAdvManager_Mail_Info'] = 'Información por correo electrónico para el usuario:';
$lang['UserAdvManager_Mail_Info_true'] = ' Activar';
$lang['UserAdvManager_Mail_Info_false'] = ' Desactivar (por defecto)';
$lang['UserAdvManager_MailInfo_Text'] = ' Personalización del correo electrónico de información:';
$lang['UserAdvManager_Confirm_Mail'] = 'Confirmación de registro:';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Activar';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Desactivar (por defecto)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Personalización del correo electrónico de confirmación:';
$lang['UserAdvManager_Confirm_grpstat_notice'] = 'Precaución: Es recomendable utilizar el grupo o los estatutos de validación y no ambos simultáneamente.';
$lang['UserAdvManager_Confirm_Group'] = 'Grupos de validación<br>(Dejar ------- para no afectar grupo)';
$lang['UserAdvManager_Confirm_Status'] = 'Estatutos de validación<br>(Dejar ------- para mantener el valor predeterminado de Piwigo)';
$lang['UserAdvManager_No_Confirm_Group'] = 'Grupo para los usuarios que no han validado su registro<br>';
$lang['UserAdvManager_Validated_Group'] = 'Grupo para los usuarios que han validado su registro<br>';
$lang['UserAdvManager_No_Confirm_Status'] = 'Situación de los usuarios que no han validado su registro<br>';
$lang['UserAdvManager_Validated_Status'] = 'Situación de los usuarios que han validado su registro<br>';
$lang['UserAdvManager_ValidationLimit_Info'] = 'Plazo para la validación de registro limitado';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = ' Activar. Número de días hasta el vencimiento: ';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = ' Desactivar (por defecto)';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Recuerde a los usuarios no validados';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = ' Activar';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = ' Desactivar (por defecto)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Personalización del mensaje recordatorio <b><u>con</u></b> la regeneración de nuevo la validación de claves.';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Personalización del mensaje recordatorio <b><u>sin</u></b> la regeneración de la validación de claves.';

$lang['UserAdvManager_GhostTracker'] = 'Gestión de Espíritu visitantes (Tracker Ghost)';
$lang['UserAdvManager_GhostTracker_true'] = ' Activar. Período máximo de días entre dos visitas: ';
$lang['UserAdvManager_GhostTracker_false'] = ' Desactivar (por defecto)';
$lang['UserAdvManager_GhostTracker_ReminderText'] = 'Personalización del mensaje recordatorio de Ghost Tracker';
$lang['UserAdvManager_LastVisit'] = ' Seguimiento de usuarios registrados';
$lang['UserAdvManager_LastVisit_true'] = ' Activar';
$lang['UserAdvManager_LastVisit_false'] = ' Desactivar (por defecto)';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Nickname obligatorio para los comentarios de los huéspedes';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' Activar';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Desactivar (por defecto)';

$lang['UserAdvManager_Tips1'] = 'Con la validación de los registros de correo electrónico y mensaje de advertencia en la página principal de Piwigo (ingles)';
$lang['UserAdvManager_Tips1_txt'] = '
          <ul>
            <li>
Ingredients needed:<br>
- 2 Piwigo\'s user groups at least: &quot;Waiting&quot; for visitors awaiting validation and &quot;Validated&quot; for visitors who have validated their registration<br>
- NBC_UAM plugin<br>
- PWG Stuffs plugin<br>
- Possibly Extended Description plugin (to support multi-lingual)
            </li>
<br><br>
            <li>
La recette :<br>
            <ul>
              <li>
Preamble: It\'s located in the case of a private gallery or semi-private (ie only a small part of categories is available by Guests and registered can see everything). We consider that the required plugins are installed (does it remind you?).<br><br>
              </li>
              <li>
Attribute group &quot;Waiting&quot; no permission on private categories<br><br>
              </li>
              <li>
Attribute group &quot;Validated&quot; all permissions on the private categories<br><br>
              </li>
              <li>
In NBC_UAM plugin:
              <ol>
                <li>Enable registration confirmation</li>
                <li>In the field below &quot;Customizing the confirmation email&quot;, enter text for additional explanation will be attached to email registration confirmation. Possibly, it is possible to use markup language implemented by the plugin Extended Description</li>
                <li>In the &quot;Group for users who have not validated their registration&quot;, select group &quot;Waiting&quot;</li>
                <li>In the &quot;Group for users who have validated their registration&quot;, select group &quot;Validated&quot;</li>
                <li>Save the plugin configuration</li>
              </ol>
              </li>
<br><br>
              <li>
In PWG Stuff plugin:
              <ol>
                <li>Add a new module personal block like an edito</li>
                <li>In the module\'s configuration, in addition to its title (eg &quot;Registration pending validation&quot;) and its description, check only the authorized group &quot;Waiting&quot;</li>
                <li>In the content module, enter the message text which sought information will be visible as invalid user. Again, ability to manage multi-language through Extended Description\'s tags</li>
                <li>Validate module</li>
                <li>Define its place on the main page of the gallery</li>
              </ol>
              </li>
            </ul>
            </li>
<br><br>
            <li>
              The result:<br>
              - A "Guest" arrives on the gallery, he sees nothing other than the public categories and no information message.<br>
              - He registers. This generates an email validation and automatic membership to the group &quot;Waiting&quot;.<br>
              - At the end, he\'s redirected to the gallery homepage and a message indicating the waiting of validate its registration<br><br>
              He received his email validation, following the link provided for that purpose in the mail, releases the group &quot;Waiting&quot; and takes place in the group &quot;Validated&quot;. By clicking the &quot;Home&quot;, then he\'s connected to the gallery with full access to private groups and without the information message.
            </li>
          </ul>';

$lang['Tab_UserManager'] = 'Seguimiento de las Validaciones';

/* UserManager Tab */
$lang['SubTitle3'] = 'Seguimiento de las Validaciones';
$lang['UserManager_Title'] = 'Seguimiento de las Validaciones';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Ghost Tracker';
$lang['GT_Init'] = 'Inicialización Ghost Tracker';
$lang['GhostTracker_Title'] = 'Gestión de los espíritu visitantes';
$lang['UserAdvManager_GhostTracker_Init'] = 'Si habilita esta función por primera vez o ha reactivado después de un largo período durante el cual los visitantes fuera de nuevo se ha registrado, usted debe inicializar o restablecer el Rastreador de Ghost. Esta acción se realiza sólo después de la activación o reactivación de la opción. Por favor, haga clic en <u>una vez</u> el botón de reset de abajo.';
/* UserList Tab */
$lang['SubTitle5'] = 'Seguimiento de los usuarios';
$lang['Tab_UserList'] = 'Seguimiento de los usuarios';
/* Mailing */
$lang['Add of %s'] = 'Perfil creado para %s';
$lang['Update of %s'] = '%s Perfil actualizado';
/* Email confirmation page */
$lang['confirm_mail_bad'] = '<br><br><br>Su clave de activación es incorrecta o está vencido o que ya ha validado su cuenta, por favor, póngase en contacto con el webmaster para solucionar este problema.<br><br><br><br>';
/* Mailing */
$lang['Ghost_reminder_of_%s'] = '%s, este es un recordatorio por correo electrónico';
$lang['Reminder_with_key_of_%s'] = '%s, su clave de validación se ha renovado';
$lang['Reminder_without_key_of_%s'] = '%s, su clave de validación expirará';
/* Errors and Warnings */
$lang['Err_UserManager_Settings'] = 'Esta página está disponible sólo si "Plazo para la validación de registro limitado" está activa y un grupo de usuarios no validados se encuentra en "Configuración de la confirmación y validación de registro".';
$lang['Err_GhostTracker_Settings'] = 'Esta página está disponible sólo si "Ghost Tracker" está activo en "Configuración de los registros seguido y otras opciones".';
$lang['Err_Userlist_Settings'] = 'Esta página está disponible sólo si "Seguimiento de los usuarios registrados" está activo en la "Configuración de los registros seguido y otras opciones".';
// --------- End: New or revised $lang ---- from version 2.13.4
?>