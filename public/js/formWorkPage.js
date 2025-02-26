
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
    InputWorkImg8: null,
    InputWorkImg9: null,
    InputWorkImg10: null,
    InputWorkImg11: null,
    InputWorkImg12: null,
    InputWorkImg13: null,
    InputWorkImg14: null,
    InputWorkImg15: null,
    InputWorkImg16: null,
    InputWorkImg17: null,
    InputWorkImg18: null,
    InputWorkImg19: null,
    InputWorkImg20: null,
    InputWorkImg21: null,
    InputWorkImg22: null,
    InputWorkImg23: null,
    InputWorkImg24: null,
    InputWorkImg25: null,
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
const inputWorkImg8 = document.getElementById("InputWorkImg8");
inputWorkImg8.addEventListener("change", load_image_work_preview8, false);
async function load_image_work_preview8() {
    document.getElementById('ImageWorkImg8Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg8 = await toBase64(this.files[0]);
}
const inputWorkImg9 = document.getElementById("InputWorkImg9");
inputWorkImg9.addEventListener("change", load_image_work_preview9, false);
async function load_image_work_preview9() {
    document.getElementById('ImageWorkImg9Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg9 = await toBase64(this.files[0]);
}
const inputWorkImg10 = document.getElementById("InputWorkImg10");
inputWorkImg10.addEventListener("change", load_image_work_preview10, false);
async function load_image_work_preview10() {
    document.getElementById('ImageWorkImg10Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg10 = await toBase64(this.files[0]);
}
const inputWorkImg11 = document.getElementById("InputWorkImg11");
inputWorkImg11.addEventListener("change", load_image_work_preview11, false);
async function load_image_work_preview11() {
    document.getElementById('ImageWorkImg11Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg11 = await toBase64(this.files[0]);
}
const inputWorkImg12 = document.getElementById("InputWorkImg12");
inputWorkImg12.addEventListener("change", load_image_work_preview12, false);
async function load_image_work_preview12() {
    document.getElementById('ImageWorkImg12Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg12 = await toBase64(this.files[0]);
}
const inputWorkImg13 = document.getElementById("InputWorkImg13");
inputWorkImg13.addEventListener("change", load_image_work_preview13, false);
async function load_image_work_preview13() {
    document.getElementById('ImageWorkImg13Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg13 = await toBase64(this.files[0]);
}
const inputWorkImg14 = document.getElementById("InputWorkImg14");
inputWorkImg14.addEventListener("change", load_image_work_preview14, false);
async function load_image_work_preview14() {
    document.getElementById('ImageWorkImg14Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg14 = await toBase64(this.files[0]);
}
const inputWorkImg15 = document.getElementById("InputWorkImg15");
inputWorkImg15.addEventListener("change", load_image_work_preview15, false);
async function load_image_work_preview15() {
    document.getElementById('ImageWorkImg15Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg15 = await toBase64(this.files[0]);
}
const inputWorkImg16 = document.getElementById("InputWorkImg16");
inputWorkImg16.addEventListener("change", load_image_work_preview16, false);
async function load_image_work_preview16() {
    document.getElementById('ImageWorkImg16Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg16 = await toBase64(this.files[0]);
}
const inputWorkImg17 = document.getElementById("InputWorkImg17");
inputWorkImg17.addEventListener("change", load_image_work_preview17, false);
async function load_image_work_preview17() {
    document.getElementById('ImageWorkImg17Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg17 = await toBase64(this.files[0]);
}
const inputWorkImg18 = document.getElementById("InputWorkImg18");
inputWorkImg18.addEventListener("change", load_image_work_preview18, false);
async function load_image_work_preview18() {
    document.getElementById('ImageWorkImg18Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg18 = await toBase64(this.files[0]);
}
const inputWorkImg19 = document.getElementById("InputWorkImg19");
inputWorkImg19.addEventListener("change", load_image_work_preview19, false);
async function load_image_work_preview19() {
    document.getElementById('ImageWorkImg19Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg19 = await toBase64(this.files[0]);
}
const inputWorkImg20 = document.getElementById("InputWorkImg20");
inputWorkImg20.addEventListener("change", load_image_work_preview20, false);
async function load_image_work_preview20() {
    document.getElementById('ImageWorkImg20Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg20 = await toBase64(this.files[0]);
}
const inputWorkImg21 = document.getElementById("InputWorkImg21");
inputWorkImg21.addEventListener("change", load_image_work_preview21, false);
async function load_image_work_preview21() {
    document.getElementById('ImageWorkImg21Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg21 = await toBase64(this.files[0]);
}
const inputWorkImg22 = document.getElementById("InputWorkImg22");
inputWorkImg22.addEventListener("change", load_image_work_preview22, false);
async function load_image_work_preview22() {
    document.getElementById('ImageWorkImg22Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg22 = await toBase64(this.files[0]);
}
const inputWorkImg23 = document.getElementById("InputWorkImg23");
inputWorkImg23.addEventListener("change", load_image_work_preview23, false);
async function load_image_work_preview23() {
    document.getElementById('ImageWorkImg23Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg23 = await toBase64(this.files[0]);
}
const inputWorkImg24 = document.getElementById("InputWorkImg24");
inputWorkImg24.addEventListener("change", load_image_work_preview24, false);
async function load_image_work_preview24() {
    document.getElementById('ImageWorkImg24Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg24 = await toBase64(this.files[0]);
}
const inputWorkImg25 = document.getElementById("InputWorkImg25");
inputWorkImg25.addEventListener("change", load_image_work_preview25, false);
async function load_image_work_preview25() {
    document.getElementById('ImageWorkImg25Preview').innerHTML = this.files[0].name;
    bases64.InputWorkImg25 = await toBase64(this.files[0]);
}

function saveWorkPage(id) {

    showLoading();

    let form = {
        meta_tags_title: document.getElementById('InputMetaTagsTitle').value,
        meta_tags_description: document.getElementById('InputMetaTagsDescription').value,
        meta_tags_keywords: document.getElementById('InputMetaTagsKeywords').value,

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
        img_8: bases64.InputWorkImg8,
        type_8_1: document.getElementById('InputWorkType81').value,
        type_8_1_eng: document.getElementById('InputWorkType81Eng').value,
        type_8_2: document.getElementById('InputWorkType82').value,
        type_8_2_eng: document.getElementById('InputWorkType82Eng').value,
        title_8: document.getElementById('InputWorkTitle8').value,
        title_8_eng: document.getElementById('InputWorkTitle8Eng').value,
        img_9: bases64.InputWorkImg9,
        type_9_1: document.getElementById('InputWorkType91').value,
        type_9_1_eng: document.getElementById('InputWorkType91Eng').value,
        type_9_2: document.getElementById('InputWorkType92').value,
        type_9_2_eng: document.getElementById('InputWorkType92Eng').value,
        title_9: document.getElementById('InputWorkTitle9').value,
        title_9_eng: document.getElementById('InputWorkTitle9Eng').value,
        img_10: bases64.InputWorkImg10,
        type_10_1: document.getElementById('InputWorkType101').value,
        type_10_1_eng: document.getElementById('InputWorkType101Eng').value,
        type_10_2: document.getElementById('InputWorkType102').value,
        type_10_2_eng: document.getElementById('InputWorkType102Eng').value,
        title_10: document.getElementById('InputWorkTitle10').value,
        title_10_eng: document.getElementById('InputWorkTitle10Eng').value,
        img_11: bases64.InputWorkImg11,
        type_11_1: document.getElementById('InputWorkType111').value,
        type_11_1_eng: document.getElementById('InputWorkType111Eng').value,
        type_11_2: document.getElementById('InputWorkType112').value,
        type_11_2_eng: document.getElementById('InputWorkType112Eng').value,
        title_11: document.getElementById('InputWorkTitle11').value,
        title_11_eng: document.getElementById('InputWorkTitle11Eng').value,
        img_12: bases64.InputWorkImg12,
        type_12_1: document.getElementById('InputWorkType121').value,
        type_12_1_eng: document.getElementById('InputWorkType121Eng').value,
        type_12_2: document.getElementById('InputWorkType122').value,
        type_12_2_eng: document.getElementById('InputWorkType122Eng').value,
        title_12: document.getElementById('InputWorkTitle12').value,
        title_12_eng: document.getElementById('InputWorkTitle12Eng').value,
        img_13: bases64.InputWorkImg13,
        type_13_1: document.getElementById('InputWorkType131').value,
        type_13_1_eng: document.getElementById('InputWorkType131Eng').value,
        type_13_2: document.getElementById('InputWorkType132').value,
        type_13_2_eng: document.getElementById('InputWorkType132Eng').value,
        title_13: document.getElementById('InputWorkTitle13').value,
        title_13_eng: document.getElementById('InputWorkTitle13Eng').value,
        img_14: bases64.InputWorkImg14,
        type_14_1: document.getElementById('InputWorkType141').value,
        type_14_1_eng: document.getElementById('InputWorkType141Eng').value,
        type_14_2: document.getElementById('InputWorkType142').value,
        type_14_2_eng: document.getElementById('InputWorkType142Eng').value,
        title_14: document.getElementById('InputWorkTitle14').value,
        title_14_eng: document.getElementById('InputWorkTitle14Eng').value,
        img_15: bases64.InputWorkImg15,
        type_15_1: document.getElementById('InputWorkType151').value,
        type_15_1_eng: document.getElementById('InputWorkType151Eng').value,
        type_15_2: document.getElementById('InputWorkType152').value,
        type_15_2_eng: document.getElementById('InputWorkType152Eng').value,
        title_15: document.getElementById('InputWorkTitle15').value,
        title_15_eng: document.getElementById('InputWorkTitle15Eng').value,
        img_16: bases64.InputWorkImg16,
        type_16_1: document.getElementById('InputWorkType161').value,
        type_16_1_eng: document.getElementById('InputWorkType161Eng').value,
        type_16_2: document.getElementById('InputWorkType162').value,
        type_16_2_eng: document.getElementById('InputWorkType162Eng').value,
        title_16: document.getElementById('InputWorkTitle16').value,
        title_16_eng: document.getElementById('InputWorkTitle16Eng').value,
        img_17: bases64.InputWorkImg17,
        type_17_1: document.getElementById('InputWorkType171').value,
        type_17_1_eng: document.getElementById('InputWorkType171Eng').value,
        type_17_2: document.getElementById('InputWorkType172').value,
        type_17_2_eng: document.getElementById('InputWorkType172Eng').value,
        title_17: document.getElementById('InputWorkTitle17').value,
        title_17_eng: document.getElementById('InputWorkTitle17Eng').value,
        img_18: bases64.InputWorkImg18,
        type_18_1: document.getElementById('InputWorkType181').value,
        type_18_1_eng: document.getElementById('InputWorkType181Eng').value,
        type_18_2: document.getElementById('InputWorkType182').value,
        type_18_2_eng: document.getElementById('InputWorkType182Eng').value,
        title_18: document.getElementById('InputWorkTitle18').value,
        title_18_eng: document.getElementById('InputWorkTitle18Eng').value,
        img_19: bases64.InputWorkImg19,
        type_19_1: document.getElementById('InputWorkType191').value,
        type_19_1_eng: document.getElementById('InputWorkType191Eng').value,
        type_19_2: document.getElementById('InputWorkType192').value,
        type_19_2_eng: document.getElementById('InputWorkType192Eng').value,
        title_19: document.getElementById('InputWorkTitle19').value,
        title_19_eng: document.getElementById('InputWorkTitle19Eng').value,
        img_20: bases64.InputWorkImg20,
        type_20_1: document.getElementById('InputWorkType201').value,
        type_20_1_eng: document.getElementById('InputWorkType201Eng').value,
        type_20_2: document.getElementById('InputWorkType202').value,
        type_20_2_eng: document.getElementById('InputWorkType202Eng').value,
        title_20: document.getElementById('InputWorkTitle20').value,
        title_20_eng: document.getElementById('InputWorkTitle20Eng').value,
        img_21: bases64.InputWorkImg21,
        type_21_1: document.getElementById('InputWorkType211').value,
        type_21_1_eng: document.getElementById('InputWorkType211Eng').value,
        type_21_2: document.getElementById('InputWorkType212').value,
        type_21_2_eng: document.getElementById('InputWorkType212Eng').value,
        title_21: document.getElementById('InputWorkTitle21').value,
        title_21_eng: document.getElementById('InputWorkTitle21Eng').value,
        img_22: bases64.InputWorkImg22,
        type_22_1: document.getElementById('InputWorkType221').value,
        type_22_1_eng: document.getElementById('InputWorkType221Eng').value,
        type_22_2: document.getElementById('InputWorkType222').value,
        type_22_2_eng: document.getElementById('InputWorkType222Eng').value,
        title_22: document.getElementById('InputWorkTitle22').value,
        title_22_eng: document.getElementById('InputWorkTitle22Eng').value,
        img_23: bases64.InputWorkImg23,
        type_23_1: document.getElementById('InputWorkType231').value,
        type_23_1_eng: document.getElementById('InputWorkType231Eng').value,
        type_23_2: document.getElementById('InputWorkType232').value,
        type_23_2_eng: document.getElementById('InputWorkType232Eng').value,
        title_23: document.getElementById('InputWorkTitle23').value,
        title_23_eng: document.getElementById('InputWorkTitle23Eng').value,
        img_24: bases64.InputWorkImg24,
        type_24_1: document.getElementById('InputWorkType241').value,
        type_24_1_eng: document.getElementById('InputWorkType241Eng').value,
        type_24_2: document.getElementById('InputWorkType242').value,
        type_24_2_eng: document.getElementById('InputWorkType242Eng').value,
        title_24: document.getElementById('InputWorkTitle24').value,
        title_24_eng: document.getElementById('InputWorkTitle24Eng').value,
        img_25: bases64.InputWorkImg25,
        type_25_1: document.getElementById('InputWorkType251').value,
        type_25_1_eng: document.getElementById('InputWorkType251Eng').value,
        type_25_2: document.getElementById('InputWorkType252').value,
        type_25_2_eng: document.getElementById('InputWorkType252Eng').value,
        title_25: document.getElementById('InputWorkTitle25').value,
        title_25_eng: document.getElementById('InputWorkTitle25Eng').value,
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

function showNewImage(num) {
    document.getElementById('bt-portifolio-nova-imagem' + (num - 1)).classList.add('card-invisible');
    document.getElementById('container-img-' + num).classList.remove('card-invisible');
}
