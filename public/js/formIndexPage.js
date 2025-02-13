
let toBase64 = file => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
});

let bases64 = {
    InputAboutImg: null,
    InputAboutImg3: null,
    InputTestimonialsImg1: null,
    InputTestimonialsImg2: null,
    InputEmployeeImg1: null,
    InputEmployeeImg2: null,
    InputEmployeeImg3: null,
    InputBrandsImgBg: null,
    InputBrandsImg1: null,
    InputBrandsImg2: null,
    InputBrandsImg3: null,
    InputBrandsImg4: null,
    InputBrandsImg5: null,
    InputBrandsImg6: null,
};
const inputElementImg = document.getElementById("InputAboutImg");
inputElementImg.addEventListener("change", load_image_about_preview, false);
async function load_image_about_preview() {
    document.getElementById('ImageAboutPreview').innerHTML = this.files[0].name;
    bases64.InputAboutImg = await toBase64(this.files[0]);
}
const inputElementImg3 = document.getElementById("InputAboutImg3");
inputElementImg3.addEventListener("change", load_image_about_img3_preview, false);
async function load_image_about_img3_preview() {
    document.getElementById('ImageAboutImg3Preview').innerHTML = this.files[0].name;
    bases64.InputAboutImg3 = await toBase64(this.files[0]);
}
const inputElementTestimonialsImg1 = document.getElementById("InputTestimonialsImg1");
inputElementTestimonialsImg1.addEventListener("change", load_image_testimonials_img1_preview, false);
async function load_image_testimonials_img1_preview() {
    document.getElementById('InputTestimonialsImg1Preview').innerHTML = this.files[0].name;
    bases64.InputTestimonialsImg1 = await toBase64(this.files[0]);
}
const inputElementTestimonialsImg2 = document.getElementById("InputTestimonialsImg2");
inputElementTestimonialsImg2.addEventListener("change", load_image_testimonials_img2_preview, false);
async function load_image_testimonials_img2_preview() {
    document.getElementById('InputTestimonialsImg2Preview').innerHTML = this.files[0].name;
    bases64.InputTestimonialsImg2 = await toBase64(this.files[0]);
}
const inputEmployeeImg1 = document.getElementById("InputEmployeeImg1");
inputEmployeeImg1.addEventListener("change", load_image_employee_img1_preview, false);
async function load_image_employee_img1_preview() {
    document.getElementById('InputEmployeeImg1Preview').innerHTML = this.files[0].name;
    bases64.InputEmployeeImg1 = await toBase64(this.files[0]);
}
const inputEmployeeImg2 = document.getElementById("InputEmployeeImg2");
inputEmployeeImg2.addEventListener("change", load_image_employee_img2_preview, false);
async function load_image_employee_img2_preview() {
    document.getElementById('InputEmployeeImg2Preview').innerHTML = this.files[0].name;
    bases64.InputEmployeeImg2 = await toBase64(this.files[0]);
}
const inputEmployeeImg3 = document.getElementById("InputEmployeeImg3");
inputEmployeeImg3.addEventListener("change", load_image_employee_img3_preview, false);
async function load_image_employee_img3_preview() {
    document.getElementById('InputEmployeeImg3Preview').innerHTML = this.files[0].name;
    bases64.InputEmployeeImg3 = await toBase64(this.files[0]);
}
const InputBrandsImgBg = document.getElementById("InputBrandsImgBg");
InputBrandsImgBg.addEventListener("change", load_image_employee_img4_preview, false);
async function load_image_employee_img4_preview() {
    document.getElementById('InputBrandsImgBgPreview').innerHTML = this.files[0].name;
    bases64.InputBrandsImgBg = await toBase64(this.files[0]);
}
const InputBrandsImg1 = document.getElementById("InputBrandsImg1");
InputBrandsImg1.addEventListener("change", load_image_employee_img5_preview, false);
async function load_image_employee_img5_preview() {
    document.getElementById('InputBrandsImg1Preview').innerHTML = this.files[0].name;
    bases64.InputBrandsImg1 = await toBase64(this.files[0]);
}
const InputBrandsImg2 = document.getElementById("InputBrandsImg2");
InputBrandsImg2.addEventListener("change", load_image_employee_img6_preview, false);
async function load_image_employee_img6_preview() {
    document.getElementById('InputBrandsImg2Preview').innerHTML = this.files[0].name;
    bases64.InputBrandsImg2 = await toBase64(this.files[0]);
}
const InputBrandsImg3 = document.getElementById("InputBrandsImg3");
InputBrandsImg3.addEventListener("change", load_image_employee_img7_preview, false);
async function load_image_employee_img7_preview() {
    document.getElementById('InputBrandsImg3Preview').innerHTML = this.files[0].name;
    bases64.InputBrandsImg3 = await toBase64(this.files[0]);
}
const InputBrandsImg4 = document.getElementById("InputBrandsImg4");
InputBrandsImg4.addEventListener("change", load_image_employee_img7_preview, false);
async function load_image_employee_img7_preview() {
    document.getElementById('InputBrandsImg4Preview').innerHTML = this.files[0].name;
    bases64.InputBrandsImg4 = await toBase64(this.files[0]);
}
const InputBrandsImg5 = document.getElementById("InputBrandsImg5");
InputBrandsImg5.addEventListener("change", load_image_employee_img7_preview, false);
async function load_image_employee_img7_preview() {
    document.getElementById('InputBrandsImg5Preview').innerHTML = this.files[0].name;
    bases64.InputBrandsImg5 = await toBase64(this.files[0]);
}
const InputBrandsImg6 = document.getElementById("InputBrandsImg6");
InputBrandsImg6.addEventListener("change", load_image_employee_img7_preview, false);
async function load_image_employee_img7_preview() {
    document.getElementById('InputBrandsImg6Preview').innerHTML = this.files[0].name;
    bases64.InputBrandsImg6 = await toBase64(this.files[0]);
}

