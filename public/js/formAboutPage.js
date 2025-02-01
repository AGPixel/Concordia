
let toBase64 = file => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
});

let bases64 = {
    InputAboutImg1: null,
    InputAboutImg2: null,
    InputAboutImg3: null,
    InputAboutImg4: null,
    InputAboutServiceImg1: null,
    InputAboutServiceImg2: null,
    InputAboutServiceImg3: null,
    InputAboutServiceImg4: null,
    InputAboutServiceImg5: null,
    InputAboutServiceImg6: null,
    InputAboutBrandsImg1: null,
    InputAboutBrandsImg2: null,
    InputAboutBrandsImg3: null,
    InputAboutBrandsImg4: null,
};
const InputAboutImg1 = document.getElementById("InputAboutImg1");
InputAboutImg1.addEventListener("change", load_image_about_preview1, false);
async function load_image_about_preview1() {
    document.getElementById('ImageAbout1').innerHTML = this.files[0].name;
    bases64.InputAboutImg1 = await toBase64(this.files[0]);
}
const InputAboutImg2 = document.getElementById("InputAboutImg2");
InputAboutImg2.addEventListener("change", load_image_about_preview2, false);
async function load_image_about_preview2() {
    document.getElementById('ImageAbout2').innerHTML = this.files[0].name;
    bases64.InputAboutImg2 = await toBase64(this.files[0]);
}
const InputAboutImg3 = document.getElementById("InputAboutImg3");
InputAboutImg3.addEventListener("change", load_image_about_preview3, false);
async function load_image_about_preview3() {
    document.getElementById('ImageAbout3').innerHTML = this.files[0].name;
    bases64.InputAboutImg3 = await toBase64(this.files[0]);
}
const InputAboutImg4 = document.getElementById("InputAboutImg4");
InputAboutImg4.addEventListener("change", load_image_about_preview4, false);
async function load_image_about_preview4() {
    document.getElementById('ImageAbout4').innerHTML = this.files[0].name;
    bases64.InputAboutImg4 = await toBase64(this.files[0]);
}
const InputAboutServiceImg1 = document.getElementById("InputAboutServiceImg1");
InputAboutServiceImg1.addEventListener("change", load_image_about_preview5, false);
async function load_image_about_preview5() {
    document.getElementById('aboutServiceImg1').innerHTML = this.files[0].name;
    bases64.InputAboutServiceImg1 = await toBase64(this.files[0]);
}
const InputAboutServiceImg2 = document.getElementById("InputAboutServiceImg2");
InputAboutServiceImg2.addEventListener("change", load_image_about_preview6, false);
async function load_image_about_preview6() {
    document.getElementById('aboutServiceImg2').innerHTML = this.files[0].name;
    bases64.InputAboutServiceImg2 = await toBase64(this.files[0]);
}
const InputAboutServiceImg3 = document.getElementById("InputAboutServiceImg3");
InputAboutServiceImg3.addEventListener("change", load_image_about_preview7, false);
async function load_image_about_preview7() {
    document.getElementById('aboutServiceImg3').innerHTML = this.files[0].name;
    bases64.InputAboutServiceImg3 = await toBase64(this.files[0]);
}
const InputAboutServiceImg4 = document.getElementById("InputAboutServiceImg4");
InputAboutServiceImg4.addEventListener("change", load_image_about_preview8, false);
async function load_image_about_preview8() {
    document.getElementById('aboutServiceImg4').innerHTML = this.files[0].name;
    bases64.InputAboutServiceImg4 = await toBase64(this.files[0]);
}
const InputAboutServiceImg5 = document.getElementById("InputAboutServiceImg5");
InputAboutServiceImg5.addEventListener("change", load_image_about_preview9, false);
async function load_image_about_preview9() {
    document.getElementById('aboutServiceImg5').innerHTML = this.files[0].name;
    bases64.InputAboutServiceImg5 = await toBase64(this.files[0]);
}
const InputAboutServiceImg6 = document.getElementById("InputAboutServiceImg6");
InputAboutServiceImg6.addEventListener("change", load_image_about_preview10, false);
async function load_image_about_preview10() {
    document.getElementById('aboutServiceImg6').innerHTML = this.files[0].name;
    bases64.InputAboutServiceImg6 = await toBase64(this.files[0]);
}
const InputAboutBrandsImg1 = document.getElementById("InputAboutBrandsImg1");
InputAboutBrandsImg1.addEventListener("change", load_image_about_preview11, false);
async function load_image_about_preview11() {
    document.getElementById('aboutBrandsImg1').innerHTML = this.files[0].name;
    bases64.InputAboutBrandsImg1 = await toBase64(this.files[0]);
}
const InputAboutBrandsImg2 = document.getElementById("InputAboutBrandsImg2");
InputAboutBrandsImg2.addEventListener("change", load_image_about_preview12, false);
async function load_image_about_preview12() {
    document.getElementById('aboutBrandsImg2').innerHTML = this.files[0].name;
    bases64.InputAboutBrandsImg2 = await toBase64(this.files[0]);
}
const InputAboutBrandsImg3 = document.getElementById("InputAboutBrandsImg3");
InputAboutBrandsImg3.addEventListener("change", load_image_about_preview13, false);
async function load_image_about_preview13() {
    document.getElementById('aboutBrandsImg3').innerHTML = this.files[0].name;
    bases64.InputAboutBrandsImg3 = await toBase64(this.files[0]);
}
const InputAboutBrandsImg4 = document.getElementById("InputAboutBrandsImg4");
InputAboutBrandsImg4.addEventListener("change", load_image_about_preview14, false);
async function load_image_about_preview14() {
    document.getElementById('aboutBrandsImg4').innerHTML = this.files[0].name;
    bases64.InputAboutBrandsImg4 = await toBase64(this.files[0]);
}

