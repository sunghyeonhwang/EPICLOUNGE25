<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="<?=JS_VIEW_PATH?>/jquery-1.12.2.min.js"></script>

  <script>
    // 팝업 오픈
    function popupOpen(addrs, t="", w, h){
      if (w === undefined)
        w = 800;
      if (h === undefined)
        h = 600;
    //  if (w === undefined)
    //    w = 1900;
    //  if (h === undefined)
        h = 900;
      var popWidth = w; // 팝업창 넓이
      var popHeight = h; // 팝업창 높이
      var winWidth = document.body.clientWidth; // 현재창 넓이
      var winHeight = document.body.clientHeight; // 현재창 높이
      var winX = window.screenX || window.screenLeft || 0; // 현재창의 x좌표
      var winY = window.screenY || window.screenTop || 0; // 현재창의 y좌표
      var popLeftPos = (winX + (winWidth - popWidth) / 2); // 팝업 x 가운데
      var popTopPos = (winY + (winHeight - popHeight) / 2)-200; // 팝업 y 가운데


      var popUrl = addrs; //팝업창에 출력될 페이지 URL
      var popOption = "left="+popLeftPos+", top="+popTopPos+", width="+popWidth+", height="+popHeight+", resizable=no, scrollbars=yes, status=no;";    //팝업창 옵션(optoin)
      window.open(popUrl, t , popOption);
    }
  </script>
  <title><?=$common_title?></title>
  <link rel="stylesheet" href="<?=LIVE_CSS_VIEW_PATH?>/import.css">
</head>