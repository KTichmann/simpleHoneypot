(() => {
    document.addEventListener("DOMContentLoaded", () => {
        //Check honeypot when form is submitted
        document.getElementById("loginform").addEventListener("submit", () => {
            if(document.getElementById("bOnlineField").value !== ""){
                document.getElementById("user_login").value = "spam";
            }
        })
        //Check honeypot when form button is clicked - if not submitted
        document.getElementById("loginform").addEventListener("click", () => {
            if(document.getElementById("bOnlineField").value !== ""){
                document.getElementById("user_login").value = "spam";
            }
        })
    })
})();