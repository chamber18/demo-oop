<?php
    include("./models/Employee.php");

 
$list = array (
    new Employee("Tony", "Stark", "Developer", "https://www.w3schools.com/howto/img_avatar.png"),
    new Employee("Tony2", "Stark2","Developer2", "https://www.w3schools.com/howto/img_avatar2.png"),
    new Employee("Tony3", "Stark3","Developer3", "https://www.w3schools.com/howto/img_avatar.png"),
    new Employee("Tony4", "Stark4","Developer4", "https://www.w3schools.com/howto/img_avatar2.png")
)
    // $emp1->fname = "PEter";
    // $emp1->lname = "Quill";
    // $emp1->position = "developer";
?>


<h1>LIST OF EMPLOYEES</h1>
<div class="listing">

<?php 
foreach($list as $e){
?>
    <div class="card">
    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:100%">
    <div class="container">
        <h4><b><?=  $e->fname." ".$e->lname ?></b></h4> 
        <p><?=  $e->position ?></p> 
    </div>
    </div>
    <?php 
}
?>
</div>