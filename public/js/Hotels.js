function Ripeti(){
    document.querySelector('#HotelT').classList.remove('N');
    document.querySelector('#CKD').classList.add('N');
    document.querySelector('#TitoloH').classList.add('N');
    C = 1;
}
function AggSh(event){
    console.log(event.currentTarget.textContent);
    let Data = event.currentTarget.parentNode.querySelector('.DataIn').value;
    console.log(Data);
    console.log(HN);
    console.log(STH);
    console.log(Id);
    fetch("http://localhost/EasyHotels1/public/Query7?Data="+Data+"&Hotel="+HN+"&Stanza="+STH+"&ID="+Id);
    Ripeti();
}
function NewPre(event){
    if(C > 0){
        document.querySelector('#CKD').classList.remove('N');
        event.currentTarget.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add("N");
    }else{
    event.currentTarget.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add("N");
    STH = event.currentTarget.textContent;
    const Bi = document.querySelector("#Sez");
    const ti = document.createElement("h1");
    ti.textContent = "Inserisci la data in cui vorresti prenotare la stanza";
    const Fo = document.createElement("div");
    Fo.setAttribute("id","CKD");
    let Le = document.createElement("h3");
    Le.textContent ="Data Check In";
    const In = document.createElement("Input");
    In.setAttribute("type","date");
    In.setAttribute("class","DataIn");
    const Iv = document.createElement("a");
    Iv.textContent = "Invia";
    Iv.setAttribute("class","button");
    Fo.appendChild(ti);
    Fo.appendChild(Le);
    Fo.appendChild(In);
    Fo.appendChild(Iv);
    Bi.appendChild(Fo);
    Iv.addEventListener('click',AggSh);
    }
}
function main2(json){
    const DN = document.createElement("div");
    const S = document.createElement("div");
    S.setAttribute("class","SP");
    const T = document.createElement("table");
    const TR = document.createElement("tr");
    const TD = document.createElement("td");
    const TD1 = document.createElement("td");
    TD.textContent = "Piano";
    TR.appendChild(TD);
    TD1.textContent = "Stanza";
    TR.appendChild(TD1);
    T.appendChild(TR);
    for(let a of json){
        const TR1 = document.createElement("tr");
        const TD2 = document.createElement("td");
        const TD3 = document.createElement("td");
        let P = document.createElement("h3");
        P.textContent = a.Piano;
        let St = document.createElement("a");
        St.textContent = a.Tipo;
        TD2.appendChild(P);
        TR1.appendChild(TD2);
        TD3.appendChild(St);
        TR1.appendChild(TD3);
        T.appendChild(TR1);

        St.addEventListener('click',NewPre);
    }

    S.appendChild(T);
    DN.appendChild(S)
    H.appendChild(DN);

}
function onSuccess(response){
    return response.json()
}
function onError(error){
    console.log('Error' + error);
}
function onJson2(json){
    console.log(json);
    main2(json);
}
function Prenota(event){
    if(C > 0){
    document.querySelector('#TitoloH').classList.remove('N');
    console.log(event.currentTarget.parentNode.parentNode.parentNode);
    event.currentTarget.parentNode.parentNode.parentNode.classList.add("N");
    let TN = document.querySelector("#TitoloH");
    TN.textContent = event.currentTarget.textContent;
    HN = event.currentTarget.textContent;
    H.appendChild(TN);
    fetch("http://localhost/EasyHotels1/public/Query1?NomeH="+event.currentTarget.textContent).then(onSuccess).then(onJson2).then(onError);
    }else{
    console.log(event.currentTarget.parentNode.parentNode.parentNode);
    event.currentTarget.parentNode.parentNode.parentNode.classList.add("N");
    let TN = document.createElement("h1");
    TN.setAttribute('Id','TitoloH');
    TN.textContent = event.currentTarget.textContent;
    HN = event.currentTarget.textContent;
    H.appendChild(TN);
    fetch("http://localhost/EasyHotels1/public/Query1?NomeH="+event.currentTarget.textContent).then(onSuccess).then(onJson2).then(onError);
    }
}

function main(json){
    let Ho = document.createElement("div");
    Ho.setAttribute("class", "Date1");
    const T = document.createElement("table");
    T.setAttribute("Id","HotelT");
    const TR = document.createElement("tr");
    const TD = document.createElement("td");
    const TD1 = document.createElement("td");
    const TD2 = document.createElement("td");
    const TD3 = document.createElement("td");
    TD.textContent = 'Nome';
    TR.appendChild(TD);
    TD1.textContent = 'Città';
    TR.appendChild(TD1);
    TD2.textContent = 'Telefono';
    TR.appendChild(TD2);
    TD3.textContent = 'Stelle';
    TR.appendChild(TD3);
    T.appendChild(TR);
    for(let c of json){
    const TR1 = document.createElement("tr");
    let Ph = document.createElement("a");
    Ph.setAttribute("class","NomeH")
    const TD4 = document.createElement("td");
    const TD5 = document.createElement("td");
    const TD6 = document.createElement("td");
    const TD7 = document.createElement("td");
    Ph.textContent = c.Nome;
    TD4.appendChild(Ph);
    TR1.appendChild(TD4);
    TD5.textContent = c.Citt\u00e0;
    TR1.appendChild(TD5);
    TD6.textContent = c.Telefono;
    TR1.appendChild(TD6);
    TD7.textContent = c.Stelle;
    TR1.appendChild(TD7);
    T.appendChild(TR1);
    Ho.appendChild(T);
    Ph.addEventListener('click',Prenota);
    }
    H.appendChild(Ho);
    
}

function onSuccess(response){
    return response.json()
}
function onError(error){
    console.log('Error' + error);
}
function onJson(json){
    console.log(json);
    main(json);
}

fetch('http://localhost/EasyHotels1/public/Query').then(onSuccess).then(onJson).then(onError);



const H = document.querySelector('#Hotel');
let STH;
let HN;
let C = 0;
