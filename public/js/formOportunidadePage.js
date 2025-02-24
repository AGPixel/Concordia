
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
    InputOportunidadeImg8: null,
    InputOportunidadeImg9: null,
    InputOportunidadeImg10: null,
    InputOportunidadeImg11: null,
    InputOportunidadeImg12: null,
    InputOportunidadeImg13: null,
    InputOportunidadeImg14: null,
    InputOportunidadeImg15: null,
    InputOportunidadeImg16: null,
    InputOportunidadeImg17: null,
    InputOportunidadeImg18: null,
    InputOportunidadeImg19: null,
    InputOportunidadeImg20: null,
    InputOportunidadeImg21: null,
    InputOportunidadeImg22: null,
    InputOportunidadeImg23: null,
    InputOportunidadeImg24: null,
    InputOportunidadeImg25: null,
};
const inputOportunidadeImg1 = document.getElementById("InputOportunidadeImg1");
inputOportunidadeImg1.addEventListener("change", load_image_oportunidade_preview1, false);
async function load_image_oportunidade_preview1() {
    document.getElementById('ImageOportunidadeImg1Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg1 = await toBase64(this.files[0]);
}
const inputOportunidadeImg2 = document.getElementById("InputOportunidadeImg2");
inputOportunidadeImg2.addEventListener("change", load_image_oportunidade_preview2, false);
async function load_image_oportunidade_preview2() {
    document.getElementById('ImageOportunidadeImg2Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg2 = await toBase64(this.files[0]);
}
const inputOportunidadeImg3 = document.getElementById("InputOportunidadeImg3");
inputOportunidadeImg3.addEventListener("change", load_image_oportunidade_preview3, false);
async function load_image_oportunidade_preview3() {
    document.getElementById('ImageOportunidadeImg3Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg3 = await toBase64(this.files[0]);
}
const inputOportunidadeImg4 = document.getElementById("InputOportunidadeImg4");
inputOportunidadeImg4.addEventListener("change", load_image_oportunidade_preview4, false);
async function load_image_oportunidade_preview4() {
    document.getElementById('ImageOportunidadeImg4Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg4 = await toBase64(this.files[0]);
}
const inputOportunidadeImg5 = document.getElementById("InputOportunidadeImg5");
inputOportunidadeImg5.addEventListener("change", load_image_oportunidade_preview5, false);
async function load_image_oportunidade_preview5() {
    document.getElementById('ImageOportunidadeImg5Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg5 = await toBase64(this.files[0]);
}
const inputOportunidadeImg6 = document.getElementById("InputOportunidadeImg6");
inputOportunidadeImg6.addEventListener("change", load_image_oportunidade_preview6, false);
async function load_image_oportunidade_preview6() {
    document.getElementById('ImageOportunidadeImg6Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg6 = await toBase64(this.files[0]);
}
const inputOportunidadeImg7 = document.getElementById("InputOportunidadeImg7");
inputOportunidadeImg7.addEventListener("change", load_image_oportunidade_preview7, false);
async function load_image_oportunidade_preview7() {
    document.getElementById('ImageOportunidadeImg7Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg7 = await toBase64(this.files[0]);
}
const inputOportunidadeImg8 = document.getElementById("InputOportunidadeImg8");
inputOportunidadeImg8.addEventListener("change", load_image_oportunidade_preview8, false);
async function load_image_oportunidade_preview8() {
    document.getElementById('ImageOportunidadeImg8Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg8 = await toBase64(this.files[0]);
}
const inputOportunidadeImg9 = document.getElementById("InputOportunidadeImg9");
inputOportunidadeImg9.addEventListener("change", load_image_oportunidade_preview9, false);
async function load_image_oportunidade_preview9() {
    document.getElementById('ImageOportunidadeImg9Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg9 = await toBase64(this.files[0]);
}
const inputOportunidadeImg10 = document.getElementById("InputOportunidadeImg10");
inputOportunidadeImg10.addEventListener("change", load_image_oportunidade_preview10, false);
async function load_image_oportunidade_preview10() {
    document.getElementById('ImageOportunidadeImg10Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg10 = await toBase64(this.files[0]);
}
const inputOportunidadeImg11 = document.getElementById("InputOportunidadeImg11");
inputOportunidadeImg11.addEventListener("change", load_image_oportunidade_preview11, false);
async function load_image_oportunidade_preview11() {
    document.getElementById('ImageOportunidadeImg11Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg11 = await toBase64(this.files[0]);
}
const inputOportunidadeImg12 = document.getElementById("InputOportunidadeImg12");
inputOportunidadeImg12.addEventListener("change", load_image_oportunidade_preview12, false);
async function load_image_oportunidade_preview12() {
    document.getElementById('ImageOportunidadeImg12Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg12 = await toBase64(this.files[0]);
}
const inputOportunidadeImg13 = document.getElementById("InputOportunidadeImg13");
inputOportunidadeImg13.addEventListener("change", load_image_oportunidade_preview13, false);
async function load_image_oportunidade_preview13() {
    document.getElementById('ImageOportunidadeImg13Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg13 = await toBase64(this.files[0]);
}
const inputOportunidadeImg14 = document.getElementById("InputOportunidadeImg14");
inputOportunidadeImg14.addEventListener("change", load_image_oportunidade_preview14, false);
async function load_image_oportunidade_preview14() {
    document.getElementById('ImageOportunidadeImg14Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg14 = await toBase64(this.files[0]);
}
const inputOportunidadeImg15 = document.getElementById("InputOportunidadeImg15");
inputOportunidadeImg15.addEventListener("change", load_image_oportunidade_preview15, false);
async function load_image_oportunidade_preview15() {
    document.getElementById('ImageOportunidadeImg15Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg15 = await toBase64(this.files[0]);
}
const inputOportunidadeImg16 = document.getElementById("InputOportunidadeImg16");
inputOportunidadeImg16.addEventListener("change", load_image_oportunidade_preview16, false);
async function load_image_oportunidade_preview16() {
    document.getElementById('ImageOportunidadeImg16Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg16 = await toBase64(this.files[0]);
}
const inputOportunidadeImg17 = document.getElementById("InputOportunidadeImg17");
inputOportunidadeImg17.addEventListener("change", load_image_oportunidade_preview17, false);
async function load_image_oportunidade_preview17() {
    document.getElementById('ImageOportunidadeImg17Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg17 = await toBase64(this.files[0]);
}
const inputOportunidadeImg18 = document.getElementById("InputOportunidadeImg18");
inputOportunidadeImg18.addEventListener("change", load_image_oportunidade_preview18, false);
async function load_image_oportunidade_preview18() {
    document.getElementById('ImageOportunidadeImg18Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg18 = await toBase64(this.files[0]);
}
const inputOportunidadeImg19 = document.getElementById("InputOportunidadeImg19");
inputOportunidadeImg19.addEventListener("change", load_image_oportunidade_preview19, false);
async function load_image_oportunidade_preview19() {
    document.getElementById('ImageOportunidadeImg19Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg19 = await toBase64(this.files[0]);
}
const inputOportunidadeImg20 = document.getElementById("InputOportunidadeImg20");
inputOportunidadeImg20.addEventListener("change", load_image_oportunidade_preview20, false);
async function load_image_oportunidade_preview20() {
    document.getElementById('ImageOportunidadeImg20Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg20 = await toBase64(this.files[0]);
}
const inputOportunidadeImg21 = document.getElementById("InputOportunidadeImg21");
inputOportunidadeImg21.addEventListener("change", load_image_oportunidade_preview21, false);
async function load_image_oportunidade_preview21() {
    document.getElementById('ImageOportunidadeImg21Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg21 = await toBase64(this.files[0]);
}
const inputOportunidadeImg22 = document.getElementById("InputOportunidadeImg22");
inputOportunidadeImg22.addEventListener("change", load_image_oportunidade_preview22, false);
async function load_image_oportunidade_preview22() {
    document.getElementById('ImageOportunidadeImg22Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg22 = await toBase64(this.files[0]);
}
const inputOportunidadeImg23 = document.getElementById("InputOportunidadeImg23");
inputOportunidadeImg23.addEventListener("change", load_image_oportunidade_preview23, false);
async function load_image_oportunidade_preview23() {
    document.getElementById('ImageOportunidadeImg23Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg23 = await toBase64(this.files[0]);
}
const inputOportunidadeImg24 = document.getElementById("InputOportunidadeImg24");
inputOportunidadeImg24.addEventListener("change", load_image_oportunidade_preview24, false);
async function load_image_oportunidade_preview24() {
    document.getElementById('ImageOportunidadeImg24Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg24 = await toBase64(this.files[0]);
}
const inputOportunidadeImg25 = document.getElementById("InputOportunidadeImg25");
inputOportunidadeImg25.addEventListener("change", load_image_oportunidade_preview25, false);
async function load_image_oportunidade_preview25() {
    document.getElementById('ImageOportunidadeImg25Preview').innerHTML = this.files[0].name;
    bases64.InputOportunidadeImg25 = await toBase64(this.files[0]);
}

function saveOportunidadePage(id) {

    showLoading();

    let form = {
        meta_tags_title: document.getElementById('InputMetaTagsTitle').value,
        meta_tags_description: document.getElementById('InputMetaTagsDescription').value,
        meta_tags_keywords: document.getElementById('InputMetaTagsKeywords').value,

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
        img_5: bases64.InputOportunidadeImg5,
        type_5: document.getElementById('InputOportunidadeType5').value,
        type_5_eng: document.getElementById('InputOportunidadeType5Eng').value,
        title_5: document.getElementById('InputOportunidadeTitle5').value,
        title_5_eng: document.getElementById('InputOportunidadeTitle5Eng').value,
        img_6: bases64.InputOportunidadeImg6,
        type_6: document.getElementById('InputOportunidadeType6').value,
        type_6_eng: document.getElementById('InputOportunidadeType6Eng').value,
        title_6: document.getElementById('InputOportunidadeTitle6').value,
        title_6_eng: document.getElementById('InputOportunidadeTitle6Eng').value,
        img_7: bases64.InputOportunidadeImg7,
        type_7: document.getElementById('InputOportunidadeType7').value,
        type_7_eng: document.getElementById('InputOportunidadeType7Eng').value,
        title_7: document.getElementById('InputOportunidadeTitle7').value,
        title_7_eng: document.getElementById('InputOportunidadeTitle7Eng').value,
        img_8: bases64.InputOportunidadeImg8,
        type_8: document.getElementById('InputOportunidadeType8').value,
        type_8_eng: document.getElementById('InputOportunidadeType8Eng').value,
        title_8: document.getElementById('InputOportunidadeTitle8').value,
        title_8_eng: document.getElementById('InputOportunidadeTitle8Eng').value,
        img_9: bases64.InputOportunidadeImg9,
        type_9: document.getElementById('InputOportunidadeType9').value,
        type_9_eng: document.getElementById('InputOportunidadeType9Eng').value,
        title_9: document.getElementById('InputOportunidadeTitle9').value,
        title_9_eng: document.getElementById('InputOportunidadeTitle9Eng').value,
        img_10: bases64.InputOportunidadeImg10,
        type_10: document.getElementById('InputOportunidadeType10').value,
        type_10_eng: document.getElementById('InputOportunidadeType10Eng').value,
        title_10: document.getElementById('InputOportunidadeTitle10').value,
        title_10_eng: document.getElementById('InputOportunidadeTitle10Eng').value,
        img_11: bases64.InputOportunidadeImg11,
        type_11: document.getElementById('InputOportunidadeType11').value,
        type_11_eng: document.getElementById('InputOportunidadeType11Eng').value,
        title_11: document.getElementById('InputOportunidadeTitle11').value,
        title_11_eng: document.getElementById('InputOportunidadeTitle11Eng').value,
        img_12: bases64.InputOportunidadeImg12,
        type_12: document.getElementById('InputOportunidadeType12').value,
        type_12_eng: document.getElementById('InputOportunidadeType12Eng').value,
        title_12: document.getElementById('InputOportunidadeTitle12').value,
        title_12_eng: document.getElementById('InputOportunidadeTitle12Eng').value,
        img_13: bases64.InputOportunidadeImg13,
        type_13: document.getElementById('InputOportunidadeType13').value,
        type_13_eng: document.getElementById('InputOportunidadeType13Eng').value,
        title_13: document.getElementById('InputOportunidadeTitle13').value,
        title_13_eng: document.getElementById('InputOportunidadeTitle13Eng').value,
        img_14: bases64.InputOportunidadeImg14,
        type_14: document.getElementById('InputOportunidadeType14').value,
        type_14_eng: document.getElementById('InputOportunidadeType14Eng').value,
        title_14: document.getElementById('InputOportunidadeTitle14').value,
        title_14_eng: document.getElementById('InputOportunidadeTitle14Eng').value,
        img_15: bases64.InputOportunidadeImg15,
        type_15: document.getElementById('InputOportunidadeType15').value,
        type_15_eng: document.getElementById('InputOportunidadeType15Eng').value,
        title_15: document.getElementById('InputOportunidadeTitle15').value,
        title_15_eng: document.getElementById('InputOportunidadeTitle15Eng').value,
        img_16: bases64.InputOportunidadeImg16,
        type_16: document.getElementById('InputOportunidadeType16').value,
        type_16_eng: document.getElementById('InputOportunidadeType16Eng').value,
        title_16: document.getElementById('InputOportunidadeTitle16').value,
        title_16_eng: document.getElementById('InputOportunidadeTitle16Eng').value,
        img_17: bases64.InputOportunidadeImg17,
        type_17: document.getElementById('InputOportunidadeType17').value,
        type_17_eng: document.getElementById('InputOportunidadeType17Eng').value,
        title_17: document.getElementById('InputOportunidadeTitle17').value,
        title_17_eng: document.getElementById('InputOportunidadeTitle17Eng').value,
        img_18: bases64.InputOportunidadeImg18,
        type_18: document.getElementById('InputOportunidadeType18').value,
        type_18_eng: document.getElementById('InputOportunidadeType18Eng').value,
        title_18: document.getElementById('InputOportunidadeTitle18').value,
        title_18_eng: document.getElementById('InputOportunidadeTitle18Eng').value,
        img_19: bases64.InputOportunidadeImg19,
        type_19: document.getElementById('InputOportunidadeType19').value,
        type_19_eng: document.getElementById('InputOportunidadeType19Eng').value,
        title_19: document.getElementById('InputOportunidadeTitle19').value,
        title_19_eng: document.getElementById('InputOportunidadeTitle19Eng').value,
        img_20: bases64.InputOportunidadeImg20,
        type_20: document.getElementById('InputOportunidadeType20').value,
        type_20_eng: document.getElementById('InputOportunidadeType20Eng').value,
        title_20: document.getElementById('InputOportunidadeTitle20').value,
        title_20_eng: document.getElementById('InputOportunidadeTitle20Eng').value,
        img_21: bases64.InputOportunidadeImg21,
        type_21: document.getElementById('InputOportunidadeType21').value,
        type_21_eng: document.getElementById('InputOportunidadeType21Eng').value,
        title_21: document.getElementById('InputOportunidadeTitle21').value,
        title_21_eng: document.getElementById('InputOportunidadeTitle21Eng').value,
        img_22: bases64.InputOportunidadeImg22,
        type_22: document.getElementById('InputOportunidadeType22').value,
        type_22_eng: document.getElementById('InputOportunidadeType22Eng').value,
        title_22: document.getElementById('InputOportunidadeTitle22').value,
        title_22_eng: document.getElementById('InputOportunidadeTitle22Eng').value,
        img_23: bases64.InputOportunidadeImg23,
        type_23: document.getElementById('InputOportunidadeType23').value,
        type_23_eng: document.getElementById('InputOportunidadeType23Eng').value,
        title_23: document.getElementById('InputOportunidadeTitle23').value,
        title_23_eng: document.getElementById('InputOportunidadeTitle23Eng').value,
        img_24: bases64.InputOportunidadeImg24,
        type_24: document.getElementById('InputOportunidadeType24').value,
        type_24_eng: document.getElementById('InputOportunidadeType24Eng').value,
        title_24: document.getElementById('InputOportunidadeTitle24').value,
        title_24_eng: document.getElementById('InputOportunidadeTitle24Eng').value,
        img_25: bases64.InputOportunidadeImg25,
        type_25: document.getElementById('InputOportunidadeType25').value,
        type_25_eng: document.getElementById('InputOportunidadeType25Eng').value,
        title_25: document.getElementById('InputOportunidadeTitle25').value,
        title_25_eng: document.getElementById('InputOportunidadeTitle25Eng').value,
        contact_title: document.getElementById('InputOportunidadeContactTitle').value,
        contact_title_eng: document.getElementById('InputOportunidadeContactTitleEng').value,
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
