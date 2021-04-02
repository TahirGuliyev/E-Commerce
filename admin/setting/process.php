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
        setting_tel => $_POST['setting_tel'],
        setting_gsm => $_POST['setting_gsm'],
        setting_fax => $_POST['setting_fax'],
        setting_mail => $_POST['setting_mail'],
        setting_address => $_POST['setting_address'],
        setting_whour => $_POST['setting_whour']
    ));
    if($update){
        header("Location:../production/contact-settings.php?status=ok");
    } else {
        header("Location:../production/contact-settings.php?status=bad");
    }
}

//Api Settings Update
if(isset($_POST['apiSettingSave'])){
    $settingSave = $db->prepare("UPDATE setting SET
    setting_map = :setting_map,
    setting_analystic = :setting_analystic,
    setting_zopim = :setting_zopim
    WHERE setting_id = 0");
    $update = $settingSave->execute(array(
        setting_map => $_POST['setting_map'],
        setting_analystic => $_POST['setting_analystic'],
        setting_zopim => $_POST['setting_zopim']
    ));
    if($update){
        header("Location:../production/api-settings.php?status=ok");
    } else {
        header("Location:../production/api-settings.php?status=bad");
    }
}

//Social Settings Update
if(isset($_POST['socialSettingSave'])){
    $settingSave = $db->prepare("UPDATE setting SET
    setting_facebook = :setting_facebook,
    setting_twitter = :setting_twitter,
    setting_instagram = :setting_instagram,
    setting_youtube = :setting_youtube
    WHERE setting_id = 0");
    $update = $settingSave->execute(array(
        setting_facebook => $_POST['setting_facebook'],
        setting_twitter => $_POST['setting_twitter'],
        setting_instagram => $_POST['setting_instagram'],
        setting_youtube => $_POST['setting_youtube']
    ));
    if($update){
        header("Location:../production/social-settings.php?status=ok");
    } else {
        header("Location:../production/social-settings.php?status=bad");
    }
}

//Mail Settings Update
if(isset($_POST['mailSettingSave'])){
    $settingSave = $db->prepare("UPDATE setting SET
    setting_smtphost = :setting_smtphost,
    setting_smtpuser = :setting_smtpuser,
    setting_smtppassword = :setting_smtppassword,
    setting_smtpport = :setting_smtpport
    WHERE setting_id = 0");
    $update = $settingSave->execute(array(
        setting_smtphost => $_POST['setting_smtphost'],
        setting_smtpuser => $_POST['setting_smtpuser'],
        setting_smtppassword => $_POST['setting_smtppassword'],
        setting_smtpport => $_POST['setting_smtpport']
    ));
    if($update){
        header("Location:../production/mail-settings.php?status=ok");
    } else {
        header("Location:../production/mail-settings.php?status=bad");
    }
}

//About Page Update
if(isset($_POST['aboutSave'])){
    $settingSave = $db->prepare("UPDATE about SET
    about_title = :about_title,
    about_content = :about_content,
    about_video = :about_video,
    about_vision = :about_vision,
    about_mission = :about_mission
    WHERE about_id = 0");
    $update = $settingSave->execute(array(
        about_title => $_POST['about_title'],
        about_content => $_POST['about_content'],
        about_video => $_POST['about_video'],
        about_vision => $_POST['about_vision'],
        about_mission => $_POST['about_mission']
    ));
    if($update){
        header("Location:../production/about.php?status=ok");
    } else {
        header("Location:../production/about.php?status=bad");
    }
}

?>