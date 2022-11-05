<!DOCTYPE html>
<head>
    <title>create group </title>
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
/* navecation bar  */
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
#img-g{

    position: absolute;
    top: 30%;
    left: 15%;
    color: white;
    
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


/* create group style  */
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
top: 10%;
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
}

#user-iocn{
    position:absolute;
    top: 54.5%;
    left: 33%;
}

.input-name{
    position:absolute;
    top: 53%;
    left: 30%;
    border-radius: 25px; 
    padding-left: 6%;
    height: 5%;    border-bottom: 1px solid black;
    width: 40%;
    margin-left: 1%;
}


#user-iocn1{
    position:absolute;
    top: 64%;
    left: 33%;
}

.select-t{
    position:absolute;
    top: 63%;
    left: 30%;
    border-radius: 25px; 
    padding-left: 6%;
    height: 5%;    border-bottom: 1px solid black;
    width: 47%;
    margin-left: 1%;

}
.bt-save{
    position:absolute;
    top: 73%;
    left: 30%;
    width: 50%;
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
/**media when  max-width:830px */

@media(max-width:830px)
{

.img-name{
    position:absolute;
    top: 50%;
    left: 18%;

}
.img-t{
    top: 60%;
    left: 18%;
}
.img-greate{
    width: 40%;
    height: 20%;
}
.lable-create{
    font-size: 20px;
}
}
/**media when  max-width:660px */

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
/**media when  max-width:900px */

@media(max-width:900px)
{
    .img-greate{
    width: 40%;
    height: 20%;
}
.lable-create{
    font-size: 28px;
}
}

</style>
    <html>
        <body>

            
            <!-- div tools-->
    <div   class="tool-div">
            <img class="img-ad" src="../../sources/image/user-man.png"/>
            <label class="l-id-admin"><b>Admin name</b>  <br> 172038</label>

              <a class="a-group" href="" > Groups</a>
              <i  id="img-g" class="fa-regular fa-user"></i>

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
              <img class="img-ad-footer" src="../../sources/image/admin.png"/>
     </div>
           
               <!-- GREATE GROUPS -->
         <div class="create-g-div">
                <label class="lable-create">Greate Group </label>
                <img class="img-greate" src="../../sources/image/create group.png"/>

                <input id="name" class="input-name" type="text"  placeholder="Group Name"/>
                <i  id="user-iocn" class="fa-regular fa-user"></i>

                <select class="select-t">
                    <option>essra</option>
                    <option>sara</option>
                </select>
                <i  id="user-iocn1" class="fa-regular fa-user"></i>

                <input class="bt-save" type="button" value="Save" onclick="check_Enter()" />
         </div>

    <!-- check enter -->
    <script>
        function check_Enter() {
        const NAME = document.getElementById("name").value;
        if(NAME==""){
        alert(" pleas enter Group-name");
        return false
        }
        }
    </script>
</body>
</html>