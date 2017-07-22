<?php include "base.html";
include "config.php"
?>

			
<div class="sc_parallax_content" style="background-color:Tomato;padding:0.5px;">
	<div style="margin-left:0px">
		<div class="sc_content main animated" style="margin-top:129px !important;margin-bottom:172px !important;">
				<h3 class="columns1_2 sc_title sc_title_regular font_ubuntu title_type_2" style="margin-left:0px;text-align:left;font-weight:400;color:black;margin-top:190px">
				"Sesungguhnya Allah itu Maha <br>Indah dan mencintai keindahan." <br> (HR. Muslim)</h3>
				<img src="images/party.png"></img>
				<div class="columns1_2 sc_column_item sc_column_item_1 odd first"></div><div class="columns1_2 sc_column_item sc_column_item_2 even"></div>
			<
		</div>
	</div>
</div>

<div class="mainWrap without_sidebar">
	<div class="main" role="main">
		<div class="content">
<div class="mainWrap without_sidebar">
<div>
    <div class="columns1_4" style="margin-left:0px;margin-top:50px">
		<div><a href="#"><center><img src="images/karya/upload.png"></img></center><br></div>
		<div><center><h4 style="margin-bottom:0px;margin-left:0px; color:black">Unggah Karyamu!</h4></center></div></a>
	</div>
<?php
$query = "SELECT idkarya, kreator, namadokumen FROM karya ORDER BY idkarya";
$query = mysqli_real_escape_string($conn,$query);

if($result = mysqli_query($conn,$query)){
	while($row = mysqli_fetch_object($result)){

    echo

	'<div class="columns1_4" style="margin-left:0px;margin-top:50px">
		<div><center><img src="images/karya/'. $row->namadokumen . '"></img></center><br></div>
		<div><center><h4 style="margin-bottom:0px;margin-left:0px">'. $row->kreator . '</h4></center></div>
	</div>
</div>
</div>';
}
mysqli_free_result($result);
}
mysqli_close($conn);
?>	
	<div id="pagination" class="pagination">
	<ul class="pageLibrary">
    <li class="pager_last ico right squareButton light" style="margin-left:20px"><a href="#">Previous </a></li>
	<li class="pager_pages libPage">Page 
	<input class="navInput" readonly="readonly" type="text" size="1" value="1"> of 2
	<div id="pageNavSlider" class="boxShadow pageFocusBlock navPadding">
	<div class="sc_slider sc_slider_swiper sc_slider_controls sc_slider_controls_top sc_slider_nopagination sc_slider_noautoplay swiper-slider-container">
	<ul class="slides swiper-wrapper" data-current-slide="1"><li class="swiper-slide">
	<div class="pageNumber"><table><tr><td><a href="#" class="active">1</a></li><td><a href="#">2</a></td></tr></table></div></li></ul></div>
	<ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next" href="#"></a></li></ul>
	</div></li>
	<li class="pager_next ico right squareButton light"><a href="page/2/index.html">Next </a></li>
					</ul>
				</div>

</div>
</div>
				
<div class="footerContentWrap" >
	<footer class="footerWrap footerStyleLight contactFooterWrap" style="background-color:LightSeaGreen">
		<div class="main contactFooter">
			
		</div>
</div><!-- /.footerContentWrap -->
