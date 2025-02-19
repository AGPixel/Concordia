
let toBase64 = file => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
});
let bases64 = {
    InputVideo: null,
};
const inputVideo = document.getElementById("InputVideo");
inputVideo.addEventListener("change", load_image_work_preview1, false);
async function load_image_work_preview1() {
    document.getElementById('InputVideoPreview').innerHTML = this.files[0].name;
    bases64.InputVideo = await toBase64(this.files[0]);
}

function updateActiveProject(project) {

    showLoading();

    if (project.active) project.active = 0;
    else project.active = 1;

    let form = {
        id: project.id,
        active: project.active,
    };

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
        window.location.href = "/pt/new-project-page";
    }, 500);
}

function editProject(project) {
    showLoading();
    setTimeout(() => {
        window.location.href = "/pt/project-page/" + project.id;
    }, 500);
}

function deleteProject(project) {
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

function saveServicoGeral() {

    showLoading();

    let form = {
        video: bases64.InputVideo,
        pre_title_1: document.getElementById('InputPreTitle1').value,
        pre_title_1_eng: document.getElementById('InputPreTitle1Eng').value,
        pre_title_2: document.getElementById('InputPreTitle2').value,
        pre_title_2_eng: document.getElementById('InputPreTitle2Eng').value,
        pre_title_3: document.getElementById('InputPreTitle3').value,
        pre_title_3_eng: document.getElementById('InputPreTitle3Eng').value,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-servico-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
