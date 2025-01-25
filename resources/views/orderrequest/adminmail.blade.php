<h1>New Order Created</h1>
<p>A new order has been placed with the following details:</p>
<ul>
    <li>Name: {{ $order['name'] }}</li>
    <li>Email: {{ $order['email'] }}</li>
    <li>Mobile Number: {{ $order['mobile_number'] }}</li>
    <li>Color: {{ $order['color'] }}</li>
    <li>Address: {{ $order['house_village_name'] }}, {{ $order['area_landmark'] }}, {{ $order['city'] }}, {{ $order['state'] }} - {{ $order['pin_code'] }}</li>
</ul>
