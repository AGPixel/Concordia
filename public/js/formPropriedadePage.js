
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
    InputPropriedadeImg8: null,
    InputPropriedadeImg9: null,
    InputPropriedadeImg10: null,
    InputPropriedadeImg11: null,
    InputPropriedadeImg12: null,
    InputPropriedadeImg13: null,
    InputPropriedadeImg14: null,
    InputPropriedadeImg15: null,
    InputPropriedadeImg16: null,
    InputPropriedadeImg17: null,
    InputPropriedadeImg18: null,
    InputPropriedadeImg19: null,
    InputPropriedadeImg20: null,
    InputPropriedadeImg21: null,
    InputPropriedadeImg22: null,
    InputPropriedadeImg23: null,
    InputPropriedadeImg24: null,
    InputPropriedadeImg25: null,
};
const inputPropriedadeImg1 = document.getElementById("InputPropriedadeImg1");
inputPropriedadeImg1.addEventListener("change", load_image_propriedade_preview1, false);
async function load_image_propriedade_preview1() {
    document.getElementById('ImagePropriedadeImg1Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg1 = await toBase64(this.files[0]);
}
const inputPropriedadeImg2 = document.getElementById("InputPropriedadeImg2");
inputPropriedadeImg2.addEventListener("change", load_image_propriedade_preview2, false);
async function load_image_propriedade_preview2() {
    document.getElementById('ImagePropriedadeImg2Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg2 = await toBase64(this.files[0]);
}
const inputPropriedadeImg3 = document.getElementById("InputPropriedadeImg3");
inputPropriedadeImg3.addEventListener("change", load_image_propriedade_preview3, false);
async function load_image_propriedade_preview3() {
    document.getElementById('ImagePropriedadeImg3Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg3 = await toBase64(this.files[0]);
}
const inputPropriedadeImg4 = document.getElementById("InputPropriedadeImg4");
inputPropriedadeImg4.addEventListener("change", load_image_propriedade_preview4, false);
async function load_image_propriedade_preview4() {
    document.getElementById('ImagePropriedadeImg4Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg4 = await toBase64(this.files[0]);
}
const inputPropriedadeImg5 = document.getElementById("InputPropriedadeImg5");
inputPropriedadeImg5.addEventListener("change", load_image_propriedade_preview5, false);
async function load_image_propriedade_preview5() {
    document.getElementById('ImagePropriedadeImg5Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg5 = await toBase64(this.files[0]);
}
const inputPropriedadeImg6 = document.getElementById("InputPropriedadeImg6");
inputPropriedadeImg6.addEventListener("change", load_image_propriedade_preview6, false);
async function load_image_propriedade_preview6() {
    document.getElementById('ImagePropriedadeImg6Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg6 = await toBase64(this.files[0]);
}
const inputPropriedadeImg7 = document.getElementById("InputPropriedadeImg7");
inputPropriedadeImg7.addEventListener("change", load_image_propriedade_preview7, false);
async function load_image_propriedade_preview7() {
    document.getElementById('ImagePropriedadeImg7Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg7 = await toBase64(this.files[0]);
}
const inputPropriedadeImg8 = document.getElementById("InputPropriedadeImg8");
inputPropriedadeImg8.addEventListener("change", load_image_propriedade_preview8, false);
async function load_image_propriedade_preview8() {
    document.getElementById('ImagePropriedadeImg8Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg8 = await toBase64(this.files[0]);
}
const inputPropriedadeImg9 = document.getElementById("InputPropriedadeImg9");
inputPropriedadeImg9.addEventListener("change", load_image_propriedade_preview9, false);
async function load_image_propriedade_preview9() {
    document.getElementById('ImagePropriedadeImg9Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg9 = await toBase64(this.files[0]);
}
const inputPropriedadeImg10 = document.getElementById("InputPropriedadeImg10");
inputPropriedadeImg10.addEventListener("change", load_image_propriedade_preview10, false);
async function load_image_propriedade_preview10() {
    document.getElementById('ImagePropriedadeImg10Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg10 = await toBase64(this.files[0]);
}
const inputPropriedadeImg11 = document.getElementById("InputPropriedadeImg11");
inputPropriedadeImg11.addEventListener("change", load_image_propriedade_preview11, false);
async function load_image_propriedade_preview11() {
    document.getElementById('ImagePropriedadeImg11Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg11 = await toBase64(this.files[0]);
}
const inputPropriedadeImg12 = document.getElementById("InputPropriedadeImg12");
inputPropriedadeImg12.addEventListener("change", load_image_propriedade_preview12, false);
async function load_image_propriedade_preview12() {
    document.getElementById('ImagePropriedadeImg12Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg12 = await toBase64(this.files[0]);
}
const inputPropriedadeImg13 = document.getElementById("InputPropriedadeImg13");
inputPropriedadeImg13.addEventListener("change", load_image_propriedade_preview13, false);
async function load_image_propriedade_preview13() {
    document.getElementById('ImagePropriedadeImg13Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg13 = await toBase64(this.files[0]);
}
const inputPropriedadeImg14 = document.getElementById("InputPropriedadeImg14");
inputPropriedadeImg14.addEventListener("change", load_image_propriedade_preview14, false);
async function load_image_propriedade_preview14() {
    document.getElementById('ImagePropriedadeImg14Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg14 = await toBase64(this.files[0]);
}
const inputPropriedadeImg15 = document.getElementById("InputPropriedadeImg15");
inputPropriedadeImg15.addEventListener("change", load_image_propriedade_preview15, false);
async function load_image_propriedade_preview15() {
    document.getElementById('ImagePropriedadeImg15Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg15 = await toBase64(this.files[0]);
}
const inputPropriedadeImg16 = document.getElementById("InputPropriedadeImg16");
inputPropriedadeImg16.addEventListener("change", load_image_propriedade_preview16, false);
async function load_image_propriedade_preview16() {
    document.getElementById('ImagePropriedadeImg16Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg16 = await toBase64(this.files[0]);
}
const inputPropriedadeImg17 = document.getElementById("InputPropriedadeImg17");
inputPropriedadeImg17.addEventListener("change", load_image_propriedade_preview17, false);
async function load_image_propriedade_preview17() {
    document.getElementById('ImagePropriedadeImg17Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg17 = await toBase64(this.files[0]);
}
const inputPropriedadeImg18 = document.getElementById("InputPropriedadeImg18");
inputPropriedadeImg18.addEventListener("change", load_image_propriedade_preview18, false);
async function load_image_propriedade_preview18() {
    document.getElementById('ImagePropriedadeImg18Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg18 = await toBase64(this.files[0]);
}
const inputPropriedadeImg19 = document.getElementById("InputPropriedadeImg19");
inputPropriedadeImg19.addEventListener("change", load_image_propriedade_preview19, false);
async function load_image_propriedade_preview19() {
    document.getElementById('ImagePropriedadeImg19Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg19 = await toBase64(this.files[0]);
}
const inputPropriedadeImg20 = document.getElementById("InputPropriedadeImg20");
inputPropriedadeImg20.addEventListener("change", load_image_propriedade_preview20, false);
async function load_image_propriedade_preview20() {
    document.getElementById('ImagePropriedadeImg20Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg20 = await toBase64(this.files[0]);
}
const inputPropriedadeImg21 = document.getElementById("InputPropriedadeImg21");
inputPropriedadeImg21.addEventListener("change", load_image_propriedade_preview21, false);
async function load_image_propriedade_preview21() {
    document.getElementById('ImagePropriedadeImg21Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg21 = await toBase64(this.files[0]);
}
const inputPropriedadeImg22 = document.getElementById("InputPropriedadeImg22");
inputPropriedadeImg22.addEventListener("change", load_image_propriedade_preview22, false);
async function load_image_propriedade_preview22() {
    document.getElementById('ImagePropriedadeImg22Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg22 = await toBase64(this.files[0]);
}
const inputPropriedadeImg23 = document.getElementById("InputPropriedadeImg23");
inputPropriedadeImg23.addEventListener("change", load_image_propriedade_preview23, false);
async function load_image_propriedade_preview23() {
    document.getElementById('ImagePropriedadeImg23Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg23 = await toBase64(this.files[0]);
}
const inputPropriedadeImg24 = document.getElementById("InputPropriedadeImg24");
inputPropriedadeImg24.addEventListener("change", load_image_propriedade_preview24, false);
async function load_image_propriedade_preview24() {
    document.getElementById('ImagePropriedadeImg24Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg24 = await toBase64(this.files[0]);
}
const inputPropriedadeImg25 = document.getElementById("InputPropriedadeImg25");
inputPropriedadeImg25.addEventListener("change", load_image_propriedade_preview25, false);
async function load_image_propriedade_preview25() {
    document.getElementById('ImagePropriedadeImg25Preview').innerHTML = this.files[0].name;
    bases64.InputPropriedadeImg25 = await toBase64(this.files[0]);
}

function savePropriedadePage(id) {

    showLoading();

    let form = {
        meta_tags_title: document.getElementById('InputMetaTagsTitle').value,
        meta_tags_description: document.getElementById('InputMetaTagsDescription').value,
        meta_tags_keywords: document.getElementById('InputMetaTagsKeywords').value,

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
        img_8: bases64.InputPropriedadeImg8,
        type_8: document.getElementById('InputPropriedadeType8').value,
        type_8_eng: document.getElementById('InputPropriedadeType8Eng').value,
        //legend_8: document.getElementById('InputPropriedadeLegend8').value,
        //legend_8_eng: document.getElementById('InputPropriedadeLegend8Eng').value,
        img_9: bases64.InputPropriedadeImg9,
        type_9: document.getElementById('InputPropriedadeType9').value,
        type_9_eng: document.getElementById('InputPropriedadeType9Eng').value,
        //legend_9: document.getElementById('InputPropriedadeLegend9').value,
        //legend_9_eng: document.getElementById('InputPropriedadeLegend9Eng').value,
        img_10: bases64.InputPropriedadeImg10,
        type_10: document.getElementById('InputPropriedadeType10').value,
        type_10_eng: document.getElementById('InputPropriedadeType10Eng').value,
        //legend_10: document.getElementById('InputPropriedadeLegend10').value,
        //legend_10_eng: document.getElementById('InputPropriedadeLegend10Eng').value,
        img_11: bases64.InputPropriedadeImg11,
        type_11: document.getElementById('InputPropriedadeType11').value,
        type_11_eng: document.getElementById('InputPropriedadeType11Eng').value,
        //legend_11: document.getElementById('InputPropriedadeLegend11').value,
        //legend_11_eng: document.getElementById('InputPropriedadeLegend11Eng').value,
        img_12: bases64.InputPropriedadeImg12,
        type_12: document.getElementById('InputPropriedadeType12').value,
        type_12_eng: document.getElementById('InputPropriedadeType12Eng').value,
        //legend_12: document.getElementById('InputPropriedadeLegend12').value,
        //legend_12_eng: document.getElementById('InputPropriedadeLegend12Eng').value,
        img_13: bases64.InputPropriedadeImg13,
        type_13: document.getElementById('InputPropriedadeType13').value,
        type_13_eng: document.getElementById('InputPropriedadeType13Eng').value,
        //legend_13: document.getElementById('InputPropriedadeLegend13').value,
        //legend_13_eng: document.getElementById('InputPropriedadeLegend13Eng').value,
        img_14: bases64.InputPropriedadeImg14,
        type_14: document.getElementById('InputPropriedadeType14').value,
        type_14_eng: document.getElementById('InputPropriedadeType14Eng').value,
        //legend_14: document.getElementById('InputPropriedadeLegend14').value,
        //legend_14_eng: document.getElementById('InputPropriedadeLegend14Eng').value,
        img_15: bases64.InputPropriedadeImg15,
        type_15: document.getElementById('InputPropriedadeType15').value,
        type_15_eng: document.getElementById('InputPropriedadeType15Eng').value,
        //legend_15: document.getElementById('InputPropriedadeLegend15').value,
        //legend_15_eng: document.getElementById('InputPropriedadeLegend15Eng').value,
        img_16: bases64.InputPropriedadeImg16,
        type_16: document.getElementById('InputPropriedadeType16').value,
        type_16_eng: document.getElementById('InputPropriedadeType16Eng').value,
        //legend_16: document.getElementById('InputPropriedadeLegend16').value,
        //legend_16_eng: document.getElementById('InputPropriedadeLegend16Eng').value,
        img_17: bases64.InputPropriedadeImg17,
        type_17: document.getElementById('InputPropriedadeType17').value,
        type_17_eng: document.getElementById('InputPropriedadeType17Eng').value,
        //legend_17: document.getElementById('InputPropriedadeLegend17').value,
        //legend_17_eng: document.getElementById('InputPropriedadeLegend17Eng').value,
        img_18: bases64.InputPropriedadeImg18,
        type_18: document.getElementById('InputPropriedadeType18').value,
        type_18_eng: document.getElementById('InputPropriedadeType18Eng').value,
        //legend_18: document.getElementById('InputPropriedadeLegend18').value,
        //legend_18_eng: document.getElementById('InputPropriedadeLegend18Eng').value,
        img_19: bases64.InputPropriedadeImg19,
        type_19: document.getElementById('InputPropriedadeType19').value,
        type_19_eng: document.getElementById('InputPropriedadeType19Eng').value,
        //legend_19: document.getElementById('InputPropriedadeLegend19').value,
        //legend_19_eng: document.getElementById('InputPropriedadeLegend19Eng').value,
        img_20: bases64.InputPropriedadeImg20,
        type_20: document.getElementById('InputPropriedadeType20').value,
        type_20_eng: document.getElementById('InputPropriedadeType20Eng').value,
        //legend_20: document.getElementById('InputPropriedadeLegend20').value,
        //legend_20_eng: document.getElementById('InputPropriedadeLegend20Eng').value,
        img_21: bases64.InputPropriedadeImg21,
        type_21: document.getElementById('InputPropriedadeType21').value,
        type_21_eng: document.getElementById('InputPropriedadeType21Eng').value,
        //legend_21: document.getElementById('InputPropriedadeLegend21').value,
        //legend_21_eng: document.getElementById('InputPropriedadeLegend21Eng').value,
        img_22: bases64.InputPropriedadeImg22,
        type_22: document.getElementById('InputPropriedadeType22').value,
        type_22_eng: document.getElementById('InputPropriedadeType22Eng').value,
        //legend_22: document.getElementById('InputPropriedadeLegend22').value,
        //legend_22_eng: document.getElementById('InputPropriedadeLegend22Eng').value,
        img_23: bases64.InputPropriedadeImg23,
        type_23: document.getElementById('InputPropriedadeType23').value,
        type_23_eng: document.getElementById('InputPropriedadeType23Eng').value,
        //legend_23: document.getElementById('InputPropriedadeLegend23').value,
        //legend_23_eng: document.getElementById('InputPropriedadeLegend23Eng').value,
        img_24: bases64.InputPropriedadeImg24,
        type_24: document.getElementById('InputPropriedadeType24').value,
        type_24_eng: document.getElementById('InputPropriedadeType24Eng').value,
        //legend_24: document.getElementById('InputPropriedadeLegend24').value,
        //legend_24_eng: document.getElementById('InputPropriedadeLegend24Eng').value,
        img_25: bases64.InputPropriedadeImg25,
        type_25: document.getElementById('InputPropriedadeType25').value,
        type_25_eng: document.getElementById('InputPropriedadeType25Eng').value,
        //legend_25: document.getElementById('InputPropriedadeLegend25').value,
        //legend_25_eng: document.getElementById('InputPropriedadeLegend25Eng').value,
        contact_title: document.getElementById('InputPropriedadeContactTitle').value,
        contact_title_eng: document.getElementById('InputPropriedadeContactTitleEng').value,
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

function showNewImage(num) {
    document.getElementById('bt-propriedade-nova-imagem' + (num - 1)).classList.add('card-invisible');
    document.getElementById('container-img-' + num).classList.remove('card-invisible');
}
