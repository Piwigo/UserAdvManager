<?php
global $lang;

$lang['UAM_restricTitle'] = 'Restricciones para el registro';
$lang['UAM_restricTitle_d'] = '
- Entre mayúsculas y minúsculas<br>
- Excluyendo los caracteres<br>
- Ejecución Contraseña<br>
- Exclusión de dominios de correo electrónico<br>
...
';
$lang['UAM_confirmTitle'] = 'Confirmaciones y validaciones de registro';
$lang['UAM_confirmTitle_d'] = '
- Información por correo electrónico para el usuario<br>
- Confirmación de registro<br>
- Grupos o estatutos de validación<br>
- Plazo para la validación de registro<br>
- Recuerde a los usuarios no validados<br>
...
';
$lang['UAM_miscTitle'] = 'Registros seguido y otras opciones';
$lang['UAM_miscTitle_d'] = '
- Gestión de Espíritu visitantes<br>
- Seguimiento de usuarios registrados<br>
- Nickname obligatorio para los comentarios<br>
...
';
$lang['UAM_casenTitle'] = 'Nombres de usuario: mayúsculas y minúsculas';
$lang['UAM_casenTitle_d'] = 'De forma predeterminada, Piwigo es insensible: letras may&uacute;sculas y min&uacute;sculas se consideran letras diferentes en los nombres elegidos por los usuarios en el registro. Por lo tanto, &quot;foo&quot;, &quot;foo&quot; y &quot;foo&quot; puede ser de 3 diferentes usuarios.<br><br>
Al habilitar esta opci&oacute;n permite considerar todas las opciones en caso de &quot;foo&quot; como uno de los usuarios. Si &quot;foo&quot; ya existe, la creaci&oacute;n de un nuevo usuario &quot;Foo&quot; ser&aacute; rechazada.<br><br>
<b style=&quot;color: red;&quot;>Advertencia: Esta opción no tiene efecto sobre los nombres de usuario creadas antes de su activación.</b>';
$lang['UAM_carexcTitle'] = 'Nombres de usuario: Excluyendo los caracteres';
$lang['UAM_carexcTitle_d'] = 'Puede ser interesante para prohibir ciertos caracteres en nombres de usuario (por ejemplo, se niegan los inicios de sesi&oacute;n que contiene &quot;@&quot;). Esta opci&oacute;n permite excluir caracteres o secuencia de caracteres, los acontecimientos.<br>
Nota: La opción también se puede excluir palabras completas.
<br><br>
<b style=&quot;color: red;&quot;>Advertencia: Esta opción no tiene efecto sobre los nombres de usuario creadas antes de su activación.</b>';
$lang['UAM_passwTitle'] = 'Fortalecimiento del nivel de seguridad de las contraseñas';
$lang['UAM_passwTitle_d'] = 'Al habilitar esta opción hace obligatoria la incautación de una contraseña en el registro, y requiere la contraseña elegida por el usuario para cumplir un nivel mínimo de complejidad. Si el umbral no se alcanza, la puntuación obtenida y la puntuación mínima que deben alcanzarse se muestran, junto con recomendaciones para aumentar el valor de esta puntuación.<br><br>
No hay campo de prueba para medir la complejidad de una contraseña, y puede darse el lujo de tener una idea de la puntuación para definir la costumbre complejo.<br><br>
Nota: La puntuación de una contraseña se calcula en función de varios parámetros: longitud, tipo de caracteres utilizados (letras, números, mayúsculas, minúsculas, caracteres especiales). Una puntuación por debajo de 100 se considera bajo, de 100 a 500, la complejidad es la media, más allá de 500, la seguridad es excelente.';
$lang['UAM_passwtestTitle'] = 'Prueba de la complejidad de la contraseña';
$lang['UAM_passwtestTitle_d'] = 'Introduzca la contrase&ntilde;a para poner a prueba y luego haga clic en &quot;c&aacute;lculo del puntaje&quot; para ver el resultado.';
$lang['UAM_passwadmTitle'] = 'Aplicando a los administradores';
$lang['UAM_passwadmTitle_d'] = 'Un administrador puede crear una cuenta de usuario, con o sin aplicación de la regla de la complejidad informática.<br><br>
Nota: Si la cuenta de usuario creada quiere cambiar la contraseña y el fortalecimiento de las contraseñas de los usuarios está activo, la misma estará sujeta a la norma establecida.';
$lang['UAM_mailexcTitle'] = 'Exclusión de dominios de correo electrónico';
$lang['UAM_mailexcTitle_d'] = 'De forma predeterminada, Piwigo acepta todas las direcciones de correo electrónico en el xxx@yyy.zz formato. Al habilitar esta opción le permite excluir ciertos dominios en el formato: @[nombreDeDominio].[Domain_extension].<br><br>
Ejemplos :<br>
@hotmail.com -> con exclusión de direcciones *@hotmail.com<br>
@hotmail -> con exclusión de todas las direcciones de *@hotmail*';
$lang['UAM_infomailTitle'] = 'Información por correo electrónico para el usuario';
$lang['UAM_infomailTitle_d'] = 'Esta opción permite automatizar el envío de un correo electrónico la información a un usuario cuando se registra o cuando cambie su contraseña o dirección de correo electrónico en su perfil.<br><br>
El contenido del mensaje enviado se compone de una parte personalizable para introducir una nota de bienvenida poco y una parte fija que indica el inicio de sesión, contraseña y dirección de correo electrónico del usuario.';
$lang['UAM_infotxtTitle'] = 'Personalización del correo electrónico de información';
$lang['UAM_infotxtTitle_d'] = 'Introduzca el texto de introducción que desea que aparezca en el correo electrónico de la información.<br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas para el plugin Extended description si está activo.<br><br>
<b style=&quot;color: red;&quot;>Texto de la modificaci&oacute;n s&oacute;lo est&aacute; disponible si est&aacute; activado el &quot;correo electr&oacute;nico de la informaci&oacute;n&quot;.</b>';
$lang['UAM_confirmmailTitle'] = 'Confirmación de registro';
$lang['UAM_confirmmailTitle_d'] = 'Esta opción permite a exigir a un usuario para validar su registro haciendo clic en un enlace recibido en un correo electrónico enviado en el momento de la inscripción.<br><br>
El correo electr&oacute;nico se compone de una parte personalizable para introducir una nota de bienvenida poco y una parte fija que contiene el enlace de activaci&oacute;n que se genera a partir de una clave aleatoria que posiblemente puede regenerar a trav&eacute;s de &quot;Seguimiento de las Validaciones&quot;<br><br>
Esta opci&oacute;n se utiliza generalmente con la asignaci&oacute;n autom&aacute;tica de grupo y / o estatutos. Por ejemplo, un usuario que no ha validado su registro se encuentra en un grupo espec&iacute;fico de usuarios (con o sin restricciones a la galer&iacute;a) mientras que un usuario que haya validado su registro se encuentra en un &quot;normal&quot; del grupo.';
$lang['UAM_confirmtxtTitle'] = 'Personalización del mensaje recordatorio';
$lang['UAM_confirmtxtTitle_d'] = 'Introduzca el texto de introducción que desea que aparezca en el correo electrónico de confirmación de registro.<br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas para el plugin Extended description si está activo.<br><br>
<b style=&quot;color: red;&quot;>La modificación de texto s&oacute;lo est&aacute; disponible si est&aacute; habilitada la &quot;Confirmaci&oacute;n de registro&quot;.</b>';
$lang['UAM_confirmgrpTitle'] = 'Grupos de validación';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ADVERTENCIA: El uso de grupos de validación requiere que se haya creado al menos un grupo de usuarios y se define &quot;por defecto&quot; en la gestión de Piwigo de grupos de usuarios.</b><br><br>
Los grupos est&aacute;n validados para su uso en relaci&oacute;n con la &quot;confirmaci&oacute;n de registro&quot;';
$lang['UAM_confirmstatTitle'] = 'Estatutos de validación';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ADVERTENCIA: El uso de la validaci&oacute;n de estado requiere que se haya mantenido el &quot;Invitado&quot; del usuario con la configuraci&oacute;n predeterminada (como usuario de plantilla) para los nuevos registrados. Nota Puede establecer cualquier otro usuario como una plantilla para nuevos registrados. Por favor, consulte la documentaci&oacute;n de la Piwigo para obtener m&aacute;s detalles.</b><br><br>
Los estatutos son validados para su uso en relaci&oacute;n con la &quot;confirmaci&oacute;n de registro&quot;';
$lang['UAM_validationlimitTitle'] = 'Plazo para la validación de registro limitado';
$lang['UAM_validationlimitTitle_d'] = 'Esta opción permite limitar la validez de la validación de claves de correo electrónico enviado a los solicitantes de registro nuevo. Los visitantes que se registren tendrán x días de tiempo para validar su inscripción. Después de este período en el enlace de validación expira.<br><br>
Esta opci&oacute;n se utiliza en conjunci&oacute;n con la &quot;confirmaci&oacute;n de registro&quot;';
$lang['UAM_remailTitle'] = 'Recuerde a los usuarios no validados';
$lang['UAM_remailTitle_d'] = 'Esta opci&oacute;n le permite enviar un recordatorio por correo electr&oacute;nico a los usuarios registrados, pero no han validado su inscripci&oacute;n a tiempo. Por lo tanto, trabaja en conjunto con la &quot;confirmaci&oacute;n de registro&quot;<br><br>
2 tipos de mensajes de correo electrónico se pueden enviar: Con o sin regeneración de la clave de validación. Según proceda, el contenido de los mensajes de correo electrónico se pueden personalizar.<br><br>
Consulte la ficha &quot;Seguimiento de las Validaciones&quot;.';
$lang['UAM_remailtxt1Title'] = 'Recordatorio por correo electrónico con la llave generada';
$lang['UAM_remailtxt1Title_d'] = 'Introduzca el texto de introducción que desea que aparezca en el recordatorio por correo electrónico, además de la clave de validación regenerado.<br><br>
Si se deja en blanco, el aviso de correo electrónico sólo incluirá el enlace de validación. Por tanto, es muy recomendable tomar un pequeño texto explicativo. (Nota: El texto pre-llenado con la instalación del plugin se proporciona como un ejemplo)<br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas para el plugin Extended description si está activo.<br><br>
<b style=&quot;color: red;&quot;>La modificaci&oacute;n de texto s&oacute;lo est&aacute; disponible si &quot;Recordar a los usuarios no validados&quot; est&aacute; activado.</b>';
$lang['UAM_remailtxt2Title'] = 'Recordatorio por correo electrónico sin la llave generada';
$lang['UAM_remailtxt2Title_d'] = 'Introduzca el texto de introducción que desea que aparezca en el recordatorio por correo electrónico sin una clave de validación regenerado.<br><br>
Si se deja en blanco, el aviso de correo electrónico estará vacía. Por tanto, es muy recomendable tomar un pequeño texto explicativo. (Nota: El texto pre-llenado con la instalación del plugin se proporciona como un ejemplo)<br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas para el plugin Extended description si está activo.<br><br>
<b style=&quot;color: red;&quot;>La modificaci&oacute;n de texto s&oacute;lo est&aacute; disponible si &quot;Recordar a los usuarios no validados&quot; est&aacute; activado.</b>';
$lang['UAM_ghosttrackerTitle'] = 'Gestión de Espíritu visitantes';
$lang['UAM_ghosttrackerTitle_d'] = 'Tambi&eacute;n se llama &quot;Ghost Tracker&quot;, cuando se activa esta funci&oacute;n, usted puede manejar sus visitantes en funci&oacute;n de la frecuencia de sus visitas. Cuando el tiempo entre el 2 de visitas es llegar, el visitante en cuesti&oacute;n aparece en el &quot;Ghost Tracker&quot; mesa donde usted ser&aacute; capaz de recordar a los visitantes a trav&eacute;s de correo electr&oacute;nico.<br><br>
<b style=&quot;color: red;&quot;>Si habilita esta función por primera vez o ha reactivado después de un largo período durante el cual los visitantes fuera de nuevo se ha registrado, usted debe inicializar o restablecer el Rastreador de Ghost.</b>';
$lang['UAM_gttextTitle'] = 'Mensaje recordatorio de Ghost Tracker';
$lang['UAM_gttextTitle_d'] = 'Introduzca el texto que desea que aparezca en el recordatorio por correo electrónico para pedir al usuario volver a visitar su galería (Nota: El texto pre-llenado con la instalación del plugin se presenta como un ejemplo).<br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas para el plugin Extended description si está activo.<br><br>
<b style=&quot;color: red;&quot;>La modificaci&oacute;n de texto s&oacute;lo est&aacute; disponible si est&aacute; habilitada &quot;Gesti&oacute;n de Esp&iacute;ritu visitantes&quot;.</b>';
$lang['UAM_lastvisitTitle'] = 'Seguimiento de usuarios registrados';
$lang['UAM_lastvisitTitle_d'] = 'Esto activa una tabla de &quot;Seguimiento de los usuarios&quot; ficha de matriculaci&oacute;n de los usuarios que aparecen en la galer&iacute;a y la fecha de su &uacute;ltima visita y el tiempo (en d&iacute;as) desde su &uacute;ltima visita. El seguimiento es meramente informativo para el administrador de la galer&iacute;a.';
$lang['UAM_commentTitle'] = 'Nickname obligatorio para los comentarios de los huéspedes';
$lang['UAM_commentTitle_d'] = 'Si &quot;Comentarios a la autoridad Todos&quot; est&aacute; activo (a los visitantes no registrados para enviar comentarios), esta opci&oacute;n permite forzar el visitante no registrado para ingresar un apodo que se acepta el comentario.';
$lang['UAM_tipsTitle'] = 'Consejos y ejemplos';
$lang['UAM_tipsTitle_d'] = 'Consejos y diversos ejemplos de uso de';
$lang['UAM_userlistTitle'] = 'Seguimiento de los usuarios';
$lang['UAM_usermanTitle'] = 'Seguimiento de las Validaciones';
$lang['UAM_usermanTitle_d'] = 'Al limitar el plazo de inscripción está habilitada, podrás encontrar más adelante la lista de usuarios cuya validación de registro es de esperar, <b style=&quot;text-decoration: underline;&quot;>si o no</b> que están en el tiempo para validar.<br><br>
La fecha de registro se muestra en verde cuando el usuario en cuestión está por debajo del límite de tiempo para validar su inscripción. En este caso, la clave de validación es todavía válido y que puede enviar un correo electrónico con o sin una clave de validación nueva.<br><br>
Cuando la fecha de registro aparece en rojo, el período de validación ha caducado. En este caso, debe enviar un correo electrónico con la regeneración de la clave de validación si desea que el usuario pueda validar su inscripción.<br><br>
En todos los casos, es posible forzar manualmente la validación.<br><br>
En esta vista, puede:
<br><br>
- Elimine manualmente las cuentas de <b>(drenaje manual)</b>
<br>
- Generar recordatorio por correo electrónico <b>sin</b> generar una nueva clave. Advertencia: Enviar un recordatorio por correo electrónico dirigido a los visitantes. Esta función no se restaura la fecha de registro de visitantes objetivo y el tiempo de espera sigue siendo válida.
<br>- Generar recordatorio por correo electrónico <b>con</b> generar una nueva clave. Advertencia: Enviar un recordatorio por correo electrónico dirigido a los visitantes. Esta función también se restablece la fecha de registro de visitantes y específicos, que equivale a prorrogar el plazo para la validación.
<br>
- Presentar una solicitud de registro en espera de validación manual, aunque la fecha de caducidad ha pasado <b>(forzando la validación)</b>.';
$lang['UAM_gtTitle'] = 'Gestión de los espíritu visitantes';
$lang['UAM_gtTitle_d'] = 'Cuando la Tracker Ghost est&aacute; habilitado y se inicializa, se encuentra por debajo de la lista de visitantes registrados que no han regresado desde los x d&iacute;as. &quot;x&quot; es el n&uacute;mero de d&iacute;as configurado en la pesta&ntilde;a Configuraci&oacute;n general. Adem&aacute;s, usted encontrar&aacute; una columna que indica si un recordatorio por correo electr&oacute;nico ha sido enviado a los visitantes espec&iacute;ficos. As&iacute;, se puede ver a simple vista y tratar a los visitantes que no han tenido en cuenta el recordatorio.<br><br>
En esta vista, puede:
<br><br>
- Elimine manualmente las cuentas de <b>(drenaje manual)</b>
<br>
- Generar recordatorio por correo electrónico <b>con el cambio de la fecha última visita</b>. Esto permite dar un comodín a los visitantes específicos. Si el visitante ya ha recibido un recordatorio, nada impide a resentir un nuevo correo que se restablecerá de nuevo, de hecho, la fecha de la última visita.';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle'] = 'Confirmaci&oacute;n de registro por los administradores';
$lang['UAM_adminconfmailTitle_d'] = 'Puede desactivar esta validaci&oacute;n s&oacute;lo para las cuentas de usuario creadas por el administrador de Piwigo a trav&eacute;s de la interfaz de gesti&oacute;n de los usuarios.<br><br>
Al activar esta opci&oacute;n, la validaci&oacute;n del email de registro ser&aacute; enviado a cada usuario creado por el administrador.<br><br>
Al deshabilitar esta opci&oacute;n (por defecto), s&oacute;lo la informaci&oacute;n que se env&iacute;e (si &quot;Informaci&oacute;n por correo electr&oacute;nico para el usuario&quot; est&aacute; activado).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.14.1
$lang['UAM_userlistTitle_d'] = 'Esta p&aacute;gina es para informaci&oacute;n al administrador. Se muestra una lista de todos los usuarios registrados en la galer&iacute;a que indique la fecha y el n&uacute;mero de d&iacute;as transcurridos desde su &uacute;ltima visita. La lista est&aacute; ordenada por orden ascendente del n&uacute;mero de d&iacute;as.
<br><br>
<b><u>S&oacute;lo cuando el Ghost Tracker est&aacute; activo</u></b>, el n&uacute;mero de d&iacute;as sin una visita aparece como el c&oacute;digo de color siguientes, seg&uacute;n el m&aacute;ximo establecido en las opciones de Ghost Tracker:
<br>
- <b style=&quot;color: lime;&quot;>Verde</b> : Cuando el usuario ha visitado la galer&iacute;a de <b style=&quot;color: lime;&quot;><u>menos del 50%</u></b> de la m&aacute;xima indicada en el Ghost Tracker.<br>
- <b style=&quot;color: orange;&quot;>Naranja</b> : Cuando el usuario ha visitado la galer&iacute;a de <b style=&quot;color: orange;&quot;><u>entre 50% y 99%</u></b> de la m&aacute;xima indicada en el Ghost Tracker.<br>
- <b style=&quot;color: red;&quot;>Rojo</b> : Cuando el usuario ha visitado la galer&iacute;a de <b style=&quot;color: red;&quot;><u>por más de 100%</u></b> de la m&aacute;xima indicada en el Ghost Tracker. <b><u>En este caso, el usuario tambi&eacute;n debe aparecer en el cuadro Ghost Tracker.</u></b><br>
<br>
Ejemplo :
<br>
El per&iacute;odo m&aacute;ximo de Ghost Tracker est&aacute; configurado para 100 d&iacute;as.
<br>
Un usuario aparecer&aacute; en verde si visit&oacute; la galer&iacute;a de menos de 50 d&iacute;as, en naranja si su &uacute;ltima visita tuvo lugar entre el 50 y 99 d&iacute;as y el rojo durante 100 d&iacute;as o m&aacute;s.
<br><br>
<b>NOTA</b> : La lista no muestra que no han validado su registro (si la opci&oacute;n de validar el registro est&aacute; activado). Estos usuarios son administrados despu&eacute;s de una manera especial en &quot;Seguimiento de las Validaciones&quot; ficha.';
// --------- End: New or revised $lang ---- from version 2.14.1
?>