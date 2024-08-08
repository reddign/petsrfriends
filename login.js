function loginForm(){
    event.preventDefault();

    let loginform = document.getElementById("login_form");
    let user = loginform.elements["email"].value;
    let pass = loginform.elements["password"].value;

    //alert(`I will log you in with ${email} and ${password}.`);
    if(user=="" || pass==""){
        alert(`You forgot to type an email or password`);
    }else{
       loginform.submit();
    }

}