<?php
/**
 * Created by PhpStorm.
 * User: Sohib
 * Date: 5/19/16
 * Time: 9:03 PM
 */

namespace Moyasar;


class Invoice
{

    public static function fetch($id){
        return json_decode(Client::get("https://api.moyasar.com/v1/invoices/$id"));
    }

    public static function all(){
        return json_decode(Client::get("https://api.moyasar.com/v1/invoices"));
    }

    public static function update($id,$parameter = [] ){
	    return json_decode(Client::put("https://api.moyasar.com/v1/invoices/$id", $parameter));
    }

    public static function cancel($id){
	    return json_decode(Client::put("https://api.moyasar.com/v1/invoices/$id/cancel"));
    }
}
