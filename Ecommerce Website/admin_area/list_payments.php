<h3 class="text-center text-success">All payments</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-danger">
        <?php

        $get_payments="SELECT * FROM  `user_payments`";
        $result=mysqli_query($con,$get_payments);
        $row_count=mysqli_num_rows($result);
    if($row_count==0){
        echo "<h2 class='text-danger text-center mt-5'>No payments received yet</h2>";
    }else{
        echo "<tr class='text-center'>
        <th class='bg-info'>Sl no</th>
        <th class='bg-info'>Invoice number</th>
        <th class='bg-info'>Amount</th>
        <th class='bg-info'>Payment mode</th>
        <th class='bg-info'>Payment date</th>
        <th class='bg-info'>Delete</th>
    </tr>
    </thead>
    <tbody class='bg-secondary text-light'>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
            $order_id=$row_data['order_id'];
            $payment_id=$row_data['payment_id'];
            $amount=$row_data['amount'];
            $invoice_number=$row_data['invoice_number'];
            $payment_mode=$row_data['payment_mode'];
            $date=$row_data['date'];
            $number++;
            echo "    
            <tr class='text-center'>
            <td class='bg-secondary text-light'>$number</td>
            <td class='bg-secondary text-light'>$invoice_number</td>
            <td class='bg-secondary text-light'>$amount</td>
            <td class='bg-secondary text-light'>$payment_mode</td>
            <td class='bg-secondary text-light'>$date</td>
            <td class='bg-secondary text-light'><a class='text-light'><i class='fa-solid fa-trash bg-secondary'></i></a></td>
        </tr>";
        }
    }
        ?>
    
    </tbody>
</table>



