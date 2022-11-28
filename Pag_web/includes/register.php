<?php
// assign defaults
$data = array('email' 		=> 'email',
			  'firstname' 	=> 'nombre',
			  'lastname' 	=> 'apellidos',
			  'postcode' 	=> 'codigo postal',
			  'city' 		=> 'ciudad',
			  'stateProv' 	=> 'provincia',
			  'country'		=> 'pais',
			  'telephone' 	=> 'telefono',
			  'password' 	=> 'contraseña',
			  'password2' 	=> 'repetir contraseña',
			  'imagen'      => ''
);
$error = array('email' 	  => '',
			  'firstname' => '',
			  'lastname'  => '',
			  'city'	  => '',
			  'stateProv' => '',
			  'country'	  => '',
			  'postcode'  => '',
			  'telephone' => '',
			  'password'  => '',
);
if (isset($_POST['data'])) {
	$data = $_POST['data'];

    $path = "perfiles/".basename($_FILES['imagen']['name']);
    move_uploaded_file($_FILES['imagen']['tmp_name'], $path);
	//Sanitization of Pic
	$data['imagen'] = $conx -> real_escape_string($data['imagen']);
    $data['imagen'] = basename($_FILES['imagen']['name']);
	//if (basename($_FILES['imagen']['name'])=! "*.jpeg$" or basename($_FILES['imagen']['name'])=! "*.png$"){
	//	echo "<script> alert('Bad file type') </script>";
	}
	//sql sanitization of parameters
	$data['email'] = $conx -> real_escape_string($data['email']);
	$data['password'] = $conx -> real_escape_string($data['password']);
	$data['firstname'] = $conx -> real_escape_string($data['firstname']);
	$data['lastname'] = $conx -> real_escape_string($data['lastname']);
	$data['city'] = $conx -> real_escape_string($data['city']);
	$data['stateProv'] = $conx -> real_escape_string($data['stateProv']);
	$data['country'] = $conx -> real_escape_string($data['country']);
	$data['postcode'] = $conx -> real_escape_string($data['postcode']);
	$data['telephone'] = $conx -> real_escape_string($data['telephone']);
	


    $sql = "INSERT INTO users(username, password, izena, abizena, hiria, lurraldea, herrialdea, postakodea, telefonoa, irudia) VALUES (";
    $sql .= "'" . $data['email'] . "', ";
    $sql .= "'" . md5($data['password'] ). "', ";
    $sql .= "'" . $data['firstname'] . "', ";
    $sql .= "'" . $data['lastname'] . "', ";
    $sql .= "'" . $data['city'] . "', ";
    $sql .= "'" . $data['stateProv'] . "', ";
    $sql .= "'" . $data['country'] . "', ";
    $sql .= "'" . $data['postcode'] . "', ";
    $sql .= "'" . $data['telephone'] . "', ";
    $sql .= "'" . $data['imagen']. "')";
    if (!mysqli_query($conx,"$sql"))
    {
        die('Error: ' . mysqli_error());
    }
    else {
        header("Location: index.php");
    }
}
?>
	<div class="content">
	<br/>
	<div class="register">

		<h2>Erregistroa egin</h2>
		<br/>

		<b>Introduce la información.</b>
		<br/>
		<form action="<?php echo $_SERVER['PHP_SELF']."?action=register"; ?>" method="POST" enctype="multipart/form-data">
			<p>
				<label>Email/username: </label>
				<input type="text" name="data[email]" value="<?php echo $data['email']; ?>"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required placeholder="Email" />
				<?php if ($error['email']) echo '<p>', $error['email']; ?>
			<p>
			<p>
				<label>Izena: </label>
				<input type="text" name="data[firstname]" value="<?php echo $data['firstname']; ?>" pattern="[A-Za-z]{1,15}" required placeholder="Name" />
				<?php if ($error['firstname']) echo '<p>', $error['firstname']; ?>
			<p>
			<p>
				<label>Abizena: </label>
				<input type="text" name="data[lastname]" value="<?php echo $data['lastname']; ?>"  pattern="[A-Za-z]{1,15}" required placeholder="LastName" />
				<?php if ($error['lastname']) echo '<p>', $error['lastname']; ?>
			<p>
			<p>
				<label>Hiria: </label>
				<input type="text" name="data[city]" value="<?php echo $data['city']; ?>" pattern="[A-Za-z]{1,15}" required placeholder="City"/>
				<?php if ($error['city']) echo '<p>', $error['city']; ?>
			<p>
			<p>
				<label>Lurraldea: </label>
				<input type="text" name="data[stateProv]" value="<?php echo $data['stateProv']; ?>" pattern="[A-Za-z]{1,15}" required placeholder="State/Prov"/>
				<?php if ($error['stateProv']) echo '<p>', $error['stateProv']; ?>
			<p>
			<!-- // *** validation: implement a database lookup -->
			<p>
				<label>Herrialdea: </label>
				<input type="text" name="data[country]" value="<?php echo $data['country']; ?>" pattern="[A-Za-z]{1,15}" required placeholder="Country"/>
				<?php if ($error['country']) echo '<p>', $error['country']; ?>
			<p>
			<p>
				<label>Postakodea: </label>
				<input type="text" name="data[postcode]" value="<?php echo $data['postcode']; ?>" pattern="/^\d+$/{5,8}" required placeholder="PostCode"/>
				<?php if ($error['postcode']) echo '<p>', $error['postcode']; ?>
			<p>
			<p>
				<label>Telefonoa: </label>
				<input type="text" name="data[telephone]" value="<?php echo $data['telephone']; ?>" pattern="/^\d+$/{9}" required placeholder="Tlf" />
				<?php if ($error['telephone']) echo '<p>', $error['telephone']; ?>
			<p>
			<p>
				<label>Pasahitza: </label>
				<input type="text" name="data[password]" value="<?php echo $data['password']; ?>" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Password"/>
				<?php if ($error['password']) echo '<p>', $error['password']; ?>
			<p>
            <p>
                <label>Pasahitza errepikatu: </label>
                <input type="text" name="data[password2]" value="<?php echo $data['password2']; ?>"  pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Retype Password"/>
            <p>
            <p>
                <label>Irudia aukeratu:</label>
                <input name="imagen" type="file" id="fileChooser" onchange="return ValidateFileUpload()"/>
            <p>
			<p>
				<input type="reset" name="data[clear]" value="Clear" class="button"/>
				<input type="submit" name="data[submit]" value="Submit" class="button marL10"/>
			<p>
		</form>
	</div>
</div>
