<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* Global Configuration Tab */
$lang['Title_Tab1'] = 'UserAdvManager - Configuración general';
$lang['Tab_Global'] = 'Configuración general';
$lang['UserAdvManager_Mail_Info'] = ' Información por correo electrónico para el usuario:';
$lang['UserAdvManager_Mail_Info_true'] = ' Enviar correo electrónico al usuario al hacerse cargo de su información de conexión al registrarse o actualizar su perfil.';
$lang['UserAdvManager_Mail_Info_false'] = ' Desactiva el envío de correo electrónico. (por defecto)';
$lang['UserAdvManager_MailInfo_Text'] = ' Texto utilizado para introducir el correo electrónico enviado al usuario que le permita validar su dirección de correo electrónico<br><b style="color: red;">(¡¡¡ </b><b style="text-decoration: underline; color: red;">¡ADVERTENCIA!</b> <b style="color: red;">La modificación de texto está disponible SOLO si está habilitada la información de los usuarios de correo. Utilice las etiquetas de múltiples idiomas de plugin Descripción extendido si se ha activado este plugin !!!)</b>';
$lang['UserAdvManager_No_Casse'] = ' Caso el nombre de usuario insensible';
$lang['UserAdvManager_No_Casse_true'] = ' Hacer el caso de cuenta de usuario e insensibles en el registro y el paso de identificación';
$lang['UserAdvManager_No_Casse_false'] = ' Que el caso confidencial del usuario. (por defecto)';
$lang['UserAdvManager_Username_Char'] = ' Carácter limitado previsto para nombre de usuario';
$lang['UserAdvManager_Username_Char_true'] = ' Los siguientes caracteres serán prohibidos para la elección del nombre de usuario';
$lang['UserAdvManager_Username_Char_false'] = ' Utilice el nombre de usuario por defecto fijado carácter de control. (por defecto)';
$lang['UserAdvManager_Confirm_Mail'] = 'Confirmación de correo electrónico:';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Enviar un correo electrónico al usuario que le permita validar su correo electrónico y su registro.';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Usar la Piwigo valor predeterminado de registro del sistema (sin validación de registro). (por defecto)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Texto utilizado para introducir el correo electrónico enviado al usuario que le permita validar su dirección de correo electrónico<br><b style="color: red;">(¡¡¡ </b><b style="text-decoration: underline; color: red;">¡ADVERTENCIA!</b> <b style="color: red;">La modificación de texto está disponible SOLO si está habilitada la confirmación de la dirección de correo electrónico. Utilice las etiquetas de múltiples idiomas de plugin Descripción extendido si se ha activado este plugin !!!)</b>';
$lang['UserAdvManager_Confirm_Group_Notice'] = 'ADVERTENCIA : Uso de grupos de validación requiere que se haya creado al menos un grupo de usuarios y se define "por defecto" en la gestión de Piwigo de grupos de usuarios.';
$lang['UserAdvManager_No_Confirm_Group'] = 'Grupo de usar para los usuarios que no han validado su dirección de correo electrónico.';
$lang['UserAdvManager_Validated_Group'] = 'Grupo de usar para los usuarios que han validado su dirección de correo electrónico.';
$lang['UserAdvManager_Confirm_Status_Notice'] = 'ADVERTENCIA : El uso de la validación de estado requiere que se haya mantenido el "Invitado" del usuario con la configuración predeterminada (como usuario de plantilla) para los nuevos registrados. Nota Puede establecer cualquier otro usuario como una plantilla para nuevos registrados. Por favor, consulte la documentación de la Piwigo para obtener más detalles.';
$lang['UserAdvManager_No_Confirm_Status'] = 'Situación de utilizar para los usuarios que no han validado su dirección de correo electrónico.';
$lang['UserAdvManager_Validated_Status'] = 'Situación de utilizar para los usuarios que han validado su dirección de correo electrónico. Vamos ------- para el uso de valores por defecto de Piwigo';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Alias son obligatorias para los comentarios';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' El campo de autor tienen que ser llenados para enviar un comentario.';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Utilice la configuración predeterminada Piwigo sobre los comentarios de envío. (por defecto)';
$lang['UserAdvManager_MailExclusion'] = 'La exclusión proveedor de correo electrónico:';
$lang['UserAdvManager_MailExclusion_true'] = ' Establezca el proveedor en la exclusión de correo electrónico (por ejemplo: @hotmail.* o @msn.*)';
$lang['UserAdvManager_MailExclusion_false'] = ' Desactive el correo electrónico OFF exclusión proveedor. (por defecto)';
$lang['UserAdvManager_MailExclusion_List'] = ' Si la exclusión proveedor de correo electrónico está ajustado a ON, complete los dominios de correo electrónico para excluir a continuación. Tienes que utilizar el siguiente formato: <br>@[Nombre de dominio].[extensión de dominio] - Ejemplo: @hotmail.com <br>Separa los distintos ámbitos, con una coma (,)<br>';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
$lang['UserAdvManager_Title1'] = 'Gestión de usuarios de registro';
$lang['UserAdvManager_Title2'] = 'Gestión de validación de registro y de los grupos / estados';
$lang['UserAdvManager_Password_Enforced'] = 'Fortalecimiento de contraseñas - Al habilitar esta opción hace que la toma de la contraseña necesaria para los visitantes de registro. Además, la contraseña introducida por el visitante se encontrará con una puntuación de complejidad (<b style="color:green;"> activar y guardar la configuración para obtener más información </b>).';
$lang['UserAdvManager_Password_Enforced_Info'] = '<b style="text-decoration: underline; color: green;">Explicaciones:</b> <b style="color: green;">Una puntuación contraseña se calcula sobre los parámetros básicos: longitud, tipo de caracteres utilizados (letras, números, mayúsculas, minúsculas, caracteres especiales). Si la contraseña del usuario no puntuación, la puntuación alcanzada se muestra con la puntuación mínima para llegar y una indicación para aumentar el valor de esta puntuación. Para que te hagas una idea, una puntuación por debajo de 100 se considera "baja complejidad". Entre 100 y 500, la complejidad es mayor y la media. Más allá de 500, que es ¡Fort Knox! ;-)<br>Usted puede hacer sus contraseñas complejidad de las pruebas utilizando el campo de abajo. Esto le permitirá tener una idea de la puntuación para definir un nivel de complejidad a medida.</b>';
$lang['UserAdvManager_PasswordTest'] = 'Contraseña para poner a prueba : ';
$lang['UserAdvManager_ScoreTest'] = 'Puntuación : ';
$lang['PasswordTest'] = 'Cálculo de la puntuación';
$lang['UserAdvManager_Password_Enforced_true'] = ' Contraseña fuerte que se requiere - Introduzca el puntaje mínimo (valor mínimo) de la complejidad de las contraseñas == ';
$lang['UserAdvManager_Password_Enforced_false'] = ' No fortalecer las contraseñas. (por defecto)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Aplicar también el control de la complejidad de contraseñas cuando un administrador crea un usuario? Nota: Si el usuario creado desea cambiar su contraseña y el fortalecimiento de las contraseñas de los usuarios es activo, va a estar sujeto a las normas establecidas.';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = 'Habilitar contraseñas para el fortalecimiento de los administradores.';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = 'Deshabilitar contraseñas de fortalecimiento para administradores. (por defecto)';
$lang['UserAdvManager_GhostTracker'] = 'Ghost Tracker - Permite gestionar los usuarios registrados de acuerdo a su fecha de última visita :';
$lang['UserAdvManager_GhostTracker_true'] = ' Habilitar Ghost Tracker.';
$lang['UserAdvManager_GhostTracker_false'] = ' Deshabilitar Ghost Tracker. (por defecto)';
$lang['UserAdvManager_GhostTracker_DayLimit'] = ' Escriba aquí el límite máximo, en días, entre dos visitas de un visitante. Cuando se alcanza este límite, el visitante aparecerá en el cuadro sobre el "Ghost Tracker" ficha.';
$lang['UserAdvManager_GhostTracker_ReminderText'] = ' Texto utilizado en el recordatorio por correo electrónico enviado a animar a los visitantes para volver a la galería (Nota: El texto pre-llenados en la instalación del plugin se muestra como un ejemplo).<br><b style="color: red;">(¡¡¡ </b><b style="text-decoration: underline; color: red;">¡ADVERTENCIA!</b> <b style="color: red;">Modificación de texto sólo está disponible si está habilitada Ghost Tracker. Utilice las etiquetas de múltiples idiomas de plugin Descripción extendido si se ha activado este plugin!)</b>';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
$lang['UserAdvManager_GhostTracker_Notice'] = 'Cuando está activada la característica Ghost Tracker, puede administrar sus visitantes en función de la frecuencia de sus visitas. <b style="color: red;">IMPORTANTE: Si activa esta función por primera vez o ha reactivado después de un largo período de tiempo y ganancias durante el que estén registrados los nuevos visitantes, visite la ficha Tracker Ghost y siga las instrucciones para la inicialización Tracker Ghost.</b>';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


