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
            taskform.innerHTML +=
                `   <div>
                    <input class="input form-control mt-3 mb-3" type="text" placeholder="Enter your name" required>
                    <input class="input form-control mb-3" type="email" placeholder="Enter your email" required>
                    <input class="input form-control mb-3" type="email" placeholder="Enter your email" required>
                    <button class="btn btn-primary mb-3">Submit</button>
                     </div>`;
            i++;
        }
    }

});