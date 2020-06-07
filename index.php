<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Smart Resume maker</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  
</head>
<body>


  <div class="header">
    <div class="header-left">Smart Resume Maker</div>
    <div class="header-right">
    <img src="imagephp/logo.png" width="65px" height="65px">
    </div>
  </div>
  <style>
.main {
  background-image: url('imagephp/bgimage2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">Fill the form to get a groomed resume!</div>
      <form enctype="multipart/form-data" method="post" action="sent.php">
        <div class="form-item">Name</div>
        <input type="text" name="name">
        <br>
        
    <!-- Name of input element determines name in $_FILES array -->
   

        <div class="form-item">Adress</div>
        <textarea name="adress"></textarea>
        <div class="form-item">Cell</div>
        <input type="text" name="cell">
        <div class="form-item">E-mail</div>
        <input type="text" name="email">
        
        <div class="form-item">Date of birth</div>
        <?php 
          $types = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
         ?>
        <!-- Write the select tag below -->
        <select name="month">
          <option value="unselected">Select Month</option>
          <?php 
          foreach($types as $type){
            echo "<option value='{$type}'>{$type}</option>";
          }
          ?>
        </select>
        <select name="date">
          <option value="unselected">Select date</option>
          <!-- Use a for loop to make age options 6 to 100 -->
          <?php 
            for($i=1;$i<=31;$i++){
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>
        <select name="year">
          <option value="unselected">Select year</option>
          <!-- Use a for loop to make age options 6 to 100 -->
          <?php 
            for($i=1920;$i<=2020;$i++){
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>
        <div class="form-item">Age</div>
        <select name="age">
          <option value="unselected">Select your age</option>
          <!-- Use a for loop to make age options 6 to 100 -->
          <?php 
            for($i=6;$i<=100;$i++){
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>
        <div class="form-item">Father's name</div>
        <input type="text" name="father">
        <div class="form-item">Mother's name</div>
        <input type="text" name="mother">
        <div class="form-item">Place of birth</div>
        <input type="text" name="place">
        <div class="form-item">Parent's adress</div>
        <textarea name="parent"></textarea>
        
        <div class="form-item">Sex</div>
        <?php 
          $types = array('Female', 'Male', 'Other');
         ?>
        <!-- Write the select tag below -->
        <select name="sex">
          <option value="unselected">Select sex</option>
          <?php 
          foreach($types as $type){
            echo "<option value='{$type}'>{$type}</option>";
          }
          ?>
        </select>
        <div class="form-item">Languages </div>
        <textarea name="language"></textarea>

        <h3><div class="form-item">Secondary education </div></h3>
        <div class="form-item">Name of the institute</div>
        <input type="text" name="institute">
        <div class="form-item">Adress of the institute</div>
        <input type="text" name="ainstitute">
        <div class="form-item">Year of passing</div>
        <select name="passing">
          <option value="unselected">Select year</option>
          <!-- Use a for loop to make age options 6 to 100 -->
          <?php 
            for($i=2000;$i<=2100;$i++){
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>
        <div class="form-item">Subjects</div>
        <textarea name="subjects"></textarea>
        <div class="form-item">Persentage obtained</div>
        <input type="text" name="per">

        <h3><div class="form-item">Higher Secondary education </div></h3>
        <div class="form-item">Name of the institute</div>
        <input type="text" name="institute1">
        <div class="form-item">Adress of the institute</div>
        <input type="text" name="ainstitute1">
        <div class="form-item">Year of passing</div>
        <select name="passing1">
          <option value="unselected">Select year</option>
          <!-- Use a for loop to make age options 6 to 100 -->
          <?php 
            for($i=2000;$i<=2100;$i++){
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>
        <div class="form-item">Subjects</div>
        <textarea name="subjects1"></textarea>
        <div class="form-item">Persentage obtained</div>
        <input type="text" name="per1">

        <h3><div class="form-item">Batchelor education </div></h3>
        <div class="form-item">Name of the institute</div>
        <input type="text" name="institute2">
        <div class="form-item">Adress of the institute</div>
        <input type="text" name="ainstitute2">
        <div class="form-item">Year of passing/currently studying</div>
        <input type="text" name="passing2">
        <div class="form-item">Stream</div>
        <textarea name="subjects2"></textarea>
        <div class="form-item">Persentage obtained at last sem</div>
        <input type="text" name="per2">

        <div class="form-item">Skills and Interest</div>
        <textarea name="skill"></textarea>
       
        <h3><div class="form-item">Projects </div></h3>
        <div><p>project name1<input type="text" name="Project1"></p><p>Skils and Tools used<input type="text" name="description1"></p></div>
        <div><p>project name2<input type="text" name="Project2"></p><p>Skils and Tools used<input type="text" name="description2"></p></div>
        <div><p>project name3<input type="text" name="Project3"></p><p>Skils and Tools used<input type="text" name="description3"></p></div>
        <div><p>project name4<input type="text" name="Project4"></p><p>Skils and Tools used<input type="text" name="description4"></p></div>
        <div><p>project name5<input type="text" name="Project5"></p><p>Skils and Tools used<input type="text" name="description5"></p></div>
        <div><p>project name6<input type="text" name="Project6"></p><p>Skils and Tools used<input type="text" name="description6"></p></div>
        <div><p>project name7<input type="text" name="Project7"></p><p>Skils and Tools used<input type="text" name="description7"></p></div>
        <div><p>project name8<input type="text" name="Project8"></p><p>Skils and Tools used<input type="text" name="description8"></p></div>
        <div><p>project name9<input type="text" name="Project9"></p><p>Skils and Tools used<input type="text" name="description9"></p></div>
        <div><p>project name10<input type="text" name="Project10"></p><p>Skils and Tools used<input type="text" name="description10"></p></div>

       <h3> <div class="form-item">Expiriences and Internships</div></h3>
        <textarea name="expirience"></textarea>
        
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
    de__es__el__ar's project
    </div>
    
  </div>
</body>
</html>

