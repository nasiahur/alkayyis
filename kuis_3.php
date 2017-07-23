<?php include "base.html";
include "config.php";

$id = $_GET['id'];
$query = "SELECT idkuistebakan, pertanyaan, namafile1, namafile2, namafile3, namafile4, level FROM tebakan WHERE level = $id";
$query = mysqli_real_escape_string($conn,$query);

if($result = mysqli_query($conn,$query)){
	while($row = mysqli_fetch_object($result)){

echo
'<div class="mainWrap without_sidebar">
	<div class="main" role="main">
		<div class="content">
			<div class="wpb_wrapper" >
				<div class="isotopeFiltr"></div>
				<div class="sc_content main animated" style="margin-top:0px !important;margin-bottom:0px !important;">
					<div class="columnsWrap sc_columns sc_columns_count_5">
						<center><h2>' . $row->pertanyaan . '</h2></center>
						<div class="columns1_2 sc_column_item sc_column_item_1 odd first" style="text-align:none;">
						<a href="#">
							<div class="sc_title_icon sc_title_top sc_size_huge"  style="width:600px;height:600px;">
								<center><img src="images/kuis/level ' . $row->level . '/' . $row->namafile1 . '" alt="" /></center>
							</div></a>
						</div>
						<div class="columns1_2 sc_column_item sc_column_item_2 even">
						<a href="#">
							<div class="sc_title_icon sc_title_top sc_size_huge" style="width:600px;height:600px">
								<center><img src="images/kuis/level ' . $row->level . '/' . $row->namafile2 . '" alt="" /></center>
							</div></a>
						</div>
						<div class="columns1_2 sc_column_item sc_column_item_1 odd first" style="text-align:none;">
						<a href="#">
							<div class="sc_title_icon sc_title_top sc_size_huge"  style="width:600px;height:600px;margin-top:-220px">
								<center><img src="images/kuis/level ' . $row->level . '/' . $row->namafile3 . '" alt="" /></center>
							</div></a>
						</div>
						<div class="columns1_2 sc_column_item sc_column_item_2 even">
						<a href="#">
							<div class="sc_title_icon sc_title_top sc_size_huge" style="width:600px;height:600px;margin-top:-220px">
								<center><img src="images/kuis/level ' . $row->level . '/' . $row->namafile4 . '" alt="" /></center>
							</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';
}
mysqli_free_result($result);
}
mysqli_close($conn);
?>
