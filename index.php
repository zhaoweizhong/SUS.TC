<?php

  // 引入类
  require_once('inc/require.php');

  if(isset($_GET['id'])) {

    $url_c = new url();

    // 获取目标网址
    $url = $url_c->get_url($_GET['id']);
    // 重定向至目标网址
    if($url) {
      header('Location: ' . $url);
      exit;
    }

  }

?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo get_title() . ' - ' . get_description(); ?></title>
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <link type="text/css" rel="stylesheet" href="asset/css/main.css" />
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110488424-6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-110488424-6');
    </script>
  </head>
  <body>
    <div class="wrap">
      <div class="meta">
        <h2 class="title"><?php echo get_title(); ?></h2>
        <h3 class="description"><?php echo get_description(); ?></h3>
      </div>
      <div class="link-area">
        <input id="url" type="text" placeholder="https://" />
        <input id="submit" type="button" value="Generate" onclick="APP.fn.setUrl(this)" />
      </div>
      <div class="footer">
          Copyright <i class="fa fa-copyright"></i> 2017 <a href="https://cra.moe/" title="南方科技大学计算机研究协会" target="_blank">南方科技大学计算机研究协会</a><br>
          <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <a href="https://zzw.at/" title="Zhaowei's Blog" target="_blank">Zhaowei Zhong</a><br>
          Fork me on <a href="https://github.com/zhaoweizhong/SUS.TC/" title="Github" target="_blank"><i class="fa fa-github"></i> Github</a></div>
    </div>
  </body>
  <!-- JS -->
  <script type="text/javascript" src="asset/js/app.js"></script>
</html>
