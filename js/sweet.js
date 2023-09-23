function NormalAlert(msg, loc) {
    swal(msg).then(() => {
        window.location.replace(loc); // Redirect to the specified URL
    });
}

function ConfirmationAlert(title,msg,loc) {
    swal(title,msg, "success").then(() => {
        window.location.replace(loc); // Redirect to the specified URL
    });
}

function ErrorAlert(title,msg,loc) {
    swal(title,msg, "error").then(() => {
        window.location.replace(loc); // Redirect to the specified URL
    });
}


