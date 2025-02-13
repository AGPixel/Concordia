
function verifyToken() {

    showLoading();

    apiGetBearer(GLOBAL_URL_API + 'verify-token', GLOBAL_DATATYPE_JSON, function (_return) {
        hideLoading();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        goTo('/pt/login');
    });
}

verifyToken();