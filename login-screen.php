<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Loghy - Login</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/favicon.svg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
    	.login{
    		width: 100%;
    		height: 100vh;
    		align-items: center;
    		justify-content: center;
    		display: flex;
    	}
    </style>
</head>
<body style="background-color: #F2F2F2">
	<?php
        include 'div/nav.php'
    ?>
	<div class="login">
		<div class="container px-5">
			<div class="row">
				<div class = "col-lg-4 offset-lg-4">
					<div class="card h-100 shadow border-0">
						<div class="card-body">
							<form action="login.php" method="POST">
								<div>
									<div class="mb-3">
										<label>Usuário</label>
										<input type="text" name="usuario" class ="form-control">
									</div>
								</div>
								<div>
									<div class="mb-3">
										<label>Senha</label>
									<input type="password" name="usuario" class ="form-control">
								</div>
							</div>
							<div>
								<div class="mb-3">
									<button type="submit" class ="btn btn-primary">Login</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>