/* ConfirmMail Configuration Tab */
$lang['ConfirmMail_Title'] = 'Avanzados de gestión y configuración de confirmación de registro por correo';
$lang['Title_Tab2'] = 'UserAdvManager - ConfirmMail Configuración';
$lang['Tab_ConfirmMail'] = 'ConfirmMail Configuración';
$lang['UserAdvManager_ConfirmMail_Info'] = 'Limitación de tiempo para la validación de la inscripción: <br>Si habilita esta opción, seleccione el tiempo deseado (x) en el campo de abajo. Los visitantes que se registren tendrán entonces x días para validar su inscripción. Después de este período en el enlace de validación que han recibido por correo será vencido.<br>';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = 'Habilitar la limitación del plazo de inscripción.';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = 'Deshabilitar limitar el plazo de inscripción. (Default)';
$lang['UserAdvManager_ConfirmMail_TimeOut'] = 'Retraso de validación:';
$lang['UserAdvManager_ConfirmMail_Delay_Info'] = 'Introduce el número de días antes de la expiración de la validación de registro : ';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Recordatorio por correo electrónico para activar o desactivar de registros validados:';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = 'Activar recordatorio por correo electrónico';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = 'Deshabilitar recordatorio por correo electrónico. (Default)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Contenido a la medida del mensaje recordatorio con la regeneración de la clave de validación. <br>Si deja en blanco, el recordatorio por correo electrónico sólo se incluirá el enlace de validación. Por tanto, es muy recomendable tomar un pequeño texto explicativo. (Nota: El texto pre-llenados en la instalación del plugin se muestra como un ejemplo)<br><br><b style="color: red;">(¡¡¡ </b><b style="text-decoration: underline; color: red;">¡ADVERTENCIA!</b> <b style="color: red;">Modificación de texto sólo está disponible si está habilitada recordatorio por correo electrónico. Utilice las etiquetas de múltiples idiomas de plugin Descripción extendido si se ha activado este plugin !!!)</b>';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Contenido a la medida del mensaje recordatorio sin regeneración de la clave de validación.<br>Si se deja en blanco, el recordatorio por correo electrónico sólo se incluirá el enlace de validación. Por tanto, es muy recomendable tomar un pequeño texto explicativo. (Nota: El texto pre-llenados en la instalación del plugin se muestra como un ejemplo)<br><br><b style="color: red;">(¡¡¡ </b><b style="text-decoration: underline; color: red;">¡ADVERTENCIA!</b> <b style="color: red;">Modificación de texto sólo está disponible si está habilitada recordatorio por correo electrónico. Utilice las etiquetas de múltiples idiomas de plugin Descripción extendido si se ha activado este plugin !!!)</b>';


