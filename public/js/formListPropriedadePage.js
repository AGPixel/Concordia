
function updateActivePropriedade(propriedade) {
    console.log("updateActivePropriedade");

    showLoading();

    if (propriedade.active) propriedade.active = 0;
    else propriedade.active = 1;

    let form = {
        id: propriedade.id,
        active: propriedade.active,
    };

    console.log(form);
    apiPostBearer(GLOBAL_URL_API + 'update-active-propriedade', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}

function newPropriedade() {
    showLoading();
    setTimeout(() => {
        window.location.href = "/pt/new-propriedade-page";
    }, 500);
}

function editPropriedade(propriedade) {
    showLoading();
    setTimeout(() => {
        window.location.href = "/pt/propriedade-page/" + propriedade.id;
    }, 500);
}

function deletePropriedade(propriedade) {
    console.log("deletePropriedade");
    console.log(propriedade);
    showLoading();

    let form = {
        id: propriedade.id
    };

    apiDeleteBearer(GLOBAL_URL_API + 'delete-propriedade-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });
}

function savePortifolioGeral() {

    showLoading();

    let form = {
        title: document.getElementById('InputPortifolioTitle').value,
        description: document.getElementById('InputPortifolioDescription').value,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-portifolio-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
