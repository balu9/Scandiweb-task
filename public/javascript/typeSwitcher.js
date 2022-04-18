function validate(){
    let flag1=document.getElementById("DVD").style.display;
    let flag2=document.getElementById("Book").style.display;
    let flag3=document.getElementById("Furniture").style.display;
    let val,h,w,l,pa=document.getElementById("err"),res=true;
    if(flag1=="block" || flag1==""){
        val=document.getElementById("size").value;
        if(val==""){
            res=false;
        }
    }

    if(flag2=="block"){
        val=document.getElementById("weight").value;
        if(val==""){
            res=false;
        }
    }

    if(flag3=="block"){
        h=document.getElementById("height").value;
        w=document.getElementById("width").value;
        l=document.getElementById("length").value;
        if(h=="" || w=="" || l==""){
            res=false;
        }
    }
    if(res){
       return true; 
    }
    else{
        pa.innerText="Please, submit required data";
        return res;
    }
}


function catg() {
    let types = document.getElementById("productType").value;
    let pa=document.getElementById("err");
    pa.innerText="";
    
    switch (types) {
        case "DVD":
            document.getElementById("DVD").style.display = "block";
            document.getElementById("Furniture").style.display = "none";
            document.getElementById("height").value="";
            document.getElementById("width").value="";
            document.getElementById("length").value="";
            document.getElementById("Book").style.display = "none";
            document.getElementById("weight").value="";
            break;
        case "Book":
            document.getElementById("DVD").style.display = "none";
            document.getElementById("size").value = '';
            document.getElementById("Furniture").style.display = "none";
            document.getElementById("height").value = '';
            document.getElementById("width").value = '';
            document.getElementById("length").value = '';
            document.getElementById("Book").style.display = "block";
            break;
        case "Furniture":
            document.getElementById("DVD").style.display = "none";
            document.getElementById("size").value = '';
            document.getElementById("Furniture").style.display = "block";
            document.getElementById("Book").style.display = "none";
            document.getElementById("weight").value = '';
            break;
        default:
            
    }
}