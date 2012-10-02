{combine_script id='jquery' path='themes/default/js/jquery.min.js'}
{combine_script id='jquery.cluetip' require='jquery' path='themes/default/js/plugins/jquery.cluetip.js'}

{combine_css path= $UAM_PATH|@cat:'admin/template/uam.css'}
{if $UAM_THEME=='clear'}{combine_css path= $UAM_PATH|@cat:'admin/template/themes/clear/theme.css'}{/if}
{if $UAM_THEME=='roma'}{combine_css path= $UAM_PATH|@cat:'admin/template/themes/roma/theme.css'}{/if}
{if $UAM_THEME=='default'}{combine_css path= $UAM_PATH|@cat:'admin/template/themes/default/theme.css'}{/if}

{footer_script}{literal}
jQuery().ready(function()
{
  jQuery("#show_UAM_AdminValidation").click(function() {
    jQuery("#UAM_AdminValidation").show("slow");
    jQuery("#hide_UAM_AdminValidation").show("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#hide_UAM_AdminValidation").click(function() {
    jQuery("#show_UAM_AdminValidation").show("slow");
    jQuery("#UAM_AdminValidation").hide("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#show_UAM_ConfirmMail").click(function() {
    jQuery("#UAM_ConfirmMail").show("slow");
    jQuery("#hide_UAM_ConfirmMail").show("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#hide_UAM_ConfirmMail").click(function() {
    jQuery("#show_UAM_ConfirmMail").show("slow");
    jQuery("#UAM_ConfirmMail").hide("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#show_UAM_Change").click(function() {
    jQuery("#UAM_Change").show("slow");
    jQuery("#hide_UAM_Change").show("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#hide_UAM_Change").click(function() {
    jQuery("#show_UAM_Change").show("slow");
    jQuery("#UAM_Change").hide("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#show_UAM_GTReminder").click(function() {
    jQuery("#UAM_GTReminder").show("slow");
    jQuery("#hide_UAM_GTReminder").show("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery("#hide_UAM_GTReminder").click(function() {
    jQuery("#show_UAM_GTReminder").show("slow");
    jQuery("#UAM_GTReminder").hide("slow");
    jQuery(this).hide("slow");
    return false;
  });
  jQuery('.cluetip').cluetip(
  {
    width: 550,
    splitTitle: '|'
  });
});

function blockToggleDisplay(headerId, contentId)
{
  var revHeader = document.getElementById(headerId);
  var revContent = document.getElementById(contentId);

  if (revContent.style.display == 'none')
  {
    revContent.style.display = 'block';
    revHeader.className = 'instructionBlockHeaderExpanded';
  }
  else
  {
    revContent.style.display = 'none';
    revHeader.className = 'instructionBlockHeaderCollapsed';
  }
}

function uam_blockToggleDisplay( headerId, contentId )
{
  if (typeof(headerId)=='string')
  {
   if (headerId.length > 1)
       blockToggleDisplay(headerId, contentId) ;
      document.getElementById("nb_para").value =headerId ;
      document.getElementById("nb_para2").value =contentId;
  }
}
{/literal}{/footer_script}

<div class="titrePage">
  <h2>{'UAM_Title_Tab'|@translate} {$UAM_VERSION}<br>{'UAM_SubTitle1'|@translate}</h2>
</div>

<form method="post" action="" class="general">

  <p>
    <input class="submit" type="submit" value="{'UAM_submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED}>
      &nbsp;
    <input class="submit" type="submit" value="{'UAM_audit'|@translate}" name="audit">
  </p>

  <input name="nb_para" id="nb_para" type="text" value="{$nb_para}" style="display:none"> 
  <input name="nb_para2" id="nb_para2" type="text" value="{$nb_para2}" style="display:none"> 

  <div id="instructionConfig1" class="instructionBlock" >

    <div id="config1_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config1_header', 'Config1')">
      <span class="cluetip" title="{'UAM_Title1'|translate}|{'UAM_restricTitle_d'|translate}">
        {'UAM_Title1'|@translate}
      </span>
    </div>

    <div id="Config1" class="instructionBlockContent" style="display:none">
      <fieldset>
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_Username_Char'|translate}|{'UAM_carexcTitle_d'|translate}">
              {'UAM_Username_Char'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_USERNAME_CHAR_FALSE} name="UAM_Username_Char">
              {'UAM_Username_Char_false'|@translate}<br>
            <input type="radio" value="true" {$UAM_USERNAME_CHAR_TRUE} name="UAM_Username_Char">
              {'UAM_Username_Char_true'|@translate}
            <div id="uam_leftmargin">
              <input type="text" name="UAM_Username_List" value="{$UAM_USERNAME_CHAR_LIST}" size="20" style="text-align: center;">
            </div>
          <br><br>
          </li>
      
          <li>
            <label class="cluetip" title="{'UAM_Password_Enforced'|translate}|{'UAM_passwTitle_d'|translate}">
              {'UAM_Password_Enforced'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_PASSWORDENF_FALSE} name="UAM_Password_Enforced">
              {'UAM_Disable'|@translate}<br>
            <input type="radio" value="true" {$UAM_PASSWORDENF_TRUE} name="UAM_Password_Enforced">
              {'UAM_Password_Enforced_true'|@translate}&nbsp;
            <input type="text" name="UAM_Password_Score" value="{$UAM_PASSWORD_SCORE}" size="5" style="text-align: center;">
          <br><br>
            {'UAM_PasswordTest'|@translate}
              <input class="cluetip" title="{'UAM_passwtestTitle'|translate}|{'UAM_passwtestTitle_d'|translate}" type="text" name="UAM_Password_Test" value="{$UAM_PASSWORD_TEST}" size="50" style="text-align: left;">
              &nbsp;&nbsp;&nbsp;
              <input class="submit" type="submit" value="{'UAM_PasswordTest'|@translate}" name="PasswordTest">
              &nbsp;&nbsp;&nbsp;{'UAM_ScoreTest'|@translate}{$UAM_PASSWORD_TEST_SCORE}
            <br><br>
          </li>

          <ul>
            <li>
              <label class="cluetip" title="{'UAM_AdminPassword_Enforced'|translate}|{'UAM_passwadmTitle_d'|translate}">
                {'UAM_AdminPassword_Enforced'|@translate}
              </label>
            <br><br>
              <input type="radio" value="false" {$UAM_ADMINPASSWENF_FALSE} name="UAM_AdminPassword_Enforced">
                {'UAM_Disable'|@translate}
            <br>        
              <input type="radio" value="true" {$UAM_ADMINPASSWENF_TRUE} name="UAM_AdminPassword_Enforced">
                {'UAM_Enable'|@translate}
            <br><br>
            </li>
          </ul>
      
          <li>
          {if $UAM_EMAIL_MANDATORY}
            <label class="cluetip" title="{'UAM_MailExclusion'|translate}|{'UAM_mailexcTitle_d'|translate}">
              {'UAM_MailExclusion_No'|@translate}
            </label>

            <div class="uam_hide">
            <br><br>
              <input type="radio" value="false" {$UAM_MAILEXCLUSION_FALSE} name="UAM_MailExclusion">
                {'UAM_Disable'|@translate}
            <br>
              <input type="radio" value="true" {$UAM_MAILEXCLUSION_TRUE} name="UAM_MailExclusion">
                {'UAM_MailExclusion_true'|@translate}
            <br><br>
            </div>
          {else}
            <label class="cluetip" title="{'UAM_MailExclusion'|translate}|{'UAM_mailexcTitle_d'|translate}">
              {'UAM_MailExclusion'|@translate}
            </label>

            <br><br>
              <input type="radio" value="false" {$UAM_MAILEXCLUSION_FALSE} name="UAM_MailExclusion">
                {'UAM_Disable'|@translate}
            <br>
              <input type="radio" value="true" {$UAM_MAILEXCLUSION_TRUE} name="UAM_MailExclusion">
                {'UAM_MailExclusion_true'|@translate}
            <br><br>

          {if $UAM_ERROR_REPORTS1}     
            <div id="uam_leftmargin">
              <textarea class="uam_textfields" name="UAM_MailExclusion_List" id="UAM_MailExclusion_List" rows="3" style="color: red" {$TAG_INPUT_ENABLED}>{$UAM_MAILEXCLUSION_LIST}</textarea>
            </div>
            <br><br>
          {else}
            <div id="uam_leftmargin">
              <textarea class="uam_textfields" name="UAM_MailExclusion_List" id="UAM_MailExclusion_List" rows="3" {$TAG_INPUT_ENABLED}>{$UAM_MAILEXCLUSION_LIST}</textarea>
            </div>
            <br><br>
          {/if}
          {/if}
          </li>
        </ul>
      </fieldset>
    </div>
  </div>




  <div id="instructionConfig2" class="instructionBlock" >

    <div id="config2_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config2_header', 'Config2')">
      <span class="cluetip" title="{'UAM_Title2'|translate}|{'UAM_confirmTitle_d'|translate}">
        {'UAM_Title2'|@translate}
      </span>
    </div>
  
    <div id="Config2" class="instructionBlockContent" style="display:none">
      <fieldset>
        <ul>
        	<li>
            <label class="cluetip" title="{'UAM_Confirm_Mail'|translate}|{'UAM_confirmmailTitle_d'|translate}">
              {'UAM_Confirm_Mail'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_CONFIRM_MAIL_FALSE} name="UAM_Confirm_Mail">
              {'UAM_Disable'|@translate}
          <br>
            <input type="radio" value="true" {$UAM_CONFIRM_MAIL_TRUE} name="UAM_Confirm_Mail">
              {'UAM_Confirm_Mail_true'|@translate}
          <br>
            <input type="radio" value="local" {$UAM_CONFIRM_MAIL_LOCAL} name="UAM_Confirm_Mail">
              {'UAM_Confirm_Mail_local'|@translate}
          <br><br>
          </li>
          
        {if $UAM_CONFIRM_MAIL_FALSE}
          <div class="uam_hide">
        {/if}
            <ul>
         	    <li>
                <label class="cluetip" title="{'UAM_Stuffs'|translate}|{'UAM_StuffsTitle_d'|translate}">
                  {'UAM_Stuffs'|@translate}
                </label>
              <br><br>
                <input type="radio" value="false" {$UAM_STUFFS_FALSE} name="UAM_Stuffs">
                  {'UAM_Disable'|@translate}
              <br>
                <input type="radio" value="true" {$UAM_STUFFS_TRUE} name="UAM_Stuffs">
                  {'UAM_Enable'|@translate}
              <br><br>
              </li>

         	    <li>
                <label class="cluetip" title="{'UAM_AdminConfMail'|translate}|{'UAM_adminconfmailTitle_d'|translate}">
                  {'UAM_AdminConfMail'|@translate}
                </label>
              <br><br>
                <input type="radio" value="false" {$UAM_ADMINCONFMAIL_FALSE} name="UAM_Admin_ConfMail">
                  {'UAM_Disable'|@translate}
              <br>
                <input type="radio" value="true" {$UAM_ADMINCONFMAIL_TRUE} name="UAM_Admin_ConfMail">
                  {'UAM_Enable'|@translate}
              <br><br>
              </li>
            </ul>
            <a id="show_UAM_AdminValidation" >{'UAM_Customize_messagesandmails'|translate}</a>
            <a id="hide_UAM_AdminValidation" style="display: none">{'hide details'|translate}</a>
          <fieldset id="UAM_AdminValidation" style="display: none">
          <ul>
            <li>
              <label class="cluetip" title="{'UAM_AdminValidationMail_Subject'|translate}|{'UAM_AdminValidationMail_Subject_d'|translate}">
                {'UAM_AdminValidationMail_Subject'|@translate}
              </label>
            <br><br>
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_AdminValidationMail_Subject" id="UAM_AdminValidationMail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_ADMINVALIDATIONMAIL_SUBJECT}</textarea>
            <br><br>
            </li>

            <ul>
              <li>
                <label class="cluetip" title="{'UAM_AdminValidationMail_Text'|translate}|{'UAM_AdminValidationMail_d'|translate}">
                  {'UAM_AdminValidationMail_Text'|@translate}
                </label>
              <br><br>
                <textarea class="uam_textfields" name="UAM_AdminValidationMail_Text" id="UAM_AdminValidationMail_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_ADMINVALIDATIONMAIL_TEXT}</textarea>
              <br><br>
              </li>
            </ul>
          </ul>

          <ul>
            <li>
              <label class="cluetip" title="{'UAM_ConfirmMail_Subject'|translate}|{'UAM_ConfirmMail_Subject_d'|translate}">
                {'UAM_ConfirmMail_Subject'|@translate}
              </label>
            <br><br>
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_ConfirmMail_Subject" id="UAM_ConfirmMail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_SUBJECT}</textarea>
            <br><br>
            </li>

            <ul>
              <li>
                <label class="cluetip" title="{'UAM_ConfirmMail_Text'|translate}|{'UAM_confirmtxtTitle_d'|translate}">
                  {'UAM_ConfirmMail_Text'|@translate}
                </label>
              <br><br>
              {if $UAM_ERROR_REPORTS2}
                  <textarea class="uam_textfields" name="UAM_ConfirmMail_Text" id="UAM_ConfirmMail_Text" rows="10" style="color: red" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_TEXT}</textarea>
              {else}
                  <textarea class="uam_textfields" name="UAM_ConfirmMail_Text" id="UAM_ConfirmMail_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_TEXT}</textarea>
              {/if}
              <br><br>
              </li>
            </ul>
<!--
            {* if 'FCK_PATH'|@defined *}
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Text'); return false;">FCK Editor On/Off</a>
              </div>
            {* /if *}
-->
          <br><hr><br>
            <li>
              <label class="cluetip" title="{'UAM_confirmmail_custom_Txt1'|translate}|{'UAM_confirmmail_custom1_d'|translate}">
                {'UAM_confirmmail_custom_Txt1'|@translate}
              </label>
            <br><br>
                <textarea class="uam_textfields" name="UAM_ConfirmMail_Custom_Txt1" id="UAM_ConfirmMail_Custom_Txt1" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_CUSTOM_TXT1}</textarea>
            <br><br>
            </li>
            {if 'FCK_PATH'|@defined}
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Custom_Txt1'); return false;">FCK Editor On/Off</a>
              </div>
            {/if}

            <li>
              <label class="cluetip" title="{'UAM_confirmmail_custom_Txt2'|translate}|{'UAM_confirmmail_custom2_d'|translate}">
                {'UAM_confirmmail_custom_Txt2'|@translate}
              </label>
            <br><br>
                <textarea class="uam_textfields" name="UAM_ConfirmMail_Custom_Txt2" id="UAM_ConfirmMail_Custom_Txt2" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_CUSTOM_TXT2}</textarea>
            <br><br>
            </li>
            {if 'FCK_PATH'|@defined}
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Custom_Txt2'); return false;">FCK Editor On/Off</a>
              </div>
            {/if}
          </ul>
          </fieldset>
          <br><hr><br>

            <ul>
         	    <li>
                <label class="cluetip" title="{'UAM_RejectConnexion'|translate}|{'UAM_RejectConnexion_d'|translate}">
                  {'UAM_RejectConnexion'|@translate}
                </label>
            <br><br>
                <input type="radio" value="false" {$UAM_REJECTCONNECT_FALSE} name="UAM_RejectConnexion">
                  {'UAM_Disable'|@translate}
            <br>
                <input type="radio" value="true" {$UAM_REJECTCONNECT_TRUE} name="UAM_RejectConnexion">
                  {'UAM_Enable'|@translate}
            <br><br>
              </li>
            {if $UAM_REJECTLOGIN_FALSE}
              <div class="uam_hide">
            {/if}
              <li>
                <label class="cluetip" title="{'UAM_RejectConnexion_Custom_Txt'|translate}|{'UAM_RejectConnexion_Custom_Txt_d'|translate}">
                  {'UAM_RejectConnexion_Custom_Txt'|@translate}
                </label>
            <br><br>
                <textarea class="uam_textfields" name="UAM_CustomRejectConnexion_Text" id="UAM_CustomRejectConnexion_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_REJECTCONNECT_TEXT}</textarea>
            <br><br>
              </li>
            {if 'FCK_PATH'|@defined}
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_CustomRejectConnexion_Text'); return false;">FCK Editor On/Off</a>
              </div>
            {/if}
            {if $UAM_REJECTLOGIN_FALSE}
              </div>
            {/if}
            </ul>

          <br><hr><br>
          <a id="show_UAM_Change" >{'UAM_Change'|translate}</a>
          <a id="hide_UAM_Change" style="display: none">{'hide details'|translate}</a>
          <ul id="UAM_Change" style="display: none">
            <div id="uam_notice">{'UAM_Confirm_grpstat_notice'|@translate}</div>
              <br>
              <li>
                <label class="cluetip" title="{'UAM_confirmgrpTitle'|translate}|{'UAM_confirmgrpTitle_d'|translate}">
                  {'UAM_Confirm_Group'|@translate}
                </label>
              <br><br>
              </li>

              <ul>
                <li>
                  <label>
                    {'UAM_No_Confirm_Group'|@translate}
                  </label>
                <br>
                  <div id="uam_leftmargin">
                    {html_options name="UAM_No_Confirm_Group" options=$No_Confirm_Group.group_options selected=$No_Confirm_Group.group_selected}
                  </div>
                <br><br>
                </li>

                <li>
                  <label>
                    {'UAM_Validated_Group'|@translate}
                  </label>
                <br>
                  <div id="uam_leftmargin">
                    {html_options name="UAM_Validated_Group" options=$Validated_Group.group_options selected=$Validated_Group.group_selected}
                  </div>
                <br><br>
                </li>
              </ul>

              <li>
                <label class="cluetip" title="{'UAM_confirmstatTitle'|translate}|{'UAM_confirmstatTitle_d'|translate}">
                  {'UAM_Confirm_Status'|@translate}
                </label>
              <br><br>
              </li>

              <ul>
                <li>
                  <label>
                    {'UAM_No_Confirm_Status'|@translate}
                  </label>
                <br>
                  <div id="uam_leftmargin">
                    {html_options name="UAM_No_Confirm_Status" options=$No_Confirm_Status.Status_options selected=$No_Confirm_Status.Status_selected}
                  </div>
                <br><br>
                </li>

                <li>
                  <label>
                    {'UAM_Validated_Status'|@translate}
                  </label>
                <br>
                  <div id="uam_leftmargin">
                    {html_options name="UAM_Validated_Status" options=$Confirm_Status.Status_options selected=$Confirm_Status.Status_selected}
                  </div>
                <br><br>
                </li>
              </ul>

              <li>
                <label class="cluetip" title="{'UAM_confirmlevelTitle'|translate}|{'UAM_confirmlevelTitle_d'|translate}">
                  {'UAM_Confirm_Level'|@translate}
                </label>
              <br><br>
              </li>
              
              <ul>
                <li>
                  <label>
                    {'UAM_No_Valid_Level'|@translate}
                  </label>
                <br>
                  <div id="uam_leftmargin">
                    {html_options name="UAM_No_Valid_Level" options=$No_Valid_Level.Level_options selected=$No_Valid_Level.Level_selected}
                  </div>
                <br><br>
                </li>

                <li>
                  <label>
                    {'UAM_Valid_Level'|@translate}
                  </label>
                <br>
                  <div id="uam_leftmargin">
                    {html_options name="UAM_Valid_Level" options=$Valid_Level.Level_options selected=$Valid_Level.Level_selected}
                  </div>
                <br><br>
                </li>
              </ul>
            </ul>
          <br><hr><br>
            <ul>
              <li>
                <label class="cluetip" title="{'UAM_ValidationLimit_Info'|translate}|{'UAM_validationlimitTitle_d'|translate}">
                  {'UAM_ValidationLimit_Info'|@translate}
                </label>
              <br><br>
                <input type="radio" value="false" {$UAM_CONFIRMMAIL_TIMEOUT_FALSE} name="UAM_ConfirmMail_TimeOut">
                  {'UAM_Disable'|@translate}
              <br>
                <input type="radio" value="true" {$UAM_CONFIRMMAIL_TIMEOUT_TRUE} name="UAM_ConfirmMail_TimeOut">
                  {'UAM_ConfirmMail_TimeOut_true'|@translate}
                <input type="text" name="UAM_ConfirmMail_Delay" value="{$UAM_CONFIRMMAIL_DELAY}" size="5" style="text-align: center;">
              <br><br>
              </li>

              <li>
                <label class="cluetip" title="{'UAM_ConfirmMail_Remail'|translate}|{'UAM_remailTitle_d'|translate}">
                  {'UAM_ConfirmMail_Remail'|@translate}
                </label>
              <br><br>
                <input type="radio" value="false" {$UAM_CONFIRMMAIL_REMAIL_FALSE} name="UAM_ConfirmMail_Remail">
                  {'UAM_Disable'|@translate}
              <br>
                <input type="radio" value="true" {$UAM_CONFIRMMAIL_REMAIL_TRUE} name="UAM_ConfirmMail_Remail">
                  {'UAM_Enable'|@translate}
              <br><br>
              </li>
            <a id="show_UAM_ConfirmMail" >{'UAM_Customize_messagesandmails'|translate}</a>
            <a id="hide_UAM_ConfirmMail" style="display: none">{'hide details'|translate}</a>

              <ul id="UAM_ConfirmMail" style="display: none">
                <li>
                  <label class="cluetip" title="{'UAM_ConfirmMail_ReMail_Subject'|translate}|{'UAM_ConfirmMail_ReMail_Subject_d'|translate}">
                    {'UAM_ConfirmMail_ReMail_Subject'|@translate}
                  </label>
                <br><br>
                  &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_ConfirmMail_Remail_Subject" id="UAM_ConfirmMail_Remail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_SUBJECT}</textarea>
                <br><br>
                </li>

                <ul>
                  <li>
                    <label class="cluetip" title="{'UAM_remailtxt1Title'|translate}|{'UAM_remailtxt1Title_d'|translate}">
                      {'UAM_ConfirmMail_ReMail_Txt1'|@translate}
                    </label>
                  <br><br>
                  {if $UAM_ERROR_REPORTS3}
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt1" id="UAM_ConfirmMail_ReMail_Txt1" rows="10" style="color: red" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT1}</textarea>
                  {else}
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt1" id="UAM_ConfirmMail_ReMail_Txt1" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT1}</textarea>
                  {/if}
                  <br><br>
                  </li>
<!--
                {* if 'FCK_PATH'|@defined *}
                  <div style="text-align:right;">
                    <a href="#" onClick="toogleEditor('UAM_ConfirmMail_ReMail_Txt1'); return false;">FCK Editor On/Off</a>
                  </div>
                {* /if *}
-->

                  <li>
                    <label class="cluetip" title="{'UAM_remailtxt2Title'|translate}|{'UAM_remailtxt2Title_d'|translate}">
                      {'UAM_ConfirmMail_ReMail_Txt2'|@translate}
                    </label>
                  <br><br>
                  {if $UAM_ERROR_REPORTS4}
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt2" id="UAM_ConfirmMail_ReMail_Txt2" rows="10" style="color: red" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT2}</textarea>
                  {else}
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt2" id="UAM_ConfirmMail_ReMail_Txt2" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT2}</textarea>
                  {/if}
                  <br>
                  </li>
<!--
                {* if 'FCK_PATH'|@defined *}
                  <div style="text-align:right;">
                    <a href="#" onClick="toogleEditor('UAM_ConfirmMail_ReMail_Txt2'); return false;">FCK Editor On/Off</a>
                  </div>
                {* /if *}
-->

                </ul>
              </ul>
            </ul>

          {if $UAM_CONFIRMMAIL_TIMEOUT_FALSE and $UAM_CONFIRMMAIL_REMAIL_FALSE}
            <div class="uam_hide">
          {/if}

          <fieldset>
          <ul>
            <li>
              <label class="cluetip" title="{'UAM_USRAuto'|translate}|{'UAM_USRAutoTitle_d'|translate}">
                {'UAM_USRAuto'|@translate}
              </label>
            <br><br>
              <input type="radio" value="false" {$UAM_USRAUTO_FALSE} name="UAM_USRAuto">
                {'UAM_Disable'|@translate}
            <br>
              <input type="radio" value="true" {$UAM_USRAUTO_TRUE} name="UAM_USRAuto">
                {'UAM_Enable'|@translate}
            <br><br>
            </li>

            <ul>
              <li>
                <label class="cluetip" title="{'UAM_USRAutoDel'|translate}|{'UAM_USRAutoDelTitle_d'|translate}">
                  {'UAM_USRAutoDel'|@translate}
                </label>
              <br><br>
                <textarea class="uam_textfields" name="UAM_USRAutoDelText" id="UAM_USRAutoDelText" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_USRAUTODEL_TEXT}</textarea>
              <br><br>
              {if 'FCK_PATH'|@defined}
                <div style="text-align:right;">
                  <a href="#" onClick="toogleEditor('UAM_USRAutoDelText'); return false;">FCK Editor On/Off</a>
                </div>
              {/if}
              </li>

              <li>
                <label class="cluetip" title="{'UAM_USRAutoMail'|translate}|{'UAM_USRAutoMailTitle_d'|translate}">
                  {'UAM_USRAutoMail'|@translate}
                </label>
              <br><br>
                <input type="radio" value="false" {$UAM_USRAUTOMAIL_FALSE} name="UAM_USRAutoMail">
                  {'UAM_Disable'|@translate}
              <br>
                <input type="radio" value="true" {$UAM_USRAUTOMAIL_TRUE} name="UAM_USRAutoMail">
                  {'UAM_Enable'|@translate}
              <br><br><br>
              </li>
            </ul>
          </ul>
          </fieldset>

          {if $UAM_CONFIRMMAIL_TIMEOUT_FALSE and $UAM_CONFIRMMAIL_REMAIL_FALSE}
            </div>
          {/if}

        {if $UAM_CONFIRM_MAIL_FALSE}
          </div>
        {/if}

        </ul>
      </fieldset>
    </div>
  </div>


  <div id="instructionConfig3" class="instructionBlock" >

    <div id="config3_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config3_header', 'Config3')">
      <span class="cluetip" title="{'UAM_Title3'|translate}|{'UAM_GT_MainTitle_d'|translate}">{'UAM_Title3'|@translate}</span>
    </div>
  
    <div id="Config3" class="instructionBlockContent" style="display:none">
      <fieldset>
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_GhostTracker'|translate}|{'UAM_ghosttrackerTitle_d'|translate}">
              {'UAM_GhostTracker'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_GHOSTRACKER_FALSE} name="UAM_GhostUser_Tracker">
              {'UAM_Disable'|@translate}
          <br>
            <input type="radio" value="true" {$UAM_GHOSTRACKER_TRUE} name="UAM_GhostUser_Tracker">
              {'UAM_GhostTracker_true'|@translate}
            <input type="text" name="UAM_GhostTracker_DayLimit" value="{$UAM_GHOSTRACKER_DAYLIMIT}" size="5" style="text-align: center;">
          <br><br>
          </li>
        </ul>
        <a id="show_UAM_GTReminder" >{'UAM_Customize_messagesandmails'|translate}</a>
        <a id="hide_UAM_GTReminder" style="display: none">{'hide details'|translate}</a>
        <ul id="UAM_GTReminder" style="display: none">
          <li>
            <label class="cluetip" title="{'UAM_GTReminder_Subject'|translate}|{'UAM_GTReminder_Subject_d'|translate}">
              {'UAM_GTReminder_Subject'|@translate}
            </label>
          <br><br>
            &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_GTReminder_Subject" id="UAM_GTReminder_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_GTREMINDER_SUBJECT}</textarea>
          <br><br>
          </li>
          <li>
            <label class="cluetip" title="{'UAM_GhostTracker_ReminderText'|translate}|{'UAM_gttextTitle_d'|translate}">
              {'UAM_GhostTracker_ReminderText'|@translate}
            </label>
          <br><br>
            <textarea class="uam_textfields" name="UAM_GhostTracker_ReminderText" id="UAM_GhostTracker_ReminderText" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_GHOSTRACKER_REMINDERTEXT}</textarea>
          <br><br>
          </li>
<!--
          {* if 'FCK_PATH'|@defined *}
            <div style="text-align:right;">
              <a href="#" onClick="toogleEditor('UAM_GhostTracker_ReminderText'); return false;">FCK Editor On/Off</a>
            </div>
          {* /if *}
-->

        </ul>
        <br><hr><br>
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_GTAuto'|translate}|{'UAM_GTAutoTitle_d'|translate}">
              {'UAM_GTAuto'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_GTAUTO_FALSE} name="UAM_GTAuto">
              {'UAM_Disable'|@translate}
          <br>
            <input type="radio" value="true" {$UAM_GTAUTO_TRUE} name="UAM_GTAuto">
              {'UAM_Enable'|@translate}
          <br><br>
          </li>
          
          {if $UAM_GTAUTO_FALSE}
            <div class="uam_hide">
          {/if}
              <ul>
                <li>
                  <label class="cluetip" title="{'UAM_GTAutoDelTitle'|translate}|{'UAM_GTAutoDelTitle_d'|translate}">
                    {'UAM_GTAutoDel'|@translate}
                  </label>
                <br><br>
                    <textarea class="uam_textfields" name="UAM_GTAutoDelText" id="UAM_GTAutoDelText" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_GTAUTODEL_TEXT}</textarea>
                <br><br>
                    
                {if 'FCK_PATH'|@defined}
                  <div style="text-align:right;">
                    <a href="#" onClick="toogleEditor('UAM_GTAutoDelText'); return false;">FCK Editor On/Off</a>
                  </div>
                {/if}
                </li>

                <li>
                  <label class="cluetip" title="{'UAM_GTAutoGp'|translate}|{'UAM_GTAutoGpTitle_d'|translate}">
                    {'UAM_GTAutoGp'|@translate}
                  </label>
                <br><br>
                  <ul>
                    <li>
                      <label>
                        {'UAM_Expired_Group'|@translate}
                      </label>
                      <br>
                        <div id="uam_leftmargin">
                          {html_options name="UAM_Downgrade_Group" options=$Downgrade_Group.group_options selected=$Downgrade_Group.group_selected}
                        </div>
                    <br><br>
                    </li>

                    <li>
                      <label>
                        {'UAM_Expired_Status'|@translate}
                      </label>
                    <br>
                      <div id="uam_leftmargin">
                        {html_options name="UAM_Downgrade_Status" options=$Downgrade_Status.Status_options selected=$Downgrade_Status.Status_selected}
                      </div>
                    <br><br>
                    </li>

                    <li>
                      <label>
                        {'UAM_Expired_Level'|@translate}
                      </label>
                    <br>
                      <div id="uam_leftmargin">
                        {html_options name="UAM_Downgrade_Level" options=$Downgrade_Level.Level_options selected=$Downgrade_Level.Level_selected}
                      </div>
                    <br><br>
                    </li>
                  </ul>

                  <ul>
                    <li>
                      <label class="cluetip" title="{'UAM_GTAutoMail'|translate}|{'UAM_GTAutoMailTitle_d'|translate}">
                        {'UAM_GTAutoMail'|@translate}
                      </label>
                    <br><br>
                      <input type="radio" value="false" {$UAM_GTAUTOMAIL_FALSE} name="UAM_GTAutoMail">
                        {'UAM_Disable'|@translate}
                    <br>
                      <input type="radio" value="true" {$UAM_GTAUTOMAIL_TRUE} name="UAM_GTAutoMail">
                        {'UAM_Enable'|@translate}
                    <br><br>
                      <li>
                        <label class="cluetip" title="{'UAM_GTAutomail_Subject'|translate}|{'UAM_GTAutomail_Subject_d'|translate}">
                          {'UAM_GTAutomail_Subject'|@translate}
                        </label>
                      <br><br>
                        &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_GTAutoMail_Subject" id="UAM_GTAutoMail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_GTAUTOMAIL_SUBJECT}</textarea>
                      <br><br>
                      </li>

                      <ul>
                        <li>
                          <label class="cluetip" title="{'UAM_GTAutomail_Text'|translate}|{'UAM_GTAutomail_Text_d'|translate}">
                            {'UAM_GTAutomail_Text'|@translate}
                          </label>
                        <br><br>
                          <textarea class="uam_textfields" name="UAM_GTAutoMailText" id="UAM_GTAutoMailText" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_GTAUTOMAILTEXT}</textarea>
                        <br><br>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
          {if $UAM_GTAUTO_FALSE}
            </div>
          {/if}
          </ul>
        </ul>
      </fieldset>
    </div>
  </div>

  <div id="instructionConfig5" class="instructionBlock" >

    <div id="config5_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config5_header', 'Config5')">
      <span class="cluetip" title="{'UAM_Title5'|translate}|{'UAM_miscTitle_d'|translate}">{'UAM_Title5'|@translate}</span>
    </div>
  
    <div id="Config5" class="instructionBlockContent" style="display:none">
      <fieldset>
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_Mail_Info'|translate}|{'UAM_infomailTitle_d'|translate}">
              {'UAM_Mail_Info'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_MAIL_INFO_FALSE} name="UAM_Mail_Info">
              {'UAM_Disable'|@translate}
          <br>
            <input type="radio" value="true" {$UAM_MAIL_INFO_TRUE} name="UAM_Mail_Info">
              {'UAM_Enable'|@translate}
          <br><br>
          </li>
        </ul>
      {if $UAM_MAIL_INFO_FALSE}
        <div class="uam_hide">
      {/if}

        <fieldset>
          <ul>
            <li>
              <label class="cluetip" title="{'UAM_HidePassw'|translate}|{'UAM_HidePasswTitle_d'|translate}">
                {'UAM_HidePassw'|@translate}
              </label>
            <br><br>
              <input type="radio" value="false" {$UAM_HIDEPASSW_FALSE} name="UAM_HidePassw">
                {'UAM_Disable'|@translate}
            <br>
              <input type="radio" value="true" {$UAM_HIDEPASSW_TRUE} name="UAM_HidePassw">
                {'UAM_Enable'|@translate}
            <br><br>
            </li>
            
            <li>
              <label class="cluetip" title="{'UAM_MailInfo_Subject'|translate}|{'UAM_MailInfo_Subject_d'|translate}">
                {'UAM_MailInfo_Subject'|@translate}
              </label>
            <br><br>
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_InfoMail_Subject" id="UAM_InfoMail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_INFOMAIL_SUBJECT}</textarea>
            <br><br>
            </li>

            <ul>
              <li>
                <label class="cluetip" title="{'UAM_MailInfo_Text'|translate}|{'UAM_infotxtTitle_d'|translate}">
                  {'UAM_MailInfo_Text'|@translate}
                </label>
              <br><br>
                <textarea class="uam_textfields" name="UAM_MailInfo_Text" id="UAM_MailInfo_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_MAILINFO_TEXT}</textarea>
              <br><br>
              </li>
            </ul>
