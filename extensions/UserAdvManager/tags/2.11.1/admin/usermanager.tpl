<div class="titrePage">
  <h2>{'Title_Tab3'|@translate}</h2>
</div>

<form method="post" action="{$UserAdvManager_F_ACTION}" class="general">
  <fieldset>
  	<legend>{'UserManager_Title'|@translate}</legend>
    <ul>
		<li><label>{'UserAdvManager_ConfirmMail_User_List'|@translate}</label><br>
      <br>

		<table class="table2" width="97%" summary="">
  			<thead>
    			<tr class="throw">
      			<td>&nbsp;</td>
      			<td>{'Username'|@translate}</td>
      			<td>{'user_status'|@translate}</td>
      			<td>{'Email address'|@translate}</td>
      			<td>{'Groups'|@translate}</td>
      			<td>{'Registration'|@translate}</td>
    			</tr>
  			</thead>

			{foreach from=$users item=user name=users_loop}
  				<tr class="{if $smarty.foreach.users_loop.index is odd}row1{else}row2{/if}">
    			<td><input type="checkbox" name="selection[]" value="{$user.ID}" {$user.CHECKED} id="selection-{$user.ID}" /></td>
    			<td><label for="selection-{$user.ID}">{$user.USERNAME}</label></td>
    			<td>{$user.STATUS}</td>
    			<td>{$user.EMAIL}</td>
    			<td>{$user.GROUPS}</td>
					<td style="text-align:center;">{$user.REGISTRATION}</td>
    			{foreach from=$user.plugin_columns item=data}
    			<td>{$data}</td>
    			{/foreach}    			
  			</tr>
  		{/foreach}
	</table>
    	<br/>
	    </li>
    </ul>

<p>
  {'target'|@translate}
  <label><input type="radio" name="target" value="all" /> {'all'|@translate}</label>
  <label><input type="radio" name="target" value="selection" checked="checked" /> {'selection'|@translate}</label>
</p>

<p>
  <input class="submit" type="submit" value="{'Delete_selected'|@translate}" name="Del_Selected" />
  <input class="submit" type="submit" value="{'Mail_without_key'|@translate}" name="Mail_Without_Key" />
  <input class="submit" type="submit" value="{'Mail_with_key'|@translate}" name="Mail_With_Key" />
  <input class="submit" type="submit" value="{'Force_Validation'|@translate}" name="Force_Validation" />
</p>
  </fieldset>
</form>