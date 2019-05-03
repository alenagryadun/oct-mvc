<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Site</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
        <style>
            main{
                margin-left:27%;
                margin-right: 2%;
            }
        </style>
    </head>
    <body>
        <div class="w3-sidebar w3-bar-block w3-flat-turquoise" style="width:25%"> 
            <h2>My Site</h2>
  <a href="/" class="w3-bar-item w3-button w3-flat-turquoise">Home</a>
  <a href="/tasks" class="w3-bar-item w3-button w3-flat-turquoise">Tasks</a>
  <a href="/questions" class="w3-bar-item w3-button w3-flat-turquoise">Questions</a>
  <a href="#" class="w3-bar-item w3-button w3-flat-turquoise">TODO</a>
</div>
        <main>
            <?php include_once 'app'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$content_view.'.php'?>
        </main>
    </body>
</html>
