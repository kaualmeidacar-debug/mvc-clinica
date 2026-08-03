const form = document.getElementById("formCliente");
const mensagem = document.getElementById("mensagem");

form.addEventListener("submit", async function (evento) {

    evento.preventDefault();

    const dados = new FormData(form);

    mensagem.className = "alert alert-info mt-3";
    mensagem.textContent = "Enviando dados...";

    try {
        const resposta = await fetch("controllers/clienteController.php", {
            method: "POST",
            body: dados
        });

        const resultado = await resposta.json();

        console.log(resultado);

        if (!resposta.ok) {
            mensagem.className = "alert alert-danger mt-3";
            mensagem.textContent = resultado.mensagem;
            return;
        }

        mensagem.className = "alert alert-success mt-3";
        mensagem.textContent = resultado.mensagem;

        form.reset();

    } catch (erro) {

        mensagem.className = "alert alert-danger mt-3";
        mensagem.textContent = "Erro ao enviar os dados para o controller Medico";
        
        console.log(erro);
    }

});