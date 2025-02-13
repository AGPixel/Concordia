
function salvarNovaSenha() {

    let oldPassword = document.getElementById('InputOldPassword').value;
    let newPassword = document.getElementById('InputNewPassword').value;
    let reNewPassword = document.getElementById('InputReNewPassword').value;
    let checkTerms = document.getElementById('CheckTerms').checked;

    if (oldPassword.length < 1 ||
        newPassword.length < 1 ||
        reNewPassword.length < 1) {
        toastError("Palavra passe menor que 6 caracteres");
        return false;
    }

    if (oldPassword == newPassword) {
        toastError("Palavra passe antiga igual a nova");
        return false;
    } else if (reNewPassword != newPassword) {
        toastError("Palavra passe nova não foi confirmada");
        return false;
    }

    if (!checkTerms) {
        toastError("Termos não foram concordados");
        return false;
    }

    showLoading();

    let form = {
        email: localStorage.getItem('email'),
        oldPassword: oldPassword,
        newPassword: newPassword,
    };

    apiPostBearer(GLOBAL_URL_API + 'trocar-senha', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        hideLoading();
        document.getElementById('InputOldPassword').value = '';
        document.getElementById('InputNewPassword').value = '';
        document.getElementById('InputReNewPassword').value = '';
        document.getElementById('CheckTerms').checked = false;
    }, function (_return) {
        console.error(_return);
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
