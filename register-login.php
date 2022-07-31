<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css" rel="stylesheet">
    <!-- flowbite -->
    <script src="./node_modules/flowbite/dist/flowbite.js"></script>



    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./resources/css/registration.css">
    <title>Reservoir | Registration</title>
</head>

<body class="font-Poppins" style="background-color: #f6f5f7;">
    <?php include('resources/views/layouts/navigation.php'); ?>
    <br>
    <br>
    <div>
        <h2 class="text-center  flex items-center flex-col mb-4 text-2xl font-extrabold tracking-tight text-slate-600">Welcome to Reservoir! Register Here</h2>
    </div>
    <div class="container  justify-center bg-[#FFF] rounded-[10px] shadow-md relative overflow-hidden w-[768px] max-w-full min-h-[480px]" id="container">

        <div class="form-container sign-up-container">
            <!-- sign up form -->
            <form class="bg-[#FFFFFF] flex items-center justify-center flex-col py-0 px-[50px] h-full text-center" action="#">
                <h1 class="font-bold m-0">Create Account</h1>
                <div class="social-container">
                    <a class="text-[#333] no-underline my-[15px] mx-[0]" href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-[#333] no-underline my-[15px] mx-[0]" href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a class="text-[#333] no-underline my-[15px] mx-[0]" href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span class="text-[12px]">or use your email for registration</span>
                <input class="bg-[#eee] border-none py-[12px] px-[15px] my-[8px] mx-[0] w-full" type="text" placeholder="Name" />
                <input class="bg-[#eee] border-none py-[12px] px-[15px] my-[8px] mx-[0] w-full" type="email" placeholder="Email" />
                <input class="bg-[#eee] border-none py-[12px] px-[15px] my-[8px] mx-[0] w-full" type="password" placeholder="Password" />
                <button class="px-[45px] py-[12px] btn btn-blue hover:bg-reservoir-white hover:text-black">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <!-- sign in form -->
            <form class="bg-[#FFFFFF] flex items-center justify-center flex-col py-0 px-[50px] h-full text-center" action="#">
                <h1 class="font-bold m-0">Sign in</h1>
                <div class="social-container">
                    <a class="text-[#333] no-underline my-[15px] mx-[0]" href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-[#333] no-underline my-[15px] mx-[0]" href="#" class="social"><i class="fab fa-google"></i></a>
                </div>
                <span class="text-[12px]">or use your account</span>
                <input class="bg-[#eee] border-none py-[12px] px-[15px] my-[8px] mx-[0] w-full" type="email" placeholder="Email" />
                <input class="bg-[#eee] border-none py-[12px] px-[15px] my-[8px] mx-[0] w-full" type="password" placeholder="Password" />
                <a class="text-[#333] no-underline my-[15px] mx-[0]" href="#">Forgot your password?</a>
                <button class="ghost px-[45px] py-[12px] btn btn-blue hover:bg-reservoir-white hover:text-black">Sign In</button>
            </form>
        </div>
        <div class="overlay-container absolute top-0 left-1/2 w-1/2 h-full overflow-hidden transition-transform duration-[0.6s] ease-in-out">
            <div class="overlay bg-gradient-to-r from-cyan-500 to-blue-500 bg-no-repeat bg-cover bg-[top_calc(0%)_bottom_calc(0%)_left_calc(0%)_right_calc(0%)] text-[#FFFFFF] left-[-100%] h-full w-[200%] translate-x-0 transition-transform duration-[0.6s] ease-in-out">
                <div class="overlay-panel overlay-left">
                    <h1 class="font-bold m-0">Hello, Friend!</h1>
                    <p class="text-[14px] font-thin leading-5 tracking-[0.5px] mt-[20px] mx-0 mb-[30px]">Enter your personal details and start journey with us <br><br> Have an account? Sign in Here</p>
                    <button class="ghost btn bg-transparent hover:bg-reservoir-white hover:text-black outline-0" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="font-bold m-0">Welcome Back!</h1>
                    <p class="text-[14px] font-thin leading-5 tracking-[0.5px] mt-[20px] mx-0 mb-[30px]">To keep connected with us please login with your personal info<br><br>Don't have an account? Sign up Here</p>
                    <button class="ghost btn bg-transparent hover:bg-reservoir-white hover:text-black hover:outline-white" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>

<br>
<br>


</html>