<?php include ('server1.php')?>
<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
      
      <title>نادي ديالى</title>
      <link rel="stylesheet" type="text/css" href="style1.css">
   </head>
   <body>
        <div class="headerhome">
		<h2>صفحة اضافة اخبار</h2>
	</div>
     
    <form method="post" action="addnews.php">
        
        <div class="input-group">
             
			<label>القسم</label>
           <!-- drop list  -->
			<select name="dep" style="font-size:x-large;width:200px ;color: #f00"  value="<?php echo $dep; ?>">
			<option>كرة قدم</option>
			<option>سباحة</option>
			<option>تنس</option>
			</select>
        <div class="input-group">
			<label> عنوان الخبر </label>
			<input type="text" name="topic" style="font-size:x-large;width:200px" value="<?php echo $topic;?>">

		<div class="input-groups">
			<label>  التفاصيل</label>
			<input type="text" name="details" style="font-size:x-large;width:400px;height:300px" value="<?php echo $dep;?>">
		
		<div class="input-group">
			<button type="submit" style="font-size:x-large;width:100px" name="add">اضافة</button>
		</div>
		
	</form>
   </body>


</html>