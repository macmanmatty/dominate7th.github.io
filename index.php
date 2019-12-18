<!DOCTYPE html>


<html>
<head>
  <title> Dominate7th </title>
  <style>

  #title{
    display: inline-block;
    text-align: center;
    font-size: 30px;
    font-weight: bold;



  }

  #features{
    height: 800px;
    top: 60px;
    position: relative;


  }
  #featureList{


  }

  .featureItem{


  }

  #note{


     width: relative;
     height: 100px;
     float right;
     padding-left: 0px;
  }

  #playerImage{
    display: block;
     margin-left: auto;
     width: 800px;
     height: relative;
     }
     #body{
       display: block;
        margin-left: 50%;
        margin-right: 50%;

     }
     #featuresTitle{
       font-size: 20px;
       font-weight: bold;
       font-family: sans-serif;
       border-bottom:2px solid;



       width: 800px;






     }
     #main{
       float: left;

     }

     #main img{

       box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

     }

     #requirements{
       top:280px;
       position: relative;



     }
     .requirement{
       font-size:13px;


     }
     .requirementTitle{

         font-size: 17px;
         font-weight: bold;


     }
     a.link{
       font-style: normal;
       border-bottom: 0px;
       font-family: sans-serif;
       padding-left: 5px;
       padding-right:5px;




     }

     #requirementsTitle{

         font-size: 16px;
         font-weight: 400;
         border-bottom: 2px solid;


     }
     .requirementsList{

     }

     #links{
       padding-left: 5px;
       padding-right:5px;



     }

     #title{
       font-size:30px;
       font-weight: 400;
       font-family: sans-serif;
       text-align: center;





     }
     #logo{
       height: 100px;
       width: auto;


     }





  </style>


  <script>
  </script>
  <body>
    <?php

  include ("dominate7thMenu.php");


    ?>


<div id="main">



      <img src="images/player.png"  id="playerImage">



    </div>


    <div id="features">
      <p id="featuresTitle" > Features </p>
      <ul id=featureList>
        <li class="featureItem"> Supports Tagging of Mp3, Mp4 (Mp4 audio, M4a and M4p audio), Ogg, Vorbis, Flac, Wav, Aiff, Dsf, and Wma Audio Files </li>
        <li class="featureItem"> Supports playing of  most any audio file format  via FFmpeg </li>
        <li class="featureItem"> Supports encoding to most any audio file format via FFmpeg </li>
        <li class="featureItem"> Supports viewing and emdeding album artwork  </li>
        <li class="featureItem"> Supports sorting of music folders and files  </li>
        <li class="featureItem"> Supports  retreving  song tags via acoustID and  MusicBrainz   </li>
        <li class="featureItem">  User created  playists   </li>
        <li class="featureItem">  Searching of playlists   </li>
        <li class="featureItem"> Supports Shuffling of PlayLists  </li>
        <li class="featureItem">  Smart playists that automatically  update when your library updates  </li>
        <li class="featureItem">  Supports reading cue files  </li>
        <li class="featureItem">  Supports splitting  and encoding cue files  </li>
        <li class="featureItem">  Importing  Cds  </li>
        <li class="featureItem">  Supports volume control and speaker panning  </li>
        <li class="featureItem">  Old School Music Start , Stop, Play, Fast Foward , Rewind, and Skip Buttons Reminiscente of a 90's  Sony Walkman  </li>
      </ul>

    </div>
  </div>

  <div id="requirements">
    <p id="requirementsTitle"> System requirements </p>
  <p id="requirementTitle">Windows</p>


  <ul class="requirementList">

    <li class="requirement">  Windows 10 (8u51 and above) </li>
  <li class="requirement">    Windows 8.x (Desktop) </li>
    <li class="requirement">  Windows 7 SP1 </li>
    <li class="requirement">  Windows Vista SP2 </li>
    <li class="requirement">  Windows Server 2008 R2 SP1 (64-bit) </li>
    <li class="requirement">  Windows Server 2012 and 2012 R2 (64-bit) </li>
    <li class="requirement">  RAM: 128 MB </li>
    <li class="requirement">  Disk space: 124 MB for JRE; 2 MB for Java Update </li>
    <li class="requirement">  Processor: Minimum Pentium 2 266 MHz processor </li>

    </ul>


  <p id="requirementTitle">Mac OS X </p>
  <ul class="requirementList">

    <li class="requirement">  Intel-based Mac running Mac OS X 10.8.3+ </li>
    </ul>



  <p id="requirementTitle">Linux </p>
  <ul class="requirementList">

  <li class="requirement">    Oracle Linux 5.5+1 </li>
  <li class="requirement">    Oracle Linux 6.x (32-bit), 6.x (64-bit)2 </li>
  <li class="requirement">    Oracle Linux 7.x (64-bit)2 (8u20 and above) </li>
  <li class="requirement">    Red Hat Enterprise Linux 5.5+1, 6.x (32-bit), 6.x (64-bit)2 </li>
  <li class="requirement">    Red Hat Enterprise Linux 7.x (64-bit)2 (8u20 and above) </li>
  <li class="requirement">    Suse Linux Enterprise Server 10 SP2+, 11.x </li>
    <li class="requirement">  Suse Linux Enterprise Server 12.x (64-bit)2 (8u31 and above) </li>
  <li class="requirement">    Ubuntu Linux 12.04 LTS, 13.x </li>
    <li class="requirement">  Ubuntu Linux 14.x (8u25 and above) </li>
    <li class="requirement">  Ubuntu Linux 15.04 (8u45 and above) </li>
    <li class="requirement">  Ubuntu Linux 15.10 (8u65 and above) </li>
    </ul>

  </div>







  </body>
  </html>
