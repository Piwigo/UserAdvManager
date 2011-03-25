{known_script id="jquery" src=$ROOT_URL|@cat:"template-common/lib/jquery.packed.js"}
{known_script id="jquery.cluetip" src=$ROOT_URL|@cat:"template-common/lib/plugins/jquery.cluetip.packed.js"}

{html_head}<link rel="stylesheet" type="text/css" href="{$NBC_UAM_PATH}admin/uam.css">{/html_head}

<script type="text/javascript">
jQuery().ready(function(){ldelim}
  jQuery('.cluetip').cluetip({ldelim}
    width: 500,
    splitTitle: '|'
  });
});
</script>

<script type="text/javascript">
function nbc_blockToggleDisplay($head1, $ehead1)
{ldelim}
n1=$head1;
n2=$ehead1;

blockToggleDisplay($head1, $ehead1) ;
     document.getElementById("nb_para").value =n1 ;  
     document.getElementById("nb_para2").value =n2 ;
}

blockToggleDisplay(n1,n2 );
</script>

<div class="titrePage">
  <h2>{'Title_Tab'|@translate} {$UAM_VERSION}<br>{'SubTitle1'|@translate}</h2>
</div>

<form method="post" action="{$UserAdvManager_F_ACTION}" class="general">

<p><input class="submit" type="submit" value="{'submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} >&nbsp;<input class="submit" type="submit" value="{'audit'|@translate}" name="audit"></p>

<input name="nb_para" id="nb_para" type="text" value="{$nb_para}" style="display:none"> 
<input name="nb_para2" id="nb_para2" type="text" value="{$nb_para2}" style="display:none"> 

<div id="instructionConfig1" class="instructionBlock" >

  <div id="config1_header" class="instructionBlockHeaderCollapsed" onclick="nbc_blockToggleDisplay('config1_header', 'Config1')">
    <span class="cluetip" title="{'UAM_restricTitle'|translate}|{'UAM_restricTitle_d'|translate}">{'UserAdvManager_Title1'|@translate}</span>
  </div>

  <div id="Config1" class="instructionBlockContent" style="display:none">
  <fieldset>
    <ul>
    	<li><label class="cluetip" title="{'UAM_casenTitle'|translate}|{'UAM_casenTitle_d'|translate}">{'UserAdvManager_No_Casse'|@translate}</label><br><br>
        <input type="radio" value="false" {$UserAdvManager_NO_CASSE_FALSE} name="UserAdvManager_No_Casse">{'UserAdvManager_No_Casse_false'|@translate}<br>
        <input type="radio" value="true" {$UserAdvManager_NO_CASSE_TRUE} name="UserAdvManager_No_Casse">{'UserAdvManager_No_Casse_true'|@translate}<br><br>
   		</li>
      
    	<li><label class="cluetip" title="{'UAM_carexcTitle'|translate}|{'UAM_carexcTitle_d'|translate}">{'UserAdvManager_Username_Char'|@translate}</label><br><br>
        <input type="radio" value="false" {$UserAdvManager_USERNAME_CHAR_FALSE} name="UserAdvManager_Username_Char">{'UserAdvManager_Username_Char_false'|@translate}<br>
        <input type="radio" value="true" {$UserAdvManager_USERNAME_CHAR_TRUE} name="UserAdvManager_Username_Char">{'UserAdvManager_Username_Char_true'|@translate}
        <div id="uam_leftmargin"><input type="text" name="UserAdvManager_Username_List" value="{$UserAdvManager_USERNAME_CHAR_LIST}" size="20" style="text-align: center;"></div><br><br>
    	</li>
      
    	<li><label class="cluetip" title="{'UAM_passwTitle'|translate}|{'UAM_passwTitle_d'|translate}">{'UserAdvManager_Password_Enforced'|@translate}</label><br><br>
        <input type="radio" value="false" {$UserAdvManager_PASSWORDENF_FALSE} name="UserAdvManager_Password_Enforced">{'UserAdvManager_Password_Enforced_false'|@translate}<br>
        <input type="radio" value="true" {$UserAdvManager_PASSWORDENF_TRUE} name="UserAdvManager_Password_Enforced">{'UserAdvManager_Password_Enforced_true'|@translate}&nbsp;<input type="text" name="UserAdvManager_Password_Score" value="{$UserAdvManager_PASSWORD_SCORE}" size="5" style="text-align: center;"><br><br>

        {'UserAdvManager_PasswordTest'|@translate}<input class="cluetip" title="{'UAM_passwtestTitle'|translate}|{'UAM_passwtestTitle_d'|translate}" type="text" name="UserAdvManager_Password_Test" value="{$UserAdvManager_PASSWORD_TEST}" size="50" style="text-align: left;">&nbsp;&nbsp;&nbsp;
        <input class="submit" type="submit" value="{'PasswordTest'|@translate}" name="PasswordTest">&nbsp;&nbsp;&nbsp;
        {'UserAdvManager_ScoreTest'|@translate}{$UserAdvManager_PASSWORD_TEST_SCORE}<br><br>
    	</li>

      <ul>
      <li><label class="cluetip" title="{'UAM_passwadmTitle'|translate}|{'UAM_passwadmTitle_d'|translate}">{'UserAdvManager_AdminPassword_Enforced'|@translate}</label><br><br>
        <input type="radio" value="false" {$UserAdvManager_ADMINPASSWENF_FALSE} name="UserAdvManager_AdminPassword_Enforced">{'UserAdvManager_AdminPassword_Enforced_false'|@translate}<br>        
        <input type="radio" value="true" {$UserAdvManager_ADMINPASSWENF_TRUE} name="UserAdvManager_AdminPassword_Enforced">{'UserAdvManager_AdminPassword_Enforced_true'|@translate}<br><br>
      </li>
      </ul>
      
    	<li><label class="cluetip" title="{'UAM_mailexcTitle'|translate}|{'UAM_mailexcTitle_d'|translate}">{'UserAdvManager_MailExclusion'|@translate}</label><br><br>
        <input type="radio" value="false" {$UserAdvManager_MAILEXCLUSION_FALSE} name="UserAdvManager_MailExclusion">{'UserAdvManager_MailExclusion_false'|@translate}<br>
        <input type="radio" value="true" {$UserAdvManager_MAILEXCLUSION_TRUE} name="UserAdvManager_MailExclusion">{'UserAdvManager_MailExclusion_true'|@translate}<br><br>
    	</li>

