$(() => {

 
  
  let delay = 2000;
 
  
$('.hide').on('click', ()=>{

let showing = $("#password");

if(showing.prop('type','password')){

  showing.prop('type','text');
}
else{
  showing.prop('type','password');
}


});

  $("#submit").on("click", () => {
    let password = $("#password").val();
    let confirmPassword = $("#confirmPassword").val();
    let email = $("#email").val();
    let fname = $("#firstName").val();
    let lname = $("#lastName").val();
    let gender = $("#gender").val();

    let picture = $("#upload").val();
    let phoneNumber = $("#phoneNumber").val();
    let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let emailValid = emailRegex.test(email);
    
    let passRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])");
    let validpass = passRegex.test(password);
    if (
      fname == "" ||
      lname == "" ||
      phoneNumber == "" ||
      password == "" ||
      email == ""
    ) {
      swal("error!", "Empty fields are not allowed", "error");
    }
    else if (password.length < 8 && validpass) {
      $("#pass")
        .text(
          "the password is too short or doesnt contain a capital or small letter or number"
        )
        .css("color", "red");
    }
     else if (!password.match(confirmPassword)) {
      $("#pass")
        .text("your password and confirm password do not match")
        .css("color", "red");
    } else if (!emailValid) {
      $("#emai")
        .text("Your Email is not valid")
        .css("color", "red");
    }
    else {
      $.ajax({
          type: "POST",

        url: "registerphp.php",
        data: "fname="+fname+"&lname="+lname+"&password="+password+"&gender="+gender+"&email="+email+"&phoneNumber="+phoneNumber+"&picture="+picture,
          beforeSend:function(){
              $('.message_box').text('success');
          },
          success: function(data){
              setTimeout(() => {
                alert('ok');
                $("form")[0].reset();
                
           $('.messege_box').html(data)
              }, delay);
              
            }
        });

        }

     })
})