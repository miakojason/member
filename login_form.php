<!doctype html>
<html lang="en">
  <head>
  	<title>會員登入</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
        input[type='text'],
        input[type='password']{
            outline: none;
        }
    </style>
	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<?php include "./include/header.php"?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">海賊登入系統</h2>
				</div>
				</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">你是海賊朝八嗎?</h3>
				  <?php
                if(isset($_GET['error'])){
                    echo "<span style='color:red'>";
                    echo $_GET['error'];
                    echo "</span>";
                }

            ?>
		      	<form action="./api/login.php" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input id="acc" type="text" name="acc" class="form-control" placeholder="哥蒙~哥萌~弄" required>
		      		</div>
	            <div class="form-group">
	              <input id="pw" type="text" name="pw" class="form-control" placeholder="狗眼米霍克" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-1 my-1">送出</button>
					<button type="reset" class="form-control btn btn-primary submit px-1 my-1">重置</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">記住這個朝八<!-- Remember Me -->
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">忘了哪個村的朝八<!--Forgot Password--></a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; 你白吊打，井底之瓜~瓜瓜瓜 &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> 非死不可</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>踢登你</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<?php include "./include/footer.php";?>
<!-- ---------------------------------------- -->
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- --------------------------------------------------- -->
	</body>
</html>

