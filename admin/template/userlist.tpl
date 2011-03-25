{known_script id="jquery" src=$ROOT_URL|@cat:"themes/default/js/jquery.packed.js"}
{known_script id="jquery.cluetip" src=$ROOT_URL|@cat:"themes/default/js/plugins/jquery.cluetip.packed.js"}

{html_head}<link rel="stylesheet" type="text/css" href="{$UAM_PATH}admin/template/uam.css">{/html_head}

<script type="text/javascript">
jQuery().ready(function()
{ldelim}
  jQuery('.cluetip').cluetip(
  {ldelim}
    width: 600,
    splitTitle: '|'
  {rdelim});
{rdelim});
</script>

<div class="titrePage">
  <h2>{'Title_Tab'|@translate} {$UAM_VERSION}<br>{'SubTitle5'|@translate}</h2>
</div>

<form method="post" action="" class="general">
  <fieldset>
  	<legend class="cluetip" title="{'UAM_userlistTitle'|translate}|{'UAM_userlistTitle_d'|translate}">{'UserList_Title'|@translate}</legend>

    {if !empty($navbar) }{include file='navigation_bar.tpl'|@get_extent:'navbar'}{/if}
      <table class="table2" width="97%" summary="">
  			<thead>
    			<tr class="throw">
      			<td>{'Username'|@translate}</td>
      			<td>{'Email address'|@translate}</td>
            <td>{'LastVisit_Date'|@translate}</td>
            <td>{'Nb_Days'|@translate}</td>
    			</tr>
  			</thead>

        {foreach from=$users item=user name=users_loop}
          <tr class="{if $smarty.foreach.users_loop.index is odd}row1{else}row2{/if}">
            <td><label for="selection-{$user.ID}">{$user.USERNAME}</label></td>
            <td>{$user.EMAIL}</td>
            <td style="text-align:center;">{$user.LASTVISIT}</td>
{if $user.DISPLAY == 'green'}
            <td style="color:lime;text-align:center;">{$user.DAYS}</td>
{elseif $user.DISPLAY == 'orange'}
            <td style="color:orange;text-align:center;">{$user.DAYS}</td>
{elseif $user.DISPLAY == 'red'}
            <td style="color:red;text-align:center;">{$user.DAYS}</td>
{else}
            <td style="text-align:center;">{$user.DAYS}</td>
{/if}
            {foreach from=$user.plugin_columns item=data}
              <td>{$data}</td>
            {/foreach}    			
          </tr>
        {/foreach}
      </table>

      {if !empty($navbar) }{include file='navigation_bar.tpl'|@get_extent:'navbar'}{/if}
    	<br>
  </fieldset>
</form>