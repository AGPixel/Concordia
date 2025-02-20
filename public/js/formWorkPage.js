
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
const inputWorkImg1 = document.getElementById("InputWorkImg1");
inputWorkImg1.addEventListener("change", load_image_work_preview1, false);
async function load_image_work_preview1() {
    document.getElementById('ImageWorkImg1Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg1 = await toBase64(this.files[0]);
}
const inputWorkImg2 = document.getElementById("InputWorkImg2");
inputWorkImg2.addEventListener("change", load_image_work_preview2, false);
async function load_image_work_preview2() {
    document.getElementById('ImageWorkImg2Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg2 = await toBase64(this.files[0]);
}
const inputWorkImg3 = document.getElementById("InputWorkImg3");
inputWorkImg3.addEventListener("change", load_image_work_preview3, false);
async function load_image_work_preview3() {
    document.getElementById('ImageWorkImg3Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg3 = await toBase64(this.files[0]);
}
const inputWorkImg4 = document.getElementById("InputWorkImg4");
inputWorkImg4.addEventListener("change", load_image_work_preview4, false);
async function load_image_work_preview4() {
    document.getElementById('ImageWorkImg4Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg4 = await toBase64(this.files[0]);
}
const inputWorkImg5 = document.getElementById("InputWorkImg5");
inputWorkImg5.addEventListener("change", load_image_work_preview5, false);
async function load_image_work_preview5() {
    document.getElementById('ImageWorkImg5Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg5 = await toBase64(this.files[0]);
}
const inputWorkImg6 = document.getElementById("InputWorkImg6");
inputWorkImg6.addEventListener("change", load_image_work_preview6, false);
async function load_image_work_preview6() {
    document.getElementById('ImageWorkImg6Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg6 = await toBase64(this.files[0]);
}
const inputWorkImg7 = document.getElementById("InputWorkImg7");
inputWorkImg7.addEventListener("change", load_image_work_preview7, false);
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
        type_1_1: document.getElementById('InputWorkType11').value,
        type_1_1_eng: document.getElementById('InputWorkType11Eng').value,
        type_1_2: document.getElementById('InputWorkType12').value,
        type_1_2_eng: document.getElementById('InputWorkType12Eng').value,
        title_1: document.getElementById('InputWorkTitle1').value,
        title_1_eng: document.getElementById('InputWorkTitle1Eng').value,
        img_2: bases64.InputWorkImg2,
        type_2_1: document.getElementById('InputWorkType21').value,
        type_2_1_eng: document.getElementById('InputWorkType21Eng').value,
        type_2_2: document.getElementById('InputWorkType22').value,
        type_2_2_eng: document.getElementById('InputWorkType22Eng').value,
        title_2: document.getElementById('InputWorkTitle2').value,
        title_2_eng: document.getElementById('InputWorkTitle2Eng').value,
        img_3: bases64.InputWorkImg3,
        type_3_1: document.getElementById('InputWorkType31').value,
        type_3_1_eng: document.getElementById('InputWorkType31Eng').value,
        type_3_2: document.getElementById('InputWorkType32').value,
        type_3_2_eng: document.getElementById('InputWorkType32Eng').value,
        title_3: document.getElementById('InputWorkTitle3').value,
        title_3_eng: document.getElementById('InputWorkTitle3Eng').value,
        img_4: bases64.InputWorkImg4,
        type_4_1: document.getElementById('InputWorkType41').value,
        type_4_1_eng: document.getElementById('InputWorkType41Eng').value,
        type_4_2: document.getElementById('InputWorkType42').value,
        type_4_2_eng: document.getElementById('InputWorkType42Eng').value,
        title_4: document.getElementById('InputWorkTitle4').value,
        title_4_eng: document.getElementById('InputWorkTitle4Eng').value,
        img_5: bases64.InputWorkImg5,
        type_5_1: document.getElementById('InputWorkType51').value,
        type_5_1_eng: document.getElementById('InputWorkType51Eng').value,
        type_5_2: document.getElementById('InputWorkType52').value,
        type_5_2_eng: document.getElementById('InputWorkType52Eng').value,
        title_5: document.getElementById('InputWorkTitle5').value,
        title_5_eng: document.getElementById('InputWorkTitle5Eng').value,
        img_6: bases64.InputWorkImg6,
        type_6_1: document.getElementById('InputWorkType61').value,
        type_6_1_eng: document.getElementById('InputWorkType61Eng').value,
        type_6_2: document.getElementById('InputWorkType62').value,
        type_6_2_eng: document.getElementById('InputWorkType62Eng').value,
        title_6: document.getElementById('InputWorkTitle6').value,
        title_6_eng: document.getElementById('InputWorkTitle6Eng').value,
        img_7: bases64.InputWorkImg7,
        type_7_1: document.getElementById('InputWorkType71').value,
        type_7_1_eng: document.getElementById('InputWorkType71Eng').value,
        type_7_2: document.getElementById('InputWorkType72').value,
        type_7_2_eng: document.getElementById('InputWorkType72Eng').value,
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
