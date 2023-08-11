<?php
if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

if (!isset($this->pageTitle)) $this->pageTitle = 'Home Page';

$db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
$org_data  = $db->getOrgData();
$org_contact  = $db->getContactData();
$menu  = $db->getMainMenu();

$contact_number = "";
$contact_email = "";
if (count($org_contact) > 0) {
  $vill = !empty($org_contact['vill']) ? $org_contact['vill'] : "";
  $post = !empty($org_contact['post']) ? $org_contact['post'] : "";
  $district = !empty($org_contact['district']) ? $org_contact['district'] : "";
  $state = !empty($org_contact['state']) ? $org_contact['state'] : "";
  $pin = !empty($org_contact['pin']) ? $org_contact['pin'] : "";
  $contact_number = !empty($org_contact['contact_number']) ? $org_contact['contact_number'] : "";
  $contact_email = !empty($org_contact['contact_email']) ? $org_contact['contact_email'] : "";
}
?>
<html>

<head>
  <title><?php echo @$this->pageTitle; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL ?>assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL ?>assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL ?>assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo URL ?>assets/favicon/site.webmanifest">

  <?php require 'links/header_links.php'; ?>

  <?php
  if (isset($this->css)) {
    foreach ($this->css as $css) {
      echo '<link href="' . URL . $css . '" rel="stylesheet">';
    }
  }
  ?>
</head>

<body>

  <header class="bg-white">

    <?php require 'component/body_header.php' ?>


    <?php require 'component/navbar.php' ?>
  </header>