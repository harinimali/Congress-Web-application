<?php
    header("Access-Control-Allow-Origin:*");
	header("Content-type:text/json");
    if($_GET['cdb']=="legi"){
        $url="http://congress.api.sunlightfoundation.com/legislators?per_page=all&apikey=eOXkPTakw58hzVEsJiR4ka7Io78jF4ZxPdWgm3y9";
        $json=file_get_contents($url);
    }
    if($_GET['cdb']=="abill"){
        $url="http://congress.api.sunlightfoundation.com/bills?history.active=true&order=introduced_on&per_page=50&apikey=eOXkPTakw58hzVEsJiR4ka7Io78jF4ZxPdWgm3y9";
        $json=file_get_contents($url);
    }
    if($_GET['cdb']=="nbill"){
        $url="http://congress.api.sunlightfoundation.com/bills?history.active=false&order=introduced_on&per_page=50&apikey=eOXkPTakw58hzVEsJiR4ka7Io78jF4ZxPdWgm3y9";
        $json=file_get_contents($url);
    }
    if($_GET['cdb']=="commi"){
        $url="http://congress.api.sunlightfoundation.com/committees?fields=chamber,committee_id,name,parent_committee_id,contact,office,member_ids&per_page=all&apikey=eOXkPTakw58hzVEsJiR4ka7Io78jF4ZxPdWgm3y9";
        $json=file_get_contents($url);
    }
    echo $json;
    
    if($_GET['keyword']=="detailbill"){
        $obj = $_GET['obj'];
        $urll="http://congress.api.sunlightfoundation.com/bills?sponsor_id=".$obj."&per_page=50&apikey=eOXkPTakw58hzVEsJiR4ka7Io78jF4ZxPdWgm3y9";
        $jsonn=file_get_contents($urll);
    }
    echo $jsonn;

    if($_GET['keyword']=="billdetail"){
        $objj = $_GET['obj'];
        $urll="http://congress.api.sunlightfoundation.com/bills?bill_id=".$objj."&per_page=50&apikey=eOXkPTakw58hzVEsJiR4ka7Io78jF4ZxPdWgm3y9";
        $jsonnn=file_get_contents($urll);
    }
    echo $jsonnn;
?>