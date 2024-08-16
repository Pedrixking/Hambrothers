let carrinho = [];

function adicionarCarrinho(item) {
    carrinho.push(item);
    atualizarCarrinho();
}

function atualizarCarrinho() {
    const lista = document.getElementById("carrinho-lista");
    lista.innerHTML = ""; // Limpar a lista antes de adicionar os itens
    carrinho.forEach(item => {
        const li = document.createElement("li");
        li.innerText = item;
        lista.appendChild(li);
    });
}

function finalizarCompra() {
    alert("Obrigado pela preferência, meu hambrother!");
    carrinho = [];
    atualizarCarrinho();
}

function enviarCarrinho() {
    const pedido = carrinho.join(', '); // Transformar os itens do carrinho em uma string
    document.getElementById('pedido-hidden').value = pedido; // Colocar no campo escondido
}