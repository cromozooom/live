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
          <h4>Choose Start and End Date</h4>
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
    {* End of panal head *}
    <div class="panel-body match-date">
      <table class="table table-bordered table-hover" >
          <thead>
            <tr>
              <th>League</th>
              <th>Match</th>
              <th>Start/End Date</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
    </div>
    {* End of panel body *}
  </div>
</form>

  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-6">
          <h4>Select {if isset($old.sportType)}{$old.sportType}{/if} Matches</h4>


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
                      <td>
                        <button id="btn-{$match['MEID']}" type="button" data-toggle="modal" class="center-block btn btn-primary" data-target="#myModal">Select Date and Time</button>
                      </td>
                    </tr>
                  {/foreach}
                {/if}
              </tbody>
            </table>
        </div>
    </div>
    {* End if panel body *}
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-match="">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"></h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-6">
                <label class="control-label">Start:</label>
                <div class="form-group">
                  <div class='input-group date datetimepickerstart'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </div>
              </div>
              <div class="col-xs-6">
                <label class="control-label">End:</label>
                <div class="form-group">
                  <div class='input-group date datetimepickerend'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>
