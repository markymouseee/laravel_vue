<template>
    <footer class="text-white py-3 mt-auto">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <img src="../../images/logo.png" class="app-logo">
          <nav>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-black" href="/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="/contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="/privacy">Privacy Policy</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>
  </template>
  
<style scoped>
  .app-logo{
    height: 70px;
    border-radius: 25px;
  }

  footer {
    position: relative;
    bottom: 0;
    width: 100%;
    background: rgba(153, 153, 153, 0.877);
    box-shadow: 0 0 1px 1px #0000004c;
  }
  
  .nav-link {
    padding: 0 0.5rem;
  }
  
  .nav-link:hover {
    text-decoration: underline;
  }
</style>
  

