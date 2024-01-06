<?php 
include("includes/header.php");

$link=mysqli_connect("localhost", "root", "", "store_db");
if(mysqli_connect_errno())
	exit("خطای با شرح زیر رخ داده است :".mysqli_connect_errno());

$query="SELECT * FROM products";
$result=mysqli_query($link, $query);

?>

<img src="images/LOGO_0.png" width="100%" height="100%"/>

<table style="width: 100%; border-style: hidden;" border="1px">
	<tr class="mahs">
		<?php 
		$counter=0;
		while($row=mysqli_fetch_array($result)){
			$counter++;
		?>
		<td class="mahs" style="border-style: solid; vertical-align: top; width: 22%; border-radius: 5px;">
			<h4 style="color: brown;"><?php echo($row['pro_name'])?></h4>
			<a href="product_detail.php?id=<?php echo($row['pro_code'])?>">
			<img class="img_index" src="images/products/<?php echo($row['pro_image'])?>" width="100%" height="100%"  style="border-radius: 5px;"/>
			</a>
			
			<br/>
			قیمت : <?php echo($row['pro_price'])?> &nbsp; ریال 
			<br/>
			تعداد موجودی : <span style="color: red;"><?php echo($row['pro_qty']) ?></span>
			<br/>
			
			توضیحات : <span style="color: green; text-align: justify;"><?php echo(substr($row['pro_detail'],0,120)); ?>...</span>
			
			<br/><br/>
			
			<b><a href="product_detail.php?id=<?php echo($row['pro_code'])?>" style="text-decoration: none;">توضیحات تکمیلی و خرید</a></b>
			
		</td>
		
		<?php
		if($counter %4==0)
			echo("</tr><tr>");
		}
		
		if($counter %4 !=0)
			echo("</tr>");
		?>

</table>

<?php 
include("includes/footer.php");
?>