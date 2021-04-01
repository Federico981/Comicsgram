let elem_select;

function onResponse(response){
    return response.json();
}

function miPiace(json){
    let i=0;
    mipiace=[];
    for(evento of json){
        mipiace[i]=evento.id_post;
        i++;
    }
}

function aggiornaPost(){
    var token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
    const form_data = {method: 'post', headers: {"X-CSRF-TOKEN": token}};
    form_data.append=("_token", token);
    fetch(document.getElementById('update_home').value, form_data).then(onResponse).then(onJson);
}

window.onload = function(){
    aggiornaPost();
}
function onJson(json)
{
  console.log(json);
  const results = document.querySelector('.result_view');
  results.innerHTML = '';

  for(const elementi of json){
    console.log(json);
    const result_box= document.createElement('div');
    result_box.classList.add('result_box');

    const img_box= document.createElement('div');
    img_box.classList.add('img_box');

    const name_box= document.createElement('div');
    name_box.classList.add('name_box');

    const text_box= document.createElement('div');
    text_box.classList.add('text_box');

    const img = document.createElement('img');
    img.src = elementi.url;

    const name= document.createElement('span');
    name.textContent=elementi.username;

    const testo_post= document.createElement('span');
    testo_post.textContent=elementi.text;

    const like_box= document.createElement('div');
    like_box.classList.add('like_box');

    const data= document.createElement('div');
    data.classList.add('data');
    data.textContent = elementi.data;



    const img_like_post = document.createElement('img');
    img_like_post.setAttribute("post_id", elementi.id);
    //img_like_post.post_id=elementi.id;

    const num_like= document.createElement('div');
    num_like.textContent=elementi.num_like ;//+ "like_box";
    num_like.addEventListener('click', showLikes)

      if(elementi.like_view == 1) {

        img_like_post.src='images/loving.png';
        img_like_post.addEventListener('click', unLike);
      }else {
        img_like_post.src='images/ticker.png';
        img_like_post.addEventListener('click', onLike);
      }

      like_box.appendChild(img_like_post);
      like_box.appendChild(num_like);
      name_box.appendChild(name);
      img_box.appendChild(img);
      text_box.appendChild(testo_post);

      result_box.appendChild(name_box);
      result_box.appendChild(img_box);
      result_box.appendChild(text_box);
      result_box.appendChild(like_box);
      result_box.appendChild(data);

      results.appendChild(result_box);
  }
}

function contatoreMiPiace(event){
    let i=event.currentTarget.getAttribute("post_id");
    fetch(document.getElementById("show_like").value + "?idpost_id=" + i).then(onResponse).then(showLikes);

}

function refreshPost(event){
    if(event){
        event.preventDefault();
    }
}

function jsonUnLike(json){
  console.log(fase);
  let change_img= like_box.querySelector('img');
  let change_num_like= like_box.querySelector('div');
  change_img.src = 'public/images/ticker.png';
  change_img.removeEventListener('click', unLike);
  change_img.addEventListener('click', onLike);
  change_num_like.textContent=json[0];
  return console.log(json);
}

function responseUnLike(response){
  console.log("2");
  return response.json();
}

function unLike(event){

    let id_post=event.currentTarget.getAttribute("post_id");
            event.currentTarget.removeEventListener('click',unLike);
            event.currentTarget.addEventListener('click', onLike);
            event.currentTarget.textContent='Like';

            fetch(document.getElementById("remove_like").value + "?idpost_id=" + id_post);

            showLikes(event);
}

function jsonOnLike(json){

  let like_box = document.getElementById(elem_select.parentNode.postId);
  let change_img= like_box.querySelector('img');
  let change_num_like= like_box.querySelector('div');
  change_img.src = 'images/loving.png';
  change_img.removeEventListener('click', onLike);
  change_img.addEventListener('click', unLike);
  change_num_like.textContent=json[0];
  return console.log(json);

}

function responseOnLike(response){
    console.log("1");
  return response.json();
}

function onLike(event){
  console.log(event.currentTarget);
  
      let id_post=event.currentTarget.getAttribute("post_id");
            event.currentTarget.removeEventListener('click', onLike);
            event.currentTarget.addEventListener('click', unLike);
            event.currentTarget.textContent='Unlike';

            console.log(id_post);
            console.log(document.getElementById("add_like"));
            
            fetch(document.getElementById("add_like").value + "?idpost_id=" + id_post);

            showLikes(event);
  }


function showLikes(event){
    let i=event.currentTarget.getAttribute("post_id");;
    fetch(document.getElementById("miPiace").value ).then(responseShow).then(miPiace).then(aggiornaPost);

}

function onModalClick() {
  document.body.classList.remove('no-scroll');
  modalview.classList.add('hidden');
  modalbox.innerHTML = '';
}

function responseShow(response){
  console.log("risposta show ricevuta");
  return response.json();
}

function onJsonShow(json){
  console.log(json);

  for(utente of json){
      const panel = document.createElement('div');
      panel.classList.add("panel");
      const modalimage=document.createElement("img");
      modalimage.src=utente.profilepic;
      const modalname=document.createElement("span");
      modalname.classList.add("username");
      modalname.textContent=utente.username;

      modalbox.appendChild(panel);
      panel.appendChild(modalimage);
      panel.appendChild(modalname);
  }
  modalview.appendChild(modalbox);
  document.body.classList.add('no-scroll');

  modalview.style.top=window.pageYOffset + 'px';
  modalview.classList.remove('hidden');
}

const modalbox=document.querySelector('#box');

form=document.forms['form_refresh'];
mipiace=[];
const modalview = document.querySelector('#modal-view');
//modalview.addEventListener('click', onModalClick);

//showLikes();
