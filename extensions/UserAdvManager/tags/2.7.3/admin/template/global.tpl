{combine_script id='jquery' path='themes/default/js/jquery.min.js'}
{combine_script id='jquery.cluetip' require='jquery' path='themes/default/js/plugins/jquery.cluetip.js'}

{combine_css path= $UAM_PATH|@cat:'admin/template/uam.css'}
{if $UAM_THEME=='clear'}{combine_css path= $UAM_PATH|@cat:'admin/template/themes/clear/theme.css'}{/if}
{if $UAM_THEME=='roma'}{combine_css path= $UAM_PATH|@cat:'admin/template/themes/roma/theme.css'}{/if}
{if $UAM_THEME=='default'}{combine_css path= $UAM_PATH|@cat:'admin/template/themes/default/theme.css'}{/if}

{footer_script}{literal}
jQuery().ready(function()
{
  jQuery("#UAM_Confirm_Mail_true, #UAM_Confirm_Mail_local").click(function() {
    jQuery("#UAM_CONFIRM_MAIL__").show("slow");
  });
  jQuery("#UAM_Confirm_Mail_false").click(function() {
    jQuery("#UAM_CONFIRM_MAIL__").hide("slow");
  });
  jQuery("#UAM_ConfirmMail_Remail_true, #UAM_ConfirmMail_TimeOut_true").click(function() {
    jQuery("#UAM_ConfirmMail_field").show("slow");
  });
  jQuery("#UAM_ConfirmMail_TimeOut_false").click(function() {
    if ($("input[name='UAM_ConfirmMail_Remail']:checked").val()=="false" )
    {
      jQuery("#UAM_ConfirmMail_field").hide("slow");
    }
  });
  jQuery("#UAM_ConfirmMail_Remail_false").click(function() {
    if ( $("input[name='UAM_ConfirmMail_TimeOut']:checked").val()=="false" )
    {
      jQuery("#UAM_ConfirmMail_field").hide("slow");
    }
  });
  jQuery("#UAM_RejectConnexion_true").click(function() {
    jQuery("#UAM_REJECTLOGIN").show("slow");
  });
  jQuery("#UAM_RejectConnexion_false").click(function() {
    jQuery("#UAM_REJECTLOGIN").hide("slow");
  });
  
  jQuery("#UAM_GhostUser_Tracker_true").click(function() {
    jQuery("#UAM_GHOSTRACKER_OPT").show("slow");
  });
  jQuery("#UAM_GhostUser_Tracker_false").click(function() {
    jQuery("#UAM_GHOSTRACKER_OPT").hide("slow");
  });
  jQuery("#UAM_GTAuto_true").click(function() {
    jQuery("#UAM_GTAUTO").show("slow");
  });
  jQuery("#UAM_GTAuto_false").click(function() {
    jQuery("#UAM_GTAUTO").hide("slow");
  });
  jQuery("#UAM_Mail_Info_true").click(function() {
    jQuery("#UAM_MAIL_INFO").show("slow");
  });
  jQuery("#UAM_Mail_Info_false").click(function() {
    jQuery("#UAM_MAIL_INFO").hide("slow");
  });
  jQuery("#UAM_CustomPasswRetr_true").click(function() {
    jQuery("#UAM_CustomPasswRetr").show("slow");
  });
  jQuery("#UAM_CustomPasswRetr_false").click(function() {
    jQuery("#UAM_CustomPasswRetr").hide("slow");
  });
 
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
  <h2>{'UAM_Title_Tab'|@translate} {$UAM_VERSION}<br/>{'UAM_SubTitle1'|@translate}</h2>
</div>

<form method="post" class="general">

  <p>
    <input class="submit" type="submit" value="{'UAM_submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED}/>
      &nbsp;
    <input class="submit" type="submit" value="{'UAM_audit'|@translate}" name="audit"/>
    <input name="nb_para" id="nb_para" type="text" value="{$nb_para}" style="display:none"/> 
    <input name="nb_para2" id="nb_para2" type="text" value="{$nb_para2}" style="display:none"/> 
  </p>


  <div id="instructionConfig1" class="instructionBlock" >

    <div id="config1_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config1_header', 'Config1')">
      <span class="cluetip" title="{'UAM_Title1'|translate}|{'UAM_restricTitle_d'|translate}">
        {'UAM_Title1'|@translate}
      </span>
    </div>

    <div id="Config1" class="instructionBlockContent" style="display:none">
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_Username_Char'|translate}|{'UAM_carexcTitle_d'|translate}">
              {'UAM_Username_Char'|@translate}
            </label>
            <label for="UAM_Username_Char_false"><input id="UAM_Username_Char_false" type="radio" value="false" {$UAM_USERNAME_CHAR_FALSE} name="UAM_Username_Char"/>
              {'UAM_Username_Char_false'|@translate}<br/>
            </label>
            <label for="UAM_Username_Char_true"><input id="UAM_Username_Char_true" type="radio" value="true" {$UAM_USERNAME_CHAR_TRUE} name="UAM_Username_Char"/>
              {'UAM_Username_Char_true'|@translate}
            </label>
            <div class="uam_leftmargin">
              <input type="text" name="UAM_Username_List" value="{$UAM_USERNAME_CHAR_LIST}" size="20" style="text-align: center;"/>
            </div>
          </li>

          <li>
          {if $UAM_EMAIL_MANDATORY}
            <label class="cluetip" title="{'UAM_MailExclusion'|translate}|{'UAM_mailexcTitle_d'|translate}">
              {'UAM_MailExclusion_No'|@translate}
            </label>

            <div class="uam_hide">

              <label for="UAM_MailExclusion_false"><input id="UAM_MailExclusion_false" value="false" {$UAM_MAILEXCLUSION_FALSE} name="UAM_MailExclusion" type="radio"/>
                {'UAM_Disable'|@translate}
              </label>
              <label for="UAM_MailExclusion_true"><input id="UAM_MailExclusion_true" value="true" {$UAM_MAILEXCLUSION_TRUE} name="UAM_MailExclusion" type="radio"/>
                {'UAM_MailExclusion_true'|@translate}
              </label>

            </div>
          {else}
            <label class="cluetip" title="{'UAM_MailExclusion'|translate}|{'UAM_mailexcTitle_d'|translate}">
              {'UAM_MailExclusion'|@translate}
            </label>

            <label for="UAM_MailExclusion_false"><input id="UAM_MailExclusion_false" value="false" {$UAM_MAILEXCLUSION_FALSE} name="UAM_MailExclusion" type="radio"/>
                {'UAM_Disable'|@translate}
            </label>

            <label for="UAM_MailExclusion_true"><input id="UAM_MailExclusion_true" value="true" {$UAM_MAILEXCLUSION_TRUE} name="UAM_MailExclusion" type="radio"/>
                {'UAM_MailExclusion_true'|@translate}
            </label>

            {if $UAM_ERROR_REPORTS1}     
              <div class="uam_leftmargin">
                <textarea class="uam_textfields" name="UAM_MailExclusion_List" id="UAM_MailExclusion_List" rows="3" style="color: red" {$TAG_INPUT_ENABLED}>{$UAM_MAILEXCLUSION_LIST}</textarea>
              </div>
            {else}
              <div class="uam_leftmargin">
                <textarea class="uam_textfields" name="UAM_MailExclusion_List" id="UAM_MailExclusion_List" rows="3" {$TAG_INPUT_ENABLED}>{$UAM_MAILEXCLUSION_LIST}</textarea>
              </div>
            {/if}
          {/if}
          </li>
        </ul>
    </div>
  </div>




  <div id="instructionConfig2" class="instructionBlock" >

    <div id="config2_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config2_header', 'Config2')">
      <span class="cluetip" title="{'UAM_Title2'|translate}|{'UAM_confirmTitle_d'|translate}">
        {'UAM_Title2'|@translate}
      </span>
    </div>
  
    <div id="Config2" class="instructionBlockContent" style="display:none">
        <ul>
        	<li>
            <label class="cluetip" title="{'UAM_Confirm_Mail'|translate}|{'UAM_confirmmailTitle_d'|translate}">
              {'UAM_Confirm_Mail'|@translate}
            </label>
            <label for="UAM_Confirm_Mail_false"><input type="radio" id="UAM_Confirm_Mail_false" value="false" {$UAM_CONFIRM_MAIL_FALSE} name="UAM_Confirm_Mail"/>
              {'UAM_Disable'|@translate}
            </label>
            <label for="UAM_Confirm_Mail_true"><input type="radio" id="UAM_Confirm_Mail_true" value="true" {$UAM_CONFIRM_MAIL_TRUE} name="UAM_Confirm_Mail"/>
              {'UAM_Confirm_Mail_true'|@translate}
            </label>
            <label for="UAM_Confirm_Mail_local"><input type="radio" id="UAM_Confirm_Mail_local" value="local" {$UAM_CONFIRM_MAIL_LOCAL} name="UAM_Confirm_Mail"/>
              {'UAM_Confirm_Mail_local'|@translate}
            </label>
          </li>
        </ul>
          <div id="UAM_CONFIRM_MAIL__" {if $UAM_CONFIRM_MAIL_FALSE}style="display:none"{/if}>
            <ul>
         	    <li>
                <label class="cluetip" title="{'UAM_Stuffs'|translate}|{'UAM_StuffsTitle_d'|translate}">
                  {'UAM_Stuffs'|@translate}
                </label>
              
                <label for="UAM_Stuffs_false"><input id="UAM_Stuffs_false" value="false" {$UAM_STUFFS_FALSE} name="UAM_Stuffs" type="radio"/>
                  {'UAM_Disable'|@translate}
                </label>
                <label for="UAM_Stuffs_true"><input id="UAM_Stuffs_true" value="true" {$UAM_STUFFS_TRUE} name="UAM_Stuffs" type="radio"/>
                  {'UAM_Enable'|@translate}
                </label>
              
              </li>

         	    <li>
                <label class="cluetip" title="{'UAM_AdminConfMail'|translate}|{'UAM_adminconfmailTitle_d'|translate}">
                  {'UAM_AdminConfMail'|@translate}
                </label>
                <label for="UAM_Admin_ConfMail_false"><input id="UAM_Admin_ConfMail_false" value="false" {$UAM_ADMINCONFMAIL_FALSE} name="UAM_Admin_ConfMail" type="radio"/>
                  {'UAM_Disable'|@translate}
                </label>
                <label for="UAM_Admin_ConfMail_true"><input id="UAM_Admin_ConfMail_true" value="true" {$UAM_ADMINCONFMAIL_TRUE} name="UAM_Admin_ConfMail" type="radio"/>
                  {'UAM_Enable'|@translate}
                </label>
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
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_AdminValidationMail_Subject" id="UAM_AdminValidationMail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_ADMINVALIDATIONMAIL_SUBJECT}</textarea>
            </li>
            <li style="list-style-type: none;">
            <ul>
              <li>
                <label class="cluetip" title="{'UAM_AdminValidationMail_Text'|translate}|{'UAM_AdminValidationMail_d'|translate}">
                  {'UAM_AdminValidationMail_Text'|@translate}
                </label>
                <textarea class="uam_textfields" name="UAM_AdminValidationMail_Text" id="UAM_AdminValidationMail_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_ADMINVALIDATIONMAIL_TEXT}</textarea>
              </li>
            </ul>
            </li>
          </ul>
          <ul>
            <li>
              <label class="cluetip" title="{'UAM_ConfirmMail_Subject'|translate}|{'UAM_ConfirmMail_Subject_d'|translate}">
                {'UAM_ConfirmMail_Subject'|@translate}
              </label>
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_ConfirmMail_Subject" id="UAM_ConfirmMail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_SUBJECT}</textarea>
            </li>
            <li style="list-style-type: none;">
            <ul>
              <li>
                <label class="cluetip" title="{'UAM_ConfirmMail_Text'|translate}|{'UAM_confirmtxtTitle_d'|translate}">
                  {'UAM_ConfirmMail_Text'|@translate}
                </label>
              {if $UAM_ERROR_REPORTS2}
                  <textarea class="uam_textfields" name="UAM_ConfirmMail_Text" id="UAM_ConfirmMail_Text" rows="10" style="color: red" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_TEXT}</textarea>
              {else}
                  <textarea class="uam_textfields" name="UAM_ConfirmMail_Text" id="UAM_ConfirmMail_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_TEXT}</textarea>
              {/if}
              </li>
            </ul>
            </li>
