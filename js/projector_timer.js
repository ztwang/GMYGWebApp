var n_timeSec = 15;
var n_startTime = 0;
var n_pauseTime = 0;
var timer_display = document.getElementById("timer_display");
var b_timing = false;

function f_CountTime() {
  if (b_timing) {
    n_passSec = Math.floor((Date.now() - n_startTime) / 1000);
    if (n_passSec < n_timeSec) {
      timer_display.innerHTML = f_formatMinSec(n_timeSec - n_passSec);
      setTimeout(function() {
        f_CountTime();
      }, 1000);
    } else {
      timer_display.innerHTML = 'Time out';
      b_timing = false;
    }
  }
}

function f_StartTimer() {
  timer_display.innerHTML=f_formatMinSec(n_timeSec);
  b_timing = true;
  n_startTime = Date.now();
  n_pauseTime = Date.now();
  f_CountTime();
  console.log(n_startTime);
}

function f_StopTimer() {
  if(b_timing) {
    b_timing = false;
    n_pauseTime = Date.now();
  }
}

function f_ResumeTimer() {
  if(!b_timing) {
    b_timing = true;
    n_startTime += Date.now()-n_pauseTime;
    f_CountTime();
  }
}

function f_formatMinSec(n_timeSec) {
    min = Math.floor(n_timeSec / 60);
    sec = n_timeSec % 60;
    min_str = (min < 10 ? '0' : '') + min;
    sec_str = (sec < 10 ? '0' : '') + sec;
    return min_str + ':' + sec_str;
}

f_StartTimer();