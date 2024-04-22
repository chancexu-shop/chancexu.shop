<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
</head>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">收納盒｜工具</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
  
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
  
    <div class="w3-center w3-padding-16">晶生晶飾</div>    
  </div>

</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src=C:\xampp\htdocs\projet\projet\照片\LINE_ALBUM_20.jpg alt="Sandwich" style="width:100%">
      <h3>翠玉仙境
</h3>
      <p>｜極細款手鍊｜綠松石｜</p>
    </div>
    <div class="w3-quarter">
      <img src="C:\xampp\htdocs\projet\projet\照片\LINE_ALBUM_21.jpg" alt="Steak" style="width:100%">
      <h3>海風寄語</h3>
      <p>｜極細款手鍊｜海藍寶+青金石｜</p>
    </div>
    <div class="w3-quarter">
      <img src="C:\xampp\htdocs\projet\projet\照片\LINE_ALBUM_22.jpg" alt="Cherries" style="width:100%">
      <h3>玲瓏心細琢翠生潾</h3>
      <p>｜極細款手鍊｜海藍寶+青金石｜</p>
      
    </div>
    <div class="w3-quarter">
      <img src="C:\xampp\htdocs\projet\projet\照片\LINE_ALBUM_23.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>蔚然星辰</h3>
      <p>｜極細款手鍊｜海藍寶+青金石｜</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="C:\xampp\htdocs\projet\projet\照片\LINE_ALBUM_24.jpg" alt="Popsicle" style="width:100%">
      <h3>璀璨童話</h3>
      <p>｜極細款手鍊｜海藍寶+青金石｜</p>
    </div>
    <div class="w3-quarter">
      <img src="C:\xampp\htdocs\projet\projet\照片\LINE_ALBUM_25.jpg" alt="Salmon" style="width:100%">
      <h3>真愛音律</h3>
      <p>｜極細款手鍊｜海藍寶+青金石｜</p>
    </div>
    <div class="w3-quarter">
      <img src="C:\xampp\htdocs\projet\projet\照片\LINE_ALBUM_26.jpg" alt="Sandwich" style="width:100%">
      <h3>醉人月夜</h3>
      <p>｜極細款手鍊｜海藍寶+青金石｜</p>
    </div>
    <div class="w3-quarter">
      <img src="C:\xampp\htdocs\projet\projet\照片\LINE_ALBUM_27.jpg" alt="Croissant" style="width:100%">
      <h3>繁花似錦</h3>
      <p>｜極細款手鍊｜海藍寶+青金石｜</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">
    <h3><strong>會員制度</strong></h3>
    <br>
    <img src="C:\xampp\htdocs\projet\projet\照片\Gold _ Black.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>Members</b></h4>
      <h6><i>我們的會員分別為</i></h6>
      <p>水晶 - 
	  </p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>關於我們</h3>
      <p>這裡是尋找閃耀奇蹟和為自己或親友增添獨特風采的理想之地
我們引以為傲的水晶飾品將為您帶來不僅僅是美麗的外表
更是一份蘊含靈性力量的獨特體驗。</p>
    </div>
  
    <div class="w3-third">
      <h3>社群</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="https://cdn4.iconfinder.com/data/icons/picons-social/57/38-instagram-2-512.png" class="w3-left w3-margin-right" style="width:50px">
          <a href="https://www.instagram.com/chancexu_/">
          <span class="w3-large">chancexu_</span><br>
          <span>晶生晶飾<br>服裝（品牌）穿戴水晶💍價格優惠</span>
        </li>
        <li class="w3-padding-16">
          <img src="https://static-00.iconduck.com/assets.00/facebook-icon-512x512-ia6dcaaw.png" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">晶生晶飾 </span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>
    
     <div class="w3-third w3-serif">
 <h3>付款方式</h3>
      <p>
        <span class="w3-tag w3-dark-grey w3-small ">轉帳</span> <span class="w3-tag w3-dark-grey w3-small ">貨到付款</span>
        
      </p>
    </div>

  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>