

<div class="wrapper">
  <div class="main">
    <button class="side-panel-toggle" onclick="toggleSidePanel()">
      <span class="sp-icon-open">☰</span>
      <span class="sp-icon-close">✖</span>
    </button>
    
  </div>
  <div class="side-panel">
    <h2>Side Panel</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
  </div>
</div>

<script>
  function toggleSidePanel() {
    document.querySelector('.wrapper').classList.toggle('side-panel-open');
  }
</script>


<style>
  
body {
    margin: 0;
    font-family: sans-serif;
    line-height: 1.5;
  }
  
  .wrapper {
    display: flex;
    height: 100vh;
  }
  
  .main {
    flex-grow: 1;
    padding: 20px;
    overflow-y: auto;
  }
  
  .side-panel-toggle {
    width: 40px;
    height: 40px;
    flex-shrink: 0;
    display: grid;
    place-items: center;
  
    color: #ffffff;
    background: #009578;
    border: none;
    border-radius: 5px 0 0 5px;
    outline: none;
    cursor: pointer;
  }
  
  .side-panel-toggle:hover {
    background: #007960;
  }
  
  .sp-icon-close {
    display: none !important;
  }
  
  .side-panel {
    display: none;
    width: 200px;
    flex-shrink: 0;
    padding: 20px;
    color: #ffffff;
    background: #009578;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.35);
  }
  
  .side-panel-open .side-panel {
    display: initial;
  }
  
  .side-panel-open .sp-icon-open {
    display: none !important;
  }
  
  .side-panel-open .sp-icon-close {
    display: initial !important;
  }
  
</style>