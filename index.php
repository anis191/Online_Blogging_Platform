
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        
        main img{
            height: 100vh;
            width: 100vw;
            object-fit: cover;
        }
        .p1 .s1{
            color: red;
            font-size: 55px;
            font-weight: 800;
        }
        .swift{
            font-size: 55px;
            font-weight: 800;
        }
        .p1{
            position: fixed;
            left: 55px;
            top: 100px;
            z-index: 100;
        }
        .line1{
            font-size:24px;
            font-weight: 600;
        }
        .line2{
            font-size:21px;
            font-weight: 550;
        }
        button{
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 17px;
  border-radius: 10px;
        }
        button:hover{
           background-color: #dba617; 
           color: black;
           transform: scale(1.2);
        }
        button{
            /* transition-property: all; */
            transition: all 1s ease-in-out 0.2s;
        }
    </style>
</head>
<body>
    <main>
        <div class="bac">
            <img src="new2.png" alt="bacground">
        </div>
        <div class="p1">
            <p class="swift">Swift<span class="s1">Log</span></p>
            <p class="line1">Welcome to SwiftLogs <br> Gateway to Swift and Seamless Blogging! <i class="fa-solid fa-rocket"></i></p>
            <br/>
            <p class="line2">We're thrilled to have you here! Whether you're a seasoned blogger<br> or just starting your journey, SwiftLogs is your go-to platform for expressing<br> your thoughts, sharing your experiences, and connecting with a community<br> of like-minded individuals</p><br/>
            <a href="home.php">
                <button>Get Started</button>
            </a>
        </div>
    </main>
</body>
</html>