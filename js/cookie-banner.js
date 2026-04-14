document.addEventListener("DOMContentLoaded", function () {
    function getCookie(name) {
        let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        return match ? match[2] : null;
    }

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    if (!getCookie("cookieConsent")) {
        document.getElementById("cookie-banner").style.display = "block";
    }

    document.getElementById("cookie-form").addEventListener("submit", function (e) {
        e.preventDefault();
        let analytic = document.querySelector('input[name="analytic"]').checked ? "1" : "0";
        let preferences = document.querySelector('input[name="preferences"]').checked ? "1" : "0";
        setCookie("cookieConsent", "basic=" + "1" + ";analytic=" + analytic + ";preferences=" + preferences, 365);
        document.getElementById("cookie-banner").style.display = "none";
        // Here you can trigger loading of analytic/preferences scripts if needed
    });

    document.getElementById("cookie-reject").addEventListener("click", function () {
        setCookie("cookieConsent", "basic=1;analytic=0;preferences=0", 365);
        document.getElementById("cookie-banner").style.display = "none";
    });
});