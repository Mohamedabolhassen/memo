<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body dir='rtl'>

<?php
#Connect to data base#

$host='localhost';
$user='root';
$pass='';
$db='employ';
$con= mysqli_connect($host,$user,$pass,$db);
$res= mysqli_query($con, "select   * from myempolyes ");
#____varbiales____#
$id='';
$name='';
$address='';
if(isset($_POST ['id'])){
    $id= $_POST ['id'];

}
if(isset($_POST ['name'])){
    $name= $_POST ['name'];

}
if(isset($_POST ['address'])){
    $address= $_POST ['address'];

}

$addbutton='';
if(isset($_POST ['add'])){
    $addbutton= "insert into myempolyes value($id,'$name','$address')";
    mysqli_query($con,$addbutton);
    header("location: home.php");


}

if(isset($_POST ['del'])){
    $addbutton= "delete from myempolyes where name= '$name' ";
    mysqli_query($con,$addbutton);
    header("location: home.php");



}











?>













    <!--بداية لوحة التحكم !-->  
    <div id="mother">


    <form method='POST'>
        <aside>
            <div class="div">
                <img src="https://cdn-icons-png.flaticon.com/512/622/622848.png" alt="" width=250px>
                <h3 class="logo"> لوحة التحكم</h3>
        <label > رقم الموظف:</label> <br>
        <input type="text" name="id" id="id"><br>
        <label >اسم الموظف:</label> <br>
        <input type="text" name="name" id='name'> <br>
        <label >عنوان الموظف</label> <br>
        <input type="text" name="address" id="address"> <br> <br>
        <button name="add">اضافة موظف</button>
        <button name="del"> حذف موظف</button>
            </div>
            <!--- end !-->

        </aside>
         <!--لوحة عرض البيانات!-->  
        <main>
            <table id='tbl'>
                <tr>
                    <th>الرقم التسلسلي</th>
                    <th>اسم الموظف</th>
                    <th> عنوان الموظف</th>
                </tr>
                <?php
                
                while($row = mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "</tr>";
                    
                }
                ?>
            </table>

        </main>


    </form>







    </div>
</body>
</html>