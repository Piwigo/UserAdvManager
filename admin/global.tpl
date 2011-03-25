<div class="titrePage">
  <h2>{'Title_Tab1'|@translate}</h2>
</div>

<form method="post" action="{$UserAdvManager_F_ACTION}" class="general">
  <fieldset>
  	<legend>{'UserAdvManager_Title'|@translate}</legend>
    <ul>
    	<li><label>{'UserAdvManager_Mail_Info'|@translate}</label><br/>
        <input type="radio" value="true" {$UserAdvManager_MAIL_INFO_TRUE} name="UserAdvManager_Mail_Info"/>{'UserAdvManager_Mail_Info_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_MAIL_INFO_FALSE} name="UserAdvManager_Mail_Info"/>{'UserAdvManager_Mail_Info_false'|@translate}<br>
    	<br>
    	</li>
    	<li><label>{'UserAdvManager_MailInfo_Text'|@translate}</label><br><br>
        <textarea name="UserAdvManager_MailInfo_Text" id="UserAdvManager_MailInfo_Text" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILINFO_TEXT}</textarea>
    	<br><br>
    	</li>
    	<li><label>{'UserAdvManager_No_Casse'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_NO_CASSE_TRUE} name="UserAdvManager_No_Casse"/>{'UserAdvManager_No_Casse_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_NO_CASSE_FALSE} name="UserAdvManager_No_Casse"/>{'UserAdvManager_No_Casse_false'|@translate}<br>
    	<br>
   		</li>
    	<li><label>{'UserAdvManager_Username_Char'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_USERNAME_CHAR_TRUE} name="UserAdvManager_Username_Char"/>{'UserAdvManager_Username_Char_true'|@translate}
        <input type="text" name="UserAdvManager_Username_List" value="{$UserAdvManager_USERNAME_CHAR_LIST}" size="20" style="text-align: center;"/><br>
        <input type="radio" value="false" {$UserAdvManager_USERNAME_CHAR_FALSE} name="UserAdvManager_Username_Char"/>{'UserAdvManager_Username_Char_false'|@translate}<br>
    	<br>
    	</li>
    	<li><label>{'UserAdvManager_Confirm_Mail'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_CONFIRM_MAIL_TRUE} name="UserAdvManager_Confirm_Mail"/>{'UserAdvManager_Confirm_Mail_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_CONFIRM_MAIL_FALSE} name="UserAdvManager_Confirm_Mail"/>{'UserAdvManager_Confirm_Mail_false'|@translate}<br>
    	<br>
    	</li>
    	<li><label>{'UserAdvManager_ConfirmMail_Text'|@translate}</label><br><br>
        <textarea name="UserAdvManager_ConfirmMail_Text" id="UserAdvManager_ConfirmMail_Text" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_TEXT}</textarea>
    	<br><br>
    	</li>
    	<br>
			<div style="text-align: center; font-size: 1.1em; color: red;"><b>{'UserAdvManager_Confirm_Group_Notice'|@translate}</b></div>
			<br>
    	<li><label>{'UserAdvManager_No_Confirm_Group'|@translate}</label><br>
		{html_options name="UserAdvManager_No_Confirm_Group" options=$No_Confirm_Group.group_options selected=$No_Confirm_Group.group_selected}
    	<br><br>
    	</li>
    	<li><label>{'UserAdvManager_Validated_Group'|@translate}</label><br>
		{html_options name="UserAdvManager_Validated_Group" options=$Validated_Group.group_options selected=$Validated_Group.group_selected}
    	<br><br>
    	</li>
    	<br>
			<div style="text-align: center; font-size: 1.1em; color: red;"><b>{'UserAdvManager_Confirm_Status_Notice'|@translate}</b></div>
			<br>
    	<li><label>{'UserAdvManager_No_Confirm_Status'|@translate}</label><br>
		{html_options name="UserAdvManager_No_Confirm_Status" options=$No_Confirm_Status.Status_options selected=$No_Confirm_Status.Status_selected}
    	<br><br>
    	</li>
    	<li><label>{'UserAdvManager_Validated_Status'|@translate}</label><br>
		{html_options name="UserAdvManager_Validated_Status" options=$Confirm_Status.Status_options selected=$Confirm_Status.Status_selected}
    	<br><br>
    	</li>
    	<li><label>{'UserAdvManager_No_Comment_Anonymous'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_NO_COMMENT_ANO_TRUE} name="UserAdvManager_No_Comment_Anonymous"/>{'UserAdvManager_No_Comment_Anonymous_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_NO_COMMENT_ANO_FALSE} name="UserAdvManager_No_Comment_Anonymous"/>{'UserAdvManager_No_Comment_Anonymous_false'|@translate}<br>
    	<br>
    	</li>
    	<li><label>{'UserAdvManager_MailExclusion'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_MAILEXCLUSION_TRUE} name="UserAdvManager_MailExclusion"/>{'UserAdvManager_MailExclusion_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_MAILEXCLUSION_FALSE} name="UserAdvManager_MailExclusion"/>{'UserAdvManager_MailExclusion_false'|@translate}<br>
    	<br>
    	</li>
    	<li><label>{'UserAdvManager_MailExclusion_List'|@translate}</label><br>
        <textarea name="UserAdvManager_MailExclusion_List" id="UserAdvManager_MailExclusion_List" rows="3" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILEXCLUSION_LIST}</textarea>
    	</li>
    </ul>
  	<p><input class="submit" type="submit" value="{'audit'|@translate}" name="audit" />&nbsp;<input class="submit" type="submit" value="{'submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} /></p>
  </fieldset>
</form>
