//nav-links//

var sk = document.getElementById("sk");
var se = document.getElementById("se");
var con = document.getElementById("con");
var ho = document.getElementById("ho");
var pro = document.getElementById("pro");

//sections//
var about = document.getElementById("about");
var skill = document.getElementById("skills");
var service = document.getElementById("services");
var contac = document.getElementById("contact");
var projec = document.getElementById("project");


function home() {
    ho.classList.add("active");
    service.style = "display:none !important";
    contac.style = "display:none !important";
    projec.style = "display:none !important";
    skill.style = "display:none !important";
    about.style = "display:block !important";
    document.getElementById("hassan").style = "margin-top: 22vh;";
    se.classList.remove("active");
    sk.classList.remove("active");
    con.classList.remove("active");
    pro.classList.remove("active");

}

function services() {
    ho.classList.remove("active");
    se.classList.add("active");
    service.style = "display:block !important";
    contac.style = "display:none !important";
    projec.style = "display:none !important";
    skill.style = "display:none !important";
    about.style = "display:none !important";
    sk.classList.remove("active");
    con.classList.remove("active");
    pro.classList.remove("active");

}

function skills() {
    ho.classList.remove("active");
    se.classList.remove("active");
    sk.classList.add("active");
    service.style = "display:none !important";
    contac.style = "display:none !important";
    projec.style = "display:none !important";
    skill.style = "display:block !important";
    about.style = "display:none !important";
    con.classList.remove("active");
    pro.classList.remove("active");

}

function project() {
    ho.classList.remove("active");
    se.classList.remove("active");
    sk.classList.remove("active");
    con.classList.remove("active");
    pro.classList.add("active");
    service.style = "display:none !important";
    contac.style = "display:none !important";
    projec.style = "display:block !important";
    skill.style = "display:none !important";
    about.style = "display:none !important";

}

function contact() {
    ho.classList.remove("active");
    se.classList.remove("active");
    sk.classList.remove("active");
    con.classList.add("active");
    service.style = "display:none !important";
    contac.style = "display:block !important";
    projec.style = "display:none !important";
    skill.style = "display:none !important";
    about.style = "display:none !important";
    pro.classList.remove("active");

}