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
function nbc_blockToggleDisplay( headerId, contentId )
{ldelim}
  if (typeof(headerId)=='string')
  {ldelim}
   if ( headerId.length>  1)
       blockToggleDisplay(headerId, contentId) ;
      document.getElementById("nb_para").value =headerId ;
      document.getElementById("nb_para2").value =contentId;
} }
</script>

<div class="titrePage">
  <h2>{'Title_Tab'|@translate} {$UAM_VERSION}<br>{'SubTitle1'|@translate}</h2>
</div>

<form method="post" action="{$UAM_F_ACTION}" class="general">

<p><input class="submit" type="submit" value="{'submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} >&nbsp;<input class="submit" type="submit" value="{'audit'|@translate}" name="audit"></p>

<input name="nb_para" id="nb_para" type="text" value="{$nb_para}" style="display:none"> 
<input name="nb_para2" id="nb_para2" type="text" value="{$nb_para2}" style="display:none"> 

<div id="instructionConfig1" class="instructionBlock" >

  <div id="config1_header" class="instructionBlockHeaderCollapsed" onclick="nbc_blockToggleDisplay('config1_header', 'Config1')">
    <span class="cluetip" title="{'UAM_restricTitle'|translate}|{'UAM_restricTitle_d'|translate}">{'UAM_Title1'|@translate}</span>
  </div>

  <div id="Config1" class="instructionBlockContent" style="display:none">
  <fieldset>
    <ul>
    	<li><label class="cluetip" title="{'UAM_casenTitle'|translate}|{'UAM_casenTitle_d'|translate}">{'UAM_No_Casse'|@translate}</label><br><br>
        <input type="radio" value="false" {$UAM_NO_CASSE_FALSE} name="UAM_No_Casse">{'UAM_No_Casse_false'|@translate}<br>
        <input type="radio" value="true" {$UAM_NO_CASSE_TRUE} name="UAM_No_Casse">{'UAM_No_Casse_true'|@translate}<br><br>
   		</li>
      
    	<li><label class="cluetip" title="{'UAM_carexcTitle'|translate}|{'UAM_carexcTitle_d'|translate}">{'UAM_Username_Char'|@translate}</label><br><br>
        <input type="radio" value="false" {$UAM_USERNAME_CHAR_FALSE} name="UAM_Username_Char">{'UAM_Username_Char_false'|@translate}<br>
        <input type="radio" value="true" {$UAM_USERNAME_CHAR_TRUE} name="UAM_Username_Char">{'UAM_Username_Char_true'|@translate}
        <div id="uam_leftmargin"><input type="text" name="UAM_Username_List" value="{$UAM_USERNAME_CHAR_LIST}" size="20" style="text-align: center;"></div><br><br>
    	</li>
      
    	<li><label class="cluetip" title="{'UAM_passwTitle'|translate}|{'UAM_passwTitle_d'|translate}">{'UAM_Password_Enforced'|@translate}</label><br><br>
        <input type="radio" value="false" {$UAM_PASSWORDENF_FALSE} name="UAM_Password_Enforced">{'UAM_Password_Enforced_false'|@translate}<br>
        <input type="radio" value="true" {$UAM_PASSWORDENF_TRUE} name="UAM_Password_Enforced">{'UAM_Password_Enforced_true'|@translate}&nbsp;<input type="text" name="UAM_Password_Score" value="{$UAM_PASSWORD_SCORE}" size="5" style="text-align: center;"><br><br>

        {'UAM_PasswordTest'|@translate}<input class="cluetip" title="{'UAM_passwtestTitle'|translate}|{'UAM_passwtestTitle_d'|translate}" type="text" name="UAM_Password_Test" value="{$UAM_PASSWORD_TEST}" size="50" style="text-align: left;">&nbsp;&nbsp;&nbsp;
        <input class="submit" type="submit" value="{'PasswordTest'|@translate}" name="PasswordTest">&nbsp;&nbsp;&nbsp;
        {'UAM_ScoreTest'|@translate}{$UAM_PASSWORD_TEST_SCORE}<br><br>
    	</li>

      <ul>
      <li><label class="cluetip" title="{'UAM_passwadmTitle'|translate}|{'UAM_passwadmTitle_d'|translate}">{'UAM_AdminPassword_Enforced'|@translate}</label><br><br>
        <input type="radio" value="false" {$UAM_ADMINPASSWENF_FALSE} name="UAM_AdminPassword_Enforced">{'UAM_AdminPassword_Enforced_false'|@translate}<br>        
        <input type="radio" value="true" {$UAM_ADMINPASSWENF_TRUE} name="UAM_AdminPassword_Enforced">{'UAM_AdminPassword_Enforced_true'|@translate}<br><br>
      </li>
      </ul>
      
    	<li><label class="cluetip" title="{'UAM_mailexcTitle'|translate}|{'UAM_mailexcTitle_d'|translate}">{'UAM_MailExclusion'|@translate}</label><br><br>
        <input type="radio" value="false" {$UAM_MAILEXCLUSION_FALSE} name="UAM_MailExclusion">{'UAM_MailExclusion_false'|@translate}<br>
        <input type="radio" value="true" {$UAM_MAILEXCLUSION_TRUE} name="UAM_MailExclusion">{'UAM_MailExclusion_true'|@translate}<br><br>
    	</li>