function saveIndexPage() {

    showLoading();

    let form = {
        about_title: document.getElementById('InputAboutTitle').value,
        about_title_eng: document.getElementById('InputAboutTitleEng').value,
        about_description: document.getElementById('InputAboutDescription').value,
        about_description_eng: document.getElementById('InputAboutDescriptionEng').value,
        about_img: bases64.InputAboutImg,
        about_num_1: document.getElementById('InputAboutNum1').value,
        about_description_1: document.getElementById('InputAboutDescription1').value,
        about_description_1_eng: document.getElementById('InputAboutDescription1Eng').value,
        about_num_2: document.getElementById('InputAboutNum2').value,
        about_description_2: document.getElementById('InputAboutDescription2').value,
        about_description_2_eng: document.getElementById('InputAboutDescription2Eng').value,
        about_num_3: document.getElementById('InputAboutNum3').value,
        about_description_3: document.getElementById('InputAboutDescription3').value,
        about_description_3_eng: document.getElementById('InputAboutDescription3Eng').value,
        about_img_3: bases64.InputAboutImg3,

        service_title: document.getElementById('InputServiceTitle').value,
        service_title_eng: document.getElementById('InputServiceTitleEng').value,
        service_title_1: document.getElementById('InputServiceTitle1').value,
        service_title_1_eng: document.getElementById('InputServiceTitle1Eng').value,
        service_description_1: document.getElementById('InputServiceDescription1').value,
        service_description_1_eng: document.getElementById('InputServiceDescription1Eng').value,
        service_title_2: document.getElementById('InputServiceTitle2').value,
        service_title_2_eng: document.getElementById('InputServiceTitle2Eng').value,
        service_description_2: document.getElementById('InputServiceDescription2').value,
        service_description_2_eng: document.getElementById('InputServiceDescription2Eng').value,
        service_title_3: document.getElementById('InputServiceTitle3').value,
        service_title_3_eng: document.getElementById('InputServiceTitle3Eng').value,
        service_description_3: document.getElementById('InputServiceDescription3').value,
        service_description_3_eng: document.getElementById('InputServiceDescription3Eng').value,

        portifolio_title: document.getElementById('InputPortifolioTitle').value,
        portifolio_title_eng: document.getElementById('InputPortifolioTitleEng').value,
        frame_num_1: document.getElementById('InputFrameNumber1').value,
        frame_legend_1: document.getElementById('InputFrameLegend1').value,
        frame_legend_1_eng: document.getElementById('InputFrameLegend1Eng').value,
        frame_description_1: document.getElementById('InputFrameDescription1').value,
        frame_description_1_eng: document.getElementById('InputFrameDescription1Eng').value,
        frame_num_2: document.getElementById('InputFrameNumber2').value,
        frame_legend_2: document.getElementById('InputFrameLegend2').value,
        frame_legend_2_eng: document.getElementById('InputFrameLegend2Eng').value,
        frame_description_2: document.getElementById('InputFrameDescription2').value,
        frame_description_2_eng: document.getElementById('InputFrameDescription2Eng').value,

        testimonials_title: document.getElementById('InputTestimonialsTitle').value,
        testimonials_title_eng: document.getElementById('InputTestimonialsTitleEng').value,
        testimonials_description: document.getElementById('InputTestimonialsDescription').value,
        testimonials_description_eng: document.getElementById('InputTestimonialsDescriptionEng').value,
        testimonials_num_1: document.getElementById('InputTestimonialsNum1').value,
        testimonials_description_1: document.getElementById('InputTestimonialsDescription1').value,
        testimonials_description_1_eng: document.getElementById('InputTestimonialsDescription1Eng').value,
        testimonials_img_1: bases64.InputTestimonialsImg1,
        testimonials_company_1: document.getElementById('InputTestimonialsCompany1').value,
        testimonials_name_1: document.getElementById('InputTestimonialsName1').value,
        testimonials_num_2: document.getElementById('InputTestimonialsNum2').value,
        testimonials_description_2: document.getElementById('InputTestimonialsDescription2').value,
        testimonials_description_2_eng: document.getElementById('InputTestimonialsDescription2Eng').value,
        testimonials_img_2: bases64.InputTestimonialsImg2,
        testimonials_company_2: document.getElementById('InputTestimonialsCompany2').value,
        testimonials_name_2: document.getElementById('InputTestimonialsName2').value,

        employee_title: document.getElementById('InputEmployeeTitle').value,
        employee_title_eng: document.getElementById('InputEmployeeTitleEng').value,
        employee_name_1: document.getElementById('InputEmployeeName1').value,
        employee_name_1_eng: document.getElementById('InputEmployeeName1Eng').value,
        employee_work_1: document.getElementById('InputEmployeeWork1').value,
        employee_work_1_eng: document.getElementById('InputEmployeeWork1Eng').value,
        employee_img_1: bases64.InputEmployeeImg1,
        employee_url_facebook_1: document.getElementById('InputEmployeeUrlFacebook1').value,
        employee_url_instagram_1: document.getElementById('InputEmployeeUrlInstagram1').value,
        employee_url_twitter_1: document.getElementById('InputEmployeeUrlTwitter1').value,
        employee_name_2: document.getElementById('InputEmployeeName2').value,
        employee_name_2_eng: document.getElementById('InputEmployeeName2Eng').value,
        employee_work_2: document.getElementById('InputEmployeeWork2').value,
        employee_work_2_eng: document.getElementById('InputEmployeeWork2Eng').value,
        employee_img_2: bases64.InputEmployeeImg2,
        employee_url_facebook_2: document.getElementById('InputEmployeeUrlFacebook2').value,
        employee_url_instagram_2: document.getElementById('InputEmployeeUrlInstagram2').value,
        employee_url_twitter_2: document.getElementById('InputEmployeeUrlTwitter2').value,
        employee_name_3: document.getElementById('InputEmployeeName3').value,
        employee_name_3_eng: document.getElementById('InputEmployeeName3Eng').value,
        employee_work_3: document.getElementById('InputEmployeeWork3').value,
        employee_work_3_eng: document.getElementById('InputEmployeeWork3Eng').value,
        employee_img_3: bases64.InputEmployeeImg3,
        employee_url_facebook_3: document.getElementById('InputEmployeeUrlFacebook3').value,
        employee_url_instagram_3: document.getElementById('InputEmployeeUrlInstagram3').value,
        employee_url_twitter_3: document.getElementById('InputEmployeeUrlTwitter3').value,

        brands_bg_img: bases64.InputBrandsImgBg,
        brands_img_1: bases64.InputBrandsImg1,
        brands_img_2: bases64.InputBrandsImg2,
        brands_img_3: bases64.InputBrandsImg3,
        brands_img_4: bases64.InputBrandsImg4,
        brands_img_5: bases64.InputBrandsImg5,
        brands_img_6: bases64.InputBrandsImg6,

        final_title: document.getElementById('InputFinalTitle').value,
        final_title_eng: document.getElementById('InputFinalTitleEng').value,

        sign_title: document.getElementById('InputSignTitle').value,
        sign_title_eng: document.getElementById('InputSignTitleEng').value,
        sign_description: document.getElementById('InputSignDescription').value,
        sign_description_eng: document.getElementById('InputSignDescriptionEng').value,
        sign_rolling: document.getElementById('InputSignRolling').value,
        sign_rolling_eng: document.getElementById('InputSignRollingEng').value,

        social_url_facebook: document.getElementById('InputSocialFacebook').value,
        social_url_instagram: document.getElementById('InputSocialInstagram').value,
        social_url_twitter: document.getElementById('InputSocialTwitter').value,
        social_url_linkedin: document.getElementById('InputSocialLinkedin').value,

        contact_telephone: document.getElementById('InputContactTelephone').value,
        contact_cellphone: document.getElementById('InputContactCellphone').value,
        contact_email: document.getElementById('InputContactEmail').value,

        navigation_title_1: document.getElementById('InputNavigationTitle1').value,
        navigation_title_1_eng: document.getElementById('InputNavigationTitle1Eng').value,
        navigation_url_1: document.getElementById('InputNavigationUrl1').value,
        navigation_title_2: document.getElementById('InputNavigationTitle2').value,
        navigation_title_2_eng: document.getElementById('InputNavigationTitle2Eng').value,
        navigation_url_2: document.getElementById('InputNavigationUrl2').value,
        navigation_title_3: document.getElementById('InputNavigationTitle3').value,
        navigation_title_3_eng: document.getElementById('InputNavigationTitle3Eng').value,
        navigation_url_3: document.getElementById('InputNavigationUrl3').value,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-index-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        hideLoading();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
