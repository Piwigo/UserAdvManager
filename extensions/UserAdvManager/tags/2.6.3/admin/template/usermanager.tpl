{combine_script id='jquery' path='themes/default/js/jquery.min.js'}
{combine_script id='jquery.cluetip' require='jquery' path='themes/default/js/plugins/jquery.cluetip.js'}
{combine_script id='jquery.tablesorter' require='jquery' path=$UAM_PATH|@cat:'admin/template/js/jquery.tablesorter.min.js'}
{combine_script id='jquery.tablesorter.pager' require='jquery' path=$UAM_PATH|@cat:'admin/template/js/jquery.tablesorter.pager.min.js'}

{combine_css path= $UAM_PATH|@cat:'admin/template/uam.css'}
{if $UAM_THEME=='clear'}{combine_css path= $UAM_PATH|@cat:'admin/template/themes/clear/theme.css'}{/if}
{if $UAM_THEME=='roma'}{combine_css path= $UAM_PATH|@cat:'admin/template/themes/roma/theme.css'}{/if}

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
      .tablesorter({ldelim}widgets: ["zebra"],widgetOptions :{ldelim}zebra : [ "normal-row", "alt-row" ]{rdelim},sortList:[[6,0]], headers: {ldelim} 0: {ldelim} sorter: false {rdelim},2: {ldelim} sorter: false {rdelim}{rdelim}{rdelim})
      .tablesorterPager({ldelim}container: $("#pager"), page: 0, size: 20, output: '{ldelim}page{rdelim} / {ldelim}totalPages{rdelim}',{rdelim});
    {rdelim} 
);
</script>

<div class="titrePage">
  <h2>{'UAM_Title_Tab'|@translate} {$UAM_VERSION}<br/>{'UAM_Tracking confirmations'|@translate}</h2>
</div>

<form method="post" class="general">
    {if count($users) > 0}
  <fieldset>
  	<legend class="cluetip" title="{'UAM_Tracking confirmations'|translate}|{'UAM_usermanTitle_d'|translate}">{'UAM_Tracking confirmations'|@translate}</legend>
      <table id="sorting" class="table2">
  		  <thead>
    			<tr class="throw">
      			<th>&nbsp;</th>
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
            <td><input type="checkbox" name="selection[]" value="{$user.ID}" {$user.CHECKED} id="selection-{$user.ID}"/></td>
            <td><label for="selection-{$user.ID}">{$user.USERNAME}</label></td>
            <td style="text-align:center;"><a href="./admin.php?page=profile&amp;user_id={$user.ID}" title="{'Profile'|@translate}" onclick="window.open(this.href); return false;"><img src="{$UAM_PATH}admin/template/icon/edit_s.png" alt=""/></a></td>
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
            <img src="{$UAM_PATH}admin/template/icon/first.png" class="first" alt=""/>
            <img src="{$UAM_PATH}admin/template/icon/prev.png" class="prev" alt=""/>
            <input type="text" class="pagedisplay"/>
            <img src="{$UAM_PATH}admin/template/icon/next.png" class="next" alt=""/>
            <img src="{$UAM_PATH}admin/template/icon/last.png" class="last" alt=""/>
            <select class="pagesize" title="{'UAM_Select page size'|@translate}">
              <option  value="10">10</option>
              <option selected="selected" value="20">20</option>
              <option value="30">30</option>
              <option value="40">40</option>
            </select>
            <select class="gotoPage" title="{'UAM_Select page number'|@translate}"></select>
        </div>
      {/if}
    	<br/>
      <fieldset>
        <p>
          {'target'|@translate}
          <label><input type="radio" name="target" value="all"/> {'all'|@translate}</label>
          <label><input type="radio" name="target" value="selection" checked="checked"/> {'selection'|@translate}</label>
        </p>

        <p>
        {if $CONFIRM_LOCAL == "local"}
          <input class="submit" type="submit" value="{'UAM_Delete_selected'|@translate}" name="Del_Selected"/>
          <input class="submit" type="submit" value="{'UAM_Manual_Validation'|@translate}" name="Manual_Validation"/>
        {else}
          <input class="submit" type="submit" value="{'UAM_Delete_selected'|@translate}" name="Del_Selected"/>
          <input class="submit" type="submit" value="{'UAM_Mail_without_key'|@translate}" name="Mail_Without_Key"/>
          <input class="submit" type="submit" value="{'UAM_Mail_with_key'|@translate}" name="Mail_With_Key"/>
          <input class="submit" type="submit" value="{'UAM_Manual_Validation'|@translate}" name="Manual_Validation"/>
        {/if}
        </p>
      </fieldset>
  </fieldset>
    {else}
  <fieldset>
  	<legend class="cluetip" title="{'UAM_Tracking confirmations'|translate}|{'UAM_usermanTitle_d'|translate}">{'UAM_Tracking confirmations'|@translate}</legend>
      <div>
        {'UAM_No_Usermanager'|@translate}
		  </div>
  </fieldset>
    {/if}
</form>