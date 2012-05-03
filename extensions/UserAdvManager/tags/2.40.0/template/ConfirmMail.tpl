{html_head}<link rel="stylesheet" type="text/css" href="template/confmail.css">{/html_head}

{if $themeconf.name|strstr:"stripped"}
<div class="titrePage">
  <ul class="categoryActions">
    <li>
    {if $REDIRECT}
      <a href="{$ROOT_URL}identification.php" title="{'return to homepage'|@translate}">
        <img src="{$UAM_PATH}template/icon/home.png" class="button" alt="{'home'|@translate}">
      </a>
    {else}
      <a href="{$ROOT_URL}" title="{'return to homepage'|@translate}">
        <img src="{$UAM_PATH}template/icon/home.png" class="button" alt="{'home'|@translate}">
      </a>
    {/if}
    </li>
  </ul>
  &nbsp;&nbsp;&nbsp;<h2 class="confmail">{'UAM_title_confirm_mail'|@translate}</h2>
</div>
{else}
<div class="titrePage">
  <ul class="categoryActions">
    <li>
    {if $REDIRECT}
      <a href="{$ROOT_URL}identification.php" title="{'return to homepage'|@translate}">
        <img src="{$UAM_PATH}template/icon/home.png" class="button" alt="{'home'|@translate}">
      </a>
    {else}
      <a href="{$ROOT_URL}" title="{'return to homepage'|@translate}">
        <img src="{$UAM_PATH}template/icon/home.png" class="button" alt="{'home'|@translate}">
      </a>
    {/if}
    </li>
  </ul>
  <h2 class="confmail">{'UAM_title_confirm_mail'|@translate}</h2>
</div>
{/if}

<ul>
{if $STATUS == true}
  <div class="infos">{$CONFIRM_MAIL_MESSAGE}</div>
{elseif $STATUS == false}
  <div class="errors">{$CONFIRM_MAIL_MESSAGE}</div>
{/if}
</ul>