<!--
            {* if 'FCK_PATH'|@defined *}
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_MailInfo_Text'); return false;">FCK Editor On/Off</a>
              </div>
            {* /if *}
-->
          </ul>
        </fieldset>

      {if $UAM_MAIL_INFO_FALSE}
        </div>
      {/if}
      </fieldset>

      <fieldset>
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_Tracking registered users'|translate}|{'UAM_Tracking registered users_d'|translate}">
              {'UAM_Tracking registered users'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_ADDLASTVISIT_FALSE} name="UAM_Add_LastVisit_Column">
              {'UAM_Disable'|@translate}
          <br>
            <input type="radio" value="true" {$UAM_ADDLASTVISIT_TRUE} name="UAM_Add_LastVisit_Column">
              {'UAM_Enable'|@translate}
          <br><br>
          </li>

          <li>
            <label class="cluetip" title="{'UAM_RedirToProfile'|translate}|{'UAM_RedirTitle_d'|translate}">
              {'UAM_RedirToProfile'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_REDIRTOPROFILE_FALSE} name="UAM_RedirToProfile">
              {'UAM_Disable'|@translate}
          <br>
            <input type="radio" value="true" {$UAM_REDIRTOPROFILE_TRUE} name="UAM_RedirToProfile">
              {'UAM_Enable'|@translate}
          <br><br>
          </li>

          <li>
            <label class="cluetip" title="{'UAM_PwdReset'|translate}|{'UAM_PwdResetTitle_d'|translate}">
              {'UAM_PwdReset'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_PWDRESET_FALSE} name="UAM_PwdReset">
              {'UAM_Disable'|@translate}
          <br>
            <input type="radio" value="true" {$UAM_PWDRESET_TRUE} name="UAM_PwdReset">
              {'UAM_Enable'|@translate}
          <br><br>
          </li>
        </ul>
      </fieldset>

      <fieldset>
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_CustomPasswRetr'|translate}|{'UAM_CustomPasswRetrTitle_d'|translate}">
              {'UAM_CustomPasswRetr'|@translate}
            </label>
          <br><br>
            <input type="radio" value="false" {$UAM_CUSTOMPASSWRETR_FALSE} name="UAM_CustomPasswRetr">
              {'UAM_Disable'|@translate}
          <br>
            <input type="radio" value="true" {$UAM_CUSTOMPASSWRETR_TRUE} name="UAM_CustomPasswRetr">
              {'UAM_Enable'|@translate}
          <br><br><br>
            <textarea class="uam_textfields" name="UAM_CustomPasswRetr_Text" id="UAM_CustomPasswRetr_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CUSTOMPASSWRETR_TEXT}</textarea>
          <br><br>
          </li>
        </ul>
      </fieldset>
    </div>
  </div>

  <p>
    <input class="submit" type="submit" value="{'UAM_submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} >&nbsp;<input class="submit" type="submit" value="{'UAM_audit'|@translate}" name="audit">
  </p>
