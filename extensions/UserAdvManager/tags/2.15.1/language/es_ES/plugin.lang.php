<?php

global $lang,$conf;

$conf_UAM = unserialize($conf['UserAdvManager']);


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
$lang['UAM_audit_ok'] = 'Auditoría OK';
$lang['Err_audit_no_casse'] = '<b>Estas cuentas son idénticos para el caso de cerca:</b> ';
$lang['Err_audit_username_char'] = '<b>Esta cuenta se utiliza uno o más caracteres prohibidos:</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Esta cuenta se utiliza un proveedor de correo electrónico está prohibido:</b> ';
$lang['Err_audit_advise'] = '<b>Usted tiene que realizar correcciones para cumplir con nuevas normas que ha activado.<br>Use una herramienta de gestión de base de datos para corregir las cuentas de usuario directamente en la tabla ###_USERS';
$lang['UAM_Empty Author'] = 'El campo de autor tienen que ser llenados para enviar un comentario.';
if ( isset($conf_UAM[1]) and $conf_UAM[1] == 'true' )
	$lang['reg_err_login5'] = 'Nombre de usuario ya existe, el nombre de ADVERTENCIA se distinguen las mayúsculas (Shift = pequeño).';
$lang['reg_err_login6'] = 'Nombre de usuario no tiene que coincidir con los siguientes caracteres: ';
$lang['reg_err_login7'] = 'Su proveedor de correo electrónico está prohibido para el registro. Proveedores de correo electrónico en veda son: ';
$lang['UAM_empty_pwd'] = '[contraseña vacía]';
$lang['UAM_no_update_pwd'] = '[Perfil actualizado sin cambiar contraseña]';
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
$lang['Reminder'] = 'Recordatorio por email';
$lang['Reminder_Sent_OK'] = 'SI';
$lang['Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Configuración guardada.';
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


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['mail_exclusionlist_error'] = '¡Advertencia! Ha introducido una nueva línea (CR-LF) al principio de la lista de exclusión de correo electrónico (en rojo abajo). Aunque esta nueva línea no es visible, todavía está presente y puede causar un mal funcionamiento del plugin. Por favor, vuelva a escribir en su lista de exclusión de una manera que no comienza con una nueva línea.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UserList_Title'] = 'Seguimiento los usuarios registrados';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
$lang['uam_no_unlink'] = '\'unlink\' function is not available';
$lang['uam_unlink_errors'] = 'Errors occurred when deleting files';
/* Global Configuration Tab */
$lang['Title_Tab'] = 'UserAdvManager - Versión: ';
$lang['SubTitle1'] = 'Configuración del plugin';
$lang['Tab_Global'] = 'Configuración';
$lang['UAM_Title1'] = 'Configuración de los restricciones para el registro';
$lang['UAM_Title2'] = 'Configuración de las confirmaciones y validaciones de registro';
$lang['UAM_Title3'] = 'Configuración de los registros seguido y otras opciones';
$lang['UAM_Title4'] = 'Consejos y ejemplos de uso';
$lang['UAM_No_Casse'] = 'Nombres de usuario: mayúsculas y minúsculas';
$lang['UAM_No_Casse_true'] = ' Activar';
$lang['UAM_No_Casse_false'] = ' Desactivar (por defecto)';
$lang['UAM_Username_Char'] = 'Nombres de usuario: Excluyendo los caracteres';
$lang['UAM_Username_Char_true'] = ' Prohibición de caracteres:<br>(Utilice una coma para separar cada caracteres)<br><br>';
$lang['UAM_Username_Char_false'] = ' Permiso de todos (por defecto)';
$lang['UAM_Password_Enforced'] = 'Fortalecimiento del nivel de seguridad de las contraseñas';
$lang['UAM_Password_Enforced_true'] = ' Activar. Puntuación mínima:';
$lang['UAM_Password_Enforced_false'] = ' Desactivar (por defecto)';
$lang['UAM_AdminPassword_Enforced'] = 'Aplicando a los administradores';
$lang['UAM_AdminPassword_Enforced_true'] = ' Activar';
$lang['UAM_AdminPassword_Enforced_false'] = ' Desactivar (por defecto)';
$lang['UAM_PasswordTest'] = 'Prueba Contraseña: ';
$lang['UAM_ScoreTest'] = 'Resultado: ';
$lang['UAM_MailExclusion'] = 'Exclusión de dominios de correo electrónico';
$lang['UAM_MailExclusion_true'] = ' Excluir los siguientes dominios: <br>(Utilice una coma para separar cada dominio)';
$lang['UAM_MailExclusion_false'] = ' Desactivar (por defecto)';

