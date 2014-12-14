<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '- Gerênciamento Automatico ou manual de utilizadores<br/>
- E-mailing<br/>
...';
$lang['UAM_ghosttrackerTitle_d'] = 'Também chamado de &quot;Rastreador de Fantasmas&quot;, quando esta função está ativada, você pode gerenciar seus visitantes, dependendo da freqüência de suas visitas. Estão disponíveis 2 modos de funcionamento: <br/><br/>
- Gestão manual: Quando o tempo entre duas visitas é atingido, o visitante aparece na tabela &quot;Rastreador de Fantasmas&quot;, onde, através de email poderá lembra-lo ou apaga-lo <br/><br/>.
- Gestão Automatizada: Quando o período entre duas visitas sucessivas for atingido, o visitante é excluído ou movido automaticamente para um grupo no  estado de espera. Neste segundo caso, um e-mail informação pode ser-lhe enviado. <br/><br/>
<b style=&quot;color: red;&quot;>Nota importante: Se ativar este recurso pela primeira vez ou o reativar após um longo período, durante o qual os novos visitantes foram registados, deve inicializar ou reinicializar o &quot;Rastreador de Fantasmas&quot;,  (veja as instruções correspondentes no separador &quot;Rastreador de Fantasmas&quot;).<br/>';
$lang['UAM_GTReminder_Subject_d'] = 'Digite aqui manualmente o assunto do email informação personalizado do Rastreador fantasma. <br/>
Por defeito, o campo tem um texto genérico em Inglês, mas você pode alterá-lo e usar as etiquetas de tradução [lang =?] Da extensão Descrição Alargada se instalada.
<br/>
As seguintes personalizações adicionais estão disponíveis sem o uso da extensão Descrição alargada:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automaticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da galeria.<br/>';
$lang['UAM_gttextTitle_d'] = 'Digite o texto que deseja apareça no lembrete de e-mail para solicitar ao utilizador para visitar sua galeria de imediato. (NB: O texto pré-preenchido com a instalação da extensão é fornecido como exemplo).
<br/><br/
Personalize mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automáticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL da galeria se ativado nas opções configuração do Piwigo.<br/>
- <b style=&quot;color: red;&quot;>[days]</b> para inserir o número máximo de dias entre duas visitas.
<br/><br/>
Para multiplos idiomas, poderá usar as etiquetas da extensão Descrição alargada se estiver ativada.';
$lang['UAM_GTAutoTitle_d'] = 'Esta opção permite aplicar regras para a gestão automatizada de utilizadores fantasmas.
<br/><br/>Princípio Básico: Um utilizador que atinge o máximo de tempo entre visitas <b><u>e</u></b> já foi notificado por e-mail é considerado como expirado. Em seguida, você pode aplicar as regras de processamento automatizadas tais como a exclusão automática de contas expiradas ou rebaixamento, restringindo o acesso à galeria (mudar automaticamente para um grupo restrito e/ou estado).
<br/><br/>O desencadeamento desta automatização é alcançado quando ligar os utilizadores (qualquer utilizador!) à galeria.';
$lang['UAM_GTAutoDelTitle_d'] = 'Isto só é válido quando o utilizador, de cuja conta expirou, aciona o mecanismo eliminar, (raro, mas possível). Então,é desligado da galeria e redirecionado para uma página que mostra a eliminação da sua conta e, possivelmente, as razões para esta eliminação.
<br/><br/>
Personalize mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da sua galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> Para inserir a URL da galeria desde que definido nas opções de configuração da galeria.<br/>
<b style=&quot;color: red;&quot;>[username]</b> não é existente aqui porque o utilizador respetivo foi apagado.
<br/><br/>
Texto personalizado para a página de redirecionamento pode ser inserido neste campo que é compatível com o editor FCK e, para multi-idiomas, pode usar as etiquetas [lang] da extensão descrição alargada se ativa.';
$lang['UAM_GTAutoGpTitle_d'] = 'A mudança automática do grupo, estado ou nível de privacidade é como um rebaixamento das contas envolvidas e que trabalham com o mesmo princípio do grupo, status ou nível de privacidade de confirmação (ver &quot;Setting confirmations of registration&quot;). Portanto, para ser definido um grupo, estado e / ou nível de rebaixar o acesso à galeria. Se isto já foi definido com o uso da função confirmação de inscrição, você pode usar o mesmo grupo/status/nivel. <br/>
<b style=&quot;color: red;&quot;>Nota importante: </b> Se um utilizador fantasma não ouviu falar em fora de prazo e da notificação automática por e-mail (se ativada), ele é automaticamente apagado da base de dados.';
$lang['UAM_GTAutoMailTitle_d'] = 'Quando uma conta está expirada (mudança de nível de grupo / status / nível de privacidade, rebaixando o visitante), um email informativo pode ser enviado para esclarecer as razões desta alteração e os meios para recuperar o acesso inicial à galeria.
<br/> Para fazer isso, um link para reconfirmação do registo é anexado ao e-mail (geração automática de uma nova chave de confirmação).).<b style=&quot;color: red;&quot;> Se o utilizador já haja sido notificado, a sua conta é automaticamente destruída. <br/><br/>
<b style=&quot;color: red;&quot;>Aviso: O uso desta função está intimamente associado com a confirmação da registo por parte do utilizador (confirmação por e-mail) e não pode ser ativada sem esta opção</b>.';
$lang['UAM_GTAutomail_Subject_d'] = 'Digite aqui o assunto do seu email automático personalizado.<br/>
Por defeito, o campo tem um texto genérico em Inglês, mas você pode alterá-lo e usar as etiquetas de tradução [lang =?] Da extensão  Descrição Alargada se instalada.
<br/><br/>
As seguintes etiquetas de personalização estão disponíveis sem o uso da extensão Descrição alargada:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> para auomaticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o titulo da sua galeria.<br/>';
$lang['UAM_GTAutomail_Text_d'] = 'Digite o texto personalizado que também explica as razões para o rebaixamento, para acompanhar o link de confirmação. O texto personalizado não é obrigatório, mas fortemente recomendado. Na verdade, os visitantes não apreciam receber um e-mail contendo apenas um link, sem mais explicações. ;-)
<br/><br/>
Personalize mais o conteúdo com inserção de etiquetas especiais: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automaticamente inserir o nome do utilizador destinatário do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título da galeria.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL da galeria se definido nas opções de configuração do Piwigo.
<br/><br/>
Para usar vários idiomas, você pode usar as etiquetas da extensão Descrição Alargada desde que ativa.';
?>