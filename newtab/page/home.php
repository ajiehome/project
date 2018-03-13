<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>�±�ǩҳ</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="renderer" content="webkit" />
    <!-- ʹ��modjs��Ϊ��Դ������ -->
    <?php framework('static/js/lib/mod.js'); ?>
    
    <!-- ���css���λ�� -->
    <?php placeholder('css');?>

    <!-- ����css -->
    <?php import('static/css/reset.css'); ?>
    <?php import('static/css/common.css'); ?>
    <?php import('static/css/layout.css'); ?>
    <?php import('static/css/poup.css'); ?>
    <?php import('static/css/main.css'); ?>
    <?php import('static/res/intro/introjs.css'); ?>

    <!-- ����ͬ����js -->
    <?php import('static/js/lib/jquery-2.2.4.min.js'); ?>
    <?php import('static/js/lib/template.js'); ?>
    <?php import('static/res/data/datasource.js'); ?>
</head>
<body class="light">
  <!-- �����ֲ���� -->
  <?php widget("widget/navigation/navigation.php"); ?>
  <!-- ����Ƥ����� -->
  <?php //widget("widget/skin/skin.php"); ?>
  <!-- ������Ϣ��� -->
  <?php widget("widget/header/header.php"); ?>
  <!-- ����������� -->
  <?php widget("widget/search/search.php"); ?>
  <!-- �ҵ�վ�� -->
  <div id="wrapper">
    <?php widget("widget/main/main.php"); ?>
  </div>

  <!-- ����������� -->
  <?php widget("widget/sidebar/sidebar.php"); ?>
  <!-- �����ļ��е������ -->
  <?php widget("widget/group/group.php"); ?>
  <!-- ����һЩ�Կ������õ�Ƭ�� -->
  <?php widget("widget/fragment/fragment.php"); ?>
  <!-- �����������Ӧ������js��css -->
  <div id="wallpapers">
    <div class="anim_fade_image"></div>
    <!-- poster һ����ʼ���Ļ���, �������������  -->
    <video id="media" preload="true" loop="loop"></video>
  </div>
  <!-- �ռ�styleƬ���Ա��ڶ������,style��ǩ��ѡ -->
  <?php styleStart() ?>
  <style type="text/css">  
    .swap {
      -webkit-animation: shake 0.5s ease infinite;
      transform: scale(1.1);
    }
  </style>
  <?php styleEnd() ?> 
  <script type="text/javascript" src="//pc-newtab.maxthonimg.com/static/res/intro/intro.js"></script>
  <!-- �ռ�scriptƬ�β�������������
    �������ı���Ƕjs��λ�ÿ��Բ���php��������ע���ʱ����modjs��û���� -->
  <?php scriptStart(); ?>
      <script type="text/javascript">
        // if ('serviceWorker' in navigator) {
        //     navigator.serviceWorker.register('/sw.js', { scope: '/' })
        //         .then(function (reg) {
        //             // ע��
        //             if (reg.installing) {
        //                 console.log('Service worker installing at scope: ' + reg.scope);
        //             } else if (reg.waiting) {
        //                 console.log('Service worker installed at scope: ' + reg.scope);
        //             } else if (reg.active) {
        //                 console.log('Service worker active at scope: ' + reg.scope);
        //             }
        //         });
        // } else {
        //     console.log('Service Worker is not supported in this browser.');
        // }
        require('static/js/index.js');
      </script>
  <?php scriptEnd(); ?>
  <!-- js���λ�ã����ڵײ��ӿ�ҳ����� -->
  <?php placeholder('js'); ?>
</body>
</html>