const aggiorna = document.getElementById("action1");
const elimina = document.getElementById("action2");

aggiorna.addEventListener("click", show);
elimina.addEventListener("click", show);

function show() {
    let div = document.getElementById("divVoto");
    div.style.display = aggiorna.checked ? 'block' : 'none';
}