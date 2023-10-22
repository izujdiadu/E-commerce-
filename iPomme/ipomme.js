var iphone = document.getElementById("iphone");
var dropshow = document.getElementById("dropdown");

iphone.addEventListener("mouseover", () => {
    dropshow.style.left = 0;
    dropshow2.style.left = "-100%";
})

dropshow.addEventListener("mouseleave", () => {
    dropshow.style.left = "-100%";
})


var ipad = document.getElementById("ipad");
var dropshow2 = document.getElementById("dropdown2");

ipad.addEventListener("mouseover", () => {
    dropshow2.style.left = 0;
    dropshow.style.left = "-100%";
})

dropshow2.addEventListener("mouseleave", () => {
    dropshow2.style.left = "-100%";
})

// form valid //

function validform(){

            let pren = document.getElementById("prenom").value;
            let nom = document.getElementById("nom").value;
            let txt = document.getElementById("txt");


            if(pren.length < 3 && nom.length < 3)  {
                txt.style.display = "block";
                txt.innerHTML = "Vous devez saisir entre 3 et 20 characters.";
                return false;
            }

            else if(pren == "" && nom == ""){
                txt.style.display = "block";
                txt.innerHTML = "Veuillez saisir vos noms.";
                return false;
            }
            else if(pren.length > 20 && nom.length > 20){
                txt.style.display = "block";
                txt.innerHTML = "Vous devez saisir entre 3 et 20 characters."
                return false;
            }

            else if(pren.length < 5 && nom.length < 5){
                txt.style.display = "block";
                txt.innerHTML = "Veuillez saisir un nom.";
                return false;
            }

            else {
                txt.style.display = "none";
            }

            let appleid = document.getElementById("appleid").value;
            let txt2 = document.getElementById("txt2");
            let appleidformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (!appleid.match(appleidformat)){
                txt2.style.display = "block";
                txt2.innerHTML = "Veuillez entrer un ID valide.";
                return false;
            }

            else if(appleid == ""){
                txt2.style.display = "block";
                txt2.innerHTML = "Entrez un mail";
                return false;
            }

            else {
                txt2.style.display = "none";
            }


            let mdp = document.getElementById("mdp").value;
            let mdpverif = document.getElementById("mdpverif").value
            let txt3 = document.getElementById("txt3");
            let mdpformat = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{12}$/;

            if (!mdp.match(mdpformat) && !mdpverif.match(mdpformat)){
                txt3.style.display = "block";
                txt3.innerHTML = "Veuillez saisir un mot de passe contenant : - au moins 12 caractères, un chiffre, une lettre, une majuscule et un caractère spéciaux.";
                return false;
            }

            if(mdp == "" && mdpverif == ""){
                txt3.style.display = "block";
                txt3.innerHTML = "Entrez un mdp.";
                return false;
            }

            else if(mdp != mdpverif){
                txt3.style.display = "block";
                txt3.innerHTML = "Veuillez mettre un mot de passe identique.";
                return false;
            }

            else {
                txt3.style.display = "none";
            }


            let phone = document.getElementById("phone").value;
            let txt4 = document.getElementById("txt4");
            let phoneformat = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

            if (!phone.match(phoneformat)){
                txt4.style.display = "block";
                txt4.innerHTML = "Veuillez saisir un numéro valide.";
                return false;
            }

            else if(phone == ""){
                txt4.style.display = "block";
                txt4.innerHTML = "Veuillez saisir votre numéro.";
                return false;
            }

            else {
                txt4.style.display = "none";
            }

            let adress = document.getElementById("adress").value;
            let txt5 = document.getElementById("txt5");


            if(adress == ""){
                txt5.style.display = "block";
                txt5.innerHTML = "Veuillez saisir une adresse.";
                return false;
            }

            else if(adress.length < 8){
                txt5.style.display = "block";
                txt5.innerHTML = "Veuillez saisir une vraie adresse.";
                return false;
            }

            else {
                txt5.style.display = "none";
            }

}

