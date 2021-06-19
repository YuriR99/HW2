function main(json){
    const D = document.querySelector("#T_U");
    const T = document.createElement("table");
    for(c of json){
    const TR = document.createElement("tr");
    const TR1 = document.createElement("tr");
    const TR2 = document.createElement("tr");
    const TR3 = document.createElement("tr");
    const TR4 = document.createElement("tr");
    const TR5 = document.createElement("tr");
    const TD = document.createElement("td");
    const TD1 = document.createElement("td");
    const TD2 = document.createElement("td");
    const TD3 = document.createElement("td");
    const TD4 = document.createElement("td");
    const TD5 = document.createElement("td");
    const TD6 = document.createElement("td");
    const TD7 = document.createElement("td");
    const TD8 = document.createElement("td");
    const TD9 = document.createElement("td");
    const TD10 = document.createElement("td");
    const TD11 = document.createElement("td");
    TD.textContent = 'Nome:';
    TD6.textContent = c.Nome;
    TR.appendChild(TD);
    TR.appendChild(TD6);
    TD1.textContent = 'Cognome:';
    TD7.textContent = c.Cognome;
    TR1.appendChild(TD1);
    TR1.appendChild(TD7);
    TD2.textContent = 'Username:';
    TD8.textContent = c.username;
    TR2.appendChild(TD2);
    TR2.appendChild(TD8);
    TD3.textContent = 'Email:';
    TD9.textContent = c.Email;
    TR3.appendChild(TD3);
    TR3.appendChild(TD9);
    TD4.textContent = 'Data Di Nascita:';
    TD10.textContent = c.Data_N;
    TR4.appendChild(TD4);
    TR4.appendChild(TD10);
    TD5.textContent = 'Telefono:';
    TD11.textContent = c.Telefono;
    TR5.appendChild(TD5);
    TR5.appendChild(TD11);
    T.appendChild(TR);
    T.appendChild(TR1);
    T.appendChild(TR2);
    T.appendChild(TR3);
    T.appendChild(TR4);
    T.appendChild(TR5);
    }
    D.appendChild(T);
}
function onSuccess(response){
    return response.json()
}
function onError(error){
    console.log('Error' + error);
}
function onJson2(json){
    console.log(json);
    main(json);
}
fetch("http://localhost/EasyHotels1/public/Query4?Username="+username).then(onSuccess).then(onJson2).then(onError);