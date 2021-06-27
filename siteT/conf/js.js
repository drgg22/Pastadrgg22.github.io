function order(id){

var elem;
    elemid = document.getElementById(id);
    
    if (id == 'M1') {
        id = document.getElementById('aba1'); 
    }else if (id == 'M2') {
        id = document.getElementById('aba2'); 
    }else if (id == 'M3') {
        id = document.getElementById('aba3');
    }
    elem = document.getElementsByClassName('aba');


    for (let i = 0; i < elem.length; i++) {
        const element = elem[i];
        if (id == element) {
            id.classlist.add("front");
        }else{
            id.classlist.remove("front");
        }
        
    }

}