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
                     <button type="submit" class="btn btn-success">Submit</button>
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
                    <th>Time</th><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{$name} {$title}</title>

    <!-- Bootstrap -->
    <link rel="icon" type="image/png" href="favicon.ico">
    <link href="live-odd/src/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$lang}/footer.css" rel="stylesheet">
    <link href="live-odd/src/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="live-odd/src/css/remodal.css">
    <link rel="stylesheet" href="live-odd/src/css/animate.css">
    <link rel="stylesheet" href="live-odd/src/css/remodal-default-theme.css">

    <style>
      .main {
        background-image: url('{$img.bg}');
      }
      .offscreen{
				position: absolute;
				margin-top: -5000px;
		}
    </style>
	{include file="all_head.tpl" }
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    {include file="gamma.tpl" }

    <nav class="navbar">
      <div class="container-fluid">
        <div class="row">
          <div id="logo" class="col-xs-6 col-sm-4 ">
            <a href="{$url}" rel="nofollow">
              <img src="img/logo.png" alt="NetBet" class="pull-left img-responsive" >
            </a>
          </div>
          <div class="col-xs-4 text-center hidden-xs custom-text">
            <h4 style="color: white;">{$text}</h4>
          </div>
          <!-- Co logo -->
          {if $co_logo}
          <div class="col-xs-6 col-sm-4 logo">
            <img src="{$co_logo}" class="img-responsive center-block" alt="">
          </div>
          <!-- end of co logo -->
          {/if}

        </div>
      </div>
    </nav>
    <!-- end of NAV -->

    <a href="{$url}" rel="nofollow">
    <section class="main hidden-xs">
      <div class="container-fluid">

      	<div class="row">
      		<div class="col-xs-12 text-center odd">
        	<div class="row">

          		<div class="col-xs-6 col-xs-offset-3">
          			<div class="odd-name">
          				<h2></h2>
          				<h3>27:08:2015</h3>
          			</div>
          		</div>
          	</div>

        <!-- end of row -->

         <div class="row">
          	<div class="row ">
          		<div class="col-xs-10 col-xs-offset-1 odd-match">
          			<div >
          				<div id="home-name" class="col-xs-4 text-left"><h2></h2></div>
          				<div id="versus" class="col-xs-4"><h2><span class="versus-bg">V</span></h2></div>
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
          			<div  class="col-xs-2 home "><h3></h3></div>
          			<div  class="col-xs-2 col-xs-offset-3 draw"><h3></h3></div>
          			<div  class="col-xs-2 col-xs-offset-3 away"><h3>1.65</h3></div>
          		</div>
          	</div>
          	<!-- end of numver -->

			<div class="row">


			</div>
          </div>
        </div>

      	</div>
      	<!-- odd row -->
        <div class="row">
         <div class="col-xs-12 text-center">
           <div class="offer animated pulse">
             <div class="col-xs-8 col-xs-offset-2 box text-center">
               {if $lang == 'de'}

               <div class="de">
                 <h1>100% EINZAHLUNGSBONUS</h1>
               </div>
               <!-- End of DE -->

               {elseif $lang == 'nl'}

                       <div class="nl">
                         <h1>&euro;50 GRATIS INZET</h1>
                     </div>
                       <!-- End of NL-->
               {else}

                   <div class="en">
                     <h1> GET A €50 FREE BET</h1>
                     <h2>BONUSCODE:WELCOME50</h2>
                   </div>
                 <!-- End of EN -->
               {/if}

             </div>
           </div>
         </div>

       </div>
       <!-- end of offer row -->
        <div class="row">
         	<div class="button">
         		<div class="col-xs-8 col-xs-offset-2 box text-center">
         			{if $lang == 'de'}

             			<div class="de ">
             				<div  class="CTA-button center-block">JETZT WETTEN</div>
             			</div>
             			<!-- End of DE -->

             		{elseif $lang == 'nl'}

             			<div class="nl ">
              				<div  class="CTA-button center-block">ZET IN</div>
             			</div>

             		{else}
             			<div class="en ">
              				<div  class="CTA-button center-block">BET NOW</div>
             			</div>
             		{/if}

         		</div>
         	</div>

        </div>
        <!-- end of offer row -->


      </div>
    <!-- end of main container -->

    </section>
    </a>
    <!-- end of main section -->

    <section class="main visible-xs">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-xs-12 text-center">
         			<div class="offer animated pulse">
         				<div class="col-xs-12  box text-center">

         					{if $lang == 'de'}

         					<div class="de">
         						<h1>100% EINZAHLUNGSBONUS</h1>
         					</div>
         					<!-- End of DE -->
         					{elseif $lang == 'nl'}

              					<div class="nl">
              						<h1>&euro;50 GRATIS INZET</h1>
             					</div>
              					<!-- End of NL-->

         					{else}

         			    		<div class="en">
         			    			<h1> GET A €50 FREE BET</h1>
         			    			<h2>BONUSCODE:WELCOME50</h2>

         			    		</div>
         			    		<!-- End of EN -->
         					{/if}
         				</div>
         			</div>
         		</div>
         	</div>
         	<!-- end of offer -->

      		<div class="col-xs-12 text-center odd">


       			 <!-- end of row -->
       			<div class="row">
          			<div class="row ">
          				<div class="col-xs-10 col-xs-offset-1 odd-match">
          					<div>
          						<div class="row">

          							<div class="col-xs-12">
          								<div class="odd-name">
          									<h2></h2>
          									<h3>27:08:2015</h3>
          								</div>
          							</div>
          						</div>

          						<div class="row">
          							<div id="home-name" class="col-xs-8 "><h2></h2></div>
          							<div class="col-xs-4 home"><h3></h3></div>
          						</div>
          						<div class="row">
          							<div class="col-xs-8"><h3><span>V</span></h3></div>
          							<div class="col-xs-4 draw"><h3></h3></div>
          						</div>
          						<div class="row">
          							<div id="away-name" class="col-xs-8 "><h2></h2></div>
          							<div class="col-xs-4 away"><h3>1.65</h3></div>
          						</div>


          					</div>
          				</div>
          				<!-- end of odd -->

          			</div>
          			<div class="row">
          				<a href="{$url}" rel="nofollow">


         					<div class="button">
         						<div class="col-xs-8 col-xs-offset-2 box text-center">

									{if $lang == 'de'}

             							<div class="de ">
             								<div  class="CTA-button center-block">JETZT WETTEN</div>
             							</div>
             							<!-- End of DE -->

             						{elseif $lang == 'nl'}

             							<div class="nl ">
              								<div  class="CTA-button center-block">ZET IN</div>
             							</div>

             						{else}

             							<div class="en ">
              								<div  class="CTA-button center-block">BET NOW</div>
             							</div>
             						{/if}

         						</div>
         					</div>
						</a>
        			</div>
        			<!-- end of button row -->




          		</div>
    		</div>

    	</div>
    </section>
    <!-- end mobile main section-->
    <a href="{$url}" rel="nofollow">
      <section class="steps">
      	<div class="container-fluid">
      		<div class="row visible-xs">
      			<div class="text-center">
          			<h3>{$text}</h3>
        		</div>
      		</div>
      		 <div class="row">
          		<div class="col-xs-12 hidden-xs">

          			<img src="{$lang}/img/steps.png" alt="" class="img-responsive center-block">

          		</div>
        	</div>
        	<!-- end of lage screen steps -->

        	<div class="row">
          		<div class="col-xs-12 visible-xs">

          			<img src="{$lang}/img/steps_mobile.png" alt="" class="img-responsive center-block">

          		</div>
        	</div>
       		 <!-- end of small sreen steps -->
      	</div>

      </section>
    </a>
    <!-- end of steps section -->
    <section class="products">
    	<div class="container-fuild">

    	</div>
    </section>



    {include file="footer_{$lang}_v2.tpl" }

	<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
    	<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
    	<div>
      		<p id="modal1Desc"></p>
    	</div>
    	<!-- loadind terms from terms from Jquery -->
  		<br>
  		<button data-remodal-action="confirm" class="remodal-confirm">OK</button>
		</div>
		<!-- end of modal pop up -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="live-odd/src/js/bootstrap.mini.js"></script>
    <script src="live-odd/src/js/remodal.mini.js"></script>


    <script>
      $(function(){
      	{if $lang == 'en'}
      		$("#modal1Desc").load("live-odd/{$lang}/terms.html");
      	{else}
        	$("#modal1Desc").load("{$lang}/terms.html");
      	{/if}
      });
    </script>

    <!-- Cookies here -->
    {if $url_cookies}
    <script type="text/javascript" src="{$url_cookies}"></script>
    {/if}

    {include file="analytics.tpl" }

	<script>


    	var messages = [],
        index = 0;

    		messages.push(['{$arr[0].participant1}','{$arr[0].participant2}','{$arr[0].home}','{$arr[0].draw}','{$arr[0].away}','{$arr[0].date}','{$arr[0].league}']);
    		messages.push(['{$arr[1].participant1}','{$arr[1].participant2}','{$arr[1].home}','{$arr[1].draw}','{$arr[1].away}','{$arr[1].date}','{$arr[1].league}']);
    		messages.push(['{$arr[2].participant1}','{$arr[2].participant2}','{$arr[2].home}','{$arr[2].draw}','{$arr[2].away}','{$arr[2].date}','{$arr[2].league}']);
    		messages.push(['{$arr[3].participant1}','{$arr[3].participant2}','{$arr[3].home}','{$arr[3].draw}','{$arr[3].away}','{$arr[3].date}','{$arr[3].league}']);
    		messages.push(['{$arr[4].participant1}','{$arr[4].participant2}','{$arr[4].home}','{$arr[4].draw}','{$arr[4].away}','{$arr[4].date}','{$arr[4].league}']);

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
  </body>
</html>

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
