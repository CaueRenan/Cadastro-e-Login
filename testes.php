<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script>
         function ze(){
           var pass = document.querySelector('#a').value
           var cpass = document.querySelector('#b').value

           if(pass == cpass){
             document.querySelector('#boton').disabled = false
           }else {
            document.querySelector('#boton').disabled = true
           }
         }
        </script>
        </head>
        <body>
        <form>
          <input type="text" onchange="ze()" id="a">
          <input type="text" onchange="ze()" id="b"> 
          <button type="submit" name="boton" id="boton" disabled> HAHAHA</button>
        </form>
        </body>
</html>