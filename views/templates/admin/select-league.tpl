<form action="{path_for name='liveodds' data=["brand" => "netbet", "sportType" => "{$old.sportType}"]}" method="get" id="match-select">
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

        <div >
          <table class="table table-condensed">
              <thead>
                <tr>
                  <th>League</th>

                  <th>Select</th>
                </tr>
              </thead>
              <tbody>
                {if isset($xmlFeeds)}
                  {foreach from=$xmlFeeds  item=match}
                    <tr>
                      <td>{$match.League}</td>
                      <td><input type="checkbox" name="LeagueID[]" value="{$match['LeagueID']}"></td>
                    </tr>
                  {/foreach}
                {/if}
              </tbody>
            </table>
        </div>


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
</form>
