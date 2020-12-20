<?php
/*
perintah :
PENGGUNA
selectpgn 	= select pengguna
insertpgn 	= insert pengguna
updatepgn 	= update pengguna
deletepgn 	= delete pengguna

PRODUK
selectprdk	= select produk
insertprdk	= select produk
updateprdk	= select produk
deleteprdk	= select produk

KONTAK
selectkt	= select kontak
insertkt	= select kontak
updatekt	= select kontak
deletekt	= select kontak

Transaksi  


*/
error_reporting(0);
include "config.php";

$auth		= $_GET['auth']; //888
$perintah	= $_GET['perintah'];

/*pengguna var*/
$username	= $_GET['username'];
$password	= $_GET['password'];
$alamat		= $_GET['alamat'];
$email		= $_GET['email'];
$no_telp	= $_GET['no_telp'];

/*produk var*/
$idp		= $_GET['id_produk'];
$nama		= $_GET['nama_produk'];
$harga		= $_GET['harga'];

/*kontak var*/
$kontak		= $_GET['id_kontak'];
$namakt		= $_GET['nama'];
$emailkt	= $_GET['email'];
$tglkt		= $_GET['tgl'];
$no_telpon	= $_GET['no_telpon'];
$kritik		= $_GET['kritik'];

/*transaksi var */
$idt        = $_GET['id_transaksi'];
$iddet      = $_GET['id_detail'];
$jlmh       = $_GET['jumlah'];


if($auth == "888"){
    if (!empty($_GET) && $perintah=="loginadmin") {
        $return_arr = array();
        $sql = "SELECT * FROM admin where username='$username' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                $row_array['username']	=$row['username'];
                $row_array['password']	=$row['password'];
                
                array_push($return_arr,$row_array);
            }
            echo json_encode($return_arr);
        } else {
                echo "0 results";
        }
        
    }

if(!empty($_GET) && $perintah=="insertadmin"){

    $sql = "INSERT INTO admin (username, password ) VALUES ('".$username. "', '".$password."')";
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

    if (!empty($_GET) && $perintah=="login") {
        $return_arr = array();
        $sql = "SELECT * FROM pengguna where username='$username' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                $row_array['username']	=$row['username'];
                $row_array['password']	=$row['password'];
                
                array_push($return_arr,$row_array);
            }
            echo json_encode($return_arr);
        } else {
                echo "0 results";
        }
        
    }


    /*start Pengguna*/
if (!empty($_GET) && $perintah=="selectpgn") {
	$return_arr = array();
	$sql = "SELECT * FROM pengguna";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
	// output data of each row
        while($row = $result->fetch_assoc()) {
            $row_array['username']	=$row['username'];
			$row_array['password']	=$row['password'];
			$row_array['alamat']	=$row['alamat'];
			$row_array['email']		=$row['email'];
			$row_array['no_telp']	=$row['no_telp'];
            
            array_push($return_arr,$row_array);
        }
        echo json_encode($return_arr);
    } else {
            echo "0 results";
    }
	
}

if(!empty($_GET) && $perintah=="insertpgn"){

    $sql = "INSERT INTO pengguna (username, password, alamat, email, no_telp) VALUES ('". $username. "', '".$password."', '".$alamat."', '".$email."', '".$no_telp."')";
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}

if(!empty($_GET) && $perintah=="updatepgn"){

    $sql = "update pengguna set password='".$password."' where username='".$username."'";
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}

if(!empty($_GET) && $perintah=="deletepgn"){

    $sql = "delete from pengguna where username=".$username;
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "Record has been deleted";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}
/*end pengguna*/

/*start Produk*/
if (!empty($_GET) && $perintah=="selectprdk") {
	$return_arr = array();
	$sql = "SELECT id_produk, nama_produk, harga from produk";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
	// output data of each row
        while($row = $result->fetch_assoc()) {
            $row_array['id_produk'] = $row['id_produk'];
            $row_array['nama_produk'] = $row['nama_produk'];
            $row_array['harga'] = $row['harga'];
            
            array_push($return_arr,$row_array);
        }
        echo json_encode($return_arr);
    } else {
            echo "0 results";
    }
	
}

if(!empty($_GET) && $perintah=="insertprdk"){

    $sql = "INSERT INTO produk (id_produk, nama_produk, harga) VALUES ('','". $nama. "', '".$harga."')";
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}

