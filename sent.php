<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Smart Resume maker</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body onload="onLoad()">
<script type="text/javascript">
        function onLoad() {
    alert("Your resume is almost ready...");
    //document.getElementById("timestamp").innerHTML = Date();
}
        </script>
  <div class="header">
    <div class="header-right">
    Enter your photo: <input type="file" id="image" name="image" onchange="loadfile(event)">
    
    Print your resume: <button onClick="window.print()">Print</button>

    </div>
  </div>
  <style>
.main {
  background-color: rgb(240, 205, 187);
  
}
</style>
  <div class="main">
    <div class="display-contact">
      <div class="form-title">Resume</div>
      <style>
.form-title {
  font-weight: bold;
  
}</style>
      <!--<div class="form-item">■ Name</div>-->
     <h1> <?php echo $_POST['name'];?></h1>
          <img class="header-right" id="preimage" width="170px" height="200px">
      <script type="text/javascript">
        function loadfile(event){
          var output=document.getElementById('preimage');
          output.src=URL.createObjectURL(event.target.files[0]);
        };
        </script>
        
      <p><?php echo $_POST['adress']; ?></p>
      <p>cell:<?php echo $_POST['cell'];?></p>
      <p><?php echo $_POST['email'];?></p>
      <hr size=100px>
      <h3><div class="form-item">Personal data</div></h3>
      <div class="form-item">■ Date of birth</div>
      <!-- Output the category received from the form below -->
      <?php echo $_POST['date']; ?>
      <?php echo $_POST['month']; ?>
      <?php echo $_POST['year']; ?>
      <div class="form-item">■ Age</div>
      <?php echo $_POST['age']; ?>
      <div class="form-item">■ Father's name</div>
      <?php echo $_POST['father']; ?>
      <div class="form-item">■ Mother's name</div>
      <?php echo $_POST['mother']; ?>
      <div class="form-item">■ Place of birth </div>
      <?php echo $_POST['place']; ?>
      <div class="form-item">■ Parent's adress </div>
      <?php echo $_POST['parent']; ?>

      <div class="form-item">■ Sex</div>
      <!-- Output the category received from the form below -->
      <?php echo $_POST['sex']; ?>
      <div class="form-item">■ Languages </div>
      <?php echo $_POST['language']; ?>
      <hr size=100px>
      <h3><div class="form-item">Secondary education </div></h3>
      <div class="form-item">■ Name of the institute</div>
      <?php echo $_POST['institute']; ?>
      <div class="form-item">■ adress of the institute</div>
      <?php echo $_POST['ainstitute']; ?>
      <div class="form-item">■ Year of passing</div>
      <?php echo $_POST['passing']; ?>
      <div class="form-item">■ Subjects</div>
      <?php echo $_POST['subjects']; ?>
      <div class="form-item">■ Persentage obtained</div>
      <?php echo $_POST['per']; ?>

      <h3><div class="form-item">Higher Secondary education </div></h3>
      <div class="form-item">■ Name of the institute</div>
      <?php echo $_POST['institute1']; ?>
      <div class="form-item">■ adress of the institute</div>
      <?php echo $_POST['ainstitute1']; ?>
      <div class="form-item">■ Year of passing</div>
      <?php echo $_POST['passing1']; ?>
      <div class="form-item">■ Subjects</div>
      <?php echo $_POST['subjects1']; ?>
      <div class="form-item">■ Persentage obtained</div>
      <?php echo $_POST['per1']; ?>
      
      <h3><div class="form-item">Batchelor education </div></h3>
      <div class="form-item">■ Name of the institute</div>
      <?php echo $_POST['institute2']; ?>
      <div class="form-item">■ adress of the institute</div>
      <?php echo $_POST['ainstitute2']; ?>
      <div class="form-item">■ Year of passing/currently studying</div>
      <?php echo $_POST['passing2']; ?>
      <div class="form-item">■ Stream</div>
      <?php echo $_POST['subjects2']; ?>
      <div class="form-item">■ Persentage obtained at last sem</div>
      <?php echo $_POST['per2']; ?>
      <hr size=100px>
     <h3> <div class="form-item">Skills and Interest</div></h3>
      <?php echo $_POST['skill']; ?>

      <h3><div class="form-item">Projects </div></h3>
      <p>*Project1: <?php echo $_POST['Project1'];?>    *Skils and Tools used: <?php echo $_POST['description1'];?></p>
      <p>*Project2: <?php echo $_POST['Project2'];?>    *Skils and Tools used: <?php echo $_POST['description2'];?></p>
      <p>*Project3: <?php echo $_POST['Project3'];?>    *Skils and Tools used: <?php echo $_POST['description3'];?></p>
      <p>*Project4: <?php echo $_POST['Project4'];?>    *Skils and Tools used: <?php echo $_POST['description4'];?></p>
      <p>*Project5: <?php echo $_POST['Project5'];?>    *Skils and Tools used: <?php echo $_POST['description5'];?></p>
      <p>*Project6: <?php echo $_POST['Project6'];?>    *Skils and Tools used: <?php echo $_POST['description6'];?></p>
      <p>*Project7: <?php echo $_POST['Project7'];?>    *Skils and Tools used: <?php echo $_POST['description7'];?></p>
      <p>*Project8: <?php echo $_POST['Project8'];?>    *Skils and Tools used: <?php echo $_POST['description8'];?></p>
      <p>*Project9: <?php echo $_POST['Project9'];?>    *Skils and Tools used: <?php echo $_POST['description9'];?></p>
      <p>*Project10: <?php echo $_POST['Project10'];?>    *Skils and Tools used: <?php echo $_POST['description10'];?></p>

      <h3><div class="form-item">Expiriences and Internships</div></h3>
      <?php echo $_POST['expirience']; ?>

    </div>
  </div>

  <div class="footer">
    <div class="footer-left">
de__es__el__ar's project
    </div>
    
  </div>
</body>
</html>
