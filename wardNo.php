<?php 
$conn=mysqli_connect("localhost","root");
$db=mysqli_select_db($conn,"Nepal");
$municipality=$_GET["municipality"];
$q="select * from ".$municipality;
$WardArray=mysqli_query($conn,$q);
?>
<option value="#">Select Ward No</option>
 <?php
while($item=mysqli_fetch_array($WardArray)){
    ?>
    <option value="<?php echo $item["WardNo"] ?>"><?php echo $item["WardNo"] ?></option>
    <?php
}
?>