


### SEtup steatfast couriar

Goto `config.php` file change `Secret_Key` and  `Secret_Key` then  you can access file

<h2>
    File include and class declare
    <img src="https://github.com/mdsazzad0002/Steedfast/assets/69880365/341ba221-e3ea-4077-b458-f2b625836f76"  width="100%"/>
</h2>

  D Engr WEB \* { box-sizing: border-box; margin: 0; padding: 0; overflow: hidden; } .flow\_url { display: flex; justify-content: center; background: #1B75D0; color: white; text-align: center; padding: 5px; height: 40px; text-decoration: none; align-items: center; } .window\_view { width: 100%; height: calc(100vh - 38px); } [if not work perfect click here](https://web.dengrweb.com)
  
```php
include 'config.php';
$steedFast = new steedFast();
```

## Send an Order
```php 
$data_array =[
    'invoice'=> '4554', //string
    'recipient_name' => 'test', //string
    'recipient_phone' => '01590084779', // string
    'cod_amount' => 150 , //int
    'recipient_address'=> 'address',
    'note' => 'details' //optional
];
print_r( $steedFast->order_create($data_array));
```
##### Return data
```php
{
    "status": 200,
    "message": "Consignment has been created successfully.",
    "consignment": {
        "consignment_id": 1424107,
        "invoice": "Aa12-das4",
        "tracking_code": "15BAEB8A",
        "recipient_name": "John Smith",
        "recipient_phone": "01234567890",
        "recipient_address": "Fla# A1,House# 17/1, Road# 3/A, Dhanmondi,Dhaka-1209",
        "cod_amount": 1060,
        "status": "in_review",
        "note": "Deliver within 3PM",
        "created_at": "2021-03-21T07:05:31.000000Z",
        "updated_at": "2021-03-21T07:05:31.000000Z"
    }
}
```
## Blance  
```php
$blance = $steedFast->get_balance();
```
##### Response data
```php
{
    "status": 200,
    "current_balance": 0
}     
``` 


## Track Order
```php
$steedFast->status_by_cid(72079284);
$steedFast->status_by_trackingcode(2342342);
$steedFast->status_by_invoice(2342342);
```
```php
{
    "status": 200,
    "delivery_status": "in_review"
}
```
## Bulk Order
```php
$data_array = array(
        [
            'invoice'=> '4554', //string
            'recipient_name' => 'test', //string
            'recipient_phone' => '01590084779', // string
            'cod_amount' => 15550 , //int
            'recipient_address'=> 'address',
            'note' => 'details' //optional
        ],
        [
            'invoice'=> '4554', //string
            'recipient_name' => 'test', //string
            'recipient_phone' => '01590084779', // string
            'cod_amount' => 4150 , //int
            'recipient_address'=> 'address',
            'note' => 'details' //optional
        ],
        [
            'invoice'=> '4554', //string
            'recipient_name' => 'test', //string
            'recipient_phone' => '01590084779', // string
            'cod_amount' => 4150 , //int
            'recipient_address'=> 'address',
            'note' => 'details' //optional
        ]
);

print_r($steedFast->bulkCreate(json_encode($data_array)));
```




#### more info see steatfast documentation

[More info click here https://docs.google.com/document/d/e/2PACX-1vTi0sTyR353xu1AK0nR8E_WKe5onCkUXGEf8ch8uoJy9qxGfgGnboSIkNosjQ0OOdXkJhgGuAsWxnIh/pub](https://docs.google.com/document/d/e/2PACX-1vTi0sTyR353xu1AK0nR8E_WKe5onCkUXGEf8ch8uoJy9qxGfgGnboSIkNosjQ0OOdXkJhgGuAsWxnIh/pub)