{if $UserAdvManager_MAILEXCLUSION_TRUE}
  {if $UserAdvManager_ERROR_REPORTS4}     
      <div id="uam_leftmargin"><textarea name="UserAdvManager_MailExclusion_List" id="UserAdvManager_MailExclusion_List" rows="3" cols="80" style="color: red" {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILEXCLUSION_LIST}</textarea></div><br><br>
  {else}
      <div id="uam_leftmargin"><textarea name="UserAdvManager_MailExclusion_List" id="UserAdvManager_MailExclusion_List" rows="3" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILEXCLUSION_LIST}</textarea></div><br><br>
  {/if}
{else}
      <div id="uam_leftmargin"><textarea name="UserAdvManager_MailExclusion_List" id="UserAdvManager_MailExclusion_List" rows="3" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILEXCLUSION_LIST}</textarea></div><br><br>
{/if}
    </ul>
  </fieldset>
  </div>
</div>




<div id="instructionConfig2" class="instructionBlock" >
    
  <div id="config2_header" class="instructionBlockHeaderCollapsed" onclick="nbc_blockToggleDisplay('config2_header', 'Config2')">
    <span class="cluetip" title="{'UAM_confirmTitle'|translate}|{'UAM_confirmTitle_d'|translate}">{'UserAdvManager_Title2'|@translate}</span>
  </div>
  
  <div id="Config2" class="instructionBlockContent" style="display:none">
    <fieldset>
      <ul>
      	<li><label class="cluetip" title="{'UAM_infomailTitle'|translate}|{'UAM_infomailTitle_d'|translate}">{'UserAdvManager_Mail_Info'|@translate}</label><br><br>
          <input type="radio" value="false" {$UserAdvManager_MAIL_INFO_FALSE} name="UserAdvManager_Mail_Info">{'UserAdvManager_Mail_Info_false'|@translate}<br>
          <input type="radio" value="true" {$UserAdvManager_MAIL_INFO_TRUE} name="UserAdvManager_Mail_Info">{'UserAdvManager_Mail_Info_true'|@translate}<br><br>
      	</li>
        <ul>
{if $UserAdvManager_MAIL_INFO_TRUE}
  {if $UserAdvManager_ERROR_REPORTS1}      
          <li><label class="cluetip" title="{'UAM_infotxtTitle'|translate}|{'UAM_infotxtTitle_d'|translate}">{'UserAdvManager_MailInfo_Text'|@translate}</label><br><br>
            <textarea name="UserAdvManager_MailInfo_Text" id="UserAdvManager_MailInfo_Text" rows="10" cols="80" style="color: red"  {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILINFO_TEXT}</textarea><br><br>
          </li>
  {else}
          <li><label class="cluetip" title="{'UAM_infotxtTitle'|translate}|{'UAM_infotxtTitle_d'|translate}">{'UserAdvManager_MailInfo_Text'|@translate}</label><br><br>
            <textarea name="UserAdvManager_MailInfo_Text" id="UserAdvManager_MailInfo_Text" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILINFO_TEXT}</textarea><br><br>
          </li>
  {/if}
{else}
          <li><label class="cluetip" title="{'UAM_infotxtTitle'|translate}|{'UAM_infotxtTitle_d'|translate}">{'UserAdvManager_MailInfo_Text'|@translate}</label><br><br>
            <textarea name="UserAdvManager_MailInfo_Text" id="UserAdvManager_MailInfo_Text" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_MAILINFO_TEXT}</textarea><br><br>
          </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UserAdvManager_MailInfo_Text'); return false;">FCK Editor On/Off</a>
  </div>
{/if}
-->
        </ul>

      	<li><label class="cluetip" title="{'UAM_confirmmailTitle'|translate}|{'UAM_confirmmailTitle_d'|translate}">{'UserAdvManager_Confirm_Mail'|@translate}</label><br><br>
          <input type="radio" value="false" {$UserAdvManager_CONFIRM_MAIL_FALSE} name="UserAdvManager_Confirm_Mail">{'UserAdvManager_Confirm_Mail_false'|@translate}<br>
          <input type="radio" value="true" {$UserAdvManager_CONFIRM_MAIL_TRUE} name="UserAdvManager_Confirm_Mail">{'UserAdvManager_Confirm_Mail_true'|@translate}<br><br>
      	</li>

        <ul>
{if $UserAdvManager_CONFIRM_MAIL_TRUE}
  {if $UserAdvManager_ERROR_REPORTS2}     
          <li><label class="cluetip" title="{'UAM_confirmtxtTitle'|translate}|{'UAM_confirmtxtTitle_d'|translate}">{'UserAdvManager_ConfirmMail_Text'|@translate}</label><br><br>
            <textarea name="UserAdvManager_ConfirmMail_Text" id="UserAdvManager_ConfirmMail_Text" rows="10" cols="80" style="color: red" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_TEXT}</textarea><br><br>
          </li>
  {else}
          <li><label class="cluetip" title="{'UAM_confirmtxtTitle'|translate}|{'UAM_confirmtxtTitle_d'|translate}">{'UserAdvManager_ConfirmMail_Text'|@translate}</label><br><br>
            <textarea name="UserAdvManager_ConfirmMail_Text" id="UserAdvManager_ConfirmMail_Text" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_TEXT}</textarea><br><br>
          </li>
  {/if}
{else}
          <li><label class="cluetip" title="{'UAM_confirmtxtTitle'|translate}|{'UAM_confirmtxtTitle_d'|translate}">{'UserAdvManager_ConfirmMail_Text'|@translate}</label><br><br>
            <textarea name="UserAdvManager_ConfirmMail_Text" id="UserAdvManager_ConfirmMail_Text" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_TEXT}</textarea><br><br>
          </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UserAdvManager_ConfirmMail_Text'); return false;">FCK Editor On/Off</a>
  </div>
{/if}
-->
        </ul>

        <br><hr><br>
        
        <div id="uam_notice">{'UserAdvManager_Confirm_grpstat_notice'|@translate}</div>
        
        <br>
        
        <li>
          <label class="cluetip" title="{'UAM_confirmgrpTitle'|translate}|{'UAM_confirmgrpTitle_d'|translate}">{'UserAdvManager_Confirm_Group'|@translate}</label><br><br>
        </li>

        <ul>
          <li><label>{'UserAdvManager_No_Confirm_Group'|@translate}</label><br>
            <div id="uam_leftmargin">{html_options name="UserAdvManager_No_Confirm_Group" options=$No_Confirm_Group.group_options selected=$No_Confirm_Group.group_selected}</div><br><br>
          </li>
      
          <li><label>{'UserAdvManager_Validated_Group'|@translate}</label><br>
            <div id="uam_leftmargin">{html_options name="UserAdvManager_Validated_Group" options=$Validated_Group.group_options selected=$Validated_Group.group_selected}</div><br><br>
          </li>
        </ul>

        <li>
          <label class="cluetip" title="{'UAM_confirmstatTitle'|translate}|{'UAM_confirmstatTitle_d'|translate}">{'UserAdvManager_Confirm_Status'|@translate}</label><br><br>
        </li>

        <ul>
          <li><label>{'UserAdvManager_No_Confirm_Status'|@translate}</label><br>
            <div id="uam_leftmargin">{html_options name="UserAdvManager_No_Confirm_Status" options=$No_Confirm_Status.Status_options selected=$No_Confirm_Status.Status_selected}</div><br><br>
          </li>

          <li><label>{'UserAdvManager_Validated_Status'|@translate}</label><br>
            <div id="uam_leftmargin">{html_options name="UserAdvManager_Validated_Status" options=$Confirm_Status.Status_options selected=$Confirm_Status.Status_selected}</div><br><br>
          </li>
        </ul>

        <br><hr><br>

        <li><label class="cluetip" title="{'UAM_validationlimitTitle'|translate}|{'UAM_validationlimitTitle_d'|translate}">{'UserAdvManager_ValidationLimit_Info'|@translate}</label><br><br>
          <input type="radio" value="false" {$UserAdvManager_CONFIRMMAIL_TIMEOUT_FALSE} name="UserAdvManager_ConfirmMail_TimeOut"> {'UserAdvManager_ConfirmMail_TimeOut_false'|@translate}<br>
          <input type="radio" value="true" {$UserAdvManager_CONFIRMMAIL_TIMEOUT_TRUE} name="UserAdvManager_ConfirmMail_TimeOut"> {'UserAdvManager_ConfirmMail_TimeOut_true'|@translate}<input type="text" name="UserAdvManager_ConfirmMail_Delay" value="{$UserAdvManager_CONFIRMMAIL_DELAY}" size="5" style="text-align: center;"><br><br>
        </li>
    
        <li><label class="cluetip" title="{'UAM_remailTitle'|translate}|{'UAM_remailTitle_d'|translate}">{'UserAdvManager_ConfirmMail_Remail'|@translate}</label><br><br>
          <input type="radio" value="false" {$UserAdvManager_CONFIRMMAIL_REMAIL_FALSE} name="UserAdvManager_ConfirmMail_Remail"> {'UserAdvManager_ConfirmMail_Remail_false'|@translate}<br>
          <input type="radio" value="true" {$UserAdvManager_CONFIRMMAIL_REMAIL_TRUE} name="UserAdvManager_ConfirmMail_Remail"> {'UserAdvManager_ConfirmMail_Remail_true'|@translate}<br><br>
        </li>

        <ul>
{if $UserAdvManager_CONFIRMMAIL_REMAIL_TRUE}
  {if $UserAdvManager_ERROR_REPORTS1}
        <li><label class="cluetip" title="{'UAM_remailtxt1Title'|translate}|{'UAM_remailtxt1Title_d'|translate}">{'UserAdvManager_ConfirmMail_ReMail_Txt1'|@translate}</label><br><br>
          <textarea name="UserAdvManager_ConfirmMail_ReMail_Txt1" id="UserAdvManager_ConfirmMail_ReMail_Txt1" rows="10" cols="80" style="color: red" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT1}</textarea><br><br>
        </li>
  {else}
        <li><label class="cluetip" title="{'UAM_remailtxt1Title'|translate}|{'UAM_remailtxt1Title_d'|translate}">{'UserAdvManager_ConfirmMail_ReMail_Txt1'|@translate}</label><br><br>
          <textarea name="UserAdvManager_ConfirmMail_ReMail_Txt1" id="UserAdvManager_ConfirmMail_ReMail_Txt1" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT1}</textarea><br><br>
        </li>
  {/if}
{else}
        <li><label class="cluetip" title="{'UAM_remailtxt1Title'|translate}|{'UAM_remailtxt1Title_d'|translate}">{'UserAdvManager_ConfirmMail_ReMail_Txt1'|@translate}</label><br><br>
          <textarea  name="UserAdvManager_ConfirmMail_ReMail_Txt1" id="UserAdvManager_ConfirmMail_ReMail_Txt1" rows="10" cols="80" readonly{$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT1}</textarea><br><br>
        </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UserAdvManager_ConfirmMail_ReMail_Txt1'); return false;">FCK Editor On/Off</a>
  </div>
{/if}
-->

