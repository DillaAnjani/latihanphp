<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nilai </title>
    </head>
    <body>
 <center><h3> SILAKAN MASUKKAN NILAI </h3></center>
        <form method="POST">
   <table width="850" border="1" align="center" border color="#0000FF" bgcolor="#00A2E8">
  
      <td><strong>Silahkan Input Nilai</strong></td>
      <td><input name="nilai1" type="text" value ="<?php echo $nilai1; ?>"/></br></td> 
      <td><center> <input type="submit" name="submit" value="SUBMIT"/><br/></td></center>
  </table>
  <table width="850" border="1" align="center" border color="#26418f" bgcolor="#ff8a80">
            <td><center><?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0 && $nilai1 <= 50) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = E.  <br> Keterangan = E. ';
            } else if ($nilai1 >= 50 && $nilai1 <= 60) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = D.  <br> Keterangan = D. ';
            } else if ($nilai1 >= 60 && $nilai1 <= 70) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = C.  <br> Keterangan = C. ';
            } else if ($nilai1 >= 70 && $nilai1 <= 80) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = B.  <br> Keterangan = B. ';
            } else if ($nilai1 >= 80 && $nilai1 <= 90) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A.  <br> Keterangan = A. ';
            } else if ($nilai1 >= 90 && $nilai1 <=100 ) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A+.  <br> Keterangan = A+. ';
            } 
   
   else{
                echo 'Nilai : ' . $nilai1 . ' GOOD.';
            }
          ?> </td></center> 
        </form>
  </table>
  <center><span class="copy-text">NILAI OH NILAI</span></center>
    </body>
</html>