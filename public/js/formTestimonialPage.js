
function saveTestimonialPage(id) {

    showLoading();

    console.log(document.getElementById('InputTestimonialShow'));
    console.log(document.getElementById('InputTestimonialShow').value);

    let form = {
        meta_tags_title: document.getElementById('InputMetaTagsTitle').value,
        meta_tags_description: document.getElementById('InputMetaTagsDescription').value,
        meta_tags_keywords: document.getElementById('InputMetaTagsKeywords').value,

        id: id,
        name: document.getElementById('InputTestimonialName').value,
        company: document.getElementById('InputTestimonialCompany').value,
        num: document.getElementById('InputTestimonialNum').value,
        show: document.getElementById('InputTestimonialShow').value,
        description: document.getElementById('InputTestimonialDescription').value,
        description_eng: document.getElementById('InputTestimonialDescriptionEng').value,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-testimonial-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        window.location.href = "/pt/list-testimonial-page";
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
