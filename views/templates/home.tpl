{extends 'layout/base.tpl'}
{block name=head}
  <link rel="stylesheet" href="{base_url}/css/styles.css" media="screen" title="no title" charset="utf-8">
{/block}
{block name=body}

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
                             <option value="{$brandName}" {if isset($old.brand) && $brandName == $old.brand}selected{/if} >{$brandName}</option>
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
                           <option value="{$productName}" {if isset($old.product) && $productName == $old.product}selected{/if}>{$productName}</option>
                       {/foreach}
                     </select>
                   </div>
                 </div>

                 <div class="col-sm-4">
                   <div class="input-group">
                     <div class="input-group-btn">
                       <button type="button" class="btn btn-primary">Language</button>
                     </div>
                     <select class="form-control" name="language" >
                       {foreach from=$languages item=lang}
                          <option value="{$lang}" {if isset($old.language) && $lang == $old.language}selected{/if}>{$lang}</option>
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
                              <option value="{$type}" {if isset($old.sportType) && $type == $old.sportType}selected{/if}>{$type}</option>
                          {/foreach}
                        </select>

                      </div>

                    </div>
                 </div>
                 <div class="row">
                   <div class="col-sm-4">
                     <button type="submit" class="btn btn-success">Get Feeds</button>
                   </div>
                 </div>
             </div>
           </div>
      </div>
    </div>
    {* End of panel *}

    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-6">
            <h4>Select {if isset($old.sportType)}{$old.sportType}{/if} Matches</h4>
          </div>
          <div class="col-xs-6">
            <button type="submit" class="btn btn-success pull-right">GENERATE LANDING PAGE</button>
          </div>
        </div>
      </div>

      <div class="panel-body">
        <form class="matches-select" action="index.html" method="post">
          <div >
            <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>League</th>
                    <th>Match</th>
                    <th>Time</th>
                    <th>Select</th>
                  </tr>
                </thead>
                <tbody>
                  {if isset($xmlFeeds)}
                    {foreach from=$xmlFeeds  item=match}
                      <tr>
                        <td>{$match.League}</td>
                        <td>{$match->Participants->Participant1['Name']} VS {$match->Participants->Participant2['Name']}</td>
                        <td>{$match['DateTimeGMT']}</td>
                        <td><input type="checkbox" value="{$match.ID}"></td>
                      </tr>
                    {/foreach}
                  {/if}
                </tbody>
              </table>
          </div>

        </form>
      </div>
      {* End if panel body *}
      <div class="panel-footer">
          <ul class="pagination pagination-sm" style="margin: 0;">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
          </ul>

      </div>
    </div>
    {* end of match select *}
  </div>
  {* End of container *}
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{base_url}/js/bootstrap.min.js"></script>

{/block}
