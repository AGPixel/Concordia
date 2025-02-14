
let toBase64 = file => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
});

let bases64 = {
    InputWorkImg1: null,
    InputWorkImg2: null,
    InputWorkImg3: null,
    InputWorkImg4: null,
    InputWorkImg5: null,
    InputWorkImg6: null,
    InputWorkImg7: null,
};
const InputWorkImg1 = document.getElementById("InputWorkImg1");
InputWorkImg1.addEventListener("change", load_image_work_preview1, false);
async function load_image_work_preview1() {
    document.getElementById('ImageWorkImg1Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg1 = await toBase64(this.files[0]);
}
const InputWorkImg2 = document.getElementById("InputWorkImg2");
InputWorkImg2.addEventListener("change", load_image_work_preview2, false);
async function load_image_work_preview2() {
    document.getElementById('ImageWorkImg2Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg2 = await toBase64(this.files[0]);
}
const InputWorkImg3 = document.getElementById("InputWorkImg3");
InputWorkImg3.addEventListener("change", load_image_work_preview3, false);
async function load_image_work_preview3() {
    document.getElementById('ImageWorkImg3Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg3 = await toBase64(this.files[0]);
}
const InputWorkImg4 = document.getElementById("InputWorkImg4");
InputWorkImg4.addEventListener("change", load_image_work_preview4, false);
async function load_image_work_preview4() {
    document.getElementById('ImageWorkImg4Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg4 = await toBase64(this.files[0]);
}
const InputWorkImg5 = document.getElementById("InputWorkImg5");
InputWorkImg5.addEventListener("change", load_image_work_preview5, false);
async function load_image_work_preview5() {
    document.getElementById('ImageWorkImg5Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg5 = await toBase64(this.files[0]);
}
const InputWorkImg6 = document.getElementById("InputWorkImg6");
InputWorkImg6.addEventListener("change", load_image_work_preview6, false);
async function load_image_work_preview6() {
    document.getElementById('ImageWorkImg6Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg6 = await toBase64(this.files[0]);
}
const InputWorkImg7 = document.getElementById("InputWorkImg7");
InputWorkImg7.addEventListener("change", load_image_work_preview7, false);
async function load_image_work_preview7() {
    document.getElementById('ImageWorkImg7Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg7 = await toBase64(this.files[0]);
}

function saveWorkPage(id) {

    showLoading();

    let form = {
        id: id,
        title: document.getElementById('InputWorkTitle').value,
        title_eng: document.getElementById('InputWorkTitleEng').value,
        description: document.getElementById('InputWorkDescription').value,
        description_eng: document.getElementById('InputWorkDescriptionEng').value,
        img_1: bases64.InputWorkImg1,
        type_1: document.getElementById('InputWorkType1').value,
        type_1_eng: document.getElementById('InputWorkType1Eng').value,
        title_1: document.getElementById('InputWorkTitle1').value,
        title_1_eng: document.getElementById('InputWorkTitle1Eng').value,
        img_2: bases64.InputWorkImg2,
        type_2: document.getElementById('InputWorkType2').value,
        type_2_eng: document.getElementById('InputWorkType2Eng').value,
        title_2: document.getElementById('InputWorkTitle2').value,
        title_2_eng: document.getElementById('InputWorkTitle2Eng').value,
        img_3: bases64.InputWorkImg3,
        type_3: document.getElementById('InputWorkType3').value,
        type_3_eng: document.getElementById('InputWorkType3Eng').value,
        title_3: document.getElementById('InputWorkTitle3').value,
        title_3_eng: document.getElementById('InputWorkTitle3Eng').value,
        img_4: bases64.InputWorkImg4,
        type_4: document.getElementById('InputWorkType4').value,
        type_4_eng: document.getElementById('InputWorkType4Eng').value,
        title_4: document.getElementById('InputWorkTitle4').value,
        title_4_eng: document.getElementById('InputWorkTitle4Eng').value,
        img_5: bases64.InputWorkImg5,
        type_5: document.getElementById('InputWorkType5').value,
        type_5_eng: document.getElementById('InputWorkType5Eng').value,
        title_5: document.getElementById('InputWorkTitle5').value,
        title_5_eng: document.getElementById('InputWorkTitle5Eng').value,
        img_6: bases64.InputWorkImg6,
        type_6: document.getElementById('InputWorkType6').value,
        type_6_eng: document.getElementById('InputWorkType6Eng').value,
        title_6: document.getElementById('InputWorkTitle6').value,
        title_6_eng: document.getElementById('InputWorkTitle6Eng').value,
        img_7: bases64.InputWorkImg7,
        type_7: document.getElementById('InputWorkType7').value,
        type_7_eng: document.getElementById('InputWorkType7Eng').value,
        title_7: document.getElementById('InputWorkTitle7').value,
        title_7_eng: document.getElementById('InputWorkTitle7Eng').value,
        active: 1,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-work-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        window.location.href = "/pt/list-work-page";
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
