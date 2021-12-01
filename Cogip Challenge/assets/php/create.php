<?php
//* =============== | Setup Variable| ===============
$firstNameErr = $lastNameErr = $typeErr = $mailErr = $nameErr = $datesErr = $numbersErr = $phoneErr = $vatErr = $countryErr = $successADD = ''; 
$firstName    = $lastName    = $type    = $mail    = $name    = $dates    = $numbers    = $phone    = $vat    = $country    = ''; 
// 0                 1         2          3          4           5           6             7           8         9
$msgError = array('First Name is required.', 'Last Name is required.', 'Type is required.', 'Email is required.', 'Name is required.', 'Date is required.', 'Numbers is required.', 'Phone is required.', 'VAT is required.', 'Country is required.');



//* =============== | Test the form Invoice | ===============

if(isset($_POST['submitInvoice']) && $_POST['submitInvoice'] != '') { 
  empty($_POST['name'     ]) ? $nameErrInvoice = setErrorFor('name'     , 4) : $nameErrInvoice = testInput($_POST['name'   ]);
  empty($_POST['numbers'  ]) ? $numbersErr     = setErrorFor('numbers'  , 6) : $numbersErr     = testInput($_POST['numbers']);
  empty($_POST['dates'    ]) ? $datesErr       = setErrorFor('dates'    , 5) : $datesErr       = $dates = $_POST['dates'];
  empty($_POST['type'     ]) ? $typeErrInvoice = setErrorFor('type'     , 2) : $typeErrInvoice = $type = $_POST['type' ];
} 
//* =============== | Test the form Company | ===============

if(isset($_POST['submitCompany']) && $_POST['submitCompany'] != '') {
  empty($_POST['name'     ]) ? $nameErrCompany = setErrorFor('name'     , 4) : $nameErrCompany = testInput($_POST['name'   ]);
  empty($_POST['vat'      ]) ? $vatErr         = setErrorFor('vat'      , 8) : $vatErr         = testInput($_POST['vat'    ]);
  empty($_POST['country'  ]) ? $countryErr     = setErrorFor('country'  , 9) : $countryErr     = testInput($_POST['country']);
  empty($_POST['type'     ]) ? $typeErrCompany = setErrorFor('type'     , 2) : $typeErrCompany = $type = $_POST['type'];

  $data = [
    'name'    => $_POST['name'],
    'vat'     => $_POST['vat'],
    'country' => $_POST['country'],
    'type'    => $_POST['type']
  ];


  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');
    $insertion = 'INSERT INTO society (name, vat, country, type) VALUES (:name,:vat,:country,:type)';
    $bdd -> prepare($insertion) -> execute($data);

    if ($bdd == true) return $successADD = '<p class="successMessage">les données ont bien été enregistrées! </p>';

  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }


} 
//* =============== | Test the form Contact | ===============

if(isset($_POST['submitContact']) && $_POST['submitContact'] != '') {
  empty($_POST['lastName' ]) ? $lastNameErr  = setErrorFor('lastName' , 1) : $lastNameErr  = testInput($_POST['lastName' ]);
  empty($_POST['firstName']) ? $firstNameErr = setErrorFor('firstName', 0) : $firstNameErr = testInput($_POST['firstName']);
  empty($_POST['phone'    ]) ? $phoneErr     = setErrorFor('phone'    , 7) : $phoneErr     = testInput($_POST['phone'    ]);
  empty($_POST['email'    ]) ? $mailErr      = setErrorFor('email'    , 3) : $mailErr      = testMail ($_POST['email'    ]);
} 

// * ========================== | Function | ==========================
function setErrorFor($input, $indexMsgErr){
    global $msgError;

    // echo $msgError[$indexMsgErr].'<br>';
    return '<small class="errorMessage">'.$msgError[$indexMsgErr].'</small>';
}

function testInput($input){
    $msgErrorTag = '<small class="errorMessage">Only letters are allowed.</small';

    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return !preg_match('/^[a-zA-Z ]*$/', $input) ? $msgErrorTag : '';
}

function testMail($input){
    $msgErrorTag = '<small class="errorMessage">Please enter a valid email.</small>';
    return !filter_var($input, FILTER_VALIDATE_EMAIL) ? $msgErrorTag : filter_var($input, FILTER_SANITIZE_EMAIL);
}

?>