<?php
include("header.php");
include("function.php");
?>
 <div class="row">
 <nav  style="margin-right:-200px;margin-top:100px;" class="col-md-4 d-none d-md-block  sidebar">
   <div class="sidebar-sticky">
     <ul class="nav flex-column">

       <li  class="nav-item">
         <a style="color:red;" class="nav-link" href="patients.php">عرض المرضى</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link" href="admin_add_patient.php">اضافة مريض</a>
       </li>

     </ul>
     <hr>
   </div>
 </nav>
 <div  class="col-lg-9 ftco-animate" >
   <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-10 mb-md-5">
            <?php
                $id_patient = $_GET['id'];
              if(isset($_POST['submit'])){
                $name   = filter_var($_POST['patientName'], FILTER_SANITIZE_STRING);
                $number   = filter_var($_POST['patientNum'], FILTER_SANITIZE_STRING);
                $city   = filter_var($_POST['patientCity'], FILTER_SANITIZE_STRING);
                $gender   = filter_var($_POST['patient_gender'], FILTER_SANITIZE_STRING);
                $Age   = filter_var($_POST['patientAge'], FILTER_SANITIZE_NUMBER_INT);
                $typeDisease   = filter_var($_POST['typeDisease'], FILTER_SANITIZE_STRING);
                $DescriptionDisease   = filter_var($_POST['DescriptionDisease'], FILTER_SANITIZE_STRING);
                $need_to   = filter_var($_POST['need_to'], FILTER_SANITIZE_STRING);
                $hospital   = filter_var($_POST['patientHospital'], FILTER_SANITIZE_STRING);
                $TotalِAmount   = filter_var($_POST['TotalِAmount'], FILTER_SANITIZE_NUMBER_INT);
                $last_date_donate   = $_POST['last_date_donate'];

                $sql = "UPDATE patients SET fullName='$name',gender='$gender',TotalِAmount='$TotalِAmount',age='$Age',
                typeDisease='$typeDisease',DescriptionDisease='$DescriptionDisease',need_to='$need_to',city='$city',
                hospital='$hospital',last_date_donate='$last_date_donate' where id='$id_patient'";

                $q = mysqli_query($conn , $sql);
                if ($q) {
                    echo "<div style='padding-left:300px;font-size:18px;font-weight:bold;' class='alert alert-success'>تم تعديل بنجاح</div>";
                } else {
                    echo "<div style='padding-left:300px;font-size:18px;font-weight:bold;' class='alert alert-danger'>لم يتم التعديل اعد المحاولة مجددا</div>";
                }
              }
            ?>
            <form class="border border-nowhite p-5 contact-form" method="post"  role="form" autocomplete="off">
              <?php
                      if(isset($_GET["id"]))
                      {
                        $sql="SELECT * FROM patients WHERE id=".$_GET["id"];
                        $result=$conn->query($sql);
                        if($result->num_rows>0)
                        {
                          $row=$result->fetch_assoc();
                        }}
                      ?>

              <h1 class="text-center" style="color:#00bdaa;">تعديل بيانات المريض</h1>

              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">الاسم الكامل<h5>
                <input type="text" class="form-control" id="patientName"  name="patientName"  placeholder="<?php echo $row["fullName"];?>" >
              </div>
              <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">رقم الهوية<h5>
                <input type="text" class="form-control" placeholder="<?php echo $row["patientID"];?>" id="patientNum"  name="patientNum" >
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">الجنس<h5>
                  <select id="patient_gender"  name="patient_gender" class="form-control" >
                              <option ><?php echo $row["gender"];?></option>
                              <option value="ذكر">ذكر</option>
                              <option value="انثى">انثى</option>
                            </select>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">المبلغ الاجمالي<h5>
                  <input type="number" placeholder="<?php echo $row["TotalِAmount"];?> شيكل " id="TotalِAmount"   name="TotalِAmount"  class="form-control">
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">العمر<h5>
                  <input type="number" placeholder="<?php echo $row["age"];?>" id="patientAge"   name="patientAge"   class="form-control">
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">نوع المرض<h5>
                  <select name="typeDisease" class="form-control">
                      <option value=""><?php echo $row["typeDisease"];?></option>
                      <option value="الأمراض المعدية والطفيلية">الأمراض المعدية والطفيلية</option>
                      <option value="الأورام">الأورام</option>
                      <option value="أمراض الدم وأعضاء تكوين الدم">أمراض الدم وأعضاء تكوين الدم</option>
                      <option value="الغدد الصماء والتغذية">الغدد الصماء والتغذية</option>
                      <option value="الاضطرابات العقلية والسلوكية">الاضطرابات العقلية والسلوكية</option>
                      <option value="أمراض الجهاز العصبي">أمراض الجهاز العصبي</option>
                      <option value="أمراض العين">أمراض العين</option>
                      <option value="أمراض الأذن وعملية الخشاء">أمراض الأذن وعملية الخشاء</option>
                      <option value="أمراض الجهاز الدورى">أمراض الجهاز الدورى</option>
                      <option value="أمراض الجهاز التنفسي">أمراض الجهاز التنفسي</option>
                      <option value="أمراض الجهاز الهضمي">أمراض الجهاز الهضمي</option>
                      <option value="أمراض الجلد والنسيج تحت الجلد">أمراض الجلد والنسيج تحت الجلد</option>
                      <option value=" أمراض الجهاز العضلي الهيكلي"> أمراض الجهاز العضلي الهيكلي</option>
                      <option value="أمراض الجهاز البولي التناسلي">أمراض الجهاز البولي التناسلي</option>
                      <option value="التشوهات الخلقية والعاهات">التشوهات الخلقية والعاهات</option>
                    </select>
                  </select>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">يعاني من<h5>
              <input type="text" placeholder="<?php echo $row["DescriptionDisease"];?>" id="DescriptionDisease"   name="DescriptionDisease" class="form-control">
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">يحتاج الى<h5>
                      <input type="text" placeholder="<?php echo $row["need_to"];?>" id="need_to"   name="need_to" class="form-control">
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">المدينة<h5>
                  <select id="patientCity" name="patientCity"  class="form-control">
                      <option value=""><?php echo $row["city"];?></option>
                      <option value="اريحا" >اريحا</option>
                      <option value="الخليل">الخليل</option>
                      <option value="القدس">القدس</option>
                      <option value="بيت حانون">بيت حانون</option>
                      <option value="بيت لاهيا">بيت لاهيا</option>
                      <option value="بيت لحم">بيت لحم</option>
                      <option value="جباليا">جباليا</option>
                      <option value="جنين">جنين</option>
                      <option value="خانيونس">خانيونس</option>
                      <option value="دير البلح">دير البلح</option>
                      <option value="رام الله">رام الله</option>
                      <option value="رفح">رفح</option>
                      <option value="طولكرم">طولكرم</option>
                      <option value="غزة">غزة</option>
                      <option value="قلقيلية">قلقيلية</option>
                      <option value="نابلس">نابلس</option>
                    </select>

              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">المستشفى<h5>
                <input type="text" placeholder="<?php echo $row["hospital"];?>" id="patientHospital"   name="patientHospital" class="form-control">
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">اخر موعد للتبرع<h5>
                  <input type="date" placeholder="<?php echo $row["last_date_donate"];?>" id="last_date_donate"   name="last_date_donate" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit"   name="submit" value="تعديل بيانات المريض" class="btn py-3 px-4 btn-primary" style="width:100%;">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

     </div>
<?php include("footer.php"); ?>
