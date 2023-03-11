function openPage(link) {
    window.open(link, "blank").focus();
}

function scrooll(id) {
    document.getElementById(id).scrollIntoView();
}

function opendiv(produto_id, info_id) {
    var produto = document.getElementById(produto_id);
    var info = document.getElementById(info_id);
    if (info.style.display == "none") {
        produto.style.width = "550px";
        info.style.display = "flex";
    } else {
        produto.style.width = "300px";
        info.style.display = "none";
    }
}
