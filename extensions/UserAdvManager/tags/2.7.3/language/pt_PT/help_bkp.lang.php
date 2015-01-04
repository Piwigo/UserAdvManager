<?php
// Backup and tips Options section
$lang['UAM_DumpTitle_d'] = 'Isto permite salvar toda a configuração da extensão num arquivo para que possa restaurá-la se algo de errado ocorrer( manipulação errada ou antes de uma atualização, por exemplo) . Por defeito, o arquivo é armazenado na pasta ../plugins/UserAdvManager/include / backup/ e é chamado de "UAM_dbbackup.sql" .
<br/><br/>
<b style=&quot;color: red;&quot;> Aviso: O arquivo é substituído a cada ação de backup</b>
<br/><br/>
Por vezes pode ser útil para recuperar o arquivo de backup no seu computador. Por exemplo: Para restaurar noutra base de dados, para terceirizar ou manter salvos arquivos multiplos. Para fazer isto, basta marcar a caixa para descarregar o arquivo.
<br/><br/>
A recuperação a partir desta interface está disponível apenas para o arquivo de backup local (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql) . Arquivo de backup descarregado não pode ser restaurado deste modo.  Para fazer isto, por favor, use a ferramenta de gerenciamento de banco de dados dedicado (como o phpMyAdmin para banco de dados MySql ) .
<br/><br/>
<b style=&quot;color: red;&quot;>Atenção : Após a restauração , é necessário recarregar a página do plugin administração para ver as configurações restauradas </b>';
$lang['UAM_tipsTitle_d'] = 'Dicas e vários exemplos de uso';
?>