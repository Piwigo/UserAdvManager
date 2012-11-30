<?php

/* UserManager Tab */
$lang['UAM_Registration_Date'] = 'Fecha de registro';


/* Mailing */
$lang['UAM_infos_mail %s'] = '%s, Aquí encontrará su información para entrar en la galería:';
$lang['UAM_User: %s'] = 'Usuario : %s';
$lang['UAM_Password: %s'] = 'Contraseña: %s';
$lang['UAM_Link: %s'] = 'Por favor, haga clic en este enlace para confirmar su registro: %s';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Auditoría OK';
$lang['UAM_Err_audit_username_char'] = '<b>Esta cuenta utiliza uno o más caracteres prohibidos:</b> ';
$lang['UAM_Err_audit_email_forbidden'] = '<b>Esta cuenta utiliza un proveedor de correo electrónico  prohibido:</b> ';
$lang['UAM_Err_audit_advise'] = '<b>Usted tiene que realizar correcciones para cumplir con las nuevas normas que ha activado.<br>Use una herramienta de gestión de base de datos para corregir las cuentas de usuario directamente en la tabla ###_USERS';
$lang['UAM_reg_err_login2'] = 'El nombre de usuario no puede coincidir con los siguientes caracteres: ';
$lang['UAM_reg_err_login5'] = 'Su proveedor de correo electrónico está prohibido para el registro. Proveedores de correo electrónico en veda son: ';
$lang['UAM_empty_pwd'] = '[contraseña vacía]';
$lang['UAM_no_update_pwd'] = '[Perfil actualizado sin cambiar contraseña]';
$lang['UAM_No_validation_for_Guest'] = 'La cuenta "Invitado"  no está sujeta a la validación';
$lang['UAM_No_validation_for_default_user'] = 'La cuenta predeterminada no está sujeta a la validación';
$lang['UAM_No_validation_for_Webmaster'] = 'La cuenta "webmaster" no está sujeta a la validación';
$lang['UAM_No_validation_for_your_account'] = 'Tu cuenta de administrador personnal no está sujeta a la validación';


/* Processing messages */
$lang['UAM_%d_Mail_With_Key'] = '%d mensaje con la clave de renovación fue enviado';
$lang['UAM_%d_Mails_With_Key'] = '%d Mensajes con la clave de renovación fueron enviados';
$lang['UAM_%d_Reminder_Sent'] = '%d mensaje recordatorio fue enviado';
$lang['UAM_%d_Reminders_Sent'] = '%d mensajes recordatorios fueron enviados ';
$lang['UAM_%d_Validated_User'] = '%d usuario validado manualmente';
$lang['UAM_%d_Validated_Users'] = '%d usuarios validados manualmente';


