{extends 'layout/base.tpl'}
{block name=head}
  <link rel="stylesheet" href="{base_url}/css/styles.css" media="screen" title="no title" charset="utf-8">
{/block}
{block name=body}
<nav class="navbar">
  <div class="container">
      {include file="layout/partial/nav/nav.tpl"}
  </div>
</nav>
{if $old}
  {$old}
{/if}


{/block}