$lang['UAM_Mail_Info'] = 'Información por correo electrónico para el usuario:';
$lang['UAM_Mail_Info_true'] = ' Activar';
$lang['UAM_Mail_Info_false'] = ' Desactivar (por defecto)';
$lang['UAM_MailInfo_Text'] = ' Personalización del correo electrónico de información:';
$lang['UAM_Confirm_Mail'] = 'Confirmación de registro:';
$lang['UAM_Confirm_Mail_true'] = ' Activar';
$lang['UAM_Confirm_Mail_false'] = ' Desactivar (por defecto)';
$lang['UAM_ConfirmMail_Text'] = ' Personalización del correo electrónico de confirmación:';
$lang['UAM_Confirm_grpstat_notice'] = 'Precaución: Es recomendable utilizar el grupo o los estatutos de validación y no ambos simultáneamente.';
$lang['UAM_Confirm_Group'] = 'Grupos de validación<br>(Dejar ------- para no afectar grupo)';
$lang['UAM_Confirm_Status'] = 'Estatutos de validación<br>(Dejar ------- para mantener el valor predeterminado de Piwigo)';
$lang['UAM_No_Confirm_Group'] = 'Grupo para los usuarios que no han validado su registro<br>';
$lang['UAM_Validated_Group'] = 'Grupo para los usuarios que han validado su registro<br>';
$lang['UAM_No_Confirm_Status'] = 'Situación de los usuarios que no han validado su registro<br>';
$lang['UAM_Validated_Status'] = 'Situación de los usuarios que han validado su registro<br>';
$lang['UAM_ValidationLimit_Info'] = 'Plazo para la validación de registro limitado';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Activar. Número de días hasta el vencimiento: ';
$lang['UAM_ConfirmMail_TimeOut_false'] = ' Desactivar (por defecto)';
$lang['UAM_ConfirmMail_Remail'] = 'Recuerde a los usuarios no validados';
$lang['UAM_ConfirmMail_Remail_true'] = ' Activar';
$lang['UAM_ConfirmMail_Remail_false'] = ' Desactivar (por defecto)';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Personalización del mensaje recordatorio <b><u>con</u></b> la regeneración de nuevo la validación de claves.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Personalización del mensaje recordatorio <b><u>sin</u></b> la regeneración de la validación de claves.';

$lang['UAM_GhostTracker'] = 'Gestión de Espíritu visitantes (Tracker Ghost)';
$lang['UAM_GhostTracker_true'] = ' Activar. Período máximo de días entre dos visitas: ';
$lang['UAM_GhostTracker_false'] = ' Desactivar (por defecto)';
$lang['UAM_GhostTracker_ReminderText'] = 'Personalización del mensaje recordatorio de Ghost Tracker';
$lang['UAM_LastVisit'] = ' Seguimiento de usuarios registrados';
$lang['UAM_LastVisit_true'] = ' Activar';
$lang['UAM_LastVisit_false'] = ' Desactivar (por defecto)';
$lang['UAM_No_Comment_Anonymous'] = 'Nickname obligatorio para los comentarios de los huéspedes';
$lang['UAM_No_Comment_Anonymous_true'] = ' Activar';
$lang['UAM_No_Comment_Anonymous_false'] = ' Desactivar (por defecto)';

$lang['UAM_Tips1'] = 'Con la validación de los registros de correo electrónico y mensaje de advertencia en la página principal de Piwigo';

$lang['Tab_UserManager'] = 'Seguimiento de las Validaciones';

