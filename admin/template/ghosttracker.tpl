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
  <h2>{'Title_Tab'|@translate} {$UAM_VERSION}<br>{'SubTitle4'|@translate}</h2>
</div>

<form method="post" action="" class="general">
  <fieldset>
  	<legend>{'GT_Init'|@translate}</legend>
    <ul>
		  <li>
        <label>{'UAM_GhostTracker_Init'|@translate}</label><br><br>
      </li>
    </ul>
    <p><input class="submit" type="submit" value="{'GT_Reset'|@translate}" name="GhostTracker_Init" ></p>
  </fieldset>
  
  <fieldset>
    <legend class="cluetip" title="{'UAM_gtTitle'|translate}|{'UAM_gtTitle_d'|translate}">{'GhostTracker_Title'|@translate}</legend>
      {if !empty($navbar) }{include file='navigation_bar.tpl'|@get_extent:'navbar'}{/if}
        <table class="table2" width="97%" summary="">
          <thead>
            <tr class="throw">
              <td>&nbsp;</td>
              <td>{'Username'|@translate}</td>
              <td>{'Email address'|@translate}</td>
              <td>{'LastVisit_Date'|@translate}</td>
              <td>{'Reminder'|@translate}</td>
            </tr>
          </thead>

          {foreach from=$users item=user name=users_loop}
            <tr class="{if $smarty.foreach.users_loop.index is odd}row1{else}row2{/if}">
              <td><input type="checkbox" name="selection[]" value="{$user.ID}" {$user.CHECKED} id="selection-{$user.ID}" ></td>
              <td><label for="selection-{$user.ID}">{$user.USERNAME}</label></td>
              <td>{$user.EMAIL}</td>
{if $user.REMINDER == l10n('Reminder_Sent_NOK')}
              <td style="color:orange;text-align:center;">{$user.LASTVISIT}</td>
              <td style="color:orange;text-align:center;">{$user.REMINDER}</td>
{else $user.REMINDER == l10n('Reminder_Sent_OK')}
              <td style="color:red;text-align:center;">{$user.LASTVISIT}</td>
              <td style="color:red;text-align:center;">{$user.REMINDER}</td>
{/if}
              {foreach from=$user.plugin_columns item=data}
                <td>{$data}</td>
              {/foreach}    			
            </tr>
          {/foreach}
        </table>

        {if !empty($navbar) }{include file='navigation_bar.tpl'|@get_extent:'navbar'}{/if}
        <br>
          
<p>
  {'target'|@translate}
  <label><input type="radio" name="target" value="all" > {'all'|@translate}</label>
  <label><input type="radio" name="target" value="selection" checked="checked" > {'selection'|@translate}</label>
</p>

<p>
  <input class="submit" type="submit" value="{'Delete_selected'|@translate}" name="Del_Selected" >
  <input class="submit" type="submit" value="{'Reminder'|@translate}" name="Reminder_Email" >
</p>
  </fieldset>
</form>