</form>


<div id="instructionTips" class="instructionBlock" >
  <div id="Backup_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('Backup_header', 'Backup')">
    <span class="cluetip" title="{'UAM_DumpTxt'|translate}|{'UAM_DumpTitle_d'|translate}">{'UAM_DumpTxt'|@translate}</span>
  </div>
  
  <div id="Backup" class="instructionBlockContent" style="display:none">
<fieldset>
<form method="post" action="" class="general">
  <p>
    {'UAM_Dump_Download'|@translate}&nbsp;
      <input type="checkbox" name="dump_download" value="true" {$UAM_DUMP_DOWNLOAD}>
  <br><br>
      <input class="submit" type="submit" value="{'UAM_Save'|@translate}" name="save" {$TAG_INPUT_ENABLED}>
  </p>
</form>
</fieldset>
<fieldset>
<form method="post" action="" class="general">
  <p>
    {'UAM_Restore'|@translate}<br><br>
      <input class="submit" type="submit" value="{'UAM_Restore_File'|@translate}" name="restore" {$TAG_INPUT_ENABLED}>
  </p>
</form>
</fieldset>
  </div>

</div>


<div id="instructionTips" class="instructionBlock" >
  <div id="Tips_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('Tips_header', 'Tips')">
    <span class="cluetip" title="{'UAM_Title4'|translate}|{'UAM_tipsTitle_d'|translate}">{'UAM_Title4'|@translate}</span>
  </div>
  
  <div id="Tips" class="instructionBlockContent" style="display:none">
    <fieldset>
      <div id="Tips1_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('Tips1_header', 'Tips1')">
        <span>{'UAM_Tips1'|@translate}</span>
      </div>
      <div id="Tips1" class="instructionBlockContent" style="display:none">
        <fieldset>
          {'UAM_Tips1_txt'|@translate}
        </fieldset>
      </div>
    </fieldset>

    <fieldset>
      <div id="Tips2_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('Tips2_header', 'Tips2')">
        <span>{'UAM_Tips2'|@translate}</span>
      </div>
      <div id="Tips2" class="instructionBlockContent" style="display:none">
        <fieldset>
          {'UAM_Tips2_txt'|@translate}
        </fieldset>
      </div>
    </fieldset>
  </div>

</div>


<fieldset>
  {'UAM_Support_txt'|@translate}
</fieldset>

{footer_script}{literal}
  var n1=document.getElementById("nb_para").value;
  var n2=document.getElementById("nb_para2").value;
   uam_blockToggleDisplay(n1,n2);
{/literal}{/footer_script}

{html_head}
<script type="text/javascript">
jQuery(document).ready(function() {ldelim}
  jQuery('#theAdminPage #the_page').addClass('{$themeconf.name}');
	jQuery(".infos").fadeOut(800).fadeIn(1200).fadeOut(400).fadeIn(800).fadeOut(400);
	//jQuery(".errors").fadeOut(200).fadeIn(200).fadeOut(300).fadeIn(300).fadeOut(400).fadeIn(400); 
});
</script>
{/html_head}