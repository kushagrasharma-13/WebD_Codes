<html>
<head>
    <script>
        function abc() {
            alert("Hello");
        }
        function display(x) {
            x = "q_" + x;
            if (document.getElementById(x).disabled) {
                document.getElementById(x).disabled = false;
                document.getElementById(x).value = 1;
            }
            else {
                document.getElementById(x).disabled = true;
                document.getElementById(x).value = 0;
            }
        }
    </script>

    <style>
        body {
            background-image: url("bg.jpg");
            background-repeat: no-repeat;
            background-size: 1600px 850px;
        }

        img {
            width: 120px;
            height: 150px;
        }

        div {
            vertical-align: middle;
            margin: 20px 0px;
            padding: 2px 0px;
        }

        h1 {
            font-family: LiSu;
            text-align: center;
            color: rgba(190, 103, 27, 0.82);
        }

        input[type=text] {
            text-align: center;
            background-color: yellow;
            border-radius: 10px;
        }

        input[type=submit] {
            font-size: 24px;
            font-family: LiSu;
            border-radius: 10px;
        }

        td,
        th,
        table {
            text-align: center;
            font-size: 23px;
            font-family: LiSu;
        }

        #table1 {
            background-color: black;
        }
    </style>

    <script>
        function abc() {
            alert("Thank You For Your Payment");
        }
        function display(x) {
            x = "q_" + x;
            if (document.getElementById(x).disabled) {
                document.getElementById(x).disabled = false;
                document.getElementById(x).value = 1;
            }
            else {
                document.getElementById(x).disabled = true;
                document.getElementById(x).value = 0;
            }
        }
    </script>

    <title>Menu</title>

</head>

<body>
    <div style="background-color:rgba(79,227,227,0.78);">
        <h1>Welcome to ND!</h1>
    </div>
    <div style="float:left;">
        <form action=# method=post>
            <table border=1 align=center style="background-color:skyblue; width:800px; height:300px;">
                <tr>
                    <td colspan=5 style="vertical-align:middle;">Menu</td>
                </tr>
                <tr>
                    <th>S. No.</th>
                    <th>Items</th>
                    <th>Price per unit</th>
                    <th>Check to add in order</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>Tandori Roti</th>
                    <th>Rs. 10</th>
                    <th><input type=checkbox value=item1 onclick=display(this.value)><input type=hidden name=item1 value=10></th>
                    <th><input type=text name=q_item1 id=q_item1 value="0" disabled required></th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Sahi Paneer</th>
                    <th>Rs. 150</th>
                    <th><input type=checkbox value=item2 onclick=display(this.value)><input type=hidden name=item2 value=150></th>
                    <th><input type=text name=q_item2 id=q_item2 value=0 disabled required></th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Malai Kofta</th>
                    <th>Rs. 200</th>
                    <th><input type=checkbox value=item3 onclick=display(this.value)><input type=hidden name=item3 value=200>
                    </th>
                    <th><input type=text name=q_item3 id=q_item3 value=0 disabled required></th>
                </tr>
                <tr>
                    <th colspan=5 align=center><input type=submit name=submit value="Generate Bill"></th>
                </tr>
            </table>
        </form>
    </div>
<?php
if (isset($_POST['submit'])) 
{
$color = array('lightgray', 'white');
$i = 0;
echo "<table align:right border=1>";
echo "<tr bgcolor=" . $color[$i] . "><th colspan=3 
><strong>Bill</strong></th>";
$i = ($i + 1) % 2;
echo "<tr bgcolor=" . $color[$i] . "><th>Date</th><th colspan=2 align=center>"
. date('d-m-Y') . "</th>";
$i = ($i + 1) % 2;
$total = 0;
$order_item = array();
$order_item_price = array();
if (isset($_POST['q_item1'])) 
{
$order_item['Tandori Roti'] = $_POST['q_item1'];
$order_item_price['Tandori Roti'] = $_POST['item1'];
}
if (isset($_POST['q_item2'])) 
{
$order_item['Sahi Paneer'] = $_POST['q_item2'];
$order_item_price['Sahi Paneer'] = $_POST['item2'];
}
if (isset($_POST['q_item3'])) 
{
$order_item['Malai Kofta'] = $_POST['q_item3'];
$order_item_price['Malai Kofta'] = $_POST['item3'];
}
echo "<tr bgcolor=" . $color[$i] . 
"><th>Dish</th><th>Quantity</th><th>Amount</th></tr>";
$i = ($i + 1) % 2;
foreach ($order_item as $a => $b) 
{
echo "<tr bgcolor=" . $color[$i] . "><td>$a</td><td>$b</td><td>Rs. " . 
((int)$b * (int)$order_item_price[$a]) . "</td></tr>";
$i = ($i + 1) % 2;
$total = $total + (int)$b * (int)$order_item_price[$a];
}
echo "<tr bgcolor=" . $color[$i] . "><td 
colspan=2>Total</td><td>$total</td></tr>";
$i = ($i + 1) % 2;
$discount = 0;
if ($total >= 1000)
$discount = 10;
$final_price = $total - $total * $discount / 100;
echo "<tr bgcolor=" . $color[$i] . "><td 
colspan=2><strong>Discount</strong></td><td>$discount%</td></tr>";
$i = ($i + 1) % 2;
echo "<tr bgcolor=" . $color[$i] . "><td colspan=2><strong>Amount to be 
Paid</strong></td><td>$final_price</td></tr>";
$i = ($i + 1) % 2;
echo "</table>";
?>
    <input type=button onclick=abc() value=CONFIRM>
    <?php
}
?>
