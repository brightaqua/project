
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php echo form_open('Sign_up/get_data'); ?>
        
            <div class="container">
                <h1>Create new account</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <div class="form-group">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="username" required>
                </div>

                <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter your Email" name="email" required>
                </div>

                <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                </div>

                <div class="form-group">
                <label for="tele_number"><b>Telephone Number</b></label>
                <input type="tele" placeholder="Enter your telephone number" name="tele_number" required>
                </div>

                <br>
                

                <div class="form-group">
                <label for="address"><b>Address</b></label>
                <input type="text" placeholder="Enter your current Address" name="address" required>
                </div>

                <hr>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <button type="submit" class="registerbtn">Submit</button>
            </div>
            
            <div class="container signin">
                <p>Already have an account? <a href="<?php echo base_url('/index.php/Sign_in')?>">Sign in</a>.</p>
            </div>
        </form>





        </div>
    </div>

</div>


