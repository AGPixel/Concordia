function sendEmail() {

    let form = {
        name: document.getElementById("form_name").value,
        email: document.getElementById("form_email").value,
        message: document.getElementById("form_message").value
    }

    if (hcaptcha.getResponse() == "") {
        feedbackMessage('Erro Captcha');
    } else if (form.name == "" || form.email == "" || form.message == "") {
        feedbackMessage('Formulario incompleto');
    } else {
        feedbackMessage('Enviando formulario...');
        apiPost(GLOBAL_URL_API + "send-email", form, GLOBAL_DATATYPE_JSON, 
            function(_return) {
                feedbackMessage('Email enviado com sucesso');
            },
            function(_return) {
                feedbackMessage('Erro ao enviar o Email');
            }
        );
    }

    setTimeout(function() {
        feedbackMessage('');
    }, 5000);

}

function feedbackMessage(message) {
    document.getElementById("returnFeedback").innerHTML = message;
}