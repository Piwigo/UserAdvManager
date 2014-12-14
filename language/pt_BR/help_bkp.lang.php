<?php
// Backup and tips Options section
$lang['UAM_DumpTitle_d'] = 'Isso permite que você salve toda a configuração do plug-in em um arquivo para que você possa restaurá-lo se algo der errado ( manipulação errada ou antes de uma atualização , por exemplo) . Por padrão, o arquivo é armazenado nesta pasta .. /plugins/UserAdvManager/include/backup/ e é chamado de " UAM_dbbackup.sql " .
<br/><br/>
<b style="color: red;"> Aviso : O arquivo é substituído a cada ação de backup! </b>
<br/><br/>
Às vezes pode ser útil para recuperar o arquivo de backup em seu computador. Por exemplo : para restaurar a outro banco de dados, para terceirizar ou manter múltiplos arquivos salvos . Para fazer isso, marque a caixa para baixar o arquivo .
<br/><br/>
A recuperação a partir desta interface está disponível apenas para o arquivo de backup local ( .. / Plugins / UserAdvManager / include / backup / UAM_dbbackup.sql ) . Arquivo de backup baixado não pode ser restaurado por este caminho. Para fazer isso, por favor, use a ferramenta de gerenciamento de banco de dados dedicado (como o phpMyAdmin para banco de dados MySql ) .
<br/><br/>
<b style="color: red;"> Atenção : Após a restauração , é necessário recarregar a página de administração do plugin para ver as configurações restauradas </b>';
$lang['UAM_tipsTitle_d'] = 'Dicas e vários exemplos de uso';
?>