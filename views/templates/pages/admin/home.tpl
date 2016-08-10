{extends 'base/base.tpl'}
{block name=head}
  <link rel="stylesheet" href="{base_url}/css/styles.css" media="screen" title="no title" charset="utf-8">
  <!-- DataTables CSS -->
  <link href="{base_url}/css/dataTables.bootstrap.css" rel="stylesheet">
  <!-- DataTables Responsive CSS -->

  <!-- Custom Fonts -->
  <link href="{base_url}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="{base_url}/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">


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
              <div class="row">
                <div  class="col-sm-4">
                 <div class="panel panel-info">
                   <div class="panel-heading">
                     <h3 class="panel-title">Brand and Product</h3>
                   </div>
                   <div class="panel-body">
                     <div class="col-sm-12">
                       <div class="form-group">

                         <label for="brand">Brand</label>

                         <select class="form-control" id="brandName" name="brand"  >
                             {foreach from=$brand item=brandName}
                                 <option value="{$brandName}" {if isset($old.brand) && $brandName == $old.brand}selected{/if} >{$brandName}</option>
                             {/foreach}
                             <span class="caret"></span>
                         </select>
                       </div>
                     </div>
                     <div class="col-sm-12">

                         <div class="form-group">
                           <label for="product">Product</label>

                         <select class="form-control" id="productName" name="product">

                           {foreach from=$products item=productName}
                               <option value="{$productName}" {if isset($old.product) && $productName == $old.product}selected{/if}>{$productName}</option>
                           {/foreach}
                         </select>
                       </div>
                     </div>

                     <div class="col-sm-12">
                       <div class="form-group">


                           <label for="language">Language</label>

                         <select class="form-control" name="language" >
                           {foreach from=$languages item=lang}
                              <option value="{$lang}" {if isset($old.language) && $lang == $old.language}selected{/if}>{$lang}</option>
                           {/foreach}
                         </select>
                       </div>
                     </div>
                 {* End of languages selection *}
                    </div>
                  </div>
                 </div>
                 {* End of Brand dropdown row  *}
                 <div class="col-sm-4">
                   <div class="panel panel-info">
                     <div class="panel-heading">
                       <h3 class="panel-title">Display Option</h3>
                     </div>
                     <div class="panel-body">
                        <div class="col-sm-12">
                          <div class="form-group">
                                <label for="sportType">Sport</label>
                            <select class="form-control" id="sportType" name="sportType">
                              {foreach from=$sportType  item=type}
                                  <option value="{$type}" {if isset($old.sportType) && $type == $old.sportType}selected{/if}>{$type}</option>
                              {/foreach}
                            </select>
                          </div>

                        </div>
                        {* End of Sport Type selection *}

                        <div class="col-sm-12">
                          <div class="form-group">

                              <label for="display">Display</label>

                            <select class="form-control" name="display" >
                                 <option value="League" {if isset($old.display) && 'League' == $old.display}selected{/if}>League</option>
                                 <option value="Match" {if isset($old.display) && 'Match' == $old.display}selected{/if}>Match</option>
                                <option value="Date" {if isset($old.display) && 'Date' == $old.display}selected{/if}>Date</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="option">Option </label>
                            <select class="form-control" name="option" >
                                 <option value="decimal" {if isset($old.option) && 'decimal' == $old.option}selected{/if}>Decimal</option>
                                 <option value="fractional" {if isset($old.option) && 'fractional' == $old.option}selected{/if}>Fractional</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">Design</h3>
                      </div>
                      <div class="panel-body">
                          <div class="col-sm-12">
                            <label for="template">Template</label>
                            <select class="form-control" name="template" >
                                 <option value="decimal" {if isset($old.option) && 'decimal' == $old.option}selected{/if}>Decimal</option>
                                 <option value="fractional" {if isset($old.option) && 'fractional' == $old.option}selected{/if}>Fractional</option>
                            </select>
                          </div>
                      </div>
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
         </form>
      </div>
    </div>
    {* End of panel *}
  {if isset($old.display) && 'Match' == $old.display}
    {include file="pages/admin/select-match.tpl"}
  {elseif isset($old.display) && 'League' == $old.display}
    {include file="pages/admin/select-league.tpl"}
  {elseif isset($old.display) && 'Date' == $old.display}
    {include file="pages/admin/select-date.tpl"}
  {/if}
    {* end of match select *}
  </div>
  {* End of container *}
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{base_url}/js/bootstrap.min.js"></script>
<script src="{base_url}/js/clipboard.min.js"></script>
<!-- DataTables JavaScript -->
<script src="{base_url}/js/jquery.dataTables.min.js"></script>
<script src="{base_url}/js/dataTables.bootstrap.min.js"></script>
<script src="{base_url}/js/moment.js"></script>
<script src="{base_url}/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">

      var table = $('#matchs-table').DataTable({
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
      });
      $('#matchs-table tbody').on('click', '.btn', function () {

          var data = table.row( this ).data();
          $('#myModalLabel').text('Start and End date to display on Landing page');
      } );


    $('.datetimepickerstart').datetimepicker({
        minDate: moment()
    });
    $('.datetimepickerend').datetimepicker({
            useCurrent: false //Important! See issue #1075
    });
    $(".datetimepickerstart").on("dp.change", function (e) {
      $('.datetimepickerend').data("DateTimePicker").minDate(e.date);
    });
    $(".datetimepickerend").on("dp.change", function (e) {
        $('.datetimepickerstart').data("DateTimePicker").maxDate(e.date);
    });
  </script>
{/block}