{if $UAM_MAILEXCLUSION_TRUE}
  {if $UAM_ERROR_REPORTS4}     
      <div id="uam_leftmargin"><textarea name="UAM_MailExclusion_List" id="UAM_MailExclusion_List" rows="3" cols="80" style="color: red" {$TAG_INPUT_ENABLED}>{$UAM_MAILEXCLUSION_LIST}</textarea></div><br><br>
  {else}
      <div id="uam_leftmargin"><textarea name="UAM_MailExclusion_List" id="UAM_MailExclusion_List" rows="3" cols="80" {$TAG_INPUT_ENABLED}>{$UAM_MAILEXCLUSION_LIST}</textarea></div><br><br>
  {/if}
{else}
      <div id="uam_leftmargin"><textarea name="UAM_MailExclusion_List" id="UAM_MailExclusion_List" rows="3" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UAM_MAILEXCLUSION_LIST}</textarea></div><br><br>
{/if}
    </ul>
  </fieldset>
  </div>
</div>




<div id="instructionConfig2" class="instructionBlock" >
    
  <div id="config2_header" class="instructionBlockHeaderCollapsed" onclick="nbc_blockToggleDisplay('config2_header', 'Config2')">
    <span class="cluetip" title="{'UAM_confirmTitle'|translate}|{'UAM_confirmTitle_d'|translate}">{'UAM_Title2'|@translate}</span>
  </div>
  
  <div id="Config2" class="instructionBlockContent" style="display:none">
    <fieldset>
      <ul>
      	<li><label class="cluetip" title="{'UAM_infomailTitle'|translate}|{'UAM_infomailTitle_d'|translate}">{'UAM_Mail_Info'|@translate}</label><br><br>
          <input type="radio" value="false" {$UAM_MAIL_INFO_FALSE} name="UAM_Mail_Info">{'UAM_Mail_Info_false'|@translate}<br>
          <input type="radio" value="true" {$UAM_MAIL_INFO_TRUE} name="UAM_Mail_Info">{'UAM_Mail_Info_true'|@translate}<br><br>
      	</li>
        <ul>
{if $UAM_MAIL_INFO_TRUE}
        <li><label class="cluetip" title="{'UAM_infotxtTitle'|translate}|{'UAM_infotxtTitle_d'|translate}">{'UAM_MailInfo_Text'|@translate}</label><br><br>
          <textarea name="UAM_MailInfo_Text" id="UAM_MailInfo_Text" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UAM_MAILINFO_TEXT}</textarea><br><br>
        </li>
{else}
          <li><label class="cluetip" title="{'UAM_infotxtTitle'|translate}|{'UAM_infotxtTitle_d'|translate}">{'UAM_MailInfo_Text'|@translate}</label><br><br>
            <textarea name="UAM_MailInfo_Text" id="UAM_MailInfo_Text" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UAM_MAILINFO_TEXT}</textarea><br><br>
          </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UAM_MailInfo_Text'); return false;">FCK Editor On/Off</a>
  </div>
{/if}
-->
        </ul>

      	<li><label class="cluetip" title="{'UAM_confirmmailTitle'|translate}|{'UAM_confirmmailTitle_d'|translate}">{'UAM_Confirm_Mail'|@translate}</label><br><br>
          <input type="radio" value="false" {$UAM_CONFIRM_MAIL_FALSE} name="UAM_Confirm_Mail">{'UAM_Confirm_Mail_false'|@translate}<br>
          <input type="radio" value="true" {$UAM_CONFIRM_MAIL_TRUE} name="UAM_Confirm_Mail">{'UAM_Confirm_Mail_true'|@translate}<br><br>
      	</li>

        <ul>
       	  <li><label class="cluetip" title="{'UAM_adminconfmailTitle'|translate}|{'UAM_adminconfmailTitle_d'|translate}">{'UAM_AdminConfMail'|@translate}</label><br><br>
            <input type="radio" value="false" {$UAM_ADMINCONFMAIL_FALSE} name="UAM_Admin_ConfMail">{'UAM_Admin_ConfMail_false'|@translate}<br>
            <input type="radio" value="true" {$UAM_ADMINCONFMAIL_TRUE} name="UAM_Admin_ConfMail">{'UAM_Admin_ConfMail_true'|@translate}<br><br>
          </li>
{if $UAM_CONFIRM_MAIL_TRUE}
          <li><label class="cluetip" title="{'UAM_confirmtxtTitle'|translate}|{'UAM_confirmtxtTitle_d'|translate}">{'UAM_ConfirmMail_Text'|@translate}</label><br><br>
            <textarea name="UAM_ConfirmMail_Text" id="UAM_ConfirmMail_Text" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_TEXT}</textarea><br><br>
          </li>
{else}
          <li><label class="cluetip" title="{'UAM_confirmtxtTitle'|translate}|{'UAM_confirmtxtTitle_d'|translate}">{'UAM_ConfirmMail_Text'|@translate}</label><br><br>
            <textarea name="UAM_ConfirmMail_Text" id="UAM_ConfirmMail_Text" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_TEXT}</textarea><br><br>
          </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Text'); return false;">FCK Editor On/Off</a>
  </div>
{/if}
-->
        </ul>

        <br><hr><br>
        
        <div id="uam_notice">{'UAM_Confirm_grpstat_notice'|@translate}</div>
        
        <br>
        
        <li>
          <label class="cluetip" title="{'UAM_confirmgrpTitle'|translate}|{'UAM_confirmgrpTitle_d'|translate}">{'UAM_Confirm_Group'|@translate}</label><br><br>
        </li>

        <ul>
          <li><label>{'UAM_No_Confirm_Group'|@translate}</label><br>
            <div id="uam_leftmargin">{html_options name="UAM_No_Confirm_Group" options=$No_Confirm_Group.group_options selected=$No_Confirm_Group.group_selected}</div><br><br>
          </li>
      
          <li><label>{'UAM_Validated_Group'|@translate}</label><br>
            <div id="uam_leftmargin">{html_options name="UAM_Validated_Group" options=$Validated_Group.group_options selected=$Validated_Group.group_selected}</div><br><br>
          </li>
        </ul>

        <li>
          <label class="cluetip" title="{'UAM_confirmstatTitle'|translate}|{'UAM_confirmstatTitle_d'|translate}">{'UAM_Confirm_Status'|@translate}</label><br><br>
        </li>

        <ul>
          <li><label>{'UAM_No_Confirm_Status'|@translate}</label><br>
            <div id="uam_leftmargin">{html_options name="UAM_No_Confirm_Status" options=$No_Confirm_Status.Status_options selected=$No_Confirm_Status.Status_selected}</div><br><br>
          </li>

          <li><label>{'UAM_Validated_Status'|@translate}</label><br>
            <div id="uam_leftmargin">{html_options name="UAM_Validated_Status" options=$Confirm_Status.Status_options selected=$Confirm_Status.Status_selected}</div><br><br>
          </li>
        </ul>

        <br><hr><br>

        <li><label class="cluetip" title="{'UAM_validationlimitTitle'|translate}|{'UAM_validationlimitTitle_d'|translate}">{'UAM_ValidationLimit_Info'|@translate}</label><br><br>
          <input type="radio" value="false" {$UAM_CONFIRMMAIL_TIMEOUT_FALSE} name="UAM_ConfirmMail_TimeOut"> {'UAM_ConfirmMail_TimeOut_false'|@translate}<br>
          <input type="radio" value="true" {$UAM_CONFIRMMAIL_TIMEOUT_TRUE} name="UAM_ConfirmMail_TimeOut"> {'UAM_ConfirmMail_TimeOut_true'|@translate}<input type="text" name="UAM_ConfirmMail_Delay" value="{$UAM_CONFIRMMAIL_DELAY}" size="5" style="text-align: center;"><br><br>
        </li>
    
        <li><label class="cluetip" title="{'UAM_remailTitle'|translate}|{'UAM_remailTitle_d'|translate}">{'UAM_ConfirmMail_Remail'|@translate}</label><br><br>
          <input type="radio" value="false" {$UAM_CONFIRMMAIL_REMAIL_FALSE} name="UAM_ConfirmMail_Remail"> {'UAM_ConfirmMail_Remail_false'|@translate}<br>
          <input type="radio" value="true" {$UAM_CONFIRMMAIL_REMAIL_TRUE} name="UAM_ConfirmMail_Remail"> {'UAM_ConfirmMail_Remail_true'|@translate}<br><br>
        </li>

        <ul>
{if $UAM_CONFIRMMAIL_REMAIL_TRUE}
        <li><label class="cluetip" title="{'UAM_remailtxt1Title'|translate}|{'UAM_remailtxt1Title_d'|translate}">{'UAM_ConfirmMail_ReMail_Txt1'|@translate}</label><br><br>
          <textarea name="UAM_ConfirmMail_ReMail_Txt1" id="UAM_ConfirmMail_ReMail_Txt1" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT1}</textarea><br><br>
        </li>
{else}
        <li><label class="cluetip" title="{'UAM_remailtxt1Title'|translate}|{'UAM_remailtxt1Title_d'|translate}">{'UAM_ConfirmMail_ReMail_Txt1'|@translate}</label><br><br>
          <textarea  name="UAM_ConfirmMail_ReMail_Txt1" id="UAM_ConfirmMail_ReMail_Txt1" rows="10" cols="80" readonly{$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT1}</textarea><br><br>
        </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UAM_ConfirmMail_ReMail_Txt1'); return false;">FCK Editor On/Off</a>
  </div>
{/if}
-->

