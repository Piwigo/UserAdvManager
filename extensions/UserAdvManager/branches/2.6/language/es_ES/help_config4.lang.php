<?php
// Misc Options section
$lang['UAM_miscTitle_d'] = '
- Seguimiento de visitantes registrados <br>
- Pseudo obligatorios para realizar comentarios visitantes <br>
...';
$lang['UAM_infomailTitle_d'] = 'Esta opción permite automatizar el envío de un correo electrónico y la información a un usuario cuando cambie su contraseña o dirección de correo electrónico en su perfil.<br><br>
El contenido del mensaje enviado se compone de una parte personalizable para introducir una nota de bienvenida, y una parte fija que indica el inicio de sesión, contraseña y dirección de correo electrónico del usuario.';
$lang['UAM_HidePasswTitle_d'] = 'Seleccione aquí si desea visualizar la contraseña elegida por el visitante en el correo electrónico de información. Si se habilita la opción, la contraseña aparecerá en texto claro. Si desactiva la contraseña no aparece en absoluto.';
$lang['UAM_MailInfo_Subject_d'] = 'Inserte aquí un texto personalizado para el email<br>
Por defecto, el campo tiene un texto genérico en ingles pero puede cambiarlo utilizando las etiquetas de traducción [lang=??] del plugin Extended Description si esta instalado.
<br><br>
Las siguientes etiquetas de personalizaciones adicionales están disponibles sin necesidad de utilizar el plugin Extended Description.<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>';
$lang['UAM_infotxtTitle_d'] = 'Escriba aquí el texto de presentación que aparece en la información de correo electrónico personal.
<br><br>
Siga personalizando el contenido con etiquetas de inserción especial:
<br>
- <b style=&quot;color: red;&quot;>[username]</b>para insertar automáticamente el nombre del usuario de destino del correo electrónico.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo.
<br><br>
Este campo que es compatible con el Editor FCK y, para multi-idiomas, puede utilizar las etiquetas [lang] de la descripción Extended Plugin si está activo.';
$lang['UAM_AddURL2Mail_d'] = 'Activando esta opción añadirá la dirección de su galería al final del email generado por el plugin, como una firma.';
$lang['UAM_Tracking registered users_d'] = 'Esto activa una tabla en la ficha "Seguimiento de usuarios registrados"  donde se encuentran en la galería usuarios registrados con la fecha de la última visita y el tiempo que pasan (en días) desde su última visita. La supervisión es puramente informativo para el administrador de la galería.
';
$lang['UAM_RedirTitle_d'] = 'Esta opción se redireccionan automáticamente un usuario registrado para su página de personalización sólo en su primera conexión a la galería.<br><br>
Atención: Esta característica no se aplica a todos los usuarios registrados. Las personas con estados &quot;admin&quot;, &quot;webmaster&quot; o &quot;generic&quot; están excluidos.';
$lang['UAM_CustomPasswRetrTitle_d'] = 'De forma predeterminada, cuando un usuario ha perdido su contraseña y selecciona la opción de recuperación, recibe un correo electrónico con su nombre de usuario único y su nueva contraseña.
<br><br>
Aquí, usted puede agregar texto de su elección para ser insertada <b> <u> antes de </ u> </ b> la información estándar.
<br><br>
Siga personalizando el contenido con etiquetas especiales insertadas: <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para insertar el título de la galería. <br>
- <b style=&quot;color: red;&quot;>[myurl]</b> para insertar la URL de su galería si esta en las opciones de configuración de Piwigo. <br><br>
Para utilizar varios idiomas, puede utilizar las etiquetas del plugin Descripción ampliada, si está activo.
';
?>