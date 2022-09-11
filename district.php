<?php 
$conn=mysqli_connect("localhost","root");
$db=mysqli_select_db($conn,"Nepal");
$provinence=$_POST["provinence"];
$q="select * from district where Provinence='$provinence'";
$districtArray=mysqli_query($conn,$q);
?>
<option value="#">Select District</option>
 <?php
while($item=mysqli_fetch_array($districtArray)){
    ?>
    <option value="<?php echo $item["Name"] ?>"><?php echo $item["Name"] ?></option>
    <?php
}
?>