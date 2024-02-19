
<style>
    .js-snippet-clipboard-copy-unpositioned .markdown-body .snippet-clipboard-content, .js-snippet-clipboard-copy-unpositioned .markdown-body .highlight{
            border-bottom: 0;
            border-image-slice: 1;
            border-image-source: linear-gradient(90deg,#fb0301,#fb0301 25%,#fbbb06,#34a653,#206ace 75%);
            border-left: 0;
            border-right: 0;
            border-top-style: solid;
            border-top-width: 3px;
    }
</style>
.github/github.css


### SEtup steatfast couriar

Goto `config.php` file change `Secret_Key` and  `Secret_Key` then  you can access file

## File include and class declare
<hr>

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

