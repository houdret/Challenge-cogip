<?php
//* =============== | Setup Variable| ===============
$firstNameErr = $lastNameErr = $typeErr = $emailErr = $nameErr = $datesErr = $numbersErr = $phoneErr = $vatErr = $countryErr = $societyErr = $successInvoiceForm = $successSocietyForm = $successContactForm =''; 
$firstName    = $lastName    = $type    = $email    = $name    = $dates    = $numbers    = $phone    = $vat    = $country = $ok = $formOk = $society = ''; 
// 0                 1         2          3          4           5           6             7           8         9

$msgError = array('First Name is required.', 'Last Name is required.', 'Type is required.', 'Email is required.', 'Name is required.', 'Date is required.', 'Numbers is required.', 'Phone is required.', 'VAT is required.', 'Country is required.', 'Society is required.');

// * ========================== | Functions | ==========================
function setErrorFor($input, $indexMsgErr){
  global $msgError;
  $ok = false;
  return '<small class="errorMessage">'.$msgError[$indexMsgErr].'</small>';
}

function testInput($input){
  global $ok;
  $msgError = '<small class="errorMessage">Only letters are allowed.</small>';
  $ok = false;
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);

  return !filter_var($input, FILTER_SANITIZE_STRING) ? $msgError : '';
}

function testMail($input){
  global $ok;
  $msgErrorTag = '<small class="errorMessage">Please enter a valid email.</small>';
  $ok = false;
  return !filter_var($input, FILTER_VALIDATE_EMAIL) ? $msgErrorTag : '';
}

function testDate($input){
  global $ok;
  $msgErrorTag = '<small class="errorMessage">Please enter a valid date.</small>';
  $ok = false;
  $date = date_parse($input);
  return !checkdate($date) ? $msgErrorTag : '';
}

//* =============== | Test form Invoice | ===============

if(isset($_POST['submitInvoice']) && $_POST['submitInvoice'] != '') {

  $nameInvoice    = $_POST['name'];
  $InvoiceNumbers = $_POST['numbers'];
  $date           = $_POST['dates'];
  $type           = $_POST['type'];

  if(empty($nameInvoice)){
      $nameErrInvoice = setErrorFor('name', 4);
  } elseif(testInput($nameInvoice) != 1){
      $nameErrInvoice = testInput($nameInvoice);
  }else{
      $ok = true;
  }

  if(empty($InvoiceNumbers)){
      $numbersErr = setErrorFor('numbers', 6);
  } elseif(testInput($InvoiceNumbers) != 1){
      $numbersErr = testInput($InvoiceNumbers);
  }else{
      $ok = true;
  }

  if(empty($date)){
      $datesErr = setErrorFor('dates', 5);
  } elseif(testInput($date) != 1){
      $datesErr = testInput($date);
  }else{
      $ok = true;
  }

  if(empty($type)){
      $typeErr = setErrorFor('type', 2);
  } elseif(testInput($type) != 1){
      $typeErr = testInput($type);
  }else{
      $ok = true;
  }


  if($nameErrInvoice == $ok && $numbersErr == $ok && $datesErr == $ok){ $formOk = true;}
  if( $formOk){
    $data = [
      'name'    => $_POST['name'],
      'numbers' => $_POST['vat'],
      'dates'   => $_POST['country'],
      'type'    => $_POST['type']
    ];
    $insertion = 'INSERT INTO invoices (name, numbers, dates, type) VALUES (:name,:numbers,:dates,:type)';
    $db -> prepare($insertion) -> execute($data);

    return $successInvoiceForm = '<p class="successMessage">les données ont bien été enregistrées!</p>';
  }
}
//* =============== | Test form Company | ===============

if(isset($_POST['submitCompany']) && $_POST['submitCompany'] != '') {

      $nameCompany = $_POST['name'];
      $vat         = $_POST['vat'];
      $country     = $_POST['country'];
      $type        = $_POST['type']   ;
  
      if(empty($nameCompany)){
          $nameErrCompany = setErrorFor('name', 4);
      } elseif(testInput($nameCompany) != 1){
          $nameErrCompany = testInput($nameCompany);
      }else{
          $ok = true;
      }
      
      if(empty($vat)){
          $vatErr = setErrorFor('vat', 8);
      } elseif(testInput($vat) != 1){
          $vatErr = testInput($vat);
      }else{
          $ok = true;
      }

      if(empty($country)){
          $countryErr = setErrorFor('country', 9);
      } elseif(testInput($vat) != 1){
          $countryErr = testInput($country);
      }else{
          $ok = true;
      }

      if(empty($type)){
          $typeErr = setErrorFor('type', 2);
      } elseif(testInput($type) != 1){
          $typeErr = testInput($type);
      }else{
          $ok = true;
      }


  if($nameErrCompany == $ok && $vatErr == $ok && $countryErr == $ok){ $formOk = true;}
  if( $formOk){
    $data = [
      'name'    => $_POST['name'],
      'vat'     => $_POST['vat'],
      'country' => $_POST['country'],
      'type'    => $_POST['type']
    ];
    $insertion = 'INSERT INTO societies (name, vat, country, type) VALUES (:name,:vat,:country,:type)';
    $db -> prepare($insertion) -> execute($data);

    return $successSocietyForm = '<p class="successMessage">les données ont bien été enregistrées!</p>';
  }
}


//* =============== | Test form Contact | ===============


if(isset($_POST['submitContact']) && $_POST['submitContact'] != '') {

  $lastName  = $_POST['lastName'];
  $firstName = $_POST['firstName'];
  $phone     = $_POST['phone'];
  $email     = $_POST['email'];
  $society   = $_POST['society'];

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

  if(empty($society)){
      $societyErr = setErrorFor('society', 10);
  } elseif( testInput($society) != 1){
      $societyErr = testInput($society);
  }else{
      $ok = true;
  }
 
  if($lastNameErr == $ok && $firstNameErr == $ok && $phoneErr == $ok && $societyErr == $ok){ $formOk = true;}
  if( $formOk){
    $data = [
      'lastName'  => $_POST['lastName'],
      'firstName' => $_POST['firstName'],
      'phone'     => $_POST['phone'],
      'email'     => $_POST['email'],
      'society'   => $_POST['society']
    ];
    $insertion = 'INSERT INTO contacts (lastName, firstName, phone, email,society) VALUES (:lastName, :firstName, :phone, :email,:society)';
    $db -> prepare($insertion) -> execute($data);

    return $successContactForm = '<p class="successMessage">les données ont bien été enregistrées!</p>';
  }
}





?>