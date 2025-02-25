
function savePrivacyPolitics() {

    showLoading();

    let form = {
        meta_tags_title: document.getElementById('InputMetaTagsTitle').value,
        meta_tags_description: document.getElementById('InputMetaTagsDescription').value,
        meta_tags_keywords: document.getElementById('InputMetaTagsKeywords').value,

        title: document.getElementById('InputPrivacyPoliticsTitle').value,
        title_eng: document.getElementById('InputPrivacyPoliticsTitleEng').value,
        content: document.getElementById('InputPrivacyPoliticsContent').value,
        content_eng: document.getElementById('InputPrivacyPoliticsContentEng').value,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-privacy-politics-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        hideLoading();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
