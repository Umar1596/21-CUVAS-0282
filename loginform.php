
<style>
 .frm{
        background-color: beige;
        border: 3px solid red ;
       padding-left: 150px;
       width: 400px;
        height: 850px;
    
    }
 .tbl1{
    background-color: white;
        width: 300px;
        height: 300px;
        border: 3px solid purple ;
        text-align: center;
        font-size: large;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif, Cochin, Georgia, Times, 'Times New Roman', serif;
        
        
    }
    .tbl2{
    background-color: white;
        width: 300px;
        height: 300px;
        border: 3px solid purple ;
        text-align: left;
        font-size: medium;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif, Cochin, Georgia, Times, 'Times New Roman', serif;
        
    }
    #btn{
        padding-left: 100px;
        background-color: orangered;
        border-radius: 100px;
    }
   

</style>
<form method="get" class="frm">
<table border="1" class="tbl1">
               <h1> Registration Form By Umar       </h1>
            <tr><td><label >Name</label></td><td> <input type="text" name="name" required > </td></tr>
            <tr><td><label >Father Name</label></td><td> <input type="text" name="fname" required > </td></tr>
            <tr><td><label >Email</label></td><td> <input type="text" name="email" required> </td></tr>
            <tr><td><label >CNIC</label></td><td> <input type="text" name="cnic" required> </td></tr>
            <tr id="btn"><td><input type="submit" value="Register" name="sub"></td></tr><br><br>

</form>
</table>
<table border="1" class="tbl2">

<?php
if(isset($_GET['sub'])){ 
$n1 = $_GET['name'];
$n2 = $_GET['fname'];
$n3 = $_GET['email'];
$n4 = $_GET['cnic'];
$n5 = $_GET['sub'];

echo" <h1>Results</h1>";
echo "<tr><td>Name</td><td> $n1 </td></tr>";
echo "<tr><td>Father Name</td><td> $n2 </td></tr>";
echo "<tr><td>Email</td><td> $n3 </td></tr>";
echo "<tr><td>CNIC</td><td> $n4 </td></tr>";
}


?>
</table>