<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monitoring Ketinggian dan Volume Air Pada Wadah Berbasis Web</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">
            .wadah {
                border-style: solid ;
                width: 300px;
                height: 400px;
                left: 50%;
                transform: translate(-50%);
                position: sticky;
                border-bottom-left-radius: 30px;
                border-bottom-right-radius: 30px;
            }

            .air {
                left: 50%;
                bottom: 0px;
                transform: translate(-50%);
                position: absolute;
                border-bottom-left-radius: 30px;
                border-bottom-right-radius: 30px;
                background-color: blue;
            }

            .penutup {
                border-style: solid ;
                width: 300px;
                height: 40px;
                left: 50%;
                transform: translate(-50%);
                position: sticky;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
            }

            .pegangan {
                border-style: solid ;
                width: 50px;
                height: 20px;
                left: 50%;
                transform: translate(-50%);
                position: sticky;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
            }
    </style>

    </style>

    <!-- ajax untuk proses realtime -->
    <script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $("#data").load('data.php')
        }, 1000);
    });
        </script>

</head>
<body>

	<!-- Tampilan Aplikasi -->
	<div class="container" style="text-align: center;">
		<img src="images/pixlr-bg-result.png" style="width: 150px">
		<h3>Sistem Pendeteksi Ketinggian dan Volume Air Pada Wadah <br> Berbasis Web</h3>
		<div class="row justify-content-center">
   		 <h5 class="text-center" style="font-size: 20px;">Wadah Air (Tinggi Max 3 M)</h5>
		</div>
		
        <div id="data"></div>

	<div class="row justify-content-center">
    <h5 class="text-center">Henita Gultom (202113016)<br> Romi Irawan (202113030) <br> Yetty Vianney (202113035)</h5>
	</div>
</body>
</html>