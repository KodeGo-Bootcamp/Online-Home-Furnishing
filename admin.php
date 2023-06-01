
<?php include('server/connection.php'); ?>   
<head>
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="assets/css/admin_style.css">
</head>
<script>
    var last_pick = "empty";
function selected(show_select){
    document.getElementById(show_select).removeAttribute('hidden');
    if(last_pick != show_select && last_pick != "empty"){
        document.getElementById(last_pick).setAttribute('hidden','true');
        last_pick = show_select;
    }else{ last_pick = show_select; }
}
</script>
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if(isset($_POST['btn_edit'])){
    echo "<script>alert('column=". $_POST["txt_col"]." and the ID =". $_POST["txt_id"] ."');</script>";
}
}

?>
<body>
    <table class="temp_lng" width="1200px" border="1">
        <tbody>
            <tr>
                <th width="180px" align="left" valign="top" scope="col" style="background-color: lightblue;">
                    <form action="admin.php" method="post">
                        <button type='submit' name='btn_logout'>Logout</button>
                    </form>
                    <ul> 
                        <li onclick="selected('order_items')" class="admin_list_1">Ordered Items</li>
                        <li onclick="selected('orders')" class="admin_list_1">Orders</li>
                        <li onclick="selected('products')" class="admin_list_1">Products</li>
                        <li onclick="selected('users')" class="admin_list_1">Users</li>
                    </ul>
                </th>
                <th align="left" valign="top" scope="col">
                    
                            <?php
                            $order_items_col = array(
                            array("item_id","order_id","product_id","product_name","product_image","user_id","order_date","product_price","product_quantity"),
                            array("order_id","order_status","user_id","user_city","user_address","order_date","order_cost","user_phone"),
                            array("product_id","product_name","product_category","product_image","product_special_offer","product_price",),
                            array("user_id","user_name","user_email","cp_num","delivery_add")
                            );
                            $columns = ["order_items","orders","products","users"];
                        
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
                                <button type='submit' name='btn_edit' value='none'>Edit</button>
                                <button type='submit' name='btn_delete'>Delete</button></form></th>";
                                echo "</tr>";
                            }
                            
                            echo "</tbody></table>";
                        }?>
                </th>
            </tr>
        </tbody>
</body>

</html>