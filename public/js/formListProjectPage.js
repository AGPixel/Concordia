
function updateActiveProject(project) {
    console.log("updateActiveProject");

    showLoading();

    if (project.active) project.active = 0;
    else project.active = 1;

    let form = {
        id: project.id,
        active: project.active,
    };

    console.log(form);
    apiPostBearer(GLOBAL_URL_API + 'update-active-project', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}

function newProject() {
    showLoading();
    setTimeout(() => {
        window.location.href = "/new-project-page";
    }, 500);
}

function editProject(project) {
    showLoading();
    setTimeout(() => {
        window.location.href = "/project-page/" + project.id;
    }, 500);
}

function deleteProject(project) {
    console.log("deleteProject");
    console.log(project);
    showLoading();

    let form = {
        id: project.id
    };

    apiDeleteBearer(GLOBAL_URL_API + 'delete-project-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });
}
