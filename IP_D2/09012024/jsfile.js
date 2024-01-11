// function AddTwoNumbers(num1, num2)
// {
//     let result = num1 + num2;
//     return result;
// }
// const button = document.querySelector("button");
// button.addEventListener('click',onClick);
// function onClick()
// {
//     const num1 = document.querySelector("#first").value;
//     const num2 = document.querySelector("#second").value;
//     const res = AddTwoNumbers(parseInt(num1),parseInt(num2));
//     let result = document.querySelector("#result");
//     result.textContent = num1 + " + "+num2 + " = " +res;
// }

const images = document.querySelectorAll("img");
for (let i=0; i<images.length; i++) {
images[i].addEventListener('click', onClick);
}

function onClick(event) {
    const smallImage = event.currentTarget;
    // const bigImage = document.querySelector(".big");
    // bigImage.classList.remove('big');
    // bigImage.classList.add('small');
    smallImage.classList.remove('small');
    smallImage.classList.add('big');
    }