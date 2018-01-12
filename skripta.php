<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ispis</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>




 	<header>
        <h1>Informacije o proizvodu</h1>
    </header>



    <nav>
        <a href="index.html">Početak</a>
        <a href="onama.html">O nama</a>
		<a href="unos.html">Unos</a>
        <a href="http://www.tvz.hr/" target="_blank">TVZ</a>
    </nav>
    
    <br/>
    <hr/>
    <br/>
    
	<div id="ispis">
  
  <?php

	$naziv=$_POST['naziv'];
	$sifra=$_POST['sifra'];
	$kategorija=$_POST['kategorija'];
	$opis=$_POST['opis'];
	$cijena=$_POST['cijena'];
	//$slika=&_FILES['slika']["tmp_name"];
	
	
	echo '<b>Ime Proizvoda:</b> '.$naziv.'<br/></br>';
	echo '<b>Šifra proizvoda:</b> '.$sifra.'<br/></br>';
	echo '<b>Kategorija:</b> '.$kategorija.'<br/></br>';
	echo '<b>Opis Proizvoda:</b> '.$opis.'<br/><br/>';
	echo '<b>Cijena:</b> '.$cijena.' kn<br/>';
	
		
//DODAVANJE SLIKE

  //  $info = getimagesize($_FILES["slika"]["tmp_name"]);
     
                                 /*   $allowed_types = array(IMG_GIF, IMG_JPEG, IMG_PNG);
     
                                    if (in_array($info[2], $allowed_types))
                                      {
                                      if ($_FILES["slika"]["error"] > 0)
                                            {
                                            echo "Return Code: " . $_FILES["slika"]["error"] . "<br>";
                                            }
                                      else
                                            {
                                            /*echo "Upload: " . $_FILES["slika"]["name"] . "<br>";
                                            echo "Type: " . $_FILES["slika"]["type"] . "<br>";
                                            echo "Size: " . ($_FILES["slika"]["size"] / 1024) . " kB<br>";
                                            echo "Temp file: " . $_FILES["slika"]["tmp_name"] . "<br>";*/
     /*
                                            if (file_exists("upload/" . $_FILES["slika"]["name"]))
                                              {
                                              /*echo $_FILES["slika"]["name"] . " already exists. ";*/
                                      /*        }
                                            else
                                              {
                                              move_uploaded_file($_FILES["slika"]["tmp_name"],
                                              "upload/" . $_FILES["slika"]["name"]);
                                             /* echo "Stored in: " . "upload/" . $_FILES["slika"]["name"];*/
                                   /*           }
                                            }
                                      }
                                    else
                                      {
                                      echo "Invalid file";
                                      }
                                    ?>
                            <p id="skripta_img"><?php echo "<img src=" . "upload/" . $_FILES["slika"]["name"] . " height=\"300\" width=\"300\">" ?></p>


				*/			
							
	
	//spajanje na bazu 
	
	$baza = mysql_connect('localhost','root','root',"!!!!ime baze sa!!!d tu") or die("Neuspjelo spajanje na bazu!");
	
	
	//mysql_select_db("proizvodi") or die("Ne može");
	
	

	
	?>
	

	
	
		
  

</div>
    
    <br/>
    <hr/>
    <footer>
    <p>Kreirao: Matko Horvat</p>
    <p>Kontakt: mhorvat5@tvz.hr</p>
    <p>Kreirano 2014.</p>
		<img id="validacija" src="valid-html5.png" alt="HTML5 validacija">
    </footer>   

    
    
</body>
</html>




