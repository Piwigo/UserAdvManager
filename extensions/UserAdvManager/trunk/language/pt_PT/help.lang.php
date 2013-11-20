<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2013 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['UAM_AddURL2Mail_d'] = 'Ao ativar esta opção, irá adicionar o URL da sua galeria ao final dos emails gerados pelo plugin, tal como uma assinatura.';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Quando um administrador ou Webmaster da galeria confirmar manualmente um registo pendente, a notificação por email é enviada automaticamente ao utilizador. Insira aqui o assunto da sua validação por email própria.<br>
Por defeito, o campo tem um texto genérico em inglês, mas este pode ser mudado. Utilize as tags de tradução [lang =?] da plugin de descrição estendida, se o mesmo estiver instalado.
<br><br>
As seguintes tags adicionais de modificação estão disponíveis sem o plugin de Descrição Extendida.<br>
- <b style=&quot;color: red;&quot;>[username]</b> para automaticamente inserir o nome do utilizador destinatário do email. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pata inserir o titulo da sua galeria.<br>';
$lang['UAM_DumpTitle_d'] = 'Isto permite salvar toda a configuração da extensão num arquivo para que possa restaurá-la se algo de errado ocorrer( manipulação errada ou antes de uma atualização, por exemplo) . Por defeito, o arquivo é armazenado na pasta ../plugins/UserAdvManager/include / backup/ e é chamado de "UAM_dbbackup.sql" .
<br/><br/>
<b style=&quot;color: red;&quot;> Aviso: O arquivo é substituído a cada ação de backup</b>
<br/><br/>
Por vezes pode ser útil para recuperar o arquivo de backup no seu computador. Por exemplo: Para restaurar noutra base de dados, para terceirizar ou manter salvos arquivos multiplos. Para fazer isto, basta marcar a caixa para descarregar o arquivo.
<br/><br/>
A recuperação a partir desta interface está disponível apenas para o arquivo de backup local (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql) . Arquivo de backup descarregado não pode ser restaurado deste modo.  Para fazer isto, por favor, use a ferramenta de gerenciamento de banco de dados dedicado (como o phpMyAdmin para banco de dados MySql ) .
<br/><br/>
<b style=&quot;color: red;&quot;>Atenção : Após a restauração , é necessário recarregar a página do plugin administração para ver as configurações restauradas </b>






';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Por defeito, quando um utilizador perdeu a senha e seleciona a opção de recuperação, ele recebe um e-mail contendo apenas o seu nome de utilizador e a sua nova senha.
<br/><br/>
Aqui, pode adicionar o texto que preferir para ser inserido <b> <u>antes</u></b> da informação por defeito.
<br/><br/>
Personalizar ainda mais o conteúdo com inserção de etiquetas especiais:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> Para inserir o título da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> Para inserir a  URL da galeria se configurado nas opções de configuração PIWIGO.
<br/><br/>
Para usar vários idiomas, pode usar as etiquetas da extensão descrição alargada se ativa.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Digite aqui o assunto personalizado do e-mail de confirmação de registo.<br/>
Por defeito, o campo tem um texto genérico em Inglês, mas pode alterá-lo e usar as etiquetas de tradução [lang=?] da extensão de descrição Alargada instalada.
<br/><br/>
As etiquetas personalizadas e adicionais, estão disponíveis sem o uso da extensão de Descrição alargada:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> Para autométicamente inserir o nome do utilizador de destino do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> Para inserir o título da galeria.<br/>
';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Digite aqui o assunto do email confirmação do registo personalizado(com ou sem nova geração de chave). <br/>
Por padrão, o campo tem um texto genérico em Inglês, mas pode alterá-lo e usar as etiquetas de tradução [lang =?] da descrição alargada da extensão se instalada.
<br/><br/>
As etiquetas que se seguem, para personalização adicional, estão disponíveis sem o uso da extensão Descrição alargada:<br/>
-. <b Style="color: red;"> [username] </b> para inserir automaticamente o nome do utilizador de destino do e-mail<br/>
-. <b Style="color: red;"> [mygallery] </b> para inserir o título da galeria<br/>';
$lang['UAM_AdminValidationMail_d'] = 'Quando um administrador ou Webmaster da galeria confirmar manualmente um registo pendente, um e-mail notificação é enviado automaticamente para o utilizador. Digite aqui o texto que aparece neste email.
<br/><br/>
Personalizar ainda mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automáticamente inserir o nome do destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> Para inserir o título da sua galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> Para inserir a URL se definido nas opções de configuração PIWIGO.
<br/><br/>
Para usar vários idiomas, pode usar as etiquetas da descrição alargada da extensão se ativa.






';
?>