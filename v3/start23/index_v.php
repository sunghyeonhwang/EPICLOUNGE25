<?
$g5_path="board";
include_once('../common.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:title" content="언리얼 엔진 5" />
    <meta property="og:type" content="website" />
    <meta property="fb:589663484560989" />
    <meta name="keywords" content="언리얼 엔진 5 " />
    <meta name="description" content="언리얼 엔진 5" />
    <meta property="og:url" content="https://www.epiclounge.co.kr" />
    <meta property="og:image" content="https://unrealsummit16.cafe24.com/og/ue5.jpg" />
    <meta property="og:image:height" content="630px" />
    <meta property="og:image:width" content="1200px" />
    <meta property="og:description" content="언리얼 엔진 5는 모든 산업 전반의 크리에이터가 멋진 리얼타임 콘텐츠와 경험을 제공할 수 있도록 돕습니다." />
    <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />

    <title>에픽 라운지</title>
  </head>
  <body>
    <link rel="stylesheet" href="/v3/resource/css/main3.css?ver=1232123" />

    <script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
    <script src="/v3/resource/js/slick.min.js"></script>
    <script src="/v3/resource/js/ScrollTrigger.min.js"></script>
    <script src="/v3/resource/js/jquery.menu.min.js"></script>
    <script src="/v3/resource/js/jquery.responsive.min.js"></script>
    <script src="/v3/resource/js/common.js"></script>
    <script src="/v3/resource/js/main.js"></script>


<?php include '../inc/common_header.php'; ?>
    <!-- container -->
       <div class="container main">
      <section class="sec visual">
        <div class="video_wrap">
          <!-- 샘플 동영상 -->
		  <video controls autoplay="autoplay" muted="muted" controls="false" webkit-playsinline  playsinline preload muted loop  style="pointer-events: none;">

			<source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
		</video>
			<style>
	video::-webkit-media-controls {
display:none !important;

}
	video::-media-controls {
 display:none !important;

}
 *::-webkit-media-controls-panel {
  display: none!important;
  -webkit-appearance: none;
}

/* Old shadow dom for play button */

*::-webkit-media-controls-play-button {
  display: none!important;
  -webkit-appearance: none;
}

/* New shadow dom for play button */

/* This one works! */

*::-webkit-media-controls-start-playback-button {
  display: none!important;
  -webkit-appearance: none;
}video::-webkit-media-controls-start-playback-button {
  display: none !important;
}
 video::slotted::-webkit-media-controls-container{
      display:none !important;
      visibility: hidden!important;
      opacity: 0 !important;
     -webkit-appearance: none !important;
    }
	    video::-webkit-media-controls-overlay-play-button {
      display: none;
    }
		</style>
        </div>
        <h2 class="skip">비주얼</h2>
        <div class="wrap">
          <div class="visual_text">
            <h3>
              <img src="/v3/resource/images/start23/visual_text1.svg" alt="시작해요 언리얼 2023" />
            </h3>
            <div class="date">3.14~4.11 <span>(</span>5주간<span>)ㅣ</span>매주 화요일, 2 PM</div>
            <a href="" class="visual_anchor">무료 등록하기</a>
          </div>
        </div>
      </section>

      <section class="sec intro">
        <div class="wrap">
          <h2 class="sec_title">소개</h2>
          <h3>언리얼 엔진이 처음이지만 고퀄리티의 시네마틱 영상을 만들고 싶으신가요?</h3>
          <p>
            시작해요 언리얼 2023은 언리얼 엔진 초심자를 위한 튜토리얼 형식의 웨비나입니다. 아트 콘셉트 디자인부터 레벨 제작 및 디테일, 라이팅 세팅, 그리고 시퀀서를 통한 영상 연출과 렌더링까지 언리얼
            엔진 크리에이터 '러셀'과 함께 총 5주간의 강좌를 통해 고퀄리티 시네마틱 영상을 제작하게 됩니다. 언리얼 엔진 5를 가장 빠르고 쉽게 배우고 싶은 초심자분들이라면 지금 바로 등록하고 참여해
            보세요!
          </p>
          <div class="img">
            <!-- <img src="/v3/resource/images/start23/intro1.jpg" alt="소개 이미지" /> -->
          </div>
          <div class="video">
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/eT-uLb-tVIM"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
          <div class="btn_wrap">
            <a href="#n" class="btn">무료 등록하기</a>
          </div>
        </div>
      </section>

      <section class="sec target">
        <div class="wrap">
          <h2 class="sec_title">대상</h2>
          <ul class="target_list">
            <li class="target_item item1">
              <div class="img"><img src="/v3/resource/images/start23/target1.jpg" alt="언리얼 엔진이 완전 처음이신 분들 이미지" /></div>
              <div class="con">
                언리얼 엔진이 완전 처음이신 분들
                <span>(학생, 직장인, 비전공자 등)</span>
              </div>
            </li>
            <li class="target_item item2">
              <div class="img"><img src="/v3/resource/images/start23/target2.jpg" alt="숙련도를 더욱 올리고 싶은 시작해요 언리얼 2022 수강자 이미지" /></div>
              <div class="con">숙련도를 더욱 올리고 싶은<br />시작해요 언리얼 2022 수강자</div>
            </li>
            <li class="target_item item3">
              <div class="img"><img src="/v3/resource/images/start23/target3.png" alt="5회의 강좌로 실사 수준의 영상을 만들고 싶으신 분 이미지" /></div>
              <div class="con">5회의 강좌로 실사 수준의 영상을<br />만들고 싶으신 분</div>
            </li>
          </ul>
        </div>
      </section>

      <section class="sec signature">
        <div class="wrap">
          <h2 class="sec_title">특징</h2>
          <ul class="signature_list">
            <li class="signature_item item1">
              <i class="signature_icon"></i>
              <p class="con">
                5주간의 수강을 완료하면
                <b>고퀄리티 시네마틱 영상</b>을 제작할 수 있습니다.
              </p>
            </li>
            <li class="signature_item item2">
              <i class="signature_icon"></i>
              <p class="con">
                시네마틱 영상 제작의 전반적인
                <b>실무 워크플로</b>를 이해할 수 있습니다.
              </p>
            </li>
            <li class="signature_item item3">
              <i class="signature_icon"></i>
              <p class="con"><b>기초</b> 과정뿐만 아니라<b>실전 심화 팁&노하우</b>를 배워 작품의 디테일을 더욱 올릴 수 있습니다.</p>
            </li>
            <li class="signature_item item4">
              <i class="signature_icon"></i>
              <p class="con">
                매주 출제되는
                <b>도전과제</b>를 수행하여 강좌 내용을 완전히 습득할 수 있습니다.
              </p>
            </li>
            <li class="signature_item item5">
              <i class="signature_icon"></i>
              <p class="con"><b>라이브 Q&A</b>와 <b>채팅</b>을 통해 연사 및 커뮤니티와 소통할 수 있습니다.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="sec curriculum">
        <div class="wrap">
          <div class="title_wrap">
            <h2 class="sec_title">커리큘럼</h2>
            <p>매주 다음과 같이 구성됩니다.</p>
          </div>
          <ul class="curr_list">
            <li class="curr_item item1">
              <div class="curr_item_title">
                <h3>
                  <div class="title">1강 | 레벨 제작 준비하기</div>
                  <span class="status date">2023.03.11</span>
                </h3>
              </div>
              <div class="curr_item_con">
                <div class="img"><img src="/v3/resource/images/start23/curr1.jpg" alt="레벨 제작 준비하기 이미지" /></div>
                <div class="text">
                  <ol class="curr_con_list">
                    <li>언리얼 프로젝트 생성하기</li>
                    <li>퀵셀 메가스캔 에셋 다운로드하기</li>
                    <li>레벨 인스턴스 알아보기</li>
                  </ol>
                  <ul class="curr_sub_list">
                    <li>Q&A</li>
                    <li>도전과제 출제</li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="curr_item replay">
              <div class="curr_item_title">
                <h3>
                  <div class="title">2강 | 레벨 제작하기 I</div>
                  <span class="status">REPLAY</span>
                </h3>
              </div>
              <div class="curr_item_con">
                <div class="img"><img src="/v3/resource/images/start23/curr2.jpg" alt="레벨 제작하기 I 이미지" /></div>
                <div class="text">
                  <ol class="curr_con_list">
                    <li>모델링 툴로 고퀄리티 벽면 제작하기</li>
                    <li>3D 에셋으로 기본 레벨 구성하기</li>
                  </ol>
                  <ul class="curr_sub_list">
                    <li>과제물 선별 소개</li>
                    <li>Q&A</li>
                    <li>도전과제 출제</li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="curr_item onair">
              <div class="curr_item_title">
                <h3>
                  <div class="title">3강 | 레벨 제작하기 II</div>
                  <span class="status">ONAIR</span>
                </h3>
              </div>
              <div class="curr_item_con">
                <div class="img"><img src="/v3/resource/images/start23/curr3.jpg" alt="레벨 제작하기 II 이미지" /></div>
                <div class="text">
                  <ol class="curr_con_list">
                    <li>폴리지 기능을 활용하여 에셋 배치하기</li>
                    <li>레벨 인스턴스를 활용하여 에셋 반복 배치하기</li>
                    <li>데칼을 추가하여 에셋의 디테일 보완하기</li>
                  </ol>
                  <ul class="curr_sub_list">
                    <li>과제물 선별 소개</li>
                    <li>Q&A</li>
                    <li>도전과제 출제</li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="curr_item item4">
              <div class="curr_item_title">
                <h3>
                  <div class="title">4강 | 라이팅 및 디테일 추가하기</div>
                  <span class="status date">2023.04.04</span>
                </h3>
              </div>
              <div class="curr_item_con">
                <div class="img"><img src="/v3/resource/images/start23/curr4.jpg" alt="라이팅 및 디테일 추가하기 이미지" /></div>
                <div class="text">
                  <ol class="curr_con_list">
                    <li>라이팅 세팅하기</li>
                    <li>모델링 툴로 벽면에 구멍 뚫기</li>
                    <li>레벨에 디테일 추가하기</li>
                  </ol>
                  <ul class="curr_sub_list">
                    <li>과제물 선별 소개</li>
                    <li>Q&A</li>
                    <li>도전과제 출제</li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="curr_item item5">
              <div class="curr_item_title">
                <h3>
                  <div class="title">5강 | 영상 연출 및 렌더링하기</div>
                  <span class="status date">2023.04.11</span>
                </h3>
              </div>
              <div class="curr_item_con">
                <div class="img"><img src="/v3/resource/images/start23/curr5.jpg" alt="영상 연출 및 렌더링하기 이미지" /></div>
                <div class="text">
                  <ol class="curr_con_list">
                    <li>퀵셀 메가스캔 트리 활용하기</li>
                    <li>시퀀서로 카메라 연출하기</li>
                    <li>무비 렌더 큐로 렌더링하기</li>
                  </ol>
                  <ul class="curr_sub_list">
                    <li>과제물 선별 소개</li>
                    <li>Q&A</li>
                    <li>도전과제 출제</li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>

          <div class="btn_wrap">
            <a href="#n" class="btn">무료 등록하기</a>
          </div>
        </div>
      </section>

      <section class="sec ready">
        <div class="wrap">
          <div class="title_wrap">
            <h2 class="sec_title">사전준비</h2>
            <p>웨비나 시청 전에 꼭 준비해 주세요.</p>
          </div>
          <div class="con_wrap">
            <ul class="ready_list">
              <li class="ready_item">
                <div class="img"><img src="/v3/resource/images/start23/ready1.png" alt="" /></div>
                <div class="ready_con">
                  <h3>1.시작해요 언리얼 2022를 꼭 시청하세요.</h3>
                  <p>기본적인 내용을 다루는 <span>하이라이트</span>를 참석 전에 반드시 시청해 주세요. <span>전체 영상</span>을 미리 시청하시면 강연 이해에 큰 도움이 됩니다.</p>
                </div>
              </li>
              <li class="ready_item">
                <div class="img"><img src="/v3/resource/images/start23/ready2.png" alt="" /></div>
                <div class="ready_con">
                  <h3>2. 언리얼 엔진을 설치해 주세요.</h3>
                  <p>참석 전 <span>언리얼 엔진을 설치</span>하면 따라해보면서 시청할 수 있습니다.</p>
                </div>
              </li>
              <!-- 임시주석
				<li class="ready_item">
                <div class="img"><img src="/v3/resource/images/start23/ready3.png" alt="" /></div>
                <div class="ready_con">
                  <h3>3. 에셋을 미리 다운로드해 주세요.</h3>
                  <p>강연에서 사용하는 에셋을 미리 <span>다운로드</span>하면 끊김없이 강연에 집중할 수 있습니다.</p>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </section>

      <section class="sec speaker">
        <div class="wrap">
          <h2 class="sec_title">강연자</h2>
          <div class="con_wrap">
            <div class="img"><img src="/v3/resource/images/start23/speaker2.jpg" alt="" /></div>
            <div class="speaker_con">
              <h3>언리얼 엔진 크리에이터 <b>러셀</b></h3>
              <p>
                RYU Russell 러셀은 언리얼 엔진 크리에이터이자 3D 그래픽 디자이너로서, LG전자, JYP, Adobe 등 다수의 기업과 협업하여 다양한 작품들을 제작했고, 현재는 6명으로 구성된 류 프로덕션의
                대표로서 언리얼 엔진 5를 활용하여 아름다운 한국을 배경으로 하는 'Project RYU'를 개발 중에 있습니다.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="sec event">
        <div class="wrap">
          <h2 class="sec_title">이벤트</h2>
          <ul class="event_list">
            <li class="event_item item1">
              <div class="event_item_title">
                <h3>시청 이벤트</h3>
                <p><span>매주</span> 웨비나를 <span>처음부터 끝까지 시청</span>만 해도 <span>언리얼 굿즈 GET!</span></p>
                <div class="sub_text">시작해요 언리얼 2023 매주 웨비나를 처음부터 끝까지 시청하신 분들 중 20분을 추첨해 언리얼 엔진 굿즈를 드립니다.</div>
              </div>
              <ul class="event_detail_list">
                <li class="event_detail_item">
                  <span class="title">참여 기간</span>
                  <span class="con">3/14(화)~4/11(화), 5주간 매주</span>
                </li>
                <li class="event_detail_item">
                  <span class="title">참여 방법</span>
                  <span class="con"
                    >1. 등록한 이메일로 체크인하여 웨비나를 시청해 주세요.<br />
                    2. 웨비나를 처음부터 끝까지 시청하기만 하면 이벤트에 자동 응모!</span
                  >
                </li>
                <li class="event_detail_item">
                  <span class="title">결과 발표</span>
                  <span class="con">매주 웨비나 직후 에픽 라운지의 이벤트 페이지에 게시</span>
                </li>
                <li class="event_detail_item">
                  <span class="title">참여 혜택</span>
                  <span class="con">매주 랜덤 굿즈 20명 추첨</span>
                </li>
              </ul>
              <div class="event_img">
                <img src="/v3/resource/images/start23/event1.png" alt="" />
              </div>
            </li>
            <li class="event_item item2">
              <div class="event_item_title">
                <h3>도전과제 이벤트</h3>
                <p><span>매주 도전과제</span>를 수행하고 <span>언리얼 굿즈</span> 받자!</p>
                <div class="sub_text">매주 웨비나 중 출제되는 도전과제를 출제자의 의도에 맞게 성실히 수행하신 분들 중 추첨을 통해 언리얼 굿즈를 드립니다.</div>
              </div>
              <ul class="event_detail_list">
                <li class="event_detail_item">
                  <span class="title">참여 기간</span>
                  <span class="con">3/14(화)~4/16(일), 5주간 매주</span>
                </li>
                <li class="event_detail_item">
                  <span class="title">참여 방법</span>
                  <span class="con"
                    >1. 등록한 이메일로 체크인하여 웨비나를 시청해 주세요.<br />
                    2. 웨비나를 처음부터 끝까지 시청하기만 하면 이벤트에 자동 응모!</span
                  >
                </li>
                <li class="event_detail_item">
                  <span class="title">결과 발표</span>
                  <span class="con"
                    >매주 웨비나 직후 에픽 라운지 이벤트 페이지에 게시<br />
                    3월 21일부터 1주차 결과발표 및 5주차 결과는 4월 18일 게시 예정
                  </span>
                </li>
                <li class="event_detail_item">
                  <span class="title">참여 혜택</span>
                  <span class="con">매주 랜덤 굿즈 30명 추첨</span>
                </li>
              </ul>
              <div class="event_img">
                <img src="/v3/resource/images/start23/event2.png" alt="" />
              </div>
            </li>
          </ul>
          <div class="warning_wrap">
            <ul class="warning">
              <li>경품은 사정에 따라 변경될 수 있습니다.</li>
              <li>이벤트는 중복하여 참여할 수 있습니다.</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="sec faq">
        <div class="wrap">
          <h2 class="sec_title">FAQ</h2>
          <div class="faq_con">
            <ul class="faq_list">
              <li class="faq_item active">
                <div class="q">
                  <span class="q_title">무료 등록을 반드시 해야 하나요?</span>
                </div>
                <div class="a" title="열림">네, <span>무료 등록</span>을 하셔야 시청하실 수 있습니다.</div>
                <button type="button" class="more_btn" data-open="true" title="닫힘">닫힘</button>
              </li>
              <li class="faq_item active">
                <div class="q">
                  <span class="q_title">등록 정보는 어떻게 수정하나요?</span>
                </div>
                <div class="a" title="열림"><span>등록 확인</span>을 통해 등록 정보를 수정하실 수 있습니다.</div>
                <button type="button" class="more_btn" data-open="true" title="닫힘">닫힘</button>
              </li>
              <li class="faq_item active">
                <div class="q">
                  <span class="q_title">1인 1회만 등록이 가능한가요?</span>
                </div>
                <div class="a" title="열림">
                  동일한 휴대전화번호/이메일 주소로 1회만 등록이 가능하며, 추가 등록은 불가능합니다.
                  <span></span>
                </div>
                <button type="button" class="more_btn" data-open="true" title="닫힘">닫힘</button>
              </li>
              <li class="faq_item active">
                <div class="q">
                  <span class="q_title">시작해요 언리얼 2023는 어떻게 시청하나요?</span>
                </div>
                <div class="a" title="열림">
                  1. 무료 등록을 하신 경우 등록된 이메일 주소로 웨비나 시작 30분 전 시청 링크를 매주 발송해 드립니다.<br />
                  2. 무료 등록을 하셨으나 시청 링크를 이메일로 받지 못하셨다면, 행사 당일 본 페이지에 접속하여 '시청하기' 버튼을 통해 시청하실 수 있습니다.
                  <span></span>
                </div>
                <button type="button" class="more_btn" data-open="true" title="닫힘">닫힘</button>
              </li>
              <li class="faq_item active">
                <div class="q">
                  <span class="q_title">웨비나 도중에는 입장이 불가능한가요?</span>
                </div>
                <div class="a" title="열림">
                  방송 진행 중에도 입장하여 시청이 가능합니다.
                  <span></span>
                </div>
                <button type="button" class="more_btn" data-open="true" title="닫힘">닫힘</button>
              </li>
              <li class="faq_item active">
                <div class="q">
                  <span class="q_title">시청 시 주의해야 하는 점이 있나요?</span>
                </div>
                <div class="a" title="열림">
                  무료로 진행되는 본 웨비나는 등록 없이 유튜브에서 시청할 수 있으나, 이벤트 참여를 위해서는 반드시 등록 후 시청하셔야 합니다.
                  <span></span>
                </div>
                <button type="button" class="more_btn" data-open="true" title="닫힘">닫힘</button>
              </li>
              <li class="faq_item active">
                <div class="q">
                  <span class="q_title">문의가 있습니다. 어떻게 문의하면 될까요?</span>
                </div>
                <div class="a" title="열림">문의는<span> 이메일</span> 혹은 전화 <span>02-326-3701</span>를 통해서 가능합니다.</div>
                <button type="button" class="more_btn" data-open="true" title="닫힘">닫힘</button>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
    <button type="button" class="up remove">위로</button>

    <!-- //container -->
    <!-- footer -->

<?php include '../inc/common_footer.php'; ?>

    <script>
      $(function () {
        function setAcc() {
          var $accBtn = $(".sec.faq .more_btn");
          $accBtn.on("click", function () {
            var $this = $(this),
              $thisParent = $this.closest(".faq_item"),
              $thisAnswer = $this.siblings(".a");
            $thisParent.toggleClass("active");
            if ($thisParent.hasClass("active")) {
              $thisAnswer.attr("title", "열림");
              $this.attr({ "data-open": "true" });
              $this.title("닫기");
            } else {
              $thisAnswer.attr("title", "닫힘");
              $this.attr({ "data-open": "false" });
              $this.text("열기");
            }
          });
        }
        setAcc();
        // function setResVisualHeight() {
        //   var $visual = $(".sec.visual"),
        //     $window = $(window);
        //   function setVisualHeight() {
        //     $visual.outerHeight($window.height() - $("#header").outerHeight());
        //   }
        //   function switchVisualHeight() {
        //     if ($window.width() < 641) {
        //       setVisualHeight();
        //     } else {
        //       $visual.removeAttr("style");
        //     }
        //   }
        //   $window.on("resize", function () {
        //     switchVisualHeight();
        //   });
        // }
        // setResVisualHeight();

     
        function setUp() {
          var $up = $(".up");
          function setScrollUp() {
            if ($("html,body").scrollTop() <= 200) {
              $up.addClass("remove");
            } else {
              $up.removeClass("remove");
            }
          }
          $(window).on("scroll", function () {
            setTimeout(setScrollUp, 200);
          });

          $(".up").on("click", function () {
            if ($("html,body").scrollTop <= 500) {
              $(this).addClass("remove");
            } else {
              $(this).removeClass("remove");
              $("html,body").animate({ scrollTop: 0 }, 300);
            }
          });
        }
        setUp();
      });
    </script>

    <link rel="stylesheet" href="//rawgit.com/Soldier-B/jquery.toast/master/jquery.toast/jquery.toast.min.css" />
    <script src="//rawgit.com/Soldier-B/jquery.toast/master/jquery.toast/jquery.toast.min.js"></script>
  </body>
</html>
