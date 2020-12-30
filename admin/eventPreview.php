<?php
    if(isset($_POST["title"], $_POST["description"], $_POST["fDate"], $_POST["tDate"], $_POST["image"],)){
        require_once '../controller/database.php';
        require_once '../models/Database.php';
        require_once '../models/Customer.php';
        session_start();
        $output ='';
        $fDate=$_POST["from_date"];
        $tDate=$_POST["to_date"];
        $custId=$_SESSION['sessionId'];
        
        $total=0.00;

        // Order Data
        $OrderData= [
            "custID"=> $custId,
            "fDate"=> $fDate,
            "tDate"=> $tDate
        ];

        // Instantiate Customer
        $customer= new Customer();

        // Instantiate Product
        $product= new Product();

        //filtering orders
        $orders= $customer->filterOrders($OrderData);

        $ordersNum= count($orders);
        $output .='
        <div class="container">
        <h3><strong>Total number of orders from  '. $fDate.' to '. $tDate.': '. $ordersNum. '</strong></h3>
        <br>';
        // Payment Data
        $PaymentData= [
            "custID"=> $custId,
            "orderID"=> 0
        ];
        foreach($orders as $key){
            $output .='
            <div class="container orders">
                <h2><strong>Order</strong></h2>
                <h6 class="timeStamp">'.$key->orderTime.'</h6>
            
            ';
            $PaymentData['orderID']=$key->orderID;
            $payments=$customer->displayPayments($PaymentData);
            $prodPays=$product->getProductPayments($payments->paymentID);
            foreach($prodPays as $index){
                $products= $product->getSomeProducts($index->productID);

                foreach($products as $p){
                    $output .= '
                        <div class="container">
                            <div class="img-blks5 col-sm-12 text-center product row">
                            <div class = "col-lg-6">
                            <img src="../assets/productImages/'.$p->image .'" />
                            </div>
                            <div class = "col-lg-6">
                                <form action= "cart_remove.php" method= "post">
                                    <input type="hidden" name="buyId" value="'.$p->productID.'"></input>
                                    <strong class="pMainText pName">'.$p->pName.'</strong>
                                    <h3 class="pMainText pPrice">$'.$p->price.'</h3>
                        
                        ';
                        $total=$total+(float)$p->price*(int)$index->quantity;
                        $output .= '
                                    <h3 class="pRating"

                        ';
                        for ($i=0; $i <= $p->rating; $i++) { 
                        # code...
                        $output .= '
                                    <i class="fa fa-star" aria-hidden="true"></i>

                        ';
                        
                        }
                        if ($p->rating< 5) {
                        # code...
                        for($i=0; $i < 5-$p->rating; $i++){
                            $output .= '
                                    <i class="fa fa-star-o" aria-hidden="true"></i>

                            ';
                        

                        }
                        }
                        $output .= '
                                    </h3>
                                    <strong class="pMainText quantity">Qty: '.$index->quantity.'</strong>
                                    </form>
                                </div>
                            </div>
                        </div>
                                    

                        ';

                }
            }
            $output .= '
                <h5><strong>Order Total: $'.$total.'</strong></h5>
            </div>
            <br><br>
                
            ';
            $total=0.00;
        }
        echo $output;
    }
    



?>