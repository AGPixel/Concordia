
let toBase64 = file => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
});

let bases64 = {
    InputPropriedadeImg1: null,
    InputPropriedadeImg2: null,
    InputPropriedadeImg3: null,
    InputPropriedadeImg4: null,
    InputPropriedadeImg5: null,
    InputPropriedadeImg6: null,
    InputPropriedadeImg7: null,
};
const InputPropriedadeImg1 = document.getElementById("InputPropriedadeImg1");
InputPropriedadeImg1.addEventListener("change", load_image_propriedade_preview1, false);
async function load_image_propriedade_preview1() {
    document.getElementById('ImagePropriedadeImg1Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg1 = await toBase64(this.files[0]);
}
const InputPropriedadeImg2 = document.getElementById("InputPropriedadeImg2");
InputPropriedadeImg2.addEventListener("change", load_image_propriedade_preview2, false);
async function load_image_propriedade_preview2() {
    document.getElementById('ImagePropriedadeImg2Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg2 = await toBase64(this.files[0]);
}
const InputPropriedadeImg3 = document.getElementById("InputPropriedadeImg3");
InputPropriedadeImg3.addEventListener("change", load_image_propriedade_preview3, false);
async function load_image_propriedade_preview3() {
    document.getElementById('ImagePropriedadeImg3Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg3 = await toBase64(this.files[0]);
}
const InputPropriedadeImg4 = document.getElementById("InputPropriedadeImg4");
InputPropriedadeImg4.addEventListener("change", load_image_propriedade_preview4, false);
async function load_image_propriedade_preview4() {
    document.getElementById('ImagePropriedadeImg4Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg4 = await toBase64(this.files[0]);
}
const InputPropriedadeImg5 = document.getElementById("InputPropriedadeImg5");
InputPropriedadeImg5.addEventListener("change", load_image_propriedade_preview5, false);
async function load_image_propriedade_preview5() {
    document.getElementById('ImagePropriedadeImg5Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg5 = await toBase64(this.files[0]);
}
const InputPropriedadeImg6 = document.getElementById("InputPropriedadeImg6");
InputPropriedadeImg6.addEventListener("change", load_image_propriedade_preview6, false);
async function load_image_propriedade_preview6() {
    document.getElementById('ImagePropriedadeImg6Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg6 = await toBase64(this.files[0]);
}
const InputPropriedadeImg7 = document.getElementById("InputPropriedadeImg7");
InputPropriedadeImg7.addEventListener("change", load_image_propriedade_preview7, false);
async function load_image_propriedade_preview7() {
    document.getElementById('ImagePropriedadeImg7Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg7 = await toBase64(this.files[0]);
}

function savePropriedadePage(id) {

    showLoading();

    let form = {
        id: id,
        title: document.getElementById('InputPropriedadeTitle').value,
        title_eng: document.getElementById('InputPropriedadeTitleEng').value,
        description: document.getElementById('InputPropriedadeDescription').value,
        description_eng: document.getElementById('InputPropriedadeDescriptionEng').value,
        year: document.getElementById('InputPropriedadeYear').value,
        job_1: document.getElementById('InputPropriedadeJob1').value,
        job_1_eng: document.getElementById('InputPropriedadeJob1Eng').value,
        job_2: document.getElementById('InputPropriedadeJob2').value,
        job_2_eng: document.getElementById('InputPropriedadeJob2Eng').value,
        img_1: bases64.InputPropriedadeImg1,
        type_1: document.getElementById('InputPropriedadeType1').value,
        type_1_eng: document.getElementById('InputPropriedadeType1Eng').value,
        //legend_1: document.getElementById('InputPropriedadeLegend1').value,
        //legend_1_eng: document.getElementById('InputPropriedadeLegend1Eng').value,
        img_2: bases64.InputPropriedadeImg2,
        type_2: document.getElementById('InputPropriedadeType2').value,
        type_2_eng: document.getElementById('InputPropriedadeType2Eng').value,
        //legend_2: document.getElementById('InputPropriedadeLegend2').value,
        //legend_2_eng: document.getElementById('InputPropriedadeLegend2Eng').value,
        img_3: bases64.InputPropriedadeImg3,
        type_3: document.getElementById('InputPropriedadeType3').value,
        type_3_eng: document.getElementById('InputPropriedadeType3Eng').value,
        //legend_3: document.getElementById('InputPropriedadeLegend3').value,
        //legend_3_eng: document.getElementById('InputPropriedadeLegend3Eng').value,
        img_4: bases64.InputPropriedadeImg4,
        type_4: document.getElementById('InputPropriedadeType4').value,
        type_4_eng: document.getElementById('InputPropriedadeType4Eng').value,
        //legend_4: document.getElementById('InputPropriedadeLegend4').value,
        //legend_4_eng: document.getElementById('InputPropriedadeLegend4Eng').value,
        img_5: bases64.InputPropriedadeImg5,
        type_5: document.getElementById('InputPropriedadeType5').value,
        type_5_eng: document.getElementById('InputPropriedadeType5Eng').value,
        //legend_5: document.getElementById('InputPropriedadeLegend5').value,
        //legend_5_eng: document.getElementById('InputPropriedadeLegend5Eng').value,
        img_6: bases64.InputPropriedadeImg6,
        type_6: document.getElementById('InputPropriedadeType6').value,
        type_6_eng: document.getElementById('InputPropriedadeType6Eng').value,
        //legend_6: document.getElementById('InputPropriedadeLegend6').value,
        //legend_6_eng: document.getElementById('InputPropriedadeLegend6Eng').value,
        img_7: bases64.InputPropriedadeImg7,
        type_7: document.getElementById('InputPropriedadeType7').value,
        type_7_eng: document.getElementById('InputPropriedadeType7Eng').value,
        //legend_7: document.getElementById('InputPropriedadeLegend7').value,
        //legend_7_eng: document.getElementById('InputPropriedadeLegend7Eng').value,
        active: 1,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-propriedade-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        window.location.href = "/pt/list-propriedade-page";
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
