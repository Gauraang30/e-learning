function login(){ 

    var username=document.newreg.uname;  
    if (username.value!='2020.atharva.bhaindarkar@ves.ac.in')
    { 
        if (username.value!='2020.gauraang.prabhudesai@ves.ac.in')
      {   
      alert("Invalid Username");  
      username.focus();
            return false;
      }}    
    var p=document.newreg.pass;  
    if(username.value=='2020.atharva.bhaindarkar@ves.ac.in')
    if (p.value!='atharva10')
    {  
      alert("Invalid Password");  
      p.focus();
            return false;
      }
    else if(username.value=='2020.gauraang.prabhudesai@ves.ac.in')
    if(p.value!='Gaur')
      {  
        alert("Invalid Password");  
        p.focus();
              return false;
        }
}  	