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

var currentDate = new Date().toISOString().slice(0, 16);
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
            <input type="datetime-local" id="datetime" min="${currentDate}" class="deadline" name="deadline${i}" required>
          </div>
        </div>`;
        i++;
      }
    }
  });
}

let username = document.getElementById("name");
let name_err = document.getElementById("name_err");
let submit = document.getElementById("submit");
if (username) {
  username.addEventListener("input", function (e) {
    let namepatern = /^([A-Za-z\d]+[ ]*){6,20}$/i;
    let value = e.target.value;
    let namevalidation = namepatern.test(value);
    if (namevalidation) {
      submit.removeAttribute("disabled", "disabled");
      name_err.style.display = "none";
    } else {
      submit.setAttribute("disabled", "disabled");
      name_err.style.display = "block";
    }
  });
}

let useremail = document.getElementById("email");
let email_err = document.getElementById("email_err");
if (useremail) {
  useremail.addEventListener("input", function (e) {
    let emailpatern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i;
    let value = e.target.value;
    let emailvalidation = emailpatern.test(value);
    if (emailvalidation) {
      submit.removeAttribute("disabled", "disabled");
      email_err.style.display = "none";
    } else {
      submit.setAttribute("disabled", "disabled");
      email_err.style.display = "block";
    }
  });
}
let userpassword = document.getElementById("password");
let password_err = document.getElementById("password_err");
if (userpassword) {
  userpassword.addEventListener("input", function (e) {
    let passwordpatern =
      /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,20}$/i;
    let value = e.target.value;
    let passwordvalidation = passwordpatern.test(value);
    if (passwordvalidation) {
      submit.removeAttribute("disabled", "disabled");
      password_err.style.display = "none";
    } else {
      submit.setAttribute("disabled", "disabled");
      password_err.style.display = "block";
    }
  });
}

var seachinput = document.querySelector("#search");
let Names = document.querySelectorAll(".titles");
if (seachinput) {
  seachinput.addEventListener("input", (e) => {
    let filter = e.target.value;
    filter = filter.toUpperCase();
    for (let i = 0; i < Names.length; i++) {
      let a = Names[i].innerHTML;
      a = a.toUpperCase();
      if (a.indexOf(filter) > -1) {
        Names[i].parentElement.style.display = "block";
      } else {
        Names[i].parentElement.style.display = "none";
      }
    }
  });
}
