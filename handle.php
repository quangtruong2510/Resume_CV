<?php
include_once('service.php');

if (isset($_POST['addNewItem'])) {
  echo "hello";
  $name_company = $_POST['name_company'];
  $since  = $_POST['since'];
  $position  = $_POST['position'];

  if (empty($name_company) || empty($since) || empty($position)) {
  } else {
    Insert($name_company, $since, $position);
    header("Location: home.php");
  }
}

if (isset($_POST['updateItem'])) {
  $name_company = $_POST['name_company'];
  $since  = $_POST['since'];
  $position  = $_POST['position'];
  $id = $_POST['id'];
  if (empty($name_company) || empty($since) || empty($position)) {
  } else {
    Update($name_company, $since, $position, (int)$id);
    header("Location: home.php");
  }
}

if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  echo "hello" . $id;
  Delete($id);
  header("Location: home.php");
}

if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  echo "hello" . $id;
  Delete($id);
  header("Location: home.php");
}
