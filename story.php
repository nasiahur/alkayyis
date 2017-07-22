<?php include "base.html";
include "config.php"; 
?>

<div class="sc_parallax_content" style="background-image:url(images/storybackground.png); background-position:50% 50%;height:180px;margin-top:-100px;">
	<div style="margin-left:90px">
		<div class="sc_content main animated" style="margin-top:129px !important;margin-bottom:172px !important;">
			<div class="columnsWrap sc_columns sc_columns_count_2">
				<div class="columns1_2 sc_column_item sc_column_item_1 odd first"></div><div class="columns1_2 sc_column_item sc_column_item_2 even"></div>
			</div>
		</div>
	</div>
</div>
<?php
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	echo $id;
	$update = "UPDATE cerita SET likes = likes + 1 WHERE idcerita = $id";
	mysqli_query($conn, $update);
}
$query = "SELECT idcerita, judul, views, likes, filethumbnail FROM cerita ORDER BY idcerita";
$query = mysqli_real_escape_string($conn,$query);

if($result = mysqli_query($conn,$query)){
	while($row = mysqli_fetch_object($result)){

    echo 
		'<div class="mainWrap without_sidebar">
			<div class="main" role="main">
				<div class="content">	
					<div class="masonryWrap">
						<div class="isotopeFiltr"></div>
						<section class="masonry isotope" data-columns="2">
						<article class="isotopeElement post_format_standard even flt_71">
						<div class="isotopePadding">
							<div class="thumb hoverIncrease" data-image="images/story/'. $row->filethumbnail . '" data-title='. $row->judul . '>
								<img class="wp-post-image" width="714" alt='. $row->judul . ' src="images/story/'. $row->filethumbnail . '">
							</div>
							<h4><a href="baca_story.php?id='. $row->idcerita .'">'. $row->judul . '</a></h4>        
							<div class="masonryInfo">Posted <a href="#" class="post_date">29 Mei 2017</a></div>
							<div class="masonryMore">
								<ul>
									<li class="squareButton light ico"><a class="icon-eye" title="Views - '. $row->views . '" href="#">'. $row->views . '</a></li>
									<li class="squareButton light ico">
									<a class="icon-heart-1" title="Like - 1" href="story.php?id='. $row->idcerita .'"><span class="likePost">'. $row->likes . '</span></a></li>
								</ul>
							</div>
						</div>
						</article>
						
						
					
				</section>
			</div>';
}
mysqli_free_result($result);
}
mysqli_close($conn);
?>
			
			<div id="pagination" class="pagination">
			<ul class="pageLibrary">
			<li class="pager_last ico right squareButton light"><a href="page/2/index.html">Previous </a></li>
			<li class="pager_pages libPage">Page 
			<input class="navInput" readonly="readonly" type="text" size="1" value="1"> of 2
			<div id="pageNavSlider" class="boxShadow pageFocusBlock navPadding">
			<div class="sc_slider sc_slider_swiper sc_slider_controls sc_slider_controls_top sc_slider_nopagination sc_slider_noautoplay swiper-slider-container">
			<ul class="slides swiper-wrapper" data-current-slide="1"><li class="swiper-slide">
			<div class="pageNumber"><table><tr><td><a href="#" class="active">1</a></li><td><a href="page/2/index.html">2</a></td></tr></table></div></li></ul></div>
			<ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next" href="#"></a></li></ul>
			</div></li>
			<li class="pager_next ico right squareButton light"><a href="page/2/index.html">Next </a></li>
							</ul>
						</div>
				</div> <!-- </div> class="content"> -->

			</div> <!-- </div> class="main" role="main"> -->				
			</div> <!-- /.mainWrap -->'