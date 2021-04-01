                <h2 class="text-center">Register</h2>
                <form action="signup_post.php" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="signup-email"><i class="fas fa-at"></i></span>
                        <input type="text" class="form-control" placeholder="Give us your email" aria-label="email" aria-describedby="email" name="email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="signup-username"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Choose your username" aria-label="Username" aria-describedby="Username" name="username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="signup-password-1"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Choose a password" id="signup-password" aria-label="Password" aria-describedby="Password" name="password">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="signup-password-2"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Repeat your password" id="signup-password" aria-label="Password" aria-describedby="Password" name="confirm">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Sign-up</button>
                    </div>
                </form>