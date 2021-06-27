<?php

require "logs/loghandler.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de clientes</title>
    <link rel="stylesheet" href="css/stylesheet001.css">
    <script src="conf/js.js">
    function order(id){
var elemid = id;
var elem;
    if (elemid == 'M1') {
        document.getElementById('aba1'); 
    }else if (elemid == 'M2') {
        document.getElementById('aba2'); 
    }else if (elemid == 'M3') {
        document.getElementById('aba3');
    }
    elem = document.getElementsByClassName('aba');


    for (let i = 0; i < elem.length; i++) {
        const element = elem[i];
        if (elemid == element) {
            elemid.classlist.add("front");
        }
        
    }

}
    </script>
</head>
<body style="margin:0;">
    
    <div id="header">Controle de Clientes e Serviços</div>
    <div id="corpo">
        <div id="menulateral" >
            <ul>
                
                <li onclick="order(this)" id="M1" class="menuitem aba1">Clientes <not></not></li>
                <li onclick="order(this)" id="M2" class="menuitem aba2">Serviços<not></not></li>
                <li onclick="order(this)" id="M3" class="menuitem aba3">logs<not></not></li>
                <!--PARA MAIS ITENS USE O TEMPLATE ABAXO-->
                <!--<li id="M4" class="menuitem"><not></not></li>-->
            </ul>
        </div>
        <div style="height:100%; width:auto;">
            <div id="aba1" class="aba" style="z-index: 1; ">
                <?php
                require_once 'conf\Clientes.php';
                ?>
                <div id=""></div>
            </div>
            <div id="aba2" class="aba" style="z-index: 0;">
                <?php
                require_once 'conf\Servicos.php';
                ?>
            </div>
            <div id="aba3" class="aba" style="z-index: 0;">
                <?php
                require_once 'conf\logs.php';
                ?>
            </div>
        </div>
        

    </div>
</body>
</html>