<!--
            {* if 'FCK_PATH'|@defined *}
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Text'); return false;">FCK Editor On/Off</a>
              </div>
            {* /if *}
-->
          <li style="list-style-type: none;">
          <br/><hr/><br/>
          </li>
            <li>
              <label class="cluetip" title="{'UAM_confirmmail_custom_Txt1'|translate}|{'UAM_confirmmail_custom1_d'|translate}">
                {'UAM_confirmmail_custom_Txt1'|@translate}
              </label>
                <textarea class="uam_textfields" name="UAM_ConfirmMail_Custom_Txt1" id="UAM_ConfirmMail_Custom_Txt1" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_CUSTOM_TXT1}</textarea>
            </li>
            {if 'FCK_PATH'|@defined}
            <li style="list-style-type: none;">
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Custom_Txt1'); return false;">FCK Editor On/Off</a>
              </div>
            </li>
            {/if}
            <li>
              <label class="cluetip" title="{'UAM_confirmmail_custom_Txt2'|translate}|{'UAM_confirmmail_custom2_d'|translate}">
                {'UAM_confirmmail_custom_Txt2'|@translate}
              </label>
                <textarea class="uam_textfields" name="UAM_ConfirmMail_Custom_Txt2" id="UAM_ConfirmMail_Custom_Txt2" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_CUSTOM_TXT2}</textarea>
            </li>
            {if 'FCK_PATH'|@defined}
            <li style="list-style-type: none;">
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_ConfirmMail_Custom_Txt2'); return false;">FCK Editor On/Off</a>
              </div>
            </li>
            {/if}
          </ul>
          </fieldset>
          <br/><hr/><br/>
            <ul>
         	    <li>
                <label class="cluetip" title="{'UAM_RejectConnexion'|translate}|{'UAM_RejectConnexion_d'|translate}">
                  {'UAM_RejectConnexion'|@translate}
                </label>
            
                <label for="UAM_RejectConnexion_false"><input id="UAM_RejectConnexion_false" type="radio" value="false" {$UAM_REJECTCONNECT_FALSE} name="UAM_RejectConnexion"/>
                  {'UAM_Disable'|@translate}
                </label>
                <label for="UAM_RejectConnexion_true"><input id="UAM_RejectConnexion_true" type="radio" value="true" {$UAM_REJECTCONNECT_TRUE} name="UAM_RejectConnexion"/>
                  {'UAM_Enable'|@translate}
                </label>
              </li>
              <li id="UAM_REJECTLOGIN" {if $UAM_REJECTCONNECT_FALSE}style="display: none"{/if}>
                <label class="cluetip" title="{'UAM_RejectConnexion_Custom_Txt'|translate}|{'UAM_RejectConnexion_Custom_Txt_d'|translate}">
                  {'UAM_RejectConnexion_Custom_Txt'|@translate}
                </label>
                <textarea class="uam_textfields" name="UAM_CustomRejectConnexion_Text" id="UAM_CustomRejectConnexion_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_REJECTCONNECT_TEXT}</textarea>
            {if 'FCK_PATH'|@defined}
            <li style="list-style-type: none;">
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_CustomRejectConnexion_Text'); return false;">FCK Editor On/Off</a>
              </div>
            </li>
            {/if}
              </li>
            </ul>
          <br/><hr/><br/>
          <a id="show_UAM_Change" >{'UAM_Change'|translate}</a>
          <a id="hide_UAM_Change" style="display: none">{'hide details'|translate}</a>
          <fieldset id="UAM_Change" style="display: none">
          <ul>
          <li style="list-style-type: none;">
            <div id="uam_notice">{'UAM_Confirm_grpstat_notice'|@translate}</div>
          </li>
              <li style="list-style-type: none;">
              <br/>
              </li>
              <li>
                <label class="cluetip" title="{'UAM_confirmgrpTitle'|translate}|{'UAM_confirmgrpTitle_d'|translate}">
                  {'UAM_Confirm_Group'|@translate}
                </label>
              </li>
              <li style="list-style-type: none;">
              <ul>
                <li>
                  <label>
                    {'UAM_No_Confirm_Group'|@translate}
                  </label>
                  <div class="uam_leftmargin">
                    {html_options name="UAM_No_Confirm_Group" options=$No_Confirm_Group.group_options selected=$No_Confirm_Group.group_selected}
                  </div>
                </li>
                <li>
                  <label>
                    {'UAM_Validated_Group'|@translate}
                  </label>
                  <div class="uam_leftmargin">
                    {html_options name="UAM_Validated_Group" options=$Validated_Group.group_options selected=$Validated_Group.group_selected}
                  </div>
                </li>
              </ul>
              </li>
              <li>
                <label class="cluetip" title="{'UAM_confirmstatTitle'|translate}|{'UAM_confirmstatTitle_d'|translate}">
                  {'UAM_Confirm_Status'|@translate}
                </label>
              </li>
              <li style="list-style-type: none;">
              <ul>
                <li>
                  <label>
                    {'UAM_No_Confirm_Status'|@translate}
                  </label>
                  <div class="uam_leftmargin">
                    {html_options name="UAM_No_Confirm_Status" options=$No_Confirm_Status.Status_options selected=$No_Confirm_Status.Status_selected}
                  </div>
                </li>
                <li>
                  <label>
                    {'UAM_Validated_Status'|@translate}
                  </label>
                  <div class="uam_leftmargin">
                    {html_options name="UAM_Validated_Status" options=$Confirm_Status.Status_options selected=$Confirm_Status.Status_selected}
                  </div>
                </li>
              </ul>
              </li>
              <li>
                <label class="cluetip" title="{'UAM_confirmlevelTitle'|translate}|{'UAM_confirmlevelTitle_d'|translate}">
                  {'UAM_Confirm_Level'|@translate}
                </label>
              </li>
              <li style="list-style-type: none;">
              <ul>
                <li>
                  <label>
                    {'UAM_No_Valid_Level'|@translate}
                  </label>
                  <div class="uam_leftmargin">
                    {html_options name="UAM_No_Valid_Level" options=$No_Valid_Level.Level_options selected=$No_Valid_Level.Level_selected}
                  </div>
                </li>
                <li>
                  <label>
                    {'UAM_Valid_Level'|@translate}
                  </label>
                  <div class="uam_leftmargin">
                    {html_options name="UAM_Valid_Level" options=$Valid_Level.Level_options selected=$Valid_Level.Level_selected}
                  </div>
                </li>
              </ul>
              </li>
            </ul>
            </fieldset>
          <br/><hr/><br/>
            <ul>
              <li>
                <label class="cluetip" title="{'UAM_ValidationLimit_Info'|translate}|{'UAM_validationlimitTitle_d'|translate}">
                  {'UAM_ValidationLimit_Info'|@translate}
                </label>
                <label for="UAM_ConfirmMail_TimeOut_false" >
                  <input id="UAM_ConfirmMail_TimeOut_false" type="radio" value="false" {$UAM_CONFIRMMAIL_TIMEOUT_FALSE} name="UAM_ConfirmMail_TimeOut"/>
                  {'UAM_Disable'|@translate}
                </label>
                <label for="UAM_ConfirmMail_TimeOut_true" >
                  <input id="UAM_ConfirmMail_TimeOut_true" type="radio" value="true" {$UAM_CONFIRMMAIL_TIMEOUT_TRUE} name="UAM_ConfirmMail_TimeOut"/>
                  {'UAM_ConfirmMail_TimeOut_true'|@translate}
                </label>
                  <input type="text" name="UAM_ConfirmMail_Delay" value="{$UAM_CONFIRMMAIL_DELAY}" size="5" style="text-align: center;"/>
              </li>
              <li>
                <label class="cluetip" title="{'UAM_ConfirmMail_Remail'|translate}|{'UAM_remailTitle_d'|translate}">
                  {'UAM_ConfirmMail_Remail'|@translate}
                </label>
                <label for="UAM_ConfirmMail_Remail_false" ><input id="UAM_ConfirmMail_Remail_false" type="radio" value="false" {$UAM_CONFIRMMAIL_REMAIL_FALSE} name="UAM_ConfirmMail_Remail"/>
                  {'UAM_Disable'|@translate}
                </label>
                <label for="UAM_ConfirmMail_Remail_true" ><input id="UAM_ConfirmMail_Remail_true" type="radio" value="true" {$UAM_CONFIRMMAIL_REMAIL_TRUE} name="UAM_ConfirmMail_Remail"/>
                  {'UAM_Enable'|@translate}
                </label>
              </li>
            <li style="list-style-type: none;">
              <a id="show_UAM_ConfirmMail" >{'UAM_Customize_messagesandmails'|translate}</a>
              <a id="hide_UAM_ConfirmMail" style="display: none">{'hide details'|translate}</a>
            </li>
            <fieldset id="UAM_ConfirmMail" style="display: none">
              <ul>
                <li>
                  <label class="cluetip" title="{'UAM_ConfirmMail_ReMail_Subject'|translate}|{'UAM_ConfirmMail_ReMail_Subject_d'|translate}">
                    {'UAM_ConfirmMail_ReMail_Subject'|@translate}
                  </label>
                  &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_ConfirmMail_Remail_Subject" id="UAM_ConfirmMail_Remail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_SUBJECT}</textarea>
                </li>
                <ul>
                  <li>
                    <label class="cluetip" title="{'UAM_remailtxt1Title'|translate}|{'UAM_remailtxt1Title_d'|translate}">
                      {'UAM_ConfirmMail_ReMail_Txt1'|@translate}
                    </label>
                  {if $UAM_ERROR_REPORTS3}
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt1" id="UAM_ConfirmMail_ReMail_Txt1" rows="10" style="color: red" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT1}</textarea>
                  {else}
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt1" id="UAM_ConfirmMail_ReMail_Txt1" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT1}</textarea>
                  {/if}
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
                  {if $UAM_ERROR_REPORTS4}
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt2" id="UAM_ConfirmMail_ReMail_Txt2" rows="10" style="color: red" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT2}</textarea>
                  {else}
                    <textarea class="uam_textfields" name="UAM_ConfirmMail_ReMail_Txt2" id="UAM_ConfirmMail_ReMail_Txt2" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CONFIRMMAIL_REMAIL_TXT2}</textarea>
                  {/if}
                  <br/>
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
            </fieldset>
            </ul>
          <fieldset id="UAM_ConfirmMail_field" {if $UAM_CONFIRMMAIL_TIMEOUT_FALSE and $UAM_CONFIRMMAIL_REMAIL_FALSE}style="display:none"{/if}>
          <ul>
            <li>
              <label class="cluetip" title="{'UAM_USRAuto'|translate}|{'UAM_USRAutoTitle_d'|translate}">
                {'UAM_USRAuto'|@translate}
              </label>
            
              <label for="UAM_USRAuto_false"><input id="UAM_USRAuto_false" value="false" {$UAM_USRAUTO_FALSE} name="UAM_USRAuto" type="radio"/>
                {'UAM_Disable'|@translate}
              </label>
              <label for="UAM_USRAuto_true"><input id="UAM_USRAuto_true" value="true" {$UAM_USRAUTO_TRUE} name="UAM_USRAuto" type="radio"/>
                {'UAM_Enable'|@translate}
              </label>
            <ul>
              <li>
                <label class="cluetip" title="{'UAM_USRAutoDel'|translate}|{'UAM_USRAutoDelTitle_d'|translate}">
                  {'UAM_USRAutoDel'|@translate}
                </label>
                <textarea class="uam_textfields" name="UAM_USRAutoDelText" id="UAM_USRAutoDelText" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_USRAUTODEL_TEXT}</textarea>
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
                <label for="UAM_USRAutoMail_false"><input id="UAM_USRAutoMail_false" value="false" {$UAM_USRAUTOMAIL_FALSE} name="UAM_USRAutoMail" type="radio"/>
                  {'UAM_Disable'|@translate}
                </label>
                <label for="UAM_USRAutoMail_true"><input id="UAM_USRAutoMail_true" value="true" {$UAM_USRAUTOMAIL_TRUE} name="UAM_USRAutoMail" type="radio"/>
                  {'UAM_Enable'|@translate}
                </label>
              </li>
            </ul>
            </li>
          </ul>
          </fieldset>
          </div>
    </div>
  </div>

  <div id="instructionConfig3" class="instructionBlock" >

    <div id="config3_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config3_header', 'Config3')">
      <span class="cluetip" title="{'UAM_Title3'|translate}|{'UAM_GT_MainTitle_d'|translate}">{'UAM_Title3'|@translate}</span>
    </div>
  
    <div id="Config3" class="instructionBlockContent" style="display:none">
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_GhostTracker'|translate}|{'UAM_ghosttrackerTitle_d'|translate}">
              {'UAM_GhostTracker'|@translate}
            </label>
            <label for="UAM_GhostUser_Tracker_false">
              <input id="UAM_GhostUser_Tracker_false" type="radio" value="false" {$UAM_GHOSTRACKER_FALSE} name="UAM_GhostUser_Tracker"/>
              {'UAM_Disable'|@translate}
            </label>
            <label for="UAM_GhostUser_Tracker_true">
              <input id="UAM_GhostUser_Tracker_true" type="radio" value="true" {$UAM_GHOSTRACKER_TRUE} name="UAM_GhostUser_Tracker"/>
              {'UAM_GhostTracker_true'|@translate}
            </label>
            <input type="text" name="UAM_GhostTracker_DayLimit" value="{$UAM_GHOSTRACKER_DAYLIMIT}" size="5" style="text-align: center;"/>
          
          </li>
        </ul>
        <div id="UAM_GHOSTRACKER_OPT" {if $UAM_GHOSTRACKER_FALSE}style="display: none"{/if}>
          <a id="show_UAM_GTReminder" >{'UAM_Customize_messagesandmails'|translate}</a>
          <a id="hide_UAM_GTReminder" style="display: none">{'hide details'|translate}</a>
          <fieldset id="UAM_GTReminder" style="display: none">
          <ul>
            <li>
              <label class="cluetip" title="{'UAM_GTReminder_Subject'|translate}|{'UAM_GTReminder_Subject_d'|translate}">
                {'UAM_GTReminder_Subject'|@translate}
              </label>
            
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_GTReminder_Subject" id="UAM_GTReminder_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_GTREMINDER_SUBJECT}</textarea>
            
            </li>
            <li>
              <label class="cluetip" title="{'UAM_GhostTracker_ReminderText'|translate}|{'UAM_gttextTitle_d'|translate}">
                {'UAM_GhostTracker_ReminderText'|@translate}
              </label>
            
              <textarea class="uam_textfields" name="UAM_GhostTracker_ReminderText" id="UAM_GhostTracker_ReminderText" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_GHOSTRACKER_REMINDERTEXT}</textarea>
            
            </li>
  <!--
            {* if 'FCK_PATH'|@defined *}
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_GhostTracker_ReminderText'); return false;">FCK Editor On/Off</a>
              </div>
            {* /if *}
  -->
  
          </ul>
          </fieldset>
          <br/><hr/><br/>
          <ul>
            <li>
              <label class="cluetip" title="{'UAM_GTAuto'|translate}|{'UAM_GTAutoTitle_d'|translate}">
                {'UAM_GTAuto'|@translate}
              </label>

              <label for="UAM_GTAuto_false"><input id="UAM_GTAuto_false" type="radio" value="false" {$UAM_GTAUTO_FALSE} name="UAM_GTAuto"/>
                {'UAM_Disable'|@translate}
              </label>

              <label for="UAM_GTAuto_true"><input id="UAM_GTAuto_true" type="radio" value="true" {$UAM_GTAUTO_TRUE} name="UAM_GTAuto"/>
                {'UAM_Enable'|@translate}
              </label>

              <ul id="UAM_GTAUTO" {if $UAM_GTAUTO_FALSE}style="display: none"{/if}>
                <li>
                  <label class="cluetip" title="{'UAM_GTAutoDelTitle'|translate}|{'UAM_GTAutoDelTitle_d'|translate}">
                    {'UAM_GTAutoDel'|@translate}
                  </label>

                    <textarea class="uam_textfields" name="UAM_GTAutoDelText" id="UAM_GTAutoDelText" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_GTAUTODEL_TEXT}</textarea>

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

                  <ul>
                    <li>
                      <label>
                        {'UAM_Expired_Group'|@translate}
                      </label>
                        <div class="uam_leftmargin">
                          {html_options name="UAM_Downgrade_Group" options=$Downgrade_Group.group_options selected=$Downgrade_Group.group_selected}
                        </div>
                    </li>
  
                    <li>
                      <label>
                        {'UAM_Expired_Status'|@translate}
                      </label>
                      <div class="uam_leftmargin">
                        {html_options name="UAM_Downgrade_Status" options=$Downgrade_Status.Status_options selected=$Downgrade_Status.Status_selected}
                      </div>
                    </li>

                    <li>
                      <label>
                        {'UAM_Expired_Level'|@translate}
                      </label>
                      <div class="uam_leftmargin">
                        {html_options name="UAM_Downgrade_Level" options=$Downgrade_Level.Level_options selected=$Downgrade_Level.Level_selected}
                      </div>
                    </li>
                  </ul>

                  <ul>
                    <li>
                      <label class="cluetip" title="{'UAM_GTAutoMail'|translate}|{'UAM_GTAutoMailTitle_d'|translate}">
                        {'UAM_GTAutoMail'|@translate}
                      </label>
                    
                      <label for="UAM_GTAutoMail_false"><input id="UAM_GTAutoMail_false" value="false" {$UAM_GTAUTOMAIL_FALSE} name="UAM_GTAutoMail" type="radio"/>
                        {'UAM_Disable'|@translate}
                      </label>
                      <label for="UAM_GTAutoMail_true"><input id="UAM_GTAutoMail_true" value="true" {$UAM_GTAUTOMAIL_TRUE} name="UAM_GTAutoMail" type="radio"/>
                        {'UAM_Enable'|@translate}
                      </label>

                      <li>
                        <label class="cluetip" title="{'UAM_GTAutomail_Subject'|translate}|{'UAM_GTAutomail_Subject_d'|translate}">
                          {'UAM_GTAutomail_Subject'|@translate}
                        </label>

                        &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_GTAutoMail_Subject" id="UAM_GTAutoMail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_GTAUTOMAIL_SUBJECT}</textarea>
                      </li>
                      <li style="list-style-type: none;">
                        <ul>
                          <li>
                            <label class="cluetip" title="{'UAM_GTAutomail_Text'|translate}|{'UAM_GTAutomail_Text_d'|translate}">
                              {'UAM_GTAutomail_Text'|@translate}
                            </label>

                            <textarea class="uam_textfields" name="UAM_GTAutoMailText" id="UAM_GTAutoMailText" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_GTAUTOMAILTEXT}</textarea>
                        </li>
                      </ul>
                      </li>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
  </div>

  <div id="instructionConfig5" class="instructionBlock" >

    <div id="config5_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('config5_header', 'Config5')">
      <span class="cluetip" title="{'UAM_Title5'|translate}|{'UAM_miscTitle_d'|translate}">{'UAM_Title5'|@translate}</span>
    </div>
  
    <div id="Config5" class="instructionBlockContent" style="display:none">
      <p class="new_in_version">{'UAM_NewFeature'|@translate}</p>
      <div class="uam_new">
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_Admins_Copy'|translate}|{'UAM_Admins_Copy_d'|translate}">
              {'UAM_Admins_Copy'|@translate}
            </label>
          
            <label for="UAM_Admins_Copy_false"><input id="UAM_Admins_Copy_false" type="radio" value="false" {$UAM_ADMINS_COPY_FALSE} name="UAM_Emails_Copy2Admins"/>
              {'UAM_Disable'|@translate}
            </label>
            <label for="UAM_Admins_Copy_true"><input id="UAM_Admins_Copy_true" type="radio" value="true" {$UAM_ADMINS_COPY_TRUE} name="UAM_Emails_Copy2Admins"/>
              {'UAM_Enable'|@translate}
            </label>
          </li>
        </ul>
      </div>
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_Mail_Info'|translate}|{'UAM_infomailTitle_d'|translate}">
              {'UAM_Mail_Info'|@translate}
            </label>
          
            <label for="UAM_Mail_Info_false"><input id="UAM_Mail_Info_false" type="radio" value="false" {$UAM_MAIL_INFO_FALSE} name="UAM_Mail_Info"/>
              {'UAM_Disable'|@translate}
            </label>
            <label for="UAM_Mail_Info_true"><input id="UAM_Mail_Info_true" type="radio" value="true" {$UAM_MAIL_INFO_TRUE} name="UAM_Mail_Info"/>
              {'UAM_Enable'|@translate}
            </label>
          </li>
        </ul>
        <fieldset id="UAM_MAIL_INFO" {if $UAM_MAIL_INFO_FALSE} style="display:none"{/if}>
          <ul>
            <li>
              <label class="cluetip" title="{'UAM_HidePassw'|translate}|{'UAM_HidePasswTitle_d'|translate}">
                {'UAM_HidePassw'|@translate}
              </label>
              <label for="UAM_HidePassw_false"><input id="UAM_HidePassw_false" value="false" {$UAM_HIDEPASSW_FALSE} name="UAM_HidePassw" type="radio"/>
                {'UAM_Disable'|@translate}
              </label>
              <label for="UAM_HidePassw_true"><input id="UAM_HidePassw_true" value="true" {$UAM_HIDEPASSW_TRUE} name="UAM_HidePassw" type="radio"/>
                {'UAM_Enable'|@translate}
              </label>
            </li>
            <li>
              <label class="cluetip" title="{'UAM_MailInfo_Subject'|translate}|{'UAM_MailInfo_Subject_d'|translate}">
                {'UAM_MailInfo_Subject'|@translate}
              </label>
            
              &nbsp;&nbsp;<textarea class="uam_textfields" name="UAM_InfoMail_Subject" id="UAM_InfoMail_Subject" rows="5" {$TAG_INPUT_ENABLED}>{$UAM_INFOMAIL_SUBJECT}</textarea>
            </li>

            <li style="list-style-type: none;">
              <ul>
                <li>
                  <label class="cluetip" title="{'UAM_MailInfo_Text'|translate}|{'UAM_infotxtTitle_d'|translate}">
                    {'UAM_MailInfo_Text'|@translate}
                  </label>

                  <textarea class="uam_textfields" name="UAM_MailInfo_Text" id="UAM_MailInfo_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_MAILINFO_TEXT}</textarea>
                </li>
              </ul>
            </li>
