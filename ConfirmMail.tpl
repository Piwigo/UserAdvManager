{* $Id: ConfirmMail.tpl $ *}
<div id="content" class="content">
  <div class="titrePage">
    <ul class="categoryActions">
      <li>
      {if isset($GALLERY_URL) }
        <a href="{$GALLERY_URL}" title="{'return to homepage'|@translate}">
          <img src="{$ROOT_URL}{$themeconf.icon_dir}/home.png" class="button" alt="{'home'|@translate}">
        </a>
      {else}
        <a href="{$U_HOME}" title="{'return to homepage'|@translate}">
          <img src="{$ROOT_URL}{$themeconf.icon_dir}/home.png" class="button" alt="{'home'|@translate}">
        </a>
      {/if}
      </li>
    </ul>
    <h2>{'title_confirm_mail'|@translate}</h2>
  </div>
  <ul>
  {$CONFIRM_MAIL_MESSAGE}
  </ul>
</div>