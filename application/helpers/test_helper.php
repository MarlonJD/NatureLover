<?php // test_helper.php
if(!defined('BASEPATH')) exit('No direct script access allowed');


function getGenderNameByID($id)
{
    if ($id == 0) {
        echo '<i class="fa fa-female" aria-hidden="true"></i>';
    }
    elseif ($id == 1) {
        echo '<i class="fa fa-male" aria-hidden="true"></i>';
    }

}

function getParanoidNameByID($id)
{
    switch ($id) {
        case 0:
            echo "Nereden bileyim kredi çekmeyeceğinizi?";
            break;
        case 1:
            echo "Veriyim de herkesle paylaşmayın";
            break;
        case 2:
            echo "Sallayayım da hemde girmemiş olmam";
            break;
        case 3:
            echo "Kötüye bi şey olmaz";
            break;
    }

}

function getConfirmUserByID($userid)
{
    $CI =& get_instance();
    
        $query = $CI->db->get_where('users',array('id'=>$userid));
        foreach ($query->result() as $row)
        {
        return $row->is_confirmed;
        }
}

function getNamebyID($id)
{
    $CI =& get_instance();
    
        $query = $CI->db->get_where('people',array('userid'=>$id));
        foreach ($query->result() as $row)
        {
            echo $row->name,$row->nickName," ",$row->surName;
        }
}

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

function GeraHash($qtd){ 
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code. 
$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789'; 
$QuantidadeCaracteres = strlen($Caracteres); 
$QuantidadeCaracteres--; 

$Hash=NULL; 
    for($x=1;$x<=$qtd;$x++){ 
        $Posicao = rand(0,$QuantidadeCaracteres); 
        $Hash .= substr($Caracteres,$Posicao,1); 
    } 

return $Hash; 
} 


?>