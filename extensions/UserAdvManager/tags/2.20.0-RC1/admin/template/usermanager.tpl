{combine_script id="jquery" path=$ROOT_URL|@cat:"themes/default/js/jquery.js"}
{combine_script id="jquery.cluetip" path=$ROOT_URL|@cat:"themes/default/js/plugins/jquery.cluetip.packed.js"}
{combine_script id="jquery.tablesorter" path=$UAM_PATH|@cat:"admin/template/js/jquery.tablesorter.js"}
{combine_script id="jquery.tablesorter.pager" path=$UAM_PATH|@cat:"admin/template/js/jquery.tablesorter.pager.js"}

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

$(document).ready(function() 
    {ldelim}
      $("#sorting")
      .tablesorter({ldelim}sortList:[[6,1]], headers: {ldelim} 0: {ldelim} sorter: false {rdelim}{rdelim}{rdelim})
      .tablesorterPager({ldelim}container: $("#pager"), positionFixed: false, size: 20, totalPages: 0{rdelim});
    {rdelim} 
);
</script>

<div class="titrePage">
  <h2>{'UAM_Title_Tab'|@translate} {$UAM_VERSION}<br>{'UAM_SubTitle3'|@translate}</h2>
</div>

<form method="post" action="" class="general">
  <fieldset>
  	<legend class="cluetip" title="{'UAM_usermanTitle'|translate}|{'UAM_usermanTitle_d'|translate}">{'UAM_UserManager_Title'|@translate}</legend>
      <table id="sorting" class="table2" width="97%" summary="">
  		  <thead>
    			<tr class="throw">
      			<th>&nbsp;</td>
      			<th>{'Username'|@translate}&nbsp;&nbsp;</th>
            <th>{'Profile'|@translate}&nbsp;&nbsp;</th>
      			<th>{'User status'|@translate}&nbsp;&nbsp;</th>
      			<th>{'Email address'|@translate}&nbsp;&nbsp;</th>
      			<th>{'Groups'|@translate}&nbsp;&nbsp;</th>
      			<th>{'UAM_Registration_Date'|@translate}&nbsp;&nbsp;</th>
          {if $CONFIRM_LOCAL == ""}
            <th>{'UAM_Reminder'|@translate}&nbsp;&nbsp;</th>
          {/if}
    			</tr>
  			</thead>
        <tbody>
        {foreach from=$users item=user name=users_loop}
          <tr class="{if $smarty.foreach.users_loop.index is odd}row1{else}row2{/if}">
            <td><input type="checkbox" name="selection[]" value="{$user.ID}" {$user.CHECKED} id="selection-{$user.ID}" ></td>
            <td><label for="selection-{$user.ID}">{$user.USERNAME}</label></td>
            <td style="text-align:center;"><a href="./admin.php?page=profile&amp;user_id={$user.ID}" title="{'Profile'|@translate}" onclick="window.open(this.href); return false;"><img src="{$UAM_PATH}admin/template/icon/edit_s.png"></a></td>
            <td>{$user.STATUS}</td>
            <td>{$user.EMAIL}</td>
            <td>{$user.GROUPS}</td>
            <td {if $user.EXPIRATION == True}style="color:red;text-align:center;"{else}style="color:lime;text-align:center;"{/if}>{$user.REGISTRATION}</td>
          {if $CONFIRM_LOCAL == ""}
            <td style="text-align:center;">{$user.REMINDER}</td>
          {/if}
            {foreach from=$user.plugin_columns item=data}
              <td>{$data}</td>
            {/foreach}    			
          </tr>
        {/foreach}
      </tbody>
      </table>
{if !empty($users)}
<div id="pager" class="pager">
	<form>
		<img src="{$UAM_PATH}admin/template/icon/first.png" class="first">
		<img src="{$UAM_PATH}admin/template/icon/prev.png" class="prev">
		<input type="text" class="pagedisplay">
		<img src="{$UAM_PATH}admin/template/icon/next.png" class="next">
		<img src="{$UAM_PATH}admin/template/icon/last.png" class="last">
		<select class="pagesize">
			<option  value="10">10</option>
			<option selected="selected" value="20">20</option>
			<option value="30">30</option>
			<option value="40">40</option>
		</select>
	</form>
</div>
{/if}
    	<br>

<p>
  {'target'|@translate}
  <label><input type="radio" name="target" value="all" > {'all'|@translate}</label>
  <label><input type="radio" name="target" value="selection" checked="checked" > {'selection'|@translate}</label>
</p>

<p>
{if $CONFIRM_LOCAL == "local"}
  <input class="submit" type="submit" value="{'UAM_Delete_selected'|@translate}" name="Del_Selected">
  <input class="submit" type="submit" value="{'UAM_Force_Validation'|@translate}" name="Force_Validation">
{else}
  <input class="submit" type="submit" value="{'UAM_Delete_selected'|@translate}" name="Del_Selected">
  <input class="submit" type="submit" value="{'UAM_Mail_without_key'|@translate}" name="Mail_Without_Key">
  <input class="submit" type="submit" value="{'UAM_Mail_with_key'|@translate}" name="Mail_With_Key">
  <input class="submit" type="submit" value="{'UAM_Force_Validation'|@translate}" name="Force_Validation">
{/if}
</p>
  </fieldset>
</form>