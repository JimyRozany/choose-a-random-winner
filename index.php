<?php

include "./inc/db.php";
include "./inc/form.php";

include "./inc/db_select.php";

include "./inc/db_close.php";
   
?>


<!DOCTYPE html>
<html lang="en" dir ="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>win</title>
    <style></style>
</head>
<body>
    


        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto">
                <img src ="./images/jimy2photo.png">
                <h1 class="display-4 fw-normal">إربح مع جمي</h1>
                <p class="lead fw-normal">مسابقة جديدة.</p>
                <p class="lead fw-normal">إشترك الأن لاتفوتك الفرصة.</p>
                <h3 id="countDown"></h3>
            </div>
        </div>
    <div class="container">    
        <div class="position-relative text-right ">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <form action ="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                <h1>الرجاء ادخل معلوماتك</h1>
                <div class="mb-3">
                    <label for="firstName" class="form-label">الاسم الاول </label>
                    <input type="text" name ="firstName" id="firstName" class="form-control" value ="<?php echo $firstName ?>">
                    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'];?></div>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">الاسم الاخير</label>
                    <input type="text" name ="lastName" id="lastName" class="form-control" value ="<?php echo $lastName ?>">
                    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'];?></div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">البريد الالكتروني</label>
                    <input type="text" name ="email" id="email" class="form-control" value ="<?php echo $email ?>">
                    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'];?></div>
                </div>
                
                
                <button id ="button1" type="submit" name ="submit"  class="btn btn-primary">ارسال المعلومات</button>
                </form>
            </div>
        </div>


<div id ="loader-con">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>


<!-- Button trigger modal -->
<div id ="buttonWin"> <!-- class ="d-grid gap-2 col-12 max-auto my-5"-->
    <button id ="winner"  type="button" class="btn btn-primary">
    إختيار الرابح
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">الــرابح في المسابقة </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($users as $user):?>
            <h1 class =" text-center card-title"><?php echo htmlspecialchars($user['firstName']) . " ".htmlspecialchars($user['lastName']) . " ";?></h1>
            <p class ="card-text"><?php echo htmlspecialchars($user['email']) . " ";  ?></p>
        <?php  endforeach; ?>
      </div>
      
    </div>
  </div>
</div>



<!--
<div id ="mohamed">
    <div>
        <h1>mohamed gamal</h1>
    </div>
</div>



    <div id ="cards" class ="row mb-5 pb-5">
        <?php // foreach($users as $user):?>
            <div class ="col-sm-6">
                <div class ="card my-2 bg-light">
                    <div class ="card-body">
                        <h5 class ="card-title"><?php // echo htmlspecialchars($user['firstName']) . " ".htmlspecialchars($user['lastName']) . " ";?></h5>
                        <p class ="card-text"><?php // echo htmlspecialchars($user['email']) . " ";  ?></p>

                    </div>
                </div>
            </div>
        <?php // endforeach; ?>  


    </div>
-->  

</div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src ="./js/loader.js"></script>
    <script src ="./js/script.js"></script>
</body>
</html>