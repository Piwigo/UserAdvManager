<div class="titrePage">
  <h2>{'Title_Tab1'|@translate}</h2>
</div>

<form method="post" action="{$UserAdvManager_F_ACTION}" class="general">
  <fieldset>
  	<legend>{'UserAdvManager_Title1'|@translate}</legend>
    <ul>
    	<li><label>{'UserAdvManager_No_Casse'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_NO_CASSE_TRUE} name="UserAdvManager_No_Casse">{'UserAdvManager_No_Casse_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_NO_CASSE_FALSE} name="UserAdvManager_No_Casse">{'UserAdvManager_No_Casse_false'|@translate}<br>
    	<br>
   		</li>
    	<li><label>{'UserAdvManager_Username_Char'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_USERNAME_CHAR_TRUE} name="UserAdvManager_Username_Char">{'UserAdvManager_Username_Char_true'|@translate}
        <input type="text" name="UserAdvManager_Username_List" value="{$UserAdvManager_USERNAME_CHAR_LIST}" size="20" style="text-align: center;"><br>
        <input type="radio" value="false" {$UserAdvManager_USERNAME_CHAR_FALSE} name="UserAdvManager_Username_Char">{'UserAdvManager_Username_Char_false'|@translate}<br><br>
    	</li>
      
    	<li><label>{'UserAdvManager_Password_Enforced'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_PASSWORDENF_TRUE} name="UserAdvManager_Password_Enforced">{'UserAdvManager_Password_Enforced_true'|@translate}
        <input type="text" name="UserAdvManager_Password_Score" value="{$UserAdvManager_PASSWORD_SCORE}" size="5" style="text-align: center;"><br><br>

{if $UserAdvManager_PASSWORDENF_TRUE}        
        <label>{'UserAdvManager_Password_Enforced_Info'|@translate}</label><br><br>
        {'UserAdvManager_PasswordTest'|@translate}<input type="text" name="UserAdvManager_Password_Test" value="{$UserAdvManager_PASSWORD_TEST}" size="50" style="text-align: left;">&nbsp;&nbsp;&nbsp;
        <input class="submit" type="submit" value="{'PasswordTest'|@translate}" name="PasswordTest" >&nbsp;&nbsp;&nbsp;
        {'UserAdvManager_ScoreTest'|@translate}{$UserAdvManager_PASSWORD_TEST_SCORE}<br><br>
{/if}        
        <input type="radio" value="false" {$UserAdvManager_PASSWORDENF_FALSE} name="UserAdvManager_Password_Enforced">{'UserAdvManager_Password_Enforced_false'|@translate}<br><br>
    	</li>

        <li><label>{'UserAdvManager_AdminPassword_Enforced'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_ADMINPASSWENF_TRUE} name="UserAdvManager_AdminPassword_Enforced">{'UserAdvManager_AdminPassword_Enforced_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_ADMINPASSWENF_FALSE} name="UserAdvManager_AdminPassword_Enforced">{'UserAdvManager_AdminPassword_Enforced_false'|@translate}<br><br>

    	<li><label>{'UserAdvManager_No_Comment_Anonymous'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_NO_COMMENT_ANO_TRUE} name="UserAdvManager_No_Comment_Anonymous">{'UserAdvManager_No_Comment_Anonymous_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_NO_COMMENT_ANO_FALSE} name="UserAdvManager_No_Comment_Anonymous">{'UserAdvManager_No_Comment_Anonymous_false'|@translate}<br><br>
    	</li>
      
    	<li><label>{'UserAdvManager_MailExclusion'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_MAILEXCLUSION_TRUE} name="UserAdvManager_MailExclusion">{'UserAdvManager_MailExclusion_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_MAILEXCLUSION_FALSE} name="UserAdvManager_MailExclusion">{'UserAdvManager_MailExclusion_false'|@translate}<br><br>
    	</li>

{if $UserAdvManager_MAILEXCLUSION_TRUE}     
    	<li><label>{'UserAdvManager_MailExclusion_List'|@translate}</label><br>
        <textarea name="UserAdvManager_MailExclusion_List" id="UserAdvManager_MailExclusion_List" rows="3" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILEXCLUSION_LIST}</textarea><br><br>
    	</li>
{else}
    	<li><label>{'UserAdvManager_MailExclusion_List'|@translate}</label><br>
        <textarea name="UserAdvManager_MailExclusion_List" id="UserAdvManager_MailExclusion_List" rows="3" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILEXCLUSION_LIST}</textarea><br><br>
    	</li>
{/if}

    	<li><label>{'UserAdvManager_GhostTracker'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_GHOSTRACKER_TRUE} name="UserAdvManager_GhostUser_Tracker">{'UserAdvManager_GhostTracker_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_GHOSTRACKER_FALSE} name="UserAdvManager_GhostUser_Tracker">{'UserAdvManager_GhostTracker_false'|@translate}<br><br>
    	</li>

    	<li><label>{'UserAdvManager_GhostTracker_DayLimit'|@translate}</label><br>
        <input type="text" name="UserAdvManager_GhostTracker_DayLimit" value="{$UserAdvManager_GHOSTRACKER_DAYLIMIT}" size="5" style="text-align: center;"><br><br>
      </li>
      
{if $UserAdvManager_GHOSTRACKER_TRUE}
    	<li><label>{'UserAdvManager_GhostTracker_ReminderText'|@translate}</label><br><br>
        <textarea name="UserAdvManager_GhostTracker_ReminderText" id="UserAdvManager_GhostTracker_ReminderText" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_GHOSTRACKER_REMINDERTEXT}</textarea><br><br>
    	</li>
{else}
    	<li><label>{'UserAdvManager_GhostTracker_ReminderText'|@translate}</label><br><br>
        <textarea name="UserAdvManager_GhostTracker_ReminderText" id="UserAdvManager_GhostTracker_ReminderText" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_GHOSTRACKER_REMINDERTEXT}</textarea><br><br>
    	</li>
{/if}
    </ul>
    
  	<p><input class="submit" type="submit" value="{'submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} >&nbsp;<input class="submit" type="submit" value="{'audit'|@translate}" name="audit"></p>
  </fieldset>

    <fieldset>
    <legend>{'UserAdvManager_Title2'|@translate}</legend>
    <ul>
    	<li><label>{'UserAdvManager_Mail_Info'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_MAIL_INFO_TRUE} name="UserAdvManager_Mail_Info">{'UserAdvManager_Mail_Info_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_MAIL_INFO_FALSE} name="UserAdvManager_Mail_Info">{'UserAdvManager_Mail_Info_false'|@translate}<br><br>
    	</li>

{if $UserAdvManager_MAIL_INFO_TRUE}      
    	<li><label>{'UserAdvManager_MailInfo_Text'|@translate}</label><br><br>
        <textarea name="UserAdvManager_MailInfo_Text" id="UserAdvManager_MailInfo_Text" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILINFO_TEXT}</textarea><br><br>
    	</li>
{else}
    	<li><label>{'UserAdvManager_MailInfo_Text'|@translate}</label><br><br>
        <textarea name="UserAdvManager_MailInfo_Text" id="UserAdvManager_MailInfo_Text" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILINFO_TEXT}</textarea><br><br>
    	</li>
{/if}

    	<li><label>{'UserAdvManager_Confirm_Mail'|@translate}</label><br>
        <input type="radio" value="true" {$UserAdvManager_CONFIRM_MAIL_TRUE} name="UserAdvManager_Confirm_Mail">{'UserAdvManager_Confirm_Mail_true'|@translate}<br>
        <input type="radio" value="false" {$UserAdvManager_CONFIRM_MAIL_FALSE} name="UserAdvManager_Confirm_Mail">{'UserAdvManager_Confirm_Mail_false'|@translate}<br><br>
    	</li>

