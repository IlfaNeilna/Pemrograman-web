<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpot" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Biostyle.css">
    <title>Biodata Ilfa</title>
    <style>
        h3{
            color: white;
            margin-top: 15px;
            text-align: justify;
            align-self: 15px;
        }
    </style> 
</head>
<body>

    <?php
    session_start ();
    if($_SESSION ['is_logged_in'] != True)
    {
        header("Location: ../form.php");
        exit();
    }
    ?>
    
    <div class="row">
        <!-- HEADER -->
        <div class="col-md-12" style="background-color:rgb(0, 84, 209) ; height: 80px;">
            <h1 style="color: azure; font-family:'Times New Roman', Times, serif ; align-content: center;">
                BIODATA ILFA NEILNA <?php echo $_SESSION ['username'] ?>
            </h1>
        </div>
        <div class="col-md-12" style="background-color: rgb(181, 191, 221);">
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="biodata.php">Biodata</a></li>
            <li><a href="jadwalKuliah.php">Jadwal Kuliah</a></li>
            <li><a href="logout.php">Logout</a></li>
        </div>
        <div class="col-md-12" style="background-color: rgb(3, 106, 175); bottom:1% ; height: 420px;">
           
            <div class="wrapper">
            <img src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA1LzM4OS1tai0xMDQwLWt1dC1leWUuanBn.jpg" alt="">        
            <div class="text-box">

                
                <h2>Biodata</h2>
            
            <p>
                Nama  : ILFA NEILNA <br>
                NIM   : A12.2022.06819 <br>
                Alamat: DEMAK <br>
                Email : 112202206819@mhs.dinus.ac.id
            </p>
             </div>
         </div>
    </div>
</div>
    
</body>
</html>