if(!empty($_GET) && $perintah=="updateprdk"){

    $sql = "update produk set nama_produk='".$nama."' where id_produk='".$kode."'";
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}

if(!empty($_GET) && $perintah=="deleteprdk"){

    $sql = "delete from produk where id_produk=".$kode;
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "Record has been deleted";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}
/*end produk*/

/*start Kontak*/
if (!empty($_GET) && $perintah=="selectkt") {
	$return_arr = array();
	$sql = "SELECT nama, email, tgl, no_telpon, kritik from kontak";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
	// output data of each row
        while($row = $result->fetch_assoc()) {
            $row_array['nama']		= $row['nama'];
			$row_array['email'] 	= $row['email'];
			$row_array['tgl']		= $row['tgl'];
            $row_array['no_telpon']	= $row['no_telpon'];
            $row_array['kritik']	= $row['kritik'];
            
            array_push($return_arr,$row_array);
        }
        echo json_encode($return_arr);
    } else {
            echo "0 results";
    }
	
}

if(!empty($_GET) && $perintah=="insertkt"){

    $sql = "INSERT INTO kontak (id_kontak, nama, email, tgl, no_telpon, kritik) VALUES ('','". $namakt. "', '".$emailkt."', '".$tglkt."', '".$no_telpon."', '".$kritik."')";
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}

if(!empty($_GET) && $perintah=="updatekt"){

    $sql = "update kontak set kritik='".$kritk."' where id_kontak='".$kontak."'";
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}

if(!empty($_GET) && $perintah=="deletekt"){

    $sql = "delete from kontak where id_kontak=".$kontak;
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "Record has been deleted";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}
/*end kontak*/

/*Start Transkasi*/
if(!empty($_GET) && $perintah=="insert"){

    $sql    = "INSERT INTO transaksi (id_transaksi, username, tgl) VALUES ('".$idt."','".$username."', '".$tglkt."')";
    echo"<br>";
    $sql2   = "INSERT INTO det_transaksi (id_detail, id_transaksi, id_produk, harga, jumlah) VALUES ('".$iddet."','".$idt."','".$idp."','".$harga."','".$jlmh."')";
    echo"<br>";
    echo $sql;
    echo $sql2;

        if (mysqli_query($conn,$sql)) {
            echo "<br>";
            echo "New record created successfully";
        }
        if (mysqli_query($conn,$sql2)) {
            echo "<br>";
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
        }
}

if(!empty($_GET) && $perintah=="update"){

    $sql    = "update transaksi set tgl='".$tgl."', username='".$username."' where id_transaksi='".$idt."'";
    echo"<br>";
    echo $sql;

        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


}

if(!empty($_GET) && $perintah=="update2"){

    $sql    = "update det_transaksi set id_produk='".$idp."' ,harga='".$harga."', jumlah='".$jlmh."' where id_detail='".$iddet."'";
    echo"<br>";
    echo $sql;

        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


}


if(!empty($_GET) && $perintah=="delete"){

    $sql    = "DELETE det_transaksi,transaksi FROM det_transaksi LEFT JOIN transaksi ON det_transaksi.id_transaksi = transaksi.id_transaksi WHERE det_transaksi.id_transaksi ='".$idt."'";
    echo"<br>";
    echo $sql;

        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "Record has been deleted";
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


}
if(!empty($_GET) && $perintah=="select"){

$return_arr = array();
$username   = 'art';
$sql        = "SELECT * from pengguna,produk,transaksi,det_transaksi where pengguna.username=transaksi.username and transaksi.id_transaksi=det_transaksi.id_transaksi and produk.id_produk=det_transaksi.id_produk and pengguna.username='".$username."'";
$result     = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    
            $row_array['id_transaksi'] = $row['id_transaksi'];
            $row_array['username'] = $row['username'];
            $row_array['nama_produk'] = $row['nama_produk'];
            $row_array['jumlah'] = $row['jumlah'];
            $row_array['harga'] = $row['harga'];
            $row_array['tgl'] = $row['tgl'];

            array_push($return_arr,$row_array);
        }
        echo json_encode($return_arr);
    } 
    else {
            echo "0 results";
    }
}
/*end Transaksi*/

$conn->close();

}
?>