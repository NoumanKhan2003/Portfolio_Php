let string = "";
let output = document.getElementById("value");
let buttons = document.querySelectorAll(".button");


Array.from(buttons).forEach((button) => {
    button.addEventListener('click', (e) => {
        if (e.target.innerHTML === '=') {
            string = eval(string).toString();
            output.innerHTML = string;
        } else if (e.target.innerHTML === 'Reset') {
            output.innerHTML = string = "";
        } else if (e.target.innerHTML === 'Del') {
            string = string.slice(0, string.length - 1);
            output.innerHTML = string;
        } else {
            string = string + e.target.innerHTML;
            output.innerHTML = string;
        }
    });
});
