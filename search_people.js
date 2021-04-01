function onJson(json){
    console.log(json);
   const grid= document.querySelector('.grid');
   grid.innerHTML='';

    for(utente of json){

        const username= document.createElement("div");
        username.textContent=utente.username;

        const img= document.createElement('img');
        img.src=utente.photo;

        const br= document.createElement('br');

        const follow= document.createElement("button");
        follow.classList.add('btn');
        follow.setAttribute('data-id',utente.id);
        follow.setAttribute('id',"follow");
        follow.innerHTML = 'Follow';



        const unfollow=document.createElement('button');
        unfollow.setAttribute('data-id',utente.id);
        unfollow.innerHTML='Unfollow';



        follow.addEventListener('click',followPeople);
        unfollow.addEventListener('click',unfollowPeople);



        const result = document.createElement("div");
        result.classList.add("result");
        grid.appendChild(result);
        result.appendChild(username);
        result.appendChild(img);
        result.appendChild(br);
        result.appendChild(follow);
        result.appendChild(unfollow);



    }
}



function onResponse(response){
    console.log('Risposta ricevuta');
    return response.json();
}

function searchPeople(event){
    event.preventDefault();
    var token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
    const formdata = new FormData();
    formdata.append('search_people', document.querySelector('#searchtext').value);
    formdata.append('_token', token);

    fetch(form.getAttribute('action'), {method: 'POST', body:formdata}).then(onResponse).then(onJson);

}


function onText(text){
    console.log(text);
    if(parseInt(text)==1)
    alert("utente gia seguito");
    if(parseInt(text)==0){
    alert("non segui piu");
    }





}
function responseFollow(response){
    console.log("Risposta follow ricevuta");
    return response.text();
}



function followPeople(event){
    var token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
   const followed= event.currentTarget.dataset.id;
   console.log(followed);
   event.currentTarget.removeEventListener('click',followPeople);
   event.currentTarget.addEventListener('click',unfollowPeople);
   const formdata = new FormData();
   formdata.append("followed",followed);
   formdata.append('_token',token);
   fetch(FOLLOW,{method:"post", body:formdata}).then(responseFollow);
   //fetch("follow_people.php",{method:"post", body:formdata}).then(responseFollow).then(onText);



}

function unfollowPeople(event){
    const unfollow = event.currentTarget.dataset.id;
    event.currentTarget.removeEventListener('click',unfollowPeople);
   event.currentTarget.addEventListener('click',followPeople);
    fetch(UNFOLLOW+'?unfollow='+unfollow).then(responseFollow);
 }




const form = document.forms['search-form'];
form.addEventListener('submit',searchPeople);
