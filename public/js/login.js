
eraseCookie('token');
localStorage.setItem('name', '');
localStorage.setItem('email', '');



async function logar(url) {

    console.log("Função API logar");
    console.log(url);

    console.log("---------INICIO---------");

    showLoading();

    let form = {
        email: document.getElementById('email').value,
        password: document.getElementById('password').value
    };

    await apiPost(GLOBAL_URL_API + url, form, GLOBAL_DATATYPE_JSON,
        function (_return) {
            console.log("promisse success");
            console.log(_return);
            toastSuccess(_return.message);
            setCookie('token', _return.object.token, 0.1);
            localStorage.setItem('name', _return.object.name);
            localStorage.setItem('email', _return.object.email);
            goTo('/dashboard');
        },
        function (_return) {
            console.log("promisse error");
            console.log(_return);
            toastError(_return.responseJSON.message);
            hideLoading();
        });


    console.log("---------FIM---------");

}