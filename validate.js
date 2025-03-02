$(document).ready(function () {
    function validateField(input) {
        let field = $(input);
        let value = field.val().trim();
        let errorSpan = $("#" + field.attr("name") + "Error");
        let fieldType = field.data("validation") || "";
        let minLength = field.data("min") || 0;
        let maxLength = field.data("max") || 9999;

        let errorMessage = "";

        // Validation rules
        if (fieldType.includes("required") && value === "") {
            errorMessage = "This field is required";
        }

        else if (fieldType.includes("email") && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
            errorMessage = "Please enter a valid email";
        }

        else if (fieldType.includes("strongPassword") && 
                 !/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}/.test(value)) {
            errorMessage = "Password must be at least 8 characters, including uppercase, lowercase, numbers, and special characters.";
        }

        else if (fieldType.includes("confirmPassword")) {
            let confirmPassword = value;
            let password = $("#" + field.data("password-id")).val().trim();
            if (confirmPassword !== password) {
                errorMessage = "Passwords don't match";
            }
        }

        else if (fieldType.includes("terms") && !field.is(":checked")) {
            errorMessage = "You must agree to the terms and conditions";
        }

        else if (fieldType.includes("alpha") && !/^[A-Za-z]+$/.test(value)) {
            errorMessage = "Only letters are allowed";
        }

        else if (fieldType.includes("numeric") && !/^\d+$/.test(value)) {
            errorMessage = "Only numbers are allowed";
        }

        else if (fieldType.includes("min") && value.length < minLength) {
            errorMessage = `Must be at least ${minLength} characters`;
        }

        else if (fieldType.includes("max") && value.length > maxLength) {
            errorMessage = `Must be less than ${maxLength} characters`;
        }

        else if (fieldType.includes("files") && !/\.(jpg|png|jpeg)$/i.test(value)) {
            errorMessage = "Only jpg, png, and jpeg files are allowed";
        }

        else if (fieldType.includes("file") && field[0].files.length > 0) {
            if (field[0].files[0].size > 2000000) { // 2MB
                errorMessage = "File size must be less than 2MB";
            }
        }

        if (errorMessage) {
            errorSpan.text(errorMessage).show();
            field.addClass("is-invalid");
            field.removeClass("is-valid");
        } else {
            errorSpan.text("").hide();
            field.removeClass("is-invalid");
            field.addClass("is-valid");
        }
    }

    $("form").on("submit", function (e) {
        let isValid = true;

        $(this).find("input, textarea").each(function () {
            validateField(this);
            if ($(this).next(".error").text() !== "") {
                isValid = false;
            }
        });

        if (!isValid) {
            e.preventDefault();
        }
    });

    $("input, textarea").on("blur change keyup", function () {
        validateField(this);
    });
});
