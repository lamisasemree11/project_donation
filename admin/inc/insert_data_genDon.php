<?php
$sql="SELECT * FROM general_donation ORDER BY id desc LIMIT 0,5 ";
$result=$con->query($sql);
if($result->num_rows>0)
{
echo "<table class='table table-striped' >";
echo "<tr>
    <th>الرقم</th>
    <th>نوع التبرع</th>
    <th>مبلغ التبرع</th>
    <th>حذف</th>
  </tr>";
  $i=0;
  while($row=$result->fetch_assoc())
  {
    $i++;
    echo"<tr>";
      echo "<td>$i</td>";
      echo "<td>".$row["donateType"]."</td>";
      echo "<td>".$row["public_don_amount"]."</td>";
      echo "<td><a href='del_general_don.php?id=".$row["id"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
    echo"</tr>";
  }
echo "</table>";
}
?>
<form name="_xclick" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="admin1@business.example.com">
<input type="hidden" name="item_name" value="<?php  echo $_POST["donateType"];?>">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="amount" value="<?php echo $_POST["public_don_amount"];?>">
<input type="image" src="https://i.dlpng.com/static/png/926024_preview_preview.png" style="width:100px; margin:20px;"name="PP-submit" alt="Make a donation with PayPal"><br>

</form>
