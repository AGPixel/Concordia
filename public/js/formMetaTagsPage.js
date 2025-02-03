
function saveMetaTags() {
    console.log("saveMetaTags");

    showLoading();

    let form = {
        title: document.getElementById('InputMetaTagsTitle').value,
        description: document.getElementById('InputMetaTagsDescription').value,
        keywords: document.getElementById('InputMetaTagsKeywords').value,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-meta-tags-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        hideLoading();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
