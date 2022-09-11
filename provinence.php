<?php 
$conn=mysqli_connect("localhost","root");
if($conn){
    // echo "akshay";
}
$db=mysqli_select_db($conn,"Nepal");
if($db){
    // echo "yes";
}
// $myname=array("akshay");
$q="select * from provinence";
$provinenceArray=mysqli_query($conn,$q);
?>
<option value="#">Select Provinence</option>
<?php
while($item=mysqli_fetch_array($provinenceArray)){
    // echo "<option>$item[1]</option>"; //we can use array with index
    // echo "<option>$item[Name]</option>"; //we can use array with attribute name instead on index
    ?>
    <option value="<?php echo $item["Provinence"] ?>"><?php echo "$item[Name]" ?></option> <!-- in php we can use echo " $arrayNmae[index/attributeName]" or echo $arrayName["index/attributeName"] -->
    <?php
    
}

?>