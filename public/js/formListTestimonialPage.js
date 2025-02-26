
function newTestimonial() {
    showLoading();
    setTimeout(() => {
        window.location.href = "/pt/new-testimonial-page";
    }, 500);
}

function editTestimonial(testimonial) {
    showLoading();
    setTimeout(() => {
        window.location.href = "/pt/testimonial-page/" + testimonial.id;
    }, 500);
}

function deleteTestimonial(testimonial) {
    showLoading();

    let form = {
        id: testimonial.id
    };

    apiDeleteBearer(GLOBAL_URL_API + 'delete-testimonial-page', form, GLOBAL_DATATYPE_JSON, function (_return) {
        toastSuccess(_return.message);
        location.reload();
    }, function (_return) {
        toastError(_return.responseJSON.message);
        hideLoading();
    });
}
