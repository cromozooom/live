{extends 'layout/base.tpl'}
{block name=head}
  <link rel="stylesheet" href="{base_url}/css/styles.css" media="screen" title="no title" charset="utf-8">
{/block}
{block name=body}
<nav>
  <div class="container">
    {include file="layout/partial/nav/nav.tpl"}
  </div>
</nav>

<section class="odds-section">

  <div class="container-fluid">
      	<div class="row">
      		<div class="col-xs-12 text-center odd">
        	<div class="row">

          		<div class="col-xs-6 col-xs-offset-3">
          			<div class="odd-name">
          				<h2></h2>
          				<h3></h3>
          			</div>
          		</div>
          	</div>

        <!-- end of row -->

         <div class="row">
          	<div class="row ">
          		<div class="col-xs-10 col-xs-offset-1 odd-match">
          			<div>
          				<div id="home-name" class="col-xs-4 text-left"><h2></h2></div>
          				<div class="col-xs-4"><h2><span>V</span></h2></div>
          				<div id="away-name" class="col-xs-4 text-right"><h2></h2></div>
          			</div>
          		</div>

          	</div>
            <div class="row">
          		<div class="col-xs-10 col-xs-offset-1 onextwo">
          			<div class="col-xs-2"><h3>1</h3></div>
          			<div class="col-xs-2 col-xs-offset-3"><h3>X</h3></div>
          			<div class="col-xs-2 col-xs-offset-3"><h3>2</h3></div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-xs-10 col-xs-offset-1 odd-text">
          			<div class="col-xs-2 home "><h3>1.23</h3></div>
          			<div class="col-xs-2 col-xs-offset-3 draw"><h3>6.75</h3></div>
          			<div class="col-xs-2 col-xs-offset-3 away"><h3>18.00</h3></div>
          		</div>
          	</div>
          	<!-- end of numver -->

			<div class="row">


			</div>
          </div>
        </div>

      	</div>
      	<!-- odd row -->
      </div>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{base_url}/js/bootstrap.min.js"></script>
<script>

    var messages = [],
    index = 0;
    {if isset($xmlFeeds)}
      {foreach from=$xmlFeeds  item=match}
        messages.push(["{$match->Participants->Participant1['Name']}","{$match->Participants->Participant2['Name']}","{$match->MoneyLine['Home']}","{$match->MoneyLine['Draw']}","{$match->MoneyLine['Away']}","{$match['DateTimeGMT']}","{$match.League}"]);


      {/foreach}
    {/if}
    function cycle() {

      $('#home-name h2').text(messages[index][0]);
        $('#away-name h2').text(messages[index][1]);
        $('.home h3').text(messages[index][2]);
        $('.draw h3').text(messages[index][3]);
        $('.away h3').text(messages[index][4]);
        $('.odd-name h3').text(messages[index][5]);
        $('.odd-name h2').text(messages[index][6]);
        index++;

        if (index === messages.length) {
            index = 0;
        }

        setTimeout(cycle, 5000);


    }

    cycle();

</script>


{/block}
