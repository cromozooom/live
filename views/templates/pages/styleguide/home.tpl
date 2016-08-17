{extends 'base/base.tpl'}
{block name=head}
  <link rel="stylesheet" href="{base_url}/css/app.css" media="screen" title="no title" charset="utf-8">
{/block}
{block name=body}
<section id="navbar">
  <nav class=" navbar-inverse">
    <div class="container-fluid main-wrapper">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          {include file="lab/atom/images/logo.tpl" class=''|default:''}
        </a>
      </div>
    </div>
  </nav>
</section>
{/block}
