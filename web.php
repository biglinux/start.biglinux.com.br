<?php

    if(empty($_GET['q'])){
        header('Location: /');
        exit;
    }
    else{
        $q = htmlentities($_GET['q']);
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    }

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="<?php echo $lang; ?>">
    <head>
        <title>Pesquisa: <?php echo $q; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,900' rel='stylesheet' type='text/css'>
    
        <!-- styles -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.min.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery.ui.theme.min.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.3.2/semantic.min.css"/>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body id="resultpage">
    
        <div class="ui inverted menu small">
            <?php /* <a class="item" href="http://start.kaiana.com.br/">
                <i class="search icon"></i> Pesquisa
            </a> */ ?>
            <a class="item" href="http://plus.google.com/">
                <i class="google plus sign icon"></i> Google +
            </a>
            <a class="item" href="http://facebook.com/">
                <i class="facebook sign icon"></i> Facebook
            </a>
            <a class="item" href="http://mail.google.com/">
                <i class="mail icon"></i> Gmail
            </a>
            <a class="item" href="http://maps.google.com/">
                <i class="map marker icon"></i> Maps
            </a>
            <a class="item" href="http://youtube.com/">
                <i class="youtube play icon"></i> Youtube
            </a>
            <a class="right item" href="http://kaiana.com.br">
                <i class="external url icon"></i> kaiana.com.br
            </a>
        </div>
  
        <div id="search">
            <form method="get" action="web.php">
                <div class="ui right icon input">
                    <input type="text" name="q" id="googlesearch" value="<?php echo $q; ?>" />
                    <i class="search icon"></i>
                </div>
            </form>        
        </div>
  
        <div>
            <script>
                (function() {
                    var cx = 'partner-pub-3965550444482394:wjhqabwyf9z';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                        '//www.google.com/cse/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                })();
            </script>
            <gcse:searchresults-only gl="<?php echo $lang; ?>"></gcse:searchresults-only>
        </div>
    
        <!-- scripts -->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.3.2/semantic.min.js"></script>
        <script type="text/javascript" src="jquery.googleSuggest.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>