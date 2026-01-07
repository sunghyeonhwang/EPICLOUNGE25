
	<script src="js/jquery-1.12.2.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	<script src="js/layout.js"></script>
	
	<script>
	$( document ).ready(function() {
		$(function(){
		  $('.bxslider').bxSlider({
			mode: 'fade',
			captions: true,
			auto : true,
		  });
		});
	});
	</script>
	
	<script>
	// ÆË¾÷ ¿ÀÇÂ
	function popupOpen(addrs, w, h){
	  if (w === undefined)
		w = 1900;
	  if (h === undefined)
		h = 900;
	  var popWidth = w; // ÆË¾÷Ã¢ ³ÐÀÌ
	  var popHeight = h; // ÆË¾÷Ã¢ ³ôÀÌ
	  var winWidth = document.body.clientWidth; // ÇöÀçÃ¢ ³ÐÀÌ
	  var winHeight = document.body.clientHeight; // ÇöÀçÃ¢ ³ôÀÌ
	  var winX = window.screenX || window.screenLeft || 0; // ÇöÀçÃ¢ÀÇ xÁÂÇ¥
	  var winY = window.screenY || window.screenTop || 0; // ÇöÀçÃ¢ÀÇ yÁÂÇ¥
	  var popLeftPos = (winX + (winWidth - popWidth) / 2); // ÆË¾÷ x °¡¿îµ¥
	  var popTopPos = (winY + (winHeight - popHeight) / 2)-200; // ÆË¾÷ y °¡¿îµ¥


	  var popUrl = addrs; //ÆË¾÷Ã¢¿¡ Ãâ·ÂµÉ ÆäÀÌÁö URL
	  var popOption = "left="+popLeftPos+", top="+popTopPos+", width="+popWidth+", height="+popHeight+", resizable=no, scrollbars=yes, status=no;";    //ÆË¾÷Ã¢ ¿É¼Ç(optoin)
	  window.open(popUrl,"",popOption);
	}
	</script>
 </body>
</html>
