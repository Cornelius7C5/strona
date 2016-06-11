function formhash(form, password) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
    console.log(p.value);
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";

    // Finally submit the form. 
    form.submit();
}

function regFormHash(form, email, password, conf) {
    // Check each field has a value
    if (email.value == '' ||
        password.value == '' ||
        conf.value == '') {

        alert('Proszę wypełnić wszystkie pola.');
        return false;
    }

    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.value.length < 6) {
        alert('Hasło musi zawierać przynajmniej 6 znaków.');
        form.password.focus();
        return false;
    }

    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Hasło i powtórzone hasło nie są takie same.');
        form.password.focus();
        return false;
    }

    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";

    // Finally submit the form. 
    form.submit();
    return true;
}