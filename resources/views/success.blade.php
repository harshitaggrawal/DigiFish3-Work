<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0%;
    padding: 0%;
    box-sizing: border-box;
        }
        .main{
            background: #202020;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 3rem;
            flex-direction: column;
        }
        .main h1{
            text-align: center;
            font-size: 45px;
            text-overflow: ellipsis;
            font-weight: 600;
            padding-bottom: 3rem;
            font-style: italic;
            color:white;
        }
        .main a{
            margin-top: .5rem;
            font-size: 24px;
            padding: 3px 4px;
            width: 200px;
            border: 2px solid #a90089;
            border-radius: 5px;
            color: white;
            text-decoration:none;
            text-align:center;
        }
        main p{
            color: white;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="main">

    <h1>ThankYou For Subscribe</h1>

        <a href="/subscribe" class="unsc">UnSubscribe</a>
        @if(isset($error))
            <p style="color: red;">{{ $error }}</p>
        @endif
    </div>






</body>
</html>