{if $UserAdvManager_CONFIRMMAIL_REMAIL_TRUE}
  {if $UserAdvManager_ERROR_REPORTS2}
        <li><label class="cluetip" title="{'UAM_remailtxt2Title'|translate}|{'UAM_remailtxt2Title_d'|translate}">{'UserAdvManager_ConfirmMail_ReMail_Txt2'|@translate}</label><br><br>
          <textarea name="UserAdvManager_ConfirmMail_ReMail_Txt2" id="UserAdvManager_ConfirmMail_ReMail_Txt2" rows="10" cols="80" style="color: red" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT2}</textarea><br>
        </li>
  {else}		
        <li><label class="cluetip" title="{'UAM_remailtxt2Title'|translate}|{'UAM_remailtxt2Title_d'|translate}">{'UserAdvManager_ConfirmMail_ReMail_Txt2'|@translate}</label><br><br>
          <textarea name="UserAdvManager_ConfirmMail_ReMail_Txt2" id="UserAdvManager_ConfirmMail_ReMail_Txt2" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT2}</textarea><br>
        </li>
  {/if}
{else}
        <li><label class="cluetip" title="{'UAM_remailtxt2Title'|translate}|{'UAM_remailtxt2Title_d'|translate}">{'UserAdvManager_ConfirmMail_ReMail_Txt2'|@translate}</label><br><br>
          <textarea name="UserAdvManager_ConfirmMail_ReMail_Txt2" id="UserAdvManager_ConfirmMail_ReMail_Txt2" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_CONFIRMMAIL_REMAIL_TXT2}</textarea><br><br>
        </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UserAdvManager_ConfirmMail_ReMail_Txt2'); return false;">FCK Editor On/Off</a>
  </div>
{/if}
-->
        </ul>
      </ul>
    </fieldset>
  </div>
