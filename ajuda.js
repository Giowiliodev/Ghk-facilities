document.getElementById("chatbot-btn").addEventListener("click", function() {
    document.getElementById("chatbox").classList.toggle("hidden");
});

function processInput() {
    let input = document.getElementById("user-input").value.toLowerCase();
    let response = document.getElementById("bot-response");

    if (input.includes("contratar") || input.includes("serviço")) {
        response.innerHTML = "Clique <a href='/contratar'>aqui</a> para contratar um serviço.";
    } else if (input.includes("contato")) {
        response.innerHTML = "Visite nossa <a href='/contato'>página de contato</a>.";
    } else {
        response.innerHTML = "Não entendi. Tente palavras-chave como 'contratar' ou 'contato'.";
    }
}