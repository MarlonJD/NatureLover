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

function getCamperNameByID($id)
{
    switch ($id) {
        case 0:
            echo "Daha önce hiç kamp yapmadım";
            break;
        case 1:
            echo "Korkmuyor musunuz, ayı filan?";
            break;
        case 2:
            echo "Küçükken İzciydim";
            break;
        case 3:
            echo "Bi iki kere gittim ya";
            break;
        case 4:
            echo "Zaman buldukça gidiyoz hacı ya";
            break; 
        case 5:
            echo "Bulduğum her düzlüğe çadır atarım";
            break;
        case 6:
            echo "Sen ne diyon dağcıyım oğlum ben";
            break;   
    }
}

function getTypeNameByID($id)
{
    switch ($id) {
        case 0:
            echo "Kamp";
            break;
        case 1:
            echo "Özel Etkinlik";
            break;
        case 2:
            echo "Açık Etkinlik";
            break;
    }
}

function getSubTypeNameByID($id)
{
    switch ($id) {
        case 0:
            echo "Planlı Kamp";
            break;
        case 1:
            echo "Özel Amaçlı Kamp";
            break;
        case 2:
            echo "Temalı Kamp";
            break;
        case 3:
            echo "Kış Kampı";
            break;
        case 4:
            echo "İnterrail Kampı";
            break;

        case 10:
            echo "Trekking (Kamplı Doğa Yürüyüşü)";
            break;
        case 11:
            echo "Hiking (Günübirlik Doğa Yürüyüşü)";
            break;
        case 12:
            echo "Tırmanış";
            break;  
        case 13:
            echo "Eğitim";
            break;
        case 14:
            echo "İnterrail Etkinliği";
            break;
        case 15:
            echo "Grup Toplantısı";
            break;
            
        case 20:
            echo "Türkiye Geneli Kamp";
            break;
        case 21:
            echo "Bölge Geneli Kamp";
            break;
        case 22:
            echo "Şehir Geneli Kamp<";
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
            echo $row->name,' ',$row->nickName,' ',$row->surName;
        }
}

function getUserNamebyID($id)
{
    $CI =& get_instance();
    
        $query = $CI->db->get_where('users',array('id'=>$id));
        foreach ($query->result() as $row)
        {
            echo $row->username;
        }
}

function getConfirmationbyID($id)
{
            if ($id == 0) { 
                echo "Onaylanmadı" ;
            } elseif ($id == 1) {
                echo "Hazırlık";
            } elseif ($id == 2) {
                echo "Ana Grup";
            } 
}

function getAllUsers() //Toplam kullanıcı sayısı
{
    $CI =& get_instance();
        $at = $CI->db->get_where('users');
    return $at->num_rows();
}

function getMainUsers() //Toplam Ana grup kullanıcı sayısı
{
    $CI =& get_instance();
        $at = $CI->db->get_where('users', array('is_confirmed'=>2));
    return $at->num_rows();
}

function getPrepUsers() //Toplam Hazırlık kullanıcı sayısı
{
    $CI =& get_instance();
        $at = $CI->db->get_where('users', array('is_confirmed'=>1));
    return $at->num_rows();
}

function getNonConfUsers() //Onaylanmayan kullanıcı sayısı
{
    $CI =& get_instance();
        $at = $CI->db->get_where('users', array('is_confirmed'=>0));
    return $at->num_rows();
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

function date_tr($f, $zt = 'now'){
	$z = date("$f", strtotime($zt));
	$donustur = array(
		'Monday'	=> 'Pazartesi',
		'Tuesday'	=> 'Salı',
		'Wednesday'	=> 'Çarşamba',
		'Thursday'	=> 'Perşembe',
		'Friday'	=> 'Cuma',
		'Saturday'	=> 'Cumartesi',
		'Sunday'	=> 'Pazar',
		'January'	=> 'Ocak',
		'February'	=> 'Şubat',
		'March'		=> 'Mart',
		'April'		=> 'Nisan',
		'May'		=> 'Mayıs',
		'June'		=> 'Haziran',
		'July'		=> 'Temmuz',
		'August'	=> 'Ağustos',
		'September'	=> 'Eylül',
		'October'	=> 'Ekim',
		'November'	=> 'Kasım',
		'December'	=> 'Aralık',
		'Mon'		=> 'Pts',
		'Tue'		=> 'Sal',
		'Wed'		=> 'Çar',
		'Thu'		=> 'Per',
		'Fri'		=> 'Cum',
		'Sat'		=> 'Cts',
		'Sun'		=> 'Paz',
		'Jan'		=> 'Oca',
		'Feb'		=> 'Şub',
		'Mar'		=> 'Mar',
		'Apr'		=> 'Nis',
		'Jun'		=> 'Haz',
		'Jul'		=> 'Tem',
		'Aug'		=> 'Ağu',
		'Sep'		=> 'Eyl',
		'Oct'		=> 'Eki',
		'Nov'		=> 'Kas',
		'Dec'		=> 'Ara',
	);
	foreach($donustur as $en => $tr){
		$z = str_replace($en, $tr, $z);
	}
	if(strpos($z, 'Mayıs') !== false && strpos($f, 'F') === false) $z = str_replace('Mayıs', 'May', $z);
	return $z;
}


?>