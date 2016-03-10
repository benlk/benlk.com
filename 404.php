<?php
$suggest = false;
if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != "") {
  $suggest = true;
  $suggestion = $_SERVER['REQUEST_URI'];
} else {
  $suggestion = "";
}
?>
  <style type="text/css">
    /* https://stackoverflow.com/questions/9825796/how-to-make-text-vertically-and-horizontally-center-in-an-html-page#9826008 */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      width: 100%;
      font-size: 10px;
    }
    body{
      display: table;
    }
    div {
      text-align: center;
      display: table-cell;
      vertical-align: middle;
    }
    #ddg {
      overflow:hidden;margin:0;padding:0;width:408px;height:40px;
    }
    p {
      font-size: 2em;
    }
    .disclaimer {
      font-size: 1.2em;
    }
    ul.actions,
    ul.actions li,
    ul.actions .button {
      float: none;
    }
  </style>
  <div>
    <?php if ($suggest === true) { ?>
      <p>We can't find <?php echo($suggestion); ?> here.</p>
      <p>What were you looking for?</p>
    <?php } else { ?>
      <p>What were you looking for? </p>
    <?php } ?>
    <iframe id="ddg" src="//duckduckgo.com/search.html?site=<?php
                          echo $_SERVER['SERVER_NAME']; // the www.example.com part of the URL
                          ?>&prefill=Search this site&focus=yes" frameborder="0"></iframe>
    <p class="disclaimer">This search box uses <a href="https://duckduckgo.com/about">DuckDuckGo</a>, a privacy-positive search engine.</p>
    <p><ul class="actions"><li><a class="button" href="//<?php echo $_SERVER['SERVER_NAME']?>">To the homepage!</a></li></ul></p>
  </div>
