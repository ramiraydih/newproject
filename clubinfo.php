<?php include('server')?>
<!DOCTYPE html>
<html>
<head>
	<title>معلومات النادي Form</title>
	<link rel="stylesheet" type="text/css" href="styleclub.css">
</head>
<body style="background: #128184 ">
   
	<div class="header">
		<h2>تحديث معلومات النادي</h2>
	</div>

    <form method="post" action="clubinfo.php ">
         <div class="input">
        <label>اسم النادي </label>
			<input type="text" name="culbname" >
            </div>
         <div class="input">
        <label>عنوان النادي</label>
			<input type="text" name="adderss">
            </div>
         <div class="input">
			<label>البريد الالكتروني</label>
			<input type="text" name="email" >
        </div>
       
        <div class="input">
			 <p>
             <label>تاريه تأسيس النادي</label>
             <select id = "myList" name="culbage" style="font-size:18px;" dir="rtl">
                  <option value = "--"  >--</option>
               <option value = "2000-2001"  >2000-2001</option>
               <option value = "2001-2002">2001-2002</option>
                  <option value = "2002-2003"  >2002-2003</option>
               <option value = "2003-2004">2003-2004</option>
                  <option value = "2004-2005"  >2004-2005</option>
               <option value = "2005-2006">2005-2006</option>
                  <option value = "2006-2007"  >2006-2007</option>
               <option value = "2008-2009">2008-2009</option>
               <option value = "2009-2010"  >2009-2010</option>
               <option value = "2010-2011">2010-2011</option>
                  <option value = "2011-2012"  >2011-2012</option>
               <option value = "2012-2013">2012-2013</option>
                 <option value = "2013-2014">2013-2014</option>
               <option value = "2014-2015"  >2014-2015</option>
               <option value = "2015-2016">2015-2016</option>
                  <option value = "2016-2017"  >2016-2017</option>
               <option value = "2017-2018">2017-2018</option>
             </select>
          </p>
        </div>
        
        
        <div class="inputs">
			<label> نبذة عن النادي</label>
			<input type="text" name="about" style="margin-bottom: 20px" >
        </div>
              
        <button type="submit" class="btn" name="send"  >التالـــي</button>
		
	</form>
</body>
</html>