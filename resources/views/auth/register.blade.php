
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/registration.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Welcome to Rent Online Registration</title>
</head>
<body>
    <div class="container">
        <h1 class="well">Create an Account <a class="badge badge-success" style="font-size:12px;" href="{{route('login')}}">Have an Account?</a></h1>
        <div class="well">
            <form action="" method="get">
                <div class="text-center">
                    <label for="2" style="margin-right: 5em;"><input id="2" type="radio" value="2" name="role_type"> Rent Giver</label>
                    <label for="3"><input id="3" type="radio" value="3" name="role_type"> Rent Giver</label>
                </div>
        </div>
	    <div class="col-lg-12 well">
	        <div class="row">

					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Username</label>
								<input type="text" placeholder="Enter a Unique username Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Name</label>
								<input type="text" placeholder="Enter Name Here.." class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>NID Number</label>
							<input type="text" placeholder="Enter Valid NID Number Here.." class="form-control" required>
						</div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" placeholder="Enter Email Address Here.." class="form-control" required>
                        </div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Phone</label>
								<input type="text" placeholder="Enter Phone Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Upozila</label>
								<input type="text" placeholder="Enter Upozila Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>District</label>
								<input type="text" placeholder="Enter District Code Here.." class="form-control" required>
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" placeholder="Enter Password Here.." class="form-control" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Confirm Password</label>
								<input type="password" placeholder="Re-Enter Password Name Here.." class="form-control" required>
							</div>	
						</div>
                        <a href="{{url('/')}}" class="btn btn-primary">Go Back</a>
					    <button type="submit" class="btn btn-info pull-right">Create</button>					
					</div>
				</form> 
			</div>
	    </div>
	</div>
</body>
</html>