/* Action button names */
$lang['UAM_Delete_selected'] = 'Suprimir';
$lang['UAM_Mail_without_key'] = 'Aviso sin clave';
$lang['UAM_Mail_with_key'] = 'Aviso con clave';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['UAM_PasswordTest'] = 'Cálculo de la puntuación';
/* Ghost Tracker Tab */
$lang['UAM_Tab_GhostTracker'] = 'Ghost Tracker';
$lang['UAM_Reminder'] = 'Recordatorio por email';
$lang['UAM_Reminder_Sent_OK'] = 'SI';
$lang['UAM_Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Configuración guardada.';
$lang['UAM_reg_err_login3'] = '¡Seguridad: Contraseña obligatoria!';
$lang['UAM_reg_err_login4_%s'] = 'Seguridad: Un sistema de control calcula la puntuación de la complejidad de la contraseñas. La complejidad de la contraseña es demasiado baja (puntuación = %s). Por favor, elija una nueva contraseña más segura siguiendo estas reglas:<br>
- Usar letras y números<br>
- Utilice minúsculas y mayúsculas<br>
- Aumentar su longitud (número de caracteres)<br>
La puntuación mínima de las contraseñas   exigida por el administrador es la siguiente: ';
$lang['UAM_No_reminder_for_Guest'] = 'La cuenta "Invitado" no está sujeta a recibir recordatorios de Ghost Tracker';
$lang['UAM_No_reminder_for_default_user'] = 'La cuenta predeterminada no está sujeto a recibir recordatorios de Ghost Tracker';
$lang['UAM_No_reminder_for_Webmaster'] = 'La cuenta "webmaster" no está sujeta a recibir recordatorios de Ghost Tracker';
$lang['UAM_No_reminder_for_your_account'] = 'Su cuenta de administrador personnal no está sujeta a recibir recordatorios de Ghost Tracker';
/* Action button names */
$lang['UAM_audit'] = 'Auditar la configuración';
$lang['UAM_submit'] = 'Guardar configuración';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['UAM_GhostTracker_Init_OK'] = '¡Ghost Tracker inicializado!';
/* Action button names */
$lang['UAM_GT_Reset'] = 'Inicializar Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['UAM_mail_exclusionlist_error'] = '¡Advertencia! Ha introducido una nueva línea (CR-LF) al principio de la lista de exclusión de correo electrónico (en rojo abajo). Aunque esta nueva línea no es visible, todavía está presente y puede causar un mal funcionamiento del plugin. Por favor, vuelva a escribir en su lista de exclusión de una manera que no comienza con una nueva línea.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.4
/* Global Configuration Tab */
$lang['UAM_Title_Tab'] = 'UserAdvManager - Versión: ';
$lang['UAM_SubTitle1'] = 'Configuración del plugin';
$lang['UAM_Tab_Global'] = 'Configuración';
$lang['UAM_Title1'] = 'Configuración de las restricciones de registro';
$lang['UAM_Title2'] = 'Configuración de las confirmaciones y validaciones de registro';
$lang['UAM_Title3'] = 'Configuración de los registros seguidos y otras opciones';
$lang['UAM_Title4'] = 'Consejos y ejemplos de uso';
$lang['UAM_No_Casse'] = 'Nombres de usuarios: mayúsculas y minúsculas';
$lang['UAM_Username_Char'] = 'Nombres de usuarios: Excluyendo los caracteres';
$lang['UAM_Username_Char_true'] = ' Prohibición de caracteres:<br>(Utilice una coma para separar cada caracteres)<br><br>';
$lang['UAM_Username_Char_false'] = ' Permiso de todos (por defecto)';
$lang['UAM_Password_Enforced'] = 'Fortalecimiento del nivel de seguridad de las contraseñas';
$lang['UAM_Password_Enforced_true'] = ' Activar. Puntuación mínima:';
$lang['UAM_AdminPassword_Enforced'] = 'Aplicar a los administradores';
$lang['UAM_PasswordTest'] = 'Test de Contraseña: ';
$lang['UAM_ScoreTest'] = 'Resultado: ';
$lang['UAM_MailExclusion'] = 'Exclusión de dominios de correo electrónico';
$lang['UAM_MailExclusion_true'] = ' Excluir los siguientes dominios: <br>(Utilice una coma para separar cada dominio)';

$lang['UAM_Mail_Info'] = 'Información por correo electrónico para el usuario:';
$lang['UAM_MailInfo_Text'] = ' Personalización del correo electrónico de información:';
$lang['UAM_Confirm_Mail'] = 'Confirmación de registro:';
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
$lang['UAM_ConfirmMail_Remail'] = 'Recuerde a los usuarios no validados';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Personalización del mensaje recordatorio <b><u>con</u></b> la regeneración de validación de claves.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Personalización del mensaje recordatorio <b><u>sin</u></b> la regeneración de la validación de claves.';

$lang['UAM_GhostTracker'] = 'Gestión de Espíritu visitantes (Tracker Ghost)';
$lang['UAM_GhostTracker_true'] = ' Activar. Período máximo de días entre dos visitas: ';
$lang['UAM_GhostTracker_ReminderText'] = 'Personalización del mensaje recordatorio de Ghost Tracker';

/* Ghost Tracker Tab */
$lang['UAM_SubTitle4'] = 'Ghost Tracker';
$lang['UAM_GT_Init'] = 'Inicialización de Ghost Tracker';
$lang['UAM_GhostTracker_Title'] = 'Gestión de los espíritu visitantes';
$lang['UAM_GhostTracker_Init'] = 'Si habilita esta función por primera vez o ha reactivado después de un largo período durante el cual los visitantes se han registrado de nuevo, usted debe inicializar o restablecer el Rastreador de Ghost. Esta acción se realiza sólo después de la activación o reactivación de la opción. Por favor, haga clic <u>una vez</u>en el botón de reset de abajo.';
/* Mailing */
$lang['UAM_Add of %s'] = 'Perfil creado para %s';
$lang['UAM_Update of %s'] = '%s Perfil actualizado';
/* Email confirmation page */
/* Mailing */
$lang['UAM_Ghost_reminder_of_%s'] = '%s, este es un recordatorio por correo electrónico';
$lang['UAM_Reminder_with_key_of_%s'] = '%s, su clave de validación se ha renovado';
$lang['UAM_Reminder_without_key_of_%s'] = '%s, su clave de validación expirará';
/* Errors and Warnings */
$lang['UAM_Err_GhostTracker_Settings'] = 'Esta página está disponible sólo si "Ghost Tracker" está activo en "Configuración de los registros seguido y otras opciones".';
$lang['UAM_Err_Userlist_Settings'] = 'Esta página está disponible sólo si "Seguimiento de los usuarios registrados" está activo en la "Configuración de los registros seguidos y otras opciones".';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Confirmación de registro por los administradores';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Objectivos:<br>
            - A su llegada a la galería: Avisar al visitante de que tiene que registrarse para acceder a fotos privadas<br>
            - En el registro: Generar una validación de correo electrónico con enlace directo, informar al nuevo usuario de su falta de validación y integrarlo al grupo "Espera"<br>
            - En la validación: cambiar automáticamente de grupo "Espera" al grupo "Validado", que proporciona acceso a categorías particulares<br><br>
            <b>Recuerde: En funcionamiento normal, el "Invitado" sólo ve las categorías de público, sin mensaje de información.</b>
            </li><br><br>
            <li>
Requisito previo:<br>
- Una galería con todas o algunas categorías privadas, visible sólo por los usuarios registrados<br>
- Al menos los 2 grupos de usuarios siguientes de Piwigo : "Espera," sin permiso en las categorías de privados, y "Validado" con todos los permisos en las categorías de privados<br>
- UAM plugin<br>
- PWG Stuffs plugin, para agregar un tipo de módulo "Personal Block"<br>
- Opcionalmente, la Extended Description plugin para soportar múltiples idiomas<br>
            </li><br><br>
            <li>
Etapas:<br><br>
A. En el plugin UAM:
              <ol>
                <li>Activar la confirmación de registro</li>
                <li>Introduzca el texto para la explicación adicional, que se adjunta al correo de confirmación de registro. Si se activa el plugin Extended Description, las etiquetas de idioma se pueden utilizar</li>
                <li>Seleccione la opción "Espera" del grupo en "Para los usuarios que no han validado su registro"</li>
                <li>Seleccione la opción "Validado" en grupo "Para los usuarios que han validado su registro"</li>
                <li>Guardar la configuración del plug-in</li>
              </ol>
<br>
B. En plugin PWG Stuffs :
              <ol>
                <li>Añadir un tipo de módulo nuevo "bloque Personal: Muestra una plantilla de bloque (por ejemplo, un editorial)"</li>
                <li>Configurar el módulo, lo que indica el título (por ejemplo, "en espera de la validación de Registro") y su descripción, y solamente "Espera" en la lista de grupos permitido</li>
                <li>El contenido completo del módulo con la información del mensaje que se mostrará a los usuarios no validados. Como UAM, las balisas de  lenguajes pueden ser utilizadas si el plugin Extended Description está activado</li>
                <li>Active la casilla "Mostrar el módulo en la página principal del sitio"</li>
                <li>Validar la configuración del módulo</li>
              </ol>
            </li>
          </ul>';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Texto de la página de confirmación - Confirmación aceptada';
$lang['UAM_confirmmail_custom_Txt2'] = 'Texto de la página de confirmación - Confirmación rechazada';
$lang['UAM_LastVisit_Date'] = 'Su última visita';
$lang['UAM_Nb_Days'] = 'Diferencia en días';
$lang['UAM_Err_UserManager_Settings'] = 'Esta página está disponible sólo si "Confirmación de registro" está activo y si un grupo de visitantes no ha sido validada está configurado en "Configuración de las confirmaciones y validaciones de registro".';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['UAM_Support_txt'] = 'El apoyo oficial sobre este plugin se encuentra solo en el foro de Piwigo:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;">Foro Inglés - http://piwigo.org/forum/viewtopic.php?id=15015</a><br><br>
También está disponible, el bugtracker del proyecto: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_Manual_Validation'] = 'Validación manual';
$lang['UAM_Confirm_Mail_true'] = ' Activar - La validación por el usuario';
$lang['UAM_Confirm_Mail_local'] = ' Activar - La validación por el administrador';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_Expired_Group'] = '<b>Grupo</b> para el registro de usuario ha caducado<br>';
$lang['UAM_Expired_Status'] = '<b>Estado </b> para el registro de usuario ha caducado<br>';
$lang['UAM_GTAuto'] = 'Gestión automática de los Espíritus usuarios';
$lang['UAM_GTAutoDel'] = 'Borrado automático de las cuentas';
$lang['UAM_Error_GTAutoMail_cannot_be_set_without_ConfirmMail'] = 'Error de coherencia en la configuración elegida:<br><br>
"Configuración de los registros seguidos y otras opciones > Gestión de Espíritu visitantes (Tracker Ghost) > Gestión automática de los Espíritus usuarios > Automáticamente el envío de un correo electrónico cuando se cambia de grupo / estado" no se puede activar si "Configuración de las confirmaciones y validaciones de registro > Confirmación de registro - La validación por el usuario" no está habilitada en un principio.<br><br>
Para garantizar la coherencia, la opción "Automáticamente el envío de un correo electrónico cuando se cambia de grupo / estado" fue colocado de nuevo de forma automática "Desactivar".<br><br>';
$lang['UAM_Demotion of %s'] = 'Degradación de %s';
$lang['UAM_AdminValidationMail_Text'] = 'Notificación de la validación manual de registro';
$lang['UAM_Validation of %s'] = 'Validación de %s';
// --------- End: New or revised $lang ---- from version 2.16.0

$lang['UAM_Disable'] = ' Desactivar (por defecto)';
$lang['UAM_Enable'] = ' Activar ';
$lang['UAM_Stuffs_Title'] = 'Módulo de la UAM';
$lang['UAM_Stuffs'] = 'PWG Stuffs módulo';


// --------- Starting below: New or revised $lang ---- from version 2.20.4
$lang['UAM_HidePassw'] = 'Contraseña en texto claro en la información del correo electrónico';
// --------- End: New or revised $lang ---- from version 2.20.4


// --------- Starting below: New or revised $lang ---- from version 2.30.2
$lang['UAM_RedirToProfile'] = 'Redirigir a la página de personalización';
$lang['UAM_GTAutoGp'] = 'Cambio automático de grupo / estado / nivel de confidencialidad';
$lang['UAM_GTAutoMail'] = 'Automáticamente el envío de un correo electrónico cuando se cambia de grupo / estado / nivel de confidencialidad';
// --------- End: New or revised $lang ---- from version 2.30.2
$lang['UAM %d user pwdreseted'] = 'Se pide renovación de contraseña para el usuario %d';
$lang['UAM %d users pwdreseted'] = 'Se pide renovación de contraseña para los usuarios %d';
$lang['UAM_AdminValidationMail_Subject'] = 'Personalizar el asunto del correo electrónico de validación manual';
$lang['UAM_Admins cannot be pwdreset'] = 'La renovación de contraseña no puede ser solicitada para un administrador';
$lang['UAM_Bad_version_backup'] = 'La versión del fichero de copia de seguridad no corresponde con la versión del plugin ! La restauración no se realizo.';
$lang['UAM_ConfirmMail_ReMail_Subject'] = 'Personalizar el asunto del correo electrónico de recordatorio de confirmación de inscripción.';
$lang['UAM_ConfirmMail_Subject'] = 'Personalizar el asunto del correo electrónico de confirmación de inscripción.';
$lang['UAM_Confirm_Level'] = 'Nivel de confidencialidad<br>(------- para conservar el valor por defecto de Piwigo';
$lang['UAM_CustomPasswRetr'] = 'Personalizar el contenido del correo electrónico de contraseña perdida';
$lang['UAM_mail_exclusion_error'] = 'La opción Piwigo "El correo electrónico es obligatorio para todos los usuarios", ha sido desactiva cuando la opción del plugin UserAdvancedManager de (UAM) "Exclusión de dominios de correo" se mantuvo activo. Esta combinación es ilógica y no compatible! <br><br>
Por favor, vuelva a activar la opción Piwigo "El correo electrónico es obligatorio para todos los usuarios" para poder luego desactivar la opción UAM "Exclusión de dominios de correo" si eso es lo que quieres. <br><br>
Nota:. Este mensaje desaparecerá después de haber hecho las correcciones necesarias y volver a cargar la página de administración <br><br>';
$lang['UAM_Tracking confirmations'] = 'Confirmaciones de seguimiento';
$lang['UAM_Tracking registered users'] = 'Confirmaciones de usuarios registrados';
$lang['UAM_USRAuto'] = 'Gestión automática de los usuarios no confirmados';
$lang['UAM_USRAutoDel'] = 'Mensaje personalizado de cuenta eliminada';
$lang['UAM_USRAutoMail'] = 'Recordatorio por correo electrónico automatizado';
$lang['UAM_Valid_Level'] = 'Nivel de privacidad  para los usuarios que hayan confirmado su inscripción<br>';
$lang['UAM_Webmaster cannot be pwdreset'] = 'La contraseña de webmaster no puede ser renovada !';
$lang['UAM_You cannot pwdreset your account'] = 'Renovación de contraseñas no se pueden establecer para su propia cuenta!';
$lang['UAM_You need to confirm pwdreset'] = 'Debe confirmar la renovación de contraseñas (casilla de verificación)!';
$lang['UAM_Title5'] = 'Diversas opciones';
$lang['UAM_Tips2_txt'] = '    <ul>
       <li>
        Objetivos: Informar al visitante que el registro está pendiente de confirmación mediante la publicación de una página adicional en sustitución de la galería índice de página estándar en cada una de estas conexiones, y esto, como el registro no ha sido aprobado.
            <br><br>
Las ventajas sobre el método con PWG_Stuffs: Permitir información de formato y visualización de la información de forma inmediata tras el registro de visitantes.
            </li><br><br>
            <li>
Requisitos:<br>
- Una galería con todas o algunas categorías particulares, visible sólo por usuarios registrados<br>
- Por lo menos 2 de los siguientes grupos Piwigo usuarios: "Espera," sin permiso en las categorías privadas, y "confirmado" con todos los permisos en la categoría privado<br>
- UAM plugin<br>
- El plugin Páginas Adicionales para agregar y administrar una página adicional para reemplazar la página de índice por defecto de la galería<br>
- Opcionalmente, el plug-in Descripción extendida para soportar múltiples idiomas<br>
            </li><br><br>
            <li>
Stages:<br><br>
A. En el plugin UAM:
               <ol>
                 <li> Habilitar confirmación de registro </ li>
                 <li> Introduzca el texto para la explicación adicional que se adjuntará al correo de confirmación de registro. Si el plug-in Descripción ampliada está activada, las etiquetas de idioma se pueden utilizar </ li>
                 <li> Seleccione el grupo "Esperar" de la sección "Para los usuarios que no hayan confirmado su inscripción" </ li>
                 <li> Seleccione el grupo "Confirmado" de la sección "Para los usuarios que hayan confirmado su inscripción" </ li>
                 <li> Guardar la configuración del plugin </ li>
               </ ol>
<br>
B. En el plugin páginas adicionales: <br>
                 <b> NOTA: La gestión de los derechos de acceso de los grupos en páginas adicionales debe estar activada (consulte Configuración del plugin de configuración) </b>.
                 <br>
               <ol>
                 <li> Añadir una nueva página con al menos los siguientes parámetros: </ li>
                 <ul>
                   <li> nombre de la página: El nombre que desea dar a la página adicional (es decir: El registro no confirmado) </ li>
                   <li> Como página de inicio comprobado </ li>
                   <li>Grupos permitido: Marque la casilla correspondiente al grupo "Espera" configurada en la UAM </ li>
                   <li> Contenido:. El texto que desea utilizar para los visitantes </ li>
                 </ ul>
                 <br>
                 <li> Y eso es todo! Sólo los visitantes registrados y cuyo registro no ha sido confirmada veran esta página de índice adicional. </ Li>
               </ ol>
             </ li>
           </ ul>
';
$lang['UAM_Tips2'] = 'Informacion UAM y Additional Pages de registros no confirmados';
$lang['UAM_Stuffs_Desc'] = 'Adjuntar un bloque de informacion para los usuarion no confirmados';
$lang['UAM_Tips1'] = 'Informacion UAM y PWG_Stuffs de registros no confirmados';
$lang['UAM_Save'] = 'Ejecutar copia de seguridad';
$lang['UAM_Restore_File'] = 'Restaurar la configuración';
$lang['UAM_Restore'] = 'Para restaurar el archivo de copia de seguridad de su configuración. Sólo el archivo guardado en el servidor se toma en cuenta.
<br><br>
<b style="color: red;"> Cuidado con la versión de copia de seguridad! <br> Una copia de seguridad a partir de una versión del plugin sólo se pueden restaurar en la misma versión. </ b>';
$lang['UAM_Restoration_OK'] = 'Restauración de la configuración completada con éxito! Vuelve a cargar la página de administración UAM para ver la configuración restaurada.';
$lang['UAM_Restoration_NOK'] = 'Se produjo un error mientras se restaura la configuración. Por favor, compruebe la validez de su archivo de copia de seguridad.';
$lang['UAM_RejectConnexion_Custom_Txt'] = 'Personalización del texto de rechazo';
$lang['UAM_RejectConnexion'] = 'Rechazar conexión del usuario hasta que el registro se confirma';
$lang['UAM_PwdReset_Todo'] = 'Contraseñas a renovar';
$lang['UAM_PwdReset_NA'] = 'Contraseña original';
$lang['UAM_PwdReset'] = 'Renovar contraseña';
$lang['UAM_Password_Reset_Msg'] = 'Por favor cambie su contraseña';
$lang['UAM_PwdReset_Done'] = 'Contraseña renovada';
$lang['UAM_Password reset selected users'] = 'Solicitud de renovación de contraseñas para usuarios seleccionados';
$lang['UAM_No_Valid_Level'] = 'Nivel de privacidad  para los usuarios que no hayan confirmado su inscripción';
$lang['UAM_No_Usermanager'] = 'Ningún visitante sin confirmar en lista por el momento';
$lang['UAM_No_Userlist'] = 'Ningún visitante en lista por el momento';
$lang['UAM_No_Ghosts'] = 'Ningún visitante por ahora';
$lang['UAM_No_Backup_File'] = 'Copia de seguridad de archivos no disponibles!';
$lang['UAM_NewFeature'] = 'Nueva característica!';
$lang['UAM_MailInfo_Subject'] = 'Personalice la información email';
$lang['UAM_MiscOptions'] = 'Otras varias opciones';
$lang['UAM_MailExclusion_No'] = 'Dominios de exclusión E-mail - No disponible porque las direcciones de correos electrónicos no son obligatorias para las inscripciones!';
$lang['UAM_Guest cannot be pwdreset'] = 'Renovación de contraseñas no se pueden establecer para visitantes';
$lang['UAM_GTReminder_Subject'] = 'Personalización manual del Rastreador de Ghost de recordatorio de asunto del correo electrónico';
$lang['UAM_Generic cannot be pwdreset'] = 'Renovación de contraseñas no se pueden establecer para cuentas genéricas!';
$lang['UAM_GTAutomail_Subject'] = 'Personalizar el Rastreador automático Ghost de degradación de asunto de correo electrónico.';
$lang['UAM_GTAutomail_Text'] = 'Personalización del texto de degradación por correo electrónico';
$lang['UAM_Expired_Level'] = '<b>Nivel de privacidad</b> para el registro de usuario ha caducado<br>';
$lang['UAM_Error_Using_illegal_flag'] = 'Error de sintaxis! El [Kdays] bandera Autotexto se utiliza como "Fecha límite de confirmación de registro limitado" opción no se activará. Por favor, activar la opción o corregir el campo de texto (s) de color rojo.';
$lang['UAM_Error_Using_illegal_Kdays'] = 'Mediante las etiquetas [días K] sólo se permite si el plazo para la confirmación de la inscripción limitada está activo. Consulte el campo de texto en rojo para corregir el problema.';
$lang['UAM_Dump_OK'] = 'Archivo de copia de seguridad creado con éxito';
$lang['UAM_Dump_NOK'] = 'Error: No se puede crear el archivo de copia de seguridad!';
$lang['UAM_Dump_Download'] = 'Para descargar el archivo de copia de seguridad, por favor marque esta casilla:';
$lang['UAM_DumpTxt'] = 'Haga una copia de seguridad y restaura su configuración';
$lang['UAM_Default_ValidationTimeout_Txt'] = 'Lo sentimos, su cuenta ha sido borrada porque no ha confirmado su inscripción en el tiempo solicitado ([Kdays] días). Por favor, vuelva a intentar el registro con una cuenta de correo electrónico válida y no bloqueada.';
$lang['UAM_Default_RejectConnexion_Txt'] = 'Lo sentimos, no ha confirmado su inscripción, por eso no puede conectarse a la galería ahora. Por favor revise su buzón de correo electrónico. Encontrara un correo electrónico enviado por la galería, que contiene un enlace para realizar la confirmación. Si no, por favor póngase en contacto con el webmaster.';
$lang['UAM_Default_PwdRequest_Txt'] = 'Usted ha solicitado un restablecimiento de contraseña en nuestra galería. Por favor, encuentra a debajo la nueva configuración de su conexión.';
$lang['UAM_Default_InfoMail_Txt'] = 'Hola [nombre de usuario]!

Ha realizado cambios significativos en su perfil en la galería [mygallery]. Por favor, encuentre de debajo su nueva configuración:';
$lang['UAM_Default_InfoMail_Subject'] = '[nombre de usuario] - Su información de registro en [mygallery]';
$lang['UAM_Default_GTReminder_Subject'] = '[nombre de usuario] - Pasó mucho tiempo desde su última visita en [mygallery]';
$lang['UAM_Default_GTAutoMail_Subject'] = '[nombre de usuario] - Su cuenta ha sido degradada en [mygallery]';
$lang['UAM_Default user cannot be pwgreset'] = 'Renovación de contraseñas, no se pueden establecer para la cuenta de usuario por defecto!';
$lang['UAM_Default_GhstDeletion_Txt'] = 'Lo sentimos [nombre de usuario], tu cuenta ha sido borrada por un tiempo demasiado largo pasado desde su última visita en [mygallery]. Haga el favor de registrarse de nuevo.';
$lang['UAM_Default_GhstDemotion_Txt'] = 'Lo sentimos [nombre de usuario], su cuenta ha quedado obsoleta debido a un tiempo demasiado largo pasado desde su última visita en [mygallery]. Por favor, utilice el siguiente enlace para confirmar tu cuenta:';
$lang['UAM_Default_GhstReminder_Txt'] = 'Hola [nombre de usuario].

Este es un recordatorio, a pasado mucho tiempo desde su última visita en nuestra galería [mygallery]. Si usted no desea más usar su cuenta de acceso, por favor háganoslo saber respondiendo a este correo electrónico. Su cuenta será eliminada.

Tras la recepción de este mensaje sin nueva visita dentro de [días] días, estaríamos obligados borrar automáticamente su cuenta.

Saludos cordiales,

El administrador de la galería [mygallery] - [myurl]';
$lang['UAM_Default_AdminValidationMail_Subject'] = '[nombre de usuario] - Registro validado en [mygallery]';
$lang['UAM_Default_AdminValidation_Txt'] = 'Hola [nombre de usuario]! Gracias por registrarse y bienvenido a [mygallery].

Su cuenta ha sido confirmada de forma manual por el webmaster de [mygallery]. Ahora puede iniciar sesión en [myurl] y realizar los cambios apropiados a su perfil.';
$lang['UAM_Default_CfmMail_Custom_Txt1'] = 'Bienvenido [nombre de usuario]! Ha confirmado que eres humano y ahora puede usar [mygallery]!';
$lang['UAM_Default_CfmMail_Custom_Txt2'] = 'La clave de activación es incorrecta o caducada o que ya se ha confirmado su cuenta, por favor póngase en contacto con el webmaster para solucionar este problema.';
$lang['UAM_Default_CfmMail_Remail_Txt1'] = 'Hola [nombre de usuario].

Este es un mensaje de aviso porque usted se ha registrado en nuestra galería [mygallery], pero no ha confirmado su registro y su clave de confirmación ha caducado. Para permitir todavía el acceso a nuestra galería, su período de confirmación se ha restablecido. Usted tiene más de x días para confirmar su registro.

Nota: Después de este período, su cuenta será eliminada permanentemente.';
$lang['UAM_Default_CfmMail_Remail_Txt2'] = 'Hola [nombre de usuario].

Este es un mensaje de aviso porque usted se ha registrado en nuestra galería [mygallery], pero no ha confirmado su registro y su clave de confirmación ha caducado. Para permitir todavía el acceso a nuestra galería, su período de confirmación se ha restablecido. Usted tiene más de x días para confirmar su registro.

Nota: Después de este período, su cuenta será eliminada permanentemente.';
$lang['UAM_Default_ConfirmMail_Subject'] = '[nombre de usuario] la confirmación de registro en [mygallery]';
$lang['UAM_Default_ConfirmMail_Remail_Subject'] = 'Recordatorio - [nombre de usuario] la confirmación de registro en [mygallery]';
$lang['UAM_Default_ConfirmMail_Txt'] = 'Hola [nombre de usuario]! Gracias por haber registro en [mygallery].

Para completar el proceso y ser capaz de navegar a través de las imágenes, confirme por favor su registro haciendo clic en el vínculo de este mensaje.';
$lang['UAM_Manual_validation_needed_for %s'] = 'El usuario %s se ha registrado y espera para la validación manual por un administrador.';
$lang['UAM_Subject admin validation for %s'] = 'El registro de %s espera para la validación';
$lang['UAM_Change'] = 'Change the Group/Status/Privacy Level of the users who have been confirmed';
$lang['UAM_Customize_messagesandmails'] = 'Personalizar los mensajes y correos';
?>