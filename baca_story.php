<?php include "base.html"; 
include "config.php"
?>

<nav role="navigation" class="menuTopWrap topMenuStyleLine">
	<ul id="mainmenu" class="">
	<li id="menu-item-2238" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent ">
	<a href="story.php">Back to Story</a>

</nav>
<?php
$id = 2;
$query = "SELECT idcerita, namadokumen FROM cerita WHERE idcerita=$id";
$query = mysqli_real_escape_string($conn,$query);

if($result = mysqli_query($conn,$query)){
	$row = mysqli_fetch_object($result);
    echo 
	'<div class="mainWrap without_sidebar">
	<div class="main" role="main">
		<div class="content">
			<center><img id="'. $row->idcerita . '" src="images/story/p1/'. $row->namadokumen . '" alt="" /><center>
			<br>
			<br>
			<div id="nextquiz" class="pagination">
				<ul class="pageLibrary">
					<center><li class="pager_last ico right squareButton light" style="text-decoration:underline"><a href="#">Ayo ikut Kuis! </a></li></center>
				</ul>
			</div>
		</div>
	</div>
</div>';

mysqli_free_result($result);
}
mysqli_close($conn);
?>


