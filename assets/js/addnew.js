document.getElementById("newstudent").addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch("http://localhost/gestion_eleves2/assets/php/add.php", {
    method: "POST",
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    document.getElementById("result").style.display = "block";
    getdata();
    console.log(data.message);
  })
  .catch(error => {
    console.error("Error:", error);
  });
});

function getdata() {
   let tbody=document.querySelector("#liststudents");
        tbody.innerHTML="";
    fetch('http://localhost/gestion_eleves2/assets/php/listeleves2.php')
.then(resp=>resp.json())
.then(data=>{
   console.log(data);
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
      actions.append(modifier,supprimer,note);
    
      tr.append(tdid,nom,prenom,classe,actions);

      tbody.appendChild(tr);
   });
      })

.catch(error=>{
    console.error('error de connexion :'+error);
})

}
