<?php 
$order_items_col = array(
    array("item_id","order_id","product_id","product_name","product_image","user_id","order_date","product_price","product_quantity"),
    array("order_id","order_status","user_id","user_city","user_address","order_date","order_cost","user_phone"),
    array("product_id","product_name","product_category","product_image","product_special_offer","product_price",),
    array("user_id","user_name","user_email","cp_num","delivery_add")
    );
$columns = ["order_items","orders","products","users"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if(isset($_POST['btn_update'])){
    //echo "<script>alert('column=". $_POST["txt_col"]." and the ID =". $_POST["txt_id"] ."');</script>";

    echo "<table id='tbl_search' width='100%' border='1' style='display: block;'><tbody>";
    for($x=0; $x < count($columns); $x++){ 
        if($columns[$x] == $_POST["txt_col"]){
            $col_name = $order_items_col[$x][0];
            $x = count($columns) + 1;
        }
    }
    $result = mysqli_query($conn,"SELECT * FROM " . $_POST["txt_col"] ." WHERE ".$col_name." = ".$_POST["txt_id"]);
    $row = mysqli_fetch_assoc($result);
    echo "<tr><th>";
    if($_POST["txt_col"] == "order_items"){
        echo "Item ID : <b>".$row["item_id"]."</b>";

    }else if($_POST["txt_col"] == "orders"){
        echo "Orders ID : <b>".$row["order_id"]."</b>";

    }else if($_POST["txt_col"] == "products"){
        echo "Products ID : <b>".$row["product_id"]."</b>";

    }else if($_POST["txt_col"] == "users"){
        echo "Users ID : <b>".$row["user_id"]."</b>";
    }
    echo "</th></tr>";
    echo "</tbody></table>";
  }
}
    for($count_col = 0; $count_col < count($columns); $count_col++){
        echo "<table id='". $columns[$count_col] ."' width='100%' border='1' hidden='hidden'><tbody>";
        $result = mysqli_query($conn,"SELECT * FROM " . $columns[$count_col]);
        for($x=0; $x < count($order_items_col[$count_col]); $x++){ 
            echo "<th scope='col'>" . $order_items_col[$count_col][$x] . "</th>";
        }
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            for($x = 0; $x < count($order_items_col[$count_col]); $x++){
                echo "<th scope='col'>" . $row[$order_items_col[$count_col][$x]] . "</th>";
            }
            echo "<th scope='col'><form action='admin.php' method='post'>
            <input type='text' name='txt_id' value='".$row[$order_items_col[$count_col][0]]."' hidden='true'>
            <input type='text' name='txt_col' value='".$columns[$count_col]."' hidden='true'>
            <button type='submit' name='btn_update' value='none'>Update</button>
            </form></th></tr>";
        }
        echo "</tbody></table>";
    }

?>