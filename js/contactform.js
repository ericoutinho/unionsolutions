const form = document.getElementById("contact-form");

form.addEventListener("submit", function(e) {
    e.preventDefault();

    jQuery.ajax({
        url: e.target.getAttribute("action"),
        type: "POST",
        data: {
            action:          "eContactForm",
            email:           form.email.value,
            nome:            form.nome.value,
            telefone:        form.telefone.value,
            departamento:    form.departamento.value,
            mensagem:        form.mensagem.value,
        },
        beforeSend: function(xhr){
            console.log("request");
        }
    })
    .done( function(response) {
        data = JSON.parse(response);
        if (data.code == 200) {
            callModal("Mensagem enviada!", "Sua mensagem foi recebida e será respondida o mais rápido possível.");
            form.reset();
        } else {
            document.querySelectorAll(".is-invalid").forEach( element => element.classList.remove("is-invalid") );
            callModal("A mensagem não foi envida", "Verifique os dados informados e tente novamente em alguns instantes.");
            for (input of data.data) {
                document.querySelector("#" + input).classList.add('is-invalid');
            }
        }
    })
    .fail( function(errorThrow) {
        console.log(errorThrow)
    } )
    .always( function() {} );

})

function callModal(title, message) {
    const modal = document.querySelector(".emodal");
    modal.querySelector(".emodal-dialog__title").innerHTML = title;
    modal.querySelector(".emodal-dialog__body").innerHTML = message;
    modal.classList.add("open");
}

function closeModal() {
    const modal = document.querySelector(".emodal");
    modal.classList.remove("open");
}