$(()=>{

 
    $('.hide').on('click', ()=>{

        let showing = $("#password");
        
        if(showing.prop('type') === 'password'){
        
          showing.prop('type','text');
        }
        else{
          showing.prop('type','password');
        }
        
        
        });

    $('.email, .password').on('keyup',()=>{
 
     let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 
 
     let $email = $('.email').val();
     let $password = $('.password').val();
    
     const validEmail =  re.test($email)
 
     
 
 
     if(( validEmail) && ($password && $password.length > 7)){
         $(".submit").prop('disabled',false);
         console.log('good %d', $password.length)
         
     }
     
    else{
        $(".submit").prop('disabled',true).css('background-color','#1b1a18');
     console.warn('error');
     return  
     
    }
 
    
 
 });
         
 });