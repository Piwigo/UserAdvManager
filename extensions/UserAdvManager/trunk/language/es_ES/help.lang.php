<?php

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
$lang['UAM_confirmmailTitle_d'] = 'Esta opción permite al usuario confirmar una inscripción haciendo clic en un enlace recibido en un correo electrónico enviado por el registro de la galería o el administrador para activar manualmente el registro. <br><br>
En el primer caso, el mensaje incluye una parte fija, con el enlace de activación generada a partir de una clave aleatoria (esta clave posiblemente puede ser regenerado a través de la "confirmación de seguimiento" ficha), y adaptable algunos un texto de bienvenida.
<br><br>
En el segundo caso, <b> <u> no hay clave de envio de correo electrónico de confirmación </ u> </ b>. Los visitantes deben esperar al administrador que valide a través de la pestaña "confirmación de seguimiento" su registro. Se recomienda habilitar la notificación de los administradores durante el registro (ver las opciones de configuración Piwigo) y utilizar la "Información de correo electrónico a los usuarios" para advertir a los nuevos participantes de la necesidad de esperar antes de activación de su cuenta.
<br>
<b style=&quot;color: red;&quot;>Nota:. Las opciones de "Limitación de confirmación de registro" y "recordatorios por correo para confirmar registrado" debe estar desactivados cuando la confirmación manual está activa </b>
<br><br>
Esta opción se usa típicamente con la asignación automática de grupo y / o el estado. Como se confirma o no el registro, es posible asignar el usuario a un grupo diferente, con un acceso más o menos restringido a la galería.';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>PRECAUCIÓN: El uso de los niveles de confidencialidad requiere la confirmación de que ha asignado un nivel de privacidad a las fotos que desee restringir. Consulte la documentación para obtener más detalles Piwigo. </ b> <br><br>
Los niveles de confidencialidad confirmación se utilizan en combinación con la "Confirmación de Registro"';
$lang['UAM_confirmlevelTitle'] = 'Nivel de confidencialidad';
$lang['UAM_USRAutoTitle_d'] = 'La gestión automática de los visitantes sin confirmar se activa cada vez que se conecta a la galería y trabaja de la siguiente manera:
<br><br>
- Eliminación automática de cuentas no confirmadas en el tiempo asignado sin el envío de recuperación automática por correo electrónico -> "Limitar el tiempo de confirmación de registro" <b> <u> está activo </u> </b> "recordatorio por correo electrónico a los solicitantes de registro no confirmado "<b> <u> está inactivo </u> </b>.
<br><br>
- Envío automático de un recordatorio con una nueva generación de confirmación de llave y la eliminación automática de cuentas no confirmadas en el tiempo después de enviar el estímulo ->
"Limitar el periodo de confirmación de registro" <b><u> está activo </u> </b> "recordatorios por correo certificado a confirmar" <b> <u> está activo </u> </b>.';
$lang['UAM_USRAutoMailTitle_d'] = 'Cuando se activa, esta función automáticamente enviara un contenido personalizado en "recordatorio email con la llave generada" a los visitantes que coincidan con los criterios.';
$lang['UAM_USRAutoDelTitle_d'] = 'Esto sólo es válido cuando el usuario cuya cuenta ha eliminado el  mismo desencadenando el mecanismo de supresión (raro pero posible). Entonces estára desconectado de la galería y redirigido a una página que muestra la supresión de su cuenta y, eventualmente, los motivos de esta supresión.
<br> <br>
Siga personalizando el contenido con etiquetas especiales insertadas: <br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Texto para la página de redireccionamiento se pueden introducir en este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo.';
$lang['UAM_Tracking registered users_d'] = 'Esto activa una tabla en la ficha "Seguimiento de usuarios registrados"  donde se encuentran en la galería usuarios registrados con la fecha de la última visita y el tiempo que pasan (en días) desde su última visita. La supervisión es puramente informativo para el administrador de la galería.
';
$lang['UAM_StuffsTitle_d'] = 'Esto permite que un módulo adicional en el PWG Stuffs UAM plugin (si está instalado) para informar a sus visitantes que no han confirmado su inscripción.
<br>
Por favor, consulte la sección <b> trucos y ejemplos de uso </ b> en la parte inferior de esta página para obtener más información.';
$lang['UAM_RejectConnexion_d'] = 'Si se activa, los nuevos usuarios registrados que no han confirmado su inscripción no serán capazes de conectarse a la galería. Serán redirigido a una página especial para informarles de este estado. <br><br>
<b style=&quot;color: red;&quot;>Advertencia - Esta característica sólo funciona en conjunto con los grupos de confirmación! Vea a continuación para configurar los grupos según sea necesario. </b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personaliza aquí tu texto de explicación para informar a los usuarios no confirmados de que no serán capaz de conectarse a la galería hasta que hayan confirmado su inscripción.
<br> <br>
Este campo es compatible con el editor FCK y, para múltiples idiomas, puede usar los botones [lang] del plugin Descripción ampliada si es activo.';
$lang['UAM_PwdResetTitle_d'] = 'Al habilitar esta opción, se agregará una nueva función en el panel de gestión de usuarios de Piwigo (Usuarios> Administrar) para  solicitar la renovación de la contraseña para los usuarios seleccionados. Además, una nueva columna se agrega para mostrar el estado de contraseñas para cada uno de ellos con los siguientes valores: <br>
- La contraseña debe renovarse:. Una solicitud de renovación de contraseña ha sido planeado <br>
- Password renovado:. La contraseña se ha renovado después de una solicitud <br>
- Password Original:. La contraseña original elegido al crear la cuenta y que nunca ha sido requerido para una renovación <br>
Webmaster, cuentas genéricas y su acompañante están excluidos de esta función. <br>
Estos usuarios serán redirigidos automáticamente a su página de personalización en cada una de sus conexiones hasta que cambien su contraseña y un mensaje explícito se muestrara en esta página.';
$lang['UAM_MailInfo_Subject_d'] = 'Inserte aquí un texto personalizado para el email<br>
Por defecto, el campo tiene un texto genérico en ingles pero puede cambiarlo utilizando las etiquetas de traducción [lang=??] del plugin Extended Description si esta instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Extended Description.<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>';
$lang['UAM_HidePasswTitle_d'] = 'Seleccione aquí si desea visualizar la contraseña elegida por el visitante en el correo electrónico de información. Si se habilita la opción, la contraseña aparecerá en texto claro. Si desactiva la contraseña no aparece en absoluto.';
$lang['UAM_GT_MainTitle_d'] = '- Gestión automática o manual de los usuarios fantasma <br>
- E-mailing <br>
...';
$lang['UAM_GTReminder_Subject_d'] = 'Inserte aquí un texto personalizado para el email recordatorio del Ghost Tracker.<br>
Por defecto, el campo tiene un texto genérico en ingles pero puede cambiarlo utilizando las etiquetas de traducción [lang=??] del plugin Extended Description si esta instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Extended Description.<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>';
$lang['UAM_GTAutomail_Text_d'] = 'Introduzca el texto personalizado que también explicar las razones del descenso de categoría, para acompañar el enlace de confirmación. El texto personalizado no es obligatorio pero sí muy recomendable. De hecho, los usuarios no apreciarán recibir un correo electrónico que contiene sólo un único enlace sin más explicaciones. ;-)
<br> <br>
Siga personalizando el contenido con etiquetas especiales insertadas: <br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas del plugin Descripción ampliada, si está activo.';
$lang['UAM_GTAutomail_Subject_d'] = 'Ingrese aquí el asunto del correo electrónico de degradación automática del Rastreador  Ghost . <br>
Por defecto, el campo tiene un texto genérico en Inglés, pero se puede cambiar y utilizar las etiquetas de traducción [lang =?] Del plugin de descripción ampliada si está instalado.
<br> <br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Descripción Extendida: <br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>';
$lang['UAM_GTAutoTitle_d'] = 'Esta opción permite aplicar reglas para la gestión automatizada de los usuarios fantasmas.
<br> <br> Principio básico: Un usuario que llega al tiempo máximo entre visitas <b> <u> y </ u> </ b> ya ha sido notificado por correo electrónico se considerará caducado. A continuación, puede aplicar reglas automatizadas de procesamiento tales como la eliminación automática de las cuentas caducadas o descenso al restringir el acceso a la galería (cambia automáticamente a un grupo restringido y / o de estado).
<br> <br> La activación de estas automatización se consigue cuando se conectan los usuarios (cualquier usuario!) a la galería.';
$lang['UAM_GTAutoMailTitle_d'] = 'Cuando una cuenta ha caducado (grupo / estado / nivel de privacidad  degradación del visitante), una información de correo electrónico se pueden enviar para aclarar las razones de este cambio y los medios para recuperar el acceso inicial a la galería.
<br> Para ello, un enlace a la reconfirmación de la inscripción se adjunta a la dirección de correo electrónico (generación automática de una clave nueva confirmación).<b style=&quot;color: red;&quot;> Si el usuario ya ha sido notificado, su cuenta se destruyera automáticamente. </b>
<br><br>
<b style=&quot;color: red;&quot;>Advertencia:. El uso de esta función está íntimamente asociado con la confirmación de registro por el usuario (confirmación por correo) y no puede ser activado sin esta opción </b>';
$lang['UAM_GTAutoGpTitle_d'] = '<br> <br>
El cambio automático de grupo, el estado o nivel de privacidad es como una degradación de las cuentas involucradas y de trabajo en el mismo principio que el nivel del grupo, el estado o la privacidad de confirmación (ver &quot;Setting confirmations of registration&quot;). Por lo tanto definir un grupo, un estatuto y / o el nivel de degradación a la galería. Si esto ya ha sido definido con el uso de la función de confirmación de registro, puede utilizar el mismo grupo / estado / nivel. 
<br><br>
<b style=&quot;color: red;&quot;>Nota importante: </ b> Si un usuario fantasma todavía no ha sabido nada pasado el límite de tiempo y a pesar de la notificación automática por correo electrónico (si está activado), sera automáticamente eliminado de la base de datos.';
$lang['UAM_GTAutoDelTitle_d'] = 'Esto sólo es válido cuando el usuario cuya cuenta ha caducado o la ha suprimido el mismo (raro pero posible). entonces sera desconectado de la galería y redirigido a una página que muestra la supresión de su cuenta y, eventualmente, los motivos de esta supresión.
<br> <br>
Siga personalizando el contenido con etiquetas especiales insertadas: <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería. <br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b>no está disponible aquí porque el usuario en cuestión ha sido borrado.
<br> <br>
Texto para la página de redireccionamiento se pueden introducir en este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo. 
';
$lang['UAM_DumpTitle_d'] = 'Esto le permite guardar toda la configuración del plug-in en un archivo para poder restaurarlo en caso de que algo salga mal (manipulación incorrecta o antes de una actualización, por ejemplo). De forma predeterminada, el archivo se almacena en la carpeta ../plugins/UserAdvManager/include/backup/ and is called &quot;UAM_dbbackup.sql&quot;.
<br> <br>
<b style=&quot;color: red;&quot;>Advertencia: El archivo se sobrescribe en cada acción de copia de seguridad </ b>
<br> <br>
A veces puede ser útil para recuperar el archivo de copia de seguridad en su ordenador. Por ejemplo: para restaurar a otra base de datos, para exteriorizar o llevar a múltiples archivos de salvar. Para ello, basta con marcar la casilla para descargar el archivo.
<br> <br>
La recuperación de esta interfaz sólo está disponible para el archivo de copia de seguridad local (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). 
El archivo descargado de copia de seguridad no se puede restaurar por este camino. Para ello, utilice la herramienta de gestión de base de datos dedicado (como phpMyAdmin para MySQL base de datos).
<br> <br>
<b style=&quot;color: red;&quot;>Advertencia: Después de la restauración, es necesario volver a cargar la página de administración del plugin para ver los ajustes restaurados </ b>';
$lang['UAM_CustomPasswRetrTitle_d'] = 'De forma predeterminada, cuando un usuario ha perdido su contraseña y selecciona la opción de recuperación, recibe un correo electrónico con su nombre de usuario único y su nueva contraseña.
<br><br>
Aquí, usted puede agregar texto de su elección para ser insertada <b> <u> antes de </ u> </ b> la información estándar.
<br><br>
Siga personalizando el contenido con etiquetas especiales insertadas: <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería. <br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo. <br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas del plugin Descripción ampliada, si está activo.
';
$lang['UAM_ConfirmMail_Subject_d'] = 'Ingrese aquí su confirmación de registro personalizado de asunto del correo electrónico.<br>
Por defecto, el campo tiene un texto genérico en Inglés, pero se puede cambiar y utilizar las etiquetas de traducción [lang =?] Del plugin de descripción ampliada si está instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Descripción Extendida:<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>';
$lang['UAM_validationlimitTitle_d'] = 'Esta opción le permite limitar el número de días que un nuevo usuario pueda confirmar su registro. Una vez transcurrido el plazo, el enlace de confirmación no es válido y no se puede utilizar.
<br><br>
Esta opción se utiliza una vez que la "Confirmación de Registro" esta activada.
<br><br>
Si esta opción y la opción de "recordatorios por correo para confirmar registrado" se activan, nuevas opciones aparecerán más adelante en esta sección para la automatización de la gestión de visitantes sin confirmar.';
$lang['UAM_remailtxt2Title_d'] = 'Escriba aquí el texto de presentación que aparece en el correo electrónico de recordatorio, junto con la confirmación de la nueva clave.
<br><br>
Se recomienda introducir un texto explicativo, de lo contrario el correo electrónico de recordatorio se incluirá sólo el enlace de confirmación. (Nota: El texto precargado al instalar el plugin sólo se da como ejemplo).
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b>para insertar el número de días de validez de la clave de registro (el "Límite de tiempo de confirmación de registro" debe estar habilitado).
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_remailtxt1Title_d'] = 'Escriba aquí el texto de presentación que aparece en el correo electrónico de recordatorio, junto con la confirmación de la nueva clave.
<br><br>
Se recomienda introducir un texto explicativo, de lo contrario el correo electrónico de recordatorio se incluirá sólo el enlace de confirmación. (Nota: El texto precargado al instalar el plugin sólo se da como ejemplo).
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b>para insertar el número de días de validez de la clave de registro (el "Límite de tiempo de confirmación de registro" debe estar habilitado).
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_remailTitle_d'] = 'Esta opción le permite enviar un recordatorio por correo electrónico a los usuarios que no hayan confirmado su inscripción en el tiempo. No tiene ningún efecto una vez que la "Confirmación de Registro" esta activada.
<br><br>
2 tipos de correo electrónico se pueden enviar: Con o sin regeneración de la confirmación de la clave. Según el caso, el contenido de mensajes de correo electrónico se pueden personalizar.
<br><br>
Consulte la pestaña "Seguimiento de donfirmación de ".
<br><br>
Si esta opción y la "Limitación de confirmación en tiempo de registro" se activan, nuevas opciones aparecerán más adelante en esta sección para la automatización de la gestión de visitantes sin confirmar.';
$lang['UAM_miscTitle_d'] = '
- Seguimiento de visitantes registrados <br>
- Pseudo obligatorios para realizar comentarios visitantes <br>
...';
$lang['UAM_infotxtTitle_d'] = 'Escriba aquí el texto de presentación que aparece en la información de correo electrónico personal.
<br><br>
Siga personalizando el contenido con etiquetas de inserción especial:
<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo.';
$lang['UAM_gttextTitle_d'] = 'Escriba aquí el texto que aparecera en el recordatorio por correo electrónico para solicitar al usuario a volver a visitar su galería (NB: El texto precargado al instalar el plugin se dara como ejemplo).
<br><br>
Siga personalizando el contenido con etiquetas de inserción especial:
<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo.';
$lang['UAM_ghosttrackerTitle_d'] = 'Al habilitar esta función permite la gestión de visitantes registrados en función de la frecuencia de sus visitas. 2 modos de funcionamiento son posibles: <br><br>
- Funcionamiento manual: Cuando el tiempo transcurrido entre dos visitas sucesivas se alcanza, el visitante se encuentra en la pestaña "Tracker Ghost" donde se puede reiniciar manualmente el correo electrónico o eliminarlo.
<br><br>
- Gestión automática: Si el tiempo entre dos visitas sucesivas se alcanza, el visitante se elimina automáticamente o se mueve en un grupo y / o el estado de espera. En el segundo caso, una información de correo electrónico puede ser enviado.<br><br><br>
<b style=&quot;color: red;&quot;>IMPORTANTE: Al activar por primera vez esta función, o la reactivación después de un largo período durante el cual se han registrado nuevos visitantes, usted debe inicializar el Tracker Ghost (vea las instrucciones correspondientes en el "Tracker Ghost"). </b>';
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
$lang['UAM_AddURL2Mail_d'] = 'Activando esta opción añadirá la dirección de su galería al final del email generado por el plugin, como una firma.';
?>