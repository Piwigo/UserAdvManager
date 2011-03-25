{known_script id="jquery" src=$ROOT_URL|@cat:"themes/default/js/jquery.packed.js"}
{known_script id="jquery.cluetip" src=$ROOT_URL|@cat:"themes/default/js/plugins/jquery.cluetip.packed.js"}
{known_script id="jquery.tablesorter" src=$UAM_PATH|@cat:"admin/template/js/jquery.tablesorter.js"}
{known_script id="jquery.tablesorter.pager" src=$UAM_PATH|@cat:"admin/template/js/jquery.tablesorter.pager.js"}


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
      .tablesorter({ldelim}sortList:[[3,0]]{rdelim})
      .tablesorterPager({ldelim}container: $("#pager"), positionFixed: false, size: 20, totalPages: 0{rdelim});
    {rdelim} 
);
</script>


<div class="titrePage">
  <h2>{'Title_Tab'|@translate} {$UAM_VERSION}<br>{'SubTitle5'|@translate}</h2>
</div>

<form method="post" action="" class="general">
  <fieldset>
  	<legend class="cluetip" title="{'UAM_userlistTitle'|translate}|{'UAM_userlistTitle_d'|translate}">{'UserList_Title'|@translate}</legend>

      <table id="sorting" class="table2" width="97%" summary="">
  			<thead>
    			<tr class="throw">
      			<th>{'Username'|@translate}</th>
      			<th>{'Email address'|@translate}</th>
            <th>{'LastVisit_Date'|@translate}</th>
            <th>{'Nb_Days'|@translate}</th>
    			</tr>
  			</thead>
        <tbody>
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
        </tbody>
      </table>
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
    	<br>
  </fieldset>
</form>