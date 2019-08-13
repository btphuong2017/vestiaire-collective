<div id="authModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="row mx-0">
                    <div class="col-md-6 px-0">
                        <div class="modal-visual-container" id="visualContainer">
                            <div class="visual-content">
                                <img src="{{ frontend('images/logo--white.svg') }}" alt="Logo">
                                <div class="visual-content-subtitle">AUTHENTICATED PRE OWNED LUXURY FASHION</div>
                                <div class="visual-content-tagline">Give your wardrobe a second life</div>
                                <div class="visual-content-mobile d-block d-md-none">
                                    <button type="button" class="visual-signup-btn" id="button-mobile-signup">Sign
                                        up</button>
                                    <button type="button" class="visual-login-btn"
                                        id="button-mobile-signin">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="modal-action-container signin-container" id="signinContainer">
                            <h3 class="signin-title">Login</h3>
                            <div class="signin-form">
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="input-label signin-input" id="login-user-email"
                                            placeholder="Email*" spellcheck="false" required data-validate="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="input-label signin-input" id="login-user-password"
                                            placeholder="Password*" spellcheck="false" required
                                            data-validate="password" />
                                    </div>
                                    <div class="form-group signin-options">
                                        <div class="signin-checkbox">
                                            <input type="checkbox" id="signin-checkbox" class="d-none" />
                                            <label for="signin-checkbox">Remember me </label>
                                        </div>
                                        <div class="signin-button-forgot">
                                            <button type="button" class="signin-forgot-password"
                                                id="button-forgot-password">
                                                Forgot password
                                            </button>
                                        </div>
                                    </div>
                                    <button type="submit" class="signin-submit">
                                        Login
                                    </button>
                                </form>
                                <div class="signin-or">or</div>
                                <div class="signin-facebook">
                                    <button type="button" id="btn-signin-facebook" class="signin-button-facebook">
                                        <span class="signin-button-icon">
                                            <svg _ngcontent-c65="" class="svg_logo_facebook" viewBox="0 0 107.5 207.1">
                                                <g _ngcontent-c65="">
                                                    <path _ngcontent-c65="" d="M88,34.4l19.5,0V1.4C104.2,1,92.6,0,79.1,0C51,0,31.8,17.2,31.8,48.7v27.1H0v36.8h31.8v94.5l38,0v-94.5h31.7l4.7-36.8H69.8
                                                                    V52.3C69.8,41.6,72.8,34.4,88,34.4z"
                                                        fill="currentColor">
                                                    </path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="signin-button-text">
                                            Login in with Facebook
                                        </span>
                                    </button>
                                </div>
                                <div class="signin-register">
                                    <button type="button" class="signin-button-register" id="button-create-account">
                                        Create an account
                                    </button>
                                </div>
                                <div class="signin-recommended">
                                    <span>Recommended by</span>
                                    <span>
                                        <svg class="svg_logo_vogue" viewBox="0 0 61.23 15.9">
                                            <title>Vogue</title>
                                            <path
                                                d="M54.2,0.68H56a4.23,4.23,0,0,1,4.21,2.61,6.11,6.11,0,0,1,.55,2.64,0.09,0.09,0,0,0,.11,0V0.52h-14a0.25,0.25,0,0,0,0,.07,0.1,0.1,0,0,0,0,.09H48.4c0.11,0,.16,0,0.16.09V11.69a3.63,3.63,0,0,1-1.31,3.05,4.19,4.19,0,0,1-2.56.87,2.84,2.84,0,0,1-2.29-.92,3.34,3.34,0,0,1-.75-2.24V0.89c0-.16.11-0.23,0.35-0.21h1.17a0.19,0.19,0,0,0,0-.16h-5.5a0.11,0.11,0,0,0,0,.07,0.08,0.08,0,0,0,0,.09h1.17a0.22,0.22,0,0,1,.28.2V11c0,3.18,1.85,4.76,5.55,4.74h0a4.29,4.29,0,0,0,2.64-.91,3.8,3.8,0,0,0,1.37-3.18V0.77c0-.07.05-0.11,0.16-0.09h2.43a0.13,0.13,0,0,1,.18.09V15.2c0,0.05-.05.09-0.18,0.09h-1.1s0,0.05,0,.09a0.4,0.4,0,0,0,0,.07h11V9.64l-0.07,0-0.07,0a6.76,6.76,0,0,1-.6,2.84,4.57,4.57,0,0,1-4.54,2.79H54.2c-0.12,0-.18-0.05-0.18-0.11V7.89c0-.07.05-0.11,0.18-0.09h0.53a2.43,2.43,0,0,1,2.4,1.47,4,4,0,0,1,.37,1.53,0,0,0,1,0,.07,0V4.69l-0.05,0a0.09,0.09,0,0,0-.07,0,3,3,0,0,1-.25,1.47,2.36,2.36,0,0,1-2.4,1.47H54.2c-0.12,0-.18,0-0.18-0.11V0.77C54,0.7,54.07.66,54.2,0.68Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M4.31,0.68h1.1a0.19,0.19,0,0,0,0-.09,0.25,0.25,0,0,0,0-.07H0A0.1,0.1,0,0,0,0,.61,0.07,0.07,0,0,0,0,.68h1.3a0.15,0.15,0,0,1,.14,0,0.37,0.37,0,0,1,.11.21c0.07,0.21.73,2,2,5.43q2.18,5.86,3.28,9.05L6.9,15.52C10,5.85,11.57,1,11.59.93a0.29,0.29,0,0,1,.07-0.2A0.53,0.53,0,0,1,11.94.68H13a0.19,0.19,0,0,0,0-.16H10.12a0.19,0.19,0,0,0,0,.16h1.21a0.12,0.12,0,0,1,.12.14L11.39,1S10.26,4.5,8,11.44a0.29,0.29,0,0,1-.12-0.21C5.36,4.32,4.1.86,4.08,0.84S4.1,0.66,4.31.68Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M0.94,1.89A0.45,0.45,0,0,0,1,1.59,0.4,0.4,0,0,0,.94,1.3a0.39,0.39,0,0,0-.3-0.12,0.35,0.35,0,0,0-.28.12,0.35,0.35,0,0,0-.12.28,0.39,0.39,0,0,0,.12.3A0.4,0.4,0,0,0,.64,2,0.45,0.45,0,0,0,.94,1.89ZM1,1.59A0.36,0.36,0,0,1,.64,2,0.39,0.39,0,0,1,.37,1.85,0.29,0.29,0,0,1,.28,1.59,0.33,0.33,0,0,1,.37,1.32,0.31,0.31,0,0,1,.64,1.23a0.29,0.29,0,0,1,.27.09A0.43,0.43,0,0,1,1,1.59Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M0.69,1.6A0.09,0.09,0,0,0,.8,1.5c0-.09,0-0.12-0.14-0.12H0.51V1.82h0V1.6H0.64L0.78,1.82h0Zm-0.07,0H0.53V1.41H0.66a0.09,0.09,0,0,1,.11.09C0.76,1.55.73,1.59,0.62,1.59Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M20.2,0.75A5.23,5.23,0,0,0,17.82.17a4.78,4.78,0,0,0-2.4.62,6.7,6.7,0,0,0-2.09,1.69,8.55,8.55,0,0,0-2,5.43,8.74,8.74,0,0,0,.53,3,8.08,8.08,0,0,0,1.4,2.47,6.57,6.57,0,0,0,2.06,1.67,5.28,5.28,0,0,0,2.45.62,5.13,5.13,0,0,0,2.36-.6,7.42,7.42,0,0,0,2.09-1.67,8.47,8.47,0,0,0,1.51-2.48,8,8,0,0,0,.59-3,7.88,7.88,0,0,0-2-5.54A6.52,6.52,0,0,0,20.2.75Zm0.69,1.81a15.63,15.63,0,0,1,.71,5.27,16.48,16.48,0,0,1-.71,5.43,3.12,3.12,0,0,1-3.05,2.31,3.11,3.11,0,0,1-3.16-2.24,16.84,16.84,0,0,1-.62-5.5c0-5,1.24-7.56,3.74-7.56A3.16,3.16,0,0,1,20.89,2.56Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M36.2,0.13s-0.05,0-.09,0A0.21,0.21,0,0,0,36,.24a2.14,2.14,0,0,1-1,.62A1.81,1.81,0,0,1,34.09.75L33,0.36A4.07,4.07,0,0,0,31.62.1a3.77,3.77,0,0,0-2.06.59A6.73,6.73,0,0,0,27.63,2.4a9.15,9.15,0,0,0-1.46,2.52A8.78,8.78,0,0,0,25.59,8a8.45,8.45,0,0,0,1.76,5.43A6.28,6.28,0,0,0,29.23,15a4.78,4.78,0,0,0,2.24.66,3.93,3.93,0,0,0,1.7-.25l0.78-.34a8.07,8.07,0,0,1,1.21-.44,1.58,1.58,0,0,1,1.4.11,1.09,1.09,0,0,1,.51.69s0.07,0,.07,0V9.38c0-.07.05-0.11,0.16-0.09h1.15a0.78,0.78,0,0,0,0-.09s0-.05,0-0.07H33.22a0.13,0.13,0,0,0,0,.07,0.09,0.09,0,0,0,0,.07h1.22c0.16,0,.23,0,0.23.09v3.53a2.37,2.37,0,0,1-1.44,2.38,4.26,4.26,0,0,1-2,.27q-2.85-.32-2.89-7.67A16.13,16.13,0,0,1,29,2.44c0.55-1.54,1.49-2.27,2.79-2.2s2.54,0.92,3.41,2.59a9.1,9.1,0,0,1,.67,1.74l0.23,0.87c0.07,0,.11,0,0.11,0Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg class="svg_logo_glamour" viewBox="0 0 65.04 14.86">
                                            <title>Glamour</title>
                                            <polygon fill="currentColor"
                                                points="12.46 0 9.5 0 9.5 14.63 15.25 14.63 15.25 11.99 12.44 11.99 12.46 0">
                                            </polygon>
                                            <path
                                                d="M22.06,0H19L15.54,14.63H18.1l0.71-3.2h3l0.57,3.2h2.91ZM19.17,9.15l1.16-5.52,1.19,5.5Z"
                                                fill="currentColor"></path>
                                            <polyline fill="currentColor"
                                                points="25.14 14.63 25.14 0 29.49 0 31.14 9.67 33.12 0 37.1 0 37.1 14.63 34.2 14.63 34.2 4.16 31.83 14.63 30.03 14.63 27.66 4.13 27.66 4.13 27.66 14.63">
                                            </polyline>
                                            <path
                                                d="M46.61,7.27c0-7.32-3.83-7.5-4.56-7.47S37.49,0,37.49,7.27c0,0-.36,8.11,4.56,7.65C47,15.39,46.61,7.27,46.61,7.27Zm-3.3,3.48s-0.21,1.59-1.23,1.62H42c-1,0-1.23-1.62-1.23-1.62-0.15-.48-0.09-5.85-0.09-5.85,0.1-2.13,1-2.46,1.35-2.51h0c0.33,0,1.25.38,1.35,2.51C43.4,4.91,43.46,10.27,43.31,10.75Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M51.61,12.43A1.36,1.36,0,0,0,53,10.81V0h2.82V9.82S56.5,15.16,51.73,15H51.25c-4.77.18-4.11-5.16-4.11-5.16V0H50V10.81a1.36,1.36,0,0,0,1.41,1.62h0.24Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M62.94,8.38A4.23,4.23,0,0,0,64.89,4.1,3.79,3.79,0,0,0,60.78,0H56.53V14.63h2.85V9h1L62,14.63h3ZM59.38,6.52V2.33s2.79-.6,2.58,2.28C62,4.61,62.19,6.94,59.38,6.52Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M6.5,5.15H8.87S9.32-.46,4.79-0.22c0,0-4.47-.15-4.77,6.8,0,0-.6,8.12,4.11,8.27A3.33,3.33,0,0,0,7.4,13l0.39,1.63H9V7H4.7V9.22H6.44S6.86,12.4,4.7,12.28c0,0-1.68.6-1.77-5,0,0-.15-5,2-5.13C4.94,2.18,6.74,2.21,6.5,5.15Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="forgotPasswordContainer" class="modal-action-container forgot-password-container">
                            <h3 class="forgot-password-title">Forgotten Password</h3>
                            <p class="forgot-password-description">Enter your email. An email to reset your password
                                will be sent.</p>
                            <form class="forgot-password-form" action="">
                                <div class="form-group">
                                    <input type="text" class="input-label" id="forgot-password-email"
                                        placeholder="Email*" required data-validate="email" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-confirm-email">Confirm</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-action-container signup-container" id="signupContainer">
                            <h3 class="signup-title">Join our community</h3>
                            <p class="signup-discount">Get $20 off your first order</p>
                            <div class="signup-form-area">
                                <div class="signup-form">
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" class="input-label signup-email" required
                                                id="signup-input-email" placeholder="Email" spellcheck="false"
                                                data-validate="email" />
                                        </div>
                                        <span>* Required field</span>
                                        <button type="submit" class="signin-submit">
                                            Join the community
                                        </button>
                                    </form>

                                </div>
                                <div class="signup-or">or</div>
                                <div class="signup-facebook">
                                    <button type="button" id="btn-signup-facebook" class="signup-button-facebook">
                                        <span class="signup-button-icon">
                                            <svg _ngcontent-c65="" class="svg_logo_facebook" viewBox="0 0 107.5 207.1">
                                                <g _ngcontent-c65="">
                                                    <path _ngcontent-c65="" d="M88,34.4l19.5,0V1.4C104.2,1,92.6,0,79.1,0C51,0,31.8,17.2,31.8,48.7v27.1H0v36.8h31.8v94.5l38,0v-94.5h31.7l4.7-36.8H69.8
                                                                                    V52.3C69.8,41.6,72.8,34.4,88,34.4z"
                                                        fill="currentColor">
                                                    </path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="signup-button-text">
                                            Sign up with Facebook
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="signup-register-offer">
                                <div class="signup-checkbox">
                                    <input type="checkbox" id="checkbox-offer" class="d-none" />
                                    <label for="checkbox-offer">Receive offers and news from Vestiaire Collective
                                    </label>
                                </div>
                            </div>
                            <div class="signup-login">
                                <button type="button" class="signup-button-login" id="button-signin-modal">
                                    Log in
                                </button>
                            </div>
                            <div class="signup-recommended">
                                <span>Recommended by</span>
                                <span>
                                    <svg class="svg_logo_vogue" viewBox="0 0 61.23 15.9">
                                        <title>Vogue</title>
                                        <path
                                            d="M54.2,0.68H56a4.23,4.23,0,0,1,4.21,2.61,6.11,6.11,0,0,1,.55,2.64,0.09,0.09,0,0,0,.11,0V0.52h-14a0.25,0.25,0,0,0,0,.07,0.1,0.1,0,0,0,0,.09H48.4c0.11,0,.16,0,0.16.09V11.69a3.63,3.63,0,0,1-1.31,3.05,4.19,4.19,0,0,1-2.56.87,2.84,2.84,0,0,1-2.29-.92,3.34,3.34,0,0,1-.75-2.24V0.89c0-.16.11-0.23,0.35-0.21h1.17a0.19,0.19,0,0,0,0-.16h-5.5a0.11,0.11,0,0,0,0,.07,0.08,0.08,0,0,0,0,.09h1.17a0.22,0.22,0,0,1,.28.2V11c0,3.18,1.85,4.76,5.55,4.74h0a4.29,4.29,0,0,0,2.64-.91,3.8,3.8,0,0,0,1.37-3.18V0.77c0-.07.05-0.11,0.16-0.09h2.43a0.13,0.13,0,0,1,.18.09V15.2c0,0.05-.05.09-0.18,0.09h-1.1s0,0.05,0,.09a0.4,0.4,0,0,0,0,.07h11V9.64l-0.07,0-0.07,0a6.76,6.76,0,0,1-.6,2.84,4.57,4.57,0,0,1-4.54,2.79H54.2c-0.12,0-.18-0.05-0.18-0.11V7.89c0-.07.05-0.11,0.18-0.09h0.53a2.43,2.43,0,0,1,2.4,1.47,4,4,0,0,1,.37,1.53,0,0,0,1,0,.07,0V4.69l-0.05,0a0.09,0.09,0,0,0-.07,0,3,3,0,0,1-.25,1.47,2.36,2.36,0,0,1-2.4,1.47H54.2c-0.12,0-.18,0-0.18-0.11V0.77C54,0.7,54.07.66,54.2,0.68Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M4.31,0.68h1.1a0.19,0.19,0,0,0,0-.09,0.25,0.25,0,0,0,0-.07H0A0.1,0.1,0,0,0,0,.61,0.07,0.07,0,0,0,0,.68h1.3a0.15,0.15,0,0,1,.14,0,0.37,0.37,0,0,1,.11.21c0.07,0.21.73,2,2,5.43q2.18,5.86,3.28,9.05L6.9,15.52C10,5.85,11.57,1,11.59.93a0.29,0.29,0,0,1,.07-0.2A0.53,0.53,0,0,1,11.94.68H13a0.19,0.19,0,0,0,0-.16H10.12a0.19,0.19,0,0,0,0,.16h1.21a0.12,0.12,0,0,1,.12.14L11.39,1S10.26,4.5,8,11.44a0.29,0.29,0,0,1-.12-0.21C5.36,4.32,4.1.86,4.08,0.84S4.1,0.66,4.31.68Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M0.94,1.89A0.45,0.45,0,0,0,1,1.59,0.4,0.4,0,0,0,.94,1.3a0.39,0.39,0,0,0-.3-0.12,0.35,0.35,0,0,0-.28.12,0.35,0.35,0,0,0-.12.28,0.39,0.39,0,0,0,.12.3A0.4,0.4,0,0,0,.64,2,0.45,0.45,0,0,0,.94,1.89ZM1,1.59A0.36,0.36,0,0,1,.64,2,0.39,0.39,0,0,1,.37,1.85,0.29,0.29,0,0,1,.28,1.59,0.33,0.33,0,0,1,.37,1.32,0.31,0.31,0,0,1,.64,1.23a0.29,0.29,0,0,1,.27.09A0.43,0.43,0,0,1,1,1.59Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M0.69,1.6A0.09,0.09,0,0,0,.8,1.5c0-.09,0-0.12-0.14-0.12H0.51V1.82h0V1.6H0.64L0.78,1.82h0Zm-0.07,0H0.53V1.41H0.66a0.09,0.09,0,0,1,.11.09C0.76,1.55.73,1.59,0.62,1.59Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M20.2,0.75A5.23,5.23,0,0,0,17.82.17a4.78,4.78,0,0,0-2.4.62,6.7,6.7,0,0,0-2.09,1.69,8.55,8.55,0,0,0-2,5.43,8.74,8.74,0,0,0,.53,3,8.08,8.08,0,0,0,1.4,2.47,6.57,6.57,0,0,0,2.06,1.67,5.28,5.28,0,0,0,2.45.62,5.13,5.13,0,0,0,2.36-.6,7.42,7.42,0,0,0,2.09-1.67,8.47,8.47,0,0,0,1.51-2.48,8,8,0,0,0,.59-3,7.88,7.88,0,0,0-2-5.54A6.52,6.52,0,0,0,20.2.75Zm0.69,1.81a15.63,15.63,0,0,1,.71,5.27,16.48,16.48,0,0,1-.71,5.43,3.12,3.12,0,0,1-3.05,2.31,3.11,3.11,0,0,1-3.16-2.24,16.84,16.84,0,0,1-.62-5.5c0-5,1.24-7.56,3.74-7.56A3.16,3.16,0,0,1,20.89,2.56Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M36.2,0.13s-0.05,0-.09,0A0.21,0.21,0,0,0,36,.24a2.14,2.14,0,0,1-1,.62A1.81,1.81,0,0,1,34.09.75L33,0.36A4.07,4.07,0,0,0,31.62.1a3.77,3.77,0,0,0-2.06.59A6.73,6.73,0,0,0,27.63,2.4a9.15,9.15,0,0,0-1.46,2.52A8.78,8.78,0,0,0,25.59,8a8.45,8.45,0,0,0,1.76,5.43A6.28,6.28,0,0,0,29.23,15a4.78,4.78,0,0,0,2.24.66,3.93,3.93,0,0,0,1.7-.25l0.78-.34a8.07,8.07,0,0,1,1.21-.44,1.58,1.58,0,0,1,1.4.11,1.09,1.09,0,0,1,.51.69s0.07,0,.07,0V9.38c0-.07.05-0.11,0.16-0.09h1.15a0.78,0.78,0,0,0,0-.09s0-.05,0-0.07H33.22a0.13,0.13,0,0,0,0,.07,0.09,0.09,0,0,0,0,.07h1.22c0.16,0,.23,0,0.23.09v3.53a2.37,2.37,0,0,1-1.44,2.38,4.26,4.26,0,0,1-2,.27q-2.85-.32-2.89-7.67A16.13,16.13,0,0,1,29,2.44c0.55-1.54,1.49-2.27,2.79-2.2s2.54,0.92,3.41,2.59a9.1,9.1,0,0,1,.67,1.74l0.23,0.87c0.07,0,.11,0,0.11,0Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span>
                                    <svg class="svg_logo_glamour" viewBox="0 0 65.04 14.86">
                                        <title>Glamour</title>
                                        <polygon fill="currentColor"
                                            points="12.46 0 9.5 0 9.5 14.63 15.25 14.63 15.25 11.99 12.44 11.99 12.46 0">
                                        </polygon>
                                        <path
                                            d="M22.06,0H19L15.54,14.63H18.1l0.71-3.2h3l0.57,3.2h2.91ZM19.17,9.15l1.16-5.52,1.19,5.5Z"
                                            fill="currentColor"></path>
                                        <polyline fill="currentColor"
                                            points="25.14 14.63 25.14 0 29.49 0 31.14 9.67 33.12 0 37.1 0 37.1 14.63 34.2 14.63 34.2 4.16 31.83 14.63 30.03 14.63 27.66 4.13 27.66 4.13 27.66 14.63">
                                        </polyline>
                                        <path
                                            d="M46.61,7.27c0-7.32-3.83-7.5-4.56-7.47S37.49,0,37.49,7.27c0,0-.36,8.11,4.56,7.65C47,15.39,46.61,7.27,46.61,7.27Zm-3.3,3.48s-0.21,1.59-1.23,1.62H42c-1,0-1.23-1.62-1.23-1.62-0.15-.48-0.09-5.85-0.09-5.85,0.1-2.13,1-2.46,1.35-2.51h0c0.33,0,1.25.38,1.35,2.51C43.4,4.91,43.46,10.27,43.31,10.75Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M51.61,12.43A1.36,1.36,0,0,0,53,10.81V0h2.82V9.82S56.5,15.16,51.73,15H51.25c-4.77.18-4.11-5.16-4.11-5.16V0H50V10.81a1.36,1.36,0,0,0,1.41,1.62h0.24Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M62.94,8.38A4.23,4.23,0,0,0,64.89,4.1,3.79,3.79,0,0,0,60.78,0H56.53V14.63h2.85V9h1L62,14.63h3ZM59.38,6.52V2.33s2.79-.6,2.58,2.28C62,4.61,62.19,6.94,59.38,6.52Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M6.5,5.15H8.87S9.32-.46,4.79-0.22c0,0-4.47-.15-4.77,6.8,0,0-.6,8.12,4.11,8.27A3.33,3.33,0,0,0,7.4,13l0.39,1.63H9V7H4.7V9.22H6.44S6.86,12.4,4.7,12.28c0,0-1.68.6-1.77-5,0,0-.15-5,2-5.13C4.94,2.18,6.74,2.21,6.5,5.15Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="signup-learnmore">
                                <a href="#">Learn more about my data </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="magnifierGlassModal" class="modal fade" data-state="close">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="carousel slide magnifier-glass-slider" data-ride="carousel" id="magnifierGlassSlider"
                data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ frontend('images/demo-slide-1.jpg') }}" alt="Demo" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ frontend('images/demo-slide-2.jpg') }}" lat="Demo" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ frontend('images/demo-slide-2.jpg') }}" lat="Demo" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ frontend('images/demo-slide-2.jpg') }}" lat="Demo" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ frontend('images/demo-slide-2.jpg') }}" lat="Demo" />
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#magnifierGlassSlider" data-slide-to="0" class="active">
                        <img src="{{ frontend('images/demo-slide-1.jpg') }}" alt="Demo" />
                    </li>
                    <li data-target="#magnifierGlassSlider" data-slide-to="1">
                        <img src="{{ frontend('images/demo-slide-2.jpg') }}" alt="Demo" />
                    </li>
                    <li data-target="#magnifierGlassSlider" data-slide-to="2">
                        <img src="{{ frontend('images/demo-slide-2.jpg') }}" alt="Demo" />
                    </li>
                    <li data-target="#magnifierGlassSlider" data-slide-to="3">
                        <img src="{{ frontend('images/demo-slide-2.jpg') }}" alt="Demo" />
                    </li>
                    <li data-target="#magnifierGlassSlider" data-slide-to="4">
                        <img src="{{ frontend('images/demo-slide-2.jpg') }}" alt="Demo" />
                    </li>
                </ol>
                <a class="carousel-control-prev" href="#magnifierGlassSlider" role="button" data-slide="prev">
                    <span></span>
                </a>
                <a class="carousel-control-next" href="#magnifierGlassSlider" role="button" data-slide="next">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</div>
