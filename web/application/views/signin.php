
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php echo form_open('Sign_in'); ?>
        
            <div class="container">
                <h1>Log in</h1>
                <p>If you have an account with us please log in.</p>
                
                <p>If you do not have an account <a href="<?php echo base_url('/index.php/Sign_up')?>">Sign up</a>.</p>
               
                <div class="form-group">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="email" required>
                </div>

                <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter your Email" name="email" required>
                </div>

                <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                </div>

                
                <button type="submit" class="loginbtn">Login</button>
                <br>
                
                
                <div style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="password">Forgot <a href="#">password?</a></span>
                </div>
            </div>
            
            
        </form>





        </div>
    </div>

</div>