</div>


<div id="instructionConfig3" class="instructionBlock" >

  <div id="config3_header" class="instructionBlockHeaderCollapsed" onclick="nbc_blockToggleDisplay('config3_header', 'Config3')">
    <span class="cluetip" title="{'UAM_miscTitle'|translate}|{'UAM_miscTitle_d'|translate}">{'UserAdvManager_Title3'|@translate}</span>
  </div>
  
  <div id="Config3" class="instructionBlockContent" style="display:none">
    <fieldset>
      <ul>
        <li><label class="cluetip" title="{'UAM_ghosttrackerTitle'|translate}|{'UAM_ghosttrackerTitle_d'|translate}">{'UserAdvManager_GhostTracker'|@translate}</label><br><br>
          <input type="radio" value="false" {$UserAdvManager_GHOSTRACKER_FALSE} name="UserAdvManager_GhostUser_Tracker">{'UserAdvManager_GhostTracker_false'|@translate}<br>
          <input type="radio" value="true" {$UserAdvManager_GHOSTRACKER_TRUE} name="UserAdvManager_GhostUser_Tracker">{'UserAdvManager_GhostTracker_true'|@translate}<input type="text" name="UserAdvManager_GhostTracker_DayLimit" value="{$UserAdvManager_GHOSTRACKER_DAYLIMIT}" size="5" style="text-align: center;"><br><br>
        </li>
        
        <ul>
{if $UserAdvManager_GHOSTRACKER_TRUE}
  {if $UserAdvManager_ERROR_REPORTS3}
          <li><label class="cluetip" title="{'UAM_gttextTitle'|translate}|{'UAM_gttextTitle_d'|translate}">{'UserAdvManager_GhostTracker_ReminderText'|@translate}</label><br><br>
            <textarea name="UserAdvManager_GhostTracker_ReminderText" id="UserAdvManager_GhostTracker_ReminderText" rows="10" cols="80" style="color: red" {$TAG_INPUT_ENABLED}>{$UserAdvManager_GHOSTRACKER_REMINDERTEXT}</textarea><br><br>
          </li>
  {else}
          <li><label class="cluetip" title="{'UAM_gttextTitle'|translate}|{'UAM_gttextTitle_d'|translate}">{'UserAdvManager_GhostTracker_ReminderText'|@translate}</label><br><br>
            <textarea name="UserAdvManager_GhostTracker_ReminderText" id="UserAdvManager_GhostTracker_ReminderText" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UserAdvManager_GHOSTRACKER_REMINDERTEXT}</textarea><br><br>
          </li>
  {/if}
{else}
          <li><label class="cluetip" title="{'UAM_gttextTitle'|translate}|{'UAM_gttextTitle_d'|translate}">{'UserAdvManager_GhostTracker_ReminderText'|@translate}</label><br><br>
            <textarea name="UserAdvManager_GhostTracker_ReminderText" id="UserAdvManager_GhostTracker_ReminderText" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UserAdvManager_GHOSTRACKER_REMINDERTEXT}</textarea><br><br>
          </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UserAdvManager_GhostTracker_ReminderText'); return false;">FCK Editor On/Off</a>
  </div>
{/if}
-->
        </ul>
    
        <li><label class="cluetip" title="{'UAM_lastvisitTitle'|translate}|{'UAM_lastvisitTitle_d'|translate}">{'UserAdvManager_LastVisit'|@translate}</label><br><br>
          <input type="radio" value="false" {$UserAdvManager_ADDLASTVISIT_FALSE} name="UserAdvManager_Add_LastVisit_Column">{'UserAdvManager_LastVisit_false'|@translate}<br>
          <input type="radio" value="true" {$UserAdvManager_ADDLASTVISIT_TRUE} name="UserAdvManager_Add_LastVisit_Column">{'UserAdvManager_LastVisit_true'|@translate}<br><br>
        </li>

        <li><label class="cluetip" title="{'UAM_commentTitle'|translate}|{'UAM_commentTitle_d'|translate}">{'UserAdvManager_No_Comment_Anonymous'|@translate}</label><br><br>
          <input type="radio" value="false" {$UserAdvManager_NO_COMMENT_ANO_FALSE} name="UserAdvManager_No_Comment_Anonymous">{'UserAdvManager_No_Comment_Anonymous_false'|@translate}<br>
          <input type="radio" value="true" {$UserAdvManager_NO_COMMENT_ANO_TRUE} name="UserAdvManager_No_Comment_Anonymous">{'UserAdvManager_No_Comment_Anonymous_true'|@translate}<br><br>
        </li>
      </ul>
    </fieldset>
  </div>
