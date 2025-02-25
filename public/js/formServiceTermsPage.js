
function saveServiceTerms() {

    showLoading();

    let valueServiceTermsContent = document.getElementById('serviceTermsContent').getElementsByClassName('ck-editor__editable')[0];
    let valueServiceTermsContentEng = document.getElementById('serviceTermsContentEng').getElementsByClassName('ck-editor__editable')[0];

    let form = {
        meta_tags_title: document.getElementById('InputMetaTagsTitle').value,
        meta_tags_description: document.getElementById('InputMetaTagsDescription').value,
        meta_tags_keywords: document.getElementById('InputMetaTagsKeywords').value,

        title: document.getElementById('InputServiceTermsTitle').value,
        title_eng: document.getElementById('InputServiceTermsTitleEng').value,
        content: valueServiceTermsContent.innerHTML,
        content_eng: valueServiceTermsContentEng.innerHTML,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-service-terms-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        hideLoading();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
