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
        echo "<table id='tbl_update' width='100%' border='1' style='display: block;'><tbody>";
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
            echo "<form>";
            echo "Product ID : <b>".$row["product_id"]."</b><br>
            <label>Product Name:</label><input type='text' name='txt_name' value='".$row["product_name"]."'><br>
            <label>Category:</label><input type='text' name='txt_email' value='".$row["product_category"]."'><br>
            <label>Price:</label><input type='text' name='txt_num' value='".$row["product_price"]."'><br>
            <label>Special Offer Price:</label><input type='text' name='txt_num' value='".$row["product_special_offer"]."'><br>
            <label>Description:</label>
            <textarea style='height:100px; width:250px' name='textarea'>'".$row["product_description"]."'</textarea><br>

            <label>Change Main Pic:</label><input type='file' id='main_pic' name='main_pic'>
            <img src='assets/images/".$row["product_image"]."' width='150' height='150' alt=''/><br><hr>

            <label>Change Image 1:</label><input type='file' id='pic1' name='pic1'>
            <img src='assets/images/".$row["product_image1"]."' width='125' height='125' alt=''/><br><hr>
            <label>ChangeImage 2:</label><input type='file' id='pic2' name='pic2'>
            <img src='assets/images/".$row["product_image2"]."' width='125' height='125' alt=''/><br><hr>
            <label>Change Image 3:</label><input type='file' id='pic3' name='pic3'>
            <img src='assets/images/".$row["product_image3"]."' width='125' height='125' alt=''/><br><hr>
            <label>Change Image 4:</label><input type='file' id='pic4' name='pic4'>
            <img src='assets/images/".$row["product_image4"]."' width='125' height='125' alt=''/><br><hr>
            <br><br><br>
            <button type='submit' name='btn_edit' style='margin-right: 20px'>Edit</button>
            <button type='submit' name='btn_update'>Delete</button>
            </form>";

        }else if($_POST["txt_col"] == "users"){
            echo "<form>";
            echo "Users ID : <b>".$row["user_id"]."</b><br>
            <label>Name:</label><input type='text' name='txt_name' value='".$row["user_name"]."'><br>
            <label>Email:</label><input type='text' name='txt_email' value='".$row["user_email"]."'><br>
            <label>Mobile #:</label><input type='text' name='txt_num' value='".$row["cp_num"]."'><br>
            <label>Address:</label><input type='text' name='txt_add' value='".$row["delivery_add"]."'>
            <br><br><br>
            <button type='submit' name='btn_edit' style='margin-right: 20px'>Edit</button>
            <button type='submit' name='btn_update'>Delete</button>
            </form>";
        }
        echo "</th></tr>";
        echo "</tbody></table>";
  }else if(isset($_POST['btn_search'])){
    if($_POST['txt_search'] == ""){
        echo "<table id='tbl_search' border='1'><tr><th>search by ID</th></tr></table>";
    }else if($_POST['drp_months'] == "" ){
        echo "<table id='tbl_search' border='1'><tr><th>search by ID</th></tr></table>"; 
    }
    $result = mysqli_query($conn,"SELECT * FROM " . $_POST["txt_col"] ." WHERE ".$col_name." = ".$_POST["txt_id"]);
    $row = mysqli_fetch_assoc($result);
    
  }
}
 display_main();
function display_main(){
    global $columns;
    global $order_items_col;
    global $conn;
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
}
?>