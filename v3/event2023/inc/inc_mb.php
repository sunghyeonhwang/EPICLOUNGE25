<!-- 모바일 1-->
        <script language="JavaScript">
 <!--
 function Show_hidden(e){
  var menu = new Array("test_1","test_2","test_3","test_4","test_5"); // 객체 배열로 지정
  for(var i=0;i < menu.length;i++){
   if("test_"+e==menu[i]){
    document.all[menu[i]].style.display="block";
   }else{
    document.all[menu[i]].style.display="none";
   }
  }
 }  
 //-->
 </script>
      <!-- s: mb-agenda-tab -->
      <div class="mb-agesnda-tab">
        <div class="boxy-warp">
          <div class="select-warp">

            <style>
            </style>
            <div class="select-box1">
              <select name="" id="" class="selectBox01" onchange="Show_hidden(this.value);">
                <option value="1">교육 - 09월01일</option>
                <option value="2">게임 프로그래밍 - 09월02일</option>
                <option value="3">게임 아트 - 09월02일</option>
                <option value="4">건축 - 09월03일</option>
                <option value="5">M&E - 09월03일</option>

              </select>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div id="test_1" style="display:block;">
	             <ul>
		           <li >
	              <div class="top-con">
	                <p class="time">13:00-13:45</p>
	                <p class="p-title">언리얼 엔진 강의를 효과적으로 도입하기 위한 노하우</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img1.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">권오찬</p>
	                    <p class="b-txt">에픽게임즈 코리아</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal">상세보기</button>
	                </div>
	                
	              </div>
	            </li>
	            <li>
	              <div class="top-con">
	                <p class="time">14:05 - 14:50</p>
	                <p class="p-title">언리얼을 활용한 교육 과정 설계: 언리얼 엔진을 활용한 교육 케이스 소개와 교육 효과</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">김인권</p>
	                    <p class="b-txt">아이스큐브랩</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal2">상세보기</button>
	                </div>
	                
	              </div>
	
	            </li>
	            <li>
	              <div class="top-con">
	                <p class="time">15:10-15:55</p>
	                <p class="p-title">미디어 아트를 위한 언리얼 엔진: 교육부터 창작까지</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">김대홍</p>
	                    <p class="b-txt">서울예대</p>
	                  </div>
	                </div>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">이현우</p>
	                    <p class="b-txt">서울예대</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal3">상세보기</button>
	                </div>
	                
	              </div>
	
	            </li>
	            
			 </ul>
            </div>
            <!--트랙1 - 게임 프로그래밍-->
			 <div id="test_2" style="display:none;">
				  <ul>
		          <li >
	              <div class="top-con">
	                <p class="time">13:00-13:45</p>
	                <p class="p-title">최신 언리얼 엔진 4 모바일 플랫폼 주요 업데이트와 로드맵</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img_pch.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">박창현</p>
	                    <p class="b-txt">에픽게임즈 코리아</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal4">상세보기</button>
	                </div>
	                
	              </div>
	            </li>
	            <li>
	              <div class="top-con">
	                <p class="time">14:05 - 14:50</p>
	                <p class="p-title">사례로 배우는 성능 최적화와 프로파일링</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img_gjh.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">강정훈</p>
	                    <p class="b-txt">에픽게임즈 코리아</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal6">상세보기</button>
	                </div>
	                
	              </div>
	
	            </li>
	            <li>
	              <div class="top-con">
	                <p class="time">15:10-15:55</p>
	                <p class="p-title">	&#60;익스트림 풋볼&#62;에 사용된 주요 기술 : Unreal.js 와 언리얼 데디서버</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">배종국</p>
	                    <p class="b-txt">나인엠인터랙티브</p>
	                  </div>
	                </div>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">박재민</p>
	                    <p class="b-txt">나인엠인터랙티브</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal9">상세보기</button>
	                </div>
	                
	              </div>
	
	            </li>
	            <li >
	              <div class="top-con">
	                <p class="time">16:15-17:00</p>
	                <p class="p-title">차세대 게임을 위한 언리얼 엔진</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img_sks.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">신광섭</p>
	                    <p class="b-txt">에픽게임즈 코리아</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal7">상세보기</button>
	                </div>
	                
	              </div>
	            </li>
		          </ul>
			</div>
			<!-- 게임아트-->
			 <div id="test_3" style="display:none;">
				  <ul>
		          <li >
	              <div class="top-con">
	                <p class="time">13:00-13:45</p>
	                <p class="p-title">언리얼 엔진에서 대기표현하기</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img_pch.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">박창현</p>
	                    <p class="b-txt">에픽게임즈 코리아</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal5">상세보기</button>
	                </div>
	                
	              </div>
	            </li>
	            <li>
	              <div class="top-con">
	                <p class="time">14:05 - 14:50</p>
	                <p class="p-title">나이아가라로 군집 애니메이션 만들기</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img_gjh.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">권오찬</p>
	                    <p class="b-txt">에픽게임즈 코리아</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal8">상세보기</button>
	                </div>
	                
	              </div>
	
	            </li>
	            <li>
	              <div class="top-con">
	                <p class="time">15:10-15:55</p>
	                <p class="p-title">가벼운 코드와 리소스로 1,000개의 캐릭터를 끊김없이 나오게 하기</p>
	                
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">이길수</p>
	                    <p class="b-txt">레드사하라</p>
	                  </div>
	                </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal10">상세보기</button>
	                </div>
	                
	              </div>
	
	            </li>
	            <li >
	              <div class="top-con">
	                <p class="time">16:15-17:00</p>
	                <p class="p-title"><9M 프로야구>의 리얼함을 표현하기 위한 언리얼 엔진 활용기</p>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">최재웅</p>
	                    <p class="b-txt">나인엠인터랙티브</p>
	                  </div>
	                </div>
	                <div class="profile">
	                  <p class="p-img">
	                    <img src="<?=IMG_VIEW_PATH?>/profile-img.jpg" alt="">
	                  </p>
	                  <div class="r-txt">
	                    <p class="p-name">한유진</p>
	                    <p class="b-txt">나인엠인터랙티브</p>
	                  </div>
	                <div class="contents-txt">
	                  <button type="button" class="detail-btn" data-toggle="modal" data-target="#agendaModal7">상세보기</button>
	                </div>
	                
	              </div>
	            </li>
		          </ul>
			</div>
			 <!-- 건축-->
			 <div id="test_4" style="display:none;">
				 <ul>
	            트랙4건축
				<!--트랙5-->
	          	</ul>
          	</div>
          	<!--ME-->
			 <div id="test_5" style="display:none;">
	            <ul>
	            트랙5건축
	          	</ul>
          	</div>
        </div>
      </div>
      <!-- e: mb-agenda-tab -->
    </div>
    <!-- e: agenda -->