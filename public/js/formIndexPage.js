
function saveIndexPage() {
    console.log("saveIndexPage");

    showLoading();

    let form = {
        about_title: document.getElementById('InputAboutTitle').value,
        about_description: document.getElementById('InputAboutDescription').value,
        about_num_1: document.getElementById('InputAboutNum1').value,
        about_description_1: document.getElementById('InputAboutDescription1').value,
        about_num_2: document.getElementById('InputAboutNum2').value,
        about_description_2: document.getElementById('InputAboutDescription2').value,
        about_num_3: document.getElementById('InputAboutNum3').value,
        about_description_3: document.getElementById('InputAboutDescription3').value,

        service_title: document.getElementById('InputServiceTitle').value,
        service_title_1: document.getElementById('InputServiceTitle1').value,
        service_description_1: document.getElementById('InputServiceDescription1').value,
        service_title_2: document.getElementById('InputServiceTitle2').value,
        service_description_2: document.getElementById('InputServiceDescription2').value,
        service_title_3: document.getElementById('InputServiceTitle3').value,
        service_description_3: document.getElementById('InputServiceDescription3').value,

        portifolio_title: document.getElementById('InputPortifolioTitle').value,
        frame_num_1: document.getElementById('InputFrameNumber1').value,
        frame_legend_1: document.getElementById('InputFrameLegend1').value,
        frame_description_1: document.getElementById('InputFrameDescription1').value,
        frame_num_2: document.getElementById('InputFrameNumber2').value,
        frame_legend_2: document.getElementById('InputFrameLegend2').value,
        frame_description_2: document.getElementById('InputFrameDescription2').value,

        testimonials_title: document.getElementById('InputTestimonialsTitle').value,
        testimonials_description: document.getElementById('InputTestimonialsDescription').value,
        testimonials_num_1: document.getElementById('InputTestimonialsNum1').value,
        testimonials_description_1: document.getElementById('InputTestimonialsDescription1').value,
        testimonials_company_1: document.getElementById('InputTestimonialsCompany1').value,
        testimonials_name_1: document.getElementById('InputTestimonialsName1').value,
        testimonials_num_2: document.getElementById('InputTestimonialsNum2').value,
        testimonials_description_2: document.getElementById('InputTestimonialsDescription2').value,
        testimonials_company_2: document.getElementById('InputTestimonialsCompany2').value,
        testimonials_name_2: document.getElementById('InputTestimonialsName2').value,

        employee_title: document.getElementById('InputEmployeeTitle').value,
        employee_name_1: document.getElementById('InputEmployeeName1').value,
        employee_work_1: document.getElementById('InputEmployeeWork1').value,
        employee_url_facebook_1: document.getElementById('InputEmployeeUrlFacebook1').value,
        employee_url_instagram_1: document.getElementById('InputEmployeeUrlInstagram1').value,
        employee_url_twitter_1: document.getElementById('InputEmployeeUrlTwitter1').value,
        employee_name_2: document.getElementById('InputEmployeeName2').value,
        employee_work_2: document.getElementById('InputEmployeeWork2').value,
        employee_url_facebook_2: document.getElementById('InputEmployeeUrlFacebook2').value,
        employee_url_instagram_2: document.getElementById('InputEmployeeUrlInstagram2').value,
        employee_url_twitter_2: document.getElementById('InputEmployeeUrlTwitter2').value,
        employee_name_3: document.getElementById('InputEmployeeName3').value,
        employee_work_3: document.getElementById('InputEmployeeWork3').value,
        employee_url_facebook_3: document.getElementById('InputEmployeeUrlFacebook3').value,
        employee_url_instagram_3: document.getElementById('InputEmployeeUrlInstagram3').value,
        employee_url_twitter_3: document.getElementById('InputEmployeeUrlTwitter3').value,

        works_title: document.getElementById('InputWorksTitle').value,
        works_title_1: document.getElementById('InputWorksTitle1').value,
        works_date_1: document.getElementById('InputWorksDate1').value,
        works_description_1: document.getElementById('InputWorksDescription1').value,
        works_title_2: document.getElementById('InputWorksTitle2').value,
        works_date_2: document.getElementById('InputWorksDate2').value,
        works_description_2: document.getElementById('InputWorksDescription2').value,
        works_title_3: document.getElementById('InputWorksTitle3').value,
        works_date_3: document.getElementById('InputWorksDate3').value,
        works_description_3: document.getElementById('InputWorksDescription3').value,

        final_title: document.getElementById('InputFinalTitle').value,

        sign_title: document.getElementById('InputSignTitle').value,
        sign_description: document.getElementById('InputSignDescription').value,
        sign_rolling: document.getElementById('InputSignRolling').value,

        social_url_facebook: document.getElementById('InputSocialFacebook').value,
        social_url_instagram: document.getElementById('InputSocialInstagram').value,
        social_url_twitter: document.getElementById('InputSocialTwitter').value,

        contact_telephone: document.getElementById('InputContactTelephone').value,
        contact_cellphone: document.getElementById('InputContactCellphone').value,
        contact_email: document.getElementById('InputContactEmail').value,

        navigation_title_1: document.getElementById('InputNavigationTitle1').value,
        navigation_url_1: document.getElementById('InputNavigationUrl1').value,
        navigation_title_2: document.getElementById('InputNavigationTitle2').value,
        navigation_url_2: document.getElementById('InputNavigationUrl2').value,
        navigation_title_3: document.getElementById('InputNavigationTitle3').value,
        navigation_url_3: document.getElementById('InputNavigationUrl3').value,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-index-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        console.log("save-index-page success");
        console.log(_return);
        toastSuccess(_return.message);
        hideLoading();
    }, function (_return) {
        console.log("save-index-page error");
        console.log(_return);
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
