

    <head>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <form method="POST" enctype="multipart/form-data" dir="rtl" >

    
    
    <center >
        <h1>تقديم ادارة</h1>
    <input type="text" name="name" placeholder="الاسم" required>
    <br>
    <input type="email" name="email" max="100" placeholder="الايميل" required>
    <br>

    <textarea name="body"  cols="30" rows="10" placeholder="الخبرات" required ></textarea>
    <br>
    <div class="one">
    
    <h5>ماذا تعني كلمة الرول بلاي</h5>
    <input type="text" name="one" id=""  placeholder="اكتب هنا" required>
    <br>
    
    <span  id="one">Next 1-7</span>

    </div>
    <div class="two">
      
    <h5>ماهو قانون RPZ</h5>
    <input type="text" name="two" id=""  placeholder="اكتب هنا" required>
    <br>
    <br>
    <span  id="two">Next 2-7</span>
    
    </div>
    <div class="three">
    

    <h5>ماهو قانون SL </h5>
    <input type="text" name="three" id=""  placeholder="اكتب هنا" required>
    <br>
    <br>
    <span  id="three">Next 3-7</span>
    
    </div>
    <div class="four">
    

    <h5>ماهو قانون  TK </h5>
    <input type="text" name="four" id=""  placeholder="اكتب هنا" required>
    <br>
    <br>
    <span  id="four">Next 4-7</span>
    
    </div>
    <div class="five">
    

    <h5>ماهو قانون VDM</h5>
    <input type="text" name="five" id=""  placeholder="اكتب هنا" required> 
    <br>
    <br>
    <span  id="five">Next 5-7</span>
    
    </div>
    <div class="six">
    

    <h5>ماهو قانون DM</h5>
    <input type="text" name="six" id=""  placeholder="اكتب هنا" required>
    <br>
    <br>
    <span  id="six" >Next 6-7</span>
    
    </div>
    <div class="seven">
    

    <h5>شكرا لك اتمنى ان تكون قد اجبت على الاسئلة بنجاح</h5>
    
    </div>

    <br>
    <div class="container" style="margin-top:35px;">
    <input type="file" id="file" multiple name="image">
    <label  for="file">
   
    حدد صورة للارسال&nbsp;
    <i class="uil uil-upload"></i>
    </label>
    <div id="num-of-list" style="margin:15px 0;">لم يتم تحديد اي صورة   </div>
    <ul id="files-list"></ul>

    </div>
            <button id="subw" type="submit" name="sub">ارسال</button>
</center>   
</form>
<script src="script.js"></script>
<?php
require_once 'mail.php';

if(isset($_POST['sub'])){
    $mail->setFrom('jamalgoving@gmail.com', 'Jamal Goving');
    $mail->addAddress($_POST['email']);               //Name is optional
    $mail->Subject = "تقديم ادارة من : ".$_POST['name']."   ";
    $mail->Body    = "<h2  dir='rtl'>اسم المستخدم : ".$_POST['name']."</h2>".
    "<h3 dir='rtl' style='padding:12px 25px;background:#EEE;border-radius:8px;font-weight:500;'>خبرات اللاعب : <br>
    ".$_POST['body']."</h3>".
    "<h4 dir='rtl' style='background:#eff5ff;font-family:system-ui;padding:7px 12px;border-radius:6px;'> اول سؤال ماذا يعني قانون الرول بلاي : ".$_POST['one']."</h4><br>".
    "<h4 dir='rtl' style='background:#eff5ff;font-family:system-ui;padding:7px 12px;border-radius:6px;'> ثاني سؤال ماهو قانون RPZ : ".$_POST['two']."</h4><br>".
    "<h4 dir='rtl' style='background:#eff5ff;font-family:system-ui;padding:7px 12px;border-radius:6px;'> ثالث سؤال ماهو قانون SL : ".$_POST['three']."</h4><br>".
    "<h4 dir='rtl' style='background:#eff5ff;font-family:system-ui;padding:7px 12px;border-radius:6px;'> رابع سؤال ماهو قانون TK : ".$_POST['four']."</h4><br>".
    "<h4 dir='rtl' style='background:#eff5ff;font-family:system-ui;padding:7px 12px;border-radius:6px;'> خامس سؤال ماهو قانون VDM : ".$_POST['five']."</h4><br>".
    "<h4 dir='rtl' style='background:#eff5ff;font-family:system-ui;padding:7px 12px;border-radius:6px;'> سادس سؤال ماهو قانون DM : ".$_POST['six']."</h4><br>";
   
    move_uploaded_file($_FILES['image']['tmp_name'],"files/".$_FILES['image']['name']);

        $mail->addAttachment('files/' . $_FILES['image']['name'] );  

    $mail->send();
    header('location:thank.html');
}



?>