function saveAboutPage() {
    console.log("saveAboutPage");

    showLoading();

    let form = {
        about_title_1: document.getElementById('InputAboutTitle1').value,
        about_title_2: document.getElementById('InputAboutTitle2').value,
        about_img_1: bases64.InputAboutImg1,
        about_img_2: bases64.InputAboutImg2,
        about_img_3: bases64.InputAboutImg3,
        about_img_4: bases64.InputAboutImg4,
        about_service_title: document.getElementById('InputAboutServiceTitle').value,
        about_service_1: document.getElementById('InputAboutService1').value,
        about_service_img_1: bases64.InputAboutServiceImg1,
        about_service_2: document.getElementById('InputAboutService2').value,
        about_service_img_2: bases64.InputAboutServiceImg2,
        about_service_3: document.getElementById('InputAboutService3').value,
        about_service_img_3: bases64.InputAboutServiceImg3,
        about_service_4: document.getElementById('InputAboutService4').value,
        about_service_img_4: bases64.InputAboutServiceImg4,
        about_service_5: document.getElementById('InputAboutService5').value,
        about_service_img_5: bases64.InputAboutServiceImg5,
        about_service_6: document.getElementById('InputAboutService6').value,
        about_service_img_6: bases64.InputAboutServiceImg6,
        about_experience_title: document.getElementById('InputAboutExperienceTitle').value,
        about_experience_title_1: document.getElementById('InputAboutExperienceTitle1').value,
        about_experience_description_1: document.getElementById('InputAboutExperienceDescription1').value,
        about_experience_data_1: document.getElementById('InputAboutExperienceData1').value,
        about_experience_title_2: document.getElementById('InputAboutExperienceTitle2').value,
        about_experience_description_2: document.getElementById('InputAboutExperienceDescription2').value,
        about_experience_data_2: document.getElementById('InputAboutExperienceData2').value,
        about_experience_title_3: document.getElementById('InputAboutExperienceTitle3').value,
        about_experience_description_3: document.getElementById('InputAboutExperienceDescription3').value,
        about_experience_data_3: document.getElementById('InputAboutExperienceData3').value,
        about_experience_title_4: document.getElementById('InputAboutExperienceTitle4').value,
        about_experience_description_4: document.getElementById('InputAboutExperienceDescription4').value,
        about_experience_data_4: document.getElementById('InputAboutExperienceData4').value,
        about_brands_title: document.getElementById('InputAboutBrandsTitle').value,
        about_brands_img_1: bases64.InputAboutBrandsImg1,
        about_brands_img_2: bases64.InputAboutBrandsImg2,
        about_brands_img_3: bases64.InputAboutBrandsImg3,
        about_brands_img_4: bases64.InputAboutBrandsImg4,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-about-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        hideLoading();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
