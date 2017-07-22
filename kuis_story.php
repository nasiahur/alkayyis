<?php include "base.html";
include "config.php" ;


$id = $_GET['id'];
$query = "SELECT idkuisbs, namafile, pertanyaan FROM benarsalah WHERE idkuisbs = $id";
$query = mysqli_real_escape_string($conn,$query);

if($result = mysqli_query($conn,$query)){
	while ($row = mysqli_fetch_object($result)){
    echo 
'<div class="mainWrap without_sidebar">
	<div class="main" role="main">
		<div class="content">	
			<center><img src="images/story/p1/'. $row->pertanyaan . '" alt="" /><center>
			<br>
			<center><img src="images/story/p1/'. $row->namafile . '" /></center>
		</div>
	</div>
</div>';
}
mysqli_free_result($result);
}
mysqli_close($conn);
?>

<div class="mainWrap without_sidebar">
<div class="main" role="main">
<div class="content">
			<div class="wpb_wrapper" >
				<div class="isotopeFiltr"></div>
				<div class="sc_content main animated" style="margin-top:0px !important;margin-bottom:66px !important;">
					<div class="columnsWrap sc_columns sc_columns_count_5">
						<div class="columns1_2 sc_column_item sc_column_item_1 odd first" style="text-align:none;">
						<a href="#">
							<div class="sc_title_icon sc_title_top sc_size_huge">
								<center><img src="images/benar.png" alt="" /></center>
							</div>
							<center><h6 class="sc_title sc_title_iconed" style="color:red">Benar</h6></center></a>
						</div>
						<div class="columns1_2 sc_column_item sc_column_item_2 even">
						<a href="#">
							<div class="sc_title_icon sc_title_top sc_size_huge">
								<center><img src="images/salah.png" alt="" /></center>
							</div>
							<center><h6 class="sc_title sc_title_iconed" style="color:green">Salah</h6></center></a>
						</div>
		</div>
	</div>
</div>
</div>
</div> <!-- </div> class="main" role="main"> -->				
</div> <!-- /.mainWrap -->
