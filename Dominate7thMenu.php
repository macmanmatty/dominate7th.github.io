

<!DOCTYPE html>

<html>
<style >
.menuDiv{
  background-color: black;
  padding-left: 14.5px;
  padding-right: 15px;
  padding-top: 5px;
  padding-bottom: 5px;
  font-family:  arial;




}
a{
  text-decoration: none;


}


.menuDiv:hover{
background-color: grey;
font-family:  arial;

float: left;
}


#line{

  display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid black;
      margin: 2.1em 0;
      padding: 0;
  }

  #title{
    text-align: center;
    font-size: 30px;
    font-weight: bold;

    display: block;
    margin: 0;



  }

  #subText{
      font-size: 20px;
      font-weight: bold;
      font-family: fantasy;


  }
  #title img {
    height: 80px;
    width: auto;
  }


.menuButton{

  color: white;
  font-size: 16px;
}

#menu{
  position:absolute;
  display: flex;
  margin: 0px;
  text-align: center;
  width:100%;
  justify-content: center;
  top: 140px;



}




.imageButton {
    display: block;
    margin: 0 auto;
}
.imageButton{
z-index: 1;
position: absolute;

}
.imageButton:hover{

  visibility: hidden;
}
.imageDiv{
  float:left;

  padding-left: 16px;
  padding-right: 15px;
  padding-top: 5px;
  padding-bottom: 5px;
width:100%;
max-width: 100%;


}
body{

}



.dropdown {
  position: relative;
  display: inline-block;
  color: white;
  padding: 16px;
  font-size: 16px;

  border: none;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 180px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  top: 50px;
  right: calc(100% - 120px);
  z-index: 1;
}
.dropdown-content img {
  height: 40px;
  width: auto;
}



.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: inline-block;}

.dropdown:hover  {background-color: grey;}



@media only screen and (max-height:600px), only screen and (max-width:1000px)  {
  .menuDiv{
    background-color: black;
    padding-left: 14.5px;
    padding-right: 15px;
    font-family:  arial;
    font-size: 16px;




  }

  a{
    text-decoration: none;


  }

  .menuDiv :hover{
  background-color: grey;
  font-family:  arial;

  float: left;


  }
  .menuButton{

    color: white;
    font-size: 8px;
  }

  #menu{
    position:absolute;
    display: flex;
    margin: 0px;
    text-align: center;
    width:100%;
    justify-content: center;
    top:105px;




  }
  #subText{
      font-size: 16px;
      font-weight: bold;
      font-family: fantasy;

  }
  #title{
    text-align: center;
    font-size: 30px;
    font-weight: bold;

    display: block;
    margin: 0;



  }
  #title img {
    height: 50px;
    width: auto;
  }

  a{
        text-decoration: none;
  }


  #bottomMenu{
  position: relative;
  height:120px;

  display: inline-flex;
  margin: 0px auto;
     width:500px;


  }
  .menuDiv.a{
    text-decoration: none;


  }

  .imageDiv img {
    height:25px;
    width:auto;
  }

  .imageButton{
    z-index: 1;

  position: absolute;


  }

  .imageButton:hover{

    visibility: hidden;

  }
  .imageDiv{
    float:left;



    padding-left: 5px;
    padding-right: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
  max-width: 100%;


  }


  .imageDiv img {
    height:25px;
    width:auto;
  }
  body{

  }



  .dropdown {
    position: relative;
    display: inline-block;
    padding: 16px;
    font-size: 8px;
    border: none;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 120px;
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
    z-index: 1;
    top: 43px;
    right: calc(100% - 82.5px);

  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content img {
    height: 30px;
    width: auto;
  }
  .dropdown-content a:hover {background-color: #ddd;}

  .dropdown:hover .dropdown-content {display: inline-block;}

  .dropdown:hover  {background-color: grey;}


}

@media  only screen and (max-width:400px)  {
  .menuDiv{
    background-color: black;
    padding-left: 5.5px;
    padding-right: 5px;
    font-family:  arial;





  }
  .menuDiv.a{
    text-decoration: none;


  }
  .menuDiv :hover{
  background-color: grey;
  font-family:  arial;

  float: left;


  }
  .menuButton{

    color: white;
    font-size: 8px;
  }

  #menu{
    position:absolute;
    display: flex;
    margin: 0px;
    width:100%;
    top:80px;


  }
  #title{
    text-align: center;
    font-size: 30px;
    font-weight: bold;

    display: block;
    margin: 0;



  }

  #subText{
      font-size: 12px;
      font-weight: bold;
      font-family: fantasy;

  }
  #title img {
    height: 40px;
    width: auto;
  }

  a{
    text-decoration: none;


  }






  .imageDiv img {
    height:18px;
    width:auto;
  }

  .imageButton{
    z-index: 1;

  position: absolute;


  }

  .imageButton:hover{

    visibility: hidden;

  }
  .imageDiv{
    padding-top: 5px;
    padding-bottom: 5px;


  }


  .imageDiv img {
    height:20px;
    width: auto;
    margin: 0px;
    padding: 0px;
        box-sizing: border-box;
  }
  body{

  }
.as{
    margin: 0px;
    padding: 0px;
        box-sizing: border-box;
}
.dropdown-content img {
  height: 25px;
  width: auto;
}

.dropdown {
  position: relative;
  display: inline-block;
  padding: 16px;
  font-size: 8px;
  border: none;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 120px;
  box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: inline-block;}

.dropdown:hover  {background-color: grey;}



}

</style>
</head>
<body>

  <div id="title">
     Dominate 7th
    <img src="images/dominate7th.png" id="note">
    <p id="subText">

      A Player For YOUR Music!
    </p>



  </div>


<div id="menu">
<div class="menuDiv">
  <div class="dropdown">

  <a href="/index.php"  target="_blank"id="home" class="menuButton"> Main Page </a>
</div>
</div>
<div class="menuDiv">
  <div class="dropdown">

    <a href="/about.php" target="_blank" id="projects" class="menuButton"> About </a>
  </div>
    </div>
    <div class="menuDiv">
      <div class="dropdown">


        <a href="/usage.php"  target="_blank" id="about" class="menuButton"> Usage </a>
      </div>
        </div>



      <div class="menuDiv">


    <div class="dropdown">

 Download
 <div class="dropdown-content" class="menuButton">
   <a href="dominate7th.app" class="link"> <img src="images/apple.png" class="linkImage">  Download Mac Osx  App </a>

   <a href="dominate7th.exe" class="link"> <img src="images/windows.png" class="linkImage">  Download  Windows Exe  </a>

   <a href="dominate7th.jar" class="link"> <img src="images/java.png" class="linkImage">  Download Mac OSX Jar </a>

   <a href="dominate7th.jar" class="link"> <img src="images/java.png" class="linkImage">  Download Windows Jar </a>

   <a href="dominate7th.jar" class="link"> <img src="images/java.png" class="linkImage">  Download Linux 86x Jar </a>


   <a href="https://github.com/macmanmatty/Dominate7th" class="link"> <img src="images/github.png" class="linkImage">  Download Source From GitHub </a> </div>


</div>
</div>


</div>

<div id="line">
</div>



</body>
</html>
