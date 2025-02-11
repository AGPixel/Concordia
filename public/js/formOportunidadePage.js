
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
    InputOportunidadeImg5: null,
    InputOportunidadeImg6: null,
    InputOportunidadeImg7: null,
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
const InputOportunidadeImg5 = document.getElementById("InputOportunidadeImg5");
InputOportunidadeImg5.addEventListener("change", load_image_oportunidade_preview5, false);
async function load_image_oportunidade_preview5() {
    document.getElementById('ImageOportunidadeImg5Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg5 = await toBase64(this.files[0]);
}
const InputOportunidadeImg6 = document.getElementById("InputOportunidadeImg6");
InputOportunidadeImg6.addEventListener("change", load_image_oportunidade_preview6, false);
async function load_image_oportunidade_preview6() {
    document.getElementById('ImageOportunidadeImg6Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg6 = await toBase64(this.files[0]);
}
const InputOportunidadeImg7 = document.getElementById("InputOportunidadeImg7");
InputOportunidadeImg7.addEventListener("change", load_image_oportunidade_preview7, false);
async function load_image_oportunidade_preview7() {
    document.getElementById('ImageOportunidadeImg7Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg7 = await toBase64(this.files[0]);
}

function saveOportunidadePage(id) {
    console.log("saveOportunidadePage");

    showLoading();

    let form = {
        id: id,
        title: document.getElementById('InputOportunidadeTitle').value,
        description: document.getElementById('InputOportunidadeDescription').value,
        img_1: bases64.InputOportunidadeImg1,
        type_1: document.getElementById('InputOportunidadeType1').value,
        title_1: document.getElementById('InputOportunidadeTitle1').value,
        img_2: bases64.InputOportunidadeImg2,
        type_2: document.getElementById('InputOportunidadeType2').value,
        title_2: document.getElementById('InputOportunidadeTitle2').value,
        img_3: bases64.InputOportunidadeImg3,
        type_3: document.getElementById('InputOportunidadeType3').value,
        title_3: document.getElementById('InputOportunidadeTitle3').value,
        img_4: bases64.InputOportunidadeImg4,
        type_4: document.getElementById('InputOportunidadeType4').value,
        title_4: document.getElementById('InputOportunidadeTitle4').value,
        img_5: bases64.InputOportunidadeImg5,
        type_5: document.getElementById('InputOportunidadeType5').value,
        title_5: document.getElementById('InputOportunidadeTitle5').value,
        img_6: bases64.InputOportunidadeImg6,
        type_6: document.getElementById('InputOportunidadeType6').value,
        title_6: document.getElementById('InputOportunidadeTitle6').value,
        img_7: bases64.InputOportunidadeImg7,
        type_7: document.getElementById('InputOportunidadeType7').value,
        title_7: document.getElementById('InputOportunidadeTitle7').value,
        active: 1,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-oportunidade-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        window.location.href = "/list-oportunidade-page";
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
