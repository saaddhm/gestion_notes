
fetch('http://localhost/gestion_eleves2/assets/php/matiers.php')
.then(resp=>resp.json())
.then(data=>{
   console.log(data);
let matiers=document.querySelector('#matiers');

   data.forEach(e => {
    let opm=document.createElement('option');
    opm.textContent=e.name_mat;
    opm.value=e.id_mat;
    matiers.appendChild(opm);
   });
      })
.catch(error=>{
    console.error('error de connexion :'+error);
})