{if $UserAdvManager_CONFIRM_MAIL_TRUE}     
    	<li><label>{'UserAdvManager_ConfirmMail_Text'|@translate}</label><br><br>
        <textarea name="UserAdvManager_ConfirmMail_Text" id="UserAdvManager_ConfirmMail_Text" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_TEXT}</textarea><br><br>
    	</li>
{else}
    	<li><label>{'UserAdvManager_ConfirmMail_Text'|@translate}</label><br><br>
        <textarea name="UserAdvManager_ConfirmMail_Text" id="UserAdvManager_ConfirmMail_Text" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_TEXT}</textarea><br><br>
    	</li>
{/if}

    	<br>
			<div style="text-align: center; font-size: 1.1em; color: red;"><b>{'UserAdvManager_Confirm_Group_Notice'|@translate}</b></div>
			<br>
      
    	<li><label>{'UserAdvManager_No_Confirm_Group'|@translate}</label><br>
		{html_options name="UserAdvManager_No_Confirm_Group" options=$No_Confirm_Group.group_options selected=$No_Confirm_Group.group_selected}<br><br>
    	</li>
      
    	<li><label>{'UserAdvManager_Validated_Group'|@translate}</label><br>
		{html_options name="UserAdvManager_Validated_Group" options=$Validated_Group.group_options selected=$Validated_Group.group_selected}<br><br>
    	</li>
      
    	<br>
			<div style="text-align: center; font-size: 1.1em; color: red;"><b>{'UserAdvManager_Confirm_Status_Notice'|@translate}</b></div>
			<br>
      
    	<li><label>{'UserAdvManager_No_Confirm_Status'|@translate}</label><br>
		{html_options name="UserAdvManager_No_Confirm_Status" options=$No_Confirm_Status.Status_options selected=$No_Confirm_Status.Status_selected}<br><br>
    	</li>
      
    	<li><label>{'UserAdvManager_Validated_Status'|@translate}</label><br>
		{html_options name="UserAdvManager_Validated_Status" options=$Confirm_Status.Status_options selected=$Confirm_Status.Status_selected}<br><br>
    	</li>
    </ul>
    
  	<p><input class="submit" type="submit" value="{'submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} >&nbsp;<input class="submit" type="submit" value="{'audit'|@translate}" name="audit"></p>
  </fieldset>
</form>
