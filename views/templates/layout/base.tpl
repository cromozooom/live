<html>
  <head>
    <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>{$title}</title>

   <!-- Bootstrap -->
   <link href="{base_url}/css/bootstrap.min.css" rel="stylesheet">
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
    {block name=head}
    {* Head content here *}
    {/block}
    {include file="layout/include/analytics.tpl" }
    </head>
  </head>
  <body>
    {block name=body}
    {* Body content here *}
    {/block}

    {* {if $url_cookies}
      <script type="text/javascript" src="{$url_cookies}"></script>
    {/if} *}
  </body>
</html>
