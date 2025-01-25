<h1>Thank you for your order!</h1>
<p>Hi {{ $order['name'] }},</p>
<p>We have received your order with the following details:</p>
<ul>
    <li>Order ID: {{ $order['id'] }}</li>
    <li>Color: {{ $order['color'] }}</li>
    <li>Address: {{ $order['house_village_name'] }}, {{ $order['area_landmark'] }}, {{ $order['city'] }}, {{ $order['state'] }} - {{ $order['pin_code'] }}</li>
</ul>
<p>We will process your order shortly!</p>
