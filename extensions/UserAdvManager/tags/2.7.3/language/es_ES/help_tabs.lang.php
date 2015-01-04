<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'Cuando el Tracker Ghost est&aacute; habilitado y se inicializa, se encuentra por debajo de la lista de visitantes registrados que no han regresado desde los x d&iacute;as. &quot;x&quot; es el n&uacute;mero de d&iacute;as configurado en la pesta&ntilde;a Configuraci&oacute;n general. Adem&aacute;s, usted encontrar&aacute; una columna que indica si un recordatorio por correo electr&oacute;nico ha sido enviado a los visitantes espec&iacute;ficos. As&iacute;, se puede ver a simple vista y tratar a los visitantes que no han tenido en cuenta el recordatorio.<br><br>
En esta vista, puede:
<br><br>
- Elimine manualmente las cuentas de <b>(drenaje manual)</b>
<br>
- Generar recordatorio por correo electrónico <b>con el cambio de la fecha de última visita</b>. Esto permite dar un comodín a los visitantes específicos. Si el visitante ya ha recibido un recordatorio, nada impide a enviar un nuevo correo que se restablecerá la fecha de la última visita.
<br><br>
<b>Funciones Clasificación de la tabla</b>: Puede ordenar los datos mostrados, haga clic en los encabezados de columna. Sostenga la tecla SHIFT para ordenar hasta 4 columnas máxima simultánea.';


// Userlist tab
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


// UserManagement tab
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
?>