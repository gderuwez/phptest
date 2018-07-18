<?php
  include 'menu.php';
 ?>
 <div class="w3-container">
   <div class="w3-twothird">
     <form class="w3-container w3-border w3-padding" action="result.php" method="get">
       <label for="childName">Name of the child</label>
       <input class="w3-input width-small w3-animate-input w3-margin-bottom" type="text" name="childName" id="childName">
       <label for="gender">Gender of the child</label> <br>
       <input class="w3-check" type="checkbox" name="gender" value="Male"><span class="pl-10">Male</span>
       <input class="w3-check w3-margin-bottom" type="checkbox" name="gender" value="Male"><span class="pl-10">Female</span>
       <br>
       <label for="teacher">Name of the teacher</label>
       <input class="w3-input width-small w3-animate-input w3-margin-bottom" type="text" name="teacher" id="teacher">
       <br>
       Reason for absence ?
       <br>
       <input class="w3-radio w3-margin-bottom" type="radio" name="excuse" value="1"><span class="pl-10">disease</span> <br>
       <input class="w3-radio w3-margin-bottom" type="radio" name="excuse" value="2"><span class="pl-10">death of pet (or family member)</span> <br>
       <input class="w3-radio w3-margin-bottom" type="radio" name="excuse" value="3"><span class="pl-10">Important extracurricular activity</span> <br>
       <input class="w3-radio w3-margin-bottom" type="radio" name="excuse" value="4"><span class="pl-10">Alien abduction</span> <br>
       <input class="w3-button w3-black" type="submit" name="submit" value="submit">
     </form>
   </div>
   <div class="w3-third w3-center">
     <img class="twist" src="./assets/images/excuse.jpg" alt="outta excuses">
   </div>
 </div>
 <?php
 include 'footer.php';
  ?>
