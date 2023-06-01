
<?php include('server/connection.php'); ?>   
<head>
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="assets/css/admin_style.css">
</head>
<script>
    var last_pick = "empty";
function selected(show_select){
    document.getElementById(show_select).removeAttribute('hidden');
    document.getElementById("h_sel_data").textContent = show_select;
    if(last_pick != show_select && last_pick != "empty"){
        document.getElementById(last_pick).setAttribute('hidden','false');
        last_pick = show_select;
    }else{ last_pick = show_select; }
    //document.getElementById("form_search").style = "block";
    document.getElementById("form_search").removeAttribute('hidden');
    var element = document.getElementById("search_date");
    if(show_select == "order_items" || show_select == "orders"){
        element.style.display = "inline";
    }else{ element.style.display = "none"; }
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
                <th width="180px" align="left" valign="top" scope="col" style="background-color: lightblue;" rowspan="2">
                    
                    <ul> 
                        <li onclick="selected('order_items')" class="admin_list_1">Ordered Items</li>
                        <li onclick="selected('orders')" class="admin_list_1">Orders</li>
                        <li onclick="selected('products')" class="admin_list_1">Products</li>
                        <li onclick="selected('users')" class="admin_list_1">Users</li>
                    </ul>
                    <form action="admin.php" method="post">
                        <button type='submit' name='btn_logout'>Logout</button>
                    </form>
                </th>
                <th height="60">
                    <h1 id="h_sel_data">Select Data</h1>
                <form id="form_search" action="admin.php" method="post" hidden="hidden" style="display: inline;">
                        <button type='submit' name='btn_search'>Search</button>
                        <label>Search :</label><input type="text" name="txt_search">
                    <div id="search_date" style="display: none;">
                        <label>Months:</label>
                            <select id="drp_month" name="drp_months">
                                <option value="" disabled selected>--Months--</option>
                                <?php
                                  for ($month = 1; $month <= 12; $month++) {
                                    $monthValue = str_pad($month, 2, '0', STR_PAD_LEFT);
                                    $monthLabel = date('F', strtotime("{$month}/1/2000"));
                                    echo "<option value='{$month}'>{$monthLabel}</option>";
                                  }
                                ?>
                            </select>
                        <label>Days:</label>
                        <select id="drp_years" name="drp_years">
                        <option value="" disabled selected>-Days-</option>
                        <?php
                            for($dy=1; $dy <=31; $dy++){ echo "<option value='{$dy}'>{$dy}</option>"; }
                        ?>
                        </select>
                        <label>Year:</label>
                        <select id="drp_years" name="drp_years">
                        <option value="" disabled selected>-Years-</option>
                        <?php
                            for($yr=2022; $yr <=2032; $yr++){ echo "<option value='{$yr}'>{$yr}</option>"; }
                        ?>
                        </select>
                    </div>
                    </form>
                </th>
                
            </tr>
            <tr>
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