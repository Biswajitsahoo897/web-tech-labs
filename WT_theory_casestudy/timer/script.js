let timerInterval;
let totalSeconds = 0;
let isRunning = false;

const timerDisplay = document.getElementById('timer-display');
const startBtn = document.getElementById('start-btn');
const pauseBtn = document.getElementById('pause-btn');
const resetBtn = document.getElementById('reset-btn');
const setTimeBtn = document.getElementById('set-time-btn');
const inputs = {
  hours: document.getElementById('hours'),
  minutes: document.getElementById('minutes'),
  seconds: document.getElementById('seconds'),
};
const presetBtns = document.querySelectorAll('.preset-btn');


function formatTime(totalSeconds) {
  const hrs = Math.floor(totalSeconds / 3600);
  const mins = Math.floor((totalSeconds % 3600) / 60);
  const secs = totalSeconds % 60;
  return `${String(hrs).padStart(2, '0')}:${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
}

function updateDisplay() {
  timerDisplay.textContent = formatTime(totalSeconds);
}

function startTimer() {
  if (isRunning || totalSeconds <= 0) return;
  isRunning = true;

  timerInterval = setInterval(() => {
    totalSeconds--;
    updateDisplay();

    if (totalSeconds <= 0) {
      clearInterval(timerInterval);
      isRunning = false;
      alert('⏰ Time’s up!');
    }
  }, 1000);
}

function pauseTimer() {
  clearInterval(timerInterval);
  isRunning = false;
}

function resetTimer() {
  clearInterval(timerInterval);
  isRunning = false;
  totalSeconds = 0;
  updateDisplay();
}

function setTime() {
  const hrs = parseInt(inputs.hours.value) || 0;
  const mins = parseInt(inputs.minutes.value) || 0;
  const secs = parseInt(inputs.seconds.value) || 0;
  totalSeconds = hrs * 3600 + mins * 60 + secs;
  updateDisplay();
}



startBtn.addEventListener('click', startTimer);
pauseBtn.addEventListener('click', pauseTimer);
resetBtn.addEventListener('click', resetTimer);
setTimeBtn.addEventListener('click', setTime);

presetBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    const mins = parseInt(btn.getAttribute('data-minutes'));
    totalSeconds = mins * 60;
    updateDisplay();
  });
});

updateDisplay();
