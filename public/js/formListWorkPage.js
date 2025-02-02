
function updateActiveWork(work) {
    console.log("updateActiveWork");

    showLoading();

    if (work.active) work.active = 0;
    else work.active = 1;

    let form = {
        id: work.id,
        active: work.active,
    };

    console.log(form);
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
        window.location.href = "/new-work-page";
    }, 500);
}

function editWork(work) {
    showLoading();
    setTimeout(() => {
        window.location.href = "/work-page/" + work.id;
    }, 500);
}

function deleteWork(work) {
    console.log("deleteWork");
    console.log(work);
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
