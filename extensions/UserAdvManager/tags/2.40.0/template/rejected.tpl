{html_head}<link rel="stylesheet" type="text/css" href="template/confmail.css">{/html_head}

{if $themeconf.name|strstr:"stripped"}
<div class="titrePage">
  <ul class="categoryActions">
    <li>
      <a href="{$ROOT_URL}" title="{'return to homepage'|@translate}">
        <img src="{$UAM_PATH}template/icon/home.png" class="button" alt="{'home'|@translate}">
      </a>
    </li>
  </ul>
  &nbsp;&nbsp;&nbsp;<h2 class="confmail">{'UAM_Reject_Page_Title'|@translate}</h2>
</div>
{else}
<div class="titrePage">
  <ul class="categoryActions">
    <li>
      <a href="{$ROOT_URL}" title="{'return to homepage'|@translate}">
        <img src="{$UAM_PATH}template/icon/home.png" class="button" alt="{'home'|@translate}">
      </a>
    </li>
  </ul>
  <h2 class="confmail">{'UAM_Reject_Page_Title'|@translate}</h2>
</div>
{/if}
<ul>
  <div class="errors">{$CUSTOM_REJECT_MSG}</div>
</ul>