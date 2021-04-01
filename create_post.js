function onText(text){
    console.log(text);
    if(text==="true"){
        alert("Post condiviso");
    }
}

function onResponse2(response){
    return response.text();
}

function share(event, form_share){
    var token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
    const form_data = {method: 'post', body: new FormData(form_share), headers: {"X-CSRF-TOKEN": token}};
    const newLocal = 'route_do_create_post';
    fetch(document.getElementById(newLocal).value, form_data).then(onResponse2).then(onText);
    event.preventDefault();
}

function onModalClick() {
    document.body.classList.remove('no-scroll');
    modalView.classList.add('hidden');
    modalView.innerHTML = '';
  }

function createForm(){
    const form_share = document.createElement('form');
    form_share.setAttribute('method', "post");
    form_share.setAttribute('name', "form_share");
    const submit = document.createElement("input");
    submit.setAttribute('type', "submit");
    submit.setAttribute('value', "Condividi");
    const field = document.createElement("input");
    field.setAttribute('type', "text");
    field.setAttribute('name', "campo2");
    const button = document.createElement("button");
    button.setAttribute('type', "button");
    button.textContent="Chiudi";
    button.addEventListener('click', onModalClick);
    const nascosto = document.createElement("input");
    nascosto.setAttribute('type', "hidden");
    nascosto.setAttribute('name', "nascosto");
    const nascosto2 = document.createElement("input");
    nascosto2.setAttribute('type', "hidden");
    nascosto2.setAttribute('name', "nascosto2");
    form_share.appendChild(submit);
    form_share.appendChild(field);
    form_share.appendChild(button);
    form_share.appendChild(nascosto);
    form_share.appendChild(nascosto2);
    return form_share;
}

function createImage(src) {
    const image = document.createElement('img');
    image.src = src;
    return image;
  }

function onThumbnailClick(event){
    const scheda = event.currentTarget;
    console.log(scheda);
    const img2 = scheda.querySelector('.copertina');
    console.log(img2.src);

    const image = createImage(img2.src);
    const form_share = createForm();
    console.log(form_share);
    document.body.classList.add('no-scroll');
    modalView.style.top = window.pageYOffset + 'px';
    modalView.appendChild(image);
    modalView.appendChild(form_share);
    modalView.classList.remove('hidden');
    form_share.nascosto.value=img2.src;
    form_share.nascosto2.value="i";
    console.log(form_share.nascosto);

    let doClick = (event) => share(event, form_share);
    form_share.addEventListener('submit', doClick);
}

function onJSON(json){
    console.log(json);
    if(form.api.value==="opzione1"){
                let container=document.querySelector("#risultati");
                container.innerHTML="";

                    for(let tmp of json.results){
                        let div=document.createElement('div');
                        div.classList.add('raccolta');
                        div.setAttribute('id', tmp.id);
                        container.appendChild(div);

                        let img=document.createElement('img');
                        img.classList.add('copertina');
                        img.src=tmp.image.small_url;
                        div.appendChild(img);

                        let div1=document.createElement('div');
                        div1.textContent=tmp.volume.name;
                        div.appendChild(div1);

                        let div2=document.createElement('div');
                        div2.textContent=tmp.id;
                        div.appendChild(div2);

                        div.setAttribute('data-info', "id="+tmp.id+"&titolo="+tmp.volume.name+"&img="+tmp.image.small_url);
                        div.addEventListener('click', onThumbnailClick);
                    }
                }else if(form.api.value==="opzione2"){
                        console.log('JSON ricevuto2');
                        // Svuotiamo la libreria
                        let library = document.querySelector('#risultati');
                        library.innerHTML = '';
                        // Leggi il numero di risultati
                        let num_results = json.num_found;
                        // Mostriamone al massimo 10
                        if(num_results > 10)
                          num_results = 10;
                        // Processa ciascun risultato
                        for(let i=0; i<num_results; i++)
                        {
                          // Leggi il documento
                          const doc = json.docs[i]
                          // Leggiamo info
                          const title = doc.title;
                          const isbn = doc.isbn[0];
                          // Costruiamo l'URL della copertina
                          const cover_url = 'http://covers.openlibrary.org/b/isbn/' + isbn + '-M.jpg';
                          // Creiamo il div che conterrà immagine e didascalia
                          const book = document.createElement('div');
                          book.classList.add('book');
                          // Creiamo l'immagine
                          let img=document.createElement('img');
                          img.classList.add('copertina');
                          img.src=cover_url;
                          book.appendChild(img);
                          // Creiamo la didascalia
                          const caption = document.createElement('span');
                          caption.textContent = title;
                          // Aggiungiamo immagine e didascalia al div
                          book.appendChild(img);
                          book.appendChild(caption);
                          // Aggiungiamo il div alla libreria
                          library.appendChild(book);
                          book.addEventListener('click', onThumbnailClick);
                        }
                        console.log(json);

                    }
}

function onResponse(response){
    return response.json();
}

function search(eventi){
    var token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
    const form_data = {method: 'post', body: new FormData(form), headers: {"X-CSRF-TOKEN": token}};
    fetch(document.getElementById('route_do_search_content').value, form_data).then(onResponse).then(onJSON);
    event.preventDefault();
}


const form = document.forms['form_search'];
// Aggiungi listener
form.addEventListener('submit', search);

//const posting = document.querySelector('#posting');
//posting.classList.add('hidden');

const modalView = document.querySelector('#modal-view');
//modalView.addEventListener('click', onModalClick);
