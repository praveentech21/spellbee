<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IppoPay</title>
    </head>
    <body>       
        <?php
        $orderId=321;
        $publicKey = "pk_live_763zY8hZ9kHu";
        $secretKey = "sk_live_aIj0ezDFk3iSMjnffucZYCS19RM9VvmQwoo2cE4j";
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://".$publicKey.":".$secretKey."@api.ippopay.com/v1/order/create",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\n\t\"amount\": 2.00,\n \"currency\": \"INR\" ,\n \"payment_modes\": \"cc,dc,nb,upi\" ,\n        \"return_url\": \"\",\n  \"customer\": {\n \"name\": \"Suresh\",\n \"email\": \"bvrmol@mcr.org.in\",\n \"phone\": {\n \n \"country_code\": \"91\" ,\n \"national_number\": \"9866600002\"\n }\n }\n \n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);        
        $array = json_decode($response,true);
        $orderId = $array['data']['order']['order_id'];

        ?>
        <script type="text/javascript" src="https://js.ippopay.com/scripts/ippopay.v1.js"></script>
        <script type="text/javascript">
            var order_id;
            var options = {
                "order_id" : "<?php echo $orderId; ?>",
                "public_key" : "<?php echo $publicKey; ?>"
            }
            var ipay = new Ippopay(options);
            ipay.open();
            ippopayHandler(response, function (e) {
                if(e.data.status == 'success'){
                    console.log(e.data);
                }
                if(e.data.status == 'failure'){
                    console.log(e.data);
                }
            });
        </script>
    </body>
</html>