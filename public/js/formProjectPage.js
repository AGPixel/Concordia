
let toBase64 = file => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
});

let bases64 = {
    InputProjectImgBegin: null,
    InputProjectImg1: null,
    InputProjectImg2: null,
    InputProjectImg3: null,
    InputProjectImg4: null,
};
const InputProjectImgBegin = document.getElementById("InputProjectImgBegin");
InputProjectImgBegin.addEventListener("change", load_image_project_preview6, false);
async function load_image_project_preview6() {
    document.getElementById('InputProjectImgBeginPreview').innerHTML = this.files[0].name;
    bases64.InputProjectImgBegin = await toBase64(this.files[0]);
}
const InputProjectImg1 = document.getElementById("InputProjectImg1");
InputProjectImg1.addEventListener("change", load_image_project_preview1, false);
async function load_image_project_preview1() {
    document.getElementById('InputProjectImg1Preview').innerHTML = this.files[0].name;
    bases64.InputProjectImg1 = await toBase64(this.files[0]);
}
const InputProjectImg2 = document.getElementById("InputProjectImg2");
InputProjectImg2.addEventListener("change", load_image_project_preview2, false);
async function load_image_project_preview2() {
    document.getElementById('InputProjectImg2Preview').innerHTML = this.files[0].name;
    bases64.InputProjectImg2 = await toBase64(this.files[0]);
}
const InputProjectImg3 = document.getElementById("InputProjectImg3");
InputProjectImg3.addEventListener("change", load_image_project_preview3, false);
async function load_image_project_preview3() {
    document.getElementById('InputProjectImg3Preview').innerHTML = this.files[0].name;
    bases64.InputProjectImg3 = await toBase64(this.files[0]);
}
const InputProjectImg4 = document.getElementById("InputProjectImg4");
InputProjectImg4.addEventListener("change", load_image_project_preview4, false);
async function load_image_project_preview4() {
    document.getElementById('InputProjectImg4Preview').innerHTML = this.files[0].name;
    bases64.InputProjectImg4 = await toBase64(this.files[0]);
}

function saveProjectPage(id) {
    console.log("saveProjectPage");

    showLoading();

    let form = {
        id: id,
        title_1: document.getElementById('InputProjectTitle1').value,
        title_1_eng: document.getElementById('InputProjectTitle1Eng').value,
        description_1: document.getElementById('InputProjectDescription1').value,
        description_1_eng: document.getElementById('InputProjectDescription1Eng').value,
        url_project: document.getElementById('InputProjectUrlProject').value,
        img_begin: bases64.InputProjectImgBegin,
        img_1: bases64.InputProjectImg1,
        img_2: bases64.InputProjectImg2,
        img_3: bases64.InputProjectImg3,
        img_4: bases64.InputProjectImg4,
        title_2: document.getElementById('InputProjectTitle2').value,
        title_2_eng: document.getElementById('InputProjectTitle2Eng').value,
        description_2: document.getElementById('InputProjectDescription2').value,
        description_2_eng: document.getElementById('InputProjectDescription2Eng').value,
        active: 1,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-project-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        window.location.href = "/pt/list-project-page";
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
