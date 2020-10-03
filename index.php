<html>
<head>
<title> tabel </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2 class="text-center headertext">Enter number for print table</h2>
 <div class="container-fluid h-auto">
        <div class="row justify-content-center h-auto">
            <div class="col col-sm-7 col-md-6 col-lg-5 col-xl-3">
                <form action="" method="POST" name="otpform" onsubmit = "return(validate());">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter number</label>
    <input type="number" class="form-control" id="otpid" placeholder="Enter number" name="num">
                    </div>
                    <div class="form-group">
                        <button input="submit" class="btn btn-info btn-lg btn-block" name="sub"> Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
if(isset($_POST['sub'])){
$number = $_POST['num'];
for($i=1; $i<=10; $i++){
echo '<div class="text-center">'."$number * $i = ".$number*$i.'</div>'; 
  }
}
?>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</body>
</html>