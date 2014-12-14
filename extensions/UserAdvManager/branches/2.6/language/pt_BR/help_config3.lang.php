<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '- Gerenciamento automático ou manual de usuários fantasmas<br>
- E-mailing<br>
...';
$lang['UAM_ghosttrackerTitle_d'] = 'Também chamado de &quot;Rastreador de Fantasma&quot;, quando esta função estiver ativada, você pode gerenciar seus visitantes, dependendo da freqüência de suas visitas. 2 modos de funcionamento estão disponíveis: <br/><br/>
- Gestão manual: Quando o tempo entre duas visitas é atingido, o visitante aparece na tabela &quot;Rastreador de Fantasma&quot;  onde você será capaz de lembrar os visitantes através do email ou exclui-los. <br/><br/>
- Gestão Automatizada: Quando o período entre duas visitas sucessivas for atingido, o visitante é excluído ou movido para um grupo e/ou estado de espera automaticamente. Neste segundo caso, um e-mail de informação pode ser enviada para ele. <br/><br/>
<b style=&quot;color: red;&quot;> Nota importante: Se você ativar esse recurso pela primeira vez ou se você tiver reativado após um longo período desativado, durante o qual os novos visitantes são registradas, você deve inicializar ou reinicializar o Rastreador de Fantasma (veja as instruções correspondentes na aba &quot;Rastreador de Fantasma&quot; tab).</b>
';
$lang['UAM_GTReminder_Subject_d'] = 'Digite aqui manualmente o assunto do lembrete personalizado do email  Rastreador de Fantasmas. <br/> 
Por padrão, o campo tem um texto genérico em Inglês, mas você pode mudá-lo e usar as tags de tradução [lang =?] do plugin de Descrição Extendida se instalado. 
<br/><br/> 
As seguintes personalizações tags adicionais estão disponíveis sem o uso do plugin Descrição Extendida: <br/> 
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do usuário de destino do e-mail <br/> 
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título de sua galeria <br/>';
$lang['UAM_gttextTitle_d'] = 'Digite o texto que deseja que apareça no lembrete de e-mail para solicitar que o usuário retorne a visitar sua galeria (NB: O texto pré-preenchido com a instalação do plug-in é fornecido como um exemplo).

Personalize mais o conteúdo com tags especiais inseridas: <br/>
- <b style=&quot;color: red;&quot;>[username]</b> para inserir automaticamente o nome do usuário no e-mail de destino<br/>.
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título de sua galeria <br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL de sua galeria se configurado nas opções de configuração do Piwigo <br/>
- <b style=&quot;color: red;&quot;>[days]</b> para inserir o número máximo de dias entre duas visitas.
<br/><br/>
Para usar vários idiomas, você pode usar as tags a descrição do plugin estendida se ele estiver ativo.';
$lang['UAM_GTAutoTitle_d'] = 'Esta opção permite aplicar regras para a gestão automatizada de usuários fantasmas. 
<br/><br/>  Princípio Básico: Um usuário que atinge o máximo de tempo entre as visitas <b> <u> e </u> </b> já foi notificado por e-mail é considerado como expirado. Em seguida, você pode aplicar as regras de processamento automatizadas tais como a exclusão automática de contas expirados ou rebaixamento, restringindo o acesso à galeria (mudar automaticamente para um grupo e/ou estado restrito). 
<br/> O desencadeamento destes automação é alcançado quando conectar os usuários (qualquer usuário!) para a galeria.';
$lang['UAM_GTAutoDelTitle_d'] = 'Isso só é válido quando o usuário cuja conta expirou-se aciona o mecanismo de exclusão (raro, mas possível). ele, em seguida, é desligado da galeria e redirecionado para uma página que mostra a exclusão de sua conta e, possivelmente, as razões para essa exclusão. 
<br/><br/> 
Personalize mais o conteúdo com etiquetas especiais inseridas: <br/> 
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título de sua galeria<br/> 
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL de sua galeria se configurado nas opções de configuração do Piwigo <br/> 
<b style=&quot;color: red;&quot;>[username]</b> não está disponível aqui, porque o usuário foi excluído. 
<<br/><br/>
Texto feito sob encomenda para a página de redirecionamento podem ser inseridos neste campo, que é compatível com o editor FCK e, para multi-idiomas, você pode usar as etiquetas [lang] do plugin Descrição Extendida se estiver ativo.';
$lang['UAM_GTAutoGpTitle_d'] = 'A mudança automática do grupo, estado ou nível de privacidade é como um rebaixamento das contas envolvidas e que trabalham com o mesmo princípio que o grupo, status ou nível de privacidade de confirmação (consulte "Configurar as confirmações de inscrição"). Portanto,  para definir um grupo, estado e/ou nível de rebaixar do acesso à galeria. Se isso já foi definido com o uso da função de confirmação de inscrição, você pode usar o mesmo grupo / status / nível. <br/>
<b style="color: red;"> Nota importante: </ b> Se um usuário fantasma ainda não ouviu falar de fora do prazo e, apesar da notificação automática por e-mail (se habilitado), ele é automaticamente excluído do base de dados.';
$lang['UAM_GTAutoMailTitle_d'] = 'Quando uma conta está expirada (mudança de nível de grupo / status / privacidade rebaixando o visitante), um email pode ser enviado para esclarecer as razões para esta mudança e os meios para recuperar o acesso inicial para a galeria. 
<br/> Para fazer isso, um link para reconfirmação do registo é anexado ao e-mail (geração automática de uma nova chave de confirmação).<b style=&quot;color: red;&quot;> Se o usuário já tenha sido notificado, sua conta é automaticamente destruída. </b> 
<br/> <br/>
<b style=&quot;color: red;&quot;> Aviso: O uso desta função está intimamente associada com a confirmação da inscrição por parte do utilizador (confirmação por e-mail) e não pode ser ativado sem essa opção </b>.';
$lang['UAM_GTAutomail_Subject_d'] = 'Entre aqui com seu assunto de e-mail para o rastreador automatizado.</br>

Por padrão, o campo tem um texto genérico em Inglês que você pode mudar e usar uma etiqueta traduzida [lang = ?] do plugin de descrição extendida se estiver instalado.
<br/><br/>
As seguintes etiquetas personalizadas adicionais estão disponíveis sem uso do plugin de descrição extendida:</br>
- <b style=&quot;color: red;&quot;>[username]</b> para automticamente inserir o  nome ao destino de usuário do email<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>para inserir o título do seu álbum<br/>.';
$lang['UAM_GTAutomail_Text_d'] = 'Entre com o texto personalizado que também explica as razões  para o rebaixamento, que acompanham o link de confirmação. O texto personalizado não é obrigatório, mas é fortemente recomendado. Na verdade, os visitantes não vão apreciar  receber um e-mail contendo apenas um único link, sem maiores explicações. ;-)
<br/><br/>
Mais personalizações de conteúdo com iserção de etiquetas especiais:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> para automaticamente inserir o nome do usuário de destino do email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> para inserir o título do seu álbum<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> para inserir a URL do álbum se configurado nas opções do Piwigo.
<br/><br/>
Para usar múltiplos idiomas você pode usar as etiquetas do plugin de descrição extendido se ele estiver ativado.
';
?>