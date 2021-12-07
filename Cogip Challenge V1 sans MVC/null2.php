<?php



if(isset($_POST['submitContact']) && $_POST['submitContact'] != '') {

  $lastName  = $_POST['lastName'];
  $firstName = $_POST['firstName'];
  $phone     = $_POST['phone'];
  $email     = $_POST['email'];

  if(empty($lastName)){
      $lastNameErr = setErrorFor('lastName', 1);
  } elseif(testInput($lastName) != 1){
      $lastNameErr = testInput($lastName);
  }else{
      $ok = true;
  }

  if(empty($firstName)){
      $firstNameErr = setErrorFor('firstName', 0);
  } elseif(testInput($firstName) != 1){
      $firstNameErr = testInput($firstName);
  }else{
      $ok = true;
  }

  if(empty($phone)){
      $phoneErr = setErrorFor('phone', 7);
  } elseif(testInput($phone) != 1){
      $phonesErr = testInput($phone);
  }else{
      $ok = true;
  }

  if(empty($email)){
      $emailErr = setErrorFor('email', 3);
  } elseif( testMail($email) != 1){
      $emailErr = testMail($email);
  }else{
      $ok = true;
  }

 
  if($lastNameErr == $ok && $firstNameErr == $ok && $phoneErr == $ok){ $formOk = true;}
  if( $formOk){
    $data = [
      'lastName'  => $_POST['lastName'],
      'firstName' => $_POST['firstName'],
      'phone'     => $_POST['phone'],
      'email'     => $_POST['email']
    ];
    $insertion = 'INSERT INTO contacts (lastName, firstName, phone, email) VALUES (:lastName, :firstName, :phone, :email)';
    $db -> prepare($insertion) -> execute($data);

    return $successADD = '<p class="successMessage">les données ont bien été enregistrées!</p>';
  }
}

?>