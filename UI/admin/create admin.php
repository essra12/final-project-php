<!DOCTYPE html>
<head>
    <title>create Admin</title>
    <meta name="descreption " content=" " />
    <script src="https://kit.fontawesome.com/e1ca29be31.js" crossorigin="anonymous"></script>
    </head>

<style>
    *{
        margin: 0;
    }
body{
    background-color: #A4D2F0;
}

/* nav bar  */
.tool-div{
background-color: #222242;
width: 20%;
height: 100vh;
position: relative;
display: inline-block;

}
.img-ad{
width: 25%;
height: 10%;
position: absolute;
top: 10%;
left: 5%;

}
.l-id-admin{
    color: white;
    position: absolute;
    top: 13%;
    left: 35%;
}
.a-group{
    position: absolute;
    top: 29%;
    left: 40%;
}
.img-g{

    position: absolute;
    top: 25%;
    left: 10%;
}

.a-teacher{
    position: absolute;
    top: 39%;
    left: 40%;
}
.img-g1{

position: absolute;
top: 37%;
left: 10%;
}

.a-student{
    position: absolute;
    top: 49%;
    left: 40%;
}
.img-s{

position: absolute;
top: 49%;
left: 10%;
}
.a-file{
    position: absolute;
    top: 61%;
    left: 40%;
}
.img-f{

position: absolute;
top: 60%;
left: 10%;
}
a{
    text-decoration: none;
    font-size: 25px;
    color: white;
}


/* create admin form*/

.create-g-div{
    background-color: white;
    width: 50%;
height: 90vh;
border-radius: 15px;

display: inline-block;
position: absolute;
left: 70%;
top: 5%;
transform: translate(-70%); 
text-align: center;
}
.lable-create{

position: absolute;
top: 7%;
left: 50%;
transform: translate(-50%);
font-size: 30px;

}
.img-greate{

    position: absolute;
top: 20%;
left: 50%;
transform: translate(-50%);
font-size: 30px; 
height: 15%;
width: 15%;
}
#user-iocn{
    position:absolute;
    top: 46%;
    left: 33%;
}
.input-name{
    position:absolute;
    top: 45%;
    left: 30%;
   border-bottom: 1px solid black;
    width: 40%;
    margin-left: 1%;

    border-radius: 25px; 
    padding-left: 6%;
    height: 5%; 
}
#pass-iocn{
    position: absolute;
    top: 56.5%;
    left: 33%;
   
}
.input-pass{
    position:absolute;
    top: 55%;
    left: 30%;
    border-bottom: 1px solid black;
    width: 40%;
    margin-left: 1%;
    border-radius: 25px; 
    padding-left: 6%;
    height: 5%;

}
.input-pass2{
    position:absolute;
    top: 65%;
    left: 30%;
    border-radius: 25px; 
    padding-left: 6%;
    height: 5%;
        border-bottom: 1px solid black;
    width: 40%;
    margin-left: 1%;
}
#pass2-iocn{
    position: absolute;
    top: 66.5%;
    left: 33%;
   
}

.check-box-admiin{

    position:absolute;
    top: 75%;
    left: 33%;
    width: 3%;
    height: 3%;  
}
.lb{
    position:absolute;
    top: 75%;
    left: 38%; 
    color: #6f6f6f;
}
.bt-save{
    position:absolute;
    top: 85%;
    left: 30%;
    width: 47%;
    background-color: #222242;
    height: 7%;
    color: white;
    border-radius: 25px;
}
.bt-save:hover{
    box-shadow: 4px 4px 4px rgb(135, 134, 134); 

}
.div-admin-footer{
background-color: #bababa;
width: 70%;
height: 15vh;
position: absolute;
bottom: 2%;
left: 15%;
border-radius: 15px;
}
.img-ad-footer{
    width: 40%;
    height: 20%;
    position: absolute;
    bottom: 8%;
    left: 30%;
   
}

.bt-admin{
position: absolute;
left:  50%;
transform: translate(-50%);
bottom: 5%;
border-radius: 15px;
background-color: #A4D2F0;
border: none;
height: 30%;
width: 40%;
text-align: center;
}
/** media  when max-width:830px */

@media(max-width:830px)
{

.img-name{
    position:absolute;
  
    left: 18%;
}
.img-n{
    left: 18%;
}
.img-pass{
    left: 18%;
}
.img-pass2{
    left: 18%;
}

/** media  when max-width:660px */

}
@media(max-width:660px)
{

.create-g-div{
    width: 70%;
}
.tool-div{
    display: none;
}
.lable-create{
    font-size: 20px;
}

}
/** media  when max-width:900px */

@media(max-width:900px)
{
.lable-create{
    font-size: 23px;
}
}

</style>
    <html>
        <body>


            
            <!-- div tools-->

            <div   class="tool-div">
            <img class="img-ad" src="../../image/create.png"/>
            <label class="l-id-admin"><b>Admin name</b>  <br> 172038</label>

              <a class="a-group" href="" > Groups</a>
              <a class="a-teacher" href="" > Teachers</a>
              <a class="a-student" href="" > Students</a>
              <a class="a-file" href="" > Files </a>

              <img class="img-g" src="pic/gr.png"/>
              <img class="img-g1" src="pic/tr.png"/>
              <img class="img-s" src="pic/st.png"/>
              <img class="img-f" src="pic/file.png"/>
        
              <div class="div-admin-footer">
               
              <input class="bt-admin" type="button" value="Admin "/>

              </div>
              <img class="img-ad-footer" src="pic/admin.png"/>
              </div>
              
               <!-- GREATE GROUPS -->
               <div class="create-g-div">
                <label class="lable-create">Greate Teacher <br> Account </label>
                <img class="img-greate" src="../../image/create.png"/>

                <input id="name" class="input-name" type="text"  placeholder="Full Name"/>
                <i  id="user-iocn" class="fa-regular fa-user"></i>

                <input id="pass" class="input-pass" type="password"  placeholder="password"/>
                <i  id="pass-iocn" class="fa-solid fa-lock"></i>

                <input id="cof-pass" class="input-pass2" type="password"  placeholder="confirm password"/>
                <i  id="pass2-iocn" class="fa-solid fa-lock"></i>

                <input id="check" class="check-box-admiin" type="checkbox"  />
                <label class="lb">Admin</label>

                <input class="bt-save" type="button" value="Save" onclick="check_Enter()" />
              
               </div>

<!-- check enter -->
<script>

    function check_Enter() {
   
    const NAME = document.getElementById("name").value;
    const pass = document.getElementById("pass").value;
    const pass2=document.getElementById("cof-pass").value;
    const check=document.getElementById("check").value;
  
   
    if(NAME==""){
    alert(" pleas enter name");
    return false
    }
    
    else if(pass==""){
    alert("    pleas enter password ");
    return false
    }
    if(pass2==""){
    alert(" pleas enter password again");
    return false
    }
  if(pass != pass2){
  alert(" the password is not equal ");
  return false
    }
    if (!document.getElementById('check').checked) {
        alert("You didn't check it!");
        return false     
            }
    }
    </script>

</body>
</html>