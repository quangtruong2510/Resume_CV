<?php
include_once('service.php');
$persons = getall();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> My CV </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="resume">
    <div class="resume_left">
      <div class="resume_avatar">
        <img class="image_avata" src="avatar.jpg" alt="Sad Man with black jacket">
      </div>
      <div class="resume_content">
        <div class="resume_item resume_info">
          <ul>
            <li>
              <div class="icon">
                <i class=' bx bxs-home'></i>
              </div>
              <div class="content">
                <span> Lien Chieu, Da Nang</span>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class='bx bxl-gmail' aria-hidden="true"></i>
              </div>
              <div class="content">
                <span> nqtruong2510@gmail.com</span>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class='bx bxs-phone' aria-hidden="true"></i>
              </div>
              <div class="content">
                <span> 0817590009</span>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class='bx bxs-calendar' aria-hidden="true"></i>
              </div>
              <div class="content">
                <span> 25-10-2000</span>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class='bx bx-male-female'></i>
              </div>
              <div class="content">
                <span> Signle</span>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class='bx bxl-meta'></i>
              </div>
              <div class="content">
                <span> https://www.facebook.com</span>
              </div>
            </li>
          </ul>
        </div>
        <div class="resume_item resume_summary">
          <div class="title">
            <p class="name_skill_left bold"> SUMMARY </p>
          </div>
          <p>
            I want to find possible positions of Backend where I could ufse
            my knowledge learned. I am an energetic and creative person,
            and I have mentally hard and eager to learn. I want to soon
            become official staff of the company
          </p>
        </div>
        <div class="resume_item resume_langues ">
          <div class="title">
            <p class="name_skill_left bold"> SKILLS </p>
          </div>
          <div class="skills-content">
            <div class="skill-1">
              <p class="circle">PHP</p>
              <p class="circle">JAVASCRIPT</p>
              <p class="circle">OOP</p>
              <p class="circle">MySQL</p>
              <p class="circle">HTML/CSS</p>
            </div>
            <div class="skill-2">
              <div class="circle">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot-2"></span>
              </div>
              <div class="circle">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"> </span>
                <span class="dot-2"></span>
                <span class="dot-2"></span>
              </div>
              <div class="circle">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot-2"></span>
                <span class="dot-2"></span>
              </div>
              <div class="circle">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot-2"></span>
                <span class="dot-2"></span>
              </div>
              <div class="circle">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot-2"></span>
                <span class="dot-2"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="resume_right">
      <div class="resume_information">
        <div class="name_person  bold"> Nguyen Quang Truong</div>
        <div class="position_apply medium"> Intern PHP</div>
      </div>
      <div class=" resume_education">
        <div class="title">
          <p class="name_skill_right  bold"> EDUCATION </p>
        </div>
        <div class="name_title "> Bachelor university </div>
        <p class="content3"> Da Nang University Of Techonolgy </p>
        <span class='bx bxs-calendar ' style="color: rgb(196, 194, 191); margin-top: 10px;"></span>
        <span class="content1"> 2018 - 2022 </span>
        <p class="content4"> Major: Software Engineering </p>
      </div>
      <div class="resume_item resume_experiences">
        <div class="title">
          <p class="name_skill_right  bold"> EXPERIENCES </p>
        </div>
        <form method="get" action="create.php">
          <input class="btn btn-add" type="submit" name="id" value="New">
        </form>
        <br>
        <div class="block">
          <?php foreach ($persons as $person) : ?>
            <hr style="color: rgb(196, 194, 191); margin-top: 10px; margin-bottom: 10px;">
            <div class="row_123">
              <div>
                <div class="name_title "> <?php echo htmlspecialchars($person['name_company']) ?></div>
                <span class='bx bxs-calendar ' style="color: rgb(196, 194, 191); margin-top: 10px;"></span>
                <a class="content1"> <?php echo htmlspecialchars($person['since']); ?></a>
                <p class="content4"> <?php echo "Position: " . htmlspecialchars($person['position']); ?></p>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($person['position']); ?>">
              </div>
              <div>
                <form method="get" action="create.php">
                  <input type="hidden" name="id" value="<?php echo htmlspecialchars($person['id']); ?>">
                  <input class="btn btn-warning mb-2" type="submit" name="editButton" value="Edit">
                </form>
                <form action="handle.php" method="post">
                  <input type="hidden" name="id" value="<?php echo htmlspecialchars($person['id']); ?>">
                  <input class="btn btn-danger" type="submit" name="delete" value="Delete">
                </form>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <br>
      <div class=" resume_project">
        <div class="title">
          <p class="name_skill_right bold"> PROJECTS </p>
        </div>
        <div class="name_title ">Software Engineering</div>
        <p class="content4">
          Member: 3
          Language: Android app, Web
          Technology: Git, Microservice, Api...
          Description: This is a second-hand shopping application that helps you find useful
          products and services in the nearest place where you live. Also, you can buy items
          and post your detailed product descriptions to sell them. </pre>
        <div class="name_title ">Programming Project</div>
        <p class="content4">
          Member: 4
          Language: C
          Technology: Git, Data struct, OOP, SQL...
          Description: The application can not only manage the library of the school including
          of functions add and update, but also have the ability of deleting and managing the
          information of students.</p>
      </div>
    </div>
  </div>
</body>
</html>