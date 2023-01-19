let openadd = document.querySelector(".add-open");
let addtask = document.querySelector(".addtask");
let closeadd = document.querySelector(".add-close");
let openaddmulti = document.querySelector(".add-multi-open");
let addtaskmulti = document.querySelector(".addtask-multi");
let closeaddmulti = document.querySelector(".add-multi-close");
let taskform = document.querySelector(".task-form");
let numinput = document.querySelector(".numoftask");

openadd.addEventListener("click", () => {
  addtask.classList.toggle("active");
});
closeadd.onclick = () => {
  addtask.classList.remove("active");
};
openaddmulti.addEventListener("click", () => {
  addtaskmulti.classList.toggle("active");
});
closeaddmulti.onclick = () => {
  addtaskmulti.classList.remove("active");
};

numinput.addEventListener("change", function () {
  let value = numinput.value;
  taskform.innerHTML = ``;
  if (value > 0) {
    let i = 1;
    while (i <= value) {
      taskform.innerHTML += `   <div class="multitask">
      <input class="input form-control mt-3 mb-3" type="text" name="task-title${i}" placeholder="Enter Task Title" required>
      <input class="input form-control mb-3" type="text" name="task-subject${i}" placeholder="Enter Task subject" required>
      <input type="text" value="todo" name="task-status" class="d-none">
      <label for="">Deadline :</label>
      <div class="mb-3 mt-2">
          <input type="datetime-local" class="deadline" name="deadline${i}" required>
      </div>
                     </div>`;
      i++;
    }
  }
});
