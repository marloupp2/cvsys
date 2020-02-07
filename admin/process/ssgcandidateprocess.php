<?php
include("../../db/db.php");
if (isset($_POST['ssg_submit'])) {
       $party_list=$_POST['party_list'];
       $date=date('Y');
   if (isset($_POST['name1'])) {
      $name=$_POST['name1'];
      $image=$_FILES['image1']['name'];
      $position='President';
      if (!empty($name)) {
         $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image1"]["tmp_name"] ,'../images/'.basename($image));
         }
      }
   }
   if (isset($_POST['name2'])) {
      $name=$_POST['name2'];
      $image=$_FILES['image2']['name'];
      $position='Vice President';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image2"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name3'])) {
      $name=$_POST['name3'];
      $image=$_FILES['image3']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image3"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name4'])) {
      $name=$_POST['name4'];
      $image=$_FILES['image4']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image4"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name5'])) {
      $name=$_POST['name5'];
      $image=$_FILES['image5']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image5"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name6'])) {
      $name=$_POST['name6'];
      $image=$_FILES['image6']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image6"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name7'])) {
      $name=$_POST['name7'];
      $image=$_FILES['image7']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image7"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name8'])) {
      $name=$_POST['name8'];
      $image=$_FILES['image8']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image8"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name9'])) {
      $name=$_POST['name9'];
      $image=$_FILES['image9']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image9"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name10'])) {
      $name=$_POST['name10'];
      $image=$_FILES['image10']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image10"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name11'])) {
      $name=$_POST['name11'];
      $image=$_FILES['image11']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image11"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name12'])) {
      $name=$_POST['name12'];
      $image=$_FILES['image12']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image12"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name13'])) {
      $name=$_POST['name13'];
      $image=$_FILES['image13']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image13"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   if (isset($_POST['name14'])) {
      $name=$_POST['name14'];
      $image=$_FILES['image14']['name'];
      $position='Senator';
      if (!empty($name)) {
      $sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','$party_list','$date')");
      if ($sql) {
          move_uploaded_file($_FILES["image14"]["tmp_name"] ,'../images/'.basename($image));
       }
      }
   }
   echo '<script>window.location="../candidates.php"</script>';
}
?>