<?php

/* add location of pub key storage */
putenv ('GNUPGHOME=/tmp');

/* init gnupg */
$res = gnupg_init();

/* select pub key fingerprint */
$rtv = gnupg_addencryptkey($res,'4A64719E367C325BC4680A6804FFDFE6F5146A05');


/* example json data */
$d = '[ { "_id" : { "$oid" : "5142c947e4b051f00cd6b40f"} , "order" : { "shipping" : { "fname" : "Raina" , "lname" : "Gustafson" , "company" : "" , "email" : "raina@swimkitten.com" , "address1" : "PO Box 7775" , "address2" : "" , "city" : "San Francisco" , "state" : "CA" , "zip" : "94120" , "phone" : "4802424325"} , "billing" : { "fname" : "Raina" , "lname" : "Gustafson" , "company" : "" , "email" : "raina@swimkitten.com" , "address1" : "PO Box 7775" , "address2" : "" , "city" : "San Francisco" , "state" : "CA" , "zip" : "94120" , "phone" : "4802424325" , "date" : "2014-01" , "billing-number" : "WJGfHpcBOvIFIhWqREGfaiCqBlhu00c40L6xpSq4glE=" , "billing-code" : "D+yJb49dk0nqAVnf3sFIGw=="}}} ]';
$r = json_decode($d,true);


/* example only, serialize our array. could also use json */
$rd=serialize($r);


/* encrypt text to pub key */
$enc = gnupg_encrypt($res,$rd);

/* example, look at output */
print $enc;

/* create mongodb connection to localhost */
$m=new Mongo();

/* create array to insert record */
$order=array();
/* our own internal id, or you could use mongodb _id */
$order['orderid'] = uniqid();
/* local time */
$order['time'] = time();
/* local host src */
$order['host'] = gethostname();
/* encrypted order data */
$order['enc'] = $enc;

/* select orders collection */
$db = $m->odb->orders;
/* insert record */
$m->insert($order);
/* close mongodb connection */
$m->close();


//EOF


