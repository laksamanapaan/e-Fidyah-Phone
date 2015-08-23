
var day=2;


function kiraHari(){
	
	if (confirm("Adakah anda tidak berpuasa hari ini?") == true) {
       $day+=1;
	document.getElementById("bilangan").innerHTML=$day;
	
    } 
	else {
        
    }

	

	



//alert("Hello! I am an alert box!");
/*
//INI UNTUK SUBMIT TULISAN/STRING UTK POPUP.
var input1, value1;
input1=window.prompt("adakah anda berpuasa", "ya/tidak");
value1=String(input1);
if(value1=='ya'||value1=='YA'||value1=='Ya'){

	}
else{
$day=$day+1;
	document.getElementById("bilangan").innerHTML=$day;*/
}


function hari($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"Jun 2016 "+ "  /  "+$hijri+" " + "Ramadan 1437h";}

function proseskira()
{
    var a = parseFloat(document.kirakira.tahunsekarang.value);
    var b = parseInt(document.kirakira.tahuntinggal.value);
	var c = parseInt(day);
	var d = parseInt(document.kirakira.zakatnegeri.value);
    var e = (a-b)*(c)*(d*0.25);

    document.kirakira.jumlah.value = e.toFixed(2);
	document.kirakira.tinggal.value = b;
}