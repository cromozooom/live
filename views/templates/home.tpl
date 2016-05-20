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
  <div class="container jumbotron">
    <div class="page-header">
      <h4>GENERATE LIVE ODDS LANDING PAGE </h4>
    </div>

    <form>
       <div class="selected">
         <div c lass="row">

           <div class="col-sm-4">
             <div class="input-group">
               <div class="input-group-btn">
                 <button type="button" class="btn btn-primary">Brand</button>
                 <select class="btn btn-defalult" style="width: 80%;">

                     {foreach from=$brand item=brandName}
                         <option value="{$brandName}">{$brandName}</option>
                     {/foreach}

                   <span class="caret"></span>

                 </select>

               </div>

             </div>
           </div>

           <div class="col-sm-4">
             <div class="input-group">
               <div class="input-group-btn">
                
                 <button type="button" class="btn btn-primary">Product</button>
                 <select class="btn btn-defalult" style="width: 80%;">
                   {foreach from=$products item=productName}
                       <option value="{$productName}">{$productName}</option>
                   {/foreach}
                 </select>
               </div>

             </div>
           </div>

           <div class="col-sm-4">
             <div class="input-group">
               <div class="input-group-btn">
                 <button type="button" class="btn btn-primary">Language</button>
                 <select class="btn btn-defalult">
                   {foreach from=$languages item=lang}
                      <option value="{$lang}">{$lang}</option>
                   {/foreach}
                 </select>

               </div>

             </div>
           </div>

           </div>
           {* End of Brand dropdown button  *}
       </div>



      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{base_url}/js/bootstrap.min.js"></script>

<script>
$( ".brand-select" )
  .change(function () {
    var str = "";
    $( ".brand-select li:selected" ).each(function() {
      str += $( this ).text() + " ";
    });
    $( ".brand-input" ).text( str );
  })
  .change();
</script>

{/block}
