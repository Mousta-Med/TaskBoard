let openadd = document.querySelector(".add-open");
let addtask = document.querySelector(".addtask");
let closeadd = document.querySelector(".add-close");
if (addtask) {
  openadd.addEventListener("click", () => {
    addtask.classList.toggle("active");
  });
  closeadd.onclick = () => {
    addtask.classList.remove("active");
  };
}
let openaddmulti = document.querySelector(".add-multi-open");
let addtaskmulti = document.querySelector(".addtask-multi");
let closeaddmulti = document.querySelector(".add-multi-close");
if (addtaskmulti) {
  openaddmulti.addEventListener("click", () => {
    addtaskmulti.classList.toggle("active");
  });
  closeaddmulti.onclick = () => {
    addtaskmulti.classList.remove("active");
  };
}
let openarchive = document.querySelector(".archive-open");
let addarchive = document.querySelector(".archive");
let closearchive = document.querySelector(".archive-close");
if (addarchive) {
  openarchive.addEventListener("click", () => {
    addarchive.classList.toggle("active");
  });
  closearchive.onclick = () => {
    addarchive.classList.remove("active");
  };
}
let taskform = document.querySelector(".task-form");
let numinput = document.querySelector(".numoftask");
if (numinput) {
  numinput.addEventListener("change", function () {
    let value = numinput.value;
    taskform.innerHTML = ``;
    if (value > 0) {
      let i = 1;
      while (i <= value) {
        taskform.innerHTML += `<div class="multitask">
          <input class="input form-control mt-3 mb-3" type="text" name="task-title${i}" placeholder="Enter Task Title" required>
          <input class="input form-control mb-3" type="text" name="task-subject${i}" placeholder="Enter Task subject" required>
          <input type="text" value="todo" name="task-status" class="d-none">
          <label for="">Deadline :</label>
          <div class="mb-3 mt-2">
            <input type="datetime-local" class="deadline" min="" name="deadline${i}" required>
          </div>
        </div>`;
        i++;
      }
    }
  });
}

let form = document.getElementById('form');
let username = document.getElementById('name');
if (username) {

  username.addEventListener('input', function (e) {
    console.log(e.target.value);
  });
}
