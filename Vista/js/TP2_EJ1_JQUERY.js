$("#form").validate({
    rules: {
        email: {
            required: true,
            email: true,
        },
        name: {
            required: true,
        },
    },
    messages: {
        email: {
            required: "Obligatorio",
            email: "Ingrese un e-mail válido",
        },
        name: {
            required: "Obligatorio",
        },
    },
    submitHandler: function(form) {
        form.submit();
    },
});