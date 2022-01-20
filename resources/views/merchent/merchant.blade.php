<html>
<body>
 <table>
     <tr>Name</tr>
     <tr>Email</tr>
     <tr>Address</tr>
     <tr>Amount</tr>
     <td>{{$response['data']['merchant']['x_customer_first_name'].' '.$response['data']['merchant']['x_customer_last_name']}}</td>
     <td>{{$response['data']['merchant']['x_customer_email']}}</td>
     <td>{{$response['data']['merchant']['x_customer_shipping_address1']}}</td>
     <td>{{$response['data']['merchant']['x_amount']}}</td>
 </table>
</body>
</html>
