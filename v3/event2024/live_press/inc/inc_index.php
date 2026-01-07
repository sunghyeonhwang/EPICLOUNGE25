<div class="live-training">
  <div class="boxy-warp">
    <div class="t-logo">
      <img src="images/ue5_logo_horizontal_v01_2.gif" alt="">
      <a id="idQnaLink" href="javascript:;">Q&A용 질문하기</a>
    </div>
    <div class="video-chat-box">
      <div class="l-video">
        <iframe src="<?=$SEL_DATA['youtube_link']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="r-chat">
        <div class="chat-box">
          <iframe id="cgchat" name="cgchat" src='<?=$SEL_DATA['chat_link']?>' style="width:100%;height:518px;margin:0;padding:0;border:solid 1px #eae7e7; "></iframe>
        </div>
      </div>
    </div>
   <!-- <div class="b-btn4">
        <a href="<?=$SEL_DATA['other_track_link']?>">다른 트랙으로 이동</a>
      </div>-->
    <div class="list-box2" >
      <?=$SEL_DATA['edu_schedule']?>
      <?if (!empty($SEL_DATA['other_track_link'])) {?>
      
      <?}?>
    </div>
    <div class="foot-con">
      <span class="l-txt"><a href="<?=PAGE_CONTACT?>" target="_blank">라이선스 및 제휴 문의</a></span>
      <span class="r-logo">
         <a href="<?=PAGE_MAIN?>" target="_blank"><img src="images/logo3.png" alt=""></a>
      </span>
  </div>
</div>