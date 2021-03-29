<?php
include 'config.php';

//Site Settings Update
if(isset($_POST['generalSettingSave'])){
    $settingSave = $db->prepare("UPDATE setting SET
    setting_title = :setting_title,
    setting_description = :setting_description,
    setting_keywords = :setting_keywords,
    setting_author = :setting_author
    WHERE setting_id = 0");
    $update = $settingSave->execute(array(
        setting_title => $_POST['setting_title'],
        setting_description => $_POST['setting_description'],
        setting_keywords => $_POST['setting_keywords'],
        setting_author => $_POST['setting_author']
    ));
    if($update){
        header("Location:../production/general-settings.php?status=ok");
    } else {
        header("Location:../production/general-settings.php?status=bad");
    }
}

//Contact Settings Update
if(isset($_POST['contactSettingSave'])){
    $settingSave = $db->prepare("UPDATE setting SET
    setting_tel = :setting_tel,
    setting_gsm = :setting_gsm,
    setting_fax = :setting_faxv,
    setting_mail = :setting_mail,
    setting_address = :setting_address,
    setting_whour = :setting_whour
    WHERE setting_id = 0");
    $update = $settingSave->execute(array(
        setting_title => $_POST['setting_tel'],
        setting_description => $_POST['setting_gsm'],
        setting_keywords => $_POST['setting_fax'],
        setting_description => $_POST['setting_mail'],
        setting_keywords => $_POST['setting_address'],
        setting_author => $_POST['setting_whour']
    ));
    if($update){
        header("Location:../production/contact-settings.php?status=ok");
    } else {
        header("Location:../production/contact-settings.php?status=bad");
    }
}

?>