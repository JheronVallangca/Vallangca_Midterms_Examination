<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadgets</title>
    <style>
        div{
            border: 1px solid white; 
        }
        body{
            text-align: center;
            justify-content: center;
            background-color: black;
            color: white;
        }

    </style>
    
</head>

<body>
    <section class='info'>
        <div>
            <h1>Gadgets</h1>
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
            <p><strong>Console:</strong> {{ $data['console'] }}</p>
            <p><strong>Laptops:</strong> {{ $data['laptops'] }}</p>
            <p><strong>Tablet:</strong> {{ $data['tablet'] }}</p>
            <p><strong>Apple:</strong> {{ $data['apple'] }}</p>
        </div> 
     </section>
</body>
</html>