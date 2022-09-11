<?php 
$conn=mysqli_connect("localhost","root");
$db=mysqli_select_db($conn,"Nepal");
$district=$_POST["district"];
$q="select * from ".$district;
$districtArray=mysqli_query($conn,$q);
?>
<option value="#">Select Municipality</option>
 <?php
while($item=mysqli_fetch_array($districtArray)){
    ?>
    <option value="<?php echo $item["Name"] ?>"><?php echo $item["Name"] ?></option>
    <?php
}
?>