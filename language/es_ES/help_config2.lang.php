<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '
- Información por correo electrónico para el usuario<br>
- Confirmación de registro<br>
- Grupos o estatutos de validación<br>
- Plazo para la validación de registro<br>
- Recuerde a los usuarios no validados<br>
...
';
$lang['UAM_confirmmailTitle_d'] = 'Esta opción permite al usuario confirmar una inscripción haciendo clic en un enlace recibido en un correo electrónico enviado por el registro de la galería o el administrador para activar manualmente el registro. <br><br>
En el primer caso, el mensaje incluye una parte fija, con el enlace de activación generada a partir de una clave aleatoria (esta clave posiblemente puede ser regenerado a través de la "confirmación de seguimiento" ficha), y adaptable algunos un texto de bienvenida.
<br><br>
En el segundo caso, <b> <u> no hay clave de envio de correo electrónico de confirmación </ u> </ b>. Los visitantes deben esperar al administrador que valide a través de la pestaña "confirmación de seguimiento" su registro. Se recomienda habilitar la notificación de los administradores durante el registro (ver las opciones de configuración Piwigo) y utilizar la "Información de correo electrónico a los usuarios" para advertir a los nuevos participantes de la necesidad de esperar antes de activación de su cuenta.
<br>
<b style=&quot;color: red;&quot;>Nota:. Las opciones de "Limitación de confirmación de registro" y "recordatorios por correo para confirmar registrado" debe estar desactivados cuando la confirmación manual está activa </b>
<br><br>
Esta opción se usa típicamente con la asignación automática de grupo y / o el estado. Como se confirma o no el registro, es posible asignar el usuario a un grupo diferente, con un acceso más o menos restringido a la galería.';
$lang['UAM_StuffsTitle_d'] = 'Esto permite que un módulo adicional en el PWG Stuffs UAM plugin (si está instalado) para informar a sus visitantes que no han confirmado su inscripción.
<br>
Por favor, consulte la sección <b> trucos y ejemplos de uso </ b> en la parte inferior de esta página para obtener más información.';
$lang['UAM_adminconfmailTitle_d'] = 'Puede desactivar esta validaci&oacute;n s&oacute;lo para las cuentas de usuario creadas por el administrador de Piwigo a trav&eacute;s de la interfaz de gesti&oacute;n de los usuarios.<br><br>
Al activar esta opci&oacute;n, la validaci&oacute;n del email de registro ser&aacute; enviado a cada usuario creado por el administrador.<br><br>
Al deshabilitar esta opci&oacute;n (por defecto), s&oacute;lo el coreo de informaci&oacute;n  se env&iacute;a (si &quot;Informaci&oacute;n por correo electr&oacute;nico para el usuario&quot; est&aacute; activado).';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Cuando un administrador o Webmaster de la galería confirma manualmente un registro pendiente, una notificación por correo electrónico se envía automáticamente al usuario. Ingrese aquí su validación personalizada de asunto de correo electrónico.<br>
Por defecto, el campo tiene un texto genérico en Inglés, pero se puede cambiar y utilizar las etiquetas de traducción [lang =?] Del plugin de descripción ampliada si está instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Descripción Extendida:<br>
- <b style=&quot;color: red;&quot;>[nombre de usuario] </b> para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery] </b> para insertar el título de la galería.';
$lang['UAM_AdminValidationMail_d'] = 'Cuando un administrador o Webmaster de la galería manualmente confirma manualmente el registro pendiente, una notificación por correo electrónico se envía automáticamente al usuario. Escriba aquí el texto que aparece en este correo electrónico.
<br><br>
Siga personalizando el contenido con etiquetas especiales insertadas:<br>
- <b style=&quot;color: red;&quot;>[username] </b> para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b>para insertar la URL de su galería si se define en las opciones de configuración de Piwigo.
<br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas del plugin Descripción ampliada, si está activo.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Ingrese aquí su confirmación de registro personalizado de asunto del correo electrónico.<br>
Por defecto, el campo tiene un texto genérico en Inglés, pero se puede cambiar y utilizar las etiquetas de traducción [lang =?] Del plugin de descripción ampliada si está instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Descripción Extendida:<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>';
$lang['UAM_confirmtxtTitle_d'] = 'Escriba aquí el texto de presentación que aparece en el correo electrónico de confirmación.
<br><br>
Siga personalizando el contenido con etiquetas de inserción especial:
<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo.
';
$lang['UAM_confirmmail_custom1_d'] = 'Cuando "Confirmación de Registro" está activo, este campo le permite personalizar el texto <b> <u> aceptación </ u> </ b> en la página de confirmación de registro que se muestra cuando un usuario hace clic en el enlace de confirmación que recibió por correo electrónico.
<br><br>
Para instalar el plugin, un texto estándar se da como un ejemplo.
<br><br>
Siga personalizando el contenido con etiquetas de inserción especial:
<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo.
';
$lang['UAM_confirmmail_custom2_d'] = 'Cuando "Confirmación de Registro" está activo, este campo le permite personalizar el texto <b><u>de rechazo</u></b>en la página de confirmación de registro que se muestra cuando usuario hace clic en el enlace de confirmación que recibió por correo electrónico.
<br><br>
Para instalar el plugin, un texto estándar se da como un ejemplo.
<br><br>
Siga personalizando el contenido con etiquetas de inserción especial:
<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo.';
$lang['UAM_RejectConnexion_d'] = 'Si se activa, los nuevos usuarios registrados que no han confirmado su inscripción no serán capazes de conectarse a la galería. Serán redirigido a una página especial para informarles de este estado. <br><br>
<b style=&quot;color: red;&quot;>Advertencia - Esta característica sólo funciona en conjunto con los grupos de confirmación! Vea a continuación para configurar los grupos según sea necesario. </b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personaliza aquí tu texto de explicación para informar a los usuarios no confirmados de que no serán capaz de conectarse a la galería hasta que hayan confirmado su inscripción.
<br> <br>
Este campo es compatible con el editor FCK y, para múltiples idiomas, puede usar los botones [lang] del plugin Descripción ampliada si es activo.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ADVERTENCIA: El uso de grupos de validación requiere que se haya creado al menos un grupo de usuarios y se define &quot;por defecto&quot; en la gestión de Piwigo de grupos de usuarios.</b><br><br>
Los grupos est&aacute;n validados para su uso en relaci&oacute;n con la &quot;confirmaci&oacute;n de registro&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ADVERTENCIA: El uso de la validaci&oacute;n de estado requiere que se haya mantenido el &quot;Invitado&quot; del usuario con la configuraci&oacute;n predeterminada (como usuario de plantilla) para los nuevos registrados. Nota Puede establecer cualquier otro usuario como una plantilla para nuevos registrados. Por favor, consulte la documentaci&oacute;n de Piwigo para obtener m&aacute;s detalles.</b><br><br>
Los estatutos son validados para su uso en relaci&oacute;n con la &quot;confirmaci&oacute;n de registro&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>PRECAUCIÓN: El uso de los niveles de confidencialidad requiere la confirmación de que ha asignado un nivel de privacidad a las fotos que desee restringir. Consulte la documentación para obtener más detalles Piwigo. </ b> <br><br>
Los niveles de confidencialidad confirmación se utilizan en combinación con la "Confirmación de Registro"';
$lang['UAM_validationlimitTitle_d'] = 'Esta opción le permite limitar el número de días que un nuevo usuario pueda confirmar su registro. Una vez transcurrido el plazo, el enlace de confirmación no es válido y no se puede utilizar.
<br><br>
Esta opción se utiliza una vez que la "Confirmación de Registro" esta activada.
<br><br>
Si esta opción y la opción de "recordatorios por correo para confirmar registrado" se activan, nuevas opciones aparecerán más adelante en esta sección para la automatización de la gestión de visitantes sin confirmar.';
$lang['UAM_remailTitle_d'] = 'Esta opción le permite enviar un recordatorio por correo electrónico a los usuarios que no hayan confirmado su inscripción en el tiempo. No tiene ningún efecto una vez que la "Confirmación de Registro" esta activada.
<br><br>
2 tipos de correo electrónico se pueden enviar: Con o sin regeneración de la confirmación de la clave. Según el caso, el contenido de mensajes de correo electrónico se pueden personalizar.
<br><br>
Consulte la pestaña "Seguimiento de donfirmación de ".
<br><br>
Si esta opción y la "Limitación de confirmación en tiempo de registro" se activan, nuevas opciones aparecerán más adelante en esta sección para la automatización de la gestión de visitantes sin confirmar.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Ingrese aquí su confirmación de registro personalizado de asunto del correo electrónico (con o sin generación de la llave). <br>
Por defecto, el campo tiene un texto genérico en Inglés, pero se puede cambiar y utilizar las etiquetas de traducción [lang =?] Del plugin de descripción ampliada si está instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Descripción:<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para insertar el título de la galería.';
$lang['UAM_USRAutoTitle_d'] = 'La gestión automática de los visitantes sin confirmar se activa cada vez que se conecta a la galería y trabaja de la siguiente manera:
<br><br>
- Eliminación automática de cuentas no confirmadas en el tiempo asignado sin el envío de recuperación automática por correo electrónico -> "Limitar el tiempo de confirmación de registro" <b> <u> está activo </u> </b> "recordatorio por correo electrónico a los solicitantes de registro no confirmado "<b> <u> está inactivo </u> </b>.
<br><br>
- Envío automático de un recordatorio con una nueva generación de confirmación de llave y la eliminación automática de cuentas no confirmadas en el tiempo después de enviar el estímulo ->
"Limitar el periodo de confirmación de registro" <b><u> está activo </u> </b> "recordatorios por correo certificado a confirmar" <b> <u> está activo </u> </b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'Esto sólo es válido cuando el usuario cuya cuenta ha eliminado el  mismo desencadenando el mecanismo de supresión (raro pero posible). Entonces estára desconectado de la galería y redirigido a una página que muestra la supresión de su cuenta y, eventualmente, los motivos de esta supresión.
<br> <br>
Siga personalizando el contenido con etiquetas especiales insertadas: <br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Texto para la página de redireccionamiento se pueden introducir en este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo.';
$lang['UAM_USRAutoMailTitle_d'] = 'Cuando se activa, esta función automáticamente enviara un contenido personalizado en "recordatorio email con la llave generada" a los visitantes que coincidan con los criterios.';
?>