
function updateActiveOportunidade(oportunidade) {

    showLoading();

    if (oportunidade.active) oportunidade.active = 0;
    else oportunidade.active = 1;

    let form = {
        id: oportunidade.id,
        active: oportunidade.active,
    };

    apiPostBearer(GLOBAL_URL_API + 'update-active-oportunidade', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}

function newOportunidade() {
    showLoading();
    setTimeout(() => {
        window.location.href = "/pt/new-oportunidade-page";
    }, 500);
}

function editOportunidade(oportunidade) {
    showLoading();
    setTimeout(() => {
        window.location.href = "/pt/oportunidade-page/" + oportunidade.id;
    }, 500);
}

function deleteOportunidade(oportunidade) {
    showLoading();

    let form = {
        id: oportunidade.id
    };

    apiDeleteBearer(GLOBAL_URL_API + 'delete-oportunidade-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
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
