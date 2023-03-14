function openPage(link) {
    window.open(link, "blank").focus();
}

function opendiv(produto1_id, produto2_id) {
    var produto1 = document.getElementById(produto1_id);
    var produto2 = document.getElementById(produto2_id);
    if (produto2.style.display == "none") {
        produto1.style.display = "none";
        produto2.style.display = "flex";
    } else {
        produto1.style.display = "flex";
        produto2.style.display = "none";
    }
}

const $html = document.querySelector("html");
const $checkbox = document.querySelector("#switch");
$checkbox.addEventListener("change", function () {
    $html.classList.toggle("dark-mode");
});
