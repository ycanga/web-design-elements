<html>
<head>
    <meta charset="utf-8">
    <title>Site Yapım Aşamasında</title>
    
</head>
<body>

<div class="main-wrapper">
<div class="signboard-wrapper">
<div class="signboard">Bakımdayız</div>
<div class="string"></div>
<div class="pin pin1"></div>
<div class="pin pin2"></div>
<div class="pin pin3"></div>
</div>
</div>   
<div class="aciklama">
    <h1>4lphasoftware.com</h1>
    <h2>Bakım çalışmaları devam ediyor.</h2>
    <p>Lütfen daha sonra tekrar ziyaret edin.</p>
    <p>İletişim: info@4lphasoftware.com</p>
    <p><a href="https://www.4lphasoftware.com/">https://www.4lphasoftware.com/</a></p>
    
</div>    
</body>
</html>

<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,700");

html,
body,
.main-wrapper {
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
}

.main-wrapper {
  font-size: 15vmin;
  background-color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: auto;
  float: right;
  z-index: 999;
  position: fixed;
}

.aciklama {
  color: #ffffff;
  font-family: Montserrat, sans-serif;
  font-size: 3vmin;
  background-color: black;
  height: auto;
  display: block, flex;
  position: absolute;
  text-shadow: 0 -0.015em #be2b00;
  align-items: center;
  justify-content: center;
  text-align: center;
  width: 100%;
  bottom: 0;
  text-decoration: none;
}

.aciklama a {
  text-decoration: none;
  color: #ffffff;
  font-family: Montserrat, sans-serif;
  font-size: 3vmin;
}


.signboard-wrapper {
  width: 105vmin;
  height: 55vmin;
  position: relative;
  flex-shrink: 0;
  transform-origin: center 2.5vmin;
  animation: 1000ms init forwards, 1000ms init-sign-move ease-out 1000ms, 3000ms sign-move 2000ms infinite;
}

.signboard-wrapper .signboard {
  color: #ffffff;
  font-family: Montserrat, sans-serif;
  font-weight: bold;
  background-color: #ff5625;
  width: 100vmin;
  height: 35vmin;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  bottom: 0;
  border-radius: 4vmin;
  text-shadow: 0 -0.015em #be2b00;
}

.signboard-wrapper .string {
  width: 30vmin;
  height: 30vmin;
  border: solid 0.9vmin #893d00;
  border-bottom: none;
  border-right: none;
  position: absolute;
  left: 50%;
  transform-origin: top left;
  transform: rotatez(45deg);
}

.signboard-wrapper .pin {
  width: 5vmin;
  height: 5vmin;
  position: absolute;
  border-radius: 50%;
}

.signboard-wrapper .pin.pin1 {
  background-color: #9f9f9f;
  top: 0;
  left: calc(50% - 2.5vmin);
}

.signboard-wrapper .pin.pin2,
.signboard-wrapper .pin.pin3 {
  background-color: #d83000;
  top: 21.5vmin;
}

.signboard-wrapper .pin.pin2 {
  left: 13vmin;
}

.signboard-wrapper .pin.pin3 {
  right: 13vmin;
}

@keyframes init {
  0% {
    transform: scale(0);
  }

  40% {
    transform: scale(1.1);
  }

  60% {
    transform: scale(0.9);
  }

  80% {
    transform: scale(1.05);
  }

  100% {
    transform: scale(1);
  }
}

@keyframes init-sign-move {
  100% {
    transform: rotatez(3deg);
  }
}

@keyframes sign-move {
  0% {
    transform: rotatez(3deg);
  }

  50% {
    transform: rotatez(-3deg);
  }

  100% {
    transform: rotatez(3deg);
  }
}

</style>