</div>

<p><input class="submit" type="submit" value="{'submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} >&nbsp;<input class="submit" type="submit" value="{'audit'|@translate}" name="audit"></p>

<div id="instructionTips" class="instructionBlock" >
    
  <div id="Tips_header" class="instructionBlockHeaderCollapsed" onclick="nbc_blockToggleDisplay('Tips_header', 'Tips')">
    <span class="cluetip" title="{'UAM_tipsTitle'|translate}|{'UAM_tipsTitle_d'|translate}">{'UserAdvManager_Title4'|@translate}</span>
  </div>
  
  <div id="Tips" class="instructionBlockContent" style="display:none">
    <fieldset>
      <div id="Tips1_header" class="instructionBlockHeaderCollapsed" onclick="nbc_blockToggleDisplay('Tips1_header', 'Tips1')">
        <span>{'UserAdvManager_Tips1'|@translate}</span>
      </div>
      <div id="Tips1" class="instructionBlockContent" style="display:none">
        <fieldset>
          {'UserAdvManager_Tips1_txt'|@translate}
        </fieldset>
      </div>
    </fieldset>
  </div>
</div>
</form>

<script type="text/javascript">
  var n1=document.getElementById("nb_para").value ;
  var n2=document.getElementById("nb_para2").value;
   nbc_blockToggleDisplay(n1,n2 );
</script>