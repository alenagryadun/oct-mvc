<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Site</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            main{
                margin-left:27%;
                margin-right: 2%;
            }
            .back-btn{
                position: relative;
                top:-39px;
                left:120px;
            }
            #tasksDiv{
                padding-top: 20px;
                display: flex;
                flex-direction: row;
            }
            .btn{
                width: 25px;
                height: 25px;
                margin:2px;
                margin-top: 1px;
                background-size: contain;
                background-repeat: no-repeat;
                background-position-x: 50%;
                
            }
            .edit{
                background-image: url('https://findicons.com/files/icons/99/office/128/edit.png');
                margin-left: 10px;
            }
            .delete{
                background-image: url('http://s1.iconbird.com/ico/1212/264/w128h1281355246842delete2.png');
            }
            .save{
                background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Tick_green_modern.svg/1172px-Tick_green_modern.svg.png');
            }
            .hidden{
                visibility: hidden;
            }
            .getques{
                margin-top: 20px;
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