<!--
            {* if 'FCK_PATH'|@defined *}
              <div style="text-align:right;">
                <a href="#" onClick="toogleEditor('UAM_MailInfo_Text'); return false;">FCK Editor On/Off</a>
              </div>
            {* /if *}
-->
          </ul>
        </fieldset>

        <ul>
          <li>
            <label class="cluetip" title="{'UAM_AddURL2Mail'|translate}|{'UAM_AddURL2Mail_d'|translate}">
              {'UAM_AddURL2Mail'|@translate}
              </label>
                <label for="UAM_AddURL2Mail_false"><input id="UAM_AddURL2Mail_false" value="false" {$UAM_ADDURL2MAIL_FALSE} name="UAM_AddURL2Mail" type="radio"/>
                  {'UAM_Disable'|@translate}
                </label>
                <label for="UAM_AddURL2Mail_true"><input id="UAM_AddURL2Mail_true" value="true" {$UAM_ADDURL2MAIL_TRUE} name="UAM_AddURL2Mail" type="radio"/>
                  {'UAM_Enable'|@translate}
                </label>
          </li>
          <li>
            <label class="cluetip" title="{'UAM_Tracking registered users'|translate}|{'UAM_Tracking registered users_d'|translate}">
              {'UAM_Tracking registered users'|@translate}
            </label>

            <label for="UAM_Add_LastVisit_Column_false"><input id="UAM_Add_LastVisit_Column_false" value="false" {$UAM_ADDLASTVISIT_FALSE} name="UAM_Add_LastVisit_Column" type="radio"/>
              {'UAM_Disable'|@translate}
            </label>
            <label for="UAM_Add_LastVisit_Column_true"><input id="UAM_Add_LastVisit_Column_true" value="true" {$UAM_ADDLASTVISIT_TRUE} name="UAM_Add_LastVisit_Column" type="radio"/>
              {'UAM_Enable'|@translate}
          </label>
          </li>
          <li>
            <label class="cluetip" title="{'UAM_RedirToProfile'|translate}|{'UAM_RedirTitle_d'|translate}">
              {'UAM_RedirToProfile'|@translate}
            </label>

            <label for="UAM_RedirToProfile_false"><input id="UAM_RedirToProfile_false" value="false" {$UAM_REDIRTOPROFILE_FALSE} name="UAM_RedirToProfile" type="radio"/>
              {'UAM_Disable'|@translate}
            </label>
            <label for="UAM_RedirToProfile_true"><input id="UAM_RedirToProfile_true" value="true" {$UAM_REDIRTOPROFILE_TRUE} name="UAM_RedirToProfile" type="radio"/>
              {'UAM_Enable'|@translate}
            </label>
          </li>
        </ul>
        <ul>
          <li>
            <label class="cluetip" title="{'UAM_CustomPasswRetr'|translate}|{'UAM_CustomPasswRetrTitle_d'|translate}">
              {'UAM_CustomPasswRetr'|@translate}
            </label>

            <label for="UAM_CustomPasswRetr_false"><input id="UAM_CustomPasswRetr_false" value="false" {$UAM_CUSTOMPASSWRETR_FALSE} name="UAM_CustomPasswRetr" type="radio"/>
              {'UAM_Disable'|@translate}
            </label>
            <label for="UAM_CustomPasswRetr_true"><input id="UAM_CustomPasswRetr_true" value="true" {$UAM_CUSTOMPASSWRETR_TRUE} name="UAM_CustomPasswRetr" type="radio"/>
              {'UAM_Enable'|@translate}
            </label>
            <fieldset id="UAM_CustomPasswRetr" {if $UAM_CUSTOMPASSWRETR_FALSE}style="display:none"{/if}>
              <textarea class="uam_textfields" name="UAM_CustomPasswRetr_Text" id="UAM_CustomPasswRetr_Text" rows="10" {$TAG_INPUT_ENABLED}>{$UAM_CUSTOMPASSWRETR_TEXT}</textarea>
            </fieldset>
          </li>
        </ul>
    </div>
  </div>

  <p>
    <input class="submit" type="submit" value="{'UAM_submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED} />&nbsp;<input class="submit" type="submit" value="{'UAM_audit'|@translate}" name="audit"/>
  </p>
</form>


<div id="instructionBkp" class="instructionBlock" >
  <div id="Backup_header" class="instructionBlockHeaderCollapsed" onclick="uam_blockToggleDisplay('Backup_header', 'Backup')">
    <span class="cluetip" title="{'UAM_DumpTxt'|translate}|{'UAM_DumpTitle_d'|translate}">{'UAM_DumpTxt'|@translate}</span>
  </div>

  <div id="Backup" class="instructionBlockContent" style="display:none">
    <fieldset>
      <form method="post" class="general">
        <p>
          {'UAM_Dump_Download'|@translate}&nbsp;
          <input type="checkbox" name="dump_download" value="true" {$UAM_DUMP_DOWNLOAD}/>

          <input class="submit" type="submit" value="{'UAM_Save'|@translate}" name="save" {$TAG_INPUT_ENABLED}/>
        </p>
      </form>
    </fieldset>
    <fieldset>
      <form method="post" class="general">
        <p>
          {'UAM_Restore'|@translate}
          <input class="submit" type="submit" value="{'UAM_Restore_File'|@translate}" name="restore" {$TAG_INPUT_ENABLED}/>
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