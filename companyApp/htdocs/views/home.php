<?php  include('../storage/server.php'); ?>

<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM companies WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
            $email = $n['email'];
            $phone = $n['phone'];
            $registration_code = $n['registration_code'];
            $comment = $n['comment'];
            
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Visma solutions</title>
<link href="/styles/style.css" media="all" rel="Stylesheet" type="text/css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>
<body>
    <?php 
        
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
    ?>
  <div class="container">
    <div class="frontpageImg text-center" >
        <img alt="Companyapp" src="/img/companyapp.png" height="200" width="600"/>
    </div>
      <div class="frontpage text-center">
        <h3>The table</h3>
        <?php if (isset($_SESSION['message'])): ?>
        <div class="message text-success">
            <?php  
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center" scope="col">id</th>
                    <th class="text-center" scope="col">name</th>
                    <th class="text-center" scope="col">registration_code</th>
                    <th class="text-center" scope="col">email</th>
                    <th class="text-center" scope="col">phone</th>
                    <th class="text-center" scope="col">comment</th>
                    <th class="text-center" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($results)){ ?>
                    <tr >
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td class="text-center"><?php echo $row['name'] ?></td>
                        <td><?php echo $row['registration_code'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['comment'] ?></td>
                        <td>
                            <a href="../storage/server.php?del=<?php echo $row['id']; ?>" class="del_btn btn">Delete</a>
                                <a href="home.php?edit=<?php echo $row['id']; ?>" class="edit_btn btn" >Edit</a>
                        </td>
                    </tr>
              <?php  } ?>

            </tbody>
        </table>

                <form method="post" action="/storage/server.php">
                    <div class="form-row">

                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Registration code</label>
                            <input class="form-control" type="text" name="registration_code" value="<?php echo $registration_code; ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Phone</label>
                            <input class="form-control" type="text" name="phone" value="<?php echo $phone; ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Comment</label>
                            <input class="form-control" type="text" name="comment" value="<?php echo $comment; ?>">
                        </div>

                        <div class="form-group col-md-12">
                            <?php if ($update == true): ?>
                                <button class="btn" type="submit" name="update" style="background: #55680F;" >update</button>
                            <?php else: ?>
                                <button class="btn" type="submit" name="save" >Save</button>
                            <?php endif ?>
                        </div>
                        <div class="error"><h4><?php echo 'Your mail has to be unique'; ?></h4></div>
                    </div>
                </form>

                
   

</div>
  </div>
</body>
</html>
