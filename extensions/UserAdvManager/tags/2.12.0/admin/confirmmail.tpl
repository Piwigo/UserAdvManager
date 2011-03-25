<div class="titrePage">
  <h2>{'Title_Tab2'|@translate}</h2>
</div>

<form method="post" action="{$UserAdvManager_F_ACTION}" class="general">
  <fieldset>
  	<legend>{'ConfirmMail_Title'|@translate}</legend>
    <ul>
    	<li><label>{'UserAdvManager_ConfirmMail_Info'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_CONFIRMMAIL_TIMEOUT_TRUE} name="UserAdvManager_ConfirmMail_TimeOut"/> {'UserAdvManager_ConfirmMail_TimeOut_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_CONFIRMMAIL_TIMEOUT_FALSE} name="UserAdvManager_ConfirmMail_TimeOut"/> {'UserAdvManager_ConfirmMail_TimeOut_false'|@translate}<br><br>
    	</li>
		<li><label>{'UserAdvManager_ConfirmMail_Delay_Info'|@translate}</label><input type="text" name="UserAdvManager_ConfirmMail_Delay" value="{$UserAdvManager_CONFIRMMAIL_DELAY}" size="5" style="text-align: center;"/><br><br>
		</li>
    <li><label>{'UserAdvManager_ConfirmMail_Remail'|@translate}</label><br>
    	<input type="radio" value="true" {$UserAdvManager_CONFIRMMAIL_REMAIL_TRUE} name="UserAdvManager_ConfirmMail_Remail"/> {'UserAdvManager_ConfirmMail_Remail_true'|@translate}<br>
      <input type="radio" value="false" {$UserAdvManager_CONFIRMMAIL_REMAIL_FALSE} name="UserAdvManager_ConfirmMail_Remail"/> {'UserAdvManager_ConfirmMail_Remail_false'|@translate}<br><br>
    </li>
 	{if $UserAdvManager_CONFIRMMAIL_REMAIL_TRUE}
		<li><label>{'UserAdvManager_ConfirmMail_ReMail_Txt1'|@translate}</label><br>
		<textarea name="UserAdvManager_ConfirmMail_ReMail_Txt1" id="UserAdvManager_ConfirmMail_ReMail_Txt1" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT1}</textarea><br><br>
	  </li>
		<li><label>{'UserAdvManager_ConfirmMail_ReMail_Txt2'|@translate}</label><br>
		<textarea name="UserAdvManager_ConfirmMail_ReMail_Txt2" id="UserAdvManager_ConfirmMail_ReMail_Txt2" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT2}</textarea><br>
	  </li>
  {else}
		<li><label>{'UserAdvManager_ConfirmMail_ReMail_Txt1'|@translate}</label><br>
		<textarea  name="UserAdvManager_ConfirmMail_ReMail_Txt1" id="UserAdvManager_ConfirmMail_ReMail_Txt1" rows="10" cols="80" readonly{$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT1}</textarea><br><br>
	  </li>
		<li><label>{'UserAdvManager_ConfirmMail_ReMail_Txt2'|@translate}</label><br>
		<textarea name="UserAdvManager_ConfirmMail_ReMail_Txt2" id="UserAdvManager_ConfirmMail_ReMail_Txt2" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT2}</textarea><br>
	  </li>
	{/if}
    </ul>
        <p><input class="submit" type="submit" value="{'submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} /></p>
  </fieldset>
</form>
