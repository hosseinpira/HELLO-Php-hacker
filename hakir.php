

// Created by hossein dev

<?php
    echo '
    <html>
    <head>
        <style>
            
            *{
                margin: 0;
                padding: 0;
            }
            
            body {background: black;}
            canvas {display:block;}
        
        </style>
    </head>
    <body>
    
        <canvas id="c"></canvas>
        
        <script>
        
        var c = document.getElementById("c");
        var ctx = c.getContext("2d");

        c.height = window.innerHeight;
        c.width = window.innerWidth;

        var matrixstring = "?@|äöü^><^^> :):-)<ABCDEF٩◔̯◔۶ 哼GHIJKLMNO(ᵒ̤̑ ₀̑ ᵒ̤̑) OMG!PQRSTUVWXYZ123456789@#$%^&*()*&^% :((";
    
        matrixstring = matrixstring.split("");

        var font_size = 12;
        var columns = c.width/font_size; 
        var drops = [];
        
        for(var x = 0; x < columns; x++)
            drops[x] = 1; 

        function draw()
        {
            
            ctx.fillStyle = "rgba(0, 0, 0, 0.04)";
            ctx.fillRect(0, 0, c.width, c.height);

            ctx.fillStyle = "#0F0"; //
            ctx.font = font_size + "px arial";
            
            for(var i = 0; i < drops.length; i++)
            {
                
                var text = matrixstring[Math.floor(Math.random()*matrixstring.length)];
                //x = i*font_size, y = value of drops[i]*font_size
                ctx.fillText(text, i*font_size, drops[i]*font_size);

                if(drops[i]*font_size > c.height && Math.random() > 0.975)
                    drops[i] = 0;

            
                drops[i]++;
            }
        }

        setInterval(draw, 35);

        
        </script>
    </body>
</html>
';
?>
