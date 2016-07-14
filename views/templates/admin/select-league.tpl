<form action="{path_for name='liveodds' data=[
                    "brand" => "netbet", 
                    "sportType" => "{$old.sportType}", 
                    "lang" => "it", 
                    "template" => "1",
                    "option" => "{$old.option}"
]}" method="get" id="match-select">
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

          <table class="table table-bordered table-hover" id="matchs-table">
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
                      <td><input type="checkbox" name="LeagueID[]" value="{$match['LeagueID']}" class="center-block"></td>
                    </tr>
                  {/foreach}
                {/if}
              </tbody>
            </table>
        </div>


    </div>
    {* End if panel body *}

  </div>
</form>
