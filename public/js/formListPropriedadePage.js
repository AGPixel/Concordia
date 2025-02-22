
function updateActivePropriedade(propriedade) {

    showLoading();

    if (propriedade.active) propriedade.active = 0;
    else propriedade.active = 1;

    let form = {
        id: propriedade.id,
        active: propriedade.active,
    };

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
        meta_tags_title: document.getElementById('InputMetaTagsTitle').value,
        meta_tags_description: document.getElementById('InputMetaTagsDescription').value,
        meta_tags_keywords: document.getElementById('InputMetaTagsKeywords').value,

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
