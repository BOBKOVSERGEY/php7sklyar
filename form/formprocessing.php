<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['my_name']) {
  if ($formErrors = validateForm()) {
    showForm($formErrors);
  } else {
    processForm();
  }
} else {
  showForm();
}

// сделать, что нибудь, когда форма передана на обработку
function processForm()
{
  print "Hello {$_POST['my_name']}";
}

// отобразить форму
function showForm($errors = [])
{
  // если переданы ошибки, вывести их на экран
  if ($errors) {
    print "Please, correct these errors : <ul><li>";
    print implode('</li><li>', $errors);
    print '</li></ul>';
  }
  print <<<_HTML_
  <form method="post" action="$_SERVER[PHP_SELF]">
  Your name: <input type="text" name="my_name">
  <br>
  Ваш email: <input type="email" name="email">
  <input type="submit" value="Say Hello">
  </form>
_HTML_;
}

// Check the form data
function validateForm( ) {
  // Start with an empty array of error messages
  $errors = [];

  // Add an error message if the name is too short
  if (strlen($_POST['my_name']) < 3) {
    $errors[] = 'Your name must be at least 3 letters long.';
  }
  if (strlen($_POST['email']) == 0) {
    $errors[] = 'Your must enter an email address';
  }

  // Return the (possibly empty) array of error messages
  return $errors;
}