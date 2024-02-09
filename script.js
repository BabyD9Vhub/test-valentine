const pass = document.getElementById('swpass');
function showpass() {
    if (pass.type === "text") {
        pass.type = "password";
    } else {
        pass.type = "text";
    }
}

