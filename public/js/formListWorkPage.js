
function updateActiveWork(work) {

    showLoading();

    if (work.active) work.active = 0;
    else work.active = 1;

    let form = {
        id: work.id,
        active: work.active,
    };

    apiPostBearer(GLOBAL_URL_API + 'update-active-work', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}

function newWork() {
    showLoading();
    setTimeout(() => {
        window.location.href = "/pt/new-work-page";
    }, 500);
}

function editWork(work) {
    showLoading();
    setTimeout(() => {
        window.location.href = "/pt/work-page/" + work.id;
    }, 500);
}

function deleteWork(work) {
    showLoading();

    let form = {
        id: work.id
    };

    apiDeleteBearer(GLOBAL_URL_API + 'delete-work-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
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
        title_eng: document.getElementById('InputPortifolioTitleEng').value,
        description: document.getElementById('InputPortifolioDescription').value,
        description_eng: document.getElementById('InputPortifolioDescriptionEng').value,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-portifolio-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
