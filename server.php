
    	session_start();
	// variable declaration
    $culbname="";
	$email    = "";
    $adderss="";
    $culbage="";
    $about="";
  
$db=mysqli_connect('localhost','root','','newsweb');

if (isset($_POST['send']))
 {
    
// receive all input values from the form
        $culbname = mysqli_real_escape_string($db, $_POST['culbname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$adderss = mysqli_real_escape_string($db, $_POST['adderss']);
		$culbage = mysqli_real_escape_string($db, $_POST['culbage']);
		$about = mysqli_real_escape_string($db, $_POST['about']);
        
      
        $query="insert into culbinfo(culbname,email,adderss,culbage,about)Values('$culbname','$email','$adderss','$culbage','$about')";
        mysqli_query($db,$query);


     //  header('location: index.php');
}
?>