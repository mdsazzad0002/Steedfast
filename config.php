<?php 

    class steedFast{
        public $Api_Key = "jwqjaywbmswqrwymm0bdvnwvrr6annc4";
        public $Secret_Key = "g94vnmgpdvehmsp8vrhgkyrv";
        
        public  $base_url = 'https://portal.steadfast.com.bd/api/v1/';
      
        

       
        public function order_create($data_array){
            // needed  invoice  recipient_name  recipient_phone  recipient_address  cod_amount  note
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url.'create_order/?'.http_build_query($data_array),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '',
            CURLOPT_HTTPHEADER => array(
                'Api-Key:'. $this->Api_Key,
                'Content-Type: application/json',
                'Secret-Key:'. $this->Secret_Key
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return json_decode($response);
        }



            
            
            public function bulkCreate($data){


        //     $data = array();
        //     foreach($orders as $order){
        //         $item = [
        //             'invoice' => $order->id,
        //             'recipient_name' => $order->address ? $order->address->name : 'N/A',
        //             'recipient_address' => $order->address ? $order->address->address : 'N/A',
        //             'recipient_phone' => $order->address ? $order->address->phone : '',
        //             'cod_amount' => $order->due_amount,
        //             'note' => $order->note,
        //         ];
        //     }
        //     $result = json_encode($data));

            
            // Example code
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->base_url.'create_order/bulk-order/?data='.$data,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                
                CURLOPT_HTTPHEADER => array(
                    'Api-Key:'. $this->Api_Key,
                    'Content-Type: application/json',
                    'Secret-Key:'. $this->Secret_Key
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return json_decode($response);
            
        }
            
                   










        public function status_by_cid($id){
            // need cid
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url.'status_by_cid/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Api-Key:'. $this->Api_Key,
                'Content-Type: application/json',
                'Secret-Key:'. $this->Secret_Key
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return json_decode($response);

             
            // Response:
            // {
            //     "status": 200,
            //     "delivery_status": "in_review"
            // }

        }


        public function status_by_invoice($invoice){
            // need $invoice id

                $curl = curl_init();

                curl_setopt_array($curl, array(
                CURLOPT_URL =>  $this->base_url.'status_by_invoice/'.$invoice,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Secret-Key:'. $this->Secret_Key,
                    'Api-Key: '.$this->Api_Key,
                ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                return json_decode($response);

        }

        public function status_by_trackingcode($trackingCode){
            // need trackingCode 

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url.'status_by_invoice/'.$trackingCode,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Api-Key:'. $this->Api_Key,
                'Content-Type: application/json',
                'Secret-Key:'. $this->Secret_Key
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return json_decode($response);

        }




        public function get_balance(){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url.'get_balance',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Api-Key:'. $this->Api_Key,
                'Content-Type: application/json',
                'Secret-Key:'. $this->Secret_Key
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return json_decode($response);
   
        }
    }