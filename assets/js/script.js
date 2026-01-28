
let classes=document.querySelector('#classes');

const listclasses=["tc1","tc2","tc3","1bac","2bac"];
listclasses.forEach(e=>{
    let op=document.createElement('option');
    op.textContent=e;
    op.value=e;
    classes.appendChild(op);
})
fetch('http://localhost/gestion_eleves2/assets/php/listeleves.php')
.then(resp=>resp.json())
.then(data=>{
   console.log(data);
   let tbody=document.querySelector("#liststudents");
   data.forEach(e => {
      let tr= document.createElement('tr');
      let tdid=document.createElement('td');
      let nom=document.createElement('td');
      let prenom=document.createElement('td');
      let classe=document.createElement('td');
      let actions=document.createElement('td');
      let notef=document.createElement('td');
      let modifier=document.createElement('a');
      let supprimer=document.createElement('a');
      let note=document.createElement('a');
       note.textContent="Note";
       modifier.textContent="Edite";
       supprimer.textContent="Delete";
       modifier.style.cursor="pointer";
    //    modifier.style.color="green";
       modifier.className="btn btn-outline-success";
       note.className="btn btn-outline-primary";
       supprimer.style.cursor="pointer";
       note.style.cursor="pointer";
       supprimer.style.marginLeft="10px";
       note.style.marginLeft="10px";
    //    supprimer.style.color="red";
       supprimer.className="btn btn-outline-danger";
    //    set data
       modifier.href="assets/pages/modifier.php?id="+e.id+"&nom="+e.nom+"&prenom="+e.prenom+"&classe="+e.classe;
       supprimer.href="assets/php/sup.php?id="+e.id;
       note.href="assets/pages/note.php?id="+e.id;

       function getMention(mention) {
    if (mention < 10) return "Passable";
    if (mention < 12) return "Assez Bien";
    if (mention < 14) return "Bien";
          return "Très Bien";
}
       notef.textContent=e.moy+" "+getMention(e.moy);
      tdid.textContent=e.id;
      nom.textContent=e.nom;
      prenom.textContent=e.prenom;
      classe.textContent=e.classe;
      actions.append(modifier,supprimer);
    
      tr.append(tdid,nom,prenom,classe,actions,notef);

      tbody.appendChild(tr);
   });
      })

.catch(error=>{
    console.error('error de connexion :'+error);
})