/* UserManager Tab */
$lang['UserManager_Title'] = 'Configuración avanzada de usuarios registrados no validados';
$lang['Title_Tab3'] = 'UserAdvManager - Gestión de los Visitantes';
$lang['Tab_UserManager'] = 'Gestión de los Visitantes';
$lang['UserAdvManager_ConfirmMail_User_List'] = 'Al limitar el plazo de inscripción está habilitada, podrás encontrar más adelante la lista de usuarios en espera de validación, ya sea que <b style="text-decoration: underline;">estén o no</b> en el tiempo para validar.<br><br>En esta vista, puede:
<br><br>
- Elimine manualmente las cuentas de <b>(drenaje manual)</b>
<br>
- Generar recordatorio por correo electrónico <b>sin</b> generar una nueva clave. Advertencia: Enviar un recordatorio por correo electrónico dirigido a los visitantes. Esta función no se restaura la fecha de registro de visitantes objetivo y el tiempo de espera sigue siendo válida.
<br>
- Generar recordatorio por correo electrónico <b>con</b> generar una nueva clave. Advertencia: Enviar un recordatorio por correo electrónico dirigido a los visitantes. Esta función también se restablece la fecha de registro de visitantes y específicos, que equivale a prorrogar el plazo para la validación.
<br>
- Presentar una solicitud de registro en espera de validación manual, aunque la fecha de caducidad ha pasado <b>(forzando la validación)</b>.
<br>';
$lang['Registration_Date'] = 'Fecha de registro';


// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Ghost Tracker Tab */
$lang['GhostTracker_Title'] = 'Gestión avanzada de usuarios fantasma';
$lang['Title_Tab4'] = 'UserAdvManager - Ghost Tracker';
$lang['Tab_GhostTracker'] = 'Ghost Tracker';
$lang['LastVisit_Date'] = 'Última visita';
$lang['Ghost_Reminder'] = 'Recordatorio por email';
$lang['Reminder_Sent_OK'] = 'SI';
$lang['Reminder_Sent_NOK'] = 'NO';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
$lang['UserAdvManager_GhostTracker_Init'] = 'Si habilita esta función por primera vez o ha reactivado después de un largo período durante el cual los visitantes fuera de nuevo se ha registrado, usted debe inicializar o restablecer el Rastreador de Ghost. Esta acción se realiza sólo después de la activación o reactivación de la opción. Por favor, haga clic en <u>una vez</u> el botón de reset de abajo.';
$lang['UserAdvManager_GhostTracker_User_List'] = 'Cuando la Tracker Ghost está habilitado y se inicializa, se encuentra por debajo de la lista de visitantes registrados que no han regresado desde los x días. "x" es el número de días configurado en la pestaña Configuración general. Además, usted encontrará una columna que indica si un recordatorio por correo electrónico ha sido enviado a los visitantes específicos. Así, se puede ver a simple vista y tratar a los visitantes que no han tenido en cuenta el recordatorio.<br><br>En esta vista, usted puede:
<br><br>
- Elimine manualmente las cuentas de <b>(drenaje manual)</b>
<br>
- Generar recordatorio por correo electrónico <b>con el cambio de la fecha última visita</b>. Esto permite dar un comodín a los visitantes específicos. Si el visitante ya ha recibido un recordatorio, nada impide a resentir un nuevo correo que se restablecerá de nuevo, de hecho, la fecha de la última visita.
<br>';
// --------- End: New or revised $lang ---- from version 2.12.2


/* Mailing */
$lang['infos_mail %s'] = '%s, Aquí encontrará su información para entrar en la galería:';
$lang['User: %s'] = 'Usuario : %s';
$lang['Password: %s'] = 'Contraseña: %s';
$lang['Add of %s'] = 'Añadir de %s';
$lang['Update of %s'] = 'Actualización de %s';
$lang['Link: %s'] = 'Por favor, haga clic en este enlace para confirmar su registro: %s';
$lang['Reminder_with_key_of_%s'] = '%s, su clave de validación se ha renovado';
$lang['Reminder_without_key_of_%s'] = '%s, su clave de validación expirará';
$lang['Ghost_remainder_of_%s'] = '%s, este es un recordatorio por correo electrónico';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Validar su inscripción';
$lang['confirm_mail_page_title'] = 'Validar su inscripción';
$lang['confirm_mail_ok'] = '<br><br><br>Gracias a haber confirmado su dirección de correo electrónico y su registro en la galería. ¡Have fun!<br><br><br><br>';
$lang['confirm_mail_bad'] = '<br><br><br>Su clave de activación es incorrecta o está vencido o que ya ha validado su cuenta, por favor, póngase en contacto con el webmaster para solucionar este problema.<br><br><br><br>';


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
$lang['Err_ConfirmMail_Settings'] = 'Esta página estará disponible sólo si la "Confirmación de correo electrónico" está activado en "Configuración general".';
$lang['Err_UserManager_Settings'] = 'Esta página está disponible sólo si "Habilitar limitar el plazo de inscripción" está activo en la pestaña "Configuración de ConfirmMail" y un grupo de usuarios no validados se encuentra en "Configuración general".';
$lang['No_validation_for_Guest'] = 'El "Invitado" cuenta no está sujeta a la validación';
$lang['No_validation_for_default_user'] = 'La cuenta predeterminada no está sujeta a la validación';
$lang['No_validation_for_Webmaster'] = 'El "webmaster" cuenta no está sujeta a la validación';
$lang['No_validation_for_your_account'] = 'Tu cuenta de administrador personnal no está sujeta a la validación';
$lang['Database_Error'] = '<b><u>¡Advertencia! Error de integridad críticas en su base de datos.</u></b><br><br>Por favor, compruebe la integridad de la tabla de #_user_confirm_mail.';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
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
$lang['Err_GhostTracker_Settings'] = 'Esta página está disponible sólo si "Ghost Tracker" está activo en la pestaña "Configuración general".';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
$lang['GhostTracker_Init_OK'] = '¡Ghost Tracker restablecer hecho!';
// --------- End: New or revised $lang ---- from version 2.12.2


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
$lang['Reminder_Email'] = 'Recordatorio por email';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
$lang['audit'] = 'Auditar la configuración';
$lang['submit'] = 'Guardar configuración';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
$lang['GT_Reset'] = 'Perdí Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2
?>