/* UserManager Tab */
$lang['SubTitle3'] = 'Seguimiento de las Validaciones';
$lang['UserManager_Title'] = 'Seguimiento de las Validaciones';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Ghost Tracker';
$lang['GT_Init'] = 'Inicialización Ghost Tracker';
$lang['GhostTracker_Title'] = 'Gestión de los espíritu visitantes';
$lang['UAM_GhostTracker_Init'] = 'Si habilita esta función por primera vez o ha reactivado después de un largo período durante el cual los visitantes fuera de nuevo se ha registrado, usted debe inicializar o restablecer el Rastreador de Ghost. Esta acción se realiza sólo después de la activación o reactivación de la opción. Por favor, haga clic en <u>una vez</u> el botón de reset de abajo.';
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
$lang['Err_GhostTracker_Settings'] = 'Esta página está disponible sólo si "Ghost Tracker" está activo en "Configuración de los registros seguido y otras opciones".';
$lang['Err_Userlist_Settings'] = 'Esta página está disponible sólo si "Seguimiento de los usuarios registrados" está activo en la "Configuración de los registros seguido y otras opciones".';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Confirmación de registro por los administradores';
$lang['UAM_Admin_ConfMail_true'] = ' Activar';
$lang['UAM_Admin_ConfMail_false'] = ' Desactivar (por defecto)';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Goles:<br>
            - A su llegada a la galería: Para informar al visitante de que tiene que registrarse para acceder a fotos privadas<br>
            - En el registro: Generar una validación de correo electrónico con enlace directo, informar al nuevo usuario de su falta de validación y de integrarlo al grupo "Espera"<br>
            - En la validación: cambiar automáticamente de grupo "Espera" al grupo "Validado", que proporciona acceso a categorías particulares<br><br>
            <b>Recuerde: En funcionamiento normal, el "Invitado" sólo ve las categorías de público, sin mensaje de información.</b>
            </li><br><br>
            <li>
Requisito previo:<br>
- Una galería con todas o algunas categorías privado, visible sólo por los usuarios registrados<br>
- Al menos 2 siguientes Piwigo grupos de usuarios: "Espera," sin permiso en las categorías de privados, y "Validado" con todos los permisos en las categorías de privados<br>
- UAM plugin<br>
- PWG Stuffs plugin, para agregar un tipo de módulo "Personal Block"<br>
- Opcionalmente, la Extended Description plugin para soportar múltiples idiomas<br>
            </li><br><br>
            <li>
Etapas:<br><br>
A. En plugin UAM:
              <ol>
                <li>Activar la confirmación de registro</li>
                <li>Introduzca el texto para la explicación adicional, que se adjunta al correo de confirmación de registro. Si se activa el plugin Extended Description, las etiquetas de idioma se puede utilizar</li>
                <li>Seleccione la opción "Espera" del grupo en "Para los usuarios que no han validado su registro"</li>
                <li>Seleccione la opción "Validado" en grupo "Para los usuarios que han validado su registro"</li>
                <li>Guardar la configuración de plug-in</li>
              </ol>
<br>
B. En plugin PWG Stuffs :
              <ol>
                <li>Añadir un tipo de módulo nuevo "bloque de Personal: Muestra una plantilla de bloque (por ejemplo, un editorial)"</li>
                <li>Configurar el módulo, lo que indica el título (por ejemplo, "en espera de la validación de Registro") y su descripción, y solamente "Espera" en la lista de grupos permitido</li>
                <li>El contenido completo del módulo con la información del mensaje que se mostrará a los usuarios no validados. Como UAM, lenguajes de marcas pueden ser utilizados si el plugin Extended Description está activado</li>
                <li>Active la casilla "Mostrar el módulo en la página principal del sitio"</li>
                <li>Validar la configuración del módulo</li>
              </ol>
            </li>
          </ul>';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Texto de la página de confirmación - Confirmación aceptada';
$lang['UAM_confirmmail_custom_Txt2'] = 'Texto de la página de confirmación - Confirmación rechazada';
$lang['LastVisit_Date'] = 'Su última visita';
$lang['Nb_Days'] = 'Diferencia en días';
$lang['Err_UserManager_Settings'] = 'Esta página está disponible sólo si "Confirmación de registro" está activo y si un grupo de visitantes no ha sido validada está configurado en "Configuración de las confirmaciones y validaciones de registro".';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['reg_err_mail_address_dbl'] = 'Esta dirección de correo electrónico ya se utiliza.';
$lang['UAM_Support_txt'] = 'El apoyo oficial sobre este plugin es sólo sobre estos tema en el foro de Piwigo:<br>
<a href="http://fr.piwigo.org/forum/viewtopic.php?id=12775" onclick="window.open(this.href);return false;">Foro Francés - http://fr.piwigo.org/forum/viewtopic.php?id=12775</a>
<br>o<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;">Foro Inglés - http://piwigo.org/forum/viewtopic.php?id=15015</a><br><br>
También está disponible, el bugtracker del proyecto: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1
?>