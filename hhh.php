<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Styled Audio Player</title>

<style>
  body {
    background: #020617;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: white;
  }

  .player {
    background: #0f172a;
    padding: 20px 25px;
    border-radius: 16px;
    width: 320px;
    box-shadow: 0 0 25px rgba(0,255,255,0.25);
  }

  .title {
    font-size: 16px;
    margin-bottom: 12px;
    color: aqua;
  }

  .controls {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: aqua;
    color: #000;
    border: none;
    font-size: 18px;
    cursor: pointer;
  }

  .progress {
    flex: 1;
    height: 6px;
    background: #1e293b;
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
  }

  .bar {
    height: 100%;
    width: 0%;
    background: aqua;
  }

  .time {
    font-size: 12px;
    margin-top: 8px;
    text-align: right;
    opacity: 0.8;
  }
</style>
</head>

<body>

<div class="player">
  <div class="title">🎙️ Voice Message</div>

  <div class="controls">
    <button class="btn" id="playBtn">▶</button>

    <div class="progress" id="progress">
      <div class="bar" id="bar"></div>
    </div>
  </div>

  <div class="time" id="time">0:00</div>

  <audio id="audio" src="assets/images/r.webm"></audio>
</div>

<script>
const audio = document.getElementById("audio");
const playBtn = document.getElementById("playBtn");
const bar = document.getElementById("bar");
const time = document.getElementById("time");
const progress = document.getElementById("progress");

playBtn.onclick = () => {
  if (audio.paused) {
    audio.play();
    playBtn.innerHTML = "❚❚";
  } else {
    audio.pause();
    playBtn.innerHTML = "▶";
  }
};

audio.ontimeupdate = () => {
  const percent = (audio.currentTime / audio.duration) * 100;
  bar.style.width = percent + "%";

  const min = Math.floor(audio.currentTime / 60);
  const sec = Math.floor(audio.currentTime % 60).toString().padStart(2, "0");
  time.innerText = `${min}:${sec}`;
};

progress.onclick = (e) => {
  const width = progress.clientWidth;
  const clickX = e.offsetX;
  audio.currentTime = (clickX / width) * audio.duration;
};
</script>

</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Minimal Audio Player</title>

<style>
  body {
    background: #f3f4f6;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
  }

  .audio-bar {
    background: #fff;
    border-radius: 40px;
    padding: 10px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    width: 520px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  }

  .play {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: none;
    background: none;
    font-size: 18px;
    cursor: pointer;
  }

  .time {
    font-size: 12px;
    color: #444;
    min-width: 70px;
  }

  .progress {
    flex: 1;
    height: 4px;
    background: #e5e7eb;
    border-radius: 10px;
    cursor: pointer;
    position: relative;
  }

  .progress span {
    position: absolute;
    height: 100%;
    width: 0%;
    background: #9ca3af;
    border-radius: 10px;
  }

  .icon {
    font-size: 16px;
    cursor: pointer;
    opacity: 0.7;
  }
</style>
</head>

<body>

<div class="audio-bar">
  <button class="play" id="playBtn">▶</button>

  <div class="time" id="time">0:00 / 6:04</div>

  <div class="progress" id="progress">
    <span id="bar"></span>
  </div>

  <div class="icon">🔊</div>
  <div class="icon">⋮</div>

  <audio id="audio" src="assets/images/r.webm"></audio>
</div>

<script>
const audio = document.getElementById("audio");
const playBtn = document.getElementById("playBtn");
const bar = document.getElementById("bar");
const time = document.getElementById("time");
const progress = document.getElementById("progress");

playBtn.onclick = () => {
  if (audio.paused) {
    audio.play();
    playBtn.innerHTML = "❚❚";
  } else {
    audio.pause();
    playBtn.innerHTML = "▶";
  }
};

audio.ontimeupdate = () => {
  const percent = (audio.currentTime / audio.duration) * 100;
  bar.style.width = percent + "%";

  const curMin = Math.floor(audio.currentTime / 60);
  const curSec = Math.floor(audio.currentTime % 60).toString().padStart(2,"0");

  const durMin = Math.floor(audio.duration / 60);
  const durSec = Math.floor(audio.duration % 60).toString().padStart(2,"0");

  time.innerText = `${curMin}:${curSec} / ${durMin}:${durSec}`;
};

progress.onclick = e => {
  const width = progress.clientWidth;
  audio.currentTime = (e.offsetX / width) * audio.duration;
};
</script>

</body>
</html>

