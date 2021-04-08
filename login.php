                <h2 class="text-center">Login</h2>
                <form action="login_post.php" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="login-username"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="Username" name="username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="login-password"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password" id="login-password" aria-label="Password" aria-describedby="Password" name="password">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="remember-me" name="remember-me">
                        <label class="form-check-label" for="remember-me">
                            Remember me ?
                        </label>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Login</button>
                    </div>
                </form>