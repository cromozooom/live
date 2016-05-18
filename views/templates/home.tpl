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
         <div class="row">

           <div class="col-sm-4">
             <div class="input-group">
               <div class="input-group-btn">
                 <button type="button" class="btn btn-primary">Brand</button>
                 <button type="button" class="btn btn-primary dropdown-toggle btn-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="caret"></span>
                 </button>
                 <ul class="dropdown-menu">
                   {foreach from=$brand item=brandName}
                       <li><a href="#">{$brandName}</a></li>
                   {/foreach}
                 </ul>
               </div>
               <input type="text" class="form-control" aria-label="...">
             </div>
           </div>

           <div class="col-sm-4">
             <div class="input-group">
               <div class="input-group-btn">
                 <button type="button" class="btn btn-primary">Product</button>
                 <button type="button" class="btn btn-primary dropdown-toggle btn-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="caret"></span>
                 </button>
                 <ul class="dropdown-menu">
                   {foreach from=$products item=productName}
                       <li><a href="{$productName}">{$productName}</a></li>
                   {/foreach}
                 </ul>
               </div>
               <input type="text" class="form-control" aria-label="...">
             </div>
           </div>

           <div class="col-sm-4">
             <div class="input-group">
               <div class="input-group-btn">
                 <button type="button" class="btn btn-primary">Language</button>
                 <button type="button" class="btn btn-primary dropdown-toggle btn-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="caret"></span>
                 </button>
                 <ul class="dropdown-menu">
                   {foreach from=$languages item=lang}
                       <li><a href="#">{$lang}</a></li>
                   {/foreach}
                 </ul>
               </div>
               <input type="text" class="form-control" aria-label="...">
             </div>
           </div>

           </div>
           {* End of Brand dropdown button  *}

       </div>
        <div class="selected">
          <div class="row">
            <div class="col-sm-4">
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-primary">Templates</button>
                  <button type="button" class="btn btn-primary dropdown-toggle btn-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    {foreach from=$brand item=brandName}
                        <li><a href="#">{$brandName}</a></li>
                    {/foreach}
                  </ul>
                </div>
                <input type="text" class="form-control" aria-label="...">
              </div>
            </div>


            </div>
            {* End of Brand dropdown button  *}
        </div>

        <div class="selected">
          <div class="row">
            <div class="col-sm-4">
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-primary">Sport</button>
                  <button type="button" class="btn btn-primary dropdown-toggle btn-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    {foreach from=$brand item=brandName}
                        <li><a href="#">{$brandName}</a></li>
                    {/foreach}
                  </ul>
                </div>
                <input type="text" class="form-control" aria-label="...">
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
<script type="text/javascript">


</script>

{/block}
