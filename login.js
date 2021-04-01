form=document.forms["signin"];
	
form.addEventListener("submit",convalidazione)

function convalidazione(event){

    var controllo=0;
    form = event.currentTarget;
    
    if(!form.password.value || !form.username.value){
        alert("Riempi tutti i campi !");
        controllo=1;
    }
    
    if(controllo==1)event.preventDefault();
}