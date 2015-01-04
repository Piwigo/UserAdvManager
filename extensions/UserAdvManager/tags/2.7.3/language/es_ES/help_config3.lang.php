<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '- Gestión automática o manual de los usuarios fantasma <br>
- E-mailing <br>
...';
$lang['UAM_ghosttrackerTitle_d'] = 'Al habilitar esta función permite la gestión de visitantes registrados en función de la frecuencia de sus visitas. 2 modos de funcionamiento son posibles: <br><br>
- Funcionamiento manual: Cuando el tiempo transcurrido entre dos visitas sucesivas se alcanza, el visitante se encuentra en la pestaña "Tracker Ghost" donde se puede reiniciar manualmente el correo electrónico o eliminarlo.
<br><br>
- Gestión automática: Si el tiempo entre dos visitas sucesivas se alcanza, el visitante se elimina automáticamente o se mueve en un grupo y / o el estado de espera. En el segundo caso, una información de correo electrónico puede ser enviado.<br><br><br>
<b style=&quot;color: red;&quot;>IMPORTANTE: Al activar por primera vez esta función, o la reactivación después de un largo período durante el cual se han registrado nuevos visitantes, usted debe inicializar el Tracker Ghost (vea las instrucciones correspondientes en el "Tracker Ghost"). </b>';
$lang['UAM_GTReminder_Subject_d'] = 'Inserte aquí un texto personalizado para el email recordatorio del Ghost Tracker.<br>
Por defecto, el campo tiene un texto genérico en ingles pero puede cambiarlo utilizando las etiquetas de traducción [lang=??] del plugin Extended Description si esta instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Extended Description.<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>';
$lang['UAM_gttextTitle_d'] = 'Escriba aquí el texto que aparecera en el recordatorio por correo electrónico para solicitar al usuario a volver a visitar su galería (NB: El texto precargado al instalar el plugin se dara como ejemplo).
<br><br>
Siga personalizando el contenido con etiquetas de inserción especial:
<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo.';
$lang['UAM_GTAutoTitle_d'] = 'Esta opción permite aplicar reglas para la gestión automatizada de los usuarios fantasmas.
<br> <br> Principio básico: Un usuario que llega al tiempo máximo entre visitas <b> <u> y </ u> </ b> ya ha sido notificado por correo electrónico se considerará caducado. A continuación, puede aplicar reglas automatizadas de procesamiento tales como la eliminación automática de las cuentas caducadas o descenso al restringir el acceso a la galería (cambia automáticamente a un grupo restringido y / o de estado).
<br> <br> La activación de estas automatización se consigue cuando se conectan los usuarios (cualquier usuario!) a la galería.';
$lang['UAM_GTAutoDelTitle_d'] = 'Esto sólo es válido cuando el usuario cuya cuenta ha caducado o la ha suprimido el mismo (raro pero posible). entonces sera desconectado de la galería y redirigido a una página que muestra la supresión de su cuenta y, eventualmente, los motivos de esta supresión.
<br> <br>
Siga personalizando el contenido con etiquetas especiales insertadas: <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería. <br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b>no está disponible aquí porque el usuario en cuestión ha sido borrado.
<br> <br>
Texto para la página de redireccionamiento se pueden introducir en este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo. 
';
$lang['UAM_GTAutoGpTitle_d'] = '<br> <br>
El cambio automático de grupo, el estado o nivel de privacidad es como una degradación de las cuentas involucradas y de trabajo en el mismo principio que el nivel del grupo, el estado o la privacidad de confirmación (ver &quot;Setting confirmations of registration&quot;). Por lo tanto definir un grupo, un estatuto y / o el nivel de degradación a la galería. Si esto ya ha sido definido con el uso de la función de confirmación de registro, puede utilizar el mismo grupo / estado / nivel. 
<br><br>
<b style=&quot;color: red;&quot;>Nota importante: </ b> Si un usuario fantasma todavía no ha sabido nada pasado el límite de tiempo y a pesar de la notificación automática por correo electrónico (si está activado), sera automáticamente eliminado de la base de datos.';
$lang['UAM_GTAutoMailTitle_d'] = 'Cuando una cuenta ha caducado (grupo / estado / nivel de privacidad  degradación del visitante), una información de correo electrónico se pueden enviar para aclarar las razones de este cambio y los medios para recuperar el acceso inicial a la galería.
<br> Para ello, un enlace a la reconfirmación de la inscripción se adjunta a la dirección de correo electrónico (generación automática de una clave nueva confirmación).<b style=&quot;color: red;&quot;> Si el usuario ya ha sido notificado, su cuenta se destruyera automáticamente. </b>
<br><br>
<b style=&quot;color: red;&quot;>Advertencia:. El uso de esta función está íntimamente asociado con la confirmación de registro por el usuario (confirmación por correo) y no puede ser activado sin esta opción </b>';
$lang['UAM_GTAutomail_Subject_d'] = 'Ingrese aquí el asunto del correo electrónico de degradación automática del Rastreador  Ghost . <br>
Por defecto, el campo tiene un texto genérico en Inglés, pero se puede cambiar y utilizar las etiquetas de traducción [lang =?] Del plugin de descripción ampliada si está instalado.
<br> <br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Descripción Extendida: <br>
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
?>