{if $UAM_CONFIRMMAIL_REMAIL_TRUE}
        <li><label class="cluetip" title="{'UAM_remailtxt2Title'|translate}|{'UAM_remailtxt2Title_d'|translate}">{'UAM_ConfirmMail_ReMail_Txt2'|@translate}</label><br><br>
          <textarea name="UAM_ConfirmMail_ReMail_Txt2" id="UAM_ConfirmMail_ReMail_Txt2" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT2}</textarea><br>
        </li>
{else}
        <li><label class="cluetip" title="{'UAM_remailtxt2Title'|translate}|{'UAM_remailtxt2Title_d'|translate}">{'UAM_ConfirmMail_ReMail_Txt2'|@translate}</label><br><br>
          <textarea name="UAM_ConfirmMail_ReMail_Txt2" id="UAM_ConfirmMail_ReMail_Txt2" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT2}</textarea><br><br>
        </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UAM_ConfirmMail_ReMail_Txt2'); return false;">FCK Editor On/Off</a>
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
    <span class="cluetip" title="{'UAM_miscTitle'|translate}|{'UAM_miscTitle_d'|translate}">{'UAM_Title3'|@translate}</span>
  </div>
  
  <div id="Config3" class="instructionBlockContent" style="display:none">
    <fieldset>
      <ul>
        <li><label class="cluetip" title="{'UAM_ghosttrackerTitle'|translate}|{'UAM_ghosttrackerTitle_d'|translate}">{'UAM_GhostTracker'|@translate}</label><br><br>
          <input type="radio" value="false" {$UAM_GHOSTRACKER_FALSE} name="UAM_GhostUser_Tracker">{'UAM_GhostTracker_false'|@translate}<br>
          <input type="radio" value="true" {$UAM_GHOSTRACKER_TRUE} name="UAM_GhostUser_Tracker">{'UAM_GhostTracker_true'|@translate}<input type="text" name="UAM_GhostTracker_DayLimit" value="{$UAM_GHOSTRACKER_DAYLIMIT}" size="5" style="text-align: center;"><br><br>
        </li>
        
        <ul>
{if $UAM_GHOSTRACKER_TRUE}
          <li><label class="cluetip" title="{'UAM_gttextTitle'|translate}|{'UAM_gttextTitle_d'|translate}">{'UAM_GhostTracker_ReminderText'|@translate}</label><br><br>
            <textarea name="UAM_GhostTracker_ReminderText" id="UAM_GhostTracker_ReminderText" rows="10" cols="80" {$TAG_INPUT_ENABLED}>{$UAM_GHOSTRACKER_REMINDERTEXT}</textarea><br><br>
          </li>
{else}
          <li><label class="cluetip" title="{'UAM_gttextTitle'|translate}|{'UAM_gttextTitle_d'|translate}">{'UAM_GhostTracker_ReminderText'|@translate}</label><br><br>
            <textarea name="UAM_GhostTracker_ReminderText" id="UAM_GhostTracker_ReminderText" rows="10" cols="80" readonly {$TAG_INPUT_ENABLED}>{$UAM_GHOSTRACKER_REMINDERTEXT}</textarea><br><br>
          </li>
{/if}
<!--
{if 'FCK_PATH'|@defined}
  <div style="text-align:right;">
    <a href="#" onClick="toogleEditor('UAM_GhostTracker_ReminderText'); return false;">FCK Editor On/Off</a>
  </div>
{/if}
-->
        </ul>
    
        <li><label class="cluetip" title="{'UAM_lastvisitTitle'|translate}|{'UAM_lastvisitTitle_d'|translate}">{'UAM_LastVisit'|@translate}</label><br><br>
          <input type="radio" value="false" {$UAM_ADDLASTVISIT_FALSE} name="UAM_Add_LastVisit_Column">{'UAM_LastVisit_false'|@translate}<br>
          <input type="radio" value="true" {$UAM_ADDLASTVISIT_TRUE} name="UAM_Add_LastVisit_Column">{'UAM_LastVisit_true'|@translate}<br><br>
        </li>

        <li><label class="cluetip" title="{'UAM_commentTitle'|translate}|{'UAM_commentTitle_d'|translate}">{'UAM_No_Comment_Anonymous'|@translate}</label><br><br>
          <input type="radio" value="false" {$UAM_NO_COMMENT_ANO_FALSE} name="UAM_No_Comment_Anonymous">{'UAM_No_Comment_Anonymous_false'|@translate}<br>
          <input type="radio" value="true" {$UAM_NO_COMMENT_ANO_TRUE} name="UAM_No_Comment_Anonymous">{'UAM_No_Comment_Anonymous_true'|@translate}<br><br>
        </li>
      </ul>
    </fieldset>
  </div>
</div>

<p><input class="submit" type="submit" value="{'submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} >&nbsp;<input class="submit" type="submit" value="{'audit'|@translate}" name="audit"></p>

<div id="instructionTips" class="instructionBlock" >
    
  <div id="Tips_header" class="instructionBlockHeaderCollapsed" onclick="nbc_blockToggleDisplay('Tips_header', 'Tips')">
    <span class="cluetip" title="{'UAM_tipsTitle'|translate}|{'UAM_tipsTitle_d'|translate}">{'UAM_Title4'|@translate}</span>
  </div>
  
  <div id="Tips" class="instructionBlockContent" style="display:none">
    <fieldset>
      <div id="Tips1_header" class="instructionBlockHeaderCollapsed" onclick="nbc_blockToggleDisplay('Tips1_header', 'Tips1')">
        <span>{'UAM_Tips1'|@translate}</span>
      </div>
      <div id="Tips1" class="instructionBlockContent" style="display:none">
        <fieldset>
          {'UAM_Tips1_txt'|@translate}
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