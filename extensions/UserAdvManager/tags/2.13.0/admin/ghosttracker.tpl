<div class="titrePage">
  <h2>{'Title_Tab4'|@translate}</h2>
</div>

<form method="post" action="{$UserAdvManager_F_ACTION}" class="general">
  <fieldset>
  	<legend>{'GhostTracker_Title'|@translate}</legend>
    <ul>
		<li><label>{'UserAdvManager_GhostTracker_Init'|@translate}</label><br><br>

<p>
  <input class="submit" type="submit" value="{'GT_Reset'|@translate}" name="GhostTracker_Init" >
</p>
<br><br>

		<li><label>{'UserAdvManager_GhostTracker_User_List'|@translate}</label><br><br>
<div class="navigationBar">{$NAVBAR}</div>
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
<div class="navigationBar">{$NAVBAR}</div>
    	<br>
	    </li>
    </ul>

<p>
  {'target'|@translate}
  <label><input type="radio" name="target" value="all" > {'all'|@translate}</label>
  <label><input type="radio" name="target" value="selection" checked="checked" > {'selection'|@translate}</label>
</p>

<p>
  <input class="submit" type="submit" value="{'Delete_selected'|@translate}" name="Del_Selected" >
  <input class="submit" type="submit" value="{'Reminder_Email'|@translate}" name="Reminder_Email" >
</p>
  </fieldset>
</form>