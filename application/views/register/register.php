<div style="background-color:#f2f2f2;">
<div class="container">	
		<div class="w3-container" style="padding-top:10%;">
			<div class="col-md-6 col-md-offset-3 w3-card-2" style="background-color:#ffffff;padding: 50px;">
			  
			  
				<h3 class="text-center">
                    <strong>Register Here</strong>
                </h3></br></br>
            
              <form method="post" enctype="multipart/form-data" action="upload.php" id="register_form" role="form" class="form-horizontal">  
                 
                <div class="form-group">
                    <label class="col-md-3 text-right" for="email">Name:</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="fname" id="fname" placeholder="Name" required />
					</div>
				</div>
                  
                <div class="form-group">
                    <label class="col-md-3 text-right" for="pswd">Username:</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" required />
					</div>
                </div>
				 <div class="form-group">
                    <label class="col-md-3 text-right" for="email">DOB:</label>
					<div class="col-md-9">
						<input type="date" class="form-control" maxlength="10" name="dob" id="dob" required />
					</div>
				</div>
				<div class="form-group">
                    <label class="col-md-3 text-right" for="email">Email:</label>
					<div class="col-md-9">
						<input type="email" class="form-control" name="email" placeholder="Email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />
					</div>
				</div>
				 <div class="form-group">
                    <label class="col-md-3 text-right" for="email">Mobile:</label>
					<div class="col-md-9">
						<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" required />
					</div>
				</div>
				 <div class="form-group">
                    <label class="col-md-3 text-right" for="email">Password:</label>
					<div class="col-md-9">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
					</div>
				</div>
			    <div class="form-group">
                    <label class="col-md-3 text-right" for="email">Confirm Password:</label>
					<div class="col-md-9">
						<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required />
					</div>
				</div>
			    <div class="form-group">
                    <label class="col-md-3 text-right" for="gender">Gender:</label>
					<div class="col-md-9">
					<label class="radio-inline"><input type="radio" name="optradio" id="optradio" value="male" checked>Male</label>
					<label class="radio-inline"><input type="radio" name="optradio" id="optradio" value="female">Female</label>
					<label class="radio-inline"><input type="radio" name="optradio" id="optradio" value="respected">Respected</label>
					</div>
                </div>
				<div class="form-group">
                    <label class="col-md-3 text-right" for="profile_pic">Upload Profile Pic:</label>
					<div class="col-md-9">
					<input type="file" name="fileToUpload" id="fileToUpload" required />
					</div>
                </div>
				<button type="submit" class="btn btn-primary col-md-3 col-md-offset-7 text-right" id="submit" value="submit" name="register">
                    Register
				</button> 
				
              </form>
             </div>   
            
			</div>    
        </div>	
 <!-- Footer -->
        <footer>
            <div class="row text-center">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="www.flixmates.com">FLIXMATES</a> 2017</p>
                </div>
            </div>
        </footer>
        <br>
</div>
    </div>
    <!-- /.container -->	
	
</body>

</html>
