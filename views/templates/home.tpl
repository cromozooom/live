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
<section class="form">
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        GENERATE LIVE ODDS LANDING PAGE
      </div>
      <div class="panel-body">
        <form action="{path_for name='home'}" method="post" id="form-select">
           <div class="selected">
             <div class="brand-select-row">
               <div  class="row">

                 <div class="col-sm-4">
                   <div class="input-group">
                     <div class="input-group-btn">

                           <button type="button" class="btn btn-primary">Brand</button>
                     </div>
                     <select class="form-control" id="brandName" name="brand"  >
                         {foreach from=$brand item=brandName}
                             <option value="{$brandName}" {if $brandName == $old.brand}selected{/if} >{$brandName}</option>
                         {/foreach}
                      <span class="caret"></span>
                     </select>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="input-group">
                     <div class="input-group-btn">
                       <button type="button" class="btn btn-primary">Product</button>
                     </div>
                     <select class="form-control" id="productName" name="product">

                       {foreach from=$products item=productName}
                           <option value="{$productName}" {if $productName == $old.product}selected{/if}>{$productName}</option>
                       {/foreach}
                     </select>
                   </div>
                 </div>

                 <div class="col-sm-4">
                   <div class="input-group">
                     <div class="input-group-btn">
                       <button type="button" class="btn btn-primary">Language</button>
                     </div>
                     <select class="form-control" name="language">
                       {foreach from=$languages item=lang}
                          <option value="{$lang}">{$lang}</option>
                       {/foreach}
                     </select>
                   </div>
                 </div>

                 </div>
                 {* End of Brand dropdown row  *}
                 <div class="row">
                    <div class="col-sm-4">
                      <div class="input-group">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-primary">Sport Type</button>
                        </div>
                        <select class="form-control" id="sportType" name="sportType">
                          {foreach from=$sportType  item=type}
                              <option value="{$type}">{$type}</option>
                          {/foreach}
                        </select>

                      </div>

                    </div>
                 </div>
             </div>


           </div>

        </form>
        {* <form action="{path_for name='home'}" method="post" id="match-form-select">
          <div class="sport-type-row">

          </div> *}
          {*  End of Sport type *}
        {* </form> *}
      {* {if isset($xmlFeeds)}
        {foreach from=$xmlFeeds  item=match}
          <h4>{$match.League}</h4>
          <h4>{$match->Participants->Participant1['Name']}</h4>
          <h4>{$match->Participants->Participant2['Name']}</h4>
        {/foreach}
      {/if} *}
      </div>
    </div>
  </div>
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{base_url}/js/bootstrap.min.js"></script>

<script>
  $("#brandName").change(function(){
            this.form.submit();
  });
  $("#productName").change(function(){
            this.form.submit();
  });
  $("#sportType").change(function(){
            this.form.submit();
  });
</script>

{/block}
