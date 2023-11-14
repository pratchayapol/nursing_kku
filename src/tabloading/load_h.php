<div id="loading-bar">
<div id="progress-bar"></div>
</div>

<style>
  #loading-bar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background-color: #ccc;
    /* สีพื้นหลังเริ่มต้น */
    z-index: 9999;
  }

  #progress-bar {
    width: 0%;
    height: 100%;
    background-color: #f00;
    /* สีที่ต้องการเปลี่ยน */
    transition: width 0.3s ease-out;
  }
  
</style>
