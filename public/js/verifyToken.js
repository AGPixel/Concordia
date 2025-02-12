
function verifyToken() {

    showLoading();

    apiGetBearer(GLOBAL_URL_API + 'verify-token', GLOBAL_DATATYPE_JSON, function (_return) {
        console.log("verify-token success");
        console.log(_return);
        hideLoading();
    }, function (_return) {
        console.log("verify-token error");
        console.log(_return);
        toastError(_return.responseJSON.message);
        goTo('/pt/login');
    });
}

verifyToken();