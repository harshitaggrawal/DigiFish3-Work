<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
   
    <div class="header">
        <div class="form">
            <h2>Mobile Buzz</h2>
            <form action="/phone_submit" method="get">
                    @csrf
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" id="phone" placeholder="999_XXX_XXX" required>
                    <button type="submit" id="button" class="phonebtn" >Submit</button>
            </form>

         <div class="afterContact">
            <p class="msg" >Pin number send to your {{session('phone')}} Number</p>
                <form action="pinSubmit" method="get">
                @csrf
                <label for="otp">Enter OTP:</label>
                <input type="text" name="pin" id="otp" required>
                <button type="submit" >Verify OTP</button>
            </form>
            </div>




            
            @if(isset($success))
            <script>   
                document.getElementById("phone").disabled = true;
            

                document.querySelector('.afterContact').classList.add('active');

                document.querySelector('.phonebtn').style.display='none';
            </script>
                
            @endif            
            @if(isset($error))
                <p class="error">{{ $error }}</p>
            @endif

            @if(isset($errorPin))

                <script>
                    document.querySelector('.afterContact').classList.add('active');

document.querySelector('.phonebtn').style.display='none';
                </script>
                <p class="error">{{ $errorPin }}</p>
            @endif


            
        </div>

        <div class="term">
            <h1>Terms & Conditions</h1>
            <p>By accessing and using Mobile Buzz , you agree to be bound by the following terms and conditions:</p>
            <div class="terms">
                <h1>Ownership</h1>
                <p>Mobile Buzz and all its contents are owned by the website owner and are protected by intellectual property laws.</p>
            </div>
            <div class="terms">
               <h1>Use of Content</h1>

                <p>You may download and use the content on Mobile Buzz solely for personal, non-commercial use. You may not modify, distribute, or reproduce the content in any way without the website owner's prior written consent.</p>
            </div>
            <div class="terms">
               <h1>User Conduct</h1>

                <p>You agree not to use Mobile Buzz for any unlawful or harmful purpose, including but not limited to transmitting any malware or viruses, engaging in fraudulent activities, or infringing on any intellectual property rights</p>
            </div>
            <div class="terms">
               <h1>Disclaimer of Warranties</h1>
                <p>The content on Mobile Buzz is provided on an "as is" and "as available" basis without any warranties of any kind, express or implied. The website owner does not guarantee the accuracy, reliability, or completeness of the content.</p>
            </div>
            <div class="terms">
                <h1>Limitation of Liability</h1>
                 <p>The website owner shall not be liable for any damages arising from the use or inability to use mobilecafe.df3.club, including but not limited to direct, indirect, incidental, or consequential damages.</p>
             </div>
             <div class="terms">
                <h1>Links to Third-Party Sites</h1>
                 <p>Mobile Buzz may contain links to third-party websites. The website owner is not responsible for the content or privacy practices of these websites and encourages you to read their terms and conditions and privacy policies before using them.</p>
             </div>
             <div class="terms">
                <h1>Modification of Terms</h1>
                 <p>The website owner reserves the right to modify these terms and conditions at any time. Any changes will be effective immediately upon posting on Mobile Buzz. Your continued use of the website after such changes will constitute acceptance of the modified terms and conditions.</p>
             </div>
             <div class="terms">
                <h1>Governing Law</h1>
                 <p>These terms and conditions shall be governed by and construed in accordance with the laws of the jurisdiction in which the website owner resides.</p>
             </div>
             <p>If you have any questions or concerns about these terms and conditions, please contact us at care@digifish3.com</p>
        </div>
    </div>

</body>
</html>
