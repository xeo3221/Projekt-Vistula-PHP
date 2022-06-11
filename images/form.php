<?php
if(isset($_POST['submit']) && !empty($_POST['imie'])
    && !empty($_POST['nazwisko']) && !empty($_POST['email']) && !empty($_POST['accept'])){
    $new_message = array(
        "imie" => $_POST['imie'],
        "nazwisko" => $_POST['nazwisko'],
        "email" => $_POST['email'],
        "accept" => $_POST['accept'],
    );

    if(filesize("data.json") == 0){
        $first_record = array($new_message);
        $data_to_save = $first_record;
    }else{
        $old_records = json_decode(file_get_contents("data.json"));
        array_push($old_records, $new_message);
        $data_to_save = $old_records;
    }
    if(!file_put_contents("data.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX)){
        $error = "Błąd, spróbuj ponownie";
    }else{
        $success = "Zapisałeś się na listę mailingową!";
    }
}elseif(isset($_POST['submit']) || !empty($_POST['imie'])
|| !empty($_POST['nazwisko']) || !empty($_POST['email']) || !empty($_POST['accept'])){
    $again = "Błąd! Wprowadź wszystkie dane!";
} 
?>