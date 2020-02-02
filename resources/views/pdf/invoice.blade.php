<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Invoice {{$order->order_number}}</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        table{
            font-size: x-small;
        }
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }
        .gray {
            background-color: lightgray
        }
    </style>

</head>
<body>

<table width="100%">
    <tr>
        <td valign="top"><img src="assets/images/logo.png" alt="" width="150"/></td>
        <td align="right">
            <h3>{{$order->shop['shop_title']}}</h3>
            <pre>
                {{$order->shop['shop_address']}}
                {{$order->shop['shop_phone']}}
                {{$order->shop['shop_email']}}
            </pre>
            <h4>Order Number: #{{$order->order_number}}</h4>
            <h5>Delivery Address: {{$order->order_delivery_address}}, {{$order->order_delivery_phone}}</h5>
        </td>
    </tr>

</table>

<table width="100%">
    <tr>
        <td><strong>From:</strong> {{$order->shop['shop_title']}}</td>
        <td><strong>To:</strong> {{$order->user['name']}}</td>
    </tr>

</table>

<br/>

<table width="100%">
    <thead style="background-color: lightgray;">
    <tr>
        <th>#</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Unit Price (Tk)</th>
        <th>Total (Tk)</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order->products as $product)
        <tr>
            <th scope="row">1</th>
            <td>{{$product['name']}}</td>
            <td align="right">{{$product['qty']}}</td>
            <td align="right">{{$product['price']}}</td>
            <td align="right">{{$product['price'] * $product['qty']}}</td>
        </tr>
    @endforeach
    </tbody>

    <tfoot>
    <tr>
        <td colspan="3"></td>
        <td align="right">Subtotal (Tk)</td>
        <td align="right">{{$order->order_price_total}}</td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td align="right">Delivery Charge (Tk)</td>
        <td align="right">{{$order->order_delivery_charge}}</td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td align="right">Discount (Tk)</td>
        <td align="right">{{$order->order_discount}}</td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td align="right">Total (Tk)</td>
        <td align="right" class="gray">{{$order->order_total_payable}}</td>
    </tr>
    </tfoot>
</table>

</body>
</html>