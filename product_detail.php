<?php 
include("includes/header.php");

$link=mysqli_connect("localhost", "root", "", "store_db");
if(mysqli_connect_errno())
	exit("خطای با شرح زیر رخ داده است :".mysqli_connect_errno());

$pro_code=0;
if(isset($_GET['id']))
	$pro_code=$_GET['id'];

$query="SELECT * FROM products WHERE pro_code='$pro_code'";
$result=mysqli_query($link, $query);
?>

<table style="width: 100%; border-radius: 5px;" border="1px">
	<tr>
		<?php
		if($row=mysqli_fetch_array($result)){
		?>
		<td style="border-style: hidden; vertical-align: top; width: 33%;">
			<h4 style="color: brown;"><?php echo($row['pro_name']) ?></h4>
			<img src="images/products/<?php echo($row['pro_image'])?>" width="100%" height="100%" style="border-radius: 5px;"/>
			<br/>
			قیمت : <?php echo($row['pro_price'])?> &nbsp; ریال 
			<br/>
			تعداد موجودی : <span style="color: red;"><?php echo($row['pro_qty']) ?></span>
			<br/>
			توضیحات : <span style="color: green;"><?php echo($row['pro_detail']); ?></span>
			
			<br/><br/>
			
			<b>
				<a href="order.php?id=<?php echo($row['pro_code']) ?>" style="text-decoration: none;">
					سفارش و خرید پستی
				</a>
			</b>
		</td>
		<?php
		}
		?>
	</tr>
</table>

<?php 
include("includes/footer.php");
?>