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
        <form action="{path_for name="home"}" method="post">
           <div class="selected">
             <div  class="row">

               <div class="col-sm-4">
                 <div class="input-group">
                   <div class="input-group-btn">

                         <button type="button" class="btn btn-primary">Brand</button>
                   </div>
                   <select class="form-control" id="brandName" name="brand" >
                       {foreach from=$brand item=brandName}
                           <option value="{$brandName}">{$brandName}</option>
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
                   <select class="form-control" name="product">

                     {foreach from=$products item=productName}
                         <option value="{$productName}">{$productName}</option>
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
               {* End of Brand dropdown button  *}
           </div>
           <input class="btn btn-default" type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{base_url}/js/bootstrap.min.js"></script>

<script>
  // var brand = [[],[]];
  // {foreach from=$brandsWithProducts key=k item=bp}
  //
  //    {foreach from=$bp  item=bp1}
  //
  //       brand['{$k}']['{$bp1}'] ='{$bp1}';
  //
  //    {/foreach}
  // {/foreach}


$( "#brandName" )
  .change(function () {
    var str = "";
    $("#brandName option:selected").each(function() {
      str += $( this ).text() + " ";
    });
    console.log(str);
  })
  .change();
</script>

{/block}
