
let toBase64 = file => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
});

let bases64 = {
    InputOportunidadeImg1: null,
    InputOportunidadeImg2: null,
    InputOportunidadeImg3: null,
    InputOportunidadeImg4: null,
};
const InputOportunidadeImg1 = document.getElementById("InputOportunidadeImg1");
InputOportunidadeImg1.addEventListener("change", load_image_oportunidade_preview1, false);
async function load_image_oportunidade_preview1() {
    document.getElementById('ImageOportunidadeImg1Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg1 = await toBase64(this.files[0]);
}
const InputOportunidadeImg2 = document.getElementById("InputOportunidadeImg2");
InputOportunidadeImg2.addEventListener("change", load_image_oportunidade_preview2, false);
async function load_image_oportunidade_preview2() {
    document.getElementById('ImageOportunidadeImg2Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg2 = await toBase64(this.files[0]);
}
const InputOportunidadeImg3 = document.getElementById("InputOportunidadeImg3");
InputOportunidadeImg3.addEventListener("change", load_image_oportunidade_preview3, false);
async function load_image_oportunidade_preview3() {
    document.getElementById('ImageOportunidadeImg3Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg3 = await toBase64(this.files[0]);
}
const InputOportunidadeImg4 = document.getElementById("InputOportunidadeImg4");
InputOportunidadeImg4.addEventListener("change", load_image_oportunidade_preview4, false);
async function load_image_oportunidade_preview4() {
    document.getElementById('ImageOportunidadeImg4Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg4 = await toBase64(this.files[0]);
}

function saveOportunidadePage(id) {
    console.log("saveOportunidadePage");

    showLoading();

    let form = {
        id: id,
        title: document.getElementById('InputOportunidadeTitle').value,
        title_eng: document.getElementById('InputOportunidadeTitleEng').value,
        description: document.getElementById('InputOportunidadeDescription').value,
        description_eng: document.getElementById('InputOportunidadeDescriptionEng').value,
        year: document.getElementById('InputOportunidadeYear').value,
        job_1: document.getElementById('InputOportunidadeJob1').value,
        job_1_eng: document.getElementById('InputOportunidadeJob1Eng').value,
        job_2: document.getElementById('InputOportunidadeJob2').value,
        job_2_eng: document.getElementById('InputOportunidadeJob2Eng').value,
        img_1: bases64.InputOportunidadeImg1,
        type_1: document.getElementById('InputOportunidadeType1').value,
        type_1_eng: document.getElementById('InputOportunidadeType1Eng').value,
        title_1: document.getElementById('InputOportunidadeTitle1').value,
        title_1_eng: document.getElementById('InputOportunidadeTitle1Eng').value,
        img_2: bases64.InputOportunidadeImg2,
        type_2: document.getElementById('InputOportunidadeType2').value,
        type_2_eng: document.getElementById('InputOportunidadeType2Eng').value,
        title_2: document.getElementById('InputOportunidadeTitle2').value,
        title_2_eng: document.getElementById('InputOportunidadeTitle2Eng').value,
        img_3: bases64.InputOportunidadeImg3,
        type_3: document.getElementById('InputOportunidadeType3').value,
        type_3_eng: document.getElementById('InputOportunidadeType3Eng').value,
        title_3: document.getElementById('InputOportunidadeTitle3').value,
        title_3_eng: document.getElementById('InputOportunidadeTitle3Eng').value,
        img_4: bases64.InputOportunidadeImg4,
        type_4: document.getElementById('InputOportunidadeType4').value,
        type_4_eng: document.getElementById('InputOportunidadeType4Eng').value,
        title_4: document.getElementById('InputOportunidadeTitle4').value,
        title_4_eng: document.getElementById('InputOportunidadeTitle4Eng').value,
        active: 1,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-oportunidade-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        window.location.href = "/pt/list-oportunidade-page";
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
