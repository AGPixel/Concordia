
function saveContactPage() {

    showLoading();

    let form = {
        email1: document.getElementById('InputContactEmail1').value,
        email2: document.getElementById('InputContactEmail2').value,
        contact_form_title: document.getElementById('InputContactTitle').value,
        contact_form_title_eng: document.getElementById('InputContactTitleEng').value,
        business_hours1: document.getElementById('InputBusinessHour1').value,
        business_hours2: document.getElementById('InputBusinessHour2').value,
        business_hours3: document.getElementById('InputBusinessHour3').value,
        address1: document.getElementById('InputAddress1').value,
        address2: document.getElementById('InputAddress2').value,
        address3: document.getElementById('InputAddress3').value,
        map_lat: document.getElementById('InputMapLat').value,
        map_len: document.getElementById('InputMapLen').value,
        footer_email: document.getElementById('InputFooterEmail').value,
        footer_call: document.getElementById('InputFooterCall').value,
        footer_skype: document.getElementById('InputFooterSkype').value,
    };

    apiPostBearer(GLOBAL_URL_API + 'save-contact-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        hideLoading();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });

}
