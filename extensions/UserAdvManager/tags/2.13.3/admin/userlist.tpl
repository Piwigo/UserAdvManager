<div class="titrePage">
  <h2>{'Title_Tab5'|@translate}</h2>
</div>

<form method="post" action="{$UserAdvManager_F_ACTION}" class="general">
  <fieldset>
  	<legend>{'UserList_Title'|@translate}</legend>
    <ul>
		<li><label>{'UserAdvManager_User_List'|@translate}</label><br><br>
<div class="navigationBar">{$NAVBAR}</div>
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
<div class="navigationBar">{$NAVBAR}</div>
    	<br>
	    </li>
    </ul>
  </fieldset>
</form>