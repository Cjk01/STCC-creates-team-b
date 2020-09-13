function SuccessAdd() {
    Swal.fire({
        title: "Sweet",
        text: "You have successfully registered You can now login!",
        type: "success",
    })
}

function ErrorAdd() {
    Swal.fire({
        title: "Uh Oh!",
        text: "Looks like you are not using an email from STCC",
        type: "error",
    })
}


