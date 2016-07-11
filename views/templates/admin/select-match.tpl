<form action="{path_for name='liveodds' data=["brand" => "netbet", "sportType" => "{$old.sportType}"]}" method="get" id="match-select">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-6">
          <h4>Select {if isset($old.sportType)}{$old.sportType}{/if} Matches</h4>
        </div>
        <div class="col-xs-4 pull-right">
          <div class="dropup">
            <button class="btn btn-default btn-success dropdown-toggle pull-right" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Landing Page Action
              <span class="caret"></span>
            </button>

            <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">

              <li class="dropdown-header">Landing Page link</li>
              <li>
                    <div class="input-group" style="padding:1% 5%;">
                      <input id="landng-url"type="text" class="form-control" value="{base_url}/live-odds/netbet/{$old.sportType}">
                      <span class="input-group-btn">
                        <button id="copy-url" class="btn btn-default" type="button">copy!</button>
                      </span>
                    </div><!-- /input-group -->
              </li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Display</li>
              <li>

                  <div class="btn-group center-block" role="group" aria-label="..." style="padding:1% 5%;">
                    <button type="button" class="btn btn-default">On selection</button>
                    <button type="button" class="btn btn-default">All match</button>
                    <button type="button" class="btn btn-primary">Other...</button>
                  </div>

              </li>



            </ul>
          </div>

        </div>
      </div>
    </div>
    <div class="panel-body">
        <div >
          <table class="table table-bordered table-hover" id="matchs-table">
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
                      <td><input type="checkbox" name="MEID[]" value="{$match['MEID']}"></td>
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
