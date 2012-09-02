<?php
//global $lang;

$lang['UAM_confirmTitle_d'] = '
- Información por correo electrónico para el usuario<br>
- Confirmación de registro<br>
- Grupos o estatutos de validación<br>
- Plazo para la validación de registro<br>
- Recuerde a los usuarios no validados<br>
...
';
$lang['UAM_carexcTitle_d'] = 'Puede ser interesante para prohibir ciertos caracteres en nombres de usuario (por ejemplo, se niegan los inicios de sesi&oacute;n que contiene @). Esta opci&oacute;n permite excluir caracteres o secuencia de caracteres, los acontecimientos.<br>
Nota: La opción también puede excluir palabras completas.
<br><br>
<b style=&quot;color: red;&quot;>Advertencia: Esta opción no tiene efecto sobre los nombres de usuario creados antes de su activación.</b>';
$lang['UAM_passwTitle_d'] = 'Al habilitar esta opción hace obligatoria la creación de una contraseña en el registro, y requiere la contraseña elegida por el usuario para cumplir un nivel mínimo de complejidad. Si el umbral no se alcanza, la puntuación obtenida y la puntuación mínima que deben alcanzarse se muestran, junto con recomendaciones para aumentar el valor de esta puntuación.<br><br>
Un campo de prueba permite medir la complejidad de la contraseña, y puede hacerse una idea de la puntuación necesaria para alcanzar una contraseña valida .<br><br>
Nota: La puntuación de una contraseña se calcula en función de varios parámetros: longitud, tipo de caracteres utilizados (letras, números, mayúsculas, minúsculas, caracteres especiales). Una puntuación por debajo de 100 se considera bajo, de 100 a 500, la complejidad es mediana, más allá de 500, la seguridad es excelente.';
$lang['UAM_passwtestTitle'] = 'Prueba de la complejidad de la contraseña';
$lang['UAM_passwtestTitle_d'] = 'Introduzca la contrase&ntilde;a para pruebar y luego haga clic en &quot;c&aacute;lcular complejidad&quot; para ver el resultado.';
$lang['UAM_passwadmTitle_d'] = 'Un administrador puede crear una cuenta de usuario, con o sin aplicación de la regla de la complejidad informática.<br><br>
Nota: Si el  usuario de la cuenta  creada quiere cambiar la contraseña, y el fortalecimiento de las contraseñas de los usuarios está activo, la misma estará sujeta a la norma establecida.';
$lang['UAM_infomailTitle_d'] = 'Esta opción permite automatizar el envío de un correo electrónico y la información a un usuario cuando cambie su contraseña o dirección de correo electrónico en su perfil.<br><br>
El contenido del mensaje enviado se compone de una parte personalizable para introducir una nota de bienvenida, y una parte fija que indica el inicio de sesión, contraseña y dirección de correo electrónico del usuario.';
$lang['UAM_confirmgrpTitle'] = 'Grupos de validación';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ADVERTENCIA: El uso de grupos de validación requiere que se haya creado al menos un grupo de usuarios y se define &quot;por defecto&quot; en la gestión de Piwigo de grupos de usuarios.</b><br><br>
Los grupos est&aacute;n validados para su uso en relaci&oacute;n con la &quot;confirmaci&oacute;n de registro&quot;';
$lang['UAM_confirmstatTitle'] = 'Estatutos de validación';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ADVERTENCIA: El uso de la validaci&oacute;n de estado requiere que se haya mantenido el &quot;Invitado&quot; del usuario con la configuraci&oacute;n predeterminada (como usuario de plantilla) para los nuevos registrados. Nota Puede establecer cualquier otro usuario como una plantilla para nuevos registrados. Por favor, consulte la documentaci&oacute;n de Piwigo para obtener m&aacute;s detalles.</b><br><br>
Los estatutos son validados para su uso en relaci&oacute;n con la &quot;confirmaci&oacute;n de registro&quot;';
$lang['UAM_remailtxt1Title'] = 'Recordatorio por correo electrónico con la llave generada';
$lang['UAM_remailtxt2Title'] = 'Recordatorio por correo electrónico sin la llave generada';
$lang['UAM_tipsTitle_d'] = 'Consejos y diversos ejemplos de uso de';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle_d'] = 'Puede desactivar esta validaci&oacute;n s&oacute;lo para las cuentas de usuario creadas por el administrador de Piwigo a trav&eacute;s de la interfaz de gesti&oacute;n de los usuarios.<br><br>
Al activar esta opci&oacute;n, la validaci&oacute;n del email de registro ser&aacute; enviado a cada usuario creado por el administrador.<br><br>
Al deshabilitar esta opci&oacute;n (por defecto), s&oacute;lo el coreo de informaci&oacute;n  se env&iacute;a (si &quot;Informaci&oacute;n por correo electr&oacute;nico para el usuario&quot; est&aacute; activado).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_restricTitle_d'] = '
- Excluyendo los caracteres<br>
- Ejecución Contraseña<br>
- Exclusión de dominios de correo electrónico<br>
...
';
$lang['UAM_userlistTitle_d'] = 'Esta p&aacute;gina es para informaci&oacute;n al administrador. Se muestra una lista de todos los usuarios registrados en la galer&iacute;a que indique la fecha y el n&uacute;mero de d&iacute;as transcurridos desde su &uacute;ltima visita. La lista est&aacute; ordenada por orden ascendente del n&uacute;mero de d&iacute;as.
<br><br>
<b><u>S&oacute;lo cuando el Ghost Tracker est&aacute; activo</u></b>, el n&uacute;mero de d&iacute;as sin visita aparece con el c&oacute;digo de color siguientes, seg&uacute;n el plazo m&aacute;ximo establecido en las opciones de Ghost Tracker:
<br>
- <b style=&quot;color: lime;&quot;>Verde</b> : Cuando el usuario ha visitado la galer&iacute;a de <b style=&quot;color: lime;&quot;><u>menos del 50%</u></b> del plazo m&aacute;ximo indicado en el Ghost Tracker.<br>
- <b style=&quot;color: orange;&quot;>Naranja</b> : Cuando el usuario ha visitado la galer&iacute;a de <b style=&quot;color: orange;&quot;><u>entre 50% y 99%</u></b> del plazo m&aacute;ximo indicado en el Ghost Tracker.<br>
- <b style=&quot;color: red;&quot;>Rojo</b> : Cuando el usuario ha visitado la galer&iacute;a de <b style=&quot;color: red;&quot;><u>por más de 100%</u></b> del plazo m&aacute;ximo indicado en el Ghost Tracker. <b><u>En este caso, el usuario tambi&eacute;n debe aparecer en el cuadro Ghost Tracker.</u></b><br>
<br>
Ejemplo :
<br>
El per&iacute;odo m&aacute;ximo de Ghost Tracker est&aacute; configurado para 100 d&iacute;as.
<br>
Un usuario aparecer&aacute; en verde si visit&oacute; la galer&iacute;a hace menos de 50 d&iacute;as, en naranja si su &uacute;ltima visita tuvo lugar entre el 50 y 99 d&iacute;as y el rojo durante 100 d&iacute;as o m&aacute;s.
<br><br>
<b>NOTA</b>: La lista no muestra que no han validado su registro (si la opci&oacute;n de validar el registro est&aacute; activado). Estos usuarios estan administrados despu&eacute;s de una manera particular en la pestaña &quot;Seguimiento de las Validaciones&quot;.
<br><br>
<b>Funciones Clasificación de la tabla</b>: Puede ordenar los datos mostrados, haga clic en los encabezados de columna. Sostenga la tecla SHIFT para ordenar hasta 4 columnas máxima simultánea.';
$lang['UAM_usermanTitle_d'] = 'Cuando el limite de plazo de inscripción está habilitado, podrá encontrar más adelante la lista de usuarios cuya validación de registro esta en espera, <b style=&quot;text-decoration: underline;&quot;>si o no</b> que están en el tiempo para validar.<br><br>
La fecha de registro se muestra en verde cuando el usuario en cuestión está por debajo del límite de tiempo para validar su inscripción. En este caso, la clave de validación es todavía válida y que puede enviar un correo electrónico con o sin una clave de validación nueva.<br><br>
Cuando la fecha de registro aparece en rojo, el período de validación ha caducado. En este caso, debe enviar un correo electrónico con la regeneración de la clave de validación si desea que el usuario pueda validar su inscripción.<br><br>
En todos los casos, es posible forzar manualmente la validación.<br><br>
En esta vista, puede:
<br><br>
- Eliminar manualmente las cuentas de <b>(drenaje manual)</b>
<br>
- Generar recordatorio por correo electrónico <b>sin</b> generar una nueva clave. Advertencia: Enviar un recordatorio por correo electrónico dirigido a los visitantes. Esta función no restaura la fecha de registro de visitantes apuntado y el tiempo de espera sigue siendo válido.
<br>- Generar recordatorio por correo electrónico <b>con</b> generar una nueva clave. Advertencia: Enviar un recordatorio por correo electrónico dirigido a los visitantes. Esta función también restablece la fecha de registro de visitantes y específicos, que equivale a prorrogar el plazo para la validación.
<br>
- Presentar una solicitud de registro en espera de validación manual, aunque la fecha de caducidad ha pasado <b>(forzando la validación)</b>.
<br><br>
<b>Funciones Clasificación de la tabla</b>: Puede ordenar los datos mostrados, haga clic en los encabezados de columna. Sostenga la tecla SHIFT para ordenar hasta 4 columnas máxima simultánea.';
$lang['UAM_gtTitle_d'] = 'Cuando el Tracker Ghost est&aacute; habilitado y se inicializa, se encuentra por debajo de la lista de visitantes registrados que no han regresado desde los x d&iacute;as. &quot;x&quot; es el n&uacute;mero de d&iacute;as configurado en la pesta&ntilde;a Configuraci&oacute;n general. Adem&aacute;s, usted encontrar&aacute; una columna que indica si un recordatorio por correo electr&oacute;nico ha sido enviado a los visitantes espec&iacute;ficos. As&iacute;, se puede ver a simple vista y tratar a los visitantes que no han tenido en cuenta el recordatorio.<br><br>
En esta vista, puede:
<br><br>
- Elimine manualmente las cuentas de <b>(drenaje manual)</b>
<br>
- Generar recordatorio por correo electrónico <b>con el cambio de la fecha de última visita</b>. Esto permite dar un comodín a los visitantes específicos. Si el visitante ya ha recibido un recordatorio, nada impide a enviar un nuevo correo que se restablecerá la fecha de la última visita.
<br><br>
<b>Funciones Clasificación de la tabla</b>: Puede ordenar los datos mostrados, haga clic en los encabezados de columna. Sostenga la tecla SHIFT para ordenar hasta 4 columnas máxima simultánea.';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.15.6
$lang['UAM_RedirTitle_d'] = 'Esta opción se redireccionan automáticamente un usuario registrado para su página de personalización sólo en su primera conexión a la galería.<br><br>
Atención: Esta característica no se aplica a todos los usuarios registrados. Las personas con estados &quot;admin&quot;, &quot;webmaster&quot; o &quot;generic&quot; están excluidos.';
// --------- End: New or revised $lang ---- from version 2.15.6


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_mailexcTitle_d'] = 'De forma predeterminada, Piwigo acepta todas las direcciones de correo electrónico en el  formato xxx@yyy.zz. Al habilitar esta opción le permite excluir ciertos dominios en el formato: @[nombreDeDominio].[Domain_extension].<br><br>
Ejemplos :<br>
@hotmail.com -> con exclusión de direcciones *@hotmail.com<br>
@hotmail -> con exclusión de todas las direcciones de *@hotmail*';
$lang['UAM_GTAutoDelTitle'] = 'Mensaje personalizado en cuenta eliminada';
// --------- End: New or revised $lang ---- from version 2.16.0
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Ingrese aquí su confirmación de registro personalizado de asunto del correo electrónico (con o sin generación de la llave). <br>
Por defecto, el campo tiene un texto genérico en Inglés, pero se puede cambiar y utilizar las etiquetas de traducción [lang =?] Del plugin de descripción ampliada si está instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Descripción:<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para insertar el título de la galería.';
$lang['UAM_AdminValidationMail_d'] = 'Cuando un administrador o Webmaster de la galería manualmente confirma manualmente el registro pendiente, una notificación por correo electrónico se envía automáticamente al usuario. Escriba aquí el texto que aparece en este correo electrónico.
<br><br>
Siga personalizando el contenido con etiquetas especiales insertadas:<br>
- <b style=&quot;color: red;&quot;>[username] </b> para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b>para insertar la URL de su galería si se define en las opciones de configuración de Piwigo.
<br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas del plugin Descripción ampliada, si está activo.';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Cuando un administrador o Webmaster de la galería confirma manualmente un registro pendiente, una notificación por correo electrónico se envía automáticamente al usuario. Ingrese aquí su validación personalizada de asunto de correo electrónico.<br>
Por defecto, el campo tiene un texto genérico en Inglés, pero se puede cambiar y utilizar las etiquetas de traducción [lang =?] Del plugin de descripción ampliada si está instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Descripción Extendida:<br>
- <b style=&quot;color: red;&quot;>[nombre de usuario] </b> para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery] </b> para insertar el título de la galería.';
?>