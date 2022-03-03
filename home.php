<?php
include_once ('service.php');
    
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
                <img class="image_avata"
                    src="https://scontent.fdad1-2.fna.fbcdn.net/v/t39.30808-6/273435222_3136722356604233_9212213963073205207_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=xt1orQIN0-8AX8TdXZ8&_nc_ht=scontent.fdad1-2.fna&oh=00_AT_dDX8VvUod0KtsByY39WJxz3qy87lhNjli6UTBIv8MAg&oe=622246F2"
                    alt="Sad Man with black jacket">
            </div>
            <div class="resume_content">
                <div class="resume_item resume_info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class='bx bxs-home'></i>
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
                        <p class="name_skill_left bold"> LANGUAGES </p>
                    </div>
                    <div class="skills">
                        <div class="bars">
                            <div class="bar">
                                <p>Java</p>
                                <span></span>
                            </div>
                            <div class="bar">
                                <p>PHP</p>
                                <span></span>
                            </div>
                            <div class="bar">
                                <p>JavaScript</p>
                                <span></span>
                            </div>
                            <div class="bar">
                                <p>C++</p>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="resume_right">

            <div class="resume_information">
                <div class="name_person bold"> Nguyen Quang Truong</div>
                <div class="position_apply medium"> Intern PHP</div>
            </div>
            
            <!-- -------------------------------------------------------------  -->
            <div class=" resume_education">            
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

<!-- button add  -->
                <a href="create.php/"><button> ADD NEW </button></a> 
                <br>
<!-- Fecth Data  -->
                    <?php foreach ($persons as $person) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($person['id']) ?></td>
                            <td><?php echo htmlspecialchars($person['name_company']); ?></td>
                            <td><?php echo htmlspecialchars($person['since']); ?></td>
                        </tr>
                    <?php endforeach; ?>

                <!-- <div class="name_title ">Intern developer </div>
                <p class="content1_nonItalic">
                    DAC Data Technology VietNam | 2/2022 - 3/2022
                </p>
                <p class="content4">
                    Trainning with PHP.
                </p> -->
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


            <div class=" resume_skills">
                <div class="title">
                    <p class="name_skill_right  bold"> SKILLS </p>
                </div>


                <div class="skills-content">

                    <div class="skill-1">
                        <p class="space">OOP</p>
                        <p class="space">MySQL</p>
                        <p class="space">Algorithm and Data struct</p>
                        <p class="space">HTML/CSS</p>
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
                            <span class="dot"></span>
                            <span class="dot-2"></span>